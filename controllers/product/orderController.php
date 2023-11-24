<?php  
    // kết nối cơ sở dữ liệu 
    include'./models/database.php';
    // kiết nối với model
    include'./models/productModel.php';
    // kết nối với bảng giỏ hàng 
    include'./models/cartModel.php';

     // xóa giỏ hàng 
     if(isset($_GET['delete']) && $_GET['delete']!='') {
        $cart_id = $_GET['delete'];
        deleteCart($cart_id);
    }
    // lấy tất cả sản phẩm trong giỏ hàng của 1 khách hàng 
    $dataCart = getCartOneUser($_SESSION['user_id']);

   
    // echo "<pre>";
    // print_r($dataCart);
    // echo "<pre>";
    
   
   


?>