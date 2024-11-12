route['downloadfile'] = function(){


    var pdfdoc = new jsPDF();
    var specialElementHandlers = {
    
    '#ignoreContent': function (element, renderer) {
    
    return true;
    
    }
    
    };
    
     
    
    $(document).ready(function(){
    
    $("#gpdf").click(function(){
    
    pdfdoc.fromHTML($("#PDFcontent").html(), 10, 10, {
    
    'width': 110,
    
    'elementHandlers': specialElementHandlers
    
    });
    
    pdfdoc.save('First.pdf');
    pdfdoc.setFont("kalpurush");
    });});
    
     


}