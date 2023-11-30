<?php 
     session_start();
     header("Access-Control-Allow-Origin: *");
     header("Content-Type: application/json");  
     // liên kết với file chung 
     include'database.php';

     // check xem đơn hàng đang là trạng thái gì 
     if(isset($_GET['ot_id'])) {
        // lấy handle_id rồi trả về 
        $currentHandle_id = getHandle_idOfOrder_total($_GET['ot_id']);
        echo json_encode($currentHandle_id);
     }
?>