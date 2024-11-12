/*
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
    var gstring = $("#pg_" + "last_select_item_tmpl").html();
    var last_selection_tmp = _.template(gstring);
    $("#static_data_for_last_selected_item").html(
      last_selection_tmp(species.static)
    );
  }

  function init_page() {
    load_speices_with_dynamic_data(wlor_user_input.species_list);
    load_last_selected_item(wlor_user_input.last_selected_species);
  }

  init_page();

  function add_new_species() {
    if (__.is_required_ui()) {
      var item_data = __.save_user_inputs({});

      var selected_species = _.union(
        wlor_user_input.last_selected_species,
        item_data.last_selected_species
      );

      console.log(
        item_data.last_selected_species,
        "selected_species||===>>",
        selected_species
      );
      wlor_user_input.species_list.push(selected_species);
      wlor_user_input.last_selected_species = {};
      empty_all_inputs_value();
      init_page();
    }
    return;
  }

  $(".delete_item").click(function (event) {
    var ele_index = parseInt($(event.target).data("index"));
    wlor_user_input.species_list.splice(ele_index, 1);
    console.log(ele_index, wlor_user_input.last_selected_species);
    $(this).closest("#btnclick").remove();
  });

  $("#rescue_next").on("click", function (evt) {
    add_new_species();
    console.log("stoped");
    return;
    if (wlor_user_input.species_list.length > 1) {
      gonxt("review-section");
      fire("wlor_save");
    }
  });
  $("#szl_addmore").click(function () {
    console.log("--- ---- click");
    add_new_species();
    gonxt("review-section");
    fire("wlor_save");
    window.location.hash = "modal3";
  });

  /** */
