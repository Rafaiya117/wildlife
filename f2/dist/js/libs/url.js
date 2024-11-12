var route = {};

function hash_uri_mapping(){
    var hash = decodeURI(location.hash.substring(1));

    if(route.hasOwnProperty(hash) === true){
        route[hash](hash.split('/'));
        
        return;
    }

    var contrl = hash.split('/')[0];
    if(route.hasOwnProperty(contrl) === true){
        route[contrl](hash.split('/'));
        return;
    }
}


window.addEventListener('hashchange', hash_uri_mapping, false);
listen('d_species', hash_uri_mapping);
console.log('url is working');