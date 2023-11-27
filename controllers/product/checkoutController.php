<?php  
 // kết nối cơ sở dữ liệu 
 include'./models/database.php';
 // kiết nối với model
 include'./models/productModel.php';
 // kết nối với bảng user
 include'./models/userModel.php';

 // lấy thông tin của người dùng 
$dataUser = getOneUser($_SESSION['user_id']);

// lấy điaạ chỉ người dùng để ném vào đơn hàng 
$address = $dataUser[0]['diatri_chitiet'].' - '.$dataUser[0]['user_xa'].' - '.$dataUser[0]['user_huyen'].' - '.$dataUser[0]['user_tinh'];
// lấy số điện thoại người dùng để ném vào đơn hàng 
$phone_number = $dataUser[0]['user_phone'];
    
if(isset($_GET['data'])) {
    // Lấy dữ liệu gửi từ client
    $data = json_decode($_GET['data'], true);
    $_SESSION['data'] = $data;
    // echo "<pre>";
    // print_r($data);
    // echo "<pre>";

    extract($data);
  
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
   $pv_id = $data['pv_id'];

   // tạo mới 1 đơn hàng để chứa các sản phẩm chuẩn bị mua và lưu cái id hóa đơn vừa tạo vào sesion 
   addOrder_tottals($priceSumAll, $_SESSION['user_id'],1, $address, $phone_number); // giá tiền tổng của đơn hàng và id người mua 

   //thay đổi các trường dữ liệu của đơn hàng sao cho đúng
   for ($i=0; $i < sizeof($product_id) ; $i++) { 
       // thay đổi ot_id sao cho đúng với số lương mua và giá 
       $query = " UPDATE order_items 
            SET ot_id = :ot_id, oi_price = :oi_price, oi_quantity = :oi_quantity, oi_status = :oi_status
            WHERE oi_id = :oi_id ";
       $stmt = connect()->prepare($query);
       $stmt->bindParam(':ot_id', $_SESSION['ot_id']);// id đơn hàng 
       $stmt->bindParam(':oi_id',$product_id[$i]); // id của sản phẩm biến thể 
       $stmt->bindParam(':oi_price',$prices[$i]); // giá của sản phẩm biến thể 
       $stmt->bindParam(':oi_quantity',$quantities[$i]); // số lượng của sản phẩm biến thể 
       $stmt->bindParam(':oi_status', $oi_status); // trạng thái 
       $stmt->execute(); 

   }

   $arrQuantity = [];
    // lấy hết số lượng của peoductVariant_id đã mua ra đây 
    for ($i=0; $i < sizeof($product_id); $i++) { 
        $query = 'SELECT * FROM productvariants WHERE pv_id = :pv_id';
        $stmt = connect()->prepare($query);
        $stmt->bindParam(':pv_id', $pv_id[$i]);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        // đẩy các số lượng vừa lấy được vào mảng 
        array_push($arrQuantity, intval($data['quantity']));

    }

    // thay đổi số lương sản phẩm biến thể khi mua hàng 
    for ($i=0; $i <sizeof($arrQuantity) ; $i++) { 
        $quantityCurrent = intval($arrQuantity[$i]) - intval(($quantities[$i])); // trừ bỏ đi số lương hàng đã mua 
        $query = " UPDATE productvariants
            SET quantity = :quantity
            WHERE pv_id = :pv_id ";
       $stmt = connect()->prepare($query);
       $stmt->bindParam(':quantity', $quantityCurrent );
       $stmt->bindParam(':pv_id', $pv_id[$i]);
       $stmt->execute(); // cập nhật lại số lương hàng 
      
    }

   
   header('location: ?act=product');
}








?>