<?php  
    session_start();
    // nhận tín hiệu bên productdetail là khi rời khỏi trang thì sẽ xóa đi sesstion[sanrp hẩm ]
    if(isset($_GET['deletep']) && $_GET['deletep']==1) {
        // xóa bỏ sesion color_id
        unset($_SESSION['color_id']);
        unset($_SESSION['size_id']);
    }
?>