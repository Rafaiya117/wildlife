<?PHP
include '../../_a.php';
//ini_set('memory_limit', '1024M');
$wlor_raw = $db->select('Select * from wlor_raw where published="published" ');

 //print_r($wlor_raw);
$db->action('DELETE from trade_report;');

for($i=0,$ilen=sizeof($wlor_raw);$i<$ilen;$i+=1){

    $wlor = json_decode($wlor_raw[$i]['raw_json']);

    print_r($wlor);
          $species_str = '';
          
          for($j=0,$jlen=sizeof($wlor->species_list); $j < $jlen ;$j+=1){
            $animal = $wlor->species_list[$j];
            $species_str .= $animal->static->scientific_name . ', ';
          }
          for($j=0,$jlen=sizeof($wlor->disposal); $j < $jlen ;$j+=1){

            $dis = (array)$wlor->disposal[$j];
          }
          for($j=0,$jlen=sizeof($wlor->offender); $j < $jlen ;$j+=1){

            $array_spec = (array)$wlor->offender[$j];
            }
            for($j=0,$jlen=sizeof($wlor->whole_species_list); $j < $jlen ;$j+=1){
              // $off_one = ;
              $array_spe = (array)$wlor->whole_species_list[$j];
            }
            for($j=0,$jlen=sizeof($wlor->law_sections); $j < $jlen ;$j+=1){
                
              $law= $wlor->law_sections[$j];
            }
            for($j=0,$jlen=sizeof($wlor->others_info->discovering_method); $j < $jlen ;$j+=1){
              // $off_one = ;
              
             $discover = $wlor->others_info->discovering_method[$j];
             $transport= $wlor->others_info->mode_of_transport[$j];
             $concealment = $wlor->others_info->concealment_method[$j];
             $reason = $wlor->others_info->reason_for_seizure[$j];
             $destination = $wlor->others_info->destination_contry[$j];
             $transition = $wlor->others_info->transition_country[$j];
           
            }
            $location_details = '';
            $location_details.= $wlor->case_info->location_info->location_village.','.$wlor->case_info->location_info->location_moholla.','.$wlor->case_info->location_info->location_road.'<br>'.
            $wlor->case_info->location_info->district.','.$wlor->case_info->location_info->thana_name.'<br>'.$wlor->case_info->location_info->station->fd.','.$wlor->case_info->location_info->station->range.','.
            $wlor->case_info->location_info->station->beat;
            $db->action('INSERT into trade_report 
            (id,Species,organization_name,alleged_country,other_note,location_details, mode,nationality,live_dead,quantity,estimated_value,law_sections, discovering_method,mode_of_transport,concealment_method,
            reason_for_seizure, destination_contry,transition_country)
            values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            $wlor_raw[$i]['id'], 
            $species_str,
            $wlor->reporting->officer->organization_name,
            $wlor->others_info->alleged_country,
            $wlor->others_info->penalties->other_note,
            $location_details,
            $dis['mode'],
            $array_spec['nationality'], 
            $array_spe['live_dead'],
            $array_spe['quantity'],
            $array_spe['estimated_value'],
            $law,
            $discover,
            $transport,
            $concealment,
            $reason,
            $destination,
            $transition,


);




    // break;
   
}
          




