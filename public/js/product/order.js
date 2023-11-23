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
const cart_id = document.querySelectorAll('.cart_id');

function numberFormat(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// Tăng 
for (let i = 0; i < tang.length; i++) {
    tang[i].addEventListener('click', (e) => {
        quantity[i].value ++;
        if(quantity[i].value > parseInt(priceProduct[i].textContent)) {
            quantity[i].value = parseInt(priceProduct[i].textContent)
        }

        console.log(quantity[i].value);
        totalPrice[i].textContent = numberFormat(parseInt(quantity[i].value) * parseInt(price_real[i].textContent.split(',').join('')))+ ' đ'
    })
   
    
}

// giảm 
for (let i = 0; i < giam.length; i++) {
    giam[i].addEventListener('click', (e) => {
        quantity[i].value --;
       
        const id = cart_id[i].value;
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
                    totalPrice[i].textContent = numberFormat(parseInt(quantity[i].value) * parseInt(price_real[i].textContent.split(',').join('')))+ ' đ'
                }
            });
            
        }
        totalPrice[i].textContent = numberFormat(parseInt(quantity[i].value) * parseInt(price_real[i].textContent.split(',').join(''))) + ' đ'
        

    })
    
}


for (let i = 0; i < totalPrice.length; i++) {
    totalPrice[i].textContent = numberFormat(parseInt(quantity[i].value) * parseInt(price_real[i].textContent.split(',').join('')))+ ' đ'
    
}

// color
const color = document.querySelectorAll('.color_item');
const color_type = document.querySelectorAll('.color_type');

for (let i = 0; i < color.length; i++) {
    switch (color[i].textContent) {
        case 'blue':
            color_type[i].style.color='blue'
            break;
        case 'red':
            color_type[i].style.color='red'
            break;
        case 'yellow':
            color_type[i].style.color='yellow'
            break;
        case 'pink':
            color_type[i].style.color='pink'
            break;
        case 'black':
            color_type[i].style.color='black'
            break;
        case 'white':
            color_type[i].style.color='White'
            break;
        case 'green':
            color_type[i].style.color='green'
            break;
        case 'orange':
            color_type[i].style.color='orange'
            break;
    }
    
    
}

// xóa 
const btnDelete = document.querySelectorAll('.button');
for (let i = 0; i < btnDelete.length; i++) {
    btnDelete[i].addEventListener('click', (e) => {
        const id1 = cart_id[i].value;
        Swal.fire({
            icon: 'error',
            title: 'Bạn Muốn Xóa Sản Phẩm Này Khỏi Giỏ Hàng ?',
            showCancelButton: true,
            confirmButtonText: 'Xóa',
            cancelButtonText: 'Thoát',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `?act=cart&&delete=${id1}`;
            }
        });
    })
    
}


