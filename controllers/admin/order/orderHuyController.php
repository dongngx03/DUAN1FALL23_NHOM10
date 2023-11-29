<?php 
    // kết nối với database
    include'./models/database.php';
    // kết nối với bảng đơn hàng 
    include'./models/order_totalModel.php';

    // lấy hết tất cả các đơn hàng đã hủy 
    $dataOrder = getAllOrder_totals(4);

    
    

?>