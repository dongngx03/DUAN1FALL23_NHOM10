<?php include_once'./controllers/admin/product/updateProductController.php' ?>


<?php 
    include'./views/components/navbarAdmin.php';
?>

<!-- body -->

<div class="container-fluid bg-light ">
    <div class="row pt-5 ">
        <h1 class="text-center text-secondary">Cập Nhật Sản Phẩm </h1>
    </div>
    <div class="row p-5">
        <div class="col-md-12 bg-white shadow-lg p-3 mb-5 bg-body rounded">
            <span class="h3 text-secondary">Sản Phẩm ID:  </span>
            <form class="pt-3" action="" method="post" enctype="multipart/form-data">
                <!-- name -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">Name product</label></strong>
                    <input type="text" class="form-control" name="p_name" value="">
                    <!--  -->
                    <span class="text-danger ">
                        
                    </span>
                </div>
                <!-- price -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">Price </label></strong>
                    <input type="number" class="form-control"  name="p_price" value="">
                    <span class="text-danger "></span>
                </div>
                <!-- desc -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">Description</label></strong>
                    <textarea class="form-control" id="" rows="3" name="p_desc" value=""></textarea>
                    <span class="text-danger "></span>
                </div>
                <!-- brand -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">Brand </label></strong>
                    <select name="brand_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <!--  -->
                      
                        <option value=""></option>
                      
                        <!--  -->
                    </select>
                </div>
                <!-- type -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">Type </label></strong>
                    <select name="type_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <!--  -->
                     
                        <option value=""></option>
                      
                       
                    </select>
                </div>
                <!-- img avatar -->
                <div class="mb-3">
                    <strong><label for="" class="form-label">Img avatar</label></strong>
                    <input class="form-control" type="file" name="img_avatar">
                    <span class="text-danger "></span>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-dark w-100" name="addProduct">Add</button>
                </div>
            </form>
        </div>

    </div>
</div>

