<?php 

if (!defined('STDIN')) {
    // accessed through the web browser
    die('You should not run this in browser!!');
} 
require_once 'Console/Table.php';


class CLI{
    function input($type, $prompt=''){
    
        echo PHP_EOL, $prompt, PHP_EOL;
    
        fscanf(STDIN, $type, $user_input);
        return $user_input; 
    }
    function show_db_table($db_array){
        echo PHP_EOL,  PHP_EOL;
        if(empty($db_array)){
            echo '!!! Empty array nothing to print !!';
            return ;
        }
    
        $tbl = new Console_Table();
        // pre([0]array_keys($db_array[0]));
        $tbl->setHeaders(
           array_merge(['#'], array_keys($db_array[0]))
        );
    
        for($i=0, $ilen = sizeof($db_array); $i <$ilen ; $i+=1){
            $tbl->addRow([$i] + $db_array[$i]);
        }
        
        
        echo $tbl->getTable();
    }

    function show_single_array_table($array){
        if(empty($array)){
            echo '!!! Empty array nothing to print !!';
            return ;
        }
    
        
    
        $tbl = new Console_Table();
        for($i=0, $ilen = sizeof($array); $i <$ilen ; $i+=1){
            $tbl->addRow([$i, $array[$i]]);
        }
        echo $tbl->getTable();
    
    }

    function table($array){
    
        if(empty($array)){
            echo '!!! Empty array nothing to print !!';
            return ;
        }
    
        $tbl = new Console_Table();
        // pre([0]array_keys($db_array[0]));
        // $tbl->setHeaders(
        // //    array_merge(['#'], array_keys($array))
        // );
        
        for($i=0, $ilen = sizeof($array); $i <$ilen ; $i+=1){
            $tbl->addRow($array[$i]);
        }
        
        
        echo $tbl->getTable();
        
    }
    
};


$cli = new CLI;





