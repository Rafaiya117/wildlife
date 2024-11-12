$(function() {
    //autocomplete
    $(".auto").autocomplete({
            source: "/species/ajaxRequestData",
            minLength: 1

      });
    });