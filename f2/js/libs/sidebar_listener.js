
function hashchange(){

    
    $('a.nav-link').removeClass("active");
        $('.os-padding a.nav-link[href="' + location.hash + '"]').addClass("active222");
        // $('li.nav-item.active').attr("class","nav-item");
       
      
  }

// listen('hash-change',hashchange);