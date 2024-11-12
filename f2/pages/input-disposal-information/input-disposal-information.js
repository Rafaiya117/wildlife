__.hash_active['#input-disposal-information'] = ['#pre_loader'];
route['input-disposal-information'] = function () {


     listen('model_disposal_list', function (event, disposal_list_data) {

          var meta = {
               jq_id: '#tbl_disposal_list',
               tbl_squence: [ 'name','mode','body_part' ,'orderers_name','orderers_designation','date', 'place', 'incharge','incharge_designation','incharge_workstation','delete'],
               tbl_titles: {
                    'name': 'প্রজাতি',
                    'mode': 'নিষ্পত্তিকরণ প্রক্রিয়া',
                    'body_part':'দেহাংশ/ট্রফি/পণ্যের নাম',
                    'orderers_name':'নিষ্পত্তি হুকুম দাতার নাম',
                    'orderers_designation':'নিষ্পত্তি হুকুম দাতার পদবি',
                    'date': 'নিষ্পত্তিকরণের তারিখ',
                    'place': 'নিষ্পত্তিকরণের স্থান',
                    'incharge': 'নিষ্পত্তিকারী কর্মকর্তার নাম',
                    'incharge_designation':'নিষ্পত্তিকারী কর্মকর্তার পদবি',
                    'incharge_workstation':'নিষ্পত্তিকারী কর্মকর্তার কর্মস্থল',
                    delete:''

               }
          };

          _.each( disposal_list_data, function(item, index){
               item.delete = '<a class="cross delete_item" data-index="'+ index +'"> X</a>'; 
          })

          table_populate(meta, disposal_list_data);

          $('.delete_item').click(function(event){
           
               var ele_index = parseInt($(event.target).data('index'));
              // user_input.input_disposal.splice(ele_index, 1);
               wlor_user_input.disposal.splice(ele_index, 1);
               console.log(ele_index, disposal_list_data);
               model_update('disposal_list', wlor_user_input.disposal);
              
          });
     });


     // if (_.isUndefined(wlor_user_input.disposal)) {
     //      wlor_user_input.disposal= [];
     // }

     model_update('disposal_list', wlor_user_input.disposal);




     function add_item_in_disposal_list(evt) {


          if (__.is_required_ui() && __.user_has_atleast_one_input()) {
               var disposal_one = __.save_user_inputs({});
               wlor_user_input.disposal.push(disposal_one.disposal);
               model_update("disposal_list", wlor_user_input.disposal);
               __.empty_input_value();
         
             }

         
     
}
var dispos_array = [];
dispos_array = _.map(wlor_user_input.species_list, function(e, ind){ return e.static });

console.log(dispos_array);

for(var i=0, ilen = dispos_array.length; i < ilen; i++){

     dispos_array[i]['bn_en_name'] = dispos_array[i]['bangla_name'] +' '+  dispos_array[i]['english_name'];
  
}



__.fill_select_options({
     el: "#name",
     data: dispos_array,
     value_key: "bn_en_name",
     value_html: "bn_en_name" ,
   });

   

   var mode_option = [
        {'opt': 'Approved private facility center অনুমোদিত ব্যক্তিগত সেবাকেন্দ্রে প্রদান'},
        {'opt': 'Auction নিলাম'},
        {'opt': 'Destroy/Burn/Buried ধ্বংস/পুড়েফেলা/পুতেফেলা'},
        {'opt': 'Donation to Orphan Center এতিম খানায় দান'},
        {'opt': 'Educational Institution শিক্ষামূলক কাজে ব্যবহার'},
        {'opt': 'Euthanasia মেরে ফেলা'},
        {'opt': 'Museum সংগ্রহশালায় প্রদান'},
        {'opt': 'Processed রূপান্তর'},
        {'opt': 'Other অন্যান্য'},
        {'opt': 'Released in nature অবমুক্তকরণ'},
        {'opt': 'Return to country of export/origin রপ্তানিকারক/উৎস্য দেশে ফেরত'},
        {'opt': 'Safekeeping at private facility ব্যাক্তিগত সেবাকেন্দ্রে সংরক্ষণ'},
        {'opt':'Safekeeping Center নিরাপত্তাশালায় রাখা'},
        {'opt': 'Safekeeping at personal custody ব্যক্তিগত জিম্মায় রাখা'},
        {'opt': 'Safekeeping নিরাপত্তাশালায় প্রেরণ'},
        {'opt': 'Sending to Ecopark ইকোপার্কে প্রদান'},
        {'opt': 'Sending to botanical garden উদ্ভিদ উদ্যান প্রদান'},
        {'opt': 'Sending to public zoo সরকারি চিড়িয়াখানায় প্রদান'},
        {'opt': 'Sending to rescue center রেসকিউ সেন্টার-এ প্রেরণ'},
        {'opt': 'Sending to Safari Park সাফারি পার্কে প্রদান'},     
   ]; 

   __.fill_select_options({
     el: "#mode",
     data: mode_option,
     value_key: "opt",
     value_html: "opt" ,
   });
     $('#idi_addmore').on('click', add_item_in_disposal_list);

     $('.disposal_next').on('click', function () {
          add_item_in_disposal_list();
          fire('wlor_save');
          gonxt('other-details');
         

     });
     init_input_date_format();
     $('.disposal_skip').on('click', function() {
          
          if(confirm("Are you sure you want to skip this? Please click 'Ok'for the next page")){
               // if (_.isUndefined(user_input.input_disposal)) {
               //      user_input.input_disposal = [];
               // }
      
           window.location.hash = 'other-details'; //??? 
           gonxt('other-details');
               }
           else{
                return false;
               }
           });









};

