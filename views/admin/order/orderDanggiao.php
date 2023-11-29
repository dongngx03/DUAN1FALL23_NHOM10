<?php 
    include'./controllers/admin/order/orderDanggiaoController.php';
?>
<style>
    <?php 
        include'public/css/admin/orderWaitting.css';
    ?>
</style>
<?php 
    include'./views/components/navbarAdmin.php';
?>

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-md-11 p-3 bg-light mt-2 shadow-sm rounded">
            <h3 class="text-secondary h4">Đơn Hàng Giao </h3>
        </div>

        <div class="col-md-11 mt-3">
        
            <table class="table col-md-12 shadow-sm p-3 mb-5 bg-body rounded align-middle text-center">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">ID Đơn hàng </th>
                        <th scope="col">Tổng Tiền Đơn Hàng </th>
                        <th scope="col">ID Người Mua</th>
                        <th scope="col">Ngày Mua </th>
                        <th scope="col">Chức Năng</th>
                        
                    </tr>
                </thead>
                <tbody id="variant_list">
                   <!-- đơn hàng   -->
                   <?php 
                        if(empty($dataOrder)) {
                            echo '
                                <tr >
                                    <th colpan="5" scope="row" class="text-center">Không có đơn hàng đang giao nào  </th>
                                </tr>
                            ';
                        }
                   ?>
                   <?php if(!empty($dataOrder)) foreach($dataOrder as $value): ?>
                    <tr>
                        <th scope="row"><?php echo $value['ot_id'] ?></th>
                        <td><?php echo number_format($value['ot_amout']). ' đ' ?></td> 
                        <td><?php echo $value['user_id'] ?></td>
                        <td><?php echo $value['ot_date'] ?></td>
                        <td>
                            <a href="?admin=orderdetail&&ot_id=<?php echo $value['ot_id'] ?>" class="btn btn-primary">Chi tiết</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

