__.hash_active['#schedule_1'] = ['#access-resource' ];
route["schedule_1"] = function () {
    /** FILTER SEARCH */
    $(document).ready(function () {
        $("#search").keyup(function () {
          search_table($(this).val());
        });
        function search_table(value) {
          $("#employee_table tr").each(function () {
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
  
 