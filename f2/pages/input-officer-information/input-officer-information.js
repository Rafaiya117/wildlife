__.hash_active["#input-officer-information"] = ["#pre_loader"];
route["input-officer-information"] = function () {
  __.fill_select_options({
    el: "#organization",
    data: __data["agency"],
    value_key: "org_name",
    value_html: "org_name",
  });
  __.fill_select_options({
    el: "#officer_designation",
    data: __data["officer_designation"],
    value_key: "ranks",
    value_html: "ranks",
  });

  __.preload_user_inputs(wlor_user_input);

  $("#organization").change(function (e) {
    var selected_rank = $(this).val(),
      rank = _(__data["officer_designation"]).filter(function (x) {
        return x.org_name === selected_rank;
      });

    __.fill_select_options({
      el: "#officer_designation",
      data: rank,
      value_key: "ranks",
      value_html: "ranks",
    });
  });

  $(".officer_next").on("click", function (evt) {
    if (__.is_required_ui()) {
      wlor_user_input = __.save_user_inputs(wlor_user_input);
      // phone_validation();
      fire("wlor_save");
      gonxt("input-rescue-information");
    }
  });
 // number_length();
};
