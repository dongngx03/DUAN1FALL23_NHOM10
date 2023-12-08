<?php 
    include'./models/database.php';
    include'./models/userModel.php';

    // lấy thóng tin tất cả người dùng 
    $dataUser = readTable('users');
?>