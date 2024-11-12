__.hash_active["#input-witness-information"] = ["#pre_loader"];
route["input-witness-information"] = function () {
  listen("model_witness_list", function (event, witness_list_data) {
    var meta = {
      jq_id: "#tbl_witness_list",
      tbl_squence: [
        "name",
        "witness_designation",
        "sex",
        "present_address",
        "mobile_number",
        "note",
        "edit",
      ],
      tbl_titles: {
        name: "নাম",
        sex: "লিঙ্গ",
        witness_designation: "পদবি",
        present_address: "ঠিকানা ",
        mobile_number: "মোবাইল নম্বর",
        note: "নোট ",
        edit: "",
      },
    };

    _.each(witness_list_data, function (item, index) {
      item.edit =
        '<a class="cross delete_item" data-index="' + index + '"> X</a>';
    });
    table_populate(meta, witness_list_data);

    $(".delete_item").click(function (event) {
      var ele_index = parseInt($(event.target).data("index"));
      wlor_user_input.witness.splice(ele_index, 1);
      console.log(ele_index, witness_list_data);
      model_update("witness_list", wlor_user_input.witness);
    });
  });

  //  if(_.isUndefined(wlor_user_input.witness)){
  //       wlor_user_input.witness = [];
  //  }

  model_update("witness_list", wlor_user_input.witness);

  function add_item_in_witness_list(evt) {
    if (__.is_required_ui() && __.user_has_atleast_one_input()) {
      var witness_one = __.save_user_inputs({});
      wlor_user_input.witness.push(witness_one.witness);
      model_update("witness_list", wlor_user_input.witness);
      __.empty_input_value();
    }
  }

  $("#iwi_addmore").on("click", add_item_in_witness_list);

  $(".witness_next").on("click", function () {
    add_item_in_witness_list();
    fire("wlor_save");
    gonxt("input-sample-collection");
  });

  $(".button1").on("click", function () {
    if (
      confirm(
        "Are you sure you want to skip this? Please click 'Ok'for the next page"
      )
    ) {
      // if(_.isUndefined(user_input.input_withness)){
      //      user_input.input_withness = [];
      // }
      if (_.isUndefined(wlor_user_input.witness)) {
        wlor_user_input.witness = [];
      }

      window.location.hash = "input-sample-collection";
      gonxt("input-sample-collection");
    } else {
      return false;
    }
  });
};
