<?php 
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");  
// liên kết với file chung 
include'database.php';


if(isset($_GET['size_id'])) {
    $size_id = $_GET['size_id'];
    $color_id = $_SESSION['color_id'];
    $p_id = $_SESSION['p_id'];
    $_SESSION['size_id'] = $size_id;
    $data = [getQuantity($p_id, $color_id, $size_id)];
    echo json_encode($data);
}

?>