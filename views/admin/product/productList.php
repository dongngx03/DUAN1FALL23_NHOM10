<?php 
    include'./controllers/admin/product/productListController.php';
?>
<?php 
    include'./views/components/navbarAdmin.php';
?>

<!-- phần bảng danh sách sản phẩm  -->
<div class="container-fluid">
    <h2 class="text-center pt-3 text-secondary">Product (Shose) </h2>
    <div class="row pt-3">
        <div class="col-md-12">
            <table class="table  bg-white shadow-lg p-2 mb-5 bg-body rounded align-middle text-center">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">ID Product </th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Option</th>
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
                            <a class="btn  btn-primary" href="?admin=productdetail&&product_id=<?php echo $value['product_id'] ?>">Detail</a>
                            <a class="btn  btn-success" href="?admin=addproductvariant&&product_id=<?php echo $value['product_id'] ?>">Add Product Variant </a>
                            <a class="btn  btn-danger deleteP" href="">Delete </a>
                            <a class="btn btn-secondary" href="?admin=updateproduct">Update</a>
                            <!-- input chứ p_id -->
                            <input class="product_id" type="hidden" value="<?php echo $value['product_id'] ?>">
                        </td>
                    </tr>
                    <?php endforeach; ?>
                   
                  
                </tbody>
            </table>
        </div>
    </div>
    
</div>

<script>
    <?php 
        include'public/js/admin/productList.js';
    ?>
</script>
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
