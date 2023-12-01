<?php 
    include'controllers/order/orderHistoryDetailController.php';
?>
<style>
    <?php include_once 'public/css/product/orderHistory.css' ?>
</style>

 <div class="container-flud bg-light">
    
    <div class="row mt-2">
        <div class="cart-top">
            <div class="cart-top__title d-flex ms-5">
                <h4 class="ps-3">DLQ Shop |</h4>
                <h4 class="text-secondary ps-3 ">Lịch Sử Mua Hàng <i class="fa-solid fa-bag-shopping"></i></h4>
            </div>
        </div>
        <hr>

        <div class="row mx-auto d-flex justify-content-center">
           <!-- phần hiển thị  -->
           <div style="width:90%" class="col-md-12 bg-white shadow-sm rounded">
                <div class="nav__order row w-100 d-flex justify-content-center p-3">
                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                        <a class=" text-decoration-none text-secondary " href="">
                            <span class="fs-5">Chi Tiết Đơn Hàng ID : <?php echo $ot_id ?></span>
                            <input type="hidden" value="1" class="handle">
                        </a>
                    </div>
                </div>
           </div>
           <!--  -->
           <div class="box2 col-md-12 bg-white  mt-4 mb-4 shadow-sm rounded">
                <div class="row d-flex flex-column gap-2 p-2 m-3 bg-light">
                    <span class=" text-secondary fw-bold">Số Điện Thoại: <span class="text-dark fw-light">(+84) <?php echo $phone_number ?></span></span>
                    <span class="text-secondary fw-bold">Địa Trỉ Nhận Hàng: <span class="text-dark fw-light"><?php echo $address ?></span></span>
                    <span class="text-secondary fw-bold">Tổng Giá Đơn Hàng: <span class="text-dark fw-light"><?php echo number_format($ot_amout) ?> đ</span></span>
                    <span class="text-secondary fw-bold">Trạng Thái : <span class="text-danger"><?php echo $handle_name ?></span></span>

                    <input id="ot_id" type="hidden" value="<?php echo $ot_id ?>">
                    <input id="handle_id" type="hidden" value="<?php echo $handle_id ?>">
                    <?php
                                    if($handle_id === '1') {
                                        echo '
                                            <a id="huydon" href="" class="btn btn-danger">Hủy Đơn Hàng </a>
                                        ';
                                    }else if($handle_id === '2') {
                                        echo '
                                        <a id="danhanduochang" href="" class="btn btn-success">Đã Nhận Được Hàng</a>
                                        ';
                                    }else if($handle_id ==='4') {
                                        echo '
                                        <a href="?act=product" class="btn btn-secondary">Quay Lại Trang Chủ </a>
                                        ';
                                    }
                    ?>
                </div>
                <hr>

                <div class="row m-3">
                    <table class="table col-md-12 shadow-sm p-3 mb-5 bg-body rounded align-middle text-center">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">ID Đơn hàng item</th>
                            <th scope="col">Ảnh Sản Phẩm </th>
                            <th scope="col">Thông Tin Chi Tiết</th>
                            <th scope="col">Giá Lúc Mua</th>
                            <th scope="col">Số lượng Mua </th>
                            <th scope="col">Chức Năng </th>
                            
                            
                        </tr>
                    </thead>
                    <tbody id="variant_list">
                    <!-- đơn hàng   -->
                    
                        <?php if(!empty($dataOrder_items)) foreach($dataOrder_items as $value): ?>
                        <tr>
                            <th scope="row"><?php echo $value['oi_id'] ?></th>
                            <td>
                                <img style="width:100px; height:auto" src="public/imgs/product/<?php echo $value['img_avatar'] ?>" alt="">
                            </td> 
                            <td >
                                <div class="d-flex flex-column">
                                    <span class="fw-bold"><?php echo $value['product_name'] ?></span>
                                    <span>Color: <?php echo $value['color_name'] ?></span>
                                    <span>Size: <?php echo $value['size_name'] ?></span>
                                </div>
                            </td>
                            <td>
                                <span class="text-danger"><?php echo number_format($value['oi_price']). ' đ' ?></span>
                            </td>
                            <td>
                                <span><?php echo $value['oi_quantity']. ' chiếc' ?></span>
                            </td>
                            <td>
                                <div>
                                    <input type="hidden" class="pv_id" value="<?php echo $value['pv_id'] ?>">
                                    <?php 
                                        if($handle_id === '3') {
                                            echo '
                                            <a  href="" class="btn btn-primary phanhoi">Phản Hồi Về Sản Phẩm </a>
                                             ';
                                        }
                                    ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                   
                    
                    </tbody>
                   
                </table>
                </div>
            </div>
        </div>

    </div>

    

 </div>

 <script>
    <?php include'public/js/product/orderHistoryDetail.js' ?>
 </script>
