// species model 
var model_annual_report = {
    meta:{
        id: -9799,
        publish: 'draft',
        created_on: '',
        user_id:'',
        user_name:'',
        model_name: 'annual_report',
        // get_id_url:'../backend/api/species/create.php',
        // save_url:'../backend/api/species/update.php',
        // publish_url:'../backend/api/publish_wlor.php',
        get_url: '../backend/api/report/get.php',
        // get_my_url: '../backend/api/get_my_wlor.php',
        type_data:'annual_report',
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
    },
    

};


listen('annual_report_get_all', function(){
    model.get_all(model_annual_report);
});


