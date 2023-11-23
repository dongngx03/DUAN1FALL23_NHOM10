<?php include_once'./controllers/admin/product/addproductvariantController.php' ?>


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
                        <!-- thêm sản phẩm bình thường  -->

<div class="container-fluid bg-light pt-5">
        <div class="col-md-12 pb-4">
            <h2 class=" text-center text-danger"><?php echo(isset($product)? $product[0]['product_name']:'') ?></h2>
        </div>
                            <!-- thêm sản phẩm biến thể  -->
        <div class="col-md-12">
            <div class="row justify-content-center gap-3">
              <div class="col-md-6 bg-white shadow-lg p-3 mb-5 bg-body rounded">
                <span class="h3 text-secondary">Sản Phẩm Biến Thể  </span>
                <form class="pt-3" action="" id="myform" method="post">
                    <!-- ID product -->
                    <div class="mb-3">
                        <strong><label for="" class="form-label">ID product </label></strong>
                        <select name="p_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <!--  -->
                            <?php if(!empty($product)) foreach($product as $value): ?>
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
                            <?php if(!empty($dataSize)) foreach($dataSize as $value): ?>
                            <option 
                              value="
                              <?php echo $value['size_id'] ?>
                              ">
                              <?php echo $value['size_name'] ?>
                            </option>
                          <?php endforeach; ?>
                            <!--  -->
                        </select>
                      
                    </div>
                    <!-- ID color -->
                    <div class="mb-3">
                        <strong><label for="" class="form-label"> Color </label></strong>
                        <select name="color_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <!--  -->
                            <?php if(!empty($dataColor)) foreach($dataColor as $value): ?>
                            <option 
                              value="
                              <?php echo $value['color_id'] ?>
                              ">
                              <?php echo $value['color_name'] ?>
                            </option>
                            <?php endforeach; ?>
                            <!--  -->
                        </select>
                    
                    </div>
                    <!-- quantity -->
                    <div class="mb-3">
                        <strong><label for="" class="form-label">Quantity </label></strong>
                        <input name="quantity" type="number" class="form-control"  placeholder="">
                        <span class="text-danger ">
                            <?php echo(!empty($err['quantity'])? $err['quantity']:'') ?>
                        </span>
                    </div>
                  

                    <div class="mb-3">
                        <button id="add" class="btn btn-dark w-100" name="addProductVariant">Add</button>
                        <span class="text-danger text-center "><?php echo(!empty($err['variantExit'])? $err['variantExit']:'') ?></span>
                    </div>

                </form>
            </div>
                              <!-- thêm ảnh  -->
            <div class="col-md-5 bg-white shadow-lg p-3 mb-5 bg-body rounded">
                <span class="h3 text-secondary">Thêm ảnh sản phẩm  </span>
                <form class="pt-3" action="" method="post" enctype="multipart/form-data">
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
                            <?php if(!empty($product)) foreach($product as $value): ?>
                            <option value="<?php echo $value['product_id'] ?>"><?php echo $value['product_name'] ?></option>
                            <?php endforeach; ?>
                            <!--  -->
                        </select>
                    </div>

                    <div class="mb-3">
                        <button name="addImg" class="btn btn-dark w-100">Add IMG</button>
                    </div>
                </form>
            </div>
            </div>
        </div>

        <!-- liệt kê ra các ảnh của img  -->
        <div class="col-md-12">
            <div class="row d-flex justify-content-center">
                <h3 class="text-center text-danger pb-3">Ảnh Của Sản Phẩm </h3>
                <div class="col-md-12 px-5">
                    <table class="table  bg-white shadow-lg p-2 mb-5 bg-body rounded align-middle text-center">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">ID Ảnh </th>
                            <th scope="col">Đường Dẫn </th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Chức năng khác</th>
                        </tr>
                    </thead>
                    <tbody>
                      <!-- sản phẩm  -->
                      <?php if(!empty($productImg)) foreach($productImg as $value): ?>
                        <tr>
                            <td><?php echo $value['img_id'] ?></td>
                            <td><?php echo $value['img_url'] ?></td>
                            <td>
                                <img style="width:100px;height:auto" src="public/imgs/product/<?php echo $value['img_url'] ?>" alt="">
                            </td>
                          
                            <td class="">
                                <button class="btn btn-danger">Xóa ảnh</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                      
                      
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        

</div>



