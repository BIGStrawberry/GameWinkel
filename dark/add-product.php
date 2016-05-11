<!DOCTYPE html>
  <!-- include database connection -->
      <?php include '../includes/db_conn.php';?>
  <!-- Head and preloader -->
      <?php include '../includes/head-dark.php';?>
  <!-- /Head and preloader -->
  <!-- Navbar -->
    <?php include '../includes/navbar.php';?>
  <!-- /Navbar -->



    <?php

       $sql = "SELECT * FROM `product`";
       $result = $db_conn->query($sql);
    ?>




  <br><br><br><br><br><br>
  <!-- Main Content -->
  <section class="content-wrap">
    <div class="container youplay-content">
      <h2 class="h1">Add Products</h2>

      <form action="add-product-handle.php" method="get">
        <div class="row">
          <div class="col-md-6">
            <p>Name:</p>
            <div class="youplay-input">
              <input type="text" name="product_name" placeholder="Product Name">
            </div>
          </div>
          <div class="col-md-6">
            <p>Price:</p>
            <div class="youplay-input">
              <input type="text" name="product_price" placeholder="Price">
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <p>Video:</p>
            <div class="youplay-input">
              <input type="text" name="product_video" placeholder="Video (YouTube)">
            </div>
          </div>

        
          <div class="col-md-6">
            <p>Platform:</p>
            <div class="youplay-input">
              <input type="text" name="product_platform" placeholder="Platform (PC, XBOX or PlayStation">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <p>Release Date:</p>
            <div class="youplay-input">
              <input type="text" name="release_date" placeholder="Release date (2015-5-28)">
            </div>
          </div>
        </div>

        <p>Description:</p>
        <div class="youplay-textarea">
          <textarea name="product_description" rows="5" placeholder="Product Description"></textarea>
        </div>

        <!-- Submit Button-->
        <div class="align-right">
          <div class="btn btn-lg">
            <input type="submit" name="submit" value="Add Product">
          </div>
        </div>
        <!-- /Submit Button -->

        </form>


    <a href="orders.php"> View Orders </a> <br>
    <a href="products.php"> View Products </a>



    </div>

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

  <!-- Countdown -->
  <script type="text/javascript" src="../assets/plugins/jquery.coundown/jquery.countdown.min.js"></script>

  <!-- Magnific Popup -->
  <script type="text/javascript" src="../assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Revolution Slider -->
  <script type="text/javascript" src="../assets/plugins/slider-revolution/examples&amp;source/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="../assets/plugins/slider-revolution/examples&amp;source/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

  <!-- Isotope -->
  <script type="text/javascript" src="../assets/plugins/isotope/isotope.pkgd.min.js"></script>

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