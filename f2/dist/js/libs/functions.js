function fire(event_name, data){
    $(window).trigger(event_name, data);
}

function listen(event_name, callback){
    $(window).on(event_name, callback);
}


