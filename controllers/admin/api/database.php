<?php 
    // hàm số lượng của sản phẩm có màu và size cho trước 
function getQuantity($p_id, $color_id, $size_id) {
    $query = "SELECT quantity
                FROM products join productvariants on products.product_id = productvariants.product_id
                                join colors on productvariants.color_id = colors.color_id
                                join sizes on productvariants.size_id = sizes.size_id
                WHERE products.product_id = '$p_id' and colors.color_id = '$color_id' and sizes.size_id = '$size_id';
            
        ";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $data;
}

// kết nối cơ sở dữ liệu 
function connect() {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=project_one_team10","root","");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

 // lấy các size nào có trong 1 màu của 1 sản phẩm 
 function getSizeId($p_id, $color_id) {
    $query = "SELECT sizes.size_id as size_id , GROUP_CONCAT(DISTINCT size_name) as size_name, quantity, product_name, color_name, productvariants.pv_id
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