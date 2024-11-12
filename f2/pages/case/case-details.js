__.hash_active['#case-details'] = ['#pre_loader'];
route['case-details'] = function (para) {


   function init_fileupload(){
      $("#but_upload").click(function(){
  console.log('111111 image');
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
                console.log('000')
                  if(response != 0){
                    response = response.trim();
                    // $("#img").attr("src",response); 
                    //$(".preview img").show(); // Display image element
                     //wlor_user_input = __.save_user_inputs(wlor_user_input);
                     wlor_user_input.image_files.push(
                      {
                        name:response,
                        url:'../fileupload/' + response,
                      }
                     );
                     fire("wlor_save");
                     console.log(response);
                     find_case(para[1]);
                     case_details(para[1]);
                  }else{
                     alert('file not uploaded');
                  }
               },
            });
         }else{
            alert("Please select a file.");
         }
      });
   }
  
    function case_details() {
        var getstring = $("#pg_" + "case-details-1").html();
        var mytemplates2 = _.template(getstring);
        
        
        $("#datas").html(mytemplates2(wlor_user_input));
        init_fileupload();
        $('#download').on('click',download_pdf);
        $('#save').on("click", function (evt) {
          if(!_.isEmpty($('#additional_note').val())){
            var data_get = '<b>'+localStorage.name + '</b> ' + new Date().toISOString().split('T')[0] +' <br>' + $('#additional_note').val();
            wlor_user_input.notes.push(data_get);
            fire("wlor_save");

            listen('wlor_saved', function(){
              fire("wlor_get_all");
            })
            

          }});
      }
    
      function find_case(case_id) {
        var json_case_infos = _.find(published_wlor, function (json) {
          return json.meta.id == case_id;
        });
        wlor_user_input = _.create(get_lean_model(), json_case_infos);

      }
    
      function initialpage() {
        // if(){}
        
          fire("wlor_get_all");
          if (
            _(wlor_user_input).isObject() &&
            _(wlor_user_input.meta).isObject() &&
            wlor_user_input.meta.id == para[1]
          ) {
            find_case(para[1]);
            case_details(para[1]);
          }
          
    
        
      }
    
      __.page_listen("published_wlor_list", function (event, data_json) {
        find_case(para[1]);
        case_details();
    
      //   // console.log("my_case_details", para, data_json);
      });
      initialpage();

 

    function download_pdf(){

      console.log('donlaod pdf ?????');
       var html_content = $("#js_main_container div.content-wrapper").html();
    

       $.post('../backend/mpdf/pdf_builder.php', {
        html_content: html_content,
        case_detail: wlor_user_input.meta.id
    }, 
        function(data){
            console.log(data, '--->>> ',data.length);
            
    
            var link=document.createElement('a');
            link.href= '../'+data.uri;
            link.download =  data.filename;
            link.click();
       });

        
    }

    window.download_pdf = download_pdf;
    

   


    $(document).ready(function() {
        $("a.scrollLink").click(function(event) {
            event.preventDefault();
            $("html, body").animate({
                scrollTop: $($(this).attr("href")).offset().top
              }, 500);
          });
      });
  
     

$('tbody:not(:has(*))').closest('table').hide();

};

