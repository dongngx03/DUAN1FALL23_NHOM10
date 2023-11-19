<?php  
    // kết nối cơ sở dữ liệu 
    include'./models/database.php';
    // kiết nối với model
    include'./models/productModel.php';
    // kết nối với bảng giỏ hàng 
    include'./models/cartModel.php';

   // lấy hết tất cả dữ dữ liệu cart của người dùng 
   $dataCart = getCartOnePersion($_SESSION['user_id']);
   // lấy hết màu cảu 1 sản phẩm này 
   
   


?>