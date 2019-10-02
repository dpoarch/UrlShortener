<?php session_start(); include("header.php"); 
    if(isset($_GET['key'])){
      $code = $_GET['key'];
      $conn = mysqli_connect('localhost', 'root', '', 'trimmer');
        $query = mysqli_query($conn, 'SELECT * FROM `link` WHERE code = "'.$code.'"');
          $data = mysqli_fetch_array($query);
    }else{
      header('location:index.php');
    }

?>

      <div class="site-section">
   
<center> 
           <div class="col-md-4">
        <label> URL</label>
        <input type="text" class="form-control text-center" name="" value="<?php echo "http://".$_SERVER['HTTP_HOST']."/trimmer/".$code; ?>" disabled>
        <label>Click Count: <?php echo $data['visited']; ?></label>
           </div>
          <div class="col-md-8">
            <label>Chart</label>
            <canvas id="myChart" width="60"></canvas>
          </div>
</center>
   

        </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="js/main.js"></script>
    <script>
      $(document).ready(function(){
          $('#collapse0').addClass('show');
      });
    </script>
    <script>
var ctx = document.getElementById('myChart').getContext('2d');
var clicks = "<?php echo $data['visited']; ?>";
var code = "<?php echo "http://".$_SERVER['HTTP_HOST']."/trimmer/".$data['code']; ?>";
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["", code],
        datasets: [{
            label: ['URL'],
            data: [0, clicks],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

  </body>
</html>
