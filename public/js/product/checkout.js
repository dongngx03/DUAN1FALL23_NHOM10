const checkout = document.querySelector('#checkout')
checkout.addEventListener('click', (e) => {
    e.preventDefault();
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
})
