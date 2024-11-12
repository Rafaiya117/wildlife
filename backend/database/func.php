<?PHP

function post_sab($uri, $post_data){
    global $config;

    $headers = [
        'accept: application/json',
        'Content-Type: application/json',
        'authorization: Bearer ' . $config['api_token'] 
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $config['apiEndPoint'].$uri);

    // echo  $config['apiEndPoint'].$uri;

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));  
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    
    $server_output = curl_exec($ch);
    if($server_output === false)
    {
        echo 'Curl error: ' . curl_error($ch);
    }
    curl_close($ch);
    
    return $server_output;
}  


function cache($id, $obj = false){
    global $config;
    
    

    $filename = $config['cache_folder']. $id .'.x';


    // read the file.. if can't the run and write
    if(file_exists($filename)){
        return unserialize(file_get_contents($filename));
    }
     
    if($obj !== false){
        file_put_contents($filename,serialize($obj));
        return $obj;
    }
    
    throw new Exception('Nothing is saved in this id: ' . $id);
    

}


function keys_obj($obj){
    print_r( array_keys((array) $obj));

}


function page_blocking_message($title, $body){
    echo '<div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
    <div style="margin: 10px auto; border: 1px dotted #dacaca;padding:20px; font-size:1.7em">
    <h1>',$title,'</h1>
    <p>',$body,'</p></div></div>';
}



function pre($data, $died = null){
    echo '<pre>';
    print_r($data);
    
    echo '</pre>';
    if($died !== null){
        page_blocking_message('Died Pre Killed', $died);

        die();
    }
}


function sanitizeXSS(){
    $_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
    $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $_REQUEST = (array)$_POST + (array)$_GET + (array)$_REQUEST;
}

function set_header(){
    // header('Content-Type: application/json; charset=utf-8');
}


// function json_send($data){
    
//     echo json_encode($data);
// }

function json_send($data) {

	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($data);
	exit();
}