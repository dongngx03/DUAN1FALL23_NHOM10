<?php include'./controllers/product/cartController.php' ?>
<style>
    <?php include_once 'public/css/product/cart.css' ?>
</style>
 <!-- navbar top -->
 <?php include'./views/components/navbar.php' ?>

<div class="cart">
    <h2 class="title">Cart</h2>
    <!-- <> -->
    <?php if(!empty($dataCart)) foreach($dataCart as $index => $value): ?>
    <form class="c-product" method="post">
        <div class="c-left">
            <img class="c-product-img" src="public/imgs/product/<?php echo $value['img_avatar'] ?>" alt=""></img>
            <div class="c-detail">
                <div class="c-name-product"><?php echo $value['product_name'] ?></div>
                    <div class="c-size-product">
                        <div class="c-size">Color</div>
                        <select name="color" id="">
                            <option value=""></option>
                        </select>
                    </div>
                <div class="c-size-color">
                    <div class="c-size-product">
                        <div class="c-size">Size</div>
                        <select name="" id="">
                            <option value="">38</option>
                            <option value="">39</option>
                            <option value="">40</option>
                            <option value="">41</option>
                            <option value="">42</option>
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
            </div>
        </div>
        <div class="c-total-product">
            <div class="c-total"><p>3.999.999<span>₫</span></p></div>
        </div>

        <button class="btntotal" type="button">Thêm Vào Túi </button>
    </form>
    <?php endforeach; ?>
</div>