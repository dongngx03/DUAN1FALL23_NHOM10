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

    // lấy handle của đơn hàng cần lấy 
    function getHandle_idOfOrder_total($ot_id) {
        $query = "SELECT handle_id FROM order_totals WHERE ot_id = :ot_id";
        $stmt = connect()->prepare($query);
        $stmt->bindParam(':ot_id', $ot_id);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }
?>