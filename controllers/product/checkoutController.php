<?php  
 // kết nối cơ sở dữ liệu 
 include'./models/database.php';
 // kiết nối với model
 include'./models/productModel.php';
 // kết nối với bảng user
 include'./models/userModel.php';

 // lấy thông tin của người dùng 
$dataUser = getOneUser($_SESSION['user_id']);
    
if(isset($_GET['data'])) {
    // Lấy dữ liệu gửi từ client
    $data = json_decode($_GET['data'], true);
    $_SESSION['data'] = $data;
    // echo "<pre>";
    // print_r($data);
    // echo "<pre>";

    extract($data);

    // Trích xuất các mảng từ đối tượng JSON
    // $product_id = $data['product_id'];
    // $quantities = $data['quantities'];
    // $prices = $data['prices'];
    // $priceSumAll = $data['priceSumAll'];
    // $oi_status = 1;

    
    // // tạo mới 1 đơn hàng để chứa các sản phẩm chuẩn bị mua và lưu cái id hóa đơn vừa tạo vào sesion 
    // addOrder_tottals($priceSumAll, $_SESSION['user_id']);

    // for ($i=0; $i < sizeof($product_id) ; $i++) { 
    //     // thay đổi ot_id
    //     $query = " UPDATE order_items SET ot_id = :ot_id, oi_price = :oi_price, oi_quantity = :oi_quantity, oi_status = :oi_status  WHERE oi_id = :oi_id ";
    //     $stmt = connect()->prepare($query);
    //     $stmt->bindParam(':ot_id', $_SESSION['ot_id']);
    //     $stmt->bindParam(':oi_id',$product_id[$i]);
    //     $stmt->bindParam(':oi_price',$prices[$i]);
    //     $stmt->bindParam(':oi_quantity',$quantities[$i]);
    //     $stmt->bindParam(':oi_status', $oi_status); 
        
    //     $stmt->execute(); 
    // }
    // làm xong công việc này thì xóa bỏ session chứa id đơn hàng cũ 
  
   
  
}

// mua 
if(isset($_GET['buy'])) {
    $data = $_SESSION['data'];
    // Trích xuất các mảng từ đối tượng JSON
   $product_id = $data['product_id'];
   $quantities = $data['quantities'];
   $prices = $data['prices'];
   $priceSumAll = $data['priceSumAll'];
   $oi_status = 1;

   
//    // // tạo mới 1 đơn hàng để chứa các sản phẩm chuẩn bị mua và lưu cái id hóa đơn vừa tạo vào sesion 
   addOrder_tottals($priceSumAll, $_SESSION['user_id']);

   for ($i=0; $i < sizeof($product_id) ; $i++) { 
       // thay đổi ot_id
       $query = " UPDATE order_items SET ot_id = :ot_id, oi_price = :oi_price, oi_quantity = :oi_quantity, oi_status = :oi_status  WHERE oi_id = :oi_id ";
       $stmt = connect()->prepare($query);
       $stmt->bindParam(':ot_id', $_SESSION['ot_id']);
       $stmt->bindParam(':oi_id',$product_id[$i]);
       $stmt->bindParam(':oi_price',$prices[$i]);
       $stmt->bindParam(':oi_quantity',$quantities[$i]);
       $stmt->bindParam(':oi_status', $oi_status); 
       
       $stmt->execute(); 
   }

  
   // làm xong công việc này thì xóa bỏ session chứa id đơn hàng cũ 
}








?>