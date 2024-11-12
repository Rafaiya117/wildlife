__.hash_active['#edit_user'] = ['#admin'];
route['edit_user'] = function (para) {
    

    function user_details(user_id) {

        var getstring = $("#pg_" + 'edit_user1').html();
        var edittemplates = _.template(getstring);
        var user_data = _.find(all_users_data, {id:parseInt(user_id)});
        console.log(user_data, all_users_data);
        $('#edit_user_data').html(edittemplates(user_data));
    }

    function button_init(){
        $('#save_user_data').on('click', function () {  
            var tmp_user_input = take_all_inputs_value();
            
            if (_.isEmpty(tmp_user_input) === false && input_required_check() === true) {

                fire('users_save', tmp_user_input);
                window.location = '#user_management';

            }
            else {
                console.error('some error');
            }

    
    
        });
    }
    function status_updates(btn_id){
        $.ajax({    
          type: "POST",
          url: "../backend/api/users/status.php",             
          data: {
          id:btn_id,  
          },                  
          success: function(data){                    
           console.log('!!!!',data);
          }
      });
    
      console.log('-----!! called');
      
    }
    function update_users_data() {
        
        $('#change_status').on('click', function (e) {  
            var ac = $('#account_active').val();
            var currentStatus = $('#status').val();
            if(ac==="1" && currentStatus === "Activate"){
            $('#account_active').val("0");
            $('#status').val("Deactivated");
            e.preventDefault();
            $("#my_form :input").prop("readonly", true);
            var tmp_user_input = take_all_inputs_value();
            if (_.isEmpty(tmp_user_input) === false && input_required_check() === true) {
                $(this).text("Deactivated");
                fire('users_save', tmp_user_input);
                //window.location.hash ='user_management';
            }
            else {
                console.error('some error');
            }
        }
        if(ac==="0" && currentStatus === "Deactivated"){
            $('#account_active').val("1");
            $('#status').val("Activate");
            e.preventDefault();
            $("#my_form :input").prop("readonly", false);
            $(this).prop("disabled", false);
            var tmp_user_input = take_all_inputs_value();
            if (_.isEmpty(tmp_user_input) === false && input_required_check() === true) {
                $(this).text("Activate");
                fire('users_save', tmp_user_input);
                //window.location.hash = 'user_management';
            }
            else {
                console.error('some error');
            }
        }
    });
}
function initialpage() {
    user_details(para[1]);
    button_init();
    update_users_data();
}
if(_.isEmpty(all_users_data)){
    fire('user_get_all');
}
else{
    initialpage();
}
listen('get_all_users', initialpage);  
};

