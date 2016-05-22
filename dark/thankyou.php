<!DOCTYPE html>
  <!-- include database connection -->
      <?php include '../includes/db_conn.php';?>


      <?php

        $firstName = $_GET['billing_firstname']; 
        $lastName = $_GET['billing_lastname'];  
        $email = $_GET['billing_email'];  
        $info = $_GET['billing_textarea']; 
        $date = date("Y,n,j"); 
        $productId = $_COOKIE['productbought'];
          

        $sql = "INSERT INTO `gamewinkel2`.`order` (`id`, `customerId`, `productId`, `status`, `date`, `firstname`, `lastname`, `email`, `info`) 
              VALUES               (NULL, '1', '$productId', '1', '$date', '$firstName', '$lastName', '$email', '$info');";

          $result = $db_conn->query($sql);

          setcookie("productbought", "", 1);
      ?>


  <!-- Head and preloader -->
      <?php include '../includes/head-dark.php';?>
  <!-- /Head and preloader -->
  <!-- Navbar -->
    <?php include '../includes/navbar.php';?>
  <!-- /Navbar -->
  <br><br><br>
  <!-- Main Content -->
  <section class="content-wrap">
    <div class="container youplay-content">

      <h2 class="mt-0">Order Complete</h2>
      <p>
        Thank you for ordering with GameWinkel. <br>
        You can now collect and pay your game at one of our many locations.
      </p>

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
