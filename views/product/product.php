<?php
    include_once'./controllers/product/productController.php';
?>
<div class="container-fluid bg-light"> 
    <!-- nabar -->
    <?php include'./views/components/navbar.php' ?>

        <!-- mid -->
        <div class="row p-4">
            <div class="p-mid">
                <div class="p-mid-1">
                    <h3><strong>Shoe / Nike</strong></h3>
                    <span> <i class="fa-solid fa-gear"></i> Setting</span>
                </div>

                <div class="p-mid-2">
                    <a href="#" id="full-btn" class="text-decoration-none text-dark">
                        <span>Full <i class="fa-solid fa-sliders"></i> </span>
                    </a>
                </div>
            </div>
        </div>

        <!-- botton -->
        <div id="nav-list" class="row p-4">
            <div id="nav-left" class="col-md-3 py-3">
                
                <!-- giới tính  -->
                <div class="p-gender">
                   <div class="p-gender-item">
                        <span class="h4"><strong>Gender</strong></span>
                        <ul class="px-2 py-3">
                            <li><input type="checkbox"><label for="">Nam</label></li>
                            <li><input type="checkbox"><label for="">Nữ</label></li>
                            <li><input type="checkbox"><label for="">Cả hai</label></li>
                        </ul>
                   </div>

                <!-- giá tiền  -->
                </div>
                <div class="p-gender">
                   <div class="p-gender-item">
                        <span class="h4"><strong>Price</strong></span>
                        <ul class="px-2 py-3">
                            <li><input type="checkbox"><label for="">0đ - 300,000đ</label></li>
                            <li><input type="checkbox"><label for="">300,000đ - 500,000đ</label></li>
                            <li><input type="checkbox"><label for="">500,000đ - 700,000đ</label></li>
                            <li><input type="checkbox"><label for="">700,000đ - 900,000đ</label></li>
                            <li><input type="checkbox"><label for="">900,000đ - ...</label></li>
                          
                        </ul>
                   </div>

                </div>
                <!-- màu sắc  -->
                <div class="p-gender">
                   <div class="p-gender-item">
                        <span class="h4"><strong>Color</strong></span>
                        <ul class="px-2 py-3">
                            <li><input type="checkbox"><label for=""><i class="fa-solid fa-circle text-danger"></i> Red</label></li>
                            <li><input type="checkbox"><label for=""><i class="fa-solid fa-circle text-primary"></i> Blue</label></li>
                            <li><input type="checkbox"><label for=""><i class="fa-solid fa-circle text-warning"></i> Yellow</label></li>
                            <li><input type="checkbox"><label for=""><i class="fa-solid fa-circle text-dark"></i> Black</label></li>
                            <li><input type="checkbox"><label for=""><i class="fa-solid fa-circle text-light"></i> White</label></li>
                            <li><input type="checkbox"><label for="">Other</label></li>
                        </ul>
                   </div>

                </div>
            </div>

            <div id="product-list" class="col-md-9 overflow-auto">
                <div class="p-product">

                    <!--  -->
                    <?php if(!empty($dataProduct)) foreach($dataProduct as $value): ?>
                    <div class="product-item text-decoration-none">
                        <img src="public/imgs/product/<?php echo $value['img_avatar'] ?>" alt="">
                        <div class="infor d-grid py-3">
                            <span><strong><?php echo $value['product_name'] ?></strong></span>
                            <span> Woman/Men's Shose</span>
                            <span><strong><?php echo number_format($value['product_price']) ?> đ</strong></span>
                        </div>

                        <div class="product-btn">
                            <a href="" class="btn btn-outline-dark text-center"><i class="fa-solid fa-cart-shopping"></i> ADD CART</a>
                            <a href="?act=product&&detail=<?php echo $value['product_id'] ?>" class="btn btn-outline-light"><i class="fa-solid fa-circle-info"></i> DETAIL</a>
                        </div>

                    </div>
                    <?php endforeach; ?>
                    <!--  -->

                    <a class="product-item text-decoration-none" href="#">
                        <img src="public/imgs/product/product2.png" alt="">
                        <div class="infor d-grid py-3">
                            <span><strong>Nike Air Force 1'07</strong></span>
                            <span>Men's Shose</span>
                            <span><strong>2,950,000đ</strong></span>
                        </div>

                        <div class="product-btn">
                            <button class="btn btn-outline-dark text-center"><i class="fa-solid fa-cart-shopping"></i> ADD</button>
                            <button class="btn btn-outline-light"><i class="fa-solid fa-circle-info"></i> BUY</button>
                        </div>

                    </a>
                    <a class="product-item text-decoration-none" href="#">
                        <img src="public/imgs/product/product3.png" alt="">
                        <div class="infor d-grid py-3">
                            <span><strong>Nike Air Force 1'07</strong></span>
                            <span>Men's Shose</span>
                            <span><strong>2,950,000đ</strong></span>
                        </div>

                        <div class="product-btn">
                            <button class="btn btn-outline-dark text-center"><i class="fa-solid fa-cart-shopping"></i> ADD</button>
                            <button class="btn btn-outline-light"><i class="fa-solid fa-circle-info"></i> BUY</button>
                        </div>

                    </a>
                    <a class="product-item text-decoration-none" href="#">
                        <img src="public/imgs/product/product4.png" alt="">
                        <div class="infor d-grid py-3">
                            <span><strong>Nike Air Force 1'07</strong></span>
                            <span>Men's Shose</span>
                            <span><strong>2,950,000đ</strong></span>
                        </div>

                        <div class="product-btn">
                            <button class="btn btn-outline-dark text-center"><i class="fa-solid fa-cart-shopping"></i> ADD</button>
                            <button class="btn btn-outline-light"><i class="fa-solid fa-circle-info"></i> BUY</button>
                        </div>

                    </a>
                    <a class="product-item text-decoration-none" href="#">
                        <img src="public/imgs/product/product5.png" alt="">
                        <div class="infor d-grid py-3">
                            <span><strong>Nike Air Force 1'07</strong></span>
                            <span>Men's Shose</span>
                            <span><strong>2,950,000đ</strong></span>
                        </div>

                        <div class="product-btn">
                            <button class="btn btn-outline-dark text-center"><i class="fa-solid fa-cart-shopping"></i> ADD</button>
                            <button class="btn btn-outline-light"><i class="fa-solid fa-circle-info"></i> BUY</button>
                        </div>

                    </a>
                    <a class="product-item text-decoration-none" href="#">
                        <img src="public/imgs/product/product6.png" alt="">
                        <div class="infor d-grid py-3">
                            <span><strong>Nike Air Force 1'07</strong></span>
                            <span>Men's Shose</span>
                            <span><strong>2,950,000đ</strong></span>
                        </div>

                        <div class="product-btn">
                            <button class="btn btn-outline-dark text-center"><i class="fa-solid fa-cart-shopping"></i> ADD</button>
                            <button class="btn btn-outline-light"><i class="fa-solid fa-circle-info"></i> BUY</button>
                        </div>

                    </a>
                    <a class="product-item text-decoration-none" href="#">
                        <img src="public/imgs/product/product6.png" alt="">
                        <div class="infor d-grid py-3">
                            <span><strong>Nike Air Force 1'07</strong></span>
                            <span>Men's Shose</span>
                            <span><strong>2,950,000đ</strong></span>
                        </div>

                        <div class="product-btn">
                            <button class="btn btn-outline-dark text-center"><i class="fa-solid fa-cart-shopping"></i> ADD</button>
                            <button class="btn btn-outline-light"><i class="fa-solid fa-circle-info"></i> BUY</button>
                        </div>

                    </a>
                    <a class="product-item text-decoration-none" href="#">
                        <img src="public/imgs/product/product6.png" alt="">
                        <div class="infor d-grid py-3">
                            <span><strong>Nike Air Force 1'07</strong></span>
                            <span>Men's Shose</span>
                            <span><strong>2,950,000đ</strong></span>
                        </div>

                        <div class="product-btn">
                            <button class="btn btn-outline-dark text-center"><i class="fa-solid fa-cart-shopping"></i> ADD</button>
                            <button class="btn btn-outline-light"><i class="fa-solid fa-circle-info"></i> BUY</button>
                        </div>

                    </a>
                    <a class="product-item text-decoration-none" href="#">
                        <img src="public/imgs/product/product6.png" alt="">
                        <div class="infor d-grid py-3">
                            <span><strong>Nike Air Force 1'07</strong></span>
                            <span>Men's Shose</span>
                            <span><strong>2,950,000đ</strong></span>
                        </div>

                        <div class="product-btn">
                            <button class="btn btn-outline-dark text-center"><i class="fa-solid fa-cart-shopping"></i> ADD</button>
                            <button class="btn btn-outline-light"><i class="fa-solid fa-circle-info"></i> BUY</button>
                        </div>

                    </a>
                    <a class="product-item text-decoration-none" href="#">
                        <img src="public/imgs/product/product6.png" alt="">
                        <div class="infor d-grid py-3">
                            <span><strong>Nike Air Force 1'07</strong></span>
                            <span>Men's Shose</span>
                            <span><strong>2,950,000đ</strong></span>
                        </div>

                        <div class="product-btn">
                            <button class="btn btn-outline-dark text-center"><i class="fa-solid fa-cart-shopping"></i> ADD</button>
                            <button class="btn btn-outline-light"><i class="fa-solid fa-circle-info"></i> BUY</button>
                        </div>

                    </a>
                    
                    

                </div>
            </div>
        </div>
</div>

<script>
   const productlist = document.getElementById('product-list');
    const navlist = document.getElementById('nav-left');
    const product = document.querySelector(".p-product");
    const fullbtn = document.getElementById("full-btn");

    // hàm ấn vào để gạt bỏ thanh lọc và phóng to gian hàng 
    function fullscreen() {
    if(fullbtn.innerHTML !== "X") {
            navlist.style.display="none";
            productlist.classList.remove("col-md-9");
            productlist.classList.remove("overflow-auto");
            productlist.classList.add("col-md-12");
            product.classList.add("fullscreen");
            fullbtn.innerHTML = "X";
           
    }else{
            navlist.style.display="block";
            productlist.classList.add("col-md-9");
            productlist.classList.add("overflow-auto");
            productlist.classList.remove("col-md-12");
            product.classList.remove("fullscreen");
            fullbtn.innerHTML = '<span>Full <i class="fa-solid fa-sliders"></i> </span>';
    }
    }

// gắn envent
fullbtn.addEventListener('click', () => {
    fullscreen();
})



</script> 
   
<style>
    <?php include_once'public/css/product/product.css' ?>
</style>