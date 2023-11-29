<?php  
    // kết nối cơ sở dữ liệu 
    include'./models/database.php';
    // kiết nối với model
    include'./models/productModel.php';
    // kết nối với bảng giỏ hàng 
    include'./models/order_itemsModel.php';

    
    // xóa hàng trong giỏ 
    if(isset($_GET['delete'])) {
        $oi_id = $_GET['delete'];
        deleteOrder_items($oi_id);
    }
    
    // lấy tất cả sản phẩm trong giỏ hàng của 1 khách hàng 
    $dataOrder_item = readOrder_items($_SESSION['user_id']);

    
    
    // echo "<pre>";
    // print_r($_SESSION);
    // echo "<pre>";
    

?>