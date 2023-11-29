<?php 
    // kết nối cơ sở dữ liệu 
    include'./models/database.php';
    // kiết nối với model product
    include'./models/commentModel.php';
    // kết nối với bảng img

    // lấy tất cả dữ liệu bảng sản phẩm 
    $dataComments = statisticalCmt();

    // echo "<pre>"; 
    // print_r($dataProduct);
    // echo "<pre>"; 
?>