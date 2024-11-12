__.hash_active["#input-rescue-information"] = ["#pre_loader"];
route["input-rescue-information"] = function () {
  // if(_.isUndefined(wlor_user_input.species_list)){
  //   wlor_user_input.species_list = [];
  // }
  model_update("species_list", wlor_user_input.species_list);

  function add_item_in_species_list(evt) {
    if (__.is_required_ui() && __.user_has_atleast_one_input()) {
      var species_one = __.save_user_inputs({});
      console.table(species_one);
      var specis = _.clone(species_one.last_selected_species);
      specis.static = on_change_specices.static;
      wlor_user_input.species_list.push(specis);
      model_update("species_list", wlor_user_input.species_list);
    }
  }

  listen("model_whole_species_list", function (event, whole_species_list_data) {
    var meta = {
      jq_id: "#tbl_whole_species_list",
      tbl_squence: [
        "species_info_whole",
        "scientific_name",
        "IUCN",
        "IUCN_Bangladesh",
        "CITES",
        "schedule",
        "live_dead",
        "age",
        "sex",
        "quantity",
        "estimated_value",
        "delete",
      ],
      tbl_titles: {
        species_info_whole: "প্রজাতি",
        scientific_name: "বৈজ্ঞানিক নাম",
        IUCN: " আইইউসিএন",
        IUCN_Bangladesh:"আইইউসিএন (বাংলাদেশ)",
        CITES: "সাইটিস",
        schedule: "তফসিল",
        live_dead: "জীবিত/মৃত",
        age: "বয়স",
        sex: "লিঙ্গ",
        quantity: "পরিমাণ <br>(সংখ্যা)",
        estimated_value: "আনুমানিক বাজার <br>মূল্য (টাকা)",
        delete: "",
      },
    };

    console.info("in table ---- !!");
    console.table(whole_species_list_data);

    _.each(whole_species_list_data, function (item, index) {
      item.species_info_whole =
      item.static.english_name + "<br>" + item.static.bangla_name;
      item.IUCN_Bangladesh = item.static.IUCN_Bangladesh;
      item.scientific_name = item.static.scientific_name;
      item.IUCN = item.static.IUCN;
      item.CITES = item.static.CITES;
      item.schedule = item.static.schedule;
      item.quantity = ut(item.quantity);
      item.delete =
        '<a class="cross delete_item" data-index="' + index + '"> X</a>';
    });

    table_populate(meta, whole_species_list_data);

    $(".delete_item").click(function (event) {
      var ele_index = parseInt($(event.target).data("index"));
      wlor_user_input.whole_species_list.splice(ele_index, 1);
      console.log(ele_index, whole_species_list_data);
      model_update("whole_species_list", wlor_user_input.whole_species_list);
    });
  });
  listen(
    "model_bodypart_species_list",
    function (event, bodypart_species_list_data) {
      var meta = {
        jq_id: "#tbl_bodypart_species_list",
        tbl_squence: [
          "species_info_two",
          "scientific_name",
          "IUCN",
          "IUCN_Bangladesh",
          "CITES",
          "schedule",
          "trophy_name",
          "quantity_val",
          "estimated_value_tf",
          "length",
          "width",
          "height",
          "delete",
        ],
        tbl_titles: {
          species_info_two: "প্রজাতি",
          scientific_name: "বৈজ্ঞানিক নাম",
          IUCN: " আইইউসিএন",
          IUCN_Bangladesh:"আইইউসিএন (বাংলাদেশ)",
          CITES: "সাইটিস",
          schedule: "তফসিল",
          trophy_name: "দেহাংশ/ট্রফি/পণ্য এর নাম ",
          quantity_val: " পরিমাণ (ইউনিট)",
          estimated_value_tf: "আনুমানিক বাজার<br> মূল্য (টাকা)",
          length: "দৈর্ঘ্য (সে.মি.) ",
          width: "প্রস্থ (সে.মি.)",
          height: "উচ্চতা (সে.মি.)",
          delete: "",
        },
      };

      console.info(
        "in table ---- !! -->> bodypart_species_list_data",
        _(bodypart_species_list_data[1]).keys()
      );
      console.table(bodypart_species_list_data);

      _.each(bodypart_species_list_data, function (item, index) {
        item.species_info_two =
        item.static.english_name + "<br>" + item.static.bangla_name;
        item.IUCN_Bangladesh = item.static.IUCN_Bangladesh;
        item.scientific_name = item.static.scientific_name;
        item.IUCN = item.static.IUCN;
        item.CITES = item.static.CITES;
        item.schedule = item.static.schedule;
        item.quantity_val =
          ut(item.quantity_nmbr, "nos.", "<br>") +
          ut(item.weight_gm, "gm", "<br>") +
          ut(item.quantity_ml, "ml", "<br>");

        item.delete =
          '<a class="cross delete_item" data-index="' + index + '"> X</a>';
      });

      table_populate(meta, bodypart_species_list_data);

      $(".delete_item").click(function (event) {
        var ele_index = parseInt($(event.target).data("index"));
        wlor_user_input.bodypart_species_list.splice(ele_index, 1);
        model_update(
          "bodypart_species_list",
          wlor_user_input.bodypart_species_list
        );
      });
    }
  );

  model_update("whole_species_list", wlor_user_input.whole_species_list);
  function add_item_in_whole_species_list(evt) {
    if (__.is_required_ui() && __.user_has_atleast_one_input()) {
      var species_whole = __.save_user_inputs({});
      console.table(species_whole);

      var specis_s = _.clone(species_whole.last_selected_species);
      specis_s.static = on_change_specices.static;
      wlor_user_input.whole_species_list.push(specis_s);
      model_update("whole_species_list", wlor_user_input.whole_species_list);
      __.empty_input_value();
      $("#static_data_for_last_selected_item").html("");
    }
  }

  model_update("bodypart_species_list", wlor_user_input.bodypart_species_list);
  function add_item_in_speciesTwo_list(evt) {
    if (__.is_required_ui() && __.user_has_atleast_one_input()) {
      var species_two = __.save_user_inputs({});
      console.table(species_two);

      var specis1 = _.clone(species_two.last_selected_species);
      specis1.static = on_change_specices.static;
      wlor_user_input.bodypart_species_list.push(specis1);
      model_update(
        "bodypart_species_list",
        wlor_user_input.bodypart_species_list
      );
      __.empty_input_value();
      $("#static_data_for_last_selected_item").html("");
    }
  }
  // console.log(__data["species"]);

  for (var i = 0, ilen = __data["species"].length; i < ilen; i++) {
    console.log();
    __data["species"][i]["bangla_name"] =
      __data["species"][i]["bangla_name"] === null
        ? " - "
        : __data["species"][i]["bangla_name"];

    __data["species"][i]["bn_en_name"] =
      __data["species"][i]["english_name"] +
      " " +
      __data["species"][i]["bangla_name"];
  }

  console.log(__data["species"]);
  __.fill_select_options({
    el: "#edit_species",
    data: __data["species"],
    value_key: "id",
    value_html: "bn_en_name",
  });
  $("#edit_species").change(function (evt) {
    var species_obj = model_get_base_obj("specie");
    var tmp = __.save_user_inputs({});

    var st_spec = _.findWhere(__data["species"], {
      id: parseInt(tmp.last_selected_species.species_id),
    });

    species_obj.static = st_spec;
    load_last_selected_item(species_obj);
  });
  ////////
  console.log("after this page!! next page!!", wlor_user_input);
  var on_change_specices = {};
  function load_last_selected_item(species) {
    console.log("--->>", species);
    if (!_(species).isEmpty()) {
      var gstring = $("#pg_" + "last_select_item_tmpl").html();
      var last_selection_tmp = _.template(gstring);
      console.log(species.static);
      on_change_specices = species;
      $("#static_data_for_last_selected_item").html(
        last_selection_tmp(species.static)
      );
    }
  }

  function init_page() {
    load_last_selected_item(wlor_user_input.last_selected_species);
    console.log(">> init_page !!", wlor_user_input);
  }
  init_page();

  function add_spices_table() {
    add_item_in_species_list();
    if (type_ === "body_part") {
      add_item_in_speciesTwo_list();
    } else if (type_ === "whole") {
      add_item_in_whole_species_list();
    }
    __.empty_input_value();
    $("#static_data_for_last_selected_item").html("");
  }

  $("#szl_addmore").on("click", function () {
    add_spices_table();
  });

  $(".rescue_next").on("click", function (evt) {
    add_spices_table();

    fire("wlor_save");
    gonxt("other_seized_item");
  });

  $("#skip_to_other_items").on("click", function () {
    gonxt("other_seized_item");
  });
  window.init_page_this_page = init_page;
  var type_;
  $(document).ready(function () {
    $("#whole_form").hide();
    $("#select_form").hide();
    $("#seizure_form").hide();
    $("#select_form").hide();

    $("#btnw").on("click", function (e) {
      type_ = "whole";
      $(".button-unknown").removeClass("active");
      $(this).addClass("active");

      $("#edit_species").val("");
      $("#static_data_for_last_selected_item").html("");
      $(".sg-form").hide();
      $("#select_form").show();
      $("#whole_form").show();
      //  _.save_user_inputs({});
    });

    $("#btnb").on("click", function (e) {
      type_ = "body_part";
      $(".button-unknown").removeClass("active");
      $(this).addClass("active");
      $("#edit_species").val("");
      $("#static_data_for_last_selected_item").html("");
      $(".sg-form").hide();
      $("#select_form").show();
      $("#seizure_form").show();
      // $("#btn").hide();
    });
  });
  $("#edit_species").select2();

  // Read selected option
  $('#edit_species').click(function(){
      var username = $('#edit_species option:selected').text();
      var userid = $('#edit_species').val();

      //$('#result').html("id : " + userid + ", name : " + username);

  });
};
