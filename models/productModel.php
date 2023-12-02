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

   // lấy ra sản phẩm có loại là gì đó 
   function getProductFromType($type_id, $product_status = 0) {
        $query = "SELECT * FROM products where type_id = '$type_id' and product_status = '$product_status' ";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
   }

   // xóa sản phẩm mình muốn 
   function deleteProduct($product_id, $product_status) {
        $query = "UPDATE products SET product_status = :product_status WHERE product_id = :product_id";
        $stmt = connect()->prepare($query);
        $stmt->bindParam(':product_status', $product_status);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->execute();
   }

   // lấy thông tin tất cả sản phẩm 
   function getAllProduct() {
        $query = 'SELECT * FROM products where product_status = 0 ';
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
   }

   // cập nhật sản phẩm khi trừ cập nhật ảnh 
   function updateAllNotImg($p_id, $p_name, $p_price, $p_desc, $brand_id, $type_id) {
        $query = "UPDATE products SET product_name = '$p_name', product_price = '$p_price', product_desc = '$p_desc', brand_id = '$brand_id', type_id='$type_id' where product_id = '$p_id'";
        $stmt = connect()->prepare($query);
        $stmt->execute();

   }

   // cập nhật sản phẩm 
   function updateAllAddImg($p_id, $p_name, $p_price, $p_desc,$img_avatar, $brand_id, $type_id) {
    $query = "UPDATE products SET product_name = '$p_name', product_price = '$p_price', product_desc = '$p_desc', brand_id = '$brand_id', type_id='$type_id', img_avatar='$img_avatar' where product_id = '$p_id'";
    $stmt = connect()->prepare($query);
    $stmt->execute();

}

?>