<!DOCTYPE html>
 <!-- include database connection -->
      <?php include '../includes/db_conn.php';?>
    <!-- /include database connection -->
    <!-- Head and preloader -->
      <?php include '../includes/head-dark.php';?>
    <!-- /Head and preloader -->
    <!-- Navbar -->
      <?php include '../includes/navbar.php';?>
    <!-- /Navbar -->

    <?php
       $productId = $_GET["id"];
       $productName;
       $productDescription;
       $productPrice;
       $productVideo;

        $sql = "SELECT * FROM product WHERE id = '$productId'";
        $result = $db_conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {

        $productName = $row["name"];
        $productDescription = $row["description"];
        $productPrice = $row["price"];
        $productVideo = $row["video"];
          }
        }

        $minimumReq;
        $suggestedReq;

        $sql = "SELECT * FROM systemrequirements WHERE id = '$productId'";
        $result = $db_conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {

        $minimumReq = $row["minimumReq"];
        $suggestedReq = $row["suggestedReq"];
          }
        }
    ?>


  



  <!-- Main Content -->
  <section class="content-wrap">

    <!-- Slider Revolution-->
    <!--
        Use classes:
        rs-fullscreen
    -->
    <div class="tp-banner-container rs-youplay">
      <div class="tp-banner">
        <ul>
          <!-- SLIDE NR. 1  -->
          <li data-thumb="assets/images/game-dark-souls-ii-500x375.jpg" data-saveperformance="on" data-transition="random-static" data-slotamount="7" data-masterspeed="700">
            <!-- MAIN IMAGE -->
            <img src="assets/images/dummy.png" alt="" data-lazyload="assets/images/game-dark-souls-ii-1920x1080.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption customin customout" data-x="left" data-hoffset="60" data-y="center" data-voffset="-45" data-customin="x:0;" data-customout="x:0;" data-start="0" data-speed="500" data-endspeed="500">
              <h2 class="h1"><?php echo $productName; ?></h2>
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption customin customout" data-x="left" data-hoffset="60" data-y="center" data-voffset="45" data-customin="x:0;" data-customout="x:0;" data-start="0" data-speed="500" data-endspeed="500">
              <a class="btn btn-lg" href='../dark/checkout.php?buy=<?php echo $productId; ?> '>Buy for just <?php echo $productPrice; ?></a>


            </div>
          </li>          
        </ul>
        <div class="tp-bannertimer"></div>
      </div>
    </div>
    <!-- /Slider Revolution-->


    <div class="container youplay-store">

      <!-- Left Side -->
          <?php include '../includes/left-sidebar.php';?>
      <!-- /Left Side -->

      <div class="col-md-9">
        <!-- Post Info -->
        <article>

          <!-- Description -->
          <h2 class="mt-0">Description</h2>
          <div class="description">
            <p>
              <?php echo $productDescription; ?>
            </p>            
          </div>
          <!-- /Description -->

          <!-- Trailer video -->
                <iframe width="800" height="315"
                  src="https://www.youtube.com/embed/<?php echo $productVideo; ?>">
                </iframe>
          <!-- Trailer video -->
        </article>
        <!-- /Post Info -->


        <!-- Information -->
        <div class="requirements-block">
          <h2>System Requirements</h2>
          <div class="panel-group youplay-accordion" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Minimum <span class="icon-plus"></span>
                                </a>
                            </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <?php echo $minimumReq; ?>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Recommended <span class="icon-minus"></span>
                                </a>
                            </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <?php echo $suggestedReq; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Information -->
      </div>

    </div>


    <!-- Footer -->
      <?php include '../includes/footer.php';?>
    <!-- /Footer -->

  </section>
  <!-- /Main Content -->

  <!-- Search Block -->
  <div class="search-block">
    <a href="#!" class="search-toggle glyphicon glyphicon-remove"></a>
    <form action="search.html">
      <div class="youplay-input">
        <input type="text" name="search" placeholder="Search...">
      </div>
    </form>
  </div>
  <!-- /Search Block -->


  <!-- jQuery -->
  <script type="text/javascript" src="../assets/plugins/jquery/jquery.min.js"></script>

  <!-- CSS Shapes Polyfill -->
  <script type="text/javascript" src="../assets/plugins/css-shapes-polyfill/shapes-polyfill.min.js"></script>

  <!-- Bootstrap -->
  <script type="text/javascript" src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

  <!-- Skrollr -->
  <script type="text/javascript" src="../assets/plugins/skrollr/skrollr.min.js"></script>

  <!-- Smooth Scroll -->
  <script type="text/javascript" src="../assets/plugins/smoothscroll/smoothscroll.js"></script>

  <!-- Owl Carousel -->
  <script type="text/javascript" src="../assets/plugins/owl.carousel/owl.carousel.min.js"></script>

  <!-- Magnific Popup -->
  <script type="text/javascript" src="../assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Revolution Slider -->
  <script type="text/javascript" src="../assets/plugins/slider-revolution/examples&amp;source/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="../assets/plugins/slider-revolution/examples&amp;source/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

  <!-- youplay -->
  <script type="text/javascript" src="../assets/youplay/js/youplay.min.js"></script>
  <!-- init youplay -->
  <script>
    if(typeof youplay !== 'undefined') {
        youplay.init({
            smoothscroll: false,
        });
    }
  </script>

</body>

</html>