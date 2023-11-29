<?php 
include'./controllers/admin/product/productDetailController.php';
?>

<?php 
    include'./views/components/navbarAdmin.php';
?>


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
                    <button class="btn btn-outline-light color"><?php echo $value['color_name'] ?></button>
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
            <table class="table col-md-12 shadow-lg p-3 mb-5 bg-body rounded align-middle text-center">
                <thead class="table-secondary">
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
