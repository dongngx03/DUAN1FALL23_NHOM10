<?php 
    include'controllers/order/orderHistotyController.php';
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
                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                        <a class=" nav__order-item text-decoration-none text-secondary " href="">
                            <span class="status">Đang Xử Lý </span>
                            <input type="hidden" value="1" class="handle">
                        </a>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                        <a class=" nav__order-item text-decoration-none text-secondary " href="">
                            <span class="status">Đang Giao</span>
                            <input type="hidden" value="2" class="handle">
                        </a>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                        <a class=" nav__order-item text-decoration-none text-secondary " href="">
                            <span class="status">Thành Công</span>
                            <input type="hidden" value="3" class="handle">
                        </a>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                        <a class=" nav__order-item text-decoration-none text-secondary " href="">
                            <span class="status">Đã Hủy</span>
                            <input type="hidden" value="4" class="handle">
                        </a>
                    </div>
                </div>
           </div>
           <!--  -->
           <div class="box2 col-md-12 bg-white  mt-4 mb-4 shadow-sm rounded">
               <!-- hiển thị tất cả những đơn hàng của một khách hàng  -->
               <div class="row p-2 bg-secondary ">
                    <div class="col-md-3 d-flex justify-content-center">
                        <span class="text-white">Mã Đơn Hàng </span>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <span class="text-white">Ngày Đặt</span>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <span class="text-white">Giá </span>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <span class="text-white">Chức Năng</span>
                    </div>
               </div>
               <!--  -->
               <?php if(!empty($dataOrderWaitting)) foreach($dataOrderWaitting as $value):  ?>
               <div class="row py-4 mt-2  bg-white">
                    <div class="col-md-3 d-flex justify-content-center">
                        <span class="text-dark">DH<?php echo $value['ot_id'] ?> </span>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <span class="text-dark"><?php echo $value['ot_date'] ?></span>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <span class="text-danger"><?php echo number_format($value['ot_amout']). 'đ' ?></span>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <button class="btn btn-outline-secondary">Xem Chi Tiết</button>
                    </div> 
               </div>
               <hr>
               <?php endforeach; ?>
             
           </div>
            
        </div>

    </div>

    

 </div>

 <script>
    <?php include'public/js/product/orderHistory.js' ?>
 </script>
