<?php include_once'./controllers/admin/product/seahProductController.php' ?>



<?php 
    include'./views/components/navbarAdmin.php';
?>


<!-- body -->

<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center p-3">Tìm Kiếm Sản Phẩm </h2>
        </div>
        <!-- tìm kiếm  -->
        <div class="col-md-12 ">
            <form class=" bg-white shadow-sm p-2 mb-5 bg-body rounded">
                <div class="mb-3">
                    <label  class="form-label">Nhập ID Sản Phẩm  </label>
                    <input id="inputSeah" type="text"  class="form-control"  aria-describedby="emailHelp">
                </div>
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </form>
        </div>

        <div class="col-md-12 ">
            
        </div>
    </div>
</div>

<script>
  <?php include'public/js/admin/seahProduct.js' ?>
</script>

