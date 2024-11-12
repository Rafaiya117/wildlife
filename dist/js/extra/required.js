function isNumberKey(evt)
{
  var charCode = (evt.which) ? evt.which : event.keyCode;
 console.log(charCode);
    if (charCode != 46 && charCode != 45 && charCode > 31
    && (charCode < 48 || charCode > 57))
     return false;

  return true;
}
$(document).ready(function(){
   var btCount =1;
   $("#btnPlus").click(function() {
   bt = btCount++;
   var sd = $("#czContainer_czMore_txtCount").val();  
   $('#Add_1_accused').prop('required',true);
   $('#Add_1_father').prop('required',true);
   $('.Add_1_gender').prop('required',true);
   $('#Add_1_age').prop('required',true);
   $('#Add_1_postal_Address').prop('required',true);
   $('#Add_1_postal_Address2').prop('required',true);
   $('#Add_1_pinCode').prop('required',true);
   $('#Add_1_description').prop('required',true);
   
   //2nd ADD
   
   $('#Add_2_accused').prop('required',true);
   $('#Add_2_father').prop('required',true);
   $('.Add_2_gender').prop('required',true);
   $('#Add_2_age').prop('required',true);
   $('#Add_2_postal_Address').prop('required',true);
   $('#Add_2_postal_Address2').prop('required',true);
   $('#Add_2_pinCode').prop('required',true);
    $('#Add_2_description').prop('required',true);
   
   
   //3rd 
   
   $('#Add_3_accused').prop('required',true);
   $('#Add_3_father').prop('required',true);
   $('.Add_3_gender').prop('required',true);
   $('#Add_3_age').prop('required',true);
   $('#Add_3_postal_Address').prop('required',true);
   $('#Add_3_postal_Address2').prop('required',true);
   $('#Add_3_pinCode').prop('required',true);
    $('#Add_3_description').prop('required',true);
   
   //4th
   
   $('#Add_4_accused').prop('required',true);
   $('#Add_4_father').prop('required',true);
   $('.Add_4_gender').prop('required',true);
   $('#Add_4_age').prop('required',true);
   $('#Add_4_postal_Address').prop('required',true);
   $('#Add_4_postal_Address2').prop('required',true);
   $('#Add_4_pinCode').prop('required',true);
   $('#Add_4_description').prop('required',true);
   
   //5th
   
   $('#Add_5_accused').prop('required',true);
   $('#Add_5_father').prop('required',true);
   $('.Add_5_gender').prop('required',true);
   $('#Add_5_age').prop('required',true);
   $('#Add_5_postal_Address').prop('required',true);
   $('#Add_5_postal_Address2').prop('required',true);
   $('#Add_5_pinCode').prop('required',true);
   $('#Add_5_description').prop('required',true);
   
   //5th
   
   $('#Add_6_accused').prop('required',true);
   $('#Add_6_father').prop('required',true);
   $('.Add_6_gender').prop('required',true);
   $('#Add_6_age').prop('required',true);
   $('#Add_6_postal_Address').prop('required',true);
   $('#Add_6_postal_Address2').prop('required',true);
   $('#Add_6_pinCode').prop('required',true);
   $('#Add_6_description').prop('required',true);
   
   //7th
   
   $('#Add_7_accused').prop('required',true);
   $('#Add_7_father').prop('required',true);
   $('.Add_7_gender').prop('required',true);
   $('#Add_7_age').prop('required',true);
   $('#Add_7_postal_Address').prop('required',true);
   $('#Add_7_postal_Address2').prop('required',true);
   $('#Add_7_pinCode').prop('required',true);
   $('#Add_7_description').prop('required',true);
   
   //8th
   
   $('#Add_8_accused').prop('required',true);
   $('#Add_8_father').prop('required',true);
   $('.Add_8_gender').prop('required',true);
   $('#Add_8_age').prop('required',true);
   $('#Add_8_postal_Address').prop('required',true);
   $('#Add_8_postal_Address2').prop('required',true);
   $('#Add_8_pinCode').prop('required',true);
   $('#Add_8_description').prop('required',true);
   
   //9th
   
   $('#Add_9_accused').prop('required',true);
   $('#Add_9_father').prop('required',true);
   $('.Add_9_gender').prop('required',true);
   $('#Add_9_age').prop('required',true);
   $('#Add_9_postal_Address').prop('required',true);
   $('#Add_9_postal_Address2').prop('required',true);
   $('#Add_9_pinCode').prop('required',true);
   $('#Add_9_description').prop('required',true);
   
   //10th
   
   $('#Add_10_accused').prop('required',true);
   $('#Add_10_father').prop('required',true);
   $('.Add_10_gender').prop('required',true);
   $('#Add_10_age').prop('required',true);
   $('#Add_10_postal_Address').prop('required',true);
   $('#Add_10_postal_Address2').prop('required',true);
   $('#Add_10_pinCode').prop('required',true);
   $('#Add_10_description').prop('required',true);
   
   //11th
   
   $('#Add_11_accused').prop('required',true);
   $('#Add_11_father').prop('required',true);
   $('.Add_11_gender').prop('required',true);
   $('#Add_11_age').prop('required',true);
   $('#Add_11_postal_Address').prop('required',true);
   $('#Add_11_postal_Address2').prop('required',true);
   $('#Add_11_pinCode').prop('required',true);
   $('#Add_11_description').prop('required',true);
   
   //12th
   
   $('#Add_12_accused').prop('required',true);
   $('#Add_12_father').prop('required',true);
   $('.Add_12_gender').prop('required',true);
   $('#Add_12_age').prop('required',true);
   $('#Add_12_postal_Address').prop('required',true);
   $('#Add_12_postal_Address2').prop('required',true);
   $('#Add_12_pinCode').prop('required',true);
   $('#Add_12_description').prop('required',true);
   
   //13th
   
   $('#Add_13_accused').prop('required',true);
   $('#Add_13_father').prop('required',true);
   $('.Add_13_gender').prop('required',true);
   $('#Add_13_age').prop('required',true);
   $('#Add_13_postal_Address').prop('required',true);
   $('#Add_13_postal_Address2').prop('required',true);
   $('#Add_13_pinCode').prop('required',true);
   $('#Add_13_description').prop('required',true);
   //14th
   
   $('#Add_14_accused').prop('required',true);
   $('#Add_14_father').prop('required',true);
   $('.Add_14_gender').prop('required',true);
   $('#Add_14_age').prop('required',true);
   $('#Add_14_postal_Address').prop('required',true);
   $('#Add_14_postal_Address2').prop('required',true);
   $('#Add_14_pinCode').prop('required',true);
   $('#Add_14_description').prop('required',true);
   //15th
   
   $('#Add_15_accused').prop('required',true);
   $('#Add_15_father').prop('required',true);
   $('.Add_15_gender').prop('required',true);
   $('#Add_15_age').prop('required',true);
   $('#Add_15_postal_Address').prop('required',true);
   $('#Add_15_postal_Address2').prop('required',true);
   $('#Add_15_pinCode').prop('required',true);
   $('#Add_15_description').prop('required',true);
   //16th
   
   $('#Add_16_accused').prop('required',true);
   $('#Add_16_father').prop('required',true);
   $('.Add_16_gender').prop('required',true);
   $('#Add_16_age').prop('required',true);
   $('#Add_16_postal_Address').prop('required',true);
   $('#Add_16_postal_Address2').prop('required',true);
   $('#Add_16_pinCode').prop('required',true);
   $('#Add_16_description').prop('required',true);
   
   //17th
   
   $('#Add_17_accused').prop('required',true);
   $('#Add_17_father').prop('required',true);
   $('.Add_17_gender').prop('required',true);
   $('#Add_17_age').prop('required',true);
   $('#Add_17_postal_Address').prop('required',true);
   $('#Add_17_postal_Address2').prop('required',true);
   $('#Add_17_pinCode').prop('required',true);
   $('#Add_17_description').prop('required',true);
 
   //18th
   
   $('#Add_18_accused').prop('required',true);
   $('#Add_18_father').prop('required',true);
   $('.Add_18_gender').prop('required',true);
   $('#Add_18_age').prop('required',true);
   $('#Add_18_postal_Address').prop('required',true);
   $('#Add_18_postal_Address2').prop('required',true);
   $('#Add_18_pinCode').prop('required',true);
   $('#Add_18_description').prop('required',true);
   
   //19th
   
   $('#Add_19_accused').prop('required',true);
   $('#Add_19_father').prop('required',true);
   $('.Add_19_gender').prop('required',true);
   $('#Add_19_age').prop('required',true);
   $('#Add_19_postal_Address').prop('required',true);
   $('#Add_19_postal_Address2').prop('required',true);
   $('#Add_19_pinCode').prop('required',true);
   $('#Add_19_description').prop('required',true);
   
   //29th
   
   $('#Add_29_accused').prop('required',true);
   $('#Add_29_father').prop('required',true);
   $('.Add_29_gender').prop('required',true);
   $('#Add_29_age').prop('required',true);
   $('#Add_29_postal_Address').prop('required',true);
   $('#Add_29_postal_Address2').prop('required',true);
   $('#Add_29_pinCode').prop('required',true);
   $('#Add_29_description').prop('required',true);
 
 $(".btnMinus").click(function() {
     
      var btnMinus = $("#czContainer_czMore_txtCount").val();   
      //alert(btnMinus);
      if(btnMinus==0 || btnMinus==1 || btnMinus==2 || btnMinus==3 || btnMinus==4 ){
       $(".btnPlus").removeClass("addBtn");   
          
      }
 
 });
 
});
});

$(document).ready(function(){
$('body').on('click', '.remove', function(){
var pip = $(this).attr('imgcount');
$('.pip'+pip).remove();
});
});

$(document).ready(function () {      
$("select#Add_0_documentSelect").change(function () {
var documentsType = $(this).children("option:selected").val();
    if(documentsType == "other_ID"){
    $(".otherIDName").fadeIn(); 
    $("#image_preview").val("");
    $("#image_preview").show();
    $(".uploadedDocumentDiv").show();
    $('.OtherIDNameInput').prop('required',true);
    $('.uploadFileInput').prop('required',true);
   
}else{

 $(".uploadedDocumentDiv").show();
 $(".otherIDName").hide();  
 $('.OtherIDNameInput').prop('required',false);
 $('.uploadFileInput').prop('required',true);
 $("#image_preview").show();
}
});
});    
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
