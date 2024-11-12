$(document).ready(function () {
    $(".identifyspecies").change(function () {
        var species_id = this.value;
        if (species_id != '') {
            $.ajax({
                type: 'get',
                url: '/wlors/scientific_name/' + species_id,
                success: function (data)
                {
                    $(".static_data").hide();
                    $("#commentForm").html(data);
                }
            });

        }
    });
});

$('.trash').click(function(){
//alert('hi');    
var id=$(this).data('id');
//alert(id);
$('#modalDelete').attr('href','removespecies?id='+id);
})

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