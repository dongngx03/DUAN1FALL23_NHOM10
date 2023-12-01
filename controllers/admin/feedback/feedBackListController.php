<?php 
    include'./models/database.php';
    include'./models/feedbackModel.php';

   
    // duyệt phản hồi 
    if(isset($_GET['fb_id'])) {
        duyetFeedBack($_GET['fb_id'], 1);
        header('location: ?admin=feedbacklist1');
    }
    // ẩn 
    if(isset($_GET['fb_id_an'])) {
        duyetFeedBack($_GET['fb_id_an'], 2);
        header('location: ?admin=feedbacklist2');
    }
     // lấy các phản hồi sản phẩm đang chờ duyệt 
     $data = getFeedBackforProductStatus(0);

     // lấy các phẩn hối sản phẩm đã được duyệt 
     $dataDuyet = getFeedBackforProductStatus(1);

     // lấy phản hồi đã ẩn 
     $dataAn = getFeedBackforProductStatus(2);

    
?>