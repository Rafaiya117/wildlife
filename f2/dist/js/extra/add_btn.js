$(document).ready(function(){
    $( ".add-row" ).click(function(){
       var $clone = $( "form.inputs-p10" ).first().clone();
       $clone.append( "<button type='button' class='remove-row'>-</button>" );
       $clone.insertBefore( ".add-row" );
    });
   
    $( ".form" ).on("click", ".remove-row", function(){
       $(this).parent().remove();
    });
 });