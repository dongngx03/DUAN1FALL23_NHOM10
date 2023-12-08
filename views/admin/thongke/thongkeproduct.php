<?php include'./controllers/admin/thongke/thongkeproductController.php' ?>

<?php 
    include'./views/components/navbarAdmin.php';
?>
<div class="container">
    <div class="row font_title">
        <h3 class="py-3">Sản Phẩm</h3>
    </div>
    <div class="row py-2 ">
       <div class="col-md-6">
            <h5 class="py-3">BIỂU ĐỒ SỐ LƯỢNG SẢN PHẨM TRONG DANH MỤC</h5>
            <div id="myChart" style="width:100%; align-items: center"></div>
       </div>
       <div class="col-md-6">
            <h5 class="py-3">SỐ LIỆU CỤ THỂ</h5>
            <table class="table table-bordered border-secondary">
                <thead class="bg-danger text-white">
                    <tr>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                         foreach ($dsthongke as $thongke) {
                            extract($thongke);
                            echo '
                            <tr>
                                <th scope="col">'.$type_name.'</th>
                                <th scope="col">'.$soluong.' Sản Phẩm</th>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
            </table>
       </div>
    </div>

        
    <div class="row py-5">
        <div class="col-md-6">
            <h5 class="py-3">BIỂU ĐỒ THỐNG KÊ TRẠNG THÁI ĐƠN HÀNG</h5>
            <canvas id="orderStatusChart" style="width: 600px; height: 200px;"></canvas>
        </div>

        <div class="col-md-6">
            <h5 class="py-3">SỐ LIỆU CỤ THỂ</h5>
            <table class="table table-bordered border-secondary">
                <thead class="bg-danger text-white">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Trạng Thái</th>
                        <th scope="col">Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($productCountData as $key => $value): ?>
                    <tr>
                        <th scope="row"><?php echo $key+1 ?></th>
                        <td><?php echo $value['handle_name'] ?></td>
                        <td><?php echo $value['product_count'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                
                </tbody>
            </table>
        </div>
    </div>


    

    <div class="row">
        <h5 class="py-3">THỐNG KÊ HOẠT ĐỘNG SẢN PHẨM </h5>
        <div class="col-md-12">
            <h6 class="mt-3">Sản Phẩm Bán Chạy Nhất </h6>
            <table class="table table-bordered border-secondary">
                <thead class="bg-danger text-white">
                    <tr>
                        
                        <th scope="col">Stt</th>
                        <th scope="col">Tên Sản Phẩm</th>
                        <th scope="col">Id Sản Phẩm Biến Thể</th>
                        <th scope="col">Ảnh </th>
                        <th scope="col">Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                   <?php if(!empty($countBuy)) foreach($countBuy as $key => $value): ?>
                    <tr>
                        <th scope="row"><?php echo $key+1 ?></th>
                        <td><?php echo $value['product_name'] ?></td>
                        <td><?php echo $value['pv_id'] ?></td>
                        <td>
                            <img style="width:100px" src="public/imgs/product/<?php echo $value['img_avatar'] ?>" alt="">
                        </td>
                        <td><?php echo $value['countPV'] ?> Chiếc</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
       
    </div>
</div>

<script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                // Set Data
                const data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượng'],
                    <?php
                    foreach ($dsthongke as $thongke) {
                        extract($thongke);
                        echo "['$type_name', $soluong],";
                    }
                    ?>
                ]);

                // Set Options
                const options = {
                    is3D: true
                };

                // Draw
                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);

            }
        </script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('orderStatusChart').getContext('2d');
    var data = <?php echo $data1_json; ?>;

    var labels = data.map(function (item) {
        return item.handle_name;
    });

    var values = data.map(function (item) {
        return item.product_count;
    });

    var chartData = {
        labels: labels,
        datasets: [{
            label: 'Đếm Các Trạng Thái Đơn Hàng',
            data: values,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    var options = {
        scales: {
            y: {
                beginAtZero: true,
                stepSize: 1
            }
        }
    };

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: chartData,
        options: options
    });
</script>