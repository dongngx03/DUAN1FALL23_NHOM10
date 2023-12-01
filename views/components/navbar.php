 <!-- navbar top -->
 <div class="h-nav2 shadow-sm p-3  bg-body rounded">
            <ul id="nav_item1">
                <li><a href="?act=product1">Giày</a></li>
                <li><a href="">Giép</a></li>
                <li><a href="?act=orderhistory">Đơn hàng</a></li>
               
            </ul>
            <div class="h-box-right">
                <div class="h-search">
                    <button class="h-btn-search"><i class="fa-brands fa-sistrix"></i>
                    <input id="inputseah" class="h-ip-search" type="search" placeholder="Tìm Kiếm..."></button>
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
                <div class="row p-4">
                  <div class="col-md-2">
                      <div class="d-flex flex-column gap-1">
                          <span class="text-secondary h5">Có Thể Bạn Thích</span>
                          <li><a class="text-decoration-inline text-dark" href="?act=product&&detail=14">Air Jordan 1 Zoom CMFT 2</a></li>
                          <li><a class="text-decoration-inline text-dark" href="?act=product&&detail=16">Nike Air Force 1</a></li>
                          <li><a class="text-decoration-inline text-dark" href="?act=product&&detail=17">Nike Air VaporMax 2023 Flyknit</a></li>
                          <li><a class="text-decoration-inline text-dark" href="?act=product&&detail=18">Jumpman Hai Trey</a></li>
                         
                      </div>
                  </div>
                  <!--  -->
                  <div class="col-md-10 mt-5">
                    <div id="list" class="row">
                      <!--  -->
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

  const list = document.querySelector('#list')


  // chức năng tìm kiếm 
  inputseah.addEventListener('input', async () => {
    const valueSearh = inputseah.value;
    // gửi dw liệu 
    console.log(valueSearh);
    try {
      const url = `controllers/product/api/searhProduct.php?value=${valueSearh}`;
      const response = await fetch(url);
      if (!response.ok) {
        throw new Error('Request failed');
      }

      const data = await response.json();
      console.log(data);

      list.innerHTML = "";
      if(data !== 'khong tim thay') {
        // tạo thẻ 
        data.map(dataItem => {
          const newItem = document.createElement('div')
          newItem.classList.add('col-md-2')
          newItem.classList.add('d-flex')
          newItem.classList.add('justify-content-center')

          newItem.innerHTML = `
                        <a href="?act=product&&detail=${dataItem.product_id}" class="d-flex flex-column text-decoration-none text-dark">
                            <img class="rounded" style="width:100%; height:auto" src="public/imgs/product/${dataItem.img_avatar}" alt="">
                            <span class="fs-6 fw-bold text-secondary">${dataItem.product_name}</span>
                            <span>Men/women's shose</span>
                            <span class="fs-6 text-secondary" >${dataItem.product_price} đ</span>
                        </a>
          `

          list.appendChild(newItem);
          list.style.transition = '2s all';
        })
        

      }else{
        list.innerHTML = `
                        <div class="row shadow-sm rounded px-3 mb-2 mb-3 bg-white">
                            <div class="col-md-12 d-flex justify-content-center align-items-center p-5">
                                <div class="mess p-5 d-flex flex-column gap-3 align-items-center">
                                    <img style="width: 120px;height:auto;" src="public/imgs/user/checkout.png" alt="">
                                    <span class="text-secondary">Không Tìm Thấy Sản Phẩm Nào Như Vậy</span>
                                </div>
                            </div>
                        </div>
        `;
      }
    } catch (error) {
        console.log(error);
    }
  })

</script>
