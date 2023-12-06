<?php 
    include'./models/database.php';
    include'./models/productModel.php';
    $data = getUsersChartData();

    // Convert data to JSON
    $data_json = json_encode($data);
    
    
?>