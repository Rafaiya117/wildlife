__.hash_active["#other_seized_item"] = ["#pre_loader"];
route["other_seized_item"] = function () {
  listen("model_seized_list", function (event, seized_list_data) {
    var meta = {
      jq_id: "#tbl_other_seized_list",
      tbl_squence: [
        "seized_item",
        "item_details",
        "quantity",
        "measurement",
        "seizure_location",
        "name",
        "designation",
        "address",
        "phone",
        "delete",
      ],
      tbl_titles: {
        seized_item: "জব্দকৃত  জিনিস",
        item_details: "জিনিসের বিবরণ",
        quantity: "পরিমান",
        measurement: "পরিমাপ",
        seizure_location: "জব্দকরণের স্থান",
        name: "জিম্মাদার-এর নাম",
        designation: "জিম্মাদার-এর উপাধি",
        address: "জিম্মাদার-এর ঠিকানা",
        phone: "ফোন নম্বর",
        delete: "",
      },
    };
    var t_seized_list_data = [],
      temp;

    for (i = 0, ilen = seized_list_data.length; i < ilen; i++) {
      temp = seized_list_data[i];
      temp.item_details = seized_list_data[i].weapon_type;

      temp.quantity =
        ut(seized_list_data[i].quantity_number_1, "nos.", "<br>") +
        ut(seized_list_data[i].quantity_gm_1, "gm", "<br>") +
        ut(seized_list_data[i].quantity_ml_1, "ml", "<br>");

      // var taken_two = $("#quantity_gm_1").val();
      // if(seized_list_data[i].quantity_gm_1 === taken_two){
      //   temp.quantity = seized_list_data[i].quantity_gm_1+' gm';
      // }

      temp.measurement =
        ut(seized_list_data[i].measurement_lenght, "cm", " X ") +
        ut(seized_list_data[i].measurement_width, "cm", " X ") +
        ut(seized_list_data[i].measurement_height, "cm");

      temp.name = seized_list_data[i].items_seizure_custodian.name;
      temp.designation =
        seized_list_data[i].items_seizure_custodian.designation;
      temp.address = seized_list_data[i].items_seizure_custodian.address;
      temp.phone = seized_list_data[i].items_seizure_custodian.phone;

      t_seized_list_data.push(temp);
    }

    _.each(t_seized_list_data, function (item, index) {
      item.delete =
        '<a class="cross delete_item" data-index="' + index + '"> X</a>';
    });

    table_populate(meta, t_seized_list_data);
    console.table(t_seized_list_data);

    $(".delete_item").click(function (event) {
      var ele_index = parseInt($(event.target).data("index"));
      //user_input.input_seized_item.splice(ele_index, 1);
      wlor_user_input.items_seizure_list.splice(ele_index, 1);
      console.log(ele_index, t_seized_list_data);
      model_update("seized_list", wlor_user_input.items_seizure_list);
    });
  });

  // if (_.isUndefined(wlor_user_input.items_seizure_list)) {
  //   wlor_user_input.items_seizure_list = [];
  // }

  model_update("seized_list", wlor_user_input.items_seizure_list);

  function add_item_in_seized_list(evt) {
    if (__.is_required_ui() && __.user_has_atleast_one_input()) {
      var seizured_item_one = __.save_user_inputs({});
      wlor_user_input.items_seizure_list.push(seizured_item_one.seizured_item);
      model_update("seized_list", wlor_user_input.items_seizure_list);
      __.empty_input_value();
    }
  }
  $('.my_div').hide();
  $('#seized_item').on('change', (e) => {
     var selectedValue = $(e.currentTarget).val();
     
     console.log(selectedValue);
     
     if (selectedValue == "others") {
        $('.my_div').show(); 
     } 
     else{
       $('.my_div').hide();
     }
 });

  $("#osi_addmore").on("click", add_item_in_seized_list);

  $(".seized_next").on("click", function () {
    add_item_in_seized_list();
    fire("wlor_save");
    gonxt("video_file");
  });

  $(".sample_skip").on("click", function () {
    if (
      confirm(
        "Are you sure you want to skip this? Please click 'Ok'for the next page"
      )
    ) {
      window.location.hash = "input-offender-profile";
      gonxt("input-offender-profile");

      // other_seized_item
    }
  });
};
