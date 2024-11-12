__.hash_active['#add_new_species'] = ['#admin'];
route['add_new_species'] = function (){


  
    
    function add_item(){
        //   console.log(species);
     //     species.static.IUCN = species.static['IUCN (Global)']; 
    
         
         var gstring =$("#pg_"+'add_new_species1').html();
         var edit_tmp = _.template(gstring);
         
         $('#add_select_static_data').html(edit_tmp(_.clone(model_species.data)));     
    }
    
    
    function init_page(){     
        add_item();
    }
    
    
    
    
    init_page();
    
    
    function add_new_species(){
         var tmp_user_input = take_all_inputs_value();
         
         if(_.isEmpty(tmp_user_input) === false 
          && input_required_check()=== true
         ){
          tmp_user_input.image = '';
               fire('species_create', tmp_user_input);      
               
         } 
         else{
               
              console.error('some error');
         }
    
    }
    $('#save').click(function(){
        
         add_new_species();
       // alert("Saved!");
         
    });
    
    };
    
    
    