<?php 
    // kiết nối với model
    include'./models/productModel.php';
    // lấy dữ liệu bảng types
    $dataType = readTable('types');
    // lấy dữ liệu bảng brand 
    $dataBrand = readTable('brands');
    // lấy dữ liệu bảng size 
    $dataSize = readTable('sizes');
    // lấy dữ liệu bảng color
    $dataColor = readTable('colors');

    

    $err = [];
    // Thêm sản phẩm 
    if(isset($_POST['addProduct'])) {
        $p_name = $_POST['p_name'];
        $p_price = $_POST['p_price'];
        $p_desc = $_POST['p_desc'];
        $brand_id = $_POST['brand_id'];
        $type_id = $_POST['type_id'];
        $img_avatar = $_FILES['img_avatar']['name'];

        

        empty($_POST['p_name'])? $err['p_name'] = 'vui lòng nhập tên product' : '';
        empty($_POST['p_price'])? $err['p_price'] = 'vui lòng nhập tên price' : '';
        empty($_POST['p_desc'])? $err['p_desc'] = 'vui lòng nhập tên desc' : '';
        
        

        if(empty($err)) {
            if($_FILES['img_avatar']['name'] != '' && $_FILES['img_avatar']['error'] == 0) {
                $target_dir = "public/imgs/product/";
                $target_file = $target_dir . basename($_FILES["img_avatar"]["name"]);
                move_uploaded_file($_FILES["img_avatar"]["tmp_name"], $target_file);
                addProduct($p_name, $p_price, $p_desc, $brand_id, $type_id, $img_avatar);
            }
        }
    }

    print_r($err);
?>