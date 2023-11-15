<?php 
    // kết nối cơ sở dữ liệu 
    include'./models/database.php';
    // kiết nối với model product
    include'./models/productModel.php';
    // kết nối với bảng productVanriant
    include'./models/productVariantModels.php';
    // kết nối với bảng img
    include'./models/imgModel.php';
    // lấy dữ liệu bảng types
    $dataType = readTable('types');
    // lấy dữ liệu bảng brand 
    $dataBrand = readTable('brands');
    // lấy dữ liệu bảng size 
    $dataSize = readTable('sizes');
    // lấy dữ liệu bảng color
    $dataColor = readTable('colors');
    // lấy dữ liệu bảng product
    $dataProduct = readTable('products');


    

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

    $err1 = [];
    // thêm sản phẩm biến thể 
    if(isset($_POST['addProductVariant'])) {
        $p_id = $_POST['p_id'];
        $size_id = $_POST['size_id'];
        $color_id = $_POST['color_id'];
        $quantity = $_POST['quantity'];
        
        empty($_POST['quantity'])? $err1['quantity']='chưa cho số lượng':"";
        if(empty($err1)) {
            // thêm sản phẩm biến thể 
            addProductVariant($p_id, $size_id, $color_id, $quantity);
        }
    }

    // thêm ảnh cho từng sản phẩm 
    if(isset($_POST['addImg'])) {
        $img_url = $_FILES['img_url']['name'];
        $p_id = $_POST['p_id'];

        if( $_FILES['img_url']['name'] != "" &&  $_FILES['img_url']['error']==0) {
            $target_dir = "public/imgs/product/";
            $target_file = $target_dir . basename($_FILES["img_url"]["name"]);
            move_uploaded_file($_FILES["img_url"]["tmp_name"], $target_file);
            addImg($img_url, $p_id);
            return true;
        }   
        
    }

 
?>