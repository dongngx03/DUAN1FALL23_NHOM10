<?php include'./controllers/product/product1Controller.php' ?>
<style>
    <?php include'public/css/product/product1.css' ?>
</style>
<div class="container-fluid bg-white"> 
    <!-- nabar -->
    <?php include'./views/components/navbar.php' ?>

    <div class="col-md-12">
        <div class="box1">
            <div class="shose-all d-grid">
                <span class="h4 fw-bold text-dark ">Tất cả (105)</span>
                <span class="h5 text-dark">Phân loại sản phẩm </span>
            </div>

            <div class="shose-setting">
                <div class="dropdown">
                    <a class="text-decoration-none h5 text-lg text-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Sort By 
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Từ thấp đến cao</a></li>
                        <li><a class="dropdown-item" href="#">Từ cao đến thấp</a></li>
                        <li><a class="dropdown-item" href="#">Mặc định</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- sản phẩm  -->

    <div class="col-md-12 d-flex pt-3 gap-3 scrollable-div">
        <!-- trái  -->
        <div class="l_box bg-white">
           <!-- check hãng  -->
            <div class="brand shadow-sm p-3 mb-5 bg-body rounded text-secondary fw-bold">
                <h4>Hãng </h4>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="checkboxNike">
                    <label class="form-check-label" for="checkboxNike">Nike</label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="checkboxAdidas">
                    <label class="form-check-label" for="checkboxAdidas">Adidas</label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="checkboxPuma">
                    <label class="form-check-label" for="checkboxPuma">Puma</label>
                </div>

                <hr>
                <!-- tầm tiền -->
                <h4>Giá </h4>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="500">
                    <label class="form-check-label" for="500">500 nghìn - 1 triệu</label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="1">
                    <label class="form-check-label" for="1">1 triệu - 2 triệu </label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="2">
                    <label class="form-check-label" for="2">2 triệu - 3 triệu </label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="3">
                    <label class="form-check-label" for="3">3 triệu - 4 triệu </label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="4">
                    <label class="form-check-label" for="4">lơn hơn 4 triệu</label>
                </div>

                <hr>
                <!-- màu  -->
                <h4>Màu </h4>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="black">
                    <label class="form-check-label" for="black">Black </label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="white">
                    <label class="form-check-label" for="white">white </label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="red">
                    <label class="form-check-label" for="red">red </label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="green">
                    <label class="form-check-label" for="green">green </label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="blue">
                    <label class="form-check-label" for="blue">blue</label>
                </div>

    
            </div>
        </div>

        <!-- phải  -->
        <div class="r_box bg-white gap-2">
            <div class="item">
                <!-- ảnh  -->
                <div class="item_img">
                    <img src="public/imgs/product/product1.png" alt="">
                </div>
                <!-- tên -->
                <div class="item_name">
                    <strong><span>Nike air foce 1</span></strong>
                </div>
                <div class="item_desc">
                    <span class="text-secondary ">Woman/Men's Shose</span>
                </div>
                <!-- giá  -->
                <div class="item_price">
                    <strong><span>1.000.000 đ</span></strong>
                </div>
                <div class="over">
                    <a class="btn btn-dark" href="">chi tiết </a>
                    <a class="btn btn-outline-dark" href="">mua </a>
                </div>

            </div>
            <div class="item">
                <!-- ảnh  -->
                <div class="item_img">
                    <img src="public/imgs/product/product1.png" alt="">
                </div>
                <!-- tên -->
                <div class="item_name">
                    <strong><span>Nike air foce 1</span></strong>
                </div>
                <div class="item_desc">
                    <span class="text-secondary ">Woman/Men's Shose</span>
                </div>
                <!-- giá  -->
                <div class="item_price">
                    <strong><span>1.000.000 đ</span></strong>
                </div>
                <div class="over">
                    <a class="btn btn-dark" href="">chi tiết </a>
                    <a class="btn btn-outline-dark" href="">mua </a>
                </div>

            </div>
            <div class="item">
                <!-- ảnh  -->
                <div class="item_img">
                    <img src="public/imgs/product/product1.png" alt="">
                </div>
                <!-- tên -->
                <div class="item_name">
                    <strong><span>Nike air foce 1</span></strong>
                </div>
                <div class="item_desc">
                    <span class="text-secondary ">Woman/Men's Shose</span>
                </div>
                <!-- giá  -->
                <div class="item_price">
                    <strong><span>1.000.000 đ</span></strong>
                </div>
                <div class="over">
                    <a class="btn btn-dark" href="">chi tiết </a>
                    <a class="btn btn-outline-dark" href="">mua </a>
                </div>

            </div>
            <div class="item">
                <!-- ảnh  -->
                <div class="item_img">
                    <img src="public/imgs/product/product1.png" alt="">
                </div>
                <!-- tên -->
                <div class="item_name">
                    <strong><span>Nike air foce 1</span></strong>
                </div>
                <div class="item_desc">
                    <span class="text-secondary ">Woman/Men's Shose</span>
                </div>
                <!-- giá  -->
                <div class="item_price">
                    <strong><span>1.000.000 đ</span></strong>
                </div>
                <div class="over">
                    <a class="btn btn-dark" href="">chi tiết </a>
                    <a class="btn btn-outline-dark" href="">mua </a>
                </div>

            </div>
            <div class="item">
                <!-- ảnh  -->
                <div class="item_img">
                    <img src="public/imgs/product/product1.png" alt="">
                </div>
                <!-- tên -->
                <div class="item_name">
                    <strong><span>Nike air foce 1</span></strong>
                </div>
                <div class="item_desc">
                    <span class="text-secondary ">Woman/Men's Shose</span>
                </div>
                <!-- giá  -->
                <div class="item_price">
                    <strong><span>1.000.000 đ</span></strong>
                </div>
                <div class="over">
                    <a class="btn btn-dark" href="">chi tiết </a>
                    <a class="btn btn-outline-dark" href="">mua </a>
                </div>

            </div>
            <div class="item">
                <!-- ảnh  -->
                <div class="item_img">
                    <img src="public/imgs/product/product1.png" alt="">
                </div>
                <!-- tên -->
                <div class="item_name">
                    <strong><span>Nike air foce 1</span></strong>
                </div>
                <div class="item_desc">
                    <span class="text-secondary ">Woman/Men's Shose</span>
                </div>
                <!-- giá  -->
                <div class="item_price">
                    <strong><span>1.000.000 đ</span></strong>
                </div>
                <div class="over">
                    <a class="btn btn-dark" href="">chi tiết </a>
                    <a class="btn btn-outline-dark" href="">mua </a>
                </div>

            </div>
            <div class="item">
                <!-- ảnh  -->
                <div class="item_img">
                    <img src="public/imgs/product/product1.png" alt="">
                </div>
                <!-- tên -->
                <div class="item_name">
                    <strong><span>Nike air foce 1</span></strong>
                </div>
                <div class="item_desc">
                    <span class="text-secondary ">Woman/Men's Shose</span>
                </div>
                <!-- giá  -->
                <div class="item_price">
                    <strong><span>1.000.000 đ</span></strong>
                </div>
                <div class="over">
                    <a class="btn btn-dark" href="">chi tiết </a>
                    <a class="btn btn-outline-dark" href="">mua </a>
                </div>

            </div>
            <div class="item">
                <!-- ảnh  -->
                <div class="item_img">
                    <img src="public/imgs/product/product1.png" alt="">
                </div>
                <!-- tên -->
                <div class="item_name">
                    <strong><span>Nike air foce 1</span></strong>
                </div>
                <div class="item_desc">
                    <span class="text-secondary ">Woman/Men's Shose</span>
                </div>
                <!-- giá  -->
                <div class="item_price">
                    <strong><span>1.000.000 đ</span></strong>
                </div>
                <div class="over">
                    <a class="btn btn-dark" href="">chi tiết </a>
                    <a class="btn btn-outline-dark" href="">mua </a>
                </div>

            </div>
            <div class="item">
                <!-- ảnh  -->
                <div class="item_img">
                    <img src="public/imgs/product/product1.png" alt="">
                </div>
                <!-- tên -->
                <div class="item_name">
                    <strong><span>Nike air foce 1</span></strong>
                </div>
                <div class="item_desc">
                    <span class="text-secondary ">Woman/Men's Shose</span>
                </div>
                <!-- giá  -->
                <div class="item_price">
                    <strong><span>1.000.000 đ</span></strong>
                </div>
                <div class="over">
                    <a class="btn btn-dark" href="">chi tiết </a>
                    <a class="btn btn-outline-dark" href="">mua </a>
                </div>

            </div>
            <div class="item">
                <!-- ảnh  -->
                <div class="item_img">
                    <img src="public/imgs/product/product1.png" alt="">
                </div>
                <!-- tên -->
                <div class="item_name">
                    <strong><span>Nike air foce 1</span></strong>
                </div>
                <div class="item_desc">
                    <span class="text-secondary ">Woman/Men's Shose</span>
                </div>
                <!-- giá  -->
                <div class="item_price">
                    <strong><span>1.000.000 đ</span></strong>
                </div>
                <div class="over">
                    <a class="btn btn-dark" href="">chi tiết </a>
                    <a class="btn btn-outline-dark" href="">mua </a>
                </div>

            </div>
            <div class="item">
                <!-- ảnh  -->
                <div class="item_img">
                    <img src="public/imgs/product/product1.png" alt="">
                </div>
                <!-- tên -->
                <div class="item_name">
                    <strong><span>Nike air foce 1</span></strong>
                </div>
                <div class="item_desc">
                    <span class="text-secondary ">Woman/Men's Shose</span>
                </div>
                <!-- giá  -->
                <div class="item_price">
                    <strong><span>1.000.000 đ</span></strong>
                </div>
                <div class="over">
                    <a class="btn btn-dark" href="">chi tiết </a>
                    <a class="btn btn-outline-dark" href="">mua </a>
                </div>

            </div>
            <div class="item">
                <!-- ảnh  -->
                <div class="item_img">
                    <img src="public/imgs/product/product1.png" alt="">
                </div>
                <!-- tên -->
                <div class="item_name">
                    <strong><span>Nike air foce 1</span></strong>
                </div>
                <div class="item_desc">
                    <span class="text-secondary ">Woman/Men's Shose</span>
                </div>
                <!-- giá  -->
                <div class="item_price">
                    <strong><span>1.000.000 đ</span></strong>
                </div>
                <div class="over">
                    <a class="btn btn-dark" href="">chi tiết </a>
                    <a class="btn btn-outline-dark" href="">mua </a>
                </div>

            </div>
     
        </div>
    </div>
</div>


