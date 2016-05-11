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

    	$productName = $_GET['product_name']; 
    	$productPrice = $_GET['product_price']; 
    	$productVideo = $_GET['product_video']; 
    	$productDescription = $_GET['product_description']; 
    	$productPlatform = $_GET['product_platform'];
    	$releaseDate = $_GET['release_date'];

    	$sql = "INSERT INTO `gamewinkel`.`product` (`id`, `name`, `description`, `price`, `platform`, `releaseDate`, `video`) 
    			VALUES (NULL, '$productName', '$productDescription', '$productPrice', '$productPlatform', $releaseDate, '$productVideo');";
       $result = $db_conn->query($sql);
    ?>




  <br><br><br><br><br><br>
  <!-- Main Content -->
  <section class="content-wrap">
    <div class="container youplay-content">    	
    	<p> Products succesfully added, feel free to add more. </p>
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
        </div>

        <p>Description:</p>
        <div class="youplay-textarea">
          <textarea name="product_description" rows="5" placeholder="Product Description"></textarea>
        </div>
        <!-- /Billing Information -->

        <!-- Order Button-->
        <div class="align-right">
          <div class="btn btn-lg">
            <input type="submit" name="submit" value="Place Order">
          </div>
        </div>
        <!-- /Order Button -->

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