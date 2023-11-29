<?php include_once'./controllers/admin/product/addproductController.php' ?>

<?php 
    include'./views/components/navbarAdmin.php';
?>
<!-- body -->
                        <!-- thêm sản phẩm bình thường  -->
<div class="container-fluid bg-light ">
    <div class="row pt-5 ">
        <h1 class="text-center text-secondary">ADD PRODUCT</h1>
    </div>
    <div class="row p-5">
        <div class="col-md-12 bg-white shadow-lg p-3 mb-5 bg-body rounded">
            <span class="h3 text-secondary">Thêm Sản Phẩm </span>
            <form class="pt-3" action="" method="post" enctype="multipart/form-data">
                <!-- name -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">Name product</label></strong>
                    <input type="text" class="form-control" name="p_name" value="<?php echo (isset($_POST['p_name'])? $_POST['p_name']:'') ?>">
                    <!--  -->
                    <span class="text-danger ">
                        <?php
                         echo(!empty($err['p_name'])? $err['p_name']:'');
                         echo(!empty($err['checkNameProduct'])? $err['checkNameProduct']:'');
                        ?>
                    </span>
                </div>
                <!-- price -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">Price </label></strong>
                    <input type="number" class="form-control"  name="p_price" value="<?php echo (isset($_POST['p_price'])? $_POST['p_price']:'') ?>">
                    <span class="text-danger "><?php echo(!empty($err['p_price'])? $err['p_price']:'') ?></span>
                </div>
                <!-- desc -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">Description</label></strong>
                    <textarea class="form-control" id="" rows="3" name="p_desc" value="<?php echo (isset($_POST['p_desc'])? $_POST['p_desc']:'') ?>"></textarea>
                    <span class="text-danger "><?php echo(!empty($err['p_desc'])? $err['p_desc']:'') ?></span>
                </div>
                <!-- brand -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">Brand </label></strong>
                    <select name="brand_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <!--  -->
                        <?php foreach($dataBrand as $value): ?>
                        <option value="<?php echo $value['brand_id'] ?>"><?php echo $value['brand_name'] ?></option>
                        <?php endforeach; ?>
                        <!--  -->
                    </select>
                </div>
                <!-- type -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">Type </label></strong>
                    <select name="type_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <!--  -->
                        <?php foreach($dataType as $value): ?>
                        <option value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
                        <?php endforeach; ?>
                        <!--  -->
                    </select>
                </div>
                <!-- img avatar -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">Img avatar</label></strong>
                    <input class="form-control" type="file" name="img_avatar">
                    <span class="text-danger "><?php echo(!empty($err['img_avatar'])? $err['img_avatar']:'') ?></span>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-dark w-100" name="addProduct">Add</button>
                </div>
            </form>
        </div>


                            <!-- thêm sản phẩm biến thể  -->

        <div class="col-md-12 bg-white shadow-lg p-3 mb-5 bg-body rounded">
            <span class="h3 text-secondary">Sản Phẩm Biến Thể  </span>
            <form class="pt-3" action="" method="post">
                <!-- ID product -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">ID product </label></strong>
                    <select name="p_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <!--  -->
                        <?php foreach($dataProduct as $value): ?>
                        <option value="<?php echo $value['product_id'] ?>"><?php echo $value['product_name'] ?></option>
                        <?php endforeach; ?>
                        <!--  -->
                    </select>
                    
                </div>
                <!-- ID size -->
                <div class="mb-3">
                    <strong><label for="" class="form-label"> Size </label></strong>
                    <select name="size_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <!--  -->
                        <?php foreach($dataSize as $value): ?>
                        <option value="<?php echo $value['size_id'] ?>"><?php echo $value['size_name'] ?></option>
                        <?php endforeach; ?>
                        <!--  -->
                    </select>
                  
                </div>
                <!-- ID color -->
                <div class="mb-3">
                    <strong><label for="" class="form-label"> Color </label></strong>
                    <select name="color_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <!--  -->
                        <?php foreach($dataColor as $value): ?>
                        <option value="<?php echo $value['color_id'] ?>"><?php echo $value['color_name'] ?></option>
                        <?php endforeach; ?>
                        <!--  -->
                    </select>
                
                </div>
                 <!-- quantity -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">Quantity </label></strong>
                    <input name="quantity" type="number" class="form-control"  placeholder="">
                    <span class="text-danger "><?php echo(!empty($err1['quantity'])? $err1['quantity']:'') ?></span>
                </div>
               

                <div class="mb-3">
                    <button class="btn btn-dark w-100" name="addProductVariant">Add</button>
                    <span class="text-danger text-center "><?php echo(!empty($err1['variant_exit'])? $err1['variant_exit']:'') ?></span>
                </div>

            </form>
        </div>


                                <!-- thêm ảnh sản phẩm  -->
        <div class="col-md-12 bg-white shadow-lg p-3 mb-5 bg-body rounded">
            <span class="h3 text-secondary">Thêm ảnh sản phẩm  </span>
            <form action="" method="post" enctype="multipart/form-data">
                <!-- img url -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">Img url</label></strong>
                    <input name="img_url" class="form-control" type="file">
                </div>
               <!-- ID product -->
               <div class="mb-3">
                    <strong><label for="" class="form-label"> Product ID </label></strong>
                    <select name="p_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <!--  -->
                        <?php foreach($dataProduct as $value): ?>
                        <option value="<?php echo $value['product_id'] ?>"><?php echo $value['product_name'] ?></option>
                        <?php endforeach; ?>
                        <!--  -->
                    </select>
                </div>

                <div class="mb-3">
                    <button name="addImg" class="btn btn-dark w-100">Add img</button>
                </div>
            </form>
        </div>
    </div>
</div>

