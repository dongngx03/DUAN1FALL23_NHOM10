<?php 
    // kết nói 
    include'./models/database.php';
    // kết nối với bảng order
    include'./models/order_totalModel.php';
    // kết nối với bảng ordercon
    include'./models/order_itemsModel.php';

    // xem chi tiết một đơn hàng 
    if(isset($_GET['ot_id'])) {
        // lấy dữ liệu cảu đơn hangf lớn và đơn hàng nhỏ 
        $dataOrder_total =  getOneOrrder_total($_GET['ot_id']);
        extract($dataOrder_total);

        // lấy các đơn hàng nhỏ 
        $dataOrder_items = getOrder_itemsForOt_id($_GET['ot_id']);

    }

    // hủy đơn hàng 
    if(isset($_GET['huydon'])) {
        handleOrder_total($_GET['ot_id'], 4);

        header('location: ?act=orderhistorydetail&&ot_id='.$_GET['ot_id'].'');
    }

    // nhận thành công 
    if(isset($_GET['thanhcong'])) {
        handleOrder_total($_GET['ot_id'], 3);

        header('location: ?act=orderhistorydetail&&ot_id='.$_GET['ot_id'].'');
    }
?> 