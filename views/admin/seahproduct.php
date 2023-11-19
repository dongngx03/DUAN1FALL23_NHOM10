<?php include_once'./controllers/admin/seahProductController.php' ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Sản phẩm  -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sản Phẩm 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="?admin=addproduct">Thêm Mới Sản Phẩm </a></li>
            <li><a class="dropdown-item" href="?admin=productlist">Quản lý danh mục sản phẩm </a></li>
            <li><a class="dropdown-item" href="?admin=seahproduct">Tìm kiếm sản phẩm </a></li>
            <li><a class="dropdown-item" href="#">Quản lý hình ảnh sản phẩm</a></li>
          </ul>
        </li>
        <!-- hết sản phẩm  -->

        <!-- Bình luận  -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Bình Luận 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Danh sách Bình luận </a></li>
            <li><a class="dropdown-item" href="#">Tìm Kiếm bình luận </a></li>
            <li><a class="dropdown-item" href="#">Phân loại bình luận </a></li>
            <li><a class="dropdown-item" href="#">Quản lý bình luận </a></li>
          </ul>
        </li>
        <!-- hết danh sách bình luận   -->

        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
       
      
      </ul>
     
    </div>
  </div>
</nav>

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

