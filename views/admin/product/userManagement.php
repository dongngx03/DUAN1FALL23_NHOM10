<?php include_once'./controllers/user/listuserController.php' ?>


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
          <a class="nav-link" href="?admin=userManagement">Link</a>
        </li>
       
      
      </ul>
     
    </div>
  </div>
</nav>
<!-- phần danh sách người dùng -->
<div class="container-fluid">
    <h2 class="text-center pt-3 text-secondary">Danh sách User </h2>
    <div class="row pt-3">
        <div class="col-md-12">
            <table class="table  bg-white shadow-lg p-2 mb-5 bg-body rounded">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">Tên đăng nhập </th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Vai trò</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                   <!-- sản phẩm  -->
                   <?php if(!empty($dataUser)) foreach($dataUser as $value): ?>
                    <tr>
                        <td><?php echo $value['user_name'] ?></td>
                        <td><?php echo $value['user_pw'] ?></td>
                        <td><?php echo $value['user_email'] ?></td>
                        <td><?php echo $value['user_phone'] ?></td>
                        <td><?php echo $value['role_id'] ?></td>
                       
                        <td class="d-grid gap-1">
                            <a class="btn btn-danger" href="">Sửa tài khoản </a>
                            <a class="btn btn-danger" href="">Xóa tài khoản </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                   
                  
                </tbody>
            </table>
        </div>
    </div>
    
</div>


