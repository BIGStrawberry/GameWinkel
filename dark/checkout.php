<!DOCTYPE html>
 <?php
    $productId = $_GET["buy"];
    setcookie("productbought", $productId);

  ?>

  <!-- include database connection -->
      <?php include '../includes/db_conn.php';?>
  <!-- Head and preloader -->
      <?php include '../includes/head-dark.php';?>
  <!-- /Head and preloader -->
  <!-- Navbar -->
    <?php include '../includes/navbar.php';?>
  <!-- /Navbar -->

 

  <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <div class="youplay-banner banner-top xsmall">
      <div class="image" style="background-image: url(assets/images/banner-blog-bg.jpg)" data-top="background-position: 50% 0px;" data-top-bottom="background-position: 50% -200px;">
      </div>

      <div class="info" data-top="opacity: 1; transform: translate3d(0px,0px,0px);" data-top-bottom="opacity: 0; transform: translate3d(0px,150px,0px);" data-anchor-target=".youplay-banner.banner-top">
        <div>
          <div class="container">
            <h2>Checkout</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->


    <div class="container youplay-content">

      <div class="col-md-12">
        <!-- Billing Information -->
        <h2 class="mt-0">Billing Details</h2>

        <form action="thankyou.php" method="get">
        <div class="row">
          <div class="col-md-6">
            <p>First Name:</p>
            <div class="youplay-input">
              <input type="text" name="billing_firstname" placeholder="First Name">
            </div>
          </div>
          <div class="col-md-6">
            <p>Last Name:</p>
            <div class="youplay-input">
              <input type="text" name="billing_lastname" placeholder="Last Name">
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <p>Email:</p>
            <div class="youplay-input">
              <input type="text" name="billing_email" placeholder="Email">
            </div>
          </div>
        </div>

        <p>Additional Info:</p>
        <div class="youplay-textarea">
          <textarea name="billing_textarea" rows="5" placeholder="Additional Info"></textarea>
        </div>
        <!-- /Billing Information -->

        <!-- Order Button-->
        <div class="align-right">
          <input type="submit" name="submit" value="Place Order" class="btn btn-lg">
        </div>
        <!-- /Order Button -->

        </form>

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