__.hash_active['#organization_details'] = ['#pre_loader'];
route["create_new_wlor"] = function () {
  __.fire("wlor_create_user_input");
  previousPage = "";
  window.location.hash = "organization_details";
};

route["organization_details"] = function () {
  __.fill_select_options({
    el: "#organization_name",
    data: __data["agency"],
    value_key: "org_name",
    value_html: "org_name",
  });
  __.fill_select_options({
    el: "#for_fd",
    data: __data["forest_division"],
    value_key: "forest_division_name",
    value_html: "forest_division_name",
  });
  __.fill_select_options({
    el: "#officer_designation",
    data: __data["officer_designation"],
    value_key: "ranks",
    value_html: "ranks",
  });
  __.preload_user_inputs(wlor_user_input);

  $("#organization_name").change(function (e) {
    var selected_rank = $(this).val(),
      rank = _(__data["officer_designation"]).filter(function (x) {
        return x.org_name === selected_rank;
      });


      console.log('>>> a rank  ', selected_rank, ' -- ', rank);
    __.fill_select_options({
      el: "#officer_designation",
      data: rank,
      value_key: "ranks",
      value_html: "ranks",
    });
  });

  init_input_date_format();
  number_length();
  $(".org_next").on("click", function (evt) {
    if (__.is_required_ui()) {
      wlor_user_input = __.save_user_inputs(wlor_user_input);

      if (wlor_user_input.meta.new_item != true) {
        fire("wlor_save");
      } 
      gonxt("input-offence-information");
     }
     
    

    console.log(wlor_user_input);
    console.lo;
    return;
  });

 $('.msl_event_types').hide();
 $('#organization_name').on('change', (e) => {
    var selectedValue = $(e.currentTarget).val();
    
    console.log(selectedValue);
    
    if (selectedValue == "Forest Department") {
       $('.msl_event_types').show(); 
    } 
    else{
      $('.msl_event_types').hide();
    }
});
};
