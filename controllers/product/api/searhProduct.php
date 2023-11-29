<?php 
    session_start();
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");  
    // liên kết với file chung 
    include'database.php';
    
    if(isset($_GET['value'])) {
        $data = searhPforname($_GET['value']);
       if(!empty($data)) {
            echo json_encode($data);
       }else{
            $data[0] = 'khong tim thay';
        echo json_encode($data[0]);
       }
    }
?>