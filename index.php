<?php
session_start();
include("header.php");
?>


    <?php
    if (isset($_SESSION['error'])) {
        echo "<p class='alert'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    if (isset($_GET['error']) && $_GET['error'] == 'db') {
        echo "<p class='alert'>Error in connecting to database!</p>";
    }
    ?>

    <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay" style="background-image: url('images/depot_hero_1.jpg')">
          <div class="container">
            <div class="row align-items-center justify-content-center text-center">
              <div class="col-lg-6">
                <h1>URL Trimmer</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dolorem eius eligendi esse quod?</p>
                 <form method="POST" action="functions/validate.php">
                    <?php if (isset($_GET['error']) && $_GET['error'] == 'inurl') {
        echo "<div class='alert alert-danger' role='alert'>
                    Not a valid URL!
            </div>";
    }?>
                  <div class="form-group d-flex">
                    <input type="url" id="input" name="url" class="form-control" placeholder="Enter a URL here">
                    <input type="submit" value="Shorten Url" class="btn btn-primary text-white px-4">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- END .ftco-cover-1 -->
        <div class="site-section ftco-service-image-1 pb-5">
          <div class="container">
            <div class="owl-carousel owl-all">
              <div class="service text-center">
                        <center><div class="circle mb-5"><span class="fa fa-link" style="font-size:55px;"></span></div></center>
                <div class="px-md-3">
                  <h3><a href="#">Trim</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae distinctio laudantium nulla eos numquam incidunt!</p>
                </div>
              </div>
              <div class="service text-center">
                <center><div class="circle mb-5"><span class="fa fa-paper-plane" style="font-size:55px;"></span></div></center>
                <div class="px-md-3">
                  <h3><a href="#">Track</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae distinctio laudantium nulla eos numquam incidunt!</p>
                </div>
              </div>
              <div class="service text-center">
                <center><div class="circle mb-5"><span class="fa fa-check" style="font-size:55px;"></span></div></center>
                <div class="px-md-3">
                  <h3><a href="#">Analyze</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae distinctio laudantium nulla eos numquam incidunt!</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    <?php include("footer.php"); ?>

