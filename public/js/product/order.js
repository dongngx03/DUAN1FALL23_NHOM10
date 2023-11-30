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
                window.location.href = `?act=order&&delete=${id1}`;
            }
        });
    })
    
}

// xử lý xóa trong giỏ 


// const chose_pv = document.querySelectorAll('.chose_pv');
// const product_quantity = document.querySelectorAll('.input');
// const arr = [];
// for (let i = 0; i < chose_pv.length; i++) {
//     chose_pv[i].addEventListener('change', () => {
//         const product_id = Array.from(document.querySelectorAll('input[type=checkbox][name=dummy]:checked')).map(checkbox => checkbox.value);
//         console.log(product_id);
//         const qunatity = Array.from(product_quantity[i].value).map(value => value);
        
//     })
    
// }
// input check


// const chose_pv = document.querySelectorAll('.chose_pv');
// // số lượng tương ứng với chúng 
// const product_quantity = document.querySelectorAll('.input');
// // giá tương ứng với chúng 
// const product_price = document.querySelectorAll('.price_real');
// const arr = [];
// const price_sum = document.getElementById('price_sum');

// for (let i = 0; i < chose_pv.length; i++) {
//     chose_pv[i].addEventListener('change', () => {
//         // mảng chứa các đơn hàng 
//         const product_id = Array.from(document.querySelectorAll('input[type=checkbox][name=dummy]:checked')).map(checkbox => checkbox.value);
//         const quantities = [];
//         const prices = [];
//         const totalPriceNew = [];

//         for (let j = 0; j < product_quantity.length; j++) {
//             if (chose_pv[j].checked) {
//                 // mảng chứ số lượng tương ứng với sản phẩm 
//                 quantities.push(product_quantity[j].value);
//                 // mảng chứa giá tiền tương ứng với sản phẩm 
//                 prices.push(product_price[j].textContent.replace(/,/g, ""));
//                 // tổng tiền pahir trả  (gán nó vào 1 mảng )
//                 totalPriceNew.push(parseInt(totalPrice[j].textContent.replace(/,/g,"")));
//             }
//         }

//         const priceSumAll = numberFormat(sumAll(totalPriceNew));
//         // gán tổng tiền tất cả món hàng đã đặt vào phần tổng tiền bên dưới 
//         price_sum.textContent = numberFormat(sumAll(totalPriceNew)) + ' Đ';

        

//                 // khi bấm vao thanh toán 
//         const ThanhToan = document.querySelector('.thanhtoan');
//         ThanhToan.addEventListener('click', async (e) => {
//             e.preventDefault();
//             //console.log(product_id);
//             // console.log(quantities);
//             // console.log(prices);
//             // console.log(totalPriceNew);  

//             const data = {
//                 product_id : product_id,
//                 quantities : quantities,
//                 prices : prices,
//                 priceSumAll : priceSumAll
//             }
//             console.log(data);
            
//         })  


//     });
// }


const chose_pv = document.querySelectorAll('.chose_pv');// input check
const product_quantity = document.querySelectorAll('.input');// số lượng 
const product_price = document.querySelectorAll('.price_real');// giá 
const product_name = document.querySelectorAll('.p_name');
const product_img = document.querySelectorAll('.p_img');
const product_size = document.querySelectorAll('.p_size');
const product_color = document.querySelectorAll('.p_color');
const productVariant_id = document.querySelectorAll('.pv_id')
let p_name = [];
let p_img = [];
let p_size = [];
let p_color = [];
let pv_id = [];
let product_id = [];
let quantities = [];
let prices = [];
let totalPriceNew = [];
const price_sum = document.getElementById('price_sum');

for (let i = 0; i < chose_pv.length; i++) {
    chose_pv[i].addEventListener('change', () => {
        product_id = Array.from(document.querySelectorAll('input[type=checkbox][name=dummy]:checked')).map(checkbox => checkbox.value);
        console.log(product_id);
        quantities = [];
        prices = [];
        totalPriceNew = [];
        p_name = [];
        p_img = [];
        p_size = [];
        p_color = [];
        pv_id = [];

        for (let j = 0; j < product_quantity.length; j++) {
            if (chose_pv[j].checked) {
                quantities.push(product_quantity[j].value);// số lượng 
                prices.push(product_price[j].textContent.replace(/,/g, ""));// giắ tưng loại của sản phẩm 
                totalPriceNew.push(parseInt(totalPrice[j].textContent.replace(/,/g,""))); // giá tổng thể sau khi nhân với số lượng của từng sản phẩm 
                p_name.push(product_name[j].value); // tên sp 
                p_img.push(product_img[j].value); // ảnh 
                p_size.push(product_size[j].value);// size
                p_color.push(product_color[j].value);// màu 
                pv_id.push(productVariant_id[j].value) // id sản phẩm biến thể 
            }
        }
        console.log(quantities);
        console.log(prices);
        console.log(totalPriceNew);
        console.log(p_name);

        price_sum.textContent = numberFormat(sumAll(totalPriceNew)) + ' Đ'; // hiển thị ta tổng tiền ở phần tổng tiền 
    });
}

const ThanhToan = document.querySelector('.thanhtoan');
ThanhToan.addEventListener('click', async (e) => {
    e.preventDefault();

    const priceSumAll = parseInt(sumAll(totalPriceNew));
    if(priceSumAll == 0) {
        Swal.fire({
            icon: 'warning',
            title: 'Vui Lòng Chọn Ít Nhất Một Sản Phẩm Để Tiếp Tục',
            showCancelButton: true,
        })

    }else{
        const data = {
            product_id: product_id,
            quantities: quantities,
            prices: prices,
            priceSumAll: priceSumAll,
            totalPriceNew: totalPriceNew,
            p_name:p_name,
            p_img:p_img,
            p_color:p_color,
            p_size:p_size,
            pv_id:pv_id

        };
        console.log(data);

        // thực hiện gửi yêu cầu 
        try {
            const url = 'controllers/product/api/addOrder_totals.php';

            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })

            if (response.ok) {
                // Xử lý khi gửi thành công
                console.log('Dữ liệu đã được gửi thành công!');
            } else {
                // Xử lý khi gửi không thành công
                console.error('Có lỗi xảy ra khi gửi dữ liệu.');
            }

            const rpdata = await response.json();
            if(rpdata == 1) {
                Swal.fire({
                    icon: 'success',
                    title: 'Thành Công ! Vui Lòng thanh toán bước cuối ',
                    showCancelButton: true,
                    confirmButtonText: 'Tiếp Theo',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // dữ liệu cần chuyển 
                        const jsonData = JSON.stringify(data);
                        // tạo url 
                        const url = `?act=checkout&&data=${encodeURIComponent(jsonData)}`;
                        window.location.href = url;
                    }
                });
            }
        } catch (error) {
            console.log(error);
        }
    }

    
});


// viết 1 hàm tính tổng tất cả các giá trị bên trong mảng 
function sumAll (arr) {
    let sumArr = 0;
    for (let i = 0; i < arr.length; i++) {
        sumArr += arr[i]
    }
    return sumArr;
}


 















