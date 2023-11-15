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
?>