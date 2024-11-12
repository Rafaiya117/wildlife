// users model 
var all_users_data = [],
    last_selected_user_edit = -1, 
    model_users = {
    meta:{
        id: -9799,
        publish: 'draft',
        created_on: '',
        user_id:'',
        user_name:'',
        model_name: 'users',
        get_id_url:'../backend/api/users/create.php',
        save_url:'../backend/api/users/update.php',
        // publish_url:'../backend/api/publish_wlor.php',
        get_url: '../backend/api/users/get.php',
        // get_my_url: '../backend/api/get_my_wlor.php',
        type_data:'users',
    },
    data: {
        id:'',
        name:'',
        organization:'',
        division_id:'',
        designation:'',
        email:'',
        phone:''  
    }


};


listen('user_get_all', function(){
    model.get_all(model_users);
});

listen('get_all_users', function(e, data){
    all_users_data = data;
   
});

listen('users_save', function(event, input_data){
    console.log( 'users saved called!! -->>', input_data);

    var users_update = _.clone(model_users);
    users_update.data = input_data;
    users_update.meta.id =  input_data.id;
    model.save_server(users_update);
});


listen('users_create', function(event, input_data){
    // console.log('-->>', data);

    var users_update = _.clone(model_users);
    users_update.data = input_data;
    // specis_update.meta.id =  input_data.id;
    model.get_new_id(users_update);
});
