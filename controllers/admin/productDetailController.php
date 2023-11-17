<?php 
    // kết nối cơ sở dữ liệu 
    include'./models/database.php';
    // kiết nối với model product
    include'./models/productModel.php';
    // kết nối với bảng productVanriant
    include'./models/productVariantModels.php';
    // kết nối với bảng img
    include'./models/imgModel.php';

    // lấy id của product 
    isset($_GET['product_id'])?$p_id = $_GET['product_id']:'';
    // lấy tất cả các màu đang có của 1 sản phẩm 
    $dataColor = getColorId($p_id);
    
    // echo "<pre>"; 
    // print_r($dataColor);
    // echo "<pre>"; 
?>