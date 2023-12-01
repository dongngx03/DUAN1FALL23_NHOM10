<?php 
    include'./controllers/order/feedBackController.php';
?>
<style>
    <?php include_once 'public/css/product/orderHistory.css' ?>
</style>

 <div class="container-flud bg-light">
    
    <div class="row mt-2">
        <div class="cart-top">
            <div class="cart-top__title d-flex ms-5">
                <h4 class="ps-3">DLQ Shop |</h4>
                <h4 class="text-secondary ps-3 ">Phản Hồi Sản Phảm </h4>
            </div>
        </div>
        <hr>

        <div class="row mx-auto d-flex justify-content-center">
           <!--  -->
           <div class="box2 col-md-12 bg-white  mt-4 mb-4 shadow-sm rounded">
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="mb-3 mt-3">
                        <label for="" class="form-label">Ảnh Phản Sản Phẩm</label>
                        <input type="file" class="form-control" name="fb_img">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="" class="form-label">Đánh Giá Theo <i class="fa-solid fa-star"></i></label>
                        <select name="star_id" id="" class="form-control">
                            <?php foreach($dataStar as $value): ?>
                                <option value="<?php echo $value['star_id'] ?>"><?php echo $value['star_id'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nội Dung</label>
                        <textarea class="form-control" name="fb_content" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-secondary" type="submit" name="addFB">Gửi Phản Hồi</button>
                    </div>
                </form>
                
            </div>
        </div>

    </div>

    

 </div>
