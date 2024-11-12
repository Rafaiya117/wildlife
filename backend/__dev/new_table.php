<?php
include 'sql_table_builder.php';


function db_show_all_tables(){
    global $db, $db_tb_list;
    echo 'All Tables', PHP_EOL; 
    
    
    $tables = [];
    for($i=0, $ilen=sizeof($db_tables);$i<$ilen;$i+=1){
        array_push($db_tb_list, array_values($db_tables[$i])[0]);
    }
    
    db_to_cli_table($db_tables);

} 


// db_show_all_tables();
// die();
function create_sql_enum($enum_col_name, $e_values) {
	$str_sql = '`' . $enum_col_name . '` ENUM(';

	$list = explode(',', $e_values);

	for ($i = 0, $ilen = sizeof($list); $i < $ilen; $i += 1) {
		$str_sql .= ' "' . $list[$i] . '"';

		if ($i + 1 !== $ilen) {
			$str_sql .= ', ';
		}

	}

	$str_sql .= '), ' . PHP_EOL;

	return $str_sql;
}
function desc_table($table_name){
    global $cli, $db;
    $db_tables = $db->select('desc '.$table_name.';');
    // pre($db_tables);
    $cli->show_db_table($db_tables);
}



$selected_tablename = '';


function view_create_new_tables(){
    global $cli, $sql_builder, $selected_tablename;
    echo '🌳🌳🌳 Create Table ... ', PHP_EOL;
    $table_name = $cli->input("%s", 'Enter Table');
    $sql_builder->create_table($table_name);   
    
    // input new items on table
    while(true){
        desc_table($sql_builder->selected_table);    
        $cli->show_single_array_table($sql_builder->col_type_list);
        $col_type_id = $cli->input("%d", 'Colum Defination 0-5 (use 99 to quit)');
        if($col_type_id === 99){
            return;
        }
        $col_name = $cli->input("%s", 'Column Name');
        if($col_type_id === 5){
            $enum_options = $cli->input("%s", 'Enter Enum options separeted with "," . i.e. mother,father,brother ');
            $sql_builder->create_sql_enum($enum_options);
        }
        $sql_builder->add_col($col_name,  $sql_builder->col_type_list[$col_type_id]);

    }

}

view_create_new_tables();




function action_main_menu($optin){
    if($optin === 0){
        die('Thank you ... Bye bye... ');
    }elseif($optin === 1){
        db_show_all_tables();
    }elseif($optin === 2){
        view_create_new_tables();
    }
}


function view_main_menu(){
    system('clear');
    echo ' ℹ️ SQL Tables !! 🚕🚕', PHP_EOL;
    echo ' 1. show all tables 🚕', PHP_EOL;
    echo ' 2. create New table 🚕', PHP_EOL;
    echo ' 0. quit 🚕', PHP_EOL;
    fscanf(STDIN, "%d", $optin);
    system('clear');
    action_main_menu($optin);

}

// view_main_menu();












