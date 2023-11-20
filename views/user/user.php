<?php  
    include'./controllers/user/userController.php';
?>
<style>
    <?php include_once 'public/css/user/user.css' ?>
</style>
<!--  -->
<?php foreach($dataUser as $value): ?>
<div class="user">
    <div class="sidebar">
        <div class="u-profile">
            <div class="u-avt">
             <img src="<?=$value['user_img']?>" alt="">
            </div>
            <div class="u-name">
                <span><strong><?php echo $value['user_name'] ?></strong></span>
                <div class="u-settiing">
                    <a href="#"><i class="ti-pencil"></i>Sửa Hồ Sơ</a>
                </div>
            </div>

        </div>
        <div class="fuc">
            <a href="#" class="u-fuc"><i class="ti-announcement"></i>20/11 Free Ship All</a>
            <a href="?act=cart" class="u-fuc"><i class="ti-shopping-cart"></i> Giỏ hàng</a>
            <a href="#" class="u-fuc"><i class="ti-clipboard"></i>Đơn mua</a>
            <a href="#" class="u-fuc"><i class="ti-receipt"></i>Voucher của bạn</a>
            <a id="login" href="" class="u-fuc"><i class="ti-shift-right"></i>Đăng xuất</a>
        </div>

    </div>
    <div class="u-prof">
        <h2 class="u-prof-user">Hồ Sơ Của Tôi</h2>
        <div class="info-user">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
        <hr>
        <!--  -->
      
        <form class="u-form-user" enctype="multipart/form-data" method="post" id="myForm" onsubmit="validateForm(event)">
            <div class="u-ip-info">
                <div class="u-ip-left">
                <div class="div">
                     <input type="hidden" name="user_id" value="<?=$user_id?>">
                    </div>
                    <div class="div">
                        <label for="">Tên đăng nhập</label>
                        <input type="text" name="user_name" id="user" value="<?php echo $value['user_name'] ?>">
                        <p id="errUser" style="color: red;">
                            <?php echo(isset($err['user_name'])? $err['user_name']:'') ?>
                        </p>
                    </div>
                    <div class="div">
                        <label for="">Mật khẩu</label>
                        <input type="password" name="user_pw" id="pass" value="<?php echo $value['user_pw'] ?>">
                        <p id="errPass" style="color: red;">
                            <?php echo(isset($err['user_pw'])? $err['user_pw']:'') ?>
                        </p>
                    </div>
                    <div class="div">
                        <label for="">Email</label>
                        <input type="text" name="user_email" id="email" value="<?php echo $value['user_email'] ?>">
                        <p id="errEmail" style="color: red;">
                            <?php 

                                echo(isset($err['user_email'])? $err['user_email']:'');
                                echo(isset($err['email_trung'])? $err['email_trung']:'')
                            ?>
                        </p>
                    </div>
                    <div class="div">
                        <label for="">Số Điện Thoại</label>
                        <input type="text" name="user_phone" id="phone" placeholder="Số điện thoại" value="<?php echo $value['user_phone'] ?>">
                        <p id="errPhone" style="color: red;">
                            <?php 
                              
                                echo(isset($err['user_phone'])? $err['user_phone']:'');
                                echo(isset($err['phone_trung'])? $err['phone_trung']:'');
                            ?>
                            </p>
                    </div>
                    <div class="div">
                        <label for="">Ảnh</label>
                        <input type="file" name="img">
                    </div>
                </div>
                <div class="u-ip-right">
                    <div class="div">
                        <label for="">Xã</label>
                        <input type="text" name="xa" placeholder="Nhập xã/phường" id="xa" value="<?php echo $value['user_xa'] ?>">
                        <p id="errXa" style="color: red;">
                            <?php echo(isset($err['xa'])? $err['xa']:'') ?>
                        </p>
                    </div>
                    <div class="div">
                        <label for="">Huyện</label>
                        <input type="text" name="huyen" placeholder="Nhập huyện/quận" id="huyen" value="<?php echo $value['user_huyen'] ?>">
                        <p id="errXa" style="color: red;">
                            <?php echo(isset($err['huyen'])? $err['huyen']:'') ?>
                        </p>
                    </div>
                    <div class="div">
                        <label for="">Tỉnh</label>
                        <input type="text" name="tinh" placeholder="Nhập tỉnh/thành phố" id="tinh" value="<?php echo $value['user_tinh'] ?>">
                        <p id="errXa" style="color: red;">
                            <?php echo(isset($err['tinh'])? $err['tinh']:'') ?>
                        </p>
                    </div>
                   
                    <div class="div">
                        <label for="">Địa chỉ chi tiết </label>
                        <input class="describe" name="diachi" type="text" placeholder="Địa chỉ rõ hơn" id="mota" value="<?php echo $value['diatri_chitiet'] ?>">
                        <p id="errXa" style="color: red;">
                           
                        </p>
                    </div>
                </div>
            </div>
            <button id="update" name="capnhat" type="submit">Cập Nhật</button>
            <span class="sucess"></span>
        </form>
       
        <!--  -->
        </div>
    </div>
</div>
<?php endforeach; ?>

<script>
    // cập nhật 
    const update = document.getElementById('update');
        update.addEventListener('click', (e) => {
        e.preventDefault();
        Swal.fire({
            icon: 'question',
            title: 'Bạn Chắc Chắn Muốn Thay Đổi Thông Tin Chứ ?',
            showCancelButton: true,
            confirmButtonText: 'Thay Đổi',
            cancelButtonText: 'Không',
        }).then((result) => {
            if (result.isConfirmed) {
                const form = document.getElementById('myForm');
                form.submit(); // Gửi form khi xác nhận
            }
        });
    })
    // đăng xuât
    const dangxuat = document.querySelector('#login')
    console.log(dangxuat);
    dangxuat.addEventListener('click', (e) => {
        e.preventDefault();
        console.log(1);
        Swal.fire({
            icon: 'warning',
            title: 'Bạn Muốn Đăng Xuất ?',
            showCancelButton: true,
            confirmButtonText: 'Đăng Xuất',
            cancelButtonText: 'Không',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '?act=user&&dangxuat';
            }
        });
    })
</script>