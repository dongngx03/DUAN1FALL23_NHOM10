 // Lấy tất cả các thẻ a có class là 'color_item'
 var colorItems = document.querySelectorAll('.color_item');

 // Duyệt qua từng thẻ a và lấy giá trị của thẻ span bên trong
 colorItems.forEach(function(item) {
     var spanText = item.querySelector('.color_item_text').textContent;
     var icon = item.querySelector('.icon')

     switch (spanText) {
         case 'blue':
             icon.style.color='blue'
             break;
         case 'red':
             icon.style.color='red'
             break;
         case 'yellow':
             icon.style.color='yellow'
             break;
         case 'pink':
             icon.style.color='pink'
             break;
         case 'black':
             icon.style.color='black'
             break;
         case 'white':
             icon.style.color='White'
             break;
         case 'green':
             icon.style.color='green'
             break;
         case 'orange':
             icon.style.color='orange'
             break;
        
     }

     item.addEventListener('click', function() {
         // Xóa class 'clicked' khỏi tất cả các phần tử
         colorItems.forEach(function(item) {
             item.classList.remove('clicked');
         });

         // Thêm class 'clicked' cho phần tử được click
         this.classList.add('clicked');
     });
 });

 const tang = document.getElementById('tang');
 const giam = document.getElementById('giam');
 const quantity = document.getElementById('quantity');
 const gioihan = document.getElementById('gioihan').textContent;


 quantity.addEventListener('blur', () => {
     if(quantity.value>= parseInt(gioihan)) {
         quantity.value = parseInt(gioihan);
         quantity.style.border = '1px solid red';
     }else if(quantity.value <= 0) {
         quantity.value = 1;
     }
 })
 tang.addEventListener('click', () => {
     quantity.value ++;
     if(quantity.value>= parseInt(gioihan)) {
         quantity.value = parseInt(gioihan);
         quantity.style.border = '1px solid red';
     }
 })
 giam.addEventListener('click', () => {
     quantity.value--;
     if(quantity.value <=0) {
         quantity.value = 1
     }
 })


 // banner tự nhảy :
 const parentall = document.querySelector('.d_left_box2');
 const box2 = document.querySelector('.left_box2_conatiner');
 var imgs = document.querySelectorAll('.img-banner');

 // lấy độ dài của thàng box 2 
 
 
 const width = parentall.offsetWidth; 
 const widthTong = width*imgs.length;
 console.log(widthTong);

 let index = 0;

  function next() {
    if(index < imgs.length-1) {
        index ++;
    }else{
        index = 0;
    }
    
    box2.style.transform = `translateX(-${width * index}px)`;
    
 }

 function prew() {
    if(index > 0 ) {
        index --;
     }else{
        index = imgs.length-1;
     }
    
    box2.style.transform = `translateX(-${width * index}px)`;
 }

 setInterval(next, 5000);




  // tìm kiếm size thwo màu 
  var product_id = document.getElementById('product_id');   
  var product_id_value = product_id.value;

  const color_item = document.querySelectorAll('.color_item');
  const color_item_input = document.querySelectorAll('.color_item_input');

  for (let i = 0; i < color_item.length; i++) {
        
        color_item[i].addEventListener('click', async (e) => {
            e.preventDefault();
            const color_id = color_item_input[i].value;
            
            try {
                const url = `controllers/product/api/colorImg.php?color_id=${color_id}&&p_id=${product_id_value}`;

                // gửi method 
                var response = await fetch(url);

                if (!response.ok) {
                    throw new Error('Request failed');
                }

                const data = await response.json();
                console.log(data);
                var d_size = document.querySelector('.d_size');
               // Kiểm tra xem có dữ liệu hay không
                if (data.length > 0) {
                    d_size.innerHTML = ""; // Xóa nội dung hiện tại
                    // dựa vào dữ liệu đã vê thì in ra màn hình 
                    data.forEach((dataItem) => {
                        // tạo 1 thẻ mới 
                        const newItem = document.createElement('button');
                        // theme class có tên size_item vào thẻ vừa tạo 
                        newItem.classList.add('size_item');
                       
                        // cho nội dung của thẻ 
                        newItem.innerHTML = `
                            <span class="text-dark fw-bold">EU ${dataItem.size_name}</span>
                            <input class="size_item_id" type="hidden" value="${dataItem.size_id}">
                        `;
                        // sự liện khi click vào từng thẻ 
                        // api tiếp 
                        newItem.addEventListener('click', async (e) =>  {
                            e.preventDefault();
                            // lấy data.size_id
                            const sizes_id = dataItem.size_id;
                            // dùng fetch gửi dữ liệu lên sever

                            try {
                                const url = `controllers/product/api/getSizeForColor.php?size_id=${sizes_id}`;
                                const response = await fetch(url);
                                

                                // lấy dữ liệu về 
                                const data = await response.json();
                                console.log(data);
                                console.log(typeof data);

                                if(data.length>0) {
                                    const gioihan = document.getElementById('gioihan');
                                    gioihan.innerHTML = data.map((data) => {
                                        return `
                                            Số lượng còn: ${data.quantity} Chiếc
                                        `
                                    })
                                }

                            } catch (error) {
                                console.error('Error:', error);
                                console.log('Response:', await response.text());
                            }
                            
                        });
                        // cuối cùng là thêm thẻ nhỏ vào thẻ lớn 
                        d_size.appendChild(newItem);
                    });
                } else {
                    // Nếu không có dữ liệu, thực hiện xử lý khác, ví dụ: thông báo không có dữ liệu
                    d_size.innerHTML = () => {
                        return `
                            <div class="border border-1 rounded-2 p-5">
                                <span class="text-center p-3 text-danger ">Không có size nào cả </span>
                            </div>
                            
                        `
                    }
                    // Hoặc có thể ẩn hoặc xóa phần tử '.d_size' nếu cần
                }
                            

                return true;
            } catch (error) {
                console.error('Error:', error);
                console.log('Response:', await response.text());
                alert('khong gửi được req')
                return false;
            }
        })
  }

// xử lý nếu như thoát khỏi tang productdetail thì sẽ xóa hết session sản phẩm 
  window.addEventListener('beforeunload', async () => {
    try {
        const url = 'controllers/product/api/handleout.php?deletep=1'
        const response = await fetch(url);

        if (!response.ok) {
            throw new Error('Request failed');
        }

    } catch (error) {
        console.error('Error:', error);
        
    }
  });
  // hàm gửi dư liệu lên sever khi người dùng thoát khỏi trang productdetail thì sẽ xóa bỏ session liên quan đến sản phẩm 
  // để tránh việc người dùng vị lưu lại thông tin session của sản phẩm khi sang sản phẩm khác 

// Thêm vào giỏ hàng 
// khi ấn vào thêm giỏ hàng 
const addCart = document.getElementById('add_Cart');
  addCart.addEventListener('click', async (e) => {
    e.preventDefault();
    const quantityValue = quantity.value;
    // gửi dữ liệu lên sever 
    try {
        const url = `controllers/product/api/addCart.php?quantity=${quantityValue}`;
        const response = await fetch(url);

        if (!response.ok) {
            throw new Error('Request failed');
        }

        const data = await response.json();
        console.log(data);
        // gửi thông báo đến thẻ chứa thông báo bên trên nút thêm giỏ hàng 
        const mess = document.getElementById('mess_cart');
        // phân loại thông báo 
        switch (data) {
            // trường hợp không đăng nhập 
            case 'user_id':
                Swal.fire({
                    icon: 'warning',
                    title: 'Bạn hãy đăng nhập để thực hiện thao tác',
                    showCancelButton: true,
                    confirmButtonText: 'Đăng nhập',
                    cancelButtonText: 'Để sau',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '?act=dangnhap';
                    }
                });
                break;
            // trường hợp chưa chọn màu 
            case 'color_id':
                    mess.innerHTML=`Vui Lòng Chọn Màu`;
                break;
            // trường hợp chưa chọn size
            case 'size_id':
                    mess.innerHTML=`Vui Lòng Chọn Size`;
                break;
            // trường hợp thêm giỏ hàng thành công 
            case 'success':
                Swal.fire({
                    icon: 'success',
                    title: 'Thêm sản phẩm vào mục yêu thích thành công ',
                    showCancelButton: true,
                    confirmButtonText: 'Xem mục yêu thích',
                    cancelButtonText: 'Đóng',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '?act=cart';
                    }
                });
                break;
            // trường hợp đã tồn tại sản phẩm trong giỏ hàng 
            case 'false':
                mess.innerHTML=`Sản Phẩm Đã Có Trong Giỏ Hàng `;
                break;
            
           
        }
       
    } catch (error) {
        console.error('Error:', error);
    }
  })

  // khi ấn mua ngày 
  const buyNow = document.querySelector('#buy_now');
  buyNow.addEventListener('click', async (e) => {
        e.preventDefault();
        // gửi dữ liệu 
        try {
            const url = `controllers/product/api/buyNow.php?buynow`;
            const response = await fetch(url);

            if (!response.ok) {
                throw new Error('Request failed');
            }

            const data = await response.json();
            console.log(data);

            // gửi thông báo đến thẻ chứa thông báo bên trên nút thêm giỏ hàng 
            const mess = document.getElementById('mess_cart');
            // phân loại thông báo 
            switch (data) {
                // trường hợp không đăng nhập 
                case 'user_id':
                    Swal.fire({
                        icon: 'warning',
                        title: 'Bạn hãy đăng nhập để thực hiện thao tác',
                        showCancelButton: true,
                        confirmButtonText: 'Đăng nhập',
                        cancelButtonText: 'Để sau',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '?act=dangnhap';
                        }
                    });
                    break;
                // trường hợp chưa chọn màu 
                case 'color_id':
                        mess.innerHTML=`Vui Lòng Chọn Màu`;
                    break;
                // trường hợp chưa chọn size
                case 'size_id':
                        mess.innerHTML=`Vui Lòng Chọn Size`;
                    break;
                // trường hợp thêm giỏ hàng thành công 
                case 'success':
                    Swal.fire({
                        icon: 'success',
                        title: 'Thêm sản phẩm vào giỏ hàng thành công',
                        showCancelButton: true,
                        confirmButtonText: 'Xem giỏ hàng',
                        cancelButtonText: 'Đóng',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '?act=order';
                        }
                    });
                    break;
            
            }
        } catch (error) {
            console.log(error);
        }
  });

 

 


  