<?php 
    include'./controllers/admin/thongke/thongkeuserController.php';
    include'./views/components/navbarAdmin.php';
?>

<div class="container">
<h5 class="py-3">THỐNG KÊ SỐ NGƯỜI DÙNG ĐÃ MUA HÀNG THÀNH CÔNG</h5>

<!-- <canvas id="userChart" style="width: 600px; height: 300px;"></canvas> -->
<canvas id="userChart" style="width: 50vw; height: 200px; aspect-ratio: unset !important;"></canvas>
</div>

<script>
    var ctx = document.getElementById('userChart').getContext('2d');
    var data = <?php echo $data_json; ?>;

    var labels = data.map(function (item) {
        return item.user_name;
    });

    var values = data.map(function (item) {
        return item.soluong;
    });

    var chartData = {
        labels: labels,
        datasets: [{
            label: 'Total Products Purchased',
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