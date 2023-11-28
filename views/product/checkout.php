<?php 
    include'controllers/product/checkoutController.php';
?>
<style>
    <?php include_once 'public/css/product/checkout.css' ?>
</style>

 <div class="container-flud bg-light">
    
    <div class="row mt-2">
        <div class="cart-top">
            <div class="cart-top__title d-flex ms-5">
                <h4 class="ps-3">DLQ Shop |</h4>
                <h4 class="text-secondary ps-3 ">Thanh Toán <i class="fa-solid fa-bag-shopping"></i></h4>
            </div>
        </div>
        <hr>

        <div class="row mx-auto d-flex justify-content-center">
            <!-- phần đầu  -->
            <div class="col-md-11 bg-white shadow-sm rounded">
                <div class="vtrWey"></div>
                <div class="user__infor p-4 bg-white">
                    <div class="user__infor-title p-2">
                        <span class="text-dark fs-5"><i class="fa-solid fa-location-dot"></i> Địa Chỉ Nhận Hàng </span>
                    </div>

                    <!-- thông tin địa trit  -->
                    <?php if(!empty($dataUser)) foreach($dataUser as $value): ?>
                    <div class="user_infor-main px-2 d-flex gap-3">
                        <strong ><span><?php echo $value['user_name'] ?><span class="px-1">(+84) <?php echo $value['user_phone'] ?></span></span></strong>
                        <span><?php echo $value['diatri_chitiet'].'-'.$value['user_xa'].'-'.$value['user_huyen'].'-'.$value['user_tinh'] ?></span>
                        <a href="?act=user">Thay Đổi</a>
                        <input type="hidden" id="check_address" value="<?php echo $value['user_tinh'] ?>">
                    </div>
                    <?php endforeach; ?>
                </div>
                
            </div>
            <div class="col-md-11 p-5 mt-3 bg-white shadow-sm rounded d-grid">
                <div class="product__main">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="fs-5">Sản Phẩm </span>
                        </div>
                        <div class="col-md-2 d-flex justify-content-end">
                            <span class="text-secondary ">Đơn Giá </span>
                        </div>
                        <div class="col-md-2 d-flex justify-content-end">
                            <span class="text-secondary ">Số Lượng</span>
                        </div>
                        <div class="col-md-2 d-flex justify-content-end">
                            <span class="text-secondary">Thành Tiền </span>
                        </div>
                    </div>
                    <!--  -->
                  
                   <?php 
                        for ($i=0; $i < sizeof($quantities); $i++) { 
                            echo '
                            <div class="row py-3" style="border-top: 1px dashed #cccccc">
                                <div class="col-md-6 d-flex gap-3 align-items-center">
                                    <img style="width:100px; height:auto" src="public/imgs/product/'.$p_img[$i].'" alt="">
                                    <div class="product__infor d-flex flex-column gap-1">
                                        <strong><span>'.$p_name[$i].'</span></strong>
                                        <span>Color: '.$p_color[$i].'</span>
                                        <span>size: '.$p_size[$i].'</span>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-end align-items-center">
                                    <div class="product__price">
                                        <span>'.number_format($prices[$i]).' đ</span>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-end align-items-center">
                                    <div class="product__quantity">
                                        <span>'.$quantities[$i].' Chiếc</span>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-end align-items-center">
                                    <div class="product__amout">
                                        <span>'.number_format($totalPriceNew[$i]).' đ</span>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                   ?>

                    <!--  -->
                  
                </div>

            </div>

            <div class="col-md-11 p-4 mt-3 mb-3 bg-white shadow-sm rounded">
                <div class="option py-3 d-flex justify-content-between">
                    <span>Phương Thức Thanh Toán </span>
                    <div class="option__chose d-flex gap-5">
                        <span>Thanh Toán Khi Nhận Hàng </span>
                        <a href="">Thay Đổi</a>
                    </div>
                </div>
                <!--  -->
                
                <div class="option__amout py-4 d-flex justify-content-end" style="border-top: 1px dashed #cccccc">
                    <div class="option__amout-item d-flex flex-column gap-3">
                        <div class="item1 d-flex gap-4">
                            <span>Tổng Tiền Hàng: </span>
                            <span><?php echo number_format($priceSumAll) ?> đ</span>
                        </div>
                        <div class="item2 d-flex gap-4">
                            <span>Phí Vận Chuyển: </span>
                            <span>0 đ</span>
                        </div>
                        <div class="item3 d-flex gap-4">
                            <span>Tổng Thanh Toán: </span>
                            <span><?php echo number_format($priceSumAll) ?> đ</span>
                        </div>
                    </div>
                </div>

                
                <div class="checkout py-4 d-flex justify-content-end" style="border-top: 1px dashed #cccccc">
                    <div class="checkout__btn">
                        <button id="checkout" class="btn btn-dark">Thanh Toán</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    

 </div>

 <script>
    <?php include'public/js/product/checkout.js' ?>
 </script>
