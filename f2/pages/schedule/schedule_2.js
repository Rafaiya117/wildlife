__.hash_active['#schedule_2'] = ['#access-resource' ];
route["schedule_2"] = function () {
    /** FILTER SEARCH */
    $(document).ready(function () {
        $("#myInput").keyup(function () {
          search_table($(this).val());
        });
        function search_table(value) {
          $("#employee2_table tr").each(function () {
            var found = "false";
            $(this).each(function () {
              if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                found = "true";
              }
            });
            if (found == "true") {
              $(this).show();
            } else {
              $(this).hide();
            }
          });
          
        }
      });
  
  };
  
 