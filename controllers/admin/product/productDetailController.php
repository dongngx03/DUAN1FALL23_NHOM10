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

    
    // cập nhật sản phẩm 
    if(isset($_GET['soluong'])) {
        // lấy số lượng hiện tại của sản phẩm 
       $currentQuantity = getQuantityPv($_GET['pv_id']);
       // gán biến số lượng sẽ thay đổi 
       $quantityWillChange = intval($currentQuantity[0]) + intval($_GET['soluong']);

       // thay đổi số lượng 
       updateQuantityPv($_GET['pv_id'], $quantityWillChange);
    }

    // xóa bỏ 
    // echo "<pre>"; 
    // print_r($dataColor);
    // echo "<pre>"; 
?>