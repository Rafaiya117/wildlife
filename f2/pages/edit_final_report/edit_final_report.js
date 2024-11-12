route['edit_final_report'] = function (para) {
    function case_details() {
        var getstring = $("#pg_" + "edit_final_report_tmpl").html();
        var mytemplates2 = _.template(getstring);
        $("#edit_datas").html(mytemplates2(wlor_user_input));
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
            case_details();
          }
        
    
        
      }
    
      __.page_listen("published_wlor_list", function (event, data_json) {
        find_case(para[1]);
        case_details();
    
        // console.log("my_case_details", para, data_json);
      });
      initialpage();

    function get_new_wlor(){
    
        $.ajax({    
          type: "GET",
          url: "../backend/api/wlor/get_for_edit.php",             
          data: "json",                  
          success: function(data){                    
            $('.permission').html(data);
             
          }
      });
     
    }
    get_new_wlor();

    
    $(document).on("click","#id",function(e){
      e.preventDefault();
      var query = window.location.hash.substring(1);
      var vars = query.split("/");
      var ID= vars[1];
      $.ajax({    
        type: "POST",
        url: "../backend/api/wlor/update_wlor.php",   
        dataType:"json",          
        data:{
          id:ID,
        },                  
        success: function(data){   
            console.log('updated!! ?? ', data);
            window.location.hash = 'dashboard';
            __.notify("WOR has been permitted for editing. <br> Orignal Post creator will get it in his 'MY WOR'. ", 'sucess');
            
        }
    });
    
  });

};

