<?php 
    // kết nối cơ sở dữ liệu 
    include'./models/database.php';
    // kiết nối với model
    include'./models/productModel.php';

    // lấy  data sản tất cả các size 
    $dataSize = readTable('sizes');
    // lấy tất cả các màu 
    $dataColor = readTable('colors');
    // lấy tất cả các hãng 
    $dataBrand = readTable('brands');
    // lấy tất cả các loại 
    $dataType = readTable('types');
?>