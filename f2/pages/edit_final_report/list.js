route['list'] = function (){
    fire('wlor_get_all');

    listen('published_wlor_list', function(event, d_list_data){
        console.log('data ?? found..', d_list_data);


        var data_for_table = [], tmp_json;


        var meta = {
            jq_id: '#tb_wlor_all_list',
            tbl_squence: ["sl", "date" , "organization_name" , "offence_type","district"],
            tbl_titles: {
                sl: "Report no. <br> রিপোর্ট নং",
                date:"Date <br> তারিখ",
                organization_name:"Organization Name <br> সংগঠনের নাম",
                offence_type: "Offence Type <br> অপরাধের ধরণ",
                district:"District <br> জেলা",
                
                
            }
        };
        function get_all_offener_info_from_wlor(offenders){
            var offender_str = '';
            _.each(offenders, function(offender){

                offender_str += offender.name+'('+ offender.age +')<br> Father\'s Name: '+ offender.fathers_name+' <br>'
            });
            return offender_str;
            
        }
        // var offence_list = '';
        _.each(d_list_data, function(item){
            // offence_list = ''; 
            var info = _.isUndefined(item.case_info.offence_type)?'':item.case_info.offence_type.join(',<br>');
            var law = _.isUndefined(item.case_info.law_sections)?'':item.case_info.law_sections.join(', ');


            tmp_json = {
                sl: '<a href="#edit_final_report/'+item.meta.id+'">' 
                    + item.case_info.case_no +'<br>'
                    + '</a>',
                date: date_formater(item.case_info.offence_date),
                organization_name:item.reporting.officer.organization_name,
                district:item.case_info.location_info.district,
                // upazila:item.case_info.location_info.thana_name,   
                id: item.meta.id,
                offence_type: info,
                law: law,
                offender_name: get_all_offener_info_from_wlor(item.offender) ,
            }
            data_for_table.push(tmp_json);

        });
    
        table_populate(meta, data_for_table);

    });

   /**FILTER SEARCH */
    $(document).ready(function(){
        $("#wlor").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#tb_wlor_all_list tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
            
      // $(document).ready("load",function(){
      //   $("button").click(function(){
      //     var rowCount = $("#tb_wlor_all_list tr").length;
      //     alert(rowCount); 
      //   });
      // });

  
};