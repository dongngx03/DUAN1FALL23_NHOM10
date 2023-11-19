<?php 
    // kết nối database 
    include'./models/database.php';
    // kết nối model user
    include'./models/userModel.php';

    // gán sesion user_id 
    $user_id = $_SESSION['user_id'];
    // lấy tất cả thông tin cảu 1 user
    $dataUser = getOneUser($user_id);
   
    // đăng xuất 
    if(isset($_GET['dangxuat'])) {
        session_destroy();
        // xóa bỏ hết các gái trị trong sesion 
        // chạy ra khu vực dăng nhập 
        header('location: ?act=dangnhap');
    }
?>