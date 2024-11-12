
    setTimeout(function() {
    $('.lawerrmsg').fadeOut('fast');
    }, 5000);
     $(document).ready(function(){
      $("input[name$='optradio']").click(function(){
      var radio_value = $(this).val();
      if(radio_value == 'Yes'){
       //$("#AddMoreSpeciesAlert").modal('show');
        $('#AddMoreSpeciesAlert').modal({
           backdrop: 'static',
           keyboard: false
    })
      }
      });
     
    });
