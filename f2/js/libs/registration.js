$(document).ready(function () {

    var json_data={};
    
    var filePath = '../backend/api/organization/get.php';

    $.getJSON(filePath, function (data) {

    
        let arr = [];

        $.each(data, function (index, value) {
            arr.push(value.org_name);
            arrData = data;
        });

        
        arr = Array.from(new Set (arr));
        
     
        $('#organization').empty().append('<option value="">  </option>');
        $.each(arr, function (index, value) {
            
            $('#organization').append('<option value="' + value + '">' + value + '</option>');
        });
                
    });
    
    $('#organization').change(function () {
        let type = this.options[this.selectedIndex].value;
      // console.log(tmp_user_input);
        let filterData = arrData.filter(function(value) {
            return value.org_name === type;
        });

        $('#designation').empty().append('<option value="">  </option>');

        $.each(filterData, function (index, value) {
            
            $('#designation').append('<option value="' + value.ranks + ' ">' + value.ranks +'</option>');
        });

       
    });
  });

    // $(".reg-btn").on("click", function() {
    // //register
    // var name = document.getElementById("name").value;
    // var email = document.getElementById("email").value;
    // var organization = document.getElementById("organization").value;
    // var designation = document.getElementById("designation").value;
    // var phone = document.getElementById("phone").value;
    // var division_id = document.getElementById("division_id").value;
    // var password = document.getElementById("password").value;
    // // Regular Expression For Email
    
    // if (name != '' && email != '' && division_id != '' && organization != '' && designation != '' && phone != '' && password != '') {
    //     //alert("ok");
        
    //         $.ajax({
    //             type: "POST",
    //             url: "../backend/api/registration/create.php",
    //             dataType: "html",
    //             data: {name:name,
    //                 email:email,
    //                 division_id:division_id,
    //                 organization:organization,
    //                 designation:designation,
    //                 phone:phone,
    //                 password:password},
    //                 success: function(data) {
    //                 $("#reg_form").html(data);  
    
    //                 alert("Success!", "Successfully Inserted Data!", "success");
                    
    //             },
    //             error: function() {
    //                 console.log();
    //                 $(".reg-btn").html("");
    //             },
    //         });
    //         //alert("ok");
    //     }
    //      else {
    //        alert("All fields are required.....!");
    //        return false;
    //      }
    //     });
  
  

