<?php 
    session_start();
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");  
    include'database.php';

    if(isset($_GET['getproductforcolor'])) {
        $color_id = $_GET['getproductforcolor'];
        $p_id = $_GET['product_id'];

        $data = getSizeId($p_id, $color_id);
        echo json_encode($data);
    }
?>