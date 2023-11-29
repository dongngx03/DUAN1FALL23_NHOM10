<?php 
    // thếm sản phẩm vào sản phẩm đã chứ chưa mua 
    // thêm sản phẩm biến thể muốn mua 
    function addOder($user_id, $pv_id) {
        $query = "INSERT INTO order_items(user_id, pv_id) VALUE('$user_id', '$pv_id')";
        $stmt = connect()->prepare($query);
        $stmt->execute();
    }

    // đọc thông tin 1 giỏ hàng của 1 người 
    function readOrder_items($user_id) {
        $query = "SELECT * 
            FROM order_items join productvariants as pv on order_items.pv_id = pv.pv_id
                            join products as p on pv.product_id = p.product_id
                            join sizes  on pv.size_id = sizes.size_id
                            join colors on pv.color_id = colors.color_id
                            WHERE user_id = '$user_id' and oi_status = 0
        ";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data =  $stmt->fetchAll();
        return $data;
    }
    // xóa hàng trong giỏ 
    function deleteOrder_items($oi_id) {
        $query = "UPDATE order_items SET oi_status = 1 WHERE oi_id = '$oi_id'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
    }

    // lấy hết những đơn hàng item nào nằm trong 1 đơn hàng lớn (chung ot_id)
    function getOrder_itemsForOt_id($ot_id) {
        $query = "SELECT * 
                FROM order_items join productvariants as pv on order_items.pv_id = pv.pv_id
                                join products as p on pv.product_id = p.product_id 
                                join colors on pv.color_id = colors.color_id
                                join sizes on pv.size_id = sizes.size_id
                WHERE ot_id = :ot_id
        ";
        $stmt = connect()->prepare($query);
        $stmt->bindParam(':ot_id', $ot_id);
        $stmt->execute();

        $data = $stmt->fetchAll();
        return $data;    
    }
?>