const productlist = document.getElementById('product-list');
const navlist = document.getElementById('nav-left');
const product = document.querySelector(".p-product");
const fullbtn = document.getElementById("full-btn");

// hàm ấn vào để gạt bỏ thanh lọc và phóng to gian hàng 
function fullscreen() {
   if(fullbtn.innerHTML !== "X") {
        navlist.style.display="none";
        productlist.classList.remove("col-md-9");
        productlist.classList.remove("overflow-auto");
        productlist.classList.add("col-md-12");
        product.classList.add("fullscreen");
        fullbtn.innerHTML = "X";
   }else{
        navlist.style.display="block";
        productlist.classList.add("col-md-9");
        productlist.classList.add("overflow-auto");
        productlist.classList.remove("col-md-12");
        product.classList.remove("fullscreen");
        fullbtn.innerHTML = '<span>Full <i class="fa-solid fa-sliders"></i> </span>';
   }
}

// gắn envent
fullbtn.addEventListener('click', () => {
    fullscreen();
})