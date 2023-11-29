<?php  
     // kết nối database 
     include'./models/database.php';
     // kết nối model user
     include'./models/userModel.php';
     if (isset($_POST['guiemail'])) {
        $email = $_POST['email'];
        $users = quenmk($email);
        if ($users != false) {  
            extract($users);
            $message = "Mật khẩu của bạn là ".$user_pw;
        }else {
            $message = "Đã có lỗi xảy ra";
        }
    }
?>