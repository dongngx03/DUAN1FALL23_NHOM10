 <!-- navbar top -->
 <div class="h-nav2 shadow-sm p-3  bg-body rounded">
            <ul id="nav_item1">
                <li><a href="?act=product1">Giày</a></li>
                <li><a href="">Giép</a></li>
                <li><a href="">Lịch Sử Đơn Hàng </a></li>
               
            </ul>
            <div class="h-box-right">
                <div class="h-search">
                    <button class="h-btn-search"><i class="fa-brands fa-sistrix"></i>
                    <input id="inputseah" class="h-ip-search" type="search" placeholder="search"></button>
                </div>
                <!-- thẻ user phân quyền  -->
                <a 
                href="index.php?act=product&&checkrole=<?php echo(isset($_SESSION['role_id'])?$_SESSION['role_id']: 4) ?>" class="h-btn-user">
                <i class="ti-user"></i>
                </a>
                <!-- thẻ user phân quyền  -->
                <a href="?act=product&&checkcart=<?php echo(isset($_SESSION['user_id'])?$_SESSION['user_id']: 0) ?>" class="h-btn-user"><i class="ti-shopping-cart"></i></a>
                <!-- yêu thích  -->
                <a href="?act=product&&checkfavorite=<?php echo(isset($_SESSION['user_id'])?$_SESSION['user_id']: 0) ?>" class="h-btn-user"><i class="fa-regular fa-heart text-dark"></i></a>
            </div>

            <div class="seah__over shadow-sm ">
                <div class="row p-5">
                  <div class="col-md-2">
                      <div class="d-flex flex-column gap-1">
                          <span class="text-secondary h4">Gợi Ý Sản CHo Bạn</span>
                          <a href="#">nike 1</a>
                          <a href="#">nike 1</a>
                          <a href="#">nike 1</a>
                          <a href="#">nike 1</a>
                         
                      </div>
                  </div>
                  <!--  -->
                  <div class="col-md-10 mt-5">
                    <div class="row">
                      <!--  -->
                      <div class="col-md-2 d-flex justify-content-center">
                          <a href="#" class="d-flex flex-column text-decoration-none text-dark">
                            <img style="width:100%; height:auto" src="public/imgs/product/product1.png" alt="">
                            <span class="fs-5 fw-bold text-secondary">nike air force 1</span>
                            <span>Men/women's shose</span>
                            <span class="fs-6 text-secondary" >1.000.000 đ</span>
                          </a>
                      </div>
                      <!--  -->
          
                    </div>
                  </div>
                 
                </div>
            </div>
</div>

<script>
     const inputseah = document.querySelector('#inputseah');
     const seah__over = document.querySelector('.seah__over')


     // div cần ẩn 
     const nav_item1 = document.getElementById('nav_item1');
     const h_box_right = document.querySelector('.h-box-right');
     const width1 = inputseah.offsetWidth;
   


  inputseah.addEventListener('click', () => {
    inputseah.style.width = `${width1 * 3}px`;
    inputseah.style.transition = '0.5s all';
    seah__over.classList.add('seah__over1');
    nav_item1.style.opacity= '0';
    nav_item1.style.transform = 'translateX(-5rem)';
    nav_item1.style.transition = '0.5s all';
    h_box_right.style.transform = 'translateX(-60%)'
    h_box_right.style.transition = '0.5s all';
    
   
  })
  inputseah.addEventListener('blur', () => {
    inputseah.style.width = `${width1}px`;
    inputseah.style.transition = '0.5s all';
    seah__over.classList.remove('seah__over1');
    seah__over.classList.add('seah__over');
    nav_item1.style.opacity='1'
    nav_item1.style.transform = 'translateX(0)';
    nav_item1.style.transition = '0.5s all';
    h_box_right.style.transform = 'translateX(0)'
    h_box_right.style.transition = '0.5s all';
  })

</script>
