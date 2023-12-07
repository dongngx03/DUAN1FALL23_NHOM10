<?php 
    include'./models/database.php';
    include'./models/productModel.php';
    include'./models/productVariantModels.php';

    $dsthongke =  load_thongke_sanpham_danhmuc();
    

    $productCountData = getProductCountByOrderStatus();
    $data1_json = json_encode($productCountData);

    // đếm xem sản phẩm nào được mua nhiều nhất 
    $countBuy = countPvBuy();


    // echo "<pre>";
    // print_r($countBuy);
    // echo "<pre>";
?>