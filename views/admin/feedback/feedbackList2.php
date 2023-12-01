<?php 
    include'./controllers/admin/feedback/feedBackListController.php';
?>
<?php 
    include'./views/components/navbarAdmin.php';
?>

<!-- phần bảng danh sách sản phẩm  -->
<div class="container-fluid">
    <h2 class="text-center pt-3 text-secondary">Phản Hồi Đang Chờ Duyệt</h2>
    <div class="row pt-3">
        <div class="col-md-12">
            <table class="table  bg-white shadow-lg p-2 mb-5 bg-body rounded align-middle text-center">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">ID spbt </th>
                        <th scope="col">Người phản hồi</th>
                        <th scope="col">Nội Dung Phản hồi</th>
                        <th scope="col">Số sao</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Ngày Phản Hồi</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <?php if(!empty($dataAn)) foreach($dataAn as $value): ?>
                        <tr>
                            <td><?php echo $value['pv_id'] ?></td>
                            <td><?php echo $value['user_id'] ?></td>
                            <td><?php echo $value['fb_content'] ?></td>
                            <td><?php echo $value['star_id'] ?></td>
                            <td>
                                <img style="width:100px" src="public/imgs/feedback/<?php echo $value['fb_img'] ?>" alt="">
                            </td>
                            <td><?php echo $value['fb_date'] ?></td>
                            <td>
                               <div class="d-flex flex-column gap-1">
                                    <button class="btn btn-primary duyet">Duyệt</button>
                                    <input type="hidden" class="fb_id" value="<?php echo $value['fb_id'] ?>">
                               </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                  
                </tbody>
            </table>
        </div>
    </div>
    
</div>
<script>
    // lấy fb_id
    const fb_id = document.querySelectorAll('.fb_id');
    const duyet = document.querySelectorAll('.duyet');
    const an = document.querySelectorAll('.an');
    for (let i = 0; i < duyet.length; i++) {
        duyet[i].addEventListener('click', (e) => {
            e.preventDefault();
            Swal.fire({
                icon: 'question',
                title: 'Duyệt phản hồi này ',
                showCancelButton: true,
                confirmButtonText: 'Ok',
            }).then((result) => {
                if (result.isConfirmed) {
                    const value = fb_id[i].value;
                    const url = `?admin=feedbacklist&&fb_id=${value}`
                    window.location.href = url;
                }
            });
        })
        
    }
    for (let i = 0; i < an.length; i++) {
        an[i].addEventListener('click', (e) => {
            e.preventDefault();
            Swal.fire({
                icon: 'question',
                title: 'Ẩn phản hồi này ',
                showCancelButton: true,
                confirmButtonText: 'Ok',
            }).then((result) => {
                if (result.isConfirmed) {
                    const value = fb_id[i].value;
                    const url = `?admin=feedbacklist&&fb_id_an=${value}`
                    window.location.href = url;
                }
            });
        })
        
    }
</script>
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
