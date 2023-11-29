<?php 
    // hàm thêm người dùng 
    function addUser($user_name, $user_email, $user_pw) {
        $query = "INSERT INTO users(user_name, user_email, user_pw,role_id) 
                VALUE('$user_name', '$user_email', '$user_pw', 3)
         ";
        $stmt = connect()->prepare($query);
        $stmt->execute();

    }
    // lấy thông tin 1 người 
    function getOneUser($user_id) {
        $query = "SELECT * FROM users WHERE user_id = '$user_id'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }


    // kiểm tra xem email đã tồn tại hay chưa 
    function checkEmail($user_email){
        $query = "SELECT user_email FROM users WHERE user_email = '$user_email'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $check = $stmt->rowCount();
        return $check;
    }

    // kiểm tra xem phone tồn tại hay chưa
    function checkPhone($user_phone){
        $query = "SELECT user_phone FROM users WHERE user_phone = '$user_phone'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $checkPhone = $stmt->rowCount();
        return $checkPhone;
    }

    // hàm check mật khẩu có trùng khớp với email không 
    function getUserForEmail($user_email) {
        $query = "SELECT * FROM users WHERE user_email = '$user_email'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $pw = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $pw;
    }
    //lấy ảnh của người dùng 
    function getImgId($id) {
        $query = "SELECT user_img FROM users WHERE user_id = '$id'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    // Cập nhật user
    function updateUser($id,$user,$pass,$email,$sdt,$img,$xa,$huyen,$tinh,$diachi){
        $conn = connect();
        $query = "UPDATE users SET user_name='$user',user_pw='$pass',`user_img`='$img',user_email='$email',user_phone='$sdt',user_tinh='$tinh',user_huyen='$huyen',user_xa='$xa',
        diatri_chitiet='$diachi' WHERE user_id='$id'";
        $stmt = $conn->prepare($query);
        $stmt->execute();  
    }
    function quenmk($email){
        $query = "SELECT * FROM users WHERE user_email='$email'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

?>