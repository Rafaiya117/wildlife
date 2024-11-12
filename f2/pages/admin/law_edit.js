__.hash_active['#law_edit'] = ['#admin'];
route['law_edit'] = function () {

    function edit_law_data(law_id) {

        var getstring = $("#pg_" + 'law_edit_1').html();

        var edit_law = _.template(getstring);
        var law_data = _.find(law_section_data, {id:parseInt(law_id)});
        $('#law_data_edit').html(edit_law(law_data));
           
}
function init_page(){     
    edit_law_data(law_id);
}
init_page();

function add_new_law(){

    var tmp_user_input = take_all_inputs_value();
    if(_.isEmpty(tmp_user_input) === false 
     && input_required_check()=== true
    ){     
     
          fire('law_save', tmp_user_input);      
          
    } 
    else{
         console.error('some error');
    }
}
$('#save_law').click(function(){
        
    add_new_law();
    //window.location = '#species-details';
});
};