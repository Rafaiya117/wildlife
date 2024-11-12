
// Below Function Executes On Form Submit
function ValidationEvent() {
    // Storing Field Values In Variables
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var organization = document.getElementById("organization").value;
    var designation = document.getElementById("designation").value;
    var phone = document.getElementById("phone").value;
    var division_id = document.getElementById("division_id").value;
    var password = document.getElementById("password").value;
    // Regular Expression For Email
    
    if (name != '' && email != '' && division_id != '' && organization != '' && designation != '' && phone != '' && division_id != '') {
        alert("ok");
    }
   else {
    alert("All fields are required.....!");
    return false;
    
    }
}