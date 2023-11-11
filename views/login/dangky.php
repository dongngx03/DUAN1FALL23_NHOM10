<!-- code -->

<style>
    <?php include_once 'public/css/login/dangky.css' ?>
</style>

<div class="container-fluid">
    <div class="row">
        <div class="l-navtop bg-light">
            <a href="#" class="text-decoration-none text-dark">Shop /</a>
            <span>Đăng ký</span>
        </div>
    </div>

    <div id="login-form" class="row mt-3">
        <div class="col-md-12">
            <div class="main">
                <div class="login-banner py-5">
                    <img src="public/imgs/login/banner1.png" alt="">
                </div>
                <div class="login-main py-5">
                    <form class="login-main-form" action="" method="post">
                        <div class="title px-4 pt-4">
                            <span class="h4">Đăng ký</span>
                        </div>
                        <div class="form-ip px-4">
                            <input type="text" placeholder="Tên của bạn" name="user" id="user">
                            <span id="errUser" style="color: red;"> </span>
                        </div>
                        <div class="form-ip px-4">
                            <input type="email" placeholder="Email" name="email" id="email">
                            <span id="errEmail" style="color: red;"> </span>
                        </div>
                        <div class="form-ip px-4">
                            <input type="password" placeholder="Mật khẩu" name="password" id="password">
                            <span id="errPassword" style="color: red;"> </span>
                        </div>
                        <div class="form-ip px-4">
                            <input type="password" placeholder="Nhập lại mật khẩu" name="confirmPassword"
                                id="confirmPassword">
                            <span id="errConfirmPassword" style="color: red;"> </span>
                        </div>

                        <div class="form-ip px-4">
                            <button class="btn btn-dark">Đăng ký </button>
                        </div>
                        <div class="form-ip px-4">
                            <a class="text-decoration-none" href="?act=quenmk"> Bạn quên mật khẩu ?</a>
                        </div>
                        <div class="mid-item px-4 d-flex justify-content-center">
                            <p>---------- H</p>
                            <p>oặ</p>
                            <p>c ----------</p>
                        </div>

                        <div class="last-item px-4 d-flex justify-content-center">
                            <p>Bạn đã có tài khoản?</p>
                            <a class="" href="?act=dangnhap">Đăng Nhập</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    function validateForm(event) {
        event.preventDefault();
        const user = document.getElementById("user");
        const email = document.getElementById("email");
        const password = document.getElementById("password");
        const confirmPassword = document.getElementById("confirmPassword");
        const errPassword = document.getElementById("errPassword");

        if (user.onblur(user) && email.onblur(email) && password.onblur(password) && confirmPassword.onblur(confirmPassword)) {
            const myForm = document.getElementById("myForm");
            myForm.onsubmit = null;
            myForm.submit();
        }
    }
    user.onblur = function () {
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
    email.onblur = function () {
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
    password.onblur = function () {
        const passwordPattern = /^[A-Z]\w{7}$/;
        if (password.value.trim() === '') {
            password.style.border = '1px solid red';
            errPassword.textContent = 'Vui lòng nhập.';
            return false;

        } 
        if (!passwordPattern.test(password.value.trim())) {
            errPassword.textContent = 'Mật khẩu phải có 8 kí tự và chữ cái đầu viết hoa.';
            return false;
        }
        else {
            password.style.border = '1px solid green';
            errPassword.textContent = '';
            return true;

        }
    };
    confirmPassword.onblur = function() {
  if (confirmPassword.value !== password.value) {
    errPassword.textContent = 'Mật khẩu không khớp.';
    confirmPassword.style.border = '1px solid red';
    return false;
  } else {
    errPassword.textContent = '';
    confirmPassword.style.border = '1px solid green';
    return true;
  }
};

</script>