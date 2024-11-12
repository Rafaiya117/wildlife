// species model 
var model_report_admin = {
    meta:{
        id: -9799,
        publish: 'draft',
        created_on: '',
        user_id:'',
        user_name:'',
        model_name: 'report_admin',
        // get_id_url:'../backend/api/species/create.php',
        // save_url:'../backend/api/species/update.php',
        // publish_url:'../backend/api/publish_wlor.php',
        get_url: '../backend/api/report/get_report.php',
        // get_my_url: '../backend/api/get_my_wlor.php',
        type_data:'report_admin',
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


listen('report_admin_get_all', function(){
    model.get_all(model_report_admin);
});


