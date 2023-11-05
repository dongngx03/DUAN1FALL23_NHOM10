<?php 
    include'models/usersModel.php';
   
    if(isset($_GET['danhmuc']) && $_GET['danhmuc'] ==1) {
       
        header('location: ?act=home');
    }

    echo 'kết nối thành cồng ';

    xinchao();
?>