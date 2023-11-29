<?php 
    // kết nối với database
    include'./models/database.php';
    // kết nối với bảng đơn hàng 
    include'./models/order_totalModel.php';

    // lấy hết tất cả các đơn hàng đang xử lý 
    $dataOrder = getAllOrder_totals(2);

    
    

?>