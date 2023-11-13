<?php 
    // kết nối với database
    include'./models/database.php';


    // thêm sản phẩm 
    function addProduct($p_name, $p_price, $p_desc, $brand_id, $type_id, $img_avatar) {
        $query = "INSERT INTO products(product_name, product_price, product_desc, brand_id, type_id, img_avatar)
                    VALUE('$p_name', '$p_price', '$p_desc', '$brand_id', '$type_id', '$img_avatar')        
        ";
        $stmt = connect()->prepare($query);
        $stmt->execute();
    }
   

?>