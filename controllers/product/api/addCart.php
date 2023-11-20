<?php 
    session_start();
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");  
    // liên kết với file chung 
    include'database.php';

    if(isset($_GET['quantity']) && $_GET['quantity']>0) {
        // check xem người dùng đã đăng nhập hay chưa 
        if(isset($_SESSION['user_id'])) {
            // chekc xem người dùng đã chọn màu sản phẩm hay chưa 
            if(isset($_SESSION['color_id'])) {
                // check tiếp xem người dùng đã chọn size hay chưa 
                if(isset($_SESSION['size_id'])) {
                    // tìm xem sản phẩm mang p_id, color_id, size_id đó là sản phẩm biến thể nào 
                    $data = seahProductVariant($_SESSION['p_id'], $_SESSION['color_id'], $_SESSION['size_id']);
                    // thêm sản phẩm biến thể đó vào giỏ hàng người dùng 
                    addCart($_SESSION['user_id'],intval($data['pv_id']));
                    $err = 'success';
                    echo json_encode($err);
                }else{
                    // chưa Chọn size thì trả về chuỗi này 
                    $err = 'size_id';
                    echo json_encode($err);
                }
            }else{
                // nếu chưa chọn màu thì trả về chuỗi này 
                $err = 'color_id';
                echo json_encode($err);
            }
        }else{
            $err ="user_id";
            echo json_encode($err);
        }
    }

    
?>