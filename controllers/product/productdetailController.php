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

    // lấy session p_id
    isset($_SESSION['p_id'])? $p_id = $_SESSION['p_id'] : '';
    // lấy hết các ảnh 
    $dataImg = getImgid($p_id);
    // lấy hết tất cả các màu mà chiếc giày đó đang có 
    $dataColor = getColorId($p_id);
    
    $dataProduct = getProductId($p_id);

    // thêm sản phẩm vào giỏ hàng 
    if(isset($_POST['addCart'])) {
        // nếu như mà người dùng đã đăng nhập thì được phép thêm vào giỏ hàng 
        if(isset($_SESSION['user_id'])) {
            addCart($_SESSION['user_id'],$p_id);
            header('location: ?act=cart');
        }else{
            // nếu như người dùng chưa đăng nhập thì chưa được thiêm vào giỏ hàng mà phải thoát ra đăng nhập 
            header('location: ?act=dangnhap');

        }
    }

    // $dataSize = getSizeId($p_id, 1);
    // echo "<pre>";
    // print_r($_SESSION);
    // echo "<pre>";
    
?>