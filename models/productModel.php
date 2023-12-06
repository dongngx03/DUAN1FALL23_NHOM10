<?php

// thêm sản phẩm 
function addProduct($p_name, $p_price, $p_desc, $brand_id, $type_id, $img_avatar)
{
    $query = "INSERT INTO products(product_name, product_price, product_desc, brand_id, type_id, img_avatar)
                    VALUE('$p_name', '$p_price', '$p_desc', '$brand_id', '$type_id', '$img_avatar')        
        ";
    $stmt = connect()->prepare($query);
    $stmt->execute();
}
// lấy thông tin của 1 sản phẩm 
function getProductId($p_id)
{
    $query = "SELECT * FROM products WHERE product_id = '$p_id'";
    $stmt = connect()->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

// hàm check xem tên sản phẩm đã tồn tại hay chưa 
function checkProductName($p_name)
{
    $query = "SELECT * FROM products WHERE product_name = '$p_name'";
    $stmt = connect()->prepare($query);
    $stmt->execute();
    $checkName = $stmt->rowCount();
    return $checkName;
}

// lấy ra sản phẩm có loại là gì đó 
function getProductFromType($type_id, $product_status = 0)
{
    $query = "SELECT * FROM products where type_id = '$type_id' and product_status = '$product_status' ";
    $stmt = connect()->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

// xóa sản phẩm mình muốn 
function deleteProduct($product_id, $product_status)
{
    $query = "UPDATE products SET product_status = :product_status WHERE product_id = :product_id";
    $stmt = connect()->prepare($query);
    $stmt->bindParam(':product_status', $product_status);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->execute();
}

// lấy thông tin tất cả sản phẩm 
function getAllProduct()
{
    $query = 'SELECT * FROM products where product_status = 0 ';
    $stmt = connect()->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

// cập nhật sản phẩm khi trừ cập nhật ảnh 
function updateAllNotImg($p_id, $p_name, $p_price, $p_desc, $brand_id, $type_id)
{
    $query = "UPDATE products SET product_name = '$p_name', product_price = '$p_price', product_desc = '$p_desc', brand_id = '$brand_id', type_id='$type_id' where product_id = '$p_id'";
    $stmt = connect()->prepare($query);
    $stmt->execute();
}

// cập nhật sản phẩm 
function updateAllAddImg($p_id, $p_name, $p_price, $p_desc, $img_avatar, $brand_id, $type_id)
{
    $query = "UPDATE products SET product_name = '$p_name', product_price = '$p_price', product_desc = '$p_desc', brand_id = '$brand_id', type_id='$type_id', img_avatar='$img_avatar' where product_id = '$p_id'";
    $stmt = connect()->prepare($query);
    $stmt->execute();
}

function load_thongke_sanpham_danhmuc()
{
    $query = "SELECT types.type_id, types.type_name, COUNT(*) as soluong, MIN(product_price) as gia_min,
        Max(product_price) as gia_max, AVG(product_price) as gia_avg
        FROM types  
        JOIN products 
        ON types.type_id = products.type_id
        GROUP BY types.type_id, types.type_name
        ORDER BY soluong DESC";

    $stmt = connect()->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}


function getUsersChartData(){
    $query = "SELECT users.user_id, users.user_name, COUNT(CASE WHEN handles.handle_id = 3 THEN order_totals.ot_id END) as soluong
    FROM users 
    LEFT JOIN order_totals ON users.user_id = order_totals.user_id
    LEFT JOIN handles ON handles.handle_id = order_totals.handle_id 
    GROUP BY users.user_id, users.user_name;";
    $statement = connect()->prepare($query);
    $statement->execute();
    $data = array();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $data[] = array(
            'user_id' => $row['user_id'],
            'user_name' => $row['user_name'],
            'soluong' => $row['soluong']
        );
    }
    return $data;
}


function getFeedbackCount($star_id) {
    $query = "SELECT COUNT(*) as count FROM feedbacks WHERE star_id = :star_id";
    $conn = connect();
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':star_id', $star_id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $conn = null;
    return $result['count'];
}
function getProductCountByOrderStatus()
{
    $query = "SELECT h.handle_name, COUNT(o.ot_id) AS product_count
              FROM order_totals o
              LEFT JOIN handles h ON h.handle_id = o.handle_id
              GROUP BY h.handle_name";
    $statement = connect()->prepare($query);
    $statement->execute();
    $data1 = array();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $data1[] = array(
            'handle_name' => $row['handle_name'],
            'product_count' => $row['product_count']
        );
    }
    return $data1;
}
?>





