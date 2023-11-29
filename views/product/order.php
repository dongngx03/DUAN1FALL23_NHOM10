
<style>
    <?php include_once 'public/css/product/order.css' ?>
</style>

<?php include'./controllers/product/orderController.php' ?>
 <div class="container-flud bg-light">
    
    <div class="row mt-2">
        <div class="cart-top">
            <div class="cart-top__title d-flex ms-5">
                <h4 class="ps-3">DLQ Shop |</h4>
                <h4 class="text-secondary ps-3 ">Giỏ Hàng <i class="ti-shopping-cart text-secondary"></i></h4>
            </div>
        </div>
        <hr>

        <!-- menu  -->
        <div class="col-md-11 mx-auto">
            <!-- tiêu để  -->
            <div class="row bg-white shadow-sm rounded p-3 mb-3">
                <div class="col-md-1">
                    <input type="checkbox">
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <span>Sản Phẩm </span>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                    <span>Đơn giá </span>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                    <span>Số lượng</span>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                    <span>Số Tiền</span>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                    <span>Thao Tác</span>
                </div>
            </div>

            <!-- Nội dung -->
            <?php
                if(empty($dataOrder_item)) {
                    echo '
                        <div class="row shadow-sm rounded px-3 py-5 mb-3 bg-white">
                            <div class="col-md-12 d-flex justify-content-center align-items-center p-5">
                                <div class="mess p-5 d-flex flex-column gap-3 align-items-center">
                                    <img style="width: 120px;height:auto;" src="public/imgs/user/checkout.png" alt="">
                                    <span class="text-secondary">Chưa có sản phẩm</span>
                                </div>
                            </div>
                        </div>
                    ';
                }
            ?>
          
            <?php if(!empty($dataOrder_item)) foreach($dataOrder_item as $value):  ?>
            <div class="parent row bg-white shadow-sm rounded px-3 py-4 mb-3">
                <input class="cart_id" type="hidden" value="<?php echo $value['oi_id'] ?>">
                <input class="pv_id" type="hidden" value="<?php echo $value['pv_id'] ?>">
                <input class="p_name" type="hidden" value="<?php echo $value['product_name'] ?>">
                <input class="p_img" type="hidden" value="<?php echo $value['img_avatar'] ?>">
                <input class="p_size" type="hidden" value="<?php echo $value['size_name'] ?>">
                <input class="p_color" type="hidden" value="<?php echo $value['color_name'] ?>">

                <div class="col-md-1 d-flex justity-content-center">
                    <div class="cart__input  d-flex justify-content-center align-items-center">
                        <label class="custom-checkbox">
                            <input class="chose_pv" name="dummy" type="checkbox" value="<?php echo $value['oi_id'] ?>">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-3 d-flex justity-content-center">
                    <div class="cart__product d-flex gap-3  d-flex justify-content-center align-items-center">
                        <img src="public/imgs/product/<?php echo $value['img_avatar'] ?>" alt="">
                        <div class="cart__product__deatil">
                            <strong><span><?php echo $value['product_name'] ?></span></strong>
                            <span class="text-secondary">Color: <i class="fa-solid fa-circle color_type"></i> <span class="color_item"><?php echo $value['color_name'] ?></span></span>
                            <span class="text-secondary text-decoration-underline ">Size: <?php echo $value['size_name'] ?></span>

                        </div>
                    </div>
                </div>
                <div class="col-md-2 d-flex align-items-center justify-content-center ">
                    <div class="cart__price">
                        <strong><span class="text-danger price_real"><?php echo number_format($value['product_price']) ?></span><span class="text-danger"> đ</span></strong>
                        <span class="price text-secondary">Kho:<span class="price_item"><?php echo $value['quantity'] ?></span> chiếc</span>
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                    <div class="d_quantity d-flex justify-content-center align-items-center">
                        <button id="tang" class="tang btn btn-outline-dark bg-light"><span>+</span></button>
                        <input id="quantity" type="number" class="input" value="1">
                        <button id="giam" class=" giam btn btn-outline-dark bg-light"><span>-</span></button>
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                    <div class="cart_total d-flex justify-content-center align-items-center">
                        <span class="total_price fw-bold"></span>
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                    <div class="cart__option d-flex justify-content-center align-items-center">
                        <button class="button">
                            <svg viewBox="0 0 448 512" class="svgIcon"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            <!-- chức năng  -->
            <div class="row bg-white shadow-sm rounded px-3 py-4 mb-3">
                    <div class="col-md-3 d-flex justify-content-start align-items-center">
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <a class="text-secondary text-decoration-none">Chọn Tất Cả</a>
                    </div>
                    <div class="col-md-2 d-flex justify-content-start align-items-center">
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <a class="text-secondary text-decoration-none">Bỏ Chọn Tất Cả</a>
                    </div>
                    <div class="col-md-1 d-flex justify-content-start align-items-center">
                        <a href="" class="text-danger text-decoration-none">Xóa</a>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end align-items-center"><span class="text-dark fs-5">Tổng tiền: <span id="price_sum"></span></div>
                    <div class="col-md-3 d-flex justify-content-end">
                        <button class="thanhtoan"> <span>MUA NGAY <i class="ti-shopping-cart text-secondary"></i></span></button>
                    </div>
            </div>

            
        </div>
    </div>

    

 </div>
<script>
    <?php include'public/js/product/order.js'?>
</script>