<?php 
     session_start();
     header("Access-Control-Allow-Origin: *");
     header("Content-Type: application/json");  
     include'database.php';
     

    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        // nếu như cả 3 tham số đều không rỗng 
        $brand = $_GET['brand'];
        $color = $_GET['color'];
        $price = $_GET['price'];

        // đọc dữ liệu của database 
        // $data = [$brand, $color, $price];
        // echo json_encode($data);
        $query = "SELECT GROUP_CONCAT(DISTINCT p.product_id) as product_id, product_price, img_avatar
                
                FROM products as p join productvariants as pv on p.product_id = pv.product_id
                ";
        
        if(!empty($brand)) {
            $query .= " WHERE brand_id = '$brand' ";
        }

        if(!empty($color)) {
            $query .= " AND color_id = '$color'";
        }

        if(!empty($price)) {
            if($price == '1500') {
                $query .= " AND product_price BETWEEN '0' AND '500000'";
            }else if($price =='5001') {
                $query .= " AND product_price BETWEEN '500000' AND '1000000'";
            }else if($price =='12') {
                $query .= " AND product_price BETWEEN '1000000' AND '2000000'";
            }else if($price == '23') {
                $query .= " AND product_price BETWEEN '2000000' AND '3000000'";
            }else if($price == '34') {
                $query .= " AND product_price BETWEEN '3000000' AND '4000000'";
            }else if($price == '4') {
                $query .= " AND product_price > '4000000'";
            }

            
        }

        $query .= "group by p.product_id";

        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();

        if(!empty($data)) {
            echo  json_encode($data);
        }else{
            echo json_encode('không tìm thấy sản phẩm nào với điều kiện như vậy');
        }
        
       
    }

?>