__.hash_active['#report_generation'] = ['#admin'];
route["report_generation"] = function () {
  fire("report_admin_get_all");
  chart_setup();



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

  __.fill_select_options({
    el: "#organization",
    data: __data["agency"],
    value_key: "org_name",
    value_html: "org_name",
  });

  listen("get_all_report_admin", function (event, d_list_data) {
    console.log("Report !! data ?? found..", d_list_data);

    var data_for_table = [];

    var temp_json;
    _.each(d_list_data, function (item) {
      console.log("---------", item);

      var law = _.isUndefined(item.law_violated);
      temp_json = {
        division: item.division,
        district: item.district,
        offence: item.offence,
        prosecution: item.prosecution,
        monthly: item.monthly,
        yearly: item.yearly,
        live: item.live,
        dead: item.dead,
        part_seized: item.part_seized,
        plant_seized: item.plant_seized,
        fate: item.fate,
        disposal: item.disposal,
        sample: item.sample,
        officer: item.officer,
        conservation: item.conservation,
        cities: item.cities,
        iucn: item.iucn,
        offender_details: item.offender_details,
        offender_division: item.offender_division,
        offender_district: item.offender_district,
        seized_item: item.seized_item,
        report_item: item.report_item,
        // division_name: item.division_name,
      };

      data_for_table.push(temp_json);
    });

    table_populate(
      {
        jq_id: "#report_data",
        tbl_squence: [
          "division_name",
          "forest_department",
          "fisheries",
          "navy",
          "police",
          "boarder_gaurd",
          "coast_guard",
          "customes",
          "ciid",
          "total",
        ],
        tbl_titles: {
          division_name: "Division name",
          forest_department: "Forest Department",
          fisheries: "Department of Fisheries",
          navy: "Navy",
          police: "Police",
          boarder_gaurd: "Border Guard",
          coast_guard: "Coast Guard",
          customes: "Customs",
          ciid: "CIID",
          total: "Total",
        },
      },
      d_list_data.division
    );

    chart_populate_bar({
      meta: {
        document_id: "chart_offence_detected_in_divisions",
        title: "Total offence detected in divisions",
        x_tb_col: "division_name",
        y_tb_col: "total",
      },
      data: d_list_data.division,
    });

    table_populate(
      {
        jq_id: "#report_data_district",
        tbl_squence: [
          "district_name",
          "forest_department",
          "fisheries",
          "navy",
          "police",
          "boarder_gaurd",
          "coast_guard",
          "customes",
          "ciid",
          "total",
        ],
        tbl_titles: {
          district_name: "District name",
          forest_department: "Forest Department",
          fisheries: "Department of fisheries",
          navy: "Navy",
          police: "Police",
          boarder_gaurd: "Border Guard",
          coast_guard: "Coast Guard",
          customes: "Customs",
          ciid: "CIID",
          total: "Total",
        },
      },
      d_list_data.district
    );

    chart_populate_bar({
      meta: {
        document_id: "chart_offence_detected_in_district",
        title: "Total offence detected in district",
        x_tb_col: "district_name",
        y_tb_col: "total",
      },
      data: d_list_data.district,
    });

    table_populate(
      {
        jq_id: "#report_data_offence",
        tbl_squence: [
          "offence_type",
          "forest_department",
          "fisheries",
          "navy",
          "police",
          "boarder_gaurd",
          "coast_guard",
          "customes",
          "ciid",
          "total",
        ],
        tbl_titles: {
          offence_type: "Offence type",
          forest_department: "Forest Department",
          fisheries: "Department of Fisheries",
          navy: "Navy",
          police: "Police",
          boarder_gaurd: "Border Guard",
          coast_guard: "Coast Guard",
          customes: "Customs",
          ciid: "CIID",
          total: "Total",
        },
      },
      d_list_data.offence
    );

    chart_populate_bar({
      meta: {
        document_id: "chart_offence_type",
        title: "Offence type",
        x_tb_col: "offence_type",
        y_tb_col: "total",
      },
      data: d_list_data.offence,
    });

    table_populate(
      {
        jq_id: "#report_data_prosecution",
        tbl_squence: [
          "action_type",
          "forest_department",
          "fisheries",
          "navy",
          "police",
          "boarder_gaurd",
          "coast_guard",
          "customes",
          "ciid",
          "total",
        ],
        tbl_titles: {
          action_type: "Action type",
          forest_department: "Forest Department",
          fisheries: "Department of Fisheries",
          navy: "Navy",
          police: "Police",
          boarder_gaurd: "Border Guard",
          coast_guard: "Coast Guard",
          customes: "Customs",
          ciid: "CIID",
          total: "Total",
        },
      },
      d_list_data.prosecution
    );

    chart_populate_bar({
      meta: {
        document_id: "chart_prosecution",
        title: "Prosecution Action Type",
        x_tb_col: "action_type",
        y_tb_col: "total",
      },
      data: d_list_data.prosecution,
    });

    table_populate(
      {
        jq_id: "#report_data_monthly",
        tbl_squence: [
          "month",
          "year",
          "forest_department",
          "fisheries",
          "navy",
          "police",
          "boarder_gaurd",
          "coast_guard",
          "customes",
          "ciid",
          "total",
        ],
        tbl_titles: {
          month: "Month",
          year: "Year",
          forest_department: "Forest Department",
          fisheries: "Department of Fisheries",
          navy: "Navy",
          police: "Police",
          boarder_gaurd: "Border Guard",
          coast_guard: "Coast Guard",
          customes: "Customs",
          ciid: "CIID",
          total: "Total",
        },
      },
      d_list_data.monthly
    );

    chart_populate_bar({
      meta: {
        document_id: "chart_monthly",
        title: "Prosecution Action Type",
        x_tb_col: "month",
        y_tb_col: "total",
      },
      data: d_list_data.monthly,
    });

    table_populate(
      {
        jq_id: "#report_data_yearly",
        tbl_squence: [
          "year",
          "forest_department",
          "fisheries",
          "navy",
          "police",
          "boarder_gaurd",
          "coast_guard",
          "customes",
          "ciid",
          "total",
        ],
        tbl_titles: {
          year: "Year",
          forest_department: "Forest Department",
          fisheries: "Department of Fisheries",
          navy: "Navy",
          police: "Police",
          boarder_gaurd: "Border Guard",
          coast_guard: "Coast Guard",
          customes: "Customs",
          ciid: "CIID",
          total: "Total",
        },
      },
      d_list_data.yearly
    );
    chart_populate_bar({
      meta: {
        document_id: "chart_yearly",
        title: "Yearly incidents recorded by agencies",
        x_tb_col: "year",
        y_tb_col: "total",
      },
      data: d_list_data.yearly,
    });
    table_populate(
      {
        jq_id: "#report_data_live",
        tbl_squence: [
          "species",
          "forest_department",
          "fisheries",
          "navy",
          "police",
          "boarder_gaurd",
          "coast_guard",
          "customes",
          "ciid",
          "total",
        ],
        tbl_titles: {
          species: "Species",
          forest_department: "Forest Department",
          fisheries: "Department of Fisheries",
          navy: "Navy",
          police: "Police",
          boarder_gaurd: "Border Guard",
          coast_guard: "Coast Guard",
          customes: "Customs",
          ciid: "CIID",
          total: "Total",
        },
      },
      d_list_data.live
    );

    chart_populate_bar({
      meta: {
        document_id: "chart_live",
        title: "Live wildlife species seized by agencies",
        x_tb_col: "species",
        y_tb_col: "total",
      },
      data: d_list_data.live,
    });
    table_populate(
      {
        jq_id: "#report_data_dead",
        tbl_squence: [
          "species",
          "forest_department",
          "fisheries",
          "navy",
          "police",
          "boarder_gaurd",
          "coast_guard",
          "customes",
          "ciid",
          "total",
        ],
        tbl_titles: {
          species: "Species",
          forest_department: "Forest Department",
          fisheries: "Department of Fisheries",
          navy: "Navy",
          police: "Police",
          boarder_gaurd: "Border Guard",
          coast_guard: "Coast Guard",
          customes: "Customs",
          ciid: "CIID",
          total: "Total",
        },
      },
      d_list_data.dead
    );

    chart_populate_bar({
      meta: {
        document_id: "chart_dead",
        title: "Dead wildlife species seized by agencies",
        x_tb_col: "species",
        y_tb_col: "total",
      },
      data: d_list_data.dead,
    });
    table_populate(
      {
        jq_id: "#report_data_part",
        tbl_squence: [
          "offence_type",
          "forest_department",
          "fisheries",
          "navy",
          "police",
          "boarder_gaurd",
          "coast_guard",
          "customes",
          "ciid",
          "total",
        ],
        tbl_titles: {
          offence_type: "Offence type",
          forest_department: "Forest Department",
          fisheries: "Department of Fisheries",
          navy: "Navy",
          police: "Police",
          boarder_gaurd: "Border Guard",
          coast_guard: "Coast Guard",
          customes: "Customs",
          ciid: "CIID",
          total: "Total",
        },
      },
      d_list_data.part_seized
    );

    chart_populate_bar({
      meta: {
        document_id: "chart_part_seized",
        title: "Wildlife trophy/body part seized by agencies",
        x_tb_col: "offence_type",
        y_tb_col: "total",
      },
      data: d_list_data.part_seized,
    });
    table_populate(
      {
        jq_id: "#report_data_plant_seized",
        tbl_squence: [
          "offence_type",
          "forest_department",
          "fisheries",
          "navy",
          "police",
          "boarder_gaurd",
          "coast_guard",
          "customes",
          "ciid",
          "total",
        ],
        tbl_titles: {
          offence_type: "Offence Type",
          forest_department: "Forest Department",
          fisheries: "Department of Fisheries",
          navy: "Navy",
          police: "Police",
          boarder_gaurd: "Border Guard",
          coast_guard: "Coast Guard",
          customes: "Customs",
          ciid: "CIID",
          total: "Total",
        },
      },
      d_list_data.plant_seized
    );

    chart_populate_bar({
      meta: {
        document_id: "chart_plant_seized",
        title: "Plant or plant part seized by agencies",
        x_tb_col: "offence_type",
        y_tb_col: "total",
      },
      data: d_list_data.plant_seized,
    });
    table_populate(
      {
        jq_id: "#report_data_fate",
        tbl_squence: [
          "name_of_species",
          "euthanasia",
          "released_in_nature",
          "country_export",
          "private_facility",
          "botanical_garden",
          "public_zoo",
          "rescue_center",
          "safari_park",
          "total",
        ],
        tbl_titles: {
          name_of_species: "Name of species",
          euthanasia: "Euthanasia",
          released_in_nature: "Released in nature",
          country_export: "Return to country of export",
          private_facility: "Sending to approved private facility center",
          botanical_garden: "Sending to botanical garden",
          public_zoo: "Sending to public zoo",
          rescue_center: "Sending to rescue center",
          safari_park: "Sending to safari park",
          total: "Total",
        },
      },
      d_list_data.fate
    );
    chart_populate_bar({
      meta: {
        document_id: "chart_fate",
        title: "Fate of live animal confiscated/siezed",
        x_tb_col: "name_of_species",
        y_tb_col: "total",
      },
      data: d_list_data.fate,
    });
    table_populate(
      {
        jq_id: "#report_data_disposal",
        tbl_squence: [
          "species",
          "court",
          "burried",
          "burnt",
          "evidance",
          "sale",
          "educational_institution",
          "museum",
          "total",
        ],
        tbl_titles: {
          species: "Name of species",
          court: "Sent to court",
          burried: "Burried",
          burnt: "Burnt",
          evidance: "Sample stored as evidence",
          sale: "Sale/ octioned",
          educational_institution: "Educational institution",
          museum: "Museum",
          total: "Total",
        },
      },
      d_list_data.disposal
    );
    chart_populate_bar({
      meta: {
        document_id: "chart_disposal",
        title: "Disposal details of confiscated/siezed specimen(s)",
        x_tb_col: "species",
        y_tb_col: "total",
      },
      data: d_list_data.disposal,
    });

    table_populate(
      {
        jq_id: "#report_data_sample",
        tbl_squence: [
          "species_name",
          "collection_date",
          "sample_code",
          "sent",
          "report_generation",
          "report_generation_date",
          "total",
        ],
        tbl_titles: {
          species_name: "Name of species",
          collection_date: "Date of sample collection",
          sample_code: "Sample code#",
          sent: "Where sent",
          report_generation: "Forensic report generated (yes/no)",
          report_generation_date: "Date of forensic report preparation",
          total: "Total",
        },
      },
      d_list_data.sample
    );
    chart_populate_bar({
      meta: {
        document_id: "chart_sample",
        title: "Sample collection details (confiscated/siezed specimen)",
        x_tb_col: "species_name",
        y_tb_col: "total",
      },
      data: d_list_data.sample,
    });
    table_populate(
      {
        jq_id: "#report_data_officer",
        tbl_squence: [
          "name",
          "agency_name",
          "designation",
          "posting_place",
          "district",
          "total",
        ],
        tbl_titles: {
          name: "Name",
          agency_name: "Agency name",
          designation: "Designation",
          posting_place: "Posting place",
          district: "Districts",
          total: "Total",
        },
      },
      d_list_data.officer
    );
    chart_populate_bar({
      meta: {
        document_id: "chart_officer",
        title: "Detected officers and offence type",
        x_tb_col: "agency_name",
        y_tb_col: "total",
      },
      data: d_list_data.officer,
    });
    table_populate(
      {
        jq_id: "#report_data_conservation",
        tbl_squence: [
          "species_name",
          "total_number",
          "cities_appendix",
          "schedule",
          "iucn_status",
          "total",
        ],
        tbl_titles: {
          species_name: "Name of species",
          total_number: "Total number of specimen",
          cities_appendix: "CITES appendix number",
          schedule: "Wildlife act schedule number",
          iucn_status: "IUCN global status",
          total: "Total",
        },
      },
      d_list_data.conservation
    );
    chart_populate_bar({
      meta: {
        document_id: "chart_conservation",
        title: "Conservation status of siezed Live animal",
        x_tb_col: "species_name",
        y_tb_col: "total",
      },
      data: d_list_data.conservation,
    });
    table_populate(
      {
        jq_id: "#report_data_cities",
        tbl_squence: [
          "start_date",
          "end_date",
          "appendix_i",
          "appendix_ii",
          "appendix_iii",
          "not_listed",
        ],
        tbl_titles: {
          start_date: "Date start",
          end_date: "Date end",
          appendix_i: "CITES appendix I",
          appendix_ii: "CITES appendix II",
          appendix_iii: "CITES appendix III",
          not_listed: "Not listed",
        },
      },
      d_list_data.cities
    );
    chart_populate_bar({
      meta: {
        document_id: "chart_cities",
        title: "CITES Appendices and number of confiscated specimens",
        x_tb_col: "appendix_i",
        y_tb_col: "appendix_iii",
      },
      data: d_list_data.cities,
    });
    table_populate(
      {
        jq_id: "#report_data_iucn",
        tbl_squence: [
          "start_date",
          "end_date",
          "cr",
          "en",
          "vu",
          "nt",
          "lc",
          "unassessed",
        ],
        tbl_titles: {
          start_date: "Date start",
          end_date: "Date end",
          cr: "CR",
          en: "EN",
          vu: "VU",
          nt: "NT",
          lc: "LC",
          unassessed: "Un assessed",
        },
      },
      d_list_data.iucn
    );

    chart_populate_bar({
      meta: {
        document_id: "chart_iucn",
        title: "IUCN global status and number of confiscated specimens",
        x_tb_col: "en",
        y_tb_col: "unassessed",
      },
      data: d_list_data.iucn,
    });
    table_populate(
      {
        jq_id: "#report_data_offender_details",
        tbl_squence: [
          "gps",
          "name",
          "age",
          "fathers_name",
          "present_address",
          "permanent_address",
          "nationality",
          "nid",
          "mobile",
          "reapeted_offender",
          "note",
        ],
        tbl_titles: {
          gps: "GPS location",
          name: "Name",
          age: "Age",
          fathers_name: "Father's name",
          present_address: "Present address",
          permanent_address: "Permanent address",
          nationality: "Nationality",
          nid: "NID#",
          mobile: "Mobile#",
          reapeted_offender: "Repeated offence (yes/no)",
          note: "Note",
        },
      },
      d_list_data.offender_details
    );
    table_populate(
      {
        jq_id: "#report_data_offender_division",
        tbl_squence: [
          "division_name",
          "forest_department",
          "fisheries",
          "navy",
          "police",
          "boarder_gaurd",
          "coast_guard",
          "customes",
          "ciid",
          "total",
        ],
        tbl_titles: {
          division_name: "Division name",
          forest_department: "Forest Department",
          fisheries: "Department of Fisheries",
          navy: "Navy",
          police: "Police",
          boarder_gaurd: "Border Guard",
          coast_guard: "Coast Guard",
          customes: "Customs",
          ciid: "CIID",
          total: "Total",
        },
      },
      d_list_data.offender_division
    );
    table_populate(
      {
        jq_id: "#report_data_offender_district",
        tbl_squence: [
          "district_name",
          "forest_department",
          "fisheries",
          "navy",
          "police",
          "boarder_gaurd",
          "coast_guard",
          "customes",
          "ciid",
          "total",
        ],
        tbl_titles: {
          district_name: "District name",
          forest_department: "Forest Department",
          fisheries: "Department of Fisheries",
          navy: "Navy",
          police: "Police",
          boarder_gaurd: "Border Guard",
          coast_guard: "Coast Guard",
          customes: "Customs",
          ciid: "CIID",
          total: "Total",
        },
      },
      d_list_data.offender_district
    );
    table_populate(
      {
        jq_id: "#report_data_item",
        tbl_squence: [
          "item_name",
          "forest_department",
          "fisheries",
          "navy",
          "police",
          "boarder_gaurd",
          "coast_guard",
          "customes",
          "ciid",
          "total",
        ],
        tbl_titles: {
          item_name: "Name of item",
          forest_department: "Forest Department",
          fisheries: "Department of Fisheries",
          navy: "Navy",
          police: "Police",
          boarder_gaurd: "Border Guard",
          coast_guard: "Coast Guard",
          customes: "Customs",
          ciid: "CIID",
          total: "Total",
        },
      },
      d_list_data.report_item
    );
    table_populate(
      {
        jq_id: "#report_data_seizeditem",
        tbl_squence: [
          "offence_id",
          "detection_method",
          "transport_mode",
          "concelment_method",
          "alleged_country",
          "transition_country",
          "final_destination",
          "reason",
          "inprisonment",
          "fine",
          "total",
        ],
        tbl_titles: {
          offence_id: "Case/offence ID number",
          detection_method: "Detection method",
          transport_mode: "Mode of trasport",
          concelment_method: "Concealment method",
          alleged_country: "Concealment method",
          transition_country: "Country of transit",
          final_destination: "Country of final desitination",
          reason: "Reson for seizure",
          inprisonment: "Inprisonmment (days)",
          fine: "Fine (Taka)",
          total: "Total",
        },
      },
      d_list_data.seized_item
    );
    
    // table_populate(
    //   {
    //     jq_id: "#report_data_divisions",
    //     tbl_squence: ["division_name, forest_department,fisherish, navy, police, boarder_gaurd, coast_guard, customes,ciid, total"],
    //     tbl_titles: {
    //       division_name: "Division",
    //       forest_department:"Forest Department",
    //       fisheries:"Department of fisheries",
    //       navy:"Navy",
    //       police:"Police",
    //       boarder_gaurd:"Boarder Gaurd Bangladesh",
    //       coast_guard:"coast_guard",
    //       customes:"Customes",
    //       ciid:"CIID",
    //       total:"Total",

    //     },
    //   },
    //   d_list_data.division
    // );
  });
  init_input_date_format();

  $(document).ready(function(){
          $('#search').on('click',function(e){

            $.ajax({    
              type: "GET",
              url: "../backend/api/report/filter.php",             
              dataType: "html",                  
              success: function(data){                    
                  $("#report_data_cities").html(data); 
                  //setup_btn();
                 
              }
          });

          });

  });
  /**species list from database */
  // var json_data = {};

  // set_organization_codes();
  
};