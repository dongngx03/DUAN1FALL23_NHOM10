<?php 
    include_once'./controllers/product/productdetailController.php';
?>
<style>
    <?php include_once'public/css/product/productdetail.css'; ?>
</style>
<div class="container-fluid">   
    <!-- mã sản phẩm  -->
    <input id="product_id" type="hidden" value="<?php echo $p_id ?>">

    <!-- navbar top -->
    <?php include'./views/components/navbar.php' ?>

       <div class="row pt-4">
            <!-- left -->
            <div class="col-md-7 d-grid">
                <div class="d_left p-4 pt-5">
                    <div class="d_left_box1 ms-5">
                        <!--  -->
                        <?php if(!empty($dataImg)) foreach($dataImg as $value): ?>
                            <div class="box1_item">
                                <img src="public/imgs/product/<?php echo $value['img_url'] ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                        <!--  -->
                        
                    </div>

                    <div class="d_left_box2">
                        <div class="left_box2_conatiner">
                            <!--  -->
                            <?php if(!empty($dataImg)) foreach($dataImg as $value): ?>
                            <img class="img-banner" src="public/imgs/product/<?php echo $value['img_url'] ?>" alt="">
                            <?php endforeach; ?>
                            <!--  -->
                        </div>

                        <div class="d_left_box2_btn">

                            <button onclick="prew()" class="btn btn-outline-light"><i class="fa-solid fa-chevron-left text-dark"></i></button>
                            <button onclick="next()" class="btn btn-outline-light"><i class="fa-solid fa-chevron-right text-dark"></i></button>
                           

                        </div>
                    </div>
                </div>

                
            </div>

            <!-- right -->
            <div class="col-md-5">
                <div class="d_right py-5">
                    <!--  -->
                    <?php if(!empty($dataProduct)) foreach($dataProduct as $value): ?>
                        <h1 class="h2"><?php echo $value['product_name'] ?></h1>
                    <?php endforeach; ?>
                    <!--  -->
                    <h2 class="h5 fw-bolder">Men/Women's Slides</h2>
                    <!--  -->
                    <?php if(!empty($dataProduct)) foreach($dataProduct as $value): ?>
                    <span class="pt-3 fw-bolder"><?php echo number_format($value['product_price']) ?> đ</span>
                    <?php endforeach; ?>
                    <!--  -->
                    <h3 class="pt-3 selectcolor">Select Color</h3>
                    <div class="d_right_color">
                        <!--  -->
                        <?php if(!empty($dataColor)) foreach($dataColor as $value): ?>
                        <a href="" class="color_item">
                            <i class="fa-solid fa-face-smile icon"></i>
                            <span class="color_item_text"><?php echo $value['color_name'] ?></span>
                            <input class="color_item_input" type="hidden" value="<?php echo $value['color_id'] ?>">
                        </a>
                        <?php endforeach; ?>
                        <!--  -->
                       
                       
                    </div>
                  

                    <div class="d_right_size pt-4 pb-2 d-flex">
                        <span class="selectcolor">Select Size / <a href="" class="text-decoration-none text-secondary">Size Guide</a></span>
                    </div>
                            <!-- SIZE -->
                    <div class="d_size">
                        <div class="border border-1 rounded-2 p-5">
                            <span class="text-center p-3 text-secondary ">Bạn vui lòng chọn màu để tìm size</span>
                        </div>

                    </div>
                   
                            <!-- SIZE -->

                            <!-- số lượng  -->
                    <div class="d_right_size pt-3 d-flex gap-1">
                        <div id="gioihan" class="selectcolor text-danger"></div>
                    </div>
                            <!-- số lượng  -->

                    <div class="d_right_size pt-4 d-flex">
                        <span class="selectcolor">Quantity </span>
                    </div>

                    <div class="d_quantity">
                        <button id="tang" class="btn btn-outline-dark bg-light"><span>+</span></button>
                        <input id="quantity" type="number" class="input" value="1">
                        <button id="giam" class="btn btn-outline-dark bg-light"><span>-</span></button>
                    </div>
                    
                    <!-- thông báo từ sever khi ta thêm vào giỏ hàng  -->
                    <div class="err">
                        <span id="mess_cart" class="text-danger"></span>
                    </div>
                    <!-- Thêm vào giỏ hàng và mua hàng  -->
                    <form class="d_option" method="post">
                        <button id="add_Cart" class="btn btn-dark rounded-pill">
                            <span>Add To Cart <i class="fa-regular fa-heart"></i></span>
                        </button>
                        <button class="btn btn-outline-dark rounded-pill">
                            <span>Buy Now</span>
                        </button>
                    </form>
                    <!-- Mô tả về sản phẩm  -->
                    <div class="d_desc pt-3">
                        <hr>
                        <!--  -->
                        <?php if(!empty($dataProduct)) foreach($dataProduct as $value): ?>
                        <span>
                            <?php echo $value['product_desc'] ?>
                        </span>
                        <?php endforeach; ?>

                        <hr class="">
                        <!--  -->
                    </div>

                   
                </div>
            </div>

       </div>

       <div class="row pt-2 px-4">
            <div class="py-3 ">
                <span class="h4 fw-normal"> Bình luận từ người dùng  </span>
            </div>
       </div>

       <!-- phần cmt và sản phẩm liên quan  -->
       <div class="row pt-5 px-4">
           <div class="span py-3">
                <span class="h4 fw-normal"> Có Thể Bạn cũng thích </span>

           </div>

           <div class="row px-3">
                <div class="d_product-list">
                    <div class="d_product-list-item">
                        <a class="list-item d-grid gap-1" href="">
                            <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/53f44f04-f9a1-439e-82bd-1fabea198a2a/court-vision-low-next-nature-shoes-N2fFHb.png" alt="">
                            <strong><span class="h5 fw-bold">Nike air force 1</span></strong>
                            <span>Men shose</span>
                            <strong><span>1.000.000đ</span></strong>
                        </a>
                        <a class="list-item d-grid gap-1" href="">
                            <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/53f44f04-f9a1-439e-82bd-1fabea198a2a/court-vision-low-next-nature-shoes-N2fFHb.png" alt="">
                            <strong><span class="h5 fw-bold">Nike air force 1</span></strong>
                            <span>Men shose</span>
                            <strong><span>1.000.000đ</span></strong>
                        </a>
                        <a class="list-item d-grid gap-1" href="">
                            <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/53f44f04-f9a1-439e-82bd-1fabea198a2a/court-vision-low-next-nature-shoes-N2fFHb.png" alt="">
                            <strong><span class="h5 fw-bold">Nike air force 1</span></strong>
                            <span>Men shose</span>
                            <strong><span>1.000.000đ</span></strong>
                        </a>
                        <a class="list-item d-grid gap-1" href="">
                            <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/53f44f04-f9a1-439e-82bd-1fabea198a2a/court-vision-low-next-nature-shoes-N2fFHb.png" alt="">
                            <strong><span class="h5 fw-bold">Nike air force 1</span></strong>
                            <span>Men shose</span>
                            <strong><span>1.000.000đ</span></strong>
                        </a>
                      
                    </div>
                </div>
           </div>
       </div>
       

       
</div>

<script>
    <?php include_once'public/js/product/productdetail.js' ?>
</script>

