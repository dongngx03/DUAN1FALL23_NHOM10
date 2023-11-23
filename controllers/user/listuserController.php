<?php 
    // kết nối cơ sở dữ liệu 
    include'./models/database.php';
    // kiết nối với model product
    include'./models/userModel.php';
    
   

    // lấy tất cả dữ liệu bảng user 
    $dataUser = listUser();
    
    // echo "<pre>"; 
    // print_r($dataUser);
    // echo "<pre>"; 
?>