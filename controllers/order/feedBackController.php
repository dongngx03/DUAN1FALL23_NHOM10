<?php 
    include'./models/database.php';
    include'./models/feedbackModel.php';

    // lấy dữ liệu ở bảng sao 
    $dataStar = readTable('stars');
    $err = [];

    // thêm phản hồi 
    if(isset($_POST['addFB'])) {
        $fb_content = $_POST['fb_content'];
        $fb_img = $_FILES['fb_img']['name'];
        $star_id = $_POST['star_id'];

        $target_dir = "public/imgs/feedback/";
        $target_file = $target_dir . basename($_FILES["fb_img"]["name"]);

        addFeedBack($fb_content, $fb_img, $_SESSION['user_id'], $_GET['pv_id'], $star_id);

        move_uploaded_file($_FILES['fb_img']['tmp_name'], $target_file);

        header('location: ?act=product');

    }
?>