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
                    $("#commondata").html(data);
                }
            });

        }
    });
});

$(document).ready(function(){
    var x = 1; //Initial field counter is 1
       var other = 'other_'+x;
   var maxField = 50; 
   var addButton = $('.add_button');
   var wrapper = $('.field_wrapper'); 
   var fieldHTML = '<div class="row m-b-20">';
   fieldHTML +='<div class="col-xs-2"><select name="trade[]" required class="sslt_Field trade-form-control classtrade1">';
   fieldHTML +='<option value="">Live/Dead</option>';
       fieldHTML +='<option value="Live" name="Live_'+x+'">Live</option>';
       fieldHTML +='<option value="Dead" name="Dead_'+x+'">Dead</option>';    
   fieldHTML +='</select></div>';
   fieldHTML +='<div class="col-xs-2"><input type="text" name="trade_other[]" class="trade-form-control other_'+x+'" value="" style="display:none;"/><input type="hidden" name="other_'+x+'" id="other_'+x+'_id" value="0"/></div>';
   fieldHTML +='<div class="col-xs-2"><input type="text" required name="quantity[]" class="trade-form-control" value=""/></div>'; //New input field html
   fieldHTML +='<div class="col-xs-2"><input type="text"  name="dimension[]" class="trade-form-control" value=""/></div>';
   fieldHTML +='</div><a href="javascript:void(0);" class="remove_button remove-field-img" title="Remove field"><i class="fa fa-minus-circle" aria-hidden="true"></i></a></div>';
  
        //Once add button is clicked
   $(addButton).click(function(){
       //Check maximum number of input fields
       if(x < maxField){
           x = $(".sslt_Field").length;
           console.log($(".sslt_Field").length); 
           $(wrapper).append(
              '<div class="row m-b-20"><div class="col-xs-2">'+
               '<select name="trade[]" required class="sslt_Field trade-form-control classtrade1">'+
                   '<option value="">Live/Dead</option>'+
                    
                   '<option value="Live" name="Live_'+x+'">Live</option>'+
                    
                   '<option value="Dead" name="Dead_'+x+'">Dead</option>'+
                    
                                       '<option value="other_'+x+'" name="other_'+x+'">Other</option>'+
                   '</select></div>'+
                   '<div class="col-xs-2"><input type="text" name="trade_other[]" class="trade-form-control other_'+x+'" value="" style="display:none;"/></div>'+
                   '<div class="col-xs-2"><input type="text" required name="quantity[]" class="trade-form-control" value=""/></div>'+
                   '<div class="col-xs-2"><input type="text" name="dimension[]" class="trade-form-control" value=""/></div>'+
                   '<a href="javascript:void(0);" class="remove_button remove-field-img" title="Remove field"><i class="fa fa-minus-circle" aria-hidden="true"></i></a></div>'
                   
           ); //Add field html
           x++; //Increment field counter
       }
   });
       //Once remove button is clicked
   $(wrapper).on('click', '.remove_button', function(e){
       e.preventDefault();
       $(this).parent('div').remove(); //Remove field html
       x--; //Decrement field counter
   });
});

$(document).on('change','select.sslt_Field',function(event) {
       var _found = false;
       var cI = $(this);
       var otherVal = $(this).val();
       var optionName = $(this).find('option:selected').attr("name");
       var array = optionName.split("_");
       var validate = 'other_'+array[array.length-1];
       console.log(".other_"+array[array.length-1]+"_id");
       if(otherVal == validate){
       
       $("#other_"+array[array.length-1]+"_id").val("1");
       $("."+validate).show();
       $("."+validate).attr("required", "true");
      }else {
       $("."+validate).hide();
       $("#other_"+array[array.length-1]+"_id").val("0");
       $("."+validate).removeAttr('required');
     }
});        