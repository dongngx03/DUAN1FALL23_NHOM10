<?php  
    include'./controllers/user/adminController.php';
?>
<style>
    <?php include_once 'public/css/user/user.css' ?>
</style>
<?php foreach($dataUser as $value): ?>
<div class="user">
    <div class="sidebar">
        <div class="u-profile">
            <div class="u-avt">
                <img src="public/imgs/product/product2.png" alt="">
            </div>
            <div class="u-name">
                <span><strong><?php echo $value['user_name'] ?></strong></span>
                <div class="u-settiing">
                    <a href="#"><i class="ti-pencil"></i>Sửa Hồ Sơ</a>
                </div>
            </div>

        </div>
        <div class="fuc">
            <a href="?admin=addproduct" class="u-fuc"><i class="ti-announcement"></i>Trang Quản Trị</a>
            <a href="#" class="u-fuc"><i class="ti-shopping-cart"></i> Giỏ hàng</a>
            <a href="#" class="u-fuc"><i class="ti-clipboard"></i>Đơn mua</a>
            <a href="#" class="u-fuc"><i class="ti-receipt"></i>Voucher của bạn</a>
            <a href="?act=user&&dangxuat" class="u-fuc"><i class="ti-shift-right"></i>Đăng xuất</a>
        </div>

    </div>
    <div class="u-prof">
        <h2 class="u-prof-user">Hồ Sơ Của Tôi</h2>
        <div class="info-user">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
        <hr>
        <!--  -->
        <form class="u-form-user" method="post" id="myForm" onsubmit="validateForm(event)">
            <div class="u-ip-info">
                <div class="u-ip-left">
                    <div class="div">
                        <label for="">Tên đăng nhập</label>
                        <input type="text" name="user_name" id="user" disabled value="<?php echo $value['user_name'] ?>">
                        <p id="errUser" style="color: red;"></p>
                    </div>
                    <div class="div">
                        <label for="">Mật khẩu</label>
                        <input type="password" name="user_pw" id="pass" disabled value="<?php echo $value['user_pw'] ?>">
                        <p id="errPass" style="color: red;"></p>
                    </div>
                    <div class="div">
                        <label for="">Email</label>
                        <input type="text" name="user_email" id="email" disabled value="<?php echo $value['user_email'] ?>">
                        <p id="errEmail" style="color: red;"></p>
                    </div>
                    <div class="div">
                        <label for="">Số Điện Thoại</label>
                        <input type="text" name="user_phone" id="phone" disabled placeholder="Số điện thoại" value="<?php echo $value['user_phone'] ?>">
                        <p id="errPhone" style="color: red;"></p>
                    </div>
                    <div class="div">
                        <label for="">Ảnh</label>
                        <input type="file" disabled name="user_img">
                    </div>
                </div>
                <div class="u-ip-right">
                    <div class="div">
                        <label for="">Xã</label>
                        <input type="text" placeholder="Nhập xã/phường" id="xa" disabled value="<?php echo $value['user_xa'] ?>">
                        <p id="errXa" style="color: red;"></p>
                    </div>
                    <div class="div">
                        <label for="">Huyện</label>
                        <input type="text" placeholder="Nhập huyện/quận" id="huyen" disabled value="<?php echo $value['user_huyen'] ?>">
                        <p id="errHuyen" style="color: red;"></p>
                    </div>
                    <div class="div">
                        <label for="">Tỉnh</label>
                        <input type="text" placeholder="Nhập tỉnh/thành phố" id="tinh" disabled value="<?php echo $value['user_tinh'] ?>">
                        <p id="errTinh" style="color: red;"></p>
                    </div>
                   
                    <div class="div">
                        <label for="">Địa trỉ chi tiết </label>
                        <input class="describe" type="text" placeholder="Địa chỉ rõ hơn" id="mota" disabled value="<?php echo $value['diatri_chitiet'] ?>">
                        <p id="errMota" style="color: red;"></p>
                    </div>
                </div>
            </div>
            <button name="btnSubmit" disabled type="submit">Cập Nhật</button>
            <span class="sucess"></span>
        </form>
        <!--  -->
        </div>
    </div>
</div>
<?php endforeach; ?>

