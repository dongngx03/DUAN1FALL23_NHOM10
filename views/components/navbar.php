 <!-- navbar top -->
 <div class="h-nav2 shadow-sm p-3  bg-body rounded">
            <ul>
                <li><a href="?act=product1">Nike</a></li>
                <li><a href="">addproduct</a></li>
                <li><a href="">Link</a></li>
                <li><a href="">Dropdown</a></li>
                <li><a href="">Disabled</a></li>
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
            </div>
</div>

<script>
     const inputseah = document.querySelector('#inputseah');
const width1 = inputseah.offsetWidth;


  inputseah.addEventListener('click', () => {
    inputseah.style.width = `${width1 * 2.5}px`;
    inputseah.style.transition = '0.5s all';
  })
  inputseah.addEventListener('blur', () => {
    inputseah.style.width = `${width1}px`;
    inputseah.style.transition = '0.5s all';
  })

</script>
