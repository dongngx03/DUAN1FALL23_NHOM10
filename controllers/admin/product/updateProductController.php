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
        $_SESSION['up_p_id'] = $_GET['p_id'];
        
    }

    $brand = readTable('brands');

    $type = readTable('types');
    $err = [];

    // cập nhật sản phẩm 
    if(isset($_POST['updateProduct'])) {
        $p_name = $_POST['p_name'];
        $p_price = $_POST['p_price'];
        $p_desc = $_POST['p_desc'];
        $brand_id = $_POST['brand_id'];
        $type_id = $_POST['type_id'];
        $img_avatar = $_FILES['img_avatar']['name'];

        empty($_POST['p_name'])? $err['p_name'] = 'Vừa nãy Bạn chưa Nhập tên sản Phẩm ':'';
        empty($_POST['p_price'])? $err['p_price'] = 'Vừa nãy Bạn chưa Nhập giá sản phẩm ':'';
        empty($_POST['p_desc'])? $err['p_desc'] = 'Vừa nãy Bạn chưa Nhập Mô tả sản phẩm  ':'';

        if(empty($err)) {
            // caaph nhật cả ảnh 
            if($_FILES['img_avatar']['name'] != "" && $_FILES['img_avatar']['error']==0) {
                $target_dir = "public/imgs/product/";
                $target_file = $target_dir . basename($_FILES["img_avatar"]["name"]);
                move_uploaded_file($_FILES["img_avatar"]["tmp_name"], $target_file);
                updateAllAddImg($_SESSION['up_p_id'], $p_name, $p_price, $p_desc,$img_avatar, $brand_id, $type_id);
                header('location: ?admin=productlist');
            }else{
                updateAllNotImg($_SESSION['up_p_id'], $p_name, $p_price, $p_desc, $brand_id, $type_id);
                header('location: ?admin=productlist');
            }
        }
    }
    
    // echo "<pre>"; 
    // print_r($dataProduct);
    // echo "<pre>"; 
    
?>