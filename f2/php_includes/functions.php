<?php

function js_loader($js_load_array){
    for ($i=0, $ilen = sizeof($js_load_array); $i < $ilen;$i +=1 ){
        echo '<script src="',$js_load_array[$i],'"></script>', PHP_EOL;
    }

}

function css_loader($css_load_array){
    for ($i=0, $ilen = sizeof($css_load_array); $i < $ilen;$i +=1 ){
        
        echo '<link rel="stylesheet" href="',$css_load_array[$i],'"> ', PHP_EOL;
    }

}

// function head_loader(){

// }


$tranlation_array = unserialize(file_get_contents('bin_file/translation_local.bin'));


// include __DIR__.'/../../backend/translation.php';

function trans($text_id,  $lang = 'en'){
    // return from_db_trans($text_id,  $lang);
    global $tranlation_array;
    if(array_key_exists($text_id, $tranlation_array)){
        return  $tranlation_array[$text_id][$lang];
    }

    return 'Language not found of key: '. $text_id . ' ~ lang: ' .$lang ;
}


$page_template_list = [];

function load_html_part_of_php_files($file_path){
    global $page_template_list;
    $base_filename = basename($file_path, '.php');    
    array_push($page_template_list, $base_filename);
    
    echo '<script class="page_template" type="text/template"  id="pg_',$base_filename, '" >';
    include $file_path;
    echo '</script end_id="pg_',$base_filename, '" >';

}

function load_js_script($file_path){

    echo '<script filename="',$file_path,'">',PHP_EOL; 

    echo file_get_contents($file_path);



    echo '</script filename="',$file_path,'">', PHP_EOL;
}


function what_to_do_with_files($file_path){
    $ftype = pathinfo($file_path, PATHINFO_EXTENSION);
     

    if($ftype === 'php'){
        load_html_part_of_php_files($file_path);
    }elseif($ftype === 'js'){
        load_js_script($file_path);
    }
    // if($ftype === 'js'){
        
    // }
    
    

}


function file_crowler(){

    $dir_array = [realpath(__DIR__.'/../pages/')];

    while($dir_array){
        $dir_name = array_pop($dir_array);
        // echo $dir_name, PHP_EOL;

        $scan = array_diff(scandir($dir_name, 1), ['.', '..']);
        // print_r($scan);
        
        foreach($scan as $file) {
            $folder_file = $dir_name.'/'. $file;
            if (is_dir($folder_file)) {
               array_push($dir_array, $folder_file);
            }else{
                // echo $folder_file, ' ===> ', ,  PHP_EOL;
                what_to_do_with_files($folder_file);

            }
        }


    }
    
}

function load_all_html_files(){

    

    echo '<div id="xxx_templeates" style="display:none;" >'; 
    file_crowler();
    echo '</div>';
    global $page_template_list;
    echo '<script>', PHP_EOL;; 
    echo 'var template_list = ', json_encode($page_template_list), ';', PHP_EOL;
    echo '</script>', PHP_EOL;;
}