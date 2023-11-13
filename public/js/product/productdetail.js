 // Lấy tất cả các thẻ a có class là 'color_item'
 var colorItems = document.querySelectorAll('.color_item');

 // Duyệt qua từng thẻ a và lấy giá trị của thẻ span bên trong
 colorItems.forEach(function(item) {
     var spanText = item.querySelector('.color_item_text').textContent;
     var icon = item.querySelector('.icon')

     switch (spanText) {
         case 'Blue':
             icon.style.color='blue'
             break;
         case 'Red':
             icon.style.color='red'
             break;
         case 'Yellow':
             icon.style.color='yellow'
             break;
         case 'Pink':
             icon.style.color='pink'
             break;
         case 'Black':
             icon.style.color='black'
             break;
         case 'White':
             icon.style.color='White'
             break;
         case 'Green':
             icon.style.color='green'
             break;
        
     }

     item.addEventListener('click', function() {
         // Xóa class 'clicked' khỏi tất cả các phần tử
         colorItems.forEach(function(item) {
             item.classList.remove('clicked');
         });

         // Thêm class 'clicked' cho phần tử được click
         this.classList.add('clicked');
     });
 });

 const tang = document.getElementById('tang');
 const giam = document.getElementById('giam');
 const quantity = document.getElementById('quantity');
 const gioihan = document.getElementById('gioihan').textContent;


 quantity.addEventListener('blur', () => {
     if(quantity.value>= parseInt(gioihan)) {
         quantity.value = parseInt(gioihan);
         quantity.style.border = '1px solid red';
     }else if(quantity.value <= 0) {
         quantity.value = 1;
     }
 })
 tang.addEventListener('click', () => {
     quantity.value ++;
     if(quantity.value>= parseInt(gioihan)) {
         quantity.value = parseInt(gioihan);
         quantity.style.border = '1px solid red';
     }
 })
 giam.addEventListener('click', () => {
     quantity.value--;
     if(quantity.value <=0) {
         quantity.value = 1
     }
 })


 // banner tự nhảy :
 const parentall = document.querySelector('.d_left_box2');
 const box2 = document.querySelector('.left_box2_conatiner');
 var imgs = document.querySelectorAll('.img-banner');

 // lấy độ dài của thàng box 2 
 
 
 const width = parentall.offsetWidth; 
 const widthTong = width*imgs.length;
 console.log(widthTong);

 let index = 0;

  function next() {
    if(index < imgs.length-1) {
        index ++;
    }else{
        index = 0;
    }
    console.log(index);
    box2.style.transform = `translateX(-${width * index}px)`;
    
 }

 function prew() {
    if(index > 0 ) {
        index --;
     }else{
        index = imgs.length-1;
     }
    console.log(index);
    box2.style.transform = `translateX(-${width * index}px)`;
 }

 setInterval(next, 3000);


 const inputseah = document.querySelector('#inputseah');
const width1 = inputseah.offsetWidth;
console.log(inputseah);

  inputseah.addEventListener('click', () => {
    inputseah.style.width = `${width1 * 2.5}px`;
    inputseah.style.transition = '0.5s all';
  })
  inputseah.addEventListener('blur', () => {
    inputseah.style.width = `${width1}px`;
    inputseah.style.transition = '0.5s all';
  })

 