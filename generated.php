<?php session_start(); include("header.php"); ?>

          <div class="ftco-cover-1 overlay" style="background-image: url('images/depot_hero_1.jpg')">
          <div class="container">
            <div class="row align-items-center justify-content-center text-center">
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body">
                    

                          <div class="blog-content">
                  <div>
                    
                      <h3 class="text-primary mb-5">URL Trimmed</h3>
                      <p class="text-secondary"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    
                  </div>
                <div id="accordion">
                  <?php 
                    if(!isset($_SESSION['success'])){
                      echo '<div class="card">
                      <div class="card-header" id="headingOne">
                      <h6>No URL Found</h6>
                      </div>
                      <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                      <center><a class="btn btn-primary text-white px-4 mt-5" href="index.php">Add New URL</a></center>
                    </div></div>';
                    }
                    if (isset($_SESSION['success'])) {
                          $links = explode(",", $_SESSION['success']);
                          $unique = array_unique($links);
                              foreach($unique as $key => $link){
                                  $remove_link = explode("http://localhost/trimmer/", $link);
                                    foreach($remove_link as $keys => $remove_links){
                                      if($link == "http://localhost/trimmer/".$remove_links){
                                         echo '<div class="card">
                      <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse'.$key.'" aria-expanded="false" aria-controls="collapseTwo">
                            '.$link.'
                          </button>
                            <small class="float-right"><span class="badge badge-primary">Trimmed</span></small>
                        </h5>
                      </div>

                  <div id="collapse'.$key.'" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      
                      <div class="row"><div class="col-md-12"><input id="mylink'.$key.'" type="text" disabled class="form-control float-right" value="'.$link.'"></div>
    <div class="col-md-4 mt-3" style="max-width:27.33333%;"><a href="'.$link.'" class="btn btn-primary btn-md mt-2 mb-3 float-left">Visit <span class="fa fa-globe"></span></a></div>
    <div class="col-md-4 mt-3" style="max-width:27.33333%;"><a href="analytics.php?key='.$remove_links.'" class="btn btn-outline-primary btn-md mt-2 mb-3 float-left">Track <span class="fa fa-location-arrow"></span></a></div></div>
                    </div>
                  </div>
                  </div>';
                                      }
                                    }
                              }
                          }
                  ?>
                    

                </div>
                <form action="deleteHistory.php" method="POST">
                  <div class="form-group mt-5">
                    <center><button type="submit" class="btn btn-danger text-white px-4 mb-5">Delete History</button></center>
                    </form>
                </form>
                  <a class="custom_btn" href="index.php">Go Back</a>
              </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      <div class="site-section">
        <div class="container">
          <div class="row">
              
            <div class="col-md-4 sidebar">
              <div class="sidebar-box">
                
              </div>
              <div class="sidebar-box">
                <div class="categories">
                  <h3>Categories</h3>
                  <li><a href="#">Creatives <span>(12)</span></a></li>
                  <li><a href="#">News <span>(22)</span></a></li>
                  <li><a href="#">Design <span>(37)</span></a></li>
                  <li><a href="#">HTML <span>(42)</span></a></li>
                  <li><a href="#">Web Development <span>(14)</span></a></li>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>


   

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

    <script src="js/main.js"></script>
    <script>
      $(document).ready(function(){
          $('#collapse0').addClass('show');
      });
    </script>

  </body>
</html>
