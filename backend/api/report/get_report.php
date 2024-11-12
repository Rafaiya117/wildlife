<?php
include '../../_a.php';


$fetch = [
  'division'=>$db->select('SELECT division_name,forest_department,fisheries,navy,police,coast_guard, boarder_gaurd, customes,ciid,total FROM `wlor_reporting_division`; '),
  'district'=>$db->select('SELECT district_name,forest_department,fisheries,navy,police,coast_guard, boarder_gaurd, customes,ciid,total FROM `wlor_reporting_district`; '),
 'offence'=>$db->select('SELECT offence_type,forest_department,fisheries,navy,police,coast_guard, boarder_gaurd, customes,ciid,total FROM `wlor_reporting_offence`; '),
  'prosecution'=>$db->select('SELECT action_type,forest_department,fisheries,navy,police,coast_guard, boarder_gaurd, customes,ciid,total FROM `wlor_reporting_prosecution`; '),
 'monthly'=>$db->select('SELECT month, year,forest_department,fisheries,navy,police,coast_guard, boarder_gaurd, customes,ciid,total FROM `wlor_reporting_monthly_report`; '),
 'yearly'=>$db->select('SELECT year,forest_department,fisheries,navy,police,coast_guard, boarder_gaurd, customes,ciid,total FROM `wlor_reporting_yearly`; '),
 'live'=>$db->select('SELECT species,forest_department,fisheries,navy,police,coast_guard, boarder_gaurd, customes,ciid,total FROM `wlor_reporting_live`; '),
 'dead'=>$db->select('SELECT species,forest_department,fisheries,navy,police,coast_guard, boarder_gaurd, customes,ciid,total FROM `wlor_reporting_dead`; '),


'part_seized'=>$db->select('SELECT offence_type,forest_department,fisheries,navy,police,coast_guard, boarder_gaurd, customes,ciid,total FROM `wlor_reporting_part_seized`; '),
 'plant_seized'=>$db->select('SELECT offence_type,forest_department,fisheries,navy,police,coast_guard, boarder_gaurd, customes,ciid,total FROM `wlor_reporting_plant_seized`; '),
 'fate'=>$db->select('SELECT name_of_species,euthanasia,released_in_nature,country_export,private_facility,botanical_garden,public_zoo,rescue_center,safari_park,total FROM `wlor_reporting_fate`; '),
 'disposal'=>$db->select('SELECT species,court,burried,burnt,evidance,sale,educational_institution,museum,total FROM `wlor_reporting_disposal`; '),
 'sample'=>$db->select('SELECT species_name,collection_date,sample_code,sent,report_generation,report_generation_date,total FROM `wlor_reporting_sample`; '),
 'officer'=>$db->select('SELECT name,agency_name,designation,posting_place,district,total FROM `wlor_reporting_officer`; '),
 'conservation'=>$db->select('SELECT species_name,total_number,cities_appendix,schedule,iucn_status,total FROM `wlor_reporting_conservation`; '),
 'cities'=>$db->select('SELECT start_date,end_date,appendix_i,appendix_ii,appendix_iii,not_listed FROM `wlor_reporting_cities`; '),
 'iucn'=>$db->select('SELECT start_date,end_date,cr,en,vu,nt,lc,unassessed FROM `wlor_reporting_iucn`; '),
 'offender_details'=>$db->select('SELECT gps,name,age,fathers_name,present_address,permanent_address,nationality,nid,mobile,reapeted_offender,note FROM `wlor_reporting_offender_details`; '),
//  'offender_division'=>$db->select('SELECT division_name,forest_department,fisheries,navy,police,coast_guard, boarder_gaurd, customes,ciid,total FROM `wlor_reporting_arrestedbydivision`; '),
//  'offender_district'=>$db->select('SELECT district_name,forest_department,fisheries,navy,police,coast_guard, boarder_gaurd, customes,ciid,total FROM `wlor_reporting_aresstedbydistrict`; '),
//   'report_item'=>$db->select('SELECT item_name,forest_department,fisheries,navy,police,coast_guard, boarder_gaurd, customes,ciid,total FROM `reporting_item`; '),
 'seized_item'=>$db->select('SELECT offence_id,detection_method,transport_mode,concelment_method,alleged_country,transition_country,final_destination,reason,inprisonment,fine,total FROM `wlor_reporting_seizeditem`; '),   
//     // 'forest_department' =>  $db->select('SELECT Forest_department ,count(id)  as "count" FROM `wlor_reporting` group by Forest_department;'),
     'organization' =>  $db->select('SELECT division_name ,forest_department  FROM `wlor_reporting_division`;'), 
    
    
    
    
];



json_send($fetch);