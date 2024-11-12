__.hash_active['#input-offence-information'] = ['#pre_loader'];
route["input-offence-information"] = function () {
  __.fill_select_options({
    el: "#district",
    data: __data["district"],
    value_key: "district_name",
    value_html: "district_name",
  });
  __.fill_select_options({
    el: "#upzilla",
    data: __data["upzilla"],
    value_key: "id",
    value_html: "name",
  });
  __.preload_user_inputs(wlor_user_input);

  
  var lat= 24.08657 , lng= 89.8170;


  if(!_.isEmpty(wlor_user_input.case_info.location_info.gps.lat) 
  && !_.isEmpty(wlor_user_input.case_info.location_info.gps.lon)){

    lat = parseFloat(wlor_user_input.case_info.location_info.gps.lat) ; 
    lng = parseFloat(wlor_user_input.case_info.location_info.gps.lon);
    console.log('>> location !! updated!!',lat, lng);
  }

  $("#district").change(function (e) {
    var selected_district = $(this).val(),
      upazilla = _(__data["upzilla"]).filter(function (x) {
        return x.district_name === selected_district;
      });
      console.log('>>> a rank  ', selected_district , ' -- ', upazilla);
    __.fill_select_options({
      el: "#upzilla",
      data: upazilla,
      value_key: "id",
      value_html: "name",
    });
  });

  $("#upzilla").change(function (e) {
    __.$app.find("#thana_name").val($("#upzilla option:selected").text());
  });
  __.fill_select_options({
    el: "#fd",
    data: __data["forest_division"],
    value_key: "forest_division_name",
    value_html: "forest_division_name",
  });
  __.fill_select_options({
    el: "#range",
    data: __data["ranges"],
    value_key: "range_name",
    value_html: "range_name",
  });
  __.preload_user_inputs(wlor_user_input);

  $("#fd").change(function (e) {
    var selected_range = $(this).val(),
    range = _(__data["ranges"]).filter(function (x) {
        return x.forest_division_name === selected_range;
      });
      range = _.uniq(range, function(x){return x.range_name;});
      // range = _.u
      console.log('>>> a  ', selected_range , ' -- ', range);
    __.fill_select_options({
      el: "#range",
      data: range,
      value_key: "range_name",
      value_html: "range_name",
    });
  });

  __.fill_select_options({
    el: "#beat",
    data: __data["ranges"],
    value_key: "beat",
    value_html: "beat",
  });
   __.preload_user_inputs(wlor_user_input);

  $("#range").change(function (e) {
    var selected_beat = $(this).val(),
    beat = _(__data["ranges"]).filter(function (x) {
        return x.range_name === selected_beat;
      });
    beat = _.uniq(beat, function(x){return x.beat; });
      console.log('>>> a   ', selected_beat , ' -- ', beat);
    __.fill_select_options({
      el: "#beat",
      data: beat,
      value_key: "beat",
      value_html: "beat",
    });
  });
  init_input_date_format();
  $(".next").on("click", function (evt) {
    if (__.is_required_ui()) {
      wlor_user_input = __.save_user_inputs(wlor_user_input);
      if (wlor_user_input.meta.new_item == true) {
        wlor_user_input.meta.new_item = false;
        fire("wlor_get_new_id");
      } else {
        fire("wlor_save");
      }

      // gonxt("input-rescue-information");
      gonxt("review-section");
    }
    return;
  });

  show_hide();


  google_map(lat, lng);
  // function digit(){
  //   $('.usd_input').on("click",function(){
  //     var num = parseFloat($(this).val());
  //     var cleanNum = num.toFixed(6);
  //     if(cleanNum<10){
  //       cleanNum = '0'+ cleanNum.toString();
  //     }
  //     $(this).val(cleanNum);
  //   });
    
  // }
  // digit();
  
};
