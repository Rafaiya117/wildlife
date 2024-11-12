<?PHP
include '../../_a.php';
//ini_set('memory_limit', '1024M');



$wlor_raw = $db->select('Select * from wlor_raw where published="published" ');



// Date rage ... .


 //print_r($wlor_raw);
$db->action('DELETE from t_rep_offnce_type;');
$db->action('DELETE from t_rep_prosecution;');
$db->action('DELETE from t_rep_speices;');

$db->action('DELETE from wlor_reporting;');
$db->action('DELETE from wlor_reporting_district;');
$db->action('DELETE from wlor_reporting_division;');
$db->action('DELETE from wlor_reporting_offence;');
$db->action('DELETE from wlor_reporting_prosecution;');


for($i=0,$ilen=sizeof($wlor_raw);$i<$ilen;$i+=1){

    $wlor = json_decode($wlor_raw[$i]['raw_json']);
    // echo '<pre>';
    // print_r($wlor);
  //  echo sizeof($wlor->species_list);
   
          $species_str = '';
          for($j=0,$jlen=sizeof($wlor->species_list); $j < $jlen ;$j+=1){
            $animal = $wlor->species_list[$j];
            $species_str .= $animal->static->scientific_name . ', ';
          }



          //echo $species_str;

            $db->action('INSERT into wlor_reporting 
            (case_id, case_no, offence_date, upazilla, upazilla_id ,law_violated, organization_name, species_list, date)
            values(?, ?, ?, ?, ?, ?, ?, ?, ?)
            -- date rage
            ',
            $wlor_raw[$i]['id'], 
            $wlor->case_info->case_no,
            $wlor->case_info->offence_date,
            $wlor->case_info->location_info->thana_name,
            
            $wlor->case_info->location_info->thana_id,
             '', //[$wlor->law_sections],
            $wlor->reporting->officer->organization_name,
            $species_str,
            $wlor->reporting->report->date
          );
            
          



          // species_str = '';

          for($j=0,$jlen=sizeof($wlor->case_info->offence_type); $j < $jlen ;$j+=1){
            // $off_one = ;
            $db->action('INSERT into t_rep_offnce_type 
            (case_id, offence_type, organization_name)
            values(?, ?, ?)
            -- date rage
            ',
            $wlor_raw[$i]['id'], 
            $wlor->case_info->offence_type[$j],
            $wlor->reporting->officer->organization_name
          );
            
          }

          for($j=0,$jlen=sizeof($wlor->case_info->action_taken); $j < $jlen ;$j+=1){
            // $off_one = ;
            $db->action('INSERT into t_rep_prosecution 
            (case_id, action_taken, organization_name)
            values(?, ?, ?)
            -- date rage
            ',
            $wlor_raw[$i]['id'], 
            $wlor->case_info->action_taken[$j],
            $wlor->reporting->officer->organization_name
          );
            
          }

          // species_list[$j]['live_dead']==Live
          // species_list[$j]['static']['english_name]
          
          // pre($wlor->species_list);
          // echo '--', $wlor->species_list[0]->static->english_name;
          // die('--');

          for($j=0,$jlen=sizeof($wlor->species_list); $j < $jlen ;$j+=1){
            // $off_one = ;


            $array_spec = (array)$wlor->species_list[$j];
            

            $db->action('INSERT into t_rep_speices 
            (case_id, english_name, scientific_name, live_dead, quantity, organization_name)
            values(?, ?, ?, ?, ?,  ?)
            -- date rage
            ',
            $wlor_raw[$i]['id'], 
            $wlor->species_list[$j]->static->english_name,
            $wlor->species_list[$j]->static->scientific_name,
            $array_spec['live_dead '],
            $array_spec['quantity'],
            $wlor->reporting->officer->organization_name
          );
            
          }
    
   
}



$db->action('UPDATE `wlor_reporting` inner join upazilas on upazilas.id =  wlor_reporting.upazilla_id   set wlor_reporting.district = upazilas.district_name, wlor_reporting.division = upazilas.division_name;');
$db->action('INSERT into `wlor_reporting_district`  
(district_id, district_name,forest_department, fisheries, navy, police, coast_guard, boarder_gaurd, customes, ciid, total )
SELECT 

"0" as `district_id`, 
district as `district_name`, 
sum(case when organization_name = "Bangladesh Forest Department" then 1 else 0 end) as `forest_department`,
sum(case when organization_name = "Department of Fisheries" then 1 else 0 end) as `fisheries`,
sum(case when organization_name = "Bangaldesh Navey" then 1 else 0 end) as `navy`,
sum(case when organization_name = "Bangladesh Police" then 1 else 0 end) as `police`,
sum(case when organization_name = "Coast Guard Bangladesh" then 1 else 0 end) as `coast_guard`,
sum(case when organization_name = "Boarder Guard Bangladesh" then 1 else 0 end) as `boarder_gaurd`,
sum(case when organization_name = "Customes" then 1 else 0 end) as `customes`,
sum(case when organization_name = "Customs Intelligence & Investigation Directorate" then 1 else 0 end) as `ciid`,
count(id) as `total`
FROM `wlor_reporting`
group by district
;');

$db->action('INSERT into `wlor_reporting_division`  
(division_id, division_name,forest_department, fisheries, navy, police, coast_guard, boarder_gaurd, customes, ciid, total )
SELECT 
"0" as `district_id`, 
division as `division_name`, 
sum(case when organization_name = "Bangladesh Forest Department" then 1 else 0 end) as `forest_department`,
sum(case when organization_name = "Department of Fisheries" then 1 else 0 end) as `fisheries`,
sum(case when organization_name = "Bangaldesh Navey" then 1 else 0 end) as `navy`,
sum(case when organization_name = "Bangladesh Police" then 1 else 0 end) as `police`,
sum(case when organization_name = "Coast Guard Bangladesh" then 1 else 0 end) as `coast_guard`,
sum(case when organization_name = "Boarder Guard Bangladesh" then 1 else 0 end) as `boarder_gaurd`,

sum(case when organization_name = "Customes" then 1 else 0 end) as `customes`,
sum(case when organization_name = "Customs Intelligence & Investigation Directorate" then 1 else 0 end) as `ciid`,
count(id) as `total`
FROM `wlor_reporting`
group by division
;');




$db->action('INSERT into `wlor_reporting_offence`  
(offence_type,forest_department, fisheries, navy, police, coast_guard, boarder_gaurd, customes, ciid, total )
SELECT 
offence_type, 

sum(case when organization_name = "Bangladesh Forest Department" then 1 else 0 end) as `forest_department`,
sum(case when organization_name = "Department of Fisheries" then 1 else 0 end) as `fisheries`,
sum(case when organization_name = "Bangaldesh Navey" then 1 else 0 end) as `navy`,
sum(case when organization_name = "Bangladesh Police" then 1 else 0 end) as `police`,
sum(case when organization_name = "Coast Guard Bangladesh" then 1 else 0 end) as `coast_guard`,
sum(case when organization_name = "Boarder Guard Bangladesh" then 1 else 0 end) as `boarder_gaurd`,

sum(case when organization_name = "Customes" then 1 else 0 end) as `customes`,
sum(case when organization_name = "Customs Intelligence & Investigation Directorate" then 1 else 0 end) as `ciid`,
count(id) as `total`
FROM `t_rep_offnce_type`
group by offence_type
;');


$db->action('INSERT into `wlor_reporting_prosecution`  
(action_type,forest_department, fisheries, navy, police, coast_guard, boarder_gaurd, customes, ciid, total )
SELECT 
action_taken, 

sum(case when organization_name = "Bangladesh Forest Department" then 1 else 0 end) as `forest_department`,
sum(case when organization_name = "Department of Fisheries" then 1 else 0 end) as `fisheries`,
sum(case when organization_name = "Bangaldesh Navey" then 1 else 0 end) as `navy`,
sum(case when organization_name = "Bangladesh Police" then 1 else 0 end) as `police`,
sum(case when organization_name = "Coast Guard Bangladesh" then 1 else 0 end) as `coast_guard`,
sum(case when organization_name = "Boarder Guard Bangladesh" then 1 else 0 end) as `boarder_gaurd`,

sum(case when organization_name = "Customes" then 1 else 0 end) as `customes`,
sum(case when organization_name = "Customs Intelligence & Investigation Directorate" then 1 else 0 end) as `ciid`,
count(id) as `total`
FROM `t_rep_prosecution`
group by action_taken
;');

$db->action('DELETE from wlor_reporting_monthly_report;');
$db->action('INSERT into `wlor_reporting_monthly_report`  
(`month`, `year` , forest_department, fisheries, navy, police, coast_guard, boarder_gaurd, customes, ciid, total )
SELECT 
MONTHNAME(offence_date), 
year(offence_date), 
sum(case when organization_name = "Bangladesh Forest Department" then 1 else 0 end) as `forest_department`,
sum(case when organization_name = "Department of Fisheries" then 1 else 0 end) as `fisheries`,
sum(case when organization_name = "Bangaldesh Navey" then 1 else 0 end) as `navy`,
sum(case when organization_name = "Bangladesh Police" then 1 else 0 end) as `police`,
sum(case when organization_name = "Coast Guard Bangladesh" then 1 else 0 end) as `coast_guard`,
sum(case when organization_name = "Boarder Guard Bangladesh" then 1 else 0 end) as `boarder_gaurd`,

sum(case when organization_name = "Customes" then 1 else 0 end) as `customes`,
sum(case when organization_name = "Customs Intelligence & Investigation Directorate" then 1 else 0 end) as `ciid`,
count(id) as `total`
FROM `wlor_reporting`
group by month(offence_date), year(offence_date)
order by year(offence_date), month(offence_date)
;');



$db->action('DELETE from wlor_reporting_yearly;');
$db->action('INSERT into `wlor_reporting_yearly`  
(`year`, forest_department, fisheries, navy, police, coast_guard, boarder_gaurd, customes, ciid, total )
SELECT 
year(offence_date), 
sum(case when organization_name = "Bangladesh Forest Department" then 1 else 0 end) as `forest_department`,
sum(case when organization_name = "Department of Fisheries" then 1 else 0 end) as `fisheries`,
sum(case when organization_name = "Bangaldesh Navey" then 1 else 0 end) as `navy`,
sum(case when organization_name = "Bangladesh Police" then 1 else 0 end) as `police`,
sum(case when organization_name = "Coast Guard Bangladesh" then 1 else 0 end) as `coast_guard`,
sum(case when organization_name = "Boarder Guard Bangladesh" then 1 else 0 end) as `boarder_gaurd`,

sum(case when organization_name = "Customes" then 1 else 0 end) as `customes`,
sum(case when organization_name = "Customs Intelligence & Investigation Directorate" then 1 else 0 end) as `ciid`,
count(id) as `total`
FROM `wlor_reporting`
group by year(offence_date)
;');



$db->action('DELETE from wlor_reporting_live;');
$db->action('INSERT into `wlor_reporting_live`  
(`species`, forest_department, fisheries, navy, police, coast_guard, boarder_gaurd, customes, ciid, total )
SELECT 
english_name, 
sum(case when organization_name = "Bangladesh Forest Department" then quantity else 0 end) as `forest_department`,
sum(case when organization_name = "Department of Fisheries" then quantity else 0 end) as `fisheries`,
sum(case when organization_name = "Bangaldesh Navey" then quantity else 0 end) as `navy`,
sum(case when organization_name = "Bangladesh Police" then quantity else 0 end) as `police`,
sum(case when organization_name = "Coast Guard Bangladesh" then quantity else 0 end) as `coast_guard`,
sum(case when organization_name = "Boarder Guard Bangladesh" then quantity else 0 end) as `boarder_gaurd`,

sum(case when organization_name = "Customes" then quantity else 0 end) as `customes`,
sum(case when organization_name = "Customs Intelligence & Investigation Directorate" then quantity else 0 end) as `ciid`,
sum(quantity) as `total`
FROM `t_rep_speices`
where live_dead = "Live"
group by scientific_name

;');


$db->action('DELETE from wlor_reporting_dead;');
$db->action('INSERT into `wlor_reporting_dead`  
(`species`, forest_department, fisheries, navy, police, coast_guard, boarder_gaurd, customes, ciid, total )
SELECT 
english_name, 
sum(case when organization_name = "Bangladesh Forest Department" then quantity else 0 end) as `forest_department`,
sum(case when organization_name = "Department of Fisheries" then quantity else 0 end) as `fisheries`,
sum(case when organization_name = "Bangaldesh Navey" then quantity else 0 end) as `navy`,
sum(case when organization_name = "Bangladesh Police" then quantity else 0 end) as `police`,
sum(case when organization_name = "Coast Guard Bangladesh" then quantity else 0 end) as `coast_guard`,
sum(case when organization_name = "Boarder Guard Bangladesh" then quantity else 0 end) as `boarder_gaurd`,

sum(case when organization_name = "Customes" then quantity else 0 end) as `customes`,
sum(case when organization_name = "Customs Intelligence & Investigation Directorate" then quantity else 0 end) as `ciid`,
sum(quantity) as `total`
FROM `t_rep_speices`
where live_dead = "Dead"
group by scientific_name

;');


// pre($wlor);
/*
;


*/