__.hash_active["#video_file"] = ["#pre_loader"];
route["video_file"] = function () {
  listen("model_online_seized_item", function (event, online_seized_item_data) {
    var meta = {
      jq_id: "#tbl_online_seized_item",
      tbl_squence: [
        "description",
        "location",
        "name_custodian",
        "designation_custodian",
        "custodian_address",
        "phn_custodian",
        "delete",
      ],
      tbl_titles: {
        description: "বর্ণনা",
        location: "জব্দকরণের স্থান",
        name_custodian: "জিম্মাদার এর নাম",
        designation_custodian: "জিম্মাদার এর পদবি",
        custodian_address: "জিম্মাদার এর ঠিকানা",
        phn_custodian: "জিম্মাদার এর ফোন নম্বর",
        delete: "",
      },
    };

    _.each(online_seized_item_data, function (item, index) {
      item.delete =
        '<a class="cross delete_item" data-index="' + index + '"> X</a>';
    });

    table_populate(meta, online_seized_item_data);

    $(".delete_item").click(function (event) {
      var ele_index = parseInt($(event.target).data("index"));
      wlor_user_input.online_seized_item.splice(ele_index, 1);
      console.log(ele_index, online_seized_item_data);
      model_update("online_seized_item", wlor_user_input.online_seized_item);
    });
  });

  if (_.isUndefined(wlor_user_input.online_seized_item)) {
    wlor_user_input.online_seized_item = [];
  }

  model_update("online_seized_item", wlor_user_input.online_seized_item);

  function add_item_in_seized_item(evt) {
    if (__.is_required_ui() && __.user_has_atleast_one_input()) {
      // if($('#phn_custodian').val().length != 11){
      //   alert("Please enter a valid mobile phone number\nদয়া করে একটি সঠিক মোবাইল ফোন নম্বর দিন।");
      // }

      // else{
      var seizure_item = __.save_user_inputs({});

      wlor_user_input.online_seized_item.push(seizure_item.online_seized);
      model_update("online_seized_item", wlor_user_input.online_seized_item);
      empty_all_inputs_value();
      // }
    }
  }

  $("#addmore").on("click", add_item_in_seized_item);

  $(".next").on("click", function () {
    add_item_in_seized_item();
    fire("wlor_save");
    gonxt("input-offender-profile");
  });
  $(".sample_skip").on("click", function () {
    if (
      confirm(
        "Are you sure you want to skip this? Please click 'Ok'for the next page"
      )
    ) {
      window.location.hash = "input-offender-profile";
      gonxt("input-offender-profile");
    }
  });
};
