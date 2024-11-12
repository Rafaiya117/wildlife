$(document).ready(function(){
    function check_login_status(){
        if(!_.isEmpty(localStorage['jwt']) && !_.isEmpty(localStorage['uuid']) && !_.isEmpty(localStorage['rx_id'])){
            window.location = '../f2/';
            // notify_sucess("Successful");
        }else{
            localStorage.clear();
            
        }
    }
    function after_login(login_data){
        console.log('--- ---- ---- Login', login_data);
        if(!_.isEmpty(login_data)
            &&
            !_.isEmpty(login_data.jwt)
            &&
            !_.isEmpty(login_data.uuid)){
            localStorage['jwt'] = login_data.jwt;
            localStorage['uuid'] = login_data.uuid;
            localStorage['name'] = login_data.name;
            localStorage['rx_id'] = login_data.rx_id;
            check_login_status();
        }else{
            notify_error("Worng username / Password.");
        }
    }
            

    

    check_login_status();
    
    $('.log-btn').click(function() {
        var username = $('#username').val(), 
        password = $('#password').val(); 
        if(!_.isEmpty(username) && ! _.isEmpty(password) && username.length > 4){
            $.post('../backend/login/login.php', 
                {username: username, password: password},
                after_login).fail(function(){
                    notify_error("Worng username / Password.");
                });
                notify_sucess("Checking Authentication Status.");
                 
        }else{                    
            $('.log-status').addClass('wrong-entry');
            $('.alert').fadeIn(500);
            setTimeout("$('.alert').fadeOut(1500);", 3000);
        }
    });

    $('.form-control').keypress(function() {
        $('.log-status').removeClass('wrong-entry');
    });

});