<?php 
    // kết nối cơ sở dữ liệu 
    include'./models/database.php';
    // kiết nối với model product
    include'./models/productModel.php';
    // kết nối với bảng productVanriant
    include'./models/productVariantModels.php';
    // kết nối với bảng img
    include'./models/imgModel.php';

    // lấy tất cả dữ liệu bảng sản phẩm là giày 
    $dataProduct = getProductFromType(1);
    
    // echo "<pre>"; 
    // print_r($dataProduct);
    // echo "<pre>"; 
?>