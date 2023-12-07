<?php 
   

    // thêm sản phẩm biến thể 
    function addProductVariant($p_id, $size_id, $color_id, $quantity) {
        $query = " INSERT INTO productvariants(product_id,size_id, color_id,quantity) 
                    VALUE('$p_id', '$size_id', '$color_id', '$quantity')";

        $stmt = connect()->prepare($query);
        $stmt->execute();
    }

    // lấy hết màu cảu một sản phẩm 
    function getColorId($p_id) {
        $query = "SELECT colors.color_id as color_id, GROUP_CONCAT(DISTINCT color_name) as color_name
                FROM products join productvariants on products.product_id = productvariants.product_id
                                join colors on productvariants.color_id = colors.color_id
                WHERE products.product_id = '$p_id'
                group by color_name
        ";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    }
    // lấy hết màu cảu một sản phẩm 
    function getSizeId($p_id, $color_id) {
        $query = "SELECT sizes.size_id as size_id , GROUP_CONCAT(DISTINCT size_name) as size_name, quantity
                FROM products join productvariants on products.product_id = productvariants.product_id
                                join colors on productvariants.color_id = colors.color_id
                                join sizes on productvariants.size_id = sizes.size_id
                WHERE products.product_id = '$p_id' and colors.color_id = '$color_id'
                group by size_name
        ";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $data;
    }

    // check xem sản phẩm biến thể đã tồn tại hay chưa 
    function checkProductVariant($p_id, $size_id, $color_id) {
        $query = "SELECT * FROM productvariants 
                WHERE product_id = '$p_id' and size_id = '$size_id' and color_id = '$color_id'
         ";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $check = $stmt->rowCount();
        return $check;
    }
    // check xem sản phảm biến thể là sản phảm nào 
    function getProductVariant3param($p_id, $size_id, $color_id) {
        $query = "SELECT pv_id FROM productvariants 
                WHERE product_id = '$p_id' and size_id = '$size_id' and color_id = '$color_id'
        ";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    // số lượng của sản phaamrm biến thể 
    function getQuantityPv($pv_id) {
        $query = "SELECT quantity from productvariants where pv_id = '$pv_id'";
        $stmt = connect()->prepare($query);
        $stmt->execute();

        $data = $stmt->fetch();
        return $data;
    }

    // cập nhật số lượng cho sản phẩm biến thể 
    function updateQuantityPv($pv_id, $quantity) {
        $query = "UPDATE productvariants SET quantity = '$quantity' where pv_id = '$pv_id'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
    }

    // đếm xem có sản phẩm nào được mua nhiều nhất 
    function countPvBuy() {
        $query = "SELECT pv.pv_id, ot_id,COUNT(pv.pv_id) as countPV FROM order_items join productVariants as pv on order_items.pv_id = pv.pv_id
                WHERE ot_id > 0
                GROUP BY pv.pv_id
                order by COUNT(pv.pv_id) desc
                limit 5
        ";
         $stmt = connect()->prepare($query);
         $stmt->execute();
         $data = $stmt->fetchAll();
         return $data;
    }
?>