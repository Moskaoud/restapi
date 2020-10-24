<?php
session_start();
header("Content-type: application/json");
require_once 'config.php';

$output = array('flag'=>0,'msg'=>'invalid request');

if(isset($_SESSION['username']) && !empty($_sessio['username'])){
    
    $query = "select * from blogs";
    $results = $conn->query($query);

    $data = [];
    while(($item = $results->fetch_assoc())!== null)
    {
        $data[] = $item;
    }

    if(count($data)>0)
    {
        $output['data'] = $data;
        $output['flag'] = 1;
        $output['msg'] = '';

    }
    else 
    {
        $output['flag'] = 0;
        $output['msg'] = 'no data';
    }
}else{
    $output['flag'] = 0;
        $output['msg'] = 'you have not the authority to get this data';
}


echo json_encode($output);