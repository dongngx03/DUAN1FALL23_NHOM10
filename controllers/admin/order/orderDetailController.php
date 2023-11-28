<?php 
     // kết nối với database
     include'./models/database.php';
     // kết nối với bảng đơn hàng 
     include'./models/order_totalModel.php';
     // kết nối với bảng đơn hàng item 
     include'./models/order_itemsModel.php';
     // gán ot_id
     isset($_GET['ot_id'])?$ot_id = $_GET['ot_id']: $ot_id = '';
     // lấy thông tin về đơn hàng lớn 
     $dataOrder_total = getOneOrrder_total($ot_id);
     extract($dataOrder_total);

     // nhận ot_id để lấy hết thong tin về đơn hàng để hiển thi ra màn hình 
     $dataOrder_items = getOrder_itemsForOt_id($ot_id);
     // đổi trạng thái đơn hàng 
     if(isset($_GET['chapnhan'])) {
        handleOrder_total($ot_id, 2);
        header('location: ?admin=orderwaitting');
     }
     if(isset($_GET['huy'])) {
        handleOrder_total($ot_id, 4);
        header('location: ?admin=orderwaitting');
     }


    //  echo "<pre>";
    //  print_r($dataOrder_items);
    //  echo "<pre>";
    //  echo "<pre>";
    //  print_r($dataOrder_total);
    //  echo "<pre>";
?>