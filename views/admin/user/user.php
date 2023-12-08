<?php 
    include'./controllers/admin/user/userController.php';
?>

<?php  include'./views/components/navbarAdmin.php'; ?>

<!-- phần bảng danh sách sản phẩm  -->
<div class="container-fluid">
    <h2 class="text-center pt-3 text-secondary">Người Dùng</h2>
    <div class="row pt-3">
        <div class="col-md-12">
            <table class="table  bg-white shadow-lg p-2 mb-5 bg-body rounded align-middle text-center">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">ID Người Dùng</th>
                        <th scope="col">Tên </th>
                        <th scope="col">Ảnh Đại Diện </th>
                        <th scope="col">Số Điện Thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Địa Trỉ</th>
                        <th scope="col">Quyền</th>
                    </tr>
                </thead>
                <tbody>
                   <!-- Người Dùng  -->
                  <?php if(!empty($dataUser)) foreach($dataUser as $value): ?>
                    <tr>
                       <td><?php echo $value['user_id'] ?></td>
                       <td><?php echo $value['user_name'] ?></td>
                       <td>
                        <img
                        style="width:100px; height:100px; object-fit:cover"
                        src="
                        <?php 
                            if(isset($value['user_img'])) {
                                echo $value['user_img'];
                            }
                        ?>
                        " alt="Chưa Cập Nhật">
                       </td>
                       <td><?php echo $value['user_phone'] ?></td>
                       <td><?php echo $value['user_email'] ?></td>
                       <td class="text-danger"><?php 
                            if($value['user_tinh'] != '') {
                                echo $value['user_tinh'].'-'.$value['user_huyen'].'-'.$value['user_xa'];
                            }else{
                                echo 'Chưa Cập Nhật';
                            }
                       ?></td>
                       <td>
                        <?php 
                            echo($value['role_id'] == '3' ? 'Người Dùng': 'Quản Trị Viên')
                        ?>
                       </td>
                    </tr>
                    <?php endforeach; ?>
                   
                  
                </tbody>
            </table>
        </div>
    </div>
    
</div>