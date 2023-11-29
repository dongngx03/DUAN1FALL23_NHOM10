<?php 
    include'./controllers/admin/product/productListController.php';
?>

<?php 
    include'./views/components/navbarAdmin.php';
?>

<!-- phần bảng danh sách sản phẩm  -->
<div class="container-fluid">
    <h2 class="text-center pt-3 text-secondary">Danh mục sản phẩm </h2>
    <div class="row pt-3">
        <div class="col-md-12">
            <table class="table  bg-white shadow-lg p-2 mb-5 bg-body rounded align-middle text-center">
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
                       
                        <td class="">
                            <a class="btn  btn-primary" href="?admin=productdetail&&product_id=<?php echo $value['product_id'] ?>">Chi tiết</a>
                            <a class="btn  btn-success" href="?admin=addproductvariant&&product_id=<?php echo $value['product_id'] ?>">Thêm biến thể</a>
                            <a class="btn btn-danger" href="">Xóa sản phẩm </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                   
                  
                </tbody>
            </table>
        </div>
    </div>
    
</div>
