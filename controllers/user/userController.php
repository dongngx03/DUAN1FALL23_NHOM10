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
    $img_user = getImgId('user_id');
    if(isset($_POST['capnhat'])){
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
        if($email != $dataUser[0]['user_email']){
            if($checkEmail != 0){
                $check = false;
                $thongbao = "Email đã tồn tại";
            }
        }
        if($sdt != $dataUser[0]['user_phone']){
            if($checkPhone != 0){
                $check = false;
                $thongbao = "Số điện thoại đã tồn tại";
            }
        }
       if($check){
        if ($_FILES['img']['name'] !="" && $_FILES['img']['error'] == 0) {
          move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
          updateUser($id,$user,$pass,$email,$sdt,$target_file,$xa,$huyen,$tinh,$diachi);
          $dataUser = getOneUser($user_id);
          extract($dataUser);
        }
        else{
            updateUser($id,$user,$pass,$email,$sdt,$img_user['user_img'],$xa,$huyen,$tinh,$diachi);
            $dataUser = getOneUser($user_id);
            extract($dataUser);
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