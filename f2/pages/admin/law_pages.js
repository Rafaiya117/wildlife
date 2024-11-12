__.hash_active['#law_pages'] = ['#admin'];
route['law_pages'] = function () {

    $(".law_edit_next").on("click", function (evt) {

      var tmp_user_input = take_all_inputs_value();   
      fire('law_save', tmp_user_input);
      //window.location.hash = 'law_edit';
      }); 


    $(".content-header").on("click", function (event) {
        var show_id = ".tbid-" + $(this).data("index_id");
    
        $(".showMe").not(show_id).hide();
        $(show_id).toggle();
      });
    
      $(".content-header").css("cursor", "pointer");
};
var selected_law = {};