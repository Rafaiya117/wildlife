<?php
include '_a.php';


class CLI_SQL{

    var $table_list = [], $selected_table = '', 
    
    $col_type_list = [
        'varchars',
		'boolen' ,
		'number',
		'timestamp' ,
		'text_col',
        'enum' , 
    ], 
    $col_type = [
        'varchars' => ' VARCHAR(256) ',
		'boolen' => ' BOOLEAN DEFAULT FALSE ',
		'number' => ' int(11) ',
		'timestamp' => ' TIMESTAMP DEFAULT "0000-00-00 00:00:00" ',
		'text_col' => ' TEXT ',
        'enum' => '------------------------------', 
    ];

    function get_table_list(){
        global $db;
        $db_tb_list = [];
        $db_tables = $db->select('show tables;');
        
        // print_r($db_tables);

        for($i=0, $ilen=sizeof($db_tables);$i<$ilen;$i+=1){
            // $db_tb_list
            array_push($db_tb_list, array_values($db_tables[$i])[0]);
        }
        $this->table_list = $db_tb_list;

    }

    function __construct()
    {
        $this->get_table_list();
    }

    function create_table($table_name) {

        global $db;

        $db->action('DROP TABLE IF EXISTS `' . $table_name . '` ;');
        
        $sql = 'CREATE TABLE `' . $table_name . '` (
                        id int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                        created_on TIMESTAMP DEFAULT now(),
                        created_by_uid int(11) UNSIGNED,
                        created_by_name varchar(256),
                        updated_on TIMESTAMP DEFAULT "0000-00-00 00:00:00" ON UPDATE now(),
                        updated_by_uid int(11) UNSIGNED,
                        PRIMARY KEY (id)
                );';

        
        
        $db->action($sql);
        $this->selected_table = $table_name;
    }

    
    function cols_id_check(){
        global $db; 
        $this->cols = [];
        $db_cols = $db->select('desc '.$this->selected_table.'; ');

        for($i=0, $ilen=sizeof($db_cols);$i<$ilen;$i+=1){
            $this->cols[$i] = $db_cols[$i]['Field'];
        }

        
        
        $this->push_col_location = $ilen - 6;
        
        

    }


    function create_sql_enum($e_values) {
        $str_sql = ' ENUM(';
    
        $list = explode(',', $e_values);
    
        for ($i = 0, $ilen = sizeof($list); $i < $ilen; $i += 1) {
            $str_sql .= ' "' . $list[$i] . '"';
    
            if ($i + 1 !== $ilen) {
                $str_sql .= ', ';
            }
    
        }
    
        $str_sql .= ') ' . PHP_EOL;
        $this->col_type['enum'] = $str_sql;
        
        // return $str_sql;
    }

    function add_col($col_name, $col_defination_key, $_push_after_id = -99){
        $this->cols_id_check();
        if(array_search($col_name,$this->cols, true)!= null){

            echo '⛔ "',$col_name,'" col exist!! @', $this->selected_table , PHP_EOL,
                ' ⛔ please drop the 🪑 col then try again';

            return; 
        }

        $col_defination = $this->col_type[$col_defination_key];

        if($_push_after_id < 1){
            $after_col_name = $this->cols[$this->push_col_location];
        }else{
            $after_col_name = $this->cols[$_push_after_id];
        }

        $sql = 'ALTER TABLE '. $this->selected_table.' ADD '
                . $col_name 
                .' '. $col_defination. ' 
                after '. $after_col_name .' ; ';
        global $db;

        echo PHP_EOL, $sql,PHP_EOL;
        
        $db->action($sql);
    }

}

$sql_builder = new CLI_SQL;

// $sql_builder->selected_table = 'tom2';
// $sql_builder->add_col($col_name='mother_name', $type='varchar(256)');



