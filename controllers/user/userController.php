<?php 
    // kết nối database 
    include'./models/database.php';
    // kết nối model user
    include'./models/userModel.php';
    // gán sesion user_id 
    $thongbao = "";
    $user_id = $_SESSION['user_id'];
    // lấy tất cả thông tin cảu 1 user
    $dataUser = getOneUser($user_id);
    // errror l lưu lỗi thông báo người dùng 
    $err = [];
    $img_user = getImgId('user_id');
    if(isset($_POST['user_name'])){
        $img_user = getImgId($_POST["user_id"]);
        $id = $_POST["user_id"];
        $user = $_POST['user_name'];
        $pass = $_POST['user_pw'];
        $email = $_POST['user_email'];
        $sdt = $_POST['user_phone'];
        $xa = $_POST['xa'];
        $huyen = $_POST['huyen'];
        $tinh = $_POST['tinh'];
        $diachi = $_POST['diachi'];
        $target_dir = "./public/imgs/product/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $checkEmail = checkEmail($email);
        $checkPhone = checkPhone($sdt);
        $check = true;

        // validate php
        empty($_POST['user_name'])? $err['user_name'] = "Vui Lòng nhập tên người dùng ":'';
        empty($_POST['user_pw'])? $err['user_pw'] = "Vui Lòng nhập mật khẩu của bạn  ":'';
        empty($_POST['user_email'])? $err['user_email'] = "Vui Lòng nhập email của bạn ":'';
        empty($_POST['user_phone'])? $err['user_phone'] = "Vui Lòng nhập số điện thoại của bạn  ":'';
        empty($_POST['xa'])? $err['xa'] = "Vui Lòng nhập Xã/Phường nơi bạn ở  ":'';
        empty($_POST['huyen'])? $err['huyen'] = "Vui Lòng nhập Quận/Huyện nơi bạn ở  ":'';
        empty($_POST['tinh'])? $err['tinh'] = "Vui Lòng nhập Tỉnh/Thành Phố nơi bạn ở  ":'';

        // nếu người dùng muốn thay dối email của họ 
        if($email != $dataUser[0]['user_email']){
            // check xem email họ có tồn tại trùng với người khác hay không ?
            if($checkEmail != 0){
                // nếu có thì return về false
                $check = false;
                // biến lưu lỗi thông báo cho người dùng 
                $thongbao = "Email đã tồn tại";
            }
        }
        // tường tự check sdt cũng như check email 
        if($sdt != $dataUser[0]['user_phone']){
            if($checkPhone != 0){
                $check = false;
                $thongbao = "Số điện thoại đã tồn tại";
            }
        }
        // bước 1 check xem người dùng đã nhập đúng các trường hay không 
        if(empty($err)) {
            // thực hiện bước tiếp theo là người dùng tránh vị trùng email 
            if($check){
                // bước này là nếu như người dùng nhập ảnh thì sẽ thay thế ảnh mới vào ảnh cũ 
                if ($_FILES['img']['name'] !="" && $_FILES['img']['error'] == 0) {
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                    updateUser($id,$user,$pass,$email,$sdt,$target_file,$xa,$huyen,$tinh,$diachi);
                    $dataUser = getOneUser($user_id);
                    extract($dataUser);
                }
                // // bước này là người dùng không thay đổi ảnh gì hết chỉ thay đôi thông tín khác 
                else{
                    updateUser($id,$user,$pass,$email,$sdt,$img_user['user_img'],$xa,$huyen,$tinh,$diachi);
                    $dataUser = getOneUser($user_id);
                    extract($dataUser);
                }
               }
        }
    }
    // đăng xuất 
    if(isset($_GET['dangxuat'])) {
        session_destroy();
        // xóa bỏ hết các gái trị trong sesion 
        // chạy ra khu vực dăng nhập 
        header('location: ?act=dangnhap');
    }
?>