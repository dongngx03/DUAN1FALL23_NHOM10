<?php 
    session_start();
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");  
    // liên kết với file chung 
    include'database.php';

    // xử lý lấy dữ liệu theo tưng trạng thái 
    if(isset($_GET['handle_id'])) {
        $handle_id = $_GET['handle_id'];

        $data = getOrder_totalOneUser($_SESSION['user_id'], $handle_id);
        if(!empty($data)) {
            echo json_encode($data);
        }else{
            echo json_encode('empty');
        }
    }
?>

