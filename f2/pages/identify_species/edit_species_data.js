__.hash_active['#edit_species_data'] = ['#pre_loader'];
route["edit_species_data"] = function () {
    console.log("after this page!! next page!!", wlor_user_input);
  
    function load_speices_with_dynamic_data(species_list) {
      console.log(species_list);
      if (_(species_list).isEmpty()) {
        $("#dynamic_data_for_last_selected_item").hide();
        return;
      }
      var gstring = $("#pg_" + "speices_with_dynamic_data_tmpl").html();
      var last_selection_tmp = _.template(gstring);
      var html_push = "";
      _.each(species_list, function (species) {
        html_push += last_selection_tmp(species);
      });
      $("#dynamic_data_for_last_selected_item").html(html_push);
    }
  
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
      load_speices_with_dynamic_data(wlor_user_input.species_list);
      load_last_selected_item(wlor_user_input.last_selected_species);
      console.log(">> init_page !!", wlor_user_input);
    }
    init_page();
   
    $(".delete_item").click(function (event) {
      var ele_index = parseInt($(event.target).data("index"));
      wlor_user_input.species_list.splice(ele_index, 1);
  
      $(this).closest("#btnclick").remove();
    });
  
    $("#data_all").on("click", function (evt) {
     // add_new_species();
      console.log("why I am not goin forward?? ");
  
      if (wlor_user_input.species_list.length > 0) {
        gonxt("review-section");
        fire("wlor_save");
        // fire("wlor_save");
      } else {
        __.notify_error("Please Add atleast one specie.");
      }
    });
  
    $("#addmore_species").click(function () {
          window.location.hash = "modal3";
    });
  
    window.init_page_this_page = init_page;
  };
  