<?php 
    include'./controllers/admin/order/orderDetailController.php';
?>

<?php 
    include'./views/components/navbarAdmin.php';
?>

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-md-11 p-3 bg-white mt-2 shadow-sm rounded d-flex gap-1 flex-column">
            <span class="text-secondary fw-bold h4 ">Đơn Hàng ID: <?php echo $ot_id ?> </span>
            <span class="text-dark fw-bold">Người Mua ID: <span class=" px-2 text-dark fw-light"><?php echo $user_id ?></span> </span>
            <span class="text-dark fw-bold">Số Điện THoại: (+84) <span class=" px-2 text-dark fw-light"><?php echo $phone_number ?></span> </span>
            <span class="text-dark fw-bold">Địa Trỉ Nhận Hàng: <span class=" px-2 text-dark fw-light"><?php echo $address ?></span> </span>
            <span class="text-dark fw-bold"> Giá Đơn Hàng: <span class=" px-2 text-dark fw-light"><?php echo number_format($ot_amout). ' đ' ?></span></span>

        </div>

        <div class="col-md-11 mt-3">
        
            <table class="table col-md-12 shadow-sm p-3 mb-5 bg-body rounded align-middle text-center">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">ID Đơn hàng item</th>
                        <th scope="col">Ảnh Sản Phẩm </th>
                        <th scope="col">Thông Tin Chi Tiết</th>
                        <th scope="col">Giá Lúc Mua</th>
                        <th scope="col">Số lượng Mua </th>
                        
                        
                    </tr>
                </thead>
                <tbody id="variant_list">
                   <!-- đơn hàng   -->
                
                    <?php if(!empty($dataOrder_items)) foreach($dataOrder_items as $value): ?>
                    <tr>
                        <th scope="row"><?php echo $value['oi_id'] ?></th>
                        <td>
                            <img style="width:100px; height:auto" src="public/imgs/product/<?php echo $value['img_avatar'] ?>" alt="">
                        </td> 
                        <td >
                            <div class="d-flex flex-column">
                                <span class="fw-bold"><?php echo $value['product_name'] ?></span>
                                <span>Color: <?php echo $value['color_name'] ?></span>
                                <span>Size: <?php echo $value['size_name'] ?></span>
                            </div>
                        </td>
                        <td>
                            <span class="text-danger"><?php echo number_format($value['oi_price']). ' đ' ?></span>
                        </td>
                        <td>
                            <span><?php echo $value['oi_quantity']. ' chiếc' ?></span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                  
                   
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="5">
                           <?php 
                                if($handle_id == '1') {
                                    echo'
                                        <div class="d-flex">
                                            <a id="chapnhan" class="btn btn-danger" href="?admin=orderdetail&&ot_id='.$ot_id.'&&chapnhan">Chấp Nhận Đơn</a>
                                        </div>
                                    ';
                                }else if($handle_id == '2') {
                                    echo'
                                    <div class="d-flex">
                                        <a id="thanhcong" class="btn btn-success" href="?admin=orderdetail&&ot_id='.$ot_id.'&&thanhcong">Đã Nhận Được Hàng </a>
                                    </div>
                                ';
                                }
                           ?>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>


