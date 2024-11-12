route['user_tracking'] = function () {
  
    function report_edition(){
      
        $.ajax({    
          type: "GET",
          url: "../backend/api/wlor/get_user_report.php",             
          dataType: "html",                  
          success: function(data){                    
              $("#report_edited").html(data); 
             // setup_btn();
             
          }
      });
     
    }
    report_edition();
    // function updates(user_id){
    
    //     $.ajax({    
    //       type: "POST",
    //       url: "../backend/api/registration/update.php",             
    //       data: {id:user_id},                  
    //       success: function(data){                    
    //           $("#user_management").html(data); 
    //           console.log('-----');
    //          window.location.hash = 'user_management';
    //       }
    //   });
    
    //   console.log('-----!! called');
      
    // }
    // function setup_btn(){
    //   $('.btn-approved').on('click',function(e){
    //     var user_id = $(e.target).data('id');
    //     console.log('bton setuip', user_id);  
    //     updates(user_id);
        
    //   });
    //   console.log('bton setuip');
      
    // };
     
    };
    