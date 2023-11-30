<?php 
    // lấy hết tất cả các đơn hàng chưa được chấp nhận (handle_id =1, 2, 3, 4)
    function getAllOrder_totals($handle_id) {
        $query = 'SELECT * FROM order_totals WHERE handle_id = :handle_id';
        $stmt = connect()->prepare($query);
        $stmt->bindParam(':handle_id', $handle_id);
        $stmt->execute();

        $data = $stmt->fetchAll();
        return $data;
    }

    // lấy thông tin của 1 đơn hàng lớn 
    function getOneOrrder_total($ot_id) {
        $quuery = "SELECT * FROM order_totals join handles on order_totals.handle_id = handles.handle_id
                 WHERE ot_id = :ot_id ";
        $stmt = connect()->prepare($quuery);
        $stmt->bindParam(':ot_id', $ot_id);
        $stmt->execute();

        $data = $stmt->fetch();
        return $data;
    }

    // cuyển trạng thái của một đơn hàng 1:đang xủa lý 2:Đang giao 3:Thành công , 4:hủy
    function handleOrder_total($ot_id, $handle_id) {
        $query = "UPDATE order_totals SET handle_id = :handle_id 
                WHERE ot_id = :ot_id
        ";
        $stmt = connect()->prepare($query);
        $stmt->bindParam(':handle_id', $handle_id);
        $stmt->bindParam(':ot_id', $ot_id);
        $stmt->execute();
    }

    // lấy tất cả đơn hàng trạng thái tùy chọn của một người 
    function getOrder_totalOneUser($user_id, $handle_id) {
        $query = "SELECT * FROM order_totals where user_id = :user_id and handle_id = :handle_id";
        $stmt = connect()->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':handle_id', $handle_id);
        $stmt->execute();

        $data = $stmt->fetchAll();
        return $data;
    }
?>