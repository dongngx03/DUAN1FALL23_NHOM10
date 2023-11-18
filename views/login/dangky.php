<!-- code -->
<?php 
    include'./controllers/login/dangkyController.php';
?>
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
                    <!-- fomr -->
                    <form class="login-main-form" action="" method="post">
                        <div class="title px-4 pt-4">
                            <span class="h4">Đăng ký</span>
                        </div>
                        <div class="form-ip px-4">
                            <input type="text" placeholder="Tên của bạn" name="user_name" id="user" value="<?php echo(isset($_POST['user_name'])? $_POST['user_name'] : '') ?>">
                            <span id="errUser" style="color: red;"><?php echo(isset($err['user_name'])? $err['user_name']: '') ?></span>
                        </div>
                        <div class="form-ip px-4">
                            <input type="email" placeholder="Email" name="user_email" id="email" value="<?php echo(isset($_POST['user_email'])? $_POST['user_email'] : '') ?>">
                            <span id="errUser" style="color: red;">
                                <?php
                                echo(isset($err['user_email'])? $err['user_email']: '');
                                echo(isset($err['trungemail'])? $err['trungemail']: '');
                                
                                ?>
                            </span>
                        </div>
                        <div class="form-ip px-4">
                            <input type="password" placeholder="Mật khẩu" name="user_pw" id="password" value="<?php echo(isset($_POST['user_pw'])? $_POST['user_pw'] : '') ?>">
                            <span id="errUser" style="color: red;"><?php echo(isset($err['user_pw'])? $err['user_pw']: '') ?></span>
                        </div>
                        <div class="form-ip px-4">
                            <input type="password" placeholder="Nhập lại mật khẩu" name="user_pw1"
                                id="confirmPassword">
                                <span id="errUser" style="color: red;">
                                <?php
                                 echo(isset($err['user_pw1'])? $err['user_pw1']: '');
                                 echo(isset($err['trungpw'])? $err['trungpw']: '');

                                 ?>
                                </span>
                        </div>

                        <div class="form-ip px-4">
                            <button class="btn btn-dark" name="addUser">Đăng ký </button>
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
