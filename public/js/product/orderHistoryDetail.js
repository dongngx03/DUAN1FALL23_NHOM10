const ot_id = document.getElementById('ot_id').value; // lấy id đơn hàng tổng 

const huydon = document.getElementById('huydon');
const huydonhang = async (e) => {
    e.preventDefault();
    const url = `controllers/order/api/handleorder.php?ot_id=${ot_id}`;
    // gửi dữ liệu lên sever 
    try {
        const response = await fetch(url);
        
        if (!response.ok) {
            throw new Error('Request failed');
        }

        // lấy data
        const data = await response.json();
        console.log(data.handle_id);

        if(data.handle_id ==='1') {
            Swal.fire({
                icon: 'error',
                title: 'Bạn có Chắc Muốn Hủy Đơn Hàng ?',
                showCancelButton: true,
                confirmButtonText: 'Chắc Chắn',
                cancelButtonText: 'Thoát',
            }).then((result) => {
                if (result.isConfirmed) {
                    const url = `?act=orderhistorydetail&&ot_id=${ot_id}&&huydon`;
                    // gửi lên sever xủa lý hủy đơn 
                    window.location.href = url;
                }
            });
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Xin Lỗi Bạn, Đơn Hàng Đã Được Duyệt Nên Không Thể Hủy',
                showCancelButton: true,
                confirmButtonText: 'quay Lại',
                cancelButtonText: 'Thoát',
            }).then((result) => {
                if (result.isConfirmed) {
                    const url = `?act=orderhistorydetail&&ot_id=${ot_id}`;
                    // gửi lên sever xủa lý hủy đơn 
                    window.location.href = url;
                }
            })
        }
    } catch (error) {
        console.log(error);
    }
    
    
}
// xử lý phần hủy đơn hàng 
// tại vid sao phải dùng if else đoạn này 
// tại vì khi mà addeventlistenner vào phần tử có giá trị bằng nulol thì mặc định se
// bị lỗi nên ta phải gán nó khi khác null thì với addevent cho nó 
huydon != null ? huydon.addEventListener('click', huydonhang) : "";

const danhanduochang = document.getElementById('danhanduochang');

const nhanhangthanhcong = (e) => {
    e.preventDefault();
    // thống báo có xác nhận việc nhận hàng thành công
    Swal.fire({
        icon: 'question',
        title: 'Xác Nhận Đã Nhận Được Hàng?',
        showCancelButton: true,
        confirmButtonText: 'Xác Nhận',
        cancelButtonText: 'Thoát',
    }).then((result) => {
        if (result.isConfirmed) {
            const url = `?act=orderhistorydetail&&ot_id=${ot_id}&&thanhcong`;
            // gửi lên sever xủa lý hủy đơn 
            window.location.href = url;
        }
    })
    

}

// xử lý phần đã nhận được hàng 
// cũng phải check đàng hoàng 
danhanduochang != null ? danhanduochang.addEventListener('click', nhanhangthanhcong) : ""




