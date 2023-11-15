<?php 
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");  


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

if(isset($_GET['size_id'])) {
    $size_id = $_GET['size_id'];
    $color_id = $_SESSION['color_id'];
    $p_id = $_SESSION['p_id'];
    $_SESSION['size_id'] = $size_id;

    $data = getQuantity($p_id, $color_id, $size_id);
    echo json_encode($data);


}

?>