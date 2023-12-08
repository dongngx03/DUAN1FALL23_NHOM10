<?php include'./controllers/product/product1Controller.php' ?>
<style>
    <?php include'public/css/product/product1.css' ?>
</style>
<div class="container-fluid bg-white"> 
    <!-- nabar -->
    <?php include'./views/components/navbar.php' ?>

    <div class="col-md-12 mt-4">
        <div class="box1">
            <div class="shose-all d-grid">
                <span class="h4 fw-bold text-dark ">Tất cả</span>
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
                <?php if(!empty($dataBrand)) foreach($dataBrand as $value): ?>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="" name="brand" value="<?php echo $value['brand_id'] ?>">
                    <label class="form-check-label" for=""><?php echo ucfirst($value['brand_name']) ?></label>
                </div>
                <?php endforeach; ?>
                <hr>
                <!-- tầm tiền -->
                <h4>Giá </h4>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="_500" name="price" value="1500">
                    <label class="form-check-label" for="_500">Nhỏ hơn 500 nghìn</label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="500" name="price" value="5001">
                    <label class="form-check-label" for="500">500 nghìn - 1 triệu</label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="1" name="price" value="12">
                    <label class="form-check-label" for="1">1 triệu - 2 triệu </label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="2" name="price" value="23">
                    <label class="form-check-label" for="2">2 triệu - 3 triệu </label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="3" name="price" value="34">
                    <label class="form-check-label" for="3">3 triệu - 4 triệu </label>
                </div>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="4" name="price" value="4">
                    <label class="form-check-label" for="4">lơn hơn 4 triệu</label>
                </div>

                <hr>
                <!-- màu  -->
                <h4>Màu </h4>
                <?php if(!empty($dataColor)) foreach($dataColor as $value): ?>
                <div class="form-check brand_check pt-1 d-flex align-items-center gap-2">
                    <input class="form-check-input" type="checkbox" id="" name="color" value="<?php echo $value['color_id'] ?>">
                    <label class="form-check-label" for=""><?php echo ucfirst($value['color_name']) ?></label>
                </div>
                <?php endforeach; ?>
                
            </div>
        </div>

        <!-- phải  -->
        <div id="r_box" class="r_box bg-white gap-2">
           <?php foreach($dataProduct as $value): ?>
           <div class="item">
                <div class="item_img">
                    <img src="public/imgs/product/<?php echo $value['img_avatar'] ?>" alt="">
                </div>
            
                <div class="item_name">
                    <strong><span class="fs-5"><?php echo $value['product_name'] ?></span></strong>
                </div>
                <div class="item_desc">
                    <span class="text-secondary ">Woman/Men's Shose</span>
                </div>
                
                <div class="item_price">
                    <strong><span><?php echo number_format($value['product_price']) ?> đ</span></strong>
                </div>
                <div class="over">
                    <a class="btn btn-dark" href="?act=product&&detail=<?php echo $value['product_id'] ?>">chi tiết </a>
                </div>
           </div>
           <?php endforeach; ?>
     
        </div>
    </div>
</div>

<script>
    <?php include"public/js/product/product1.js" ?>
</script>


