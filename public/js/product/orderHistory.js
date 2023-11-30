const navItems = document.querySelectorAll('.nav__order-item');
const handle = document.querySelectorAll('.handle');
const box2 = document.querySelector('.box2')


for (let i = 0; i < navItems.length; i++) {
    navItems[i].addEventListener('click', async (e) => {
        e.preventDefault();
        const status = handle[i].value;
        // gửi dữ liệu lên sever 
        try {
            const url = `controllers/product/api/readOrder.php?handle_id=${status}`;

            const response = await fetch(url);

            if (!response.ok) {
                throw new Error('Request failed');
            }

            const data = await response.json();
            console.log(data);
            box2.innerHTML="";
            if(data === 'empty') {
                box2.innerHTML = `
                <div class="row shadow-sm rounded px-3 py-5 mb-3 bg-white">
                    <div class="col-md-12 d-flex justify-content-center align-items-center p-5">
                        <div class="mess p-5 d-flex flex-column gap-3 align-items-center">
                            <img style="width: 120px;height:auto;" src="public/imgs/user/checkout.png" alt="">
                            <span class="text-secondary">Chưa có đơn nào</span>
                        </div>
                    </div>
                </div>
                `
            }else{
                data.map(dataItem => {
                    const newItem = document.createElement('div');
                    newItem.classList.add('row');
                    newItem.classList.add('py-5');
                    newItem.classList.add('mt-2');
                    newItem.classList.add('bg-light');
                    newItem.classList.add('border-bottom');
                    newItem.innerHTML = `
                        <div class="col-md-3 d-flex justify-content-center">
                            <span class="text-dark fw-bold">Mã Đơn: ${dataItem.ot_id}</span>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center">
                            <span class="text-dark">Lúc: ${dataItem.ot_date}</span>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center">
                            <span class="text-danger">Tổng Giá: ${numberFormat(dataItem.ot_amout)} đ</span>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center">
                            <a href="?act=orderhistorydetail&&ot_id=${dataItem.ot_id}" class="btn btn-outline-secondary">Xem Chi Tiết</a>
                            
                        </div>
                        
                    `
                    box2.appendChild(newItem);
                })
            }
        } catch (error) {
            console.log(error);
        }
    })
    
}
function numberFormat(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}



