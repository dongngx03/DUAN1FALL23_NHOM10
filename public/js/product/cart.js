// // xác nhận trước khi xóa 
// const deleteCart = document.querySelectorAll('.c-ti-trash');
// const cart_id = document.querySelectorAll('.cart_id');




// for (let i = 0; i < deleteCart.length; i++) {
//     deleteCart[i].addEventListener('click', (e) => {
//         const id = cart_id[i].value;
//         e.preventDefault();
//         Swal.fire({
//             icon: 'question',
//             title: 'Bạn muốn xóa nó ư ?',
//             showCancelButton: true,
//             confirmButtonText: 'Xóa',
//             cancelButtonText: 'Thoát',
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 window.location.href = `?act=cart&&delete=${id}`;
//             }
//         });
//     })
    
// }



// xử lý tằng giảm số lượng 
// lấy giá của sản phẩm 
// số lượng 
const priceProduct = document.querySelectorAll('.price_item')
const quantity = document.querySelectorAll('.input');
const tang = document.querySelectorAll('.tang');
const giam = document.querySelectorAll('.giam');
const totalPrice = document.querySelectorAll('.total_price')
const price_real = document.querySelectorAll('.price_real');



// Tăng 
for (let i = 0; i < tang.length; i++) {
    tang[i].addEventListener('click', (e) => {
        quantity[i].value ++;
        if(quantity[i].value > parseInt(priceProduct[i].textContent)) {
            quantity[i].value = parseInt(priceProduct[i].textContent)
        }

        console.log(quantity[i].value);
        totalPrice[i].textContent = parseInt(quantity[i].value) * parseInt(price_real[i].textContent)+ ' đ'
    })
   
    
}

// giảm 
for (let i = 0; i < giam.length; i++) {
    giam[i].addEventListener('click', (e) => {
        quantity[i].value --;
        if(quantity[i].value < 1) {
            Swal.fire({
                icon: 'error',
                title: 'Bạn Muốn Xóa Sản Phẩm Này Khỏi Giỏ Hàng ?',
                showCancelButton: true,
                confirmButtonText: 'Xóa',
                cancelButtonText: 'Thoát',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `?act=cart&&delete=${id}`;
                }else{
                    quantity[i].value = 1
                    totalPrice[i].textContent = parseInt(quantity[i].value) * parseInt(price_real[i].textContent)+ ' đ'
                }
            });
            
        }
        totalPrice[i].textContent = parseInt(quantity[i].value) * parseInt(price_real[i].textContent) + ' đ'
        

    })
    
}

for (let i = 0; i < totalPrice.length; i++) {
    totalPrice[i].textContent = parseInt(quantity[i].value) * parseInt(price_real[i].textContent)+ ' đ'
    
}



