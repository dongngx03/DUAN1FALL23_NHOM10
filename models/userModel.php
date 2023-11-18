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
    function checkEmail($user_email) {
        $query = "SELECT * FROM users WHERE user_email = '$user_email'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        // đếm xem nó có trả về hàng nào hay không 
        $check = $stmt->rowCount();
        return $check;
    }

    // hàm check mật khẩu có trùng khớp với email không 
    function getUserForEmail($user_email) {
        $query = "SELECT * FROM users WHERE user_email = '$user_email'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $pw = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $pw;
    }

    
?>