<?php 
    // kết nối cơ sở dữ liệu 
    include'./models/database.php';
    // kiết nối với model product
    include'./models/productModel.php';
    // kết nối với bảng productVanriant
    include'./models/productVariantModels.php';
    // kết nối với bảng img
    include'./models/imgModel.php';
    // lấy dữ liệu bảng size 
    $dataSize = readTable('sizes');
    // lấy dữ liệu bảng color
    $dataColor = readTable('colors');
    // lấy dữ liệu bảng của 1 product chỉ định 
    isset($_GET['product_id'])?$p_id = $_GET['product_id']:'';
    $product = getProductId($p_id);

    $err = [];
    // thêm sản phẩm biến thể 
    if(isset($_POST['addProductVariant'])) {
        $p_id = $_POST['p_id'];
        $size_id = $_POST['size_id'];
        $color_id = $_POST['color_id'];
        $quantity = $_POST['quantity'];

        empty($_POST['quantity'])? $err['quantity'] = "vui lòng nhập số lượng ":'';

        // check 
        if(empty($err)) {
            // check tiếp xem đã tòn tại sản phẩm biến thể nào như vậy chưa 
            $check = checkProductVariant($p_id, $size_id, $color_id);
            if($check == 0) {
               $add = addProductVariant($p_id, $size_id, $color_id, $quantity);
                if(addProductVariant($p_id, $size_id, $color_id, $quantity)) {
                    echo "<script>alert('Thêm Thành Công ')</script>";
                }
            }else{
                $err['variantExit'] = 'Sản phẩm biến thể đã tồn tại ';
            }
        }
    }

?>