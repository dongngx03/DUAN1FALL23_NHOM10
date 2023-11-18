<?php 
    // kết nối database 
    include'./models/database.php';
    // kết nối model user
    include'./models/userModel.php';

    // tạo 1 mảng err để lưu lỗi 
    $err = [];
    // thêm người dùng 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['addUser'])) {
            $user_name = $_POST['user_name'];
            $user_email = $_POST['user_email'];
            $user_pw = $_POST['user_pw'];  
            $user_pw1 = $_POST['user_pw1']; 
    
            // chekc nhập trường dữ liệu 
            empty($_POST['user_name'])? $err['user_name'] = 'Vui lòng nhập tên của bạn':'';
            empty($_POST['user_email'])? $err['user_email'] = 'Vui lòng nhập email của bạn ':'';
            empty($_POST['user_pw'])? $err['user_pw'] = 'Vui lòng nhập mật khẩu của bạn':'';
            empty($_POST['user_pw1'])? $err['user_pw1'] = 'Vui lòng nhập xác nhận lại mật khẩu':'';
    
            // vòng 2 là kiểm tra email đã tồn tại hay chưa 
            if(empty($err)) {
                if($user_pw == $user_pw1) {
                    $checkemail = checkEmail($user_email);
                    if($checkemail == 0) {
                        addUser($user_name, $user_email, $user_pw);
                        header('location: ?act=dangnhap');
                    }else{
                        $err['trungemail'] = 'Email đã tồn tại ';
                    }
                   
                }else{
                    $err['trungpw'] = 'Mật khẩu không trùng khớp ';
                }
                
            }
            // echo "<pre>";
            // print_r($err);
            // echo "<pre>";
        }
    
    }
   

?>