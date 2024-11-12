// species model 
var model_species = {
    meta:{
        id: -9799,
        publish: 'draft',
        created_on: '',
        user_id:'',
        user_name:'',
        model_name: 'species',
        get_id_url:'../backend/api/species/create.php',
        save_url:'../backend/api/species/update.php',
        // publish_url:'../backend/api/publish_wlor.php',
        // get_url: '../backend/api/get_wlor.php',
        // get_my_url: '../backend/api/get_my_wlor.php',
        type_data:'species',
    },
    data: {
        id:'',
        bangla_name:'',
        english_name:'',
        scientific_name:'',
        alt_scientific_name:'',
        scientific_ref:'',
        schedule:'',
        g_name:'',
        Sub_group:'',
        Sub_group_bn:'',
        subspecies:'',
        IUCN:'',
        CITES:'',
        type:'',
        trade_for:'',
        image:''  
    }


};


listen('species_save', function(event, input_data){
    // console.log('-->>', data);

    var specis_update = _.clone(model_species);
    specis_update.data = input_data;
    specis_update.meta.id =  input_data.id;
    model.save_server(specis_update);
});


listen('species_create', function(event, input_data){
    // console.log('-->>', data);

    var specis_update = _.clone(model_species);
    specis_update.data = input_data;
    // specis_update.meta.id =  input_data.id;
    model.get_new_id(specis_update);
});
