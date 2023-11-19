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
            <a href="#" class="u-fuc"><i class="ti-announcement"></i>20/11 Free Ship All</a>
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
                        <input type="text" name="user_name" id="user" value="<?php echo $value['user_name'] ?>">
                        <p id="errUser" style="color: red;"></p>
                    </div>
                    <div class="div">
                        <label for="">Mật khẩu</label>
                        <input type="password" name="user_pw" id="pass" value="<?php echo $value['user_pw'] ?>">
                        <p id="errPass" style="color: red;"></p>
                    </div>
                    <div class="div">
                        <label for="">Email</label>
                        <input type="text" name="user_email" id="email" value="<?php echo $value['user_email'] ?>">
                        <p id="errEmail" style="color: red;"></p>
                    </div>
                    <div class="div">
                        <label for="">Số Điện Thoại</label>
                        <input type="text" name="user_phone" id="phone" placeholder="Số điện thoại" value="<?php echo $value['user_phone'] ?>">
                        <p id="errPhone" style="color: red;"></p>
                    </div>
                    <div class="div">
                        <label for="">Ảnh</label>
                        <input type="file" name="user_img">
                    </div>
                </div>
                <div class="u-ip-right">
                    <div class="div">
                        <label for="">Xã</label>
                        <input type="text" placeholder="Nhập xã/phường" id="xa" value="<?php echo $value['user_xa'] ?>">
                        <p id="errXa" style="color: red;"></p>
                    </div>
                    <div class="div">
                        <label for="">Huyện</label>
                        <input type="text" placeholder="Nhập huyện/quận" id="huyen" value="<?php echo $value['user_huyen'] ?>">
                        <p id="errHuyen" style="color: red;"></p>
                    </div>
                    <div class="div">
                        <label for="">Tỉnh</label>
                        <input type="text" placeholder="Nhập tỉnh/thành phố" id="tinh" value="<?php echo $value['user_tinh'] ?>">
                        <p id="errTinh" style="color: red;"></p>
                    </div>
                   
                    <div class="div">
                        <label for="">Địa trỉ chi tiết </label>
                        <input class="describe" type="text" placeholder="Địa chỉ rõ hơn" id="mota" value="<?php echo $value['diatri_chitiet'] ?>">
                        <p id="errMota" style="color: red;"></p>
                    </div>
                </div>
            </div>
            <button name="btnSubmit" type="submit">Cập Nhật</button>
            <span class="sucess"></span>
        </form>
       
        <!--  -->
        </div>
    </div>
</div>
<?php endforeach; ?>


<script>
    function validateForm(event) {
        event.preventDefault();
        const user = document.getElementById('user');
        const pass = document.getElementById('pass');
        const email = document.getElementById('email');
        const phone = document.getElementById('phone');
        const xa = document.getElementById('xa');
        const huyen = document.getElementById('huyen');
        const tinh = document.getElementById('tinh');
        const diachi = document.getElementById('diachi');
        const mota = document.getElementById('mota');
        const errorText = document.getElementById('errorText');

        if (user.onblur(user) && pass.onblur(pass) && email.onblur(email) && phone.onblur(phone) && xa.onblur(xa) &&huyen.onblur(huyen)
        && tinh.onblur(tinh) && diachi.onblur(diachi) && mota.onblur(mota)) {
            const myForm = document.getElementById('myForm');
            myForm.onsubmit = null;
            myForm.submit();
        }
    }
    user.onblur = function() {
        if (user.value.trim() === '') {
            user.style.border = '1px solid red';
            errUser.textContent = 'Vui lòng nhập.';
            return false;
        } else {
            user.style.border = '1px solid green';
            errUser.textContent = '';
            return true;
        }
    };
    pass.onblur = function() {
        if (pass.value.trim() === '') {
            pass.style.border = '1px solid red';
            errPass.textContent = 'Vui lòng nhập.';
            return false;

        } else {
            pass.style.border = '1px solid green';
            errPass.textContent = '';
            return true;
        }
    };
    email.onblur = function() {
        const emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (email.value.trim() === '') {
            email.style.border = '1px solid red';
            errEmail.textContent = 'Vui lòng nhập.';
            return false;
        }
        if (!emailPattern.test(email.value.trim())) {
            errEmail.textContent = 'Email không hợp lệ';
            return false;
        } else {
            email.style.border = '1px solid green';
            errEmail.textContent = '';
            return true;

        }   
    };
    phone.onblur = function() {
        const phoneNumberPattern = /^\d{10}$/;
        if (phone.value.trim() === '') {
            phone.style.border = '1px solid red';
            errPhone.textContent = 'Vui lòng nhập.';
            return false;
        }
        if (!phoneNumberPattern.test(phone.value.trim())) {
            errPhone.textContent = 'SDT không hợp lệ';
            return false;
        }
        else {
            phone.style.border = '1px solid green';
            errPhone.textContent = '';
            return true;

        }
    };
        xa.onblur = function() {
        if (xa.value.trim() === '') {
            xa.style.border = '1px solid red';
            errXa.textContent = 'Vui lòng nhập.';
            return false;

        } else {
            xa.style.border = '1px solid green';
            errXa.textContent = '';
            return true;
        }
    };
    huyen.onblur = function() {
        if (huyen.value.trim() === '') {
            huyen.style.border = '1px solid red';
            errHuyen.textContent = 'Vui lòng nhập.';
            return false;

        } else {
            huyen.style.border = '1px solid green';
            errHuyen.textContent = '';
            return true;
        }
    };
    tinh.onblur = function() {
        if (tinh.value.trim() === '') {
            tinh.style.border = '1px solid red';
            errTinh.textContent = 'Vui lòng nhập.';
            return false;
        } else {
            tinh.style.border = '1px solid green';
            errTinh.textContent = '';
            return true;
        }
    };
    diachi.onblur = function() {
        if (diachi.value.trim() === '') {
            diachi.style.border = '1px solid red';
            errDiachi.textContent = 'Vui lòng nhập.';
            return false
        } else {
            diachi.style.border = '1px solid green';
            errDiachi.textContent = '';
            return true
        }
    };
    mota.onblur = function() {
        if (mota.value.trim() === '') {
            mota.style.border = '1px solid red';
            errMota.textContent = 'Vui lòng nhập.';
            return false
        } else {
            mota.style.border = '1px solid green';
            errMota.textContent = '';
            return true
        }
    };
</script>