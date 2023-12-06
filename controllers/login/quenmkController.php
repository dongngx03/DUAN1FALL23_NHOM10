<?php 
    include'./models/database.php';
    include'./models/userModel.php';
    $err = [];
    $pw = [];
    if(isset($_POST['quenmk'])) {
        $email = $_POST['email'];
        
        empty($_POST['email']) ? $err['email'] = "Bạn chưa nhập email": "";

        if(empty($err)) {
            // check email có tồn tại hay không 
            $checkEmail = checkEmail($email);
            if($checkEmail > 0) {
                $data = getUserForEmail($email);
                $pw['pw'] = $data[0]['user_pw'];
            }else{
                $err['loi'] = "email này không tòn tại";
            }
        }
    }
    
?>