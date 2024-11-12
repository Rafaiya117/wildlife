__.hash_active['#add_user'] = ['#admin'];
route['add_user'] = function (){

  function add_item(){
       
           var gstring =$("#pg_"+'add_user1').html();
         var edit_tmp = _.template(gstring);
       //  console.log('000000',model_users);
         $('#add_select_user').html(edit_tmp(_.clone(model_users.data)));    

    }
    
    
    function init_page(){     
        add_item();
    }
    
    
    
    
    init_page();
    
    
    function add_new_users(){
         var tmp_user_input = take_all_inputs_value();
         
         if(_.isEmpty(tmp_user_input) === false 
          && input_required_check()=== true
         ){
         // tmp_user_input.image = '';
               fire('users_create', tmp_user_input);      
               window.location.hash = 'new_user';
         } 
         else{
              console.error('some error');
         }
    
    }
    $('#save_user').click(function(){
        
         add_new_users();
       // alert("Saved!");
         
    });
    
    };
    
    
    