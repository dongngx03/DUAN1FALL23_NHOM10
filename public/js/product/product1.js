const formCheckInput = document.querySelectorAll('.form-check-input');
console.log(formCheckInput);
// xử lý về phần ấn bào 1 btn thì các btn khác không dc checked 
// Lấy tất cả các checkbox cùng name và gắn sự kiện cho mỗi checkbox
const colorCheckboxes = document.querySelectorAll('input[type=checkbox][name=color]');
colorCheckboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
        // Nếu checkbox đang được chọn
        if (this.checked) {
            // Vô hiệu hóa tất cả các checkbox khác cùng name
            colorCheckboxes.forEach(otherCheckbox => {
                if (otherCheckbox !== this) {
                    otherCheckbox.checked = false;
                }
            });
        }
    });
});
const brandCheckboxes = document.querySelectorAll('input[type=checkbox][name=brand]');
brandCheckboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
        // Nếu checkbox đang được chọn
        if (this.checked) {
            // Vô hiệu hóa tất cả các checkbox khác cùng name
            brandCheckboxes.forEach(otherCheckbox => {
                if (otherCheckbox !== this) {
                    otherCheckbox.checked = false;
                }
            });
        }
    });
});
const priceCheckboxes = document.querySelectorAll('input[type=checkbox][name=price]');
priceCheckboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
        // Nếu checkbox đang được chọn
        if (this.checked) {
            // Vô hiệu hóa tất cả các checkbox khác cùng name
            priceCheckboxes.forEach(otherCheckbox => {
                if (otherCheckbox !== this) {
                    otherCheckbox.checked = false;
                }
            });
        }
    });
});

formCheckInput.forEach(e => {
   e.addEventListener('change', async () => {
    // giá trị của thằng brand
    const selectedColors = Array.from(document.querySelectorAll('input[type=checkbox][name=color]:checked')).map(checkbox => checkbox.value);
    const selectedBrands = Array.from(document.querySelectorAll('input[type=checkbox][name=brand]:checked')).map(checkbox => checkbox.value);
    const selectedPrices = Array.from(document.querySelectorAll('input[type=checkbox][name=price]:checked')).map(checkbox => checkbox.value);
    const color = typeof selectedColors[0] !== 'undefined' ? selectedColors[0] : "";
    const brand = typeof selectedBrands[0] !== 'undefined' ? selectedBrands[0] : "";
    const price = typeof selectedPrices[0] !== 'undefined' ? selectedPrices[0] : "";
    

    console.log(color);
    
    const url = `controllers/product/api/fillterProduct.php?brand=${brand}&&price=${price}&&color=${color}`;
    try {
        const response = await fetch(url)

        if(!response) {
            console.log('gửi thất bại');
        }
        const data = await response.json();
        console.log(data);

        const r_box = document.querySelector('#r_box');

        if(data.length > 0) {
            r_box.innerHTML = "";

            data.forEach((dataItem) => {
                const newItem = document.createElement('div')
                newItem.classList.add('item');
                newItem.innerHTML = `
                        
                        <div class="item_img">
                            <img src="public/imgs/product/${dataItem.img_avatar}" alt="">
                        </div>
                    
                        <div class="item_name">
                            <strong><span>${dataItem.product_name}</span></strong>
                        </div>
                        <div class="item_desc">
                            <span class="text-secondary ">Woman/Men's Shose</span>
                        </div>
                       
                        <div class="item_price">
                            <strong><span>${dataItem.product_price}</span></strong>
                        </div>
                        <div class="over">
                            <a class="btn btn-dark" href="">chi tiết </a>
                            <a class="btn btn-outline-dark" href="">mua </a>
                        </div>

                `;

                r_box.appendChild(newItem);
            })
        }
    } catch (error) {
        console.log(error);
    }

    
   })
})