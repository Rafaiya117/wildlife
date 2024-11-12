var route = {};
function hash_uri_mapping(){
    var hash = decodeURI(location.hash.substring(1));
    
    var hash_array = hash.split('/'), contrl = hash_array[0];
    fire('hash-change', contrl); 
    if(route.hasOwnProperty(contrl) === true){
        route[contrl](hash_array);
        return;
    }
    
}
window.addEventListener('hashchange', hash_uri_mapping, false);

$(document).ready(function(){


    
    listen('hash-change',function(e, hash){
        if(_.isEmpty(hash)){
            window.location.hash = 'dashboard';
        }
        
    });
    hash_uri_mapping();  
    
});
