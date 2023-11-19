


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

            if(data.length>0) {
                variantList.innerHTML = `
                    ${data.map((dataItem,index) => {
                        return `
                            <tr>
                                <td>${index++}</td>
                                <td>${dataItem.product_name}</td>
                                <td>${dataItem.color_name}</td>
                                <td>${dataItem.size_name}</td>
                                <td>${dataItem.quantity} chiếc</td>
                                <td>
                                    <a class="btn btn-danger" href="">Xóa</a>
                                    <a class="btn btn-primary" href="">Thêm số lượng</a>
                                </td>
                            <tr>
                        `
                    }).join("")}
                `
                
            }
        } catch (error) {
            console.error('Error:', error);
        }

    })
    
}