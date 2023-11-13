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
?>