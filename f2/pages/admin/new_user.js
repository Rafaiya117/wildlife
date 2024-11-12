__.hash_active['#new_user'] = ['#admin'];
route['new_user'] = function () {
  
  function get_new(){
    
      $.ajax({    
        type: "GET",
        url: "../backend/api/registration/get.php",             
        dataType: "html",                  
        success: function(data){                    
            $("#user_management").html(data); 
            setup_btn();
           
        }
    });
   
  }
  get_new();
  function updates(user_id){
      
      $.ajax({    
        type: "POST",
        url: "../backend/api/registration/update.php",             
        data: {id:user_id},                  
        success: function(data){                    
            $("#user_management").html(data); 
            console.log('-----');
           notify_sucess("user approved");
           window.location.hash = 'user_management';
        }
    });
  
    console.log('-----!! called');
    
  }
  function setup_btn(){
    $('.btn-approved').on('click',function(e){
      var user_id = $(e.target).data('id');
      console.log('bton setuip', user_id);  
      updates(user_id);
      
    });
    console.log('bton setuip');
    
  };
   
  };
  