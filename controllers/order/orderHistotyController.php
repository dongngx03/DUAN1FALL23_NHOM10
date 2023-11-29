<?php 
    // kết nói 
    include'./models/database.php';
    // kết nối với bảng order
    include'./models/order_totalModel.php';
    // kết nối với bảng ordercon
    
    // lấy tất cả đơn hàng đang xử lý của 1 gnuwofi 
    $dataOrderWaitting = getOrder_totalOneUser($_SESSION['user_id'], 1);
    

?>