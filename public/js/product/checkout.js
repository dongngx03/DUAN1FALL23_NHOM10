const checkout = document.querySelector('#checkout');
const check_address = document.querySelector('#check_address').value;

checkout.addEventListener('click', (e) => {
    e.preventDefault();
    if(check_address !== '') {
        Swal.fire({
            icon: 'question',
            title: 'Thanh Toán?',
            showCancelButton: true,
            confirmButtonText: 'Ok',
        }).then((result) => {
            if (result.isConfirmed) {
                const url = '?act=checkout&&buy'
                window.location.href = url;
            }
        });
    }else{
        Swal.fire({
            icon: 'warning',
            title: 'Bạn Phải Thêm Thông Tin Địa Chỉ Để Mua Hàng',
            showCancelButton: true,
            confirmButtonText: 'Ok',
        }).then((result) => {
            if (result.isConfirmed) {
                const url = '?act=user'
                window.location.href = url;
            }
        });
    }
})
