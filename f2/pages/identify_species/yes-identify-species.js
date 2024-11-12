__.hash_active['#yes-identify-species'] = ['#pre_loader'];
route["yes-identify-species"] = function () {

console.log( __data["species"]);

for(var i=0, ilen = __data["species"].length; i < ilen; i++){

  __data["species"][i]['bn_en_name'] = __data["species"][i]['english_name'] +' '+  __data["species"][i]['bangla_name'];
  
}

 console.log( __data["species"]);
__.fill_select_options({
  el: "#edit_species",
  data: __data["species"],
  value_key: "id",
  value_html: "bn_en_name",
});

  $("#yes_identify_species_next").on("click", function (evt) {
    var species_obj = model_get_base_obj("specie");
    var tmp = __.save_user_inputs({});

    var st_spec = _.findWhere(__data["species"], {
      id: parseInt(tmp.last_selected_species.species_id),
    });

    species_obj.static = st_spec;
    wlor_user_input.last_selected_species = _.clone(species_obj);
    console.log("before goto next page!!", wlor_user_input);

    window.location.hash = "#input-rescue-information";
  });
};
