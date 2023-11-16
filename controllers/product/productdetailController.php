<?php 
    // kết nối cơ sở dữ liệu 
    include'./models/database.php';
    // kiết nối với model product
    include'./models/productModel.php';
    // kết nối với bảng productVanriant
    include'./models/productVariantModels.php';
    // kết nối với bảng img
    include'./models/imgModel.php';

    // lấy session p_id
    isset($_SESSION['p_id'])? $p_id = $_SESSION['p_id'] : '';
    // lấy hết các ảnh 
    $dataImg = getImgid($p_id);
    // lấy hết tất cả các màu mà chiếc giày đó đang có 
    $dataColor = getColorId($p_id);
    
    $dataProduct = getProductId($p_id);

    // $dataSize = getSizeId($p_id, 1);
    // echo "<pre>";
    // print_r($dataProduct);
    // echo "<pre>";
    
?>