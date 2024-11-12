route["input-seizure-list"] = function () {
  listen("model_seizure_list", function (event, seizure_list_data) {
    var meta = {
      jq_id: "#tbl_seizure_list",
      tbl_squence: [
        "sl",
        "quantity",
        "trophy_name",
        "name",
        "weight",
        "estimated_value",
        "length",
        "width",
        "height",
        "delete",
      ],
      tbl_titles: {
        sl: "ক্রমিক নং",
        quantity: "পরিমাণ",
        trophy_name: "দেহাংশ / ট্রফি / পণ্য এর নাম ",
        name: "প্রজাতির নাম",
        weight: "ওজন (গ্রাম)",
        estimated_value: "আনুমানিক বাজার মূল্য (টাকা)",
        length: "দৈর্ঘ্য (সে.মি.) ",
        width: "প্রস্থ (সে.মি.)",
        height: "উচ্চতা (সে.মি.)",
        delete: "",
      },
    };

    _.each(seizure_list_data, function (item, index) {
      item.delete =
        '<a class="cross delete_item" data-index="' + index + '"> X</a>';
    });

    table_populate(meta, seizure_list_data);

    $(".delete_item").click(function (event) {
      var ele_index = parseInt($(event.target).data("index"));
      // user_input.input_seizure.splice(ele_index, 1);
      wlor_user_input.species_seizure_list.splice(ele_index, 1);
      console.log(ele_index, seizure_list_data);
      model_update("seizure_list", wlor_user_input.species_seizure_list);
    });
  });

  //   if (_.isUndefined(wlor_user_input.species_seizure_list)) {
  //     wlor_user_input.species_seizure_list = [];
  //   }

  model_update("seizure_list", wlor_user_input.species_seizure_list);

  function add_item_in_seizure_list(evt) {
    if (__.is_required_ui()) {
      var species_seizure_item = __.save_user_inputs({});

      wlor_user_input.species_seizure_list.push(
        species_seizure_item.species_seizure
      );
      model_update("seizure_list", wlor_user_input.species_seizure_list);
      empty_all_inputs_value();
    }
  }

  $("#szl_addmore").on("click", add_item_in_seizure_list);
  var seizure_array = [];
  seizure_array = _.map(wlor_user_input.species_list, function(e, ind){ return e.static });

  console.log(seizure_array);

  for(var i=0, ilen = seizure_array.length; i < ilen; i++){

    seizure_array[i]['bn_en_name'] = seizure_array[i]['bangla_name'] +' '+  seizure_array[i]['english_name'];
 }

  __.fill_select_options({
       el: "#name",
       data: seizure_array,
       value_key: "bn_en_name",
       value_html: "bn_en_name" ,
     });

  $("#seizure_next").on("click", function () {
    add_item_in_seizure_list();

    fire("wlor_save");
    gonxt("input-offender-profile");
  });
};
