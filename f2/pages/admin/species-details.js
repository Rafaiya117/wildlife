route['species-details'] = function (){

function modal2(){
    var selectvalue = $('input[name=optradio]:checked','#modal2'.val());
    if(selectvalue=="Yes"){
    
    window.open('https://wcs.softlh.com/wildlife-crime/f2/#modal2','_self');
    return true;
    
    }
    
    return false;
    
    };


    var json_data={};

  function set_species_codes() {

    var filePath = '../backend/api/species/get.php';
  //Alleged Country
    $.getJSON(filePath, function( data ) {
      json_data = data;
      var options = '';
      $('#identify').empty().append('<option value="">  </option>');
      $.each( data, function( key, val ) {
        options += '<option value="'+ val['id'] +'">'+ val['english_name'] + '&nbsp;' + val['bangla_name'] +'</option>';
      });
      $('#identify').append(options);
    });
 
  }
 
   set_species_codes();


 $('#find_species').on('click',function(evt){

  var specie = model_get_base_obj('specie');


  var tmp_user_input = take_all_inputs_value();
  var id_element = tmp_user_input.identify;


  var st_spec = _.where(json_data, {id: parseInt(id_element)});
 // console.log(id_element, "  >> 0000",specie, st_spec);
 // console.log(json_data);

  specie.static = st_spec[0];
  // change
 
  
  selected_species_for_edit = _.clone(specie);

 
   window.location.hash = 'edit_species';

  

 });
};
var selected_species_for_edit ={};