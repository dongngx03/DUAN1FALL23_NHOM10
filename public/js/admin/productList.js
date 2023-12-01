const deleteP = document.querySelectorAll('.deleteP'); // nút xóa 
const product_id = document.querySelectorAll('.product_id'); // input chứa các giá trị của product_id

// xử lý xác nhận 
for (let i = 0; i < deleteP.length; i++) {
    deleteP[i].addEventListener('click', (e) => {
        e.preventDefault();
        
        // lấy product_id 
        const p_id = product_id[i].value;
        // tạo gửi thông báo cho sever 
        Swal.fire({
            icon: 'warning',
            title: 'Bạn Muốn Xóa sản phẩm này ?',
            showCancelButton: true,
            confirmButtonText: 'Ok',
        }).then((result) => {
            if (result.isConfirmed) {
                const url = `?admin=productlist&&delete=${p_id}`
                window.location.href = url;
            }
        });

    })
    
}
