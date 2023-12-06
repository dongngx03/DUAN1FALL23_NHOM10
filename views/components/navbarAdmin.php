
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm rounded bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Sản phẩm  -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sản Phẩm 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="?admin=addproduct">Thêm Mới Sản Phẩm </a></li>
            <li><a class="dropdown-item" href="?admin=productlist">Quản lý sản phẩm (Giày) </a></li>
            <li><a class="dropdown-item" href="?admin=productlist">Quản lý sản phẩm (Dép) </a></li>
          </ul>
        </li>
        <!-- hết sản phẩm  -->

        <!-- Bình luận  -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Phản Hồi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="?admin=feedbacklist">Phản Hồi Chờ Duyệt</a></li>
            <li><a class="dropdown-item" href="?admin=feedbacklist1">Phản Hồi Đã Duyệt</a></li>
            <li><a class="dropdown-item" href="?admin=feedbacklist2">Phản Hồi Đã Ẩn</a></li>
          </ul>
        </li>
        <!-- hết danh sách bình luận   -->
        <!-- Bình luận  -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Đơn Hàng 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="?admin=orderwaitting"> Đang xử lý  </a></li>
            <li><a class="dropdown-item" href="?admin=orderdanggiao"> Đang Giao hàng  </a></li>
            <li><a class="dropdown-item" href="?admin=orderthanhcong"> Thành Công </a></li>
            <li><a class="dropdown-item" href="?admin=orderhuy"> Đã Hủy </a></li>
           
          </ul>
        </li>
        <!-- hết danh sách bình luận   -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Thống Kê
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="?admin=thongkefeedback"> Phản Hồi </a></li>
            <li><a class="dropdown-item" href="?admin=thongkeproduct"> Sản Phẩm </a></li>
            <li><a class="dropdown-item" href="?admin=thongkeuser"> Người Dùng </a></li>
          </ul>
        </li>
        <!-- hết thống kê   -->
       
      
      </ul>
     
    </div>
  </div>
</nav>



