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

       $sql = "SELECT * FROM `order`";
       $result = $db_conn->query($sql);
    ?>




  <br><br><br><br><br><br>
  <!-- Main Content -->
  <section class="content-wrap">
    <div class="container youplay-content">



        <h2 class="h1">View Orders</h2>
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Product ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Notes</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
            <?php

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {

            echo "
              <tr>
                <td> ". $row["id"] ."</td>
                <td> ". $row["productId"] ." </td>
                <td> ". $row["firstname"] ." </td>
                <td> ". $row["lastname"] ." </td>
                <td> ". $row["email"] ." </td>
                <td> ". $row["info"] ." </td>
                <td> ". $row["status"] ." </td>
                
                
              </tr>

             ";
        }
      }

      ?>
            </tbody>
          </table>

<a href="products.php"> View Products </a> <br>
<a href="add-product.php"> Add Products </a>

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