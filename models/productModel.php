<?php 
   
    // thêm sản phẩm 
    function addProduct($p_name, $p_price, $p_desc, $brand_id, $type_id, $img_avatar) {
        $query = "INSERT INTO products(product_name, product_price, product_desc, brand_id, type_id, img_avatar)
                    VALUE('$p_name', '$p_price', '$p_desc', '$brand_id', '$type_id', '$img_avatar')        
        ";
        $stmt = connect()->prepare($query);
        $stmt->execute();
    }
    // lấy thông tin của 1 sản phẩm 
    function getProductId($p_id) {
        $query = "SELECT * FROM products WHERE product_id = '$p_id'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    // hàm check xem tên sản phẩm đã tồn tại hay chưa 
    function checkProductName($p_name) {
        $query = "SELECT * FROM products WHERE product_name = '$p_name'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $checkName = $stmt->rowCount();
        return $checkName;
    }

   

?>