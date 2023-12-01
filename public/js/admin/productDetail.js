


// xử lý gọi api lên để lấy sanrphaamr theo màu 
const colorBtn = document.querySelectorAll('.variant_color');
// id cảu sản phẩm 
const productId = document.getElementById('product_id').value;
// id màu 
const color_id = document.querySelectorAll('.color_id');
console.log(color_id);

// xử lý 
for (let i = 0; i < colorBtn.length; i++) {
    colorBtn[i].addEventListener('click', async (e) => {
        
        e.preventDefault();
        const colorID = color_id[i].value;
        const url = `controllers/admin/api/getProductForColor.php?getproductforcolor=${colorID}&&product_id=${productId}`;
        
        // gửi req lên sever 
        try {
            const response = await fetch(url);

            // lấy dữ liệu về 
            const data = await response.json();
            console.log(data);

            const variantList = document.getElementById('variant_list');
            variantList.innerHTML = "";

            if(data.length>0) {
                data.map((dataItem, index) => {
                    const newItem = document.createElement('tr');
                    newItem.innerHTML = `
                        <td>${index++}</td>
                        <td>${dataItem.product_name}</td>
                        <td>${dataItem.color_name}</td>
                        <td>${dataItem.size_name}</td>
                        <td>${dataItem.quantity} chiếc</td>
                        <td class="">
                            <div class="d-flex flex-column">
                                <a class=" text-danger delete" href="">Xóa</a>
                                <a class=" update" href="">Thêm số lượng</a>
                                <input type="hidden" class="pv_id" value="${dataItem.pv_id}">
                                <input type="number" class="quantity">
                            <div/>
                        </td>
                    `
                    
                    const deleteButton = newItem.querySelector('.delete');
                    const updateButton = newItem.querySelector('.update');
                    const pvIdInput = newItem.querySelector('.pv_id');
                    const quantityInput = newItem.querySelector('.quantity');

                    deleteButton.addEventListener('click', (e) => {
                        e.preventDefault();
                        Swal.fire({
                            icon: 'warning',
                            title: `Bạn muốn  xóa Sản Phẩm Biến Thể này?`,
                            showCancelButton: true,
                            confirmButtonText: 'Ok',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                const url = `?admin=productdetail&&product_id=${productId}&&pv_id=${pvIdInput.value}`;
                                window.location.href = url;
                            }
                        });
                    });
                    updateButton.addEventListener('click', (e) => {
                        const quantity = quantityInput.value;
                        e.preventDefault();
                        Swal.fire({
                            icon: 'warning',
                            title: `Bạn muốn thêm số lượng là: ${quantity} cho sản phẩm này?`,
                            showCancelButton: true,
                            confirmButtonText: 'Ok',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                const url = `?admin=productdetail&&product_id=${productId}&&pv_id=${pvIdInput.value}&&soluong=${quantity}`;
                                window.location.href = url;
                            }
                        });
                    });

                    variantList.appendChild(newItem);
                   
                })
                


                
            }
        } catch (error) {
            console.error('Error:', error);
        }

    })

    const color = document.querySelectorAll('.color');
    color.forEach(function(item) {
        const spanText = item.textContent;
        switch (spanText) {
            case 'blue':
                item.style.backgroundColor='blue'
                break;
            case 'red':
                item.style.backgroundColor='red'
                break;
            case 'yellow':
                item.style.backgroundColor='yellow'
                item.style.color='black'
                break;
            case 'pink':
                item.style.backgroundColor='pink'
                break;
            case 'black':
                item.style.backgroundColor='black'
                break;
            case 'white':
                item.style.backgroundColor='White'
                item.style.color='black'
                break;
            case 'green':
                item.style.backgroundColor='green'
                break;
            case 'orange':
                item.style.backgroundColor='orange'
                break;
           
        }

    });
    
}

const deletePv = document.querySelectorAll('.delete');
console.log(deletePv);


for (let i = 0; i < deletePv.length; i++) {
    deletePv[i].addEventListener('click',(e) => {
        e.preventDefault();
    })
}