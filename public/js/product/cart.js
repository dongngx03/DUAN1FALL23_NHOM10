// xác nhận trước khi xóa 
const deleteCart = document.querySelectorAll('.c-ti-trash');
const cart_id = document.querySelectorAll('.cart_id');




for (let i = 0; i < deleteCart.length; i++) {
    deleteCart[i].addEventListener('click', (e) => {
        const id = cart_id[i].value;
        e.preventDefault();
        Swal.fire({
            icon: 'question',
            title: 'Bạn muốn xóa nó ư ?',
            showCancelButton: true,
            confirmButtonText: 'Xóa',
            cancelButtonText: 'Thoát',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `?act=cart&&delete=${id}`;
            }
        });
    })
    
}

