// setTimeout(function() {
//     $('#load').fadeOut('fast');
//     }, 500);
//     //Remove no file choosen from file select field 
//     $("document").ready(function(){
//          $("input[type='file']").on("change",function () {          
//               if ($(this).val() != "") {
//                      $(this).css("color", "#333");
//               }else{
//                      $(this).css("color", "transparent");
//               }
//          });
//     })

<div id="google_translate_element"></div>


function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}


<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
