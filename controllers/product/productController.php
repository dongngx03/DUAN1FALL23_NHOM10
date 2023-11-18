<?php 
     // kết nối cơ sở dữ liệu 
     include'./models/database.php';
     // kiết nối với model
     include'./models/productModel.php';

     // lấy tất cả dữ liệu cảu bảng product
     $dataProduct = readTable('products');

     //sử lý khi người dùng ấn xem chi tiết 
     if(isset($_GET['detail'])) {
        $p_id = $_GET['detail'];
        $_SESSION['p_id'] = $p_id;
        header('location: ?act=productdetail');
        return true;
     }

   //   echo "<pre>";
   //   print_r($_SESSION);
   //   echo "<pre>";

   //   session_destroy();

   // sử lý chuyển trang user và admin 

   if(isset($_GET['checkrole'])) {
      $role = $_GET['checkrole'];
      switch ($role) {
         case 4: // người dùng không 
            header('location: ?act=dangnhap');
            break;
         case 3: // trang người dùng 
            header('location: ?act=user');
            break;
      }
   }
    
?>