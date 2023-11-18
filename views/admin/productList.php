<?php 
    include'./controllers/admin/productListController.php';
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

<!-- phần bảng danh sách sản phẩm  -->
<div class="container-fluid">
    <h2 class="text-center pt-3 text-secondary">Danh mục sản phẩm </h2>
    <div class="row pt-3">
        <div class="col-md-12">
            <table class="table  bg-white shadow-lg p-2 mb-5 bg-body rounded">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">ID Sản phẩm </th>
                        <th scope="col">Tên</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Ảnh</th>
                      
                        <th scope="col">Chức năng khác</th>
                    </tr>
                </thead>
                <tbody>
                   <!-- sản phẩm  -->
                   <?php if(!empty($dataProduct)) foreach($dataProduct as $value): ?>
                    <tr>
                        <td>SP <?php echo $value['product_id'] ?></td>
                        <td><?php echo $value['product_name'] ?></td>
                        <td><?php echo number_format($value['product_price']) ?> đ</td>
                        <td>
                            <img style="width:100px;height:auto" src="public/imgs/product/<?php echo $value['img_avatar'] ?>" alt="">
                        </td>
                       
                        <td>
                            <a class="btn  btn-primary" href="?admin=productdetail&&product_id=<?php echo $value['product_id'] ?>">Chi tiết</a>
                            <a class="btn  btn-success" href="">Thêm biến thể</a>
                            <a class="btn btn-danger" href="">Xóa sản phẩm </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                   
                  
                </tbody>
            </table>
        </div>
    </div>
    
</div>
