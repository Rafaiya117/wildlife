route["wildlife_law"] = function () {
  $(".content-header").on("click", function (event) {
    var show_id = ".tbid-" + $(this).data("index_id");

    $(".showMe").not(show_id).hide();
    $(show_id).toggle();
  });

  $(".content-header").css("cursor", "pointer");
};
