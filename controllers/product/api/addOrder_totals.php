<?php 
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");  
// liên kết với file chung 
include'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu gửi từ client
    $data = json_decode(file_get_contents('php://input'), true);

    // Trích xuất các mảng từ đối tượng JSON
    $product_id = $data['product_id'];
    $quantities = $data['quantities'];
    $prices = $data['prices'];
    $priceSumAll = $data['priceSumAll'];
    $oi_status = 1;

    
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
    $respone = 1;
    echo json_encode($respone);
}

?>