<?php 
     // kết nối cơ sở dữ liệu 
     include'./models/database.php';
     // kiết nối với model
     include'./models/productModel.php';

     // lấy tất cả dữ liệu cảu bảng product
     $dataProduct = readTable('products');

     //sử lý khi người dùng ấn xem chi tiết 
     if(isset($_GET['detail'])) {
        $p_id = $_GET['detail'];
        $_SESSION['p_id'] = $p_id;
        header('location: ?act=productdetail');
        return true;
     }
    
?>