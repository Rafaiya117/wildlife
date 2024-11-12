$(document).ready(function(){

    // Event testing
    __.listen('__test_item', function(tg, data){
        console.assert(data.dami_data ===99, "event data is wrong %o", data);
    });

    __.fire('__test_item', {dami_data: 99});
    
    // URL testing and routing testing
    // test url change working or not
    // change the view loader
   






    // input counter
    var counter = 0;
    __.listen('hash-change', function(e, hash){

        var input_types = ['input', 'select', 'textarea'];
        var this_page = 0;

        _.map(input_types, item=>{
            this_page += __.$app.find(item).length;
        });
        counter += this_page;
        console.log(hash, 'this page', this_page , 'count: ',counter);
    });



    
});


