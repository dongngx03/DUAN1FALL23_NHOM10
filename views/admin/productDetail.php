<?php 
include'./controllers/admin/productDetailController.php';
?>
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

<!-- phần chi tiết sản phẩm   -->
<div class="container">
    <!-- thẻ ẩn chứa giá trị id product -->
    <input id="product_id" type="hidden" value="<?php echo $p_id ?>">
    <h2 class="text-center pt-3 text-secondary">Tất Cả Các Sản Phẩm Biến Thể Theo Màu </h2>
    <!-- hiển thị theo màu cảu sản phẩm  -->
    <div class="row ">
        <div class="col-md-12 px-3">
          <strong><span class="text-secondary h4">Số Màu</span></strong>
        </div>
        <div class="col-md-12 d-flex gap-2 shadow-lg p-3 mb-5 bg-body rounded">
            <!--  -->
            <?php if(!empty($dataColor))foreach($dataColor as $value): ?>
                <div class="variant_color">
                    <button class="btn btn-outline-dark"><?php echo $value['color_name'] ?></button>
                    <input class="color_id" type="hidden" value="<?php echo $value['color_id'] ?>">
                </div>
            <?php endforeach; ?>
            <!--  -->
        </div>    
    </div>

    <!-- danh sách các biến thể hiển thị theo màu  -->
    <div class="row pt-2">
        <div class="col-md-12">
            <strong><span class="text-secondary h4">Số Sản Phẩm Dựa Trên Màu</span></strong>
        </div>
        <div class="col-md-12 pt-1">
            <table class="table col-md-12 shadow-lg p-3 mb-5 bg-body rounded">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên Sản Phẩm </th>
                        <th scope="col">Màu</th>
                        <th scope="col">Size</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody id="variant_list">
                   <!-- sản phẩm  -->
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    <?php include'public/js/admin/productDetail.js' ?>
</script>
