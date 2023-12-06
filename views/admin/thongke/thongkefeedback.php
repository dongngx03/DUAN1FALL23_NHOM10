<?php include'./controllers/admin/thongke/thongkefeedbackController.php';
    include'./views/components/navbarAdmin.php';

?>
        <h5 class="py-3">THỐNG KÊ SỐ LƯỢNG ĐÁNH GIÁ BẰNG SAO CỦA TẤT CẢ CÁC SẢN PHẨM</h5>

<canvas id="feedbackChart" style="width: 50vw; height: 200px; aspect-ratio: unset !important;"></canvas>

<script>
    var ctx = document.getElementById('feedbackChart').getContext('2d');

    // Gọi PHP để lấy số lượng đánh giá cho mỗi số sao
    var data = {
        labels: ['1 Star', '2 Stars', '3 Stars', '4 Stars', '5 Stars'],
        datasets: [{
            label: 'Feedback Ratings',
            data: [
                <?php echo getFeedbackCount(1); ?>,
                    <?php echo getFeedbackCount(2); ?>,
                    <?php echo getFeedbackCount(3); ?>,
                    <?php echo getFeedbackCount(4); ?>,
                    <?php echo getFeedbackCount(5); ?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
            ],
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
        data: data,
        options: options
    });
</script>

