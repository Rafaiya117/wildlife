<?php 
include 'all_species.php';

function get_g_data_into_file($sub_group, $filename){
    global $db;
    

    
    $result = $db->select('SELECT * 
                                FROM `species`
                                where  `Sub_group` = ?
                                ' , $sub_group);
   
//$data = [];

for($i=0,$ilen=sizeof($result); $i<$ilen;$i+=1){

// $word = $result[$i];
// $data[$i] = [$word['Sub_group']] = [
//     'id' => $word['id'],
//     'Group name' => $word['g_name'],
//     'bangla_name'=> $word['bangla_name'],
//     'english_name'=> $word['english_name'],
//     'scientific_name'=> $word['scientific_name'],
//     'scientific_Ref'=> $word['scientific_Ref'],
//     'schedule'=> $word['schedule'],
//     'IUCN'=> $word['IUCN'],
//     'CITES'=> $word['CITES'],
//     'Type'=> $word['type'],
// ];
    $result[$i];
    }
    file_put_contents($filename, serialize($result));

}

get_g_data_into_file('Toad', '../f2/bin_file/Toad.bin');
get_g_data_into_file('Frog', '../f2/bin_file/Frog.bin');
get_g_data_into_file('Duck', '../f2/bin_file/Duck.bin');
get_g_data_into_file('Parakeet', '../f2/bin_file/Parakeet.bin');
get_g_data_into_file('Raptor', '../f2/bin_file/Raptor.bin');
get_g_data_into_file('Hornbill', '../f2/bin_file/Hornbill.bin');
get_g_data_into_file('Waterbird', '../f2/bin_file/Waterbird.bin');
get_g_data_into_file('Woodpecker', '../f2/bin_file/Woodpecker.bin');
get_g_data_into_file('Owl', '../f2/bin_file/Owl.bin');
get_g_data_into_file('Fowl', '../f2/bin_file/Fowl.bin');
get_g_data_into_file('Kingfisher', '../f2/bin_file/Kingfisher.bin');
get_g_data_into_file('Shorebird', '../f2/bin_file/Shorebird.bin');
get_g_data_into_file('Forest bird', '../f2/bin_file/Forest bird.bin');
get_g_data_into_file('Dove & Pigeon', '../f2/bin_file/Dove & Pigeon.bin');
get_g_data_into_file('Coral', '../f2/bin_file/Coral.bin');
get_g_data_into_file('Crab', '../f2/bin_file/Crab.bin');
get_g_data_into_file('Lobster', '../f2/bin_file/Lobster.bin');
get_g_data_into_file('Fish', '../f2/bin_file/Fish.bin');
get_g_data_into_file('Shark', '../f2/bin_file/SharkRay.bin');
get_g_data_into_file('Ray', '../f2/bin_file/Ray.bin');
get_g_data_into_file('Butterfly', '../f2/bin_file/Butterfly.bin');
get_g_data_into_file('Insect', '../f2/bin_file/Insect.bin');
get_g_data_into_file('Large mammal', '../f2/bin_file/Large mammal.bin');
get_g_data_into_file('Small mammal', '../f2/bin_file/Small mammal.bin');
get_g_data_into_file('Shell', '../f2/bin_file/Shell.bin');
get_g_data_into_file('Orchid', '../f2/bin_file/Orchid.bin');
get_g_data_into_file('Plant', '../f2/bin_file/Plant.bin');
get_g_data_into_file('Crocodile', '../f2/bin_file/Crocodile.bin');
get_g_data_into_file('Lizard', '../f2/bin_file/Lizard.bin');
get_g_data_into_file('Tortoise', '../f2/bin_file/Tortoise.bin');
get_g_data_into_file('Snake', '../f2/bin_file/Snake.bin');
get_g_data_into_file('Sea Turtle', '../f2/bin_file/Sea Turtle.bin');
get_g_data_into_file('Freshwater Turtle', '../f2/bin_file/Freshwater Turtle.bin');
