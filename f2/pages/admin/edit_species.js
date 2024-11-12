__.hash_active['#edit_species'] = ['#admin'];
route['edit_species'] = function (){

    function edit_item(species){
          console.log('edit speices', species);
     //     species.static.IUCN = species.static['IUCN (Global)']; 
         var gstring =$("#pg_"+'edit_species1').html();
         var edit_tmp = _.template(gstring);
         $('#select_static_data').html(edit_tmp(species.static));     
    }
    function init_page(){     
        edit_item(selected_species_for_edit);
    }
    
    init_page();
    function add_new_species(){

         var tmp_user_input = take_all_inputs_value();
         if(_.isEmpty(tmp_user_input) === false 
          && input_required_check()=== true
         ){     
          
               fire('species_save', tmp_user_input);      
               
         } 
         else{
              console.error('some error');
         }
    
    }
    $('#save').click(function(){
        
         add_new_species();
         window.location = '#species-details';
    });
       // alert("Saved!");
         
       $(document).ready(function(){

         $("#but_upload").click(function(){
     
            var fd = new FormData();
            var files = $('#file')[0].files;
            
            // Check file selected or not
            if(files.length > 0 ){
               fd.append('file',files[0]);
    
               $.ajax({
                  url: '../backend/api/species/fileupload.php',
                  type: 'post',
                  data: fd,
                  contentType: false,
                  processData: false,
                  success: function(response){
                     if(response != 0){
                        $("#img").attr("src",response); 
                        $(".preview img").show(); // Display image element
                     }else{
                        alert('file not uploaded');
                     }
                  },
               });
            }else{
               alert("Please select a file.");
            }
         });
     });
    
    };
    
    
    