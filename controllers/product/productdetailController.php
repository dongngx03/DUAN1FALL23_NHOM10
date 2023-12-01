<?php 
    // kết nối cơ sở dữ liệu 
    include'./models/database.php';
    // kiết nối với model product
    include'./models/productModel.php';
    // kết nối với bảng productVanriant
    include'./models/productVariantModels.php';
    // kết nối với bảng img
    include'./models/imgModel.php';
    // kết nối với bảng cart
    include'./models/cartModel.php';
    // kết nối với bảng feedback
    include'./models/feedbackModel.php';

    // lấy session p_id
    isset($_SESSION['p_id'])? $p_id = $_SESSION['p_id'] : '';
    // lấy hết các ảnh 
    $dataImg = getImgid($p_id);
    // lấy hết tất cả các màu mà chiếc giày đó đang có 
    $dataColor = getColorId($p_id);
    
    $dataProduct = getProductId($p_id);

    // lấy hêt phản hồi của 1 sản phẩm 
    $dataFeedBack = getFeedBackforProduct($p_id);


    
    // echo "<pre>";
    // print_r($dataFeedBack);
    // echo "<pre>";
    
?>