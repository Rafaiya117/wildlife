route["species_static_details"] = function () {
  console.log("after this page!! next page!!", wlor_user_input);

  function load_last_selected_item(species) {
    if (!_(species).isEmpty()) {
      var gstring = $("#pg_" + "last_select_item_tmpl").html();
      var last_selection_tmp = _.template(gstring);
      console.log(species.static);
      $("#static_data_for_last_selected_item").html(
        last_selection_tmp(species.static)
      );
    }
  }

  function init_page() {
    //load_speices_with_dynamic_data(wlor_user_input.species_list);
    load_last_selected_item(wlor_user_input.last_selected_species);
    console.log(">> init_page !!", wlor_user_input);
  }
  init_page();


  $(".delete_item").click(function (event) {
    var ele_index = parseInt($(event.target).data("index"));
    wlor_user_input.species_list.splice(ele_index, 1);

    $(this).closest("#btnclick").remove();
  });

  $("#next").on("click", function (evt) {

    alert("Are you sure want to go forward?")
  
    window.location.hash = "input-rescue-information";
  });

  window.init_page_this_page = init_page;
};
