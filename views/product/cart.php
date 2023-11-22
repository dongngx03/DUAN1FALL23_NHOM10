<?php include'./controllers/product/cartController.php' ?>
<style>
    <?php include_once 'public/css/product/cart.css' ?>
</style>
 <!-- navbar top -->
 <?php include'./views/components/navbar.php' ?>

<div class="cart bg-light">
    <h2 class="title">Cart <i class="fa-solid fa-cart-shopping"></i></h2>
    <!-- <> -->
    <!-- nếu như người dùng chưa có đồ dùng nào trong giỏ hàng  -->
    <?php 
        if(empty($dataCart)) {
            echo '
            <div class="container">
                <h2 class="p-5 text-center text-secondary">Bạn chưa có sản phẩm nào, hãy quay lại danh mục và thêm cho mình sản phẩm yêu thích vào đây nhé  <i class="fa-solid fa-face-grin-hearts fa-bounce"></i></h2>
            </div>
            ';
        }    
    ?>
    
    <!-- nếu như người dùng có sản phẩm trong giỏ hàng rồi  -->
    <?php if(!empty($dataCart)) foreach($dataCart as $value): ?>
    <form class="c-product" method="post">
        <div class="c-left">
            <img class="c-product-img" src="public/imgs/product/<?php echo $value['img_avatar'] ?>" alt=""></img>
            <div class="c-detail">
                <div class="c-name-product"><?php echo $value['product_name'] ?></div>
                    <div class="c-size-product">
                        <div class="c-size">Color</div>
                        <select name="color" id="">
                            <option value=""><?php echo $value['color_name'] ?></option>
                        </select>
                    </div>
                <div class="c-size-color">
                    <div class="c-size-product">
                        <div class="c-size">Size</div>
                        <select name="" id="">
                            <option value=""><?php echo $value['size_name'] ?></option>
                          
                        </select>
                    </div>
                    <div class="c-quantity-product">
                        <div class="c-quantity">Quantity</div>
                        <select class="" name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                    </div>
                </div>
                <button type="button" class="c-heart"><i class="ti-heart"></i></button>
                <button type="button" class="c-ti-trash"><i class="ti-trash"></i></button>
                <input class="cart_id" type="hidden" value="<?php echo $value['cart_id'] ?>">
            </div>
        </div>
        <div class="c-total-product">
            <div class="c-total"><p><span><?php echo number_format($value['product_price']) ?> đ</span></p></div>
        </div>

        <button class="btntotal" type="button">Thêm Vào Túi </button>
    </form>
    <?php endforeach; ?>
</div>

<script>
    <?php include'public/js/product/cart.js'?>
</script>