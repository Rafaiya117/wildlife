route["my_wlor_list"] = function () {
  fire("wlor_my_get_all");

  listen("page_all_my_wlor_list", function (event, d_list_data) {
    console.log("data ?? found..", d_list_data);

    var data_for_table = [],
      tmp_json;

    var meta = {
      jq_id: "#tb_my_wlor_list",
      tbl_squence: ['id',"sl", "date" , "organization_name" , "offence_type","district"],
      tbl_titles: {
        id: "Id<br> আইডি",
        sl: "Report no. <br> রিপোর্ট নং",
        date:"Date <br> তারিখ",
        organization_name:"Organization Name <br> সংগঠনের নাম",
        offence_type: "Offence Type <br> অপরাধের ধরণ",
        district:"District <br> জেলা",
        
        
    },
    };
    function get_all_offener_info_from_wlor(offenders) {
      var offender_str = "";
      _.each(offenders, function (offender) {
        offender_str +=
          offender.name +
          " (" +
          offender.age +
          ")<br> Father's Name: " +
          offender.fathers_name +
          " <br>";
      });
      return offender_str;
    }
    // var offence_list = '';
    var tmp_info, tmp_law;
    _.each(d_list_data, function (item) {
      // offence_list = '';

      tmp_info = "";

      if (!_.isEmpty(item.case_info.offence_type)) {
        tmp_info = item.case_info.offence_type.join(", ");
      }
      link = '<a href="#my_case_details/' +
          item.meta.id +
          '">';
      tmp_json = {
        sl:
        link+
          item.case_info.case_no +
          "<br>" +
          "</a>",
          date: link + date_formater(item.case_info.offence_date) + '</a>',
          organization_name: link + item.reporting.officer.organization_name +'</a>',
          district:item.case_info.location_info.district,
          // upazila: item.case_info.location_info.thana_name, 
          id: link + item.meta.id + '</a>',
          offence_type: link + tmp_info + '</a>',
          law: link + tmp_law + '</a>',
          offender_name: link + get_all_offener_info_from_wlor(item.offender) + '</a>',
      };
      data_for_table.push(tmp_json);
    });

    data_for_table = _.sortBy(data_for_table, function(item){return new Date(item.date).getTime() }).reverse();


    table_populate(meta, data_for_table);
  });

  /** FILTER SEARCH */
  $(document).ready(function () {
    $("#myInput").on("keyup", function () {
      var value = $(this).val().toLowerCase();
      $("#tb_my_wlor_list  tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    });
  });

  //   $(document).ready("load",function(){
  //     $("button").click(function(){
  //       var rowCount = $("#tb_my_wlor_list tr").length;
  //       alert(rowCount);
  //     });
  //   });
};
