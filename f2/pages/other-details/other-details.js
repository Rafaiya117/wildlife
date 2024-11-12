__.hash_active['#other-details'] = ['#pre_loader'];
route["other-details"] = function () {
  function set_country_codes() {
    __.fill_select_options({
      el: "#alleged_country",
      data: __data.country,
      value_key: "Name",
      value_html: "Name",
    });
    __.fill_select_options({
      el: "#transition_country",
      data: __data.country,
      value_key: "Name",
      value_html: "Name",
    });
    __.fill_select_options({
      el: "#destination_country",
      data: __data.country,
      value_key: "Name",
      value_html: "Name",
    });
  }
  show_hide();
  set_country_codes();
  __.preload_user_inputs(wlor_user_input);

  if (!_.isEmpty(wlor_user_input.others_info.discovering_method)) {
    $("input[type=checkbox]").each(function (id, ele) {
      if ($(ele, "data-id").val() == "Scanning স্ক্যানিং") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Risk assessment ঝুঁকি যাচাইকরণ") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Random Check দৈবাৎ তল্লাশি") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Sniffer Dog কুকুর তল্লাশি") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Third-party information তৃতীয় পক্ষ থেকে প্রাপ্ত তথ্য") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Physical information সরাসরি পরীক্ষণ") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Patrol টহল") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Cage খাঁচা") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Postal Service ডাকযোগে") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Others-specify অন্যান্য (নির্দিষ্ট করে লিখুন)") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
    });
    $("#note1").val(wlor_user_input.others_info.discovering_method_note);
    $("input[type=checkbox]").each(function (id, ele) {
      if ($(ele, "data-id").val() == "Maritime নৌপথ") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Rail রেলপথ") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Road সড়কপথ") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Air আকাশপথ") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
    });
    $("input[type=checkbox]").each(function (id, ele) {
      if ($(ele, "data-id").val() == "No concelment অ-লুকায়িত") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Postal parcel পোস্টাল পার্সেল") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Luggage লাগেজে বহন") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Carry on body দেহে ধারণ") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
      if ($(ele, "data-id").val() == "Other specify অন্যান্য(নির্দিষ্ট করে লিখুন)") {
        console.log(ele);
        $(ele).prop("checked", "checked");
      }
    });
    $("#note2").val(wlor_user_input.others_info.concealment_method_note);
    $("#alleged_country").val(wlor_user_input.others_info.alleged_country);
    $("#destination_country").val(
      wlor_user_input.others_info.destination_contry
    );
    $("#transition_country").val(
      wlor_user_input.others_info.transition_country
    );
    $("#reseason").val(wlor_user_input.others_info.reason_for_seizure);
    $("#imprisonment").val(wlor_user_input.others_info.penalties.imprisonment);
    $("#fine").val(wlor_user_input.others_info.penalties.fine);
    $("#other_detail_note").val(wlor_user_input.others_info.penalties.note);
    $("#other_note").val(wlor_user_input.others_info.penalties.note);
  }
  $(document).ready(function() {
    $('#reseason').on('change.show', function() {
      $("#show").toggle($(this).val() == 'Others (please specify)');
    }).trigger('change.show');
  });
  $(".other_next").on("click", function (evt) {
    if (__.is_required_ui() && __.user_has_atleast_one_input()) {
      wlor_user_input = __.save_user_inputs(wlor_user_input);
      gonxt("my_wlor_list");
      fire("wlor_save");
    }
    return;
   
  });
  $(".skip").on("click", function () {
    if (confirm("Are you sure you want to skip this? Please click 'Ok'for the next page")) {
      window.location.hash = "other-details";
      gonxt("my_wlor_list");
    }
  });
};


function myFunction() {
  document.getElementById("in4").disabled = true;
}
