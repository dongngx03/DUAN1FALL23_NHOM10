<?php include'./controllers/admin/thongke/thongkeproductController.php' ?>

<?php 
    include'./views/components/navbarAdmin.php';
?>
<div class="row2">
    <div class="row2 font_title">
        <h5 class="py-3">BIỂU ĐỒ SỐ LƯỢNG SẢN PHẨM TRONG DANH MỤC</h5>
    </div>
    <div class="row2 form_content ">
        <div id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
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
        <h5 class="py-3">BIỂU ĐỒ THỐNG KÊ TRẠNG THÁI ĐƠN HÀNG</h5>


<canvas id="orderStatusChart" style="width: 600px; height: 200px;"></canvas>

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
            label: 'Product Count',
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
    </div>
</div>