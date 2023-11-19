<?php  
     // kết nối database 
     include'./models/database.php';
     // kết nối model user
     include'./models/userModel.php';
    
     $err = [];
    // đăng nhập 
    if(isset($_POST['login'])) {
        $user_email = $_POST['user_email'];
        $user_pw = $_POST['user_pw'];

        empty($_POST['user_email'])?$err['user_email']='Vui lòng nhập email của bạn':'';
        empty($_POST['user_pw'])?$err['user_pw']='Vui lòng nhập password':'';

        if(empty($err)) {
            // kiểm tra email có tòn tại hay không 
            $checkEmail = checkEmail($user_email);
           
            if($checkEmail == 0) {
                $err['checkEmail'] = 'Email không tồn tại ';
            }else{
                // lấy mật khẩu của người dùng với email này 
                $pw = getUserForEmail($user_email);
                // echo "<pre>";
                // print_r($pw[0]['user_id']);
                // echo "<pre>";
                if($pw[0]['user_pw'] == $user_pw) {
                    // check xem mật khẩu người này có trùng khớp mới mật khẩu của tài khoản này hay không 
                    $_SESSION['user_id'] = $pw[0]['user_id'];
                    $_SESSION['role_id'] = $pw[0]['role_id'];
                    header('location: ?act=product');
                }else{
                    $err['checkPw'] = 'Mật khẩu không trùng khớp';
                }
                
                
            }
        }
    }

   
 
?>