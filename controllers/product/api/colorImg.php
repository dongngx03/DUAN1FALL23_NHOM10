<?php  
    session_start();
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");  
    include'database.php';
    

    if(isset($_GET['color_id'])) {
        
        $color_id = $_GET['color_id'];
        $p_id = $_GET['p_id'];
        $_SESSION['color_id']= $color_id;
        unset($_SESSION['size_id']);
        $data = getSizeId($p_id, $color_id);
        
        echo json_encode($data);
        
    }

?>