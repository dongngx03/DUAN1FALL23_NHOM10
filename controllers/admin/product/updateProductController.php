<?php 
    // kết nối cơ sở dữ liệu 
    include'./models/database.php';
    // kiết nối với model product
    include'./models/productModel.php';
    // kết nối với bảng productVanriant
    include'./models/productVariantModels.php';
    // kết nối với bảng img
    include'./models/imgModel.php';

    
    // Lấy thong tin sản phẩm in về 
    if(isset($_GET['p_id'])) {
        $data = getProductId($_GET['p_id']);
        
    }

    $brand = readTable('brands');

    $type = readTable('types');
    
    // echo "<pre>"; 
    // print_r($dataProduct);
    // echo "<pre>"; 
    
?>