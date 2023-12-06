<?php 
    include'./models/database.php';
    include'./models/productModel.php';

    $dsthongke =  load_thongke_sanpham_danhmuc();
    

    $productCountData = getProductCountByOrderStatus();
    $data1_json = json_encode($productCountData);
?>