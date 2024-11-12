__.hash_active['#input-sample-collection'] = ['#pre_loader'];
route['input-sample-collection'] = function (){
/**   species_names:tmp_sample.species_name,
                    code: tmp_sample.sample_code,
                    date_collection:tmp_sample.collection_date, 
                    collection_place:tmp_sample.collection_place,
                    forensic_report_genarated:tmp_sample.optradio,
                    forensic_report_date:tmp_sample.report_date, */
     listen('model_sample_list', function(event, sample_list_data){
    
          var meta = {
              jq_id: '#tbl_sample_list',
              tbl_squence:['species_name','sample_name', 'code', 'sending_date' ,'date_collection','collection_place','forensic_report_generated','forensic_report_date','delete'],
              tbl_titles: {
                  'species_name':'প্রজাতির নাম', 
                  'code':'নমুনা কোড নম্বর ', 
                  'sending_date':'নমুনা প্রেরণের তারিখ',
                  'sample_name': 'নমুনার নাম',
                  'date_collection':'নমুনা সংগ্রহের তারিখ',
                  'collection_place':'নমুনা কোথায় পাঠানো হয়েছে?',
                  'forensic_report_generated':'ফরেনসিক প্রতিবেদন তৈরি করা হয়েছে কি না?',
                  'forensic_report_date':'ফরেনসিক প্রতিবেদন তৈরির তারিখ',
                   delete:''
              }
          };

          _.each( sample_list_data, function(item, index){
               item.delete = '<a class="cross delete_item" data-index="'+ index +'"> X</a>'; 
          })
      
          table_populate(meta, sample_list_data);

          $('.delete_item').click(function(event){
           
               var ele_index = parseInt($(event.target).data('index'));
               //user_input.input_sample.splice(ele_index, 1);
               wlor_user_input.sample.splice(ele_index, 1);
               console.log(ele_index, sample_list_data);
               model_update('sample_list', wlor_user_input.sample);
              
          });
      });
      

     // if(_.isUndefined(wlor_user_input.sample)){
     //      wlor_user_input.sample = [];
     // }
      
     model_update('sample_list', wlor_user_input.sample);



     function add_item_in_sample_list(evt){

          if (__.is_required_ui() && __.user_has_atleast_one_input()) {
               var sample_one = __.save_user_inputs({});
               wlor_user_input.sample.push(sample_one.sample);
               model_update("sample_list", wlor_user_input.sample);
               __.empty_input_value();
         
             }






          var tmp_sample = take_all_inputs_value();
          console.log('',tmp_sample);
          
          if(is_all_inputs_empty(tmp_sample) === false){

               if(input_required_check()=== true){

                   var sample_item = _.clone(model_wlor_user_input.sample[0]);

               sample_item  = {
                    species_names:tmp_sample.species_name,
                    code: tmp_sample.sample_code,
                    date_collection:tmp_sample.collection_date, 
                    collection_place:tmp_sample.collection_place,
                    forensic_report_genarated:tmp_sample.optradio,
                    forensic_report_date:tmp_sample.report_date,
                };
 
               wlor_user_input.sample.push( sample_item );
               //user_input.input_sample.push(tmp_sample);
               model_update('sample_list',  wlor_user_input.sample);
               empty_all_inputs_value();


          }else{
               console.error('some error');
          }
     }
}
  
     $('#isc_addmore').on('click',add_item_in_sample_list);

     init_input_date_format();

     var sample_array = [];
     sample_array = _.map(wlor_user_input.species_list, function(e, ind){ return e.static });

     console.log(sample_array);

    for(var i=0, ilen = sample_array.length; i < ilen; i++){

     sample_array[i]['bn_en_name'] = sample_array[i]['bangla_name'] +' '+  sample_array[i]['english_name'];
   }

     __.fill_select_options({
          el: "#species_name",
          data: sample_array,
          value_key: "bn_en_name",
          value_html: "bn_en_name" ,
        });

     $('.sample_next').on('click',function(){
          
          add_item_in_sample_list();
          fire('wlor_save');
          gonxt('input-disposal-information');
});

$('.skiped').on('click', function() {
          
     if(confirm("Are you sure you want to skip this? Please click 'Ok'for the next page")){
          // if (_.isUndefined(user_input.input_disposal)) {
          //      user_input.input_disposal = [];
          // }
 
      window.location.hash = 'input-disposal-information';
      gonxt('input-disposal-information');
          }
      else{
           return false;
          }
      });

$('.div_entrega_outro').hide();
$("input[id$='yes']").click(function() {
  $('.div_entrega_outro').show();
});

$("input[id$='no']").click(function() {
  $('.div_entrega_outro').hide();
});
                    
            
   

 }; 