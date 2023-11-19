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
// thêm sản phẩm vào giỏ hàng 
function addCart($user_id, $pv_id) {
    $query = "INSERT INTO carts(user_id,pv_id,status) VALUE('$user_id', '$pv_id', 1)";
    $stmt = connect()->prepare($query);
    $stmt->execute();
}

// tìm xem với size và color và p_id thì đó là sản phẩm nào 
function seahProductVariant($p_id, $color_id, $size_id) {
    $query = "SELECT pv_id FROM productvariants
     WHERE product_id = '$p_id' and color_id = '$color_id' and size_id = '$size_id'
    ";
    $stmt = connect()->prepare($query);
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
}



?>