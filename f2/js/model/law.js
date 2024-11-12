// species model 

var model_law = {
    meta:{
        id: -9799,
        publish: 'draft',
        created_on: '',
        user_id:'',
        user_name:'',
        model_name: 'law',
        get_id_url:'../backend/api/law/get.php',
        save_url:'../backend/api/law/update.php',
        type_data:'law',
    },
    data: {
        id:'',
        law_id:'',
        law_name:'',
        Section:'',
        Sub_section:'',
        law_details:''  
    }
 
};

listen('law_save', function(event, input_data){
    // console.log('-->>', data);

    var law_update = _.clone(model_law);
    law_update.data = input_data;
    law_update.meta.id =  input_data.id;
    model.save_server(law_update);
});



