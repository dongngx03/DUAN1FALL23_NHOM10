<?php 

// kết nối cơ sở dữ liệu 
function connect() {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=project_one_team10","root","");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
}

// hàm đọc dữ liệu của 1 bảng :
function readTable($table_name) {
    $query = "SELECT * FROM ".$table_name." ";
    $stmt = connect()->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
// tạo 1 cái hóa đơn lớn 
function addOrder_tottals($ot_amout, $user_id, $handle_id= 1) {
  // Sử dụng kết nối đã tạo trước đó, không cần tạo kết nối mới
  $conn = connect();

  $query = "INSERT INTO order_totals(ot_amout, user_id, handle_id) VALUES (:ot_amout, :user_id, :handle_id)";
  $stmt = $conn->prepare($query);
  $stmt->bindParam(':ot_amout', $ot_amout);
  $stmt->bindParam(':user_id', $user_id);
  $stmt->bindParam(':handle_id', $handle_id);
  $stmt->execute();

  // gán lại giá trị cái đơn hagf vừa rồi vào ssession 
  $lastInsertedId = $conn->lastInsertId();
  $_SESSION['ot_id'] = $lastInsertedId;
}


?>