__.hash_active["#input-offender-profile"] = ["#pre_loader"];
route["input-offender-profile"] = function () {
  listen("model_offender_list", function (event, offender_list_data) {
    var meta = {
      jq_id: "#tbl_offender_list",
      tbl_squence: [
        "name",
        "accused_company",
        "occupation",
        "fathers_name",
        "mother_name",
        "age",
        "sex",
        "present_address",
        "permanent_address",
        "nid_number",
        "mobile_number",
        "repeated_offender",
        "note",
        "delete",
      ],
      tbl_titles: {
        name: "অভিযুক্তের নাম ",
        accused_company: "অভিযুক্ত প্রতিষ্ঠান",
        occupation: "পেশা",
        fathers_name: "অভিযুক্তের বাবার নাম",
        mother_name: "অভিযুক্তের মায়ের নাম",
        age: "বয়স (বছর)",
        sex: "লিঙ্গ ",
        present_address: "বর্তমান ঠিকানা",
        permanent_address: "স্থায়ী ঠিকানা ",
        nid_number: "জাতীয় পরিচয়পত্র নম্বর ",
        mobile_number: "মোবাইল নম্বর",
        repeated_offender: "অভিযুক্ত অপরাধী কি পূর্বেও একই অপরাধ করেছিলেন?",
        note: "নোট",
        delete: "",
      },
    };

    _.each(offender_list_data, function (item, index) {
      item.delete =
        '<a class="cross delete_item" data-index="' + index + '"> X</a>';
    });

    table_populate(meta, offender_list_data);

    $(".delete_item").click(function (event) {
      var ele_index = parseInt($(event.target).data("index"));
      //user_input.input_offender.splice(ele_index, 1);
      wlor_user_input.offender.splice(ele_index, 1);
      console.log(ele_index, offender_list_data);
      model_update("offender_list", wlor_user_input.offender);
    });
  });

  // if (_.isUndefined(wlor_user_input.offender)) {
  //   wlor_user_input.offender = [];
  // }

  model_update("offender_list", wlor_user_input.offender);

  function add_item_in_offender_list(evt) {
    if (__.is_required_ui() && __.user_has_atleast_one_input()) {
      // if($('#mobile_number').val().length != 11){
      //   alert("Please enter a valid mobile phone number\nদয়া করে একটি সঠিক মোবাইল ফোন নম্বর দিন।");
      // }

      // else{
      var offender_one = __.save_user_inputs({});
      wlor_user_input.offender.push(offender_one.offender);
      model_update("offender_list", wlor_user_input.offender);
      __.empty_input_value();

      // }
    }
  }

  $("#iop_addmore").on("click", add_item_in_offender_list);
  $(".offender_next").on("click", function () {
    add_item_in_offender_list();
    fire("wlor_save");
    gonxt("input-witness-information");
  });
  $(".offender_skip").on("click", function () {
    if (
      confirm(
        "Are you sure you want to skip this? Please click 'Ok'for the next page"
      )
    ) {
      window.location.hash = "input-witness-information";
      gonxt("input-witness-information");
    }
  });
  
  //----------//
  function set_country() {
    __.fill_select_options({
      el: "#nationality",
      data: __data.country,
      value_key: "Name",
      value_html: "Name",
    });
  }
  set_country();
};
