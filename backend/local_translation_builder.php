<?php
include 'translation.php';
## 
function get_trans_data_into_file()
{
    global $db;
    $result = $db->select('SELECT text_id, bangla, english from `trans`');

    // print_r($result);
    $data = [];
    for ($i = 0, $ilen = sizeof($result); $i < $ilen; $i += 1) {
        $word = $result[$i];
        $data[$word['text_id']] = [
            'bn' => $word['bangla'],
            'en' => $word['english'],
        ];
    }
    // pre($data);
    file_put_contents('../f2/bin_file/translation_local.bin', serialize($data));
    file_put_contents('../f3/bin_file/translation_local.bin', serialize($data));
}


get_trans_data_into_file();


function get_trade_for_data_into_file()
{
    global $db;
    $result = $db->select('SELECT * from `list_of_trade` ');

    // print_r($result);
    $data = [];
    $last_name = '-99999';
    for ($i = 0, $ilen = sizeof($result); $i <= $ilen; $i += 1) {

        $word = $result[$i];
        $name = '';


        if ($word['name'] !== $last_name) {
            $last_name = $word['name'];
            $name =  $word['name'];
        }

        $data[$word['trade_id']] = [
            'b' => $name,
            'e'=>$word['image'],
            'c' => $word['english_name'],
            'd' => $word['description'],
            'f'=>$word['scientific_name'],
            'g'=>$word['IUCN'],
            'h'=>$word['CITES'],
            'i'=>$word['type'],
            'j'=>$word['bangla_name'],
            'k'=>$word['scientific_ref'],
            'm'=>$word['schedule'],

        ];
    }
    //  pre($data);
    file_put_contents('../f2/bin_file/list_of_trade_build.bin', serialize($data));
    file_put_contents('../f3/bin_file/list_of_trade_build.bin', serialize($data));
    
}


get_trade_for_data_into_file();

// function_for law list

function get_law_for_data_into_file()
{
    global $db;

    $result = $db->select('SELECT law_id, law_name, Section_heads ,Section, Sub_section, law_details from `all_laws` ORDER BY `law_name`, id ');



    $data = [];


    $last_law_name = '-99999';
    $last_section = '-99999';
    for ($i = 0, $ilen = sizeof($result); $i < $ilen; $i += 1) {

        $word = $result[$i];
        $law_name = '';
        $Section = '';

        if ($word['law_name'] !== $last_law_name) {
            $last_law_name = $word['law_name'];
            $law_name =  $word['law_name'];
            
        }
        if ($word['Section'] !== $last_section) {
            $last_section = $word['Section'];
            $Section =  $word['Section'];
            
        }

        $data[$i] = [
             'law_id' => $word['law_id'],
            'law_name' => $law_name,
            'Section_heads' => $word['Section_heads'],
            'Section' => $Section ,
            'Sub_section' => $word['Sub_section'],
            'law_details' => $word['law_details'],
        ];
    }
    file_put_contents('../f2/bin_file/list_of_law_build.bin', serialize($data));
    file_put_contents('../f3/bin_file/list_of_law_build.bin', serialize($data));
}
get_law_for_data_into_file();

function get_full_law_for_data_into_file()
{
    global $db;

    $result = $db->select('SELECT law_id, law_name, Section_heads ,Section, Sub_section, law_details from `all_laws` ORDER BY `law_name`, id');



  
    file_put_contents('../f2/bin_file/list_of_full_law_build.bin', serialize($result));
    file_put_contents('../f3/bin_file/list_of_full_law_build.bin', serialize($result));
}
get_full_law_for_data_into_file();

// function_for all species


function get_species_for_data_into_file()
{
    global $db;
    $result = $db->select('SELECT * from `species`');

    //$data = [];


    for ($i = 0, $ilen = sizeof($result); $i < $ilen; $i += 1) {

        // $word = $result[$i];
        // $data[$i] = [
        //     'id' => $word['id'],
        //     'Bangla_name' => $word['bangla_name'],
        //     'English_name' => $word['english_name'],
        //     'Scientific_name' => $word['scientific_name'],
        //     'Group' => $word['g_name'],
        //     'Sub Group' => $word['Sub_group'],
        //     'Sub Group BN' => $word['Sub_group_bn'],
        //     'Subspecies' => $word['subspecies'],
        //     'IUCN' => $word['IUCN'],
        //     'CITES' => $word['CITES'],


        // ];
        $result[$i];
    }
    file_put_contents('../f2/bin_file/list_of_species_build.bin', serialize($result));
    file_put_contents('../f3/bin_file/list_of_species_build.bin', serialize($result));
}
get_species_for_data_into_file();

function get_schedule_1_for_data_into_file()
{
    global $db;
    $result = $db->select('SELECT * from `schedule_1`');

    $data = [];


    for ($i = 0, $ilen = sizeof($result); $i < $ilen; $i += 1) {

        $word = $result[$i];
        $data[$i] = [
            'id' => $word['id'],
            'Bangla_name' => $word['bangla_name'],
            'English_name' => $word['english_name'],
            'Scientific_name' => $word['scientific_name'],
            'Schedule' => $word['schedule'],
            'Group' => $word['g_name'],
            'Sub Group' => $word['Sub_group'],
            'Subspecies' => $word['subspecies'],
            'IUCN' => $word['IUCN'],
            'CITES' => $word['CITES'],
            


        ];
    }
    file_put_contents('../f2/bin_file/schedule_1_build.bin', serialize($data));
    file_put_contents('../f3/bin_file/schedule_1_build.bin', serialize($data));
}
get_schedule_1_for_data_into_file();

function get_schedule_2_for_data_into_file()
{
    global $db;
    $result = $db->select('SELECT * from `schedule_2`');

    $data = [];


    for ($i = 0, $ilen = sizeof($result); $i < $ilen; $i += 1) {

        $word = $result[$i];
        $data[$i] = [
            'id' => $word['id'],
            'Bangla_name' => $word['bangla_name'],
            'English_name' => $word['english_name'],
            'Scientific_name' => $word['scientific_name'],
            'Schedule' => $word['schedule'],
            'Group' => $word['g_name'],
            'Sub Group' => $word['Sub_group'],
            'Subspecies' => $word['subspecies'],
            'IUCN' => $word['IUCN'],
            'CITES' => $word['CITES'],
            


        ];
    }
    file_put_contents('../f2/bin_file/schedule_2_build.bin', serialize($data));
    file_put_contents('../f3/bin_file/schedule_2_build.bin', serialize($data));
}
get_schedule_2_for_data_into_file();

function get_schedule_4_for_data_into_file()
{
    global $db;
    $result = $db->select('SELECT * from `schedule_4`');

    $data = [];


    for ($i = 0, $ilen = sizeof($result); $i < $ilen; $i += 1) {

        $word = $result[$i];
        $data[$i] = [
            'id' => $word['id'],
            'Bangla_name' => $word['bangla_name'],
            'English_name' => $word['english_name'],
            'Scientific_name' => $word['scientific_name'],
            'Schedule' => $word['schedule'],
            'Group' => $word['g_name'],
            'Sub Group' => $word['Sub_group'],
            'Subspecies' => $word['subspecies'],
            'IUCN' => $word['IUCN'],
            'CITES' => $word['CITES'],
            


        ];
    }
    file_put_contents('../f2/bin_file/schedule_4_build.bin', serialize($data));
    file_put_contents('../f3/bin_file/schedule_4_build.bin', serialize($data));
}
get_schedule_4_for_data_into_file();

function get_exotics_species_for_data_into_file()
{
    global $db;
    $result = $db->select('SELECT * from `species` where `type`="Exotic"');

    // $data = [];


    for ($i = 0, $ilen = sizeof($result); $i < $ilen; $i += 1) {

        
        $result[$i]['bangla_name'] = ' - '; 
    }
    file_put_contents('../f2/bin_file/list_of_exotics_species_build.bin', serialize($result));
    file_put_contents('../f3/bin_file/list_of_exotics_species_build.bin', serialize($result));
}
get_exotics_species_for_data_into_file();

