__.hash_active['#review-section'] = ['#pre_loader'];
route["review-section"] = function () {
  __.preload_user_inputs(wlor_user_input);
  $(".showMe").hide();
  $(".review_next").on("click", function (evt) {
    if (__.is_required_ui()) {
      wlor_user_input = __.save_user_inputs(wlor_user_input);
      fire("wlor_save");
      gonxt("input-officer-information");
    }
  }); 
  
  $(".content-header").on("click", function (event) {
    var show_id = ".tbid-" + $(this).data("index_id");

    $(".showMe").not(show_id).hide();
    $(show_id).toggle();
  });

  $(".content-header").css("cursor", "pointer");
};
