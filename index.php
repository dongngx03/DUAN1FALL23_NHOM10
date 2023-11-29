<?php
// session 
session_start();
ob_start();

// phần web 
include_once './views/components/header.php';

// phần admin 
if(isset($_GET['admin']) && $_GET['admin']!= null && isset($_SESSION['role_id']) && $_SESSION['role_id']==2) {
    $admin = $_GET['admin'];
    switch ($admin) {
        // sản phẩm 
        case 'addproduct':
            include'./views/admin/product/addproduct.php';
            break;
        case 'productlist':
            include'./views/admin/product/productList.php';
            break;
        case 'productdetail':
            include'./views/admin/product/productDetail.php';
            break;
        case 'seahproduct':
            include'./views/admin/product/seahproduct.php';
            break;
        case 'addproductvariant':
            include'./views/admin/product/addproductvariant.php';
            break;
        /// mua hàng 
        case 'orderwaitting':
            include'./views/admin/order/orderWaitting.php';
            break;
        // chi tiết 1 đơn hàng 
        case 'orderdetail':
            include'./views/admin/order/orderDetail.php';
            break;
        case 'orderdanggiao':
            include'./views/admin/order/orderDanggiao.php';
            break;
        case 'orderthanhcong':
            include'./views/admin/order/orderThanhcong.php';
            break;
        case 'orderhuy':
            include'./views/admin/order/orderHuy.php';
            break;
        default:
            include'./views/404/404.php';
            break;
    }
    die();
}
// phần app bình thường 
if (isset($_GET['act']) && $_GET['act']!= null) {
    $act = $_GET['act'];

    switch ($act) {
        case 'home':
            include_once './views/home/home.php';
            break;
        case 'dangky':
            include_once './views/login/dangky.php';
            break;
        case 'dangnhap':
            include_once './views/login/dangnhap.php';
            break;
        case 'quenmk':
            include_once './views/login/quenmk.php';
            break;
        case 'user':
            include_once './views/user/user.php';
            break;
        case 'product':
            include_once './views/product/product.php';
            break;
        case 'order':
            include_once './views/product/order.php';
            break;
        case 'cart':
            include_once './views/product/cart.php';
            break;
        case 'productdetail':
            include_once './views/product/productdetail.php';
            break;
        case 'admin':
            include_once './views/user/admin.php';
            break;
        case 'product1':
            include_once './views/product/product1.php';
            break;
        case 'order':
            include_once './views/product/order.php';
            break;
        case 'checkout':
            include_once './views/product/checkout.php';
            break;
        case 'orderhistory':
            include_once './views/product/orderHistory.php';
            break;

        // trường hợp không hợp lệ
        default:
            include'./views/404/404.php';
            break;

    }
} else {
    include_once './views/home/home.php';
}

include_once './views/components/footer.php';

ob_flush();
?>