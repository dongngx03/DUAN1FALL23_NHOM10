<?php 
   // lây tất cả sản phẩm trong giỏ hàng của 1 khách hàng 
   function getCartOneUser($user_id) {
        $query = "SELECT *
                FROM carts join productvariants as pv on carts.pv_id = pv.pv_id
                           join sizes on pv.size_id = sizes.size_id
                           join colors on pv.color_id = colors.color_id
                           join products on pv.product_id = products.product_id
                WHERE user_id = '$user_id' and carts.status = 1
               
        ";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
   }

   // hàm chuyển trạng thái của giỏ hàng sang từ 1 -> 0 (đó là chức năng xóa giỏ hàng )
   function deleteCart($cart_id) {
        $query = "UPDATE carts SET status = 0 WHERE cart_id = '$cart_id'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
   }
   
?>