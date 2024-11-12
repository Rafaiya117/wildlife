


function viewLoader(event, page_name){
    if(_.contains(template_list, page_name)){
        var content = $('#pg_'+page_name).html();
        $('#js_main_container').html(content);
    }
}






listen('hash-change', viewLoader);



