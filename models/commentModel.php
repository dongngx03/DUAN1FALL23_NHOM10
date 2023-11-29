<?php
    
    function getComment($c_id) {
        $query = "SELECT * FROM comments WHERE cmt_id = '$c_id'";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    function statisticalCmt(){
        $query = "SELECT products.product_name, COUNT(products.product_id) as count,
        MAX(comments.cmt_date) as new,
        MIN(comments.cmt_date) as old,
        products.product_id
        FROM products
        JOIN comments ON products.product_id = comments.product_id
        GROUP BY products.product_name;";
        $stmt = connect()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    function cmtDetail($id){
                $query = "SELECT comments.cmt_status, comments.cmt_id, comments.cmt_content, users.user_name, comments.cmt_date FROM comments
                LEFT JOIN users ON comments.user_id = users.user_id
                LEFT JOIN products ON comments.product_id = products.product_id
                WHERE products.product_id = $id";
                $stmt = connect()->prepare($query);
                $stmt->execute();
                $data = $stmt->fetchAll();
                return $data;
    }

    function deleteCmt($id){
        $query = "DELETE FROM comments WHERE cmt_id= $id";
        $stmt = connect()->prepare($query);
        $stmt->execute();
    }

    function updateStt($id){
        $query = "UPDATE comments SET cmt_status = 1 WHERE cmt_id =$id";
        $stmt = connect()->prepare($query);
        $stmt->execute();
    }

?>