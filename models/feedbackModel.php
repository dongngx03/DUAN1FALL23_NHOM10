<?php
    // thêm sản sản phản hồi sản phẩm 
    function addFeedBack($fb_content, $fb_img, $user_id, $pv_id, $star_id) {
        $query = "INSERT INTO feedbacks(fb_content, fb_img, user_id, pv_id, star_id)
                    VALUE('$fb_content', '$fb_img', '$user_id', '$pv_id', '$star_id')
        ";
        $stmt = connect()->prepare($query);
        $stmt->execute();
    }

    // lấy feedback của 1 sản phẩm 
    function getFeedBackforProduct($product_id) {
        $query = "SELECT * 
            FROM feedbacks as fb join productvariants as pv on fb.pv_id = pv.pv_id
                                join users on fb.user_id = users.user_id
                                join products on pv.product_id = products.product_id
                                join sizes on pv.size_id = sizes.size_id
                                join colors on pv.color_id = colors.color_id
            WHERE products.product_id = '$product_id' and fb_status = 1;

        ";
         $stmt = connect()->prepare($query);
         $stmt->execute();

         $data = $stmt->fetchAll();
         return $data;
    }
    function getFeedBackforProductStatus($fb_status) {
        $query = "SELECT * 
            FROM feedbacks as fb join productvariants as pv on fb.pv_id = pv.pv_id
                                join users on fb.user_id = users.user_id
                                join products on pv.product_id = products.product_id
                                join sizes on pv.size_id = sizes.size_id
                                join colors on pv.color_id = colors.color_id
            WHERE fb_status = '$fb_status';

        ";
         $stmt = connect()->prepare($query);
         $stmt->execute();

         $data = $stmt->fetchAll();
         return $data;
    }
    // duyệt phản hồi 
    function duyetFeedBack($fb_id, $fb_status) {
        $query = "UPDATE feedbacks SET fb_status = '$fb_status' where fb_id = '$fb_id'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
    }

?>