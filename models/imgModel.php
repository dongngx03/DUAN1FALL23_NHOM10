<?php 
    // thêm sản ảnh cho từng sản phẩm 
    function addImg($img_url, $p_id) {
        $query = " INSERT INTO imgs(img_url, product_id) VALUE('$img_url', '$p_id')";
        $stmt = connect()->prepare($query);
        $stmt->execute();
    }
    // lấy ảnh cảu sản phẩm 
    function getImgid($p_id) {
        $query = "SELECT * FROM imgs WHERE product_id = '$p_id'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
?>