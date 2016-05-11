<!DOCTYPE html>
  <!-- include database connection -->
      <?php include '../includes/db_conn.php';?>
  <!-- Head and preloader -->
      <?php include '../includes/head-dark.php';?>
  <!-- /Head and preloader -->
  <!-- Navbar -->
    <?php include '../includes/navbar.php';?>
  <!-- /Navbar -->



  <br><br><br><br><br><br>
  <!-- Main Content -->
  <section class="content-wrap">
    <div class="container youplay-content">
      <h2 class="h1">Claim your game!</h2>

<div class="align-center">
      <form action="claim-handle.php" method="get">
        <div class="row">
          <div class="col-md-6">
            <p></p>
            <div class="youplay-input">
              <input type="text" name="game_code" placeholder="Code that you received through the mail">
            </div>
          </div>
        </div>
      </div>

        <!-- Submit Button-->
        <div class="align-left">
          <div class="btn btn-lg">
            <input type="submit" name="submit" value="Claim Game">
        </div>
      </div>
        <!-- /Submit Button -->

        </form>

<br><br><br>
    <a href="orders.php"> View Orders </a> <br>
    <a href="products.php"> View Products </a>
    <a href="add-products.php"> Add Products </a>



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