<!-- code -->
<?php 
    include'./controllers/login/dangnhapController.php';
?>
<style>
    <?php include_once'public/css/login/dangnhap.css' ?>
</style>

<div class="container-fluid">
        <div class="row">
            <div class="l-navtop bg-light">
                <a href="#" class="text-decoration-none text-dark">Shop /</a>
                <span>Đăng nhập</span>
            </div>
        </div>

        <div id="login-form" class="row mt-3">
            <div class="col-md-12">
                <div class="main">
                    <div class="login-banner py-5">
                        <img src="public/imgs/login/banner1.png" alt="">
                    </div>
                    <div class="login-main py-5">
                        <form id="form" class="login-main-form" action="" method="post">
                            <div class="title px-4 pt-4">
                                <span class="h4">Đăng nhập</span>
                            </div>
                            
                            <div class="form-ip px-4">
                                <input id="email" type="email" placeholder="Email" name="user_email" value="<?php echo(isset($_POST['user_email'])? $_POST['user_email']:'') ?>">
                                <span class="error">
                                    <?php 
                                       echo(!empty($err['user_email'])? $err['user_email']:'');
                                       echo(!empty($err['checkEmail'])? $err['checkEmail']:'');
                                       
                                    ?>
                                </span>
                            </div>
                            <div class="form-ip px-4">
                                <input id="pw" type="password" placeholder="Mật khẩu" name="user_pw" value="<?php echo(isset($_POST['user_pw'])? $_POST['user_pw']:'') ?>">
                                <span class="error"> 
                                    <?php 
                                         echo(!empty($err['user_pw'])? $err['user_pw']:'');
                                         echo(!empty($err['checkPw'])? $err['checkPw']:'');

                                    ?>
                                </span>
                            </div>

                            <div class="form-ip px-4">
                                <button class="btn btn-dark" name="login" type="submit">Đăng nhập </button>
                            </div>
                            <div class="form-ip px-4">
                                <a class="text-decoration-none" href="?act=quenmk"> Bạn quên mật khẩu ?</a>
                            </div>
                            <div class="mid-item px-4 d-flex justify-content-center">
                                <p>----------  H</p>
                                <p>oặ</p> 
                                <p>c  ----------</p>
                            </div>

                            <div class="last-item px-4 d-flex justify-content-center">
                                <p>Bạn chưa có tài khoản?</p>
                                <a class="" href="?act=dangky">Đăng Ký</a>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    