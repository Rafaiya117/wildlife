var published_wlor,
  wlor_user_input,
  my_published_wlor,
  change_wlor,
  model_wlor_user_input = {
    meta: {
      id: -9799,
      publish: "draft",
      created_on: "",
      user_id: "",
      user_name: "",
      model_name: "wlor",
      get_id_url: "../backend/api/wlor/new_wlor.php",
      save_url: "../backend/api/wlor/save_wlor.php",
      publish_url: "../backend/api/wlor/publish_wlor.php",
      get_url: "../backend/api/wlor/get_wlor.php",
      get_my_url: "../backend/api/wlor/get_my_wlor.php",
      type_data: "wlor_user_input",
      // triggrt to save;
      server_save: "wlor_save",
    },
    reporting: {
      report: {
        no: "",
        date: new Date().toISOString().slice(0, 10),
      },
      officer: {
        name: "",
        officer_designation: "",
        designation:"",
        for_fd:"",
        phone: "",
        email: "",
        organization_name: "",
      },
    },
    case_info: {
      page_hash: "#input-offence-information",
      id: -99,
      case_no: "",
      offence_date: "",
      location_info: {
        location_details:"",
        location_village:"",
        location_moholla:"",
        location_road:"",
        district: "",
        thana_id: "",
        thana_name: "",
        station: {
          fd: "",
          range: "",
          beat: "",
          camp:"",
        },
        gps: {
          lat: "",
          lon: "",
        },
      },
      offence_type: [],
      offence_type_others: "",
      action_taken: [],
      action_taken_others: "",
    },

    law_sections: [],
    investigation_officer: {
      officer_name: "",
      officer_designation: "",
      posting: "",
      organization: "",
      mobile_number: "",
      rank:"",
    },
    last_selected_species: {},
    species_list:[{
      id: "",
      static: {
        id: "",
        name: "",
        scientific_name: "",
        IUCN: "",
        IUCN_Bangladesh:"",
        CITES: "",
        schedule: "",
      }
    },
  ],
    whole_species_list: [
      {
        id: "",
        // static: {
        //   id: "",
        //   name: "",
        //   scientific_name: "",
        //   IUCN: "",
        //   CITES: "",
        //   schedule: "",
        // },
        live_dead: "",
        age: "",
        sex: "",
        quantity: "",
        unit:"",
        estimated_value: "",
        part_whole:"",
      },
    ],
    bodypart_species_list: [
      {
        id: "",
        // static: {
        //   id: "",
        //   name: "",
        //   scientific_name: "",
        //   IUCN: "",
        //   CITES: "",
        //   schedule: "",
        // },
        estimated_value_tf: "",
        trophy_name:"",
        quantity_nmbr:"",
        weight_gm:"",
        quantity_ml:"",
        length: "",
        width: "",
        height: "",
      },
    ],
    offender: [
      {
        name: "",
        occupation:"",
        accused_company:"",
        fathers_name: "",
        mother_name:"",
        nid_number: "",
        nationality: "",
        mobile_number: "",
        age: "",
        sex: "",
        present_address: "",
        permanent_address: "",
        repeated_offender: "",
        note: "",
      },
    ],
    witness: [
      {
        name: "",
        witness_designation:"",
        sex: "",
        present_address: "",
        mobile_number:"",
        note: "",
      },
    ],
    disposal: [
      {
        sl: "",
        orderers_name:"",
        orderers_designation:"",
        mode: "",
        name: "",
        date: "",
        place: "",
        incharge: "",
        incharge_designation:"",
        incharge_workstation:"",
        body_part:"",
      },
    ],
    sample: [
      {
        species_names: "",
        sample_name:"",
        code: "",
        sending_date:"",
        date_collection: "",
        collection_place: "",
        forensic_report_genarated: "",
        forensic_report_date: "",
      },
    ],
    items_seizure_list: [
      {
        type: "",
        brand: "",
        model_no: "",
        reg_no: "",
        tools: "",
        traps: "",
        new_item:"",
        weapon_type: "",
        weapon_brand: "",
        weapon_model: "",
        weapon_reg_no: "",
        
        measurement:{
           measurement_length:'',
            measurement_width:'',
            measurement_height:'',
        },
        location: "",
     
        quantity_number_1:"",
        quantity_gm_1:"",
        quantity_ml_1:"",


      },
    ],
    items_seizure_custodian: {
      name: "",
      designation: "",
      address: "",
      phone: "",
    },
    online_seized_item: {
      description:"",
      location: "",
      name_custodian: "",
      designation_custodian: "",
      custodian_address: "",
      phn_custodian:"",
    },
    others_info: {
      discovering_method: [],
      discovering_method_note: "",
      mode_of_transport: [],
      concealment_method: [],
      concealment_method_note: "",
      alleged_country: "",
      destination_contry: "",
      transition_country: [],
      reason_for_seizure: [],
      penalties: {
        imprisonment: "",
        fine: "",
        note: "",
        other_note:"",
      },
    },
    image_files:[
      

    ],
    notes:[
      {
      additional_note:"",
    },
  ],
  };

listen("wlor_get_new_id", function () {
  model.get_new_id(wlor_user_input);

  console.log("------- .... get id called ... ");
});

listen("wlor_save", function () {
  wlor_user_input.meta.new_item = false;
  model.save_server(wlor_user_input);
});

listen("wlor_publish", function () {
  model.publish_server(wlor_user_input);
});

   /** New for status change */
listen("change_status", function () {
  model.publish_server(wlor_user_input);
});

listen("wlor_get_changes", function () {
  model.get_changes(model_wlor_user_input);
});

/** End */
// get_url: '../backend/api/get_wlor.php',
// get_my_url: '../backend/api/get_my_wlor.php',

listen("wlor_get_all", function () {
  model.get_all(model_wlor_user_input);
});

listen("wlor_my_get_all", function () {
  model.get_all_my(model_wlor_user_input);
});

// listen('wlor_my_get_all', function(){
//     model.get_all_my(wlor_user_input);
// });


listen("get_all_wlor", function (evt, data) {
  var temp_json;
  published_wlor = [];

  _.each(data.data, function (wlor, index) {
    temp_json = JSON.parse(wlor.raw_json);
    temp_json.meta.id = wlor.id;
    published_wlor.push(temp_json);
  });
  // console.table(published_wlor);

  fire("published_wlor_list", [published_wlor]);
});

listen("get_all_my_wlor", function (evt, data) {
  var temp_json;
  my_published_wlor = [];

  _.each(data.data, function (wlor, index) {
    temp_json = JSON.parse(wlor.raw_json);
    temp_json.meta.id = wlor.id;
    my_published_wlor.push(temp_json);
  });

  console.table("who  called ?? get_all_my_wlor", evt, my_published_wlor);

  fire("page_all_my_wlor_list", [my_published_wlor]);
});

// in page
// listen('published_wlor_list', function(evt, data){
//     console.table(data);
// });

listen("wlor_created_id", function (evnt, data) {
  // console.log('=== >> fired event--->> ', evnt, data);
  wlor_user_input.meta.id = data.id;
  fire("wlor_save");
});

listen("wlor_create_user_input", function () {
  wlor_user_input = _.clone(model_wlor_user_input);
  wlor_user_input.whole_species_list = [];
  wlor_user_input.bodypart_species_list = [];
  wlor_user_input.species_list =[];
  wlor_user_input.species_seizure_list = [];
  wlor_user_input.offender = [];
  wlor_user_input.witness = [];
  wlor_user_input.disposal = [];
  wlor_user_input.sample = [];
  wlor_user_input.items_seizure_list = [];
  wlor_user_input.online_seized_item =[];
  wlor_user_input.law_sections = [];
  wlor_user_input.image_file = [];
  wlor_user_input.notes = [];
  wlor_user_input.meta.user_id = 1;
  wlor_user_input.meta.user_name = "Anayet Rashid";
  wlor_user_input.meta.created_on = $.now();
  wlor_user_input.meta.new_item = true;

  console.log("new user input! item is called!", wlor_user_input);
});

listen("published_wlor_bkend", function (e, data) {
  console.log("===>> ( bkend ) ==>", data);
});

function model_get_base_obj(type_of_model) {
  var item = {};
  if (type_of_model === "specie") {
    item = _.clone(model_wlor_user_input.species_list[0]);
  }
  return item;
}

function get_lean_model() {
  var obj = _.clone(model_wlor_user_input);
  obj.whole_species_list = [];
  obj.bodypart_species_list = [];
  obj.species_list = [];
  obj.species_seizure_list = [];
  obj.offender = [];
  obj.witness = [];
  obj.disposal = [];
  obj.sample = [];
  obj.items_seizure_list = [];
  obj.online_seized_item = [];
  obj.law_sections = [];
  obj.meta.user_id = 1;
  obj.meta.user_name = "Lean Model";
  obj.meta.created_on = $.now();
  return obj;
}
