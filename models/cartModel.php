<?php 
    // thêm sản phẩm vào giỏ hàng 
    function addCart($user_id, $p_id) {
        $query = "INSERT INTO carts(user_id,product_id,status) VALUE('$user_id', '$p_id', 1)";
        $stmt = connect()->prepare($query);
        $stmt->execute();
    }
    // lấy dữi liệu cart của 1 người dùng 
    function getCartOnePersion($user_id) {
        $query = "SELECT * FROM
                 carts join products on carts.product_id = products.product_id
                        join productvariants as pv on products.product_id = pv.pv_id
                        join sizes on pv.size_id = sizes.size_id
                        join colors on pv.color_id = colors.color_id
                 WHERE user_id ='$user_id'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
?>