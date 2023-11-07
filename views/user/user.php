
<style>
    <?php include_once'public/css/user/user.css' ?>
</style>
<div class="user">
        <div class="sidebar">
            <div class="u-profile">
                <div class="u-avt">
                    <img src="public/imgs/product/product2.png" alt="" >
                </div>
                <div class="u-name">
                    <span><strong>akalong04</strong></span>
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
                <a href="#" class="u-fuc"><i class="ti-shift-right"></i>Đăng xuất</a>
            </div>
            
        </div>
        <div class="u-prof">
            <h2 class="u-prof-user">Hồ Sơ Của Tôi</h2>
            <div class="info-user">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
            <hr>
            <form class="u-form-user" method="post">
                <div class="u-ip-info">
                    <div class="u-ip-left">
                        <div class="div">
                            <label for="">Tên đăng nhập</label>
                            <input type="text" name="user">
                            <span></span>
                        </div>
                        <div class="div">
                            <label for="">Mật khẩu</label>
                            <input type="text" name="pass">
                            <span></span>
                        </div>
                        <div class="div">
                            <label for="">Email</label>
                            <input type="text" name="email">
                            <span></span>
                        </div>
                        <div class="div">
                            <label for="">Số Điện Thoại</label>
                            <input type="text" name="sdt">
                            <span></span>
                        </div>
                        <div class="div">
                            <label for="">Ảnh</label>
                            <input type="file" name="img">
                        </div>
                    </div>
                    <div class="u-ip-right">
                        <div class="div">
                            <label for="">Xã</label>
                            <input type="text" placeholder="Nhập xã/phường">
                            <span></span>
                        </div>
                        <div class="div">
                            <label for="">Huyện</label>
                            <input type="text" placeholder="Nhập huyện/quận">
                            <span></span>
                        </div>
                        <div class="div">
                            <label for="">Tỉnh</label>
                            <input type="text" placeholder="Nhập tỉnh/thành phố">
                            <span></span>
                        </div>
                        <div class="div">
                            <label for="">Địa Chỉ</label>
                            <input type="text" placeholder="Địa trỉ chi tiết của bạn">
                            <span></span>
                        </div>
                        <div class="div">
                            <label for="">Mô tả</label>
                            <input class="describe" type="text" placeholder="Địa chỉ rõ hơn">
                            <span></span>
                        </div>
                    </div>
                </div>
                <button name="btnSubmit" type="submit">Cập Nhật</button>
                
            </form>
            <div class="mess">

            </div>
        </div>
    </div>


