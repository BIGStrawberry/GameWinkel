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
       $productName;
       $productDescription;
       $productPrice;
       $productVideo;

        $sql = "SELECT * FROM product";
        $result = $db_conn->query($sql);
        
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {

        $productName = $row["name"];
        $productDescription = $row["description"];
        $productPrice = $row["price"];
        $productVideo = $row["video"];
          }
        }
    ?>


  <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <section class="youplay-banner banner-top">
      <div class="image" style="background-image: url(assets/images/banner-bg.jpg)" data-top="background-position: 50% 0px;" data-top-bottom="background-position: 50% -200px;">
      </div>

      <div class="info" data-top="opacity: 1; transform: translate3d(0px,0px,0px);" data-top-bottom="opacity: 0; transform: translate3d(0px,150px,0px);" data-anchor-target=".youplay-banner.banner-top">
        <div>
          <div class="container">
            <h2>Star Wars: <br>Battlefront</h2>
            <em>"One of the most nostalgic games"</em>
            <br>
            <br>
            <br>
            <a class="btn btn-lg" href="http://192.81.220.227/GameWinkel/dark/product-page.php?id=1">Purchase</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /Banner -->
    
    <!-- Preorder -->
    <div class="h2"></div>
    <section class="youplay-banner small">
      <div class="image" style="background-image: url(assets/images/vader.jpg); background-size: cover;" data-top-bottom="background-position: 50% -150px;" data-bottom-top="background-position: 50% 150px;">
      </div>

      <div class="info container align-center">
        <div>
          <h2>Star Wars:<br> Batllefront</h2>

          <!-- See countdown init in bottom of the page -->
          <div class="countdown h2" data-end="2015/11/19"></div>

          <br>
          <br>
          <a class="btn btn-lg" href="#!">Pre-Order</a>
        </div>
      </div>
    </section>
    <!-- /Preorder -->


    <!-- Latest News -->
    <h2 class="container h1">Latest News</h2>
    <section class="youplay-news container">
      <!-- Single News Block -->
      <div class="news-one row">
        <div class="col-md-4">
          <a href="blog-post-1.html" class="angled-img">
            <div class="img">
              <img src="assets/images/game-bloodborne-500x375.jpg" alt="">
            </div>
          </a>
        </div>
        <div class="col-md-8">
          <div class="clearfix">
            <h3 class="h2 pull-left m-0"><a href="blog-post-1.html">Bloodborne - First Try!</a></h3>
            <span class="date pull-right"><i class="fa fa-calendar"></i> Today</span>
          </div>
          <div class="tags">
            <i class="fa fa-tags"></i> Bloodborne, first try, first boss problem, newbie game
          </div>
          <div class="description">
            <p>
              Gus sit amet suum motum. Nescio quando, aut quomodo, nescio quo. Illud scio, amet tortor. Suarum impotens prohibere eum.
            </p>
            <p>
              Sum expectantes. Ego hodie expectantes. Expectantes, et misit unum de pueris Gus interficere. Et suus vos. Nescio quis, qui est bonus usus liberi ad Isai? Qui nosti ... Quis dimisit filios ad necem ... hmm? Gus!
            </p>
          </div>
          <a href="blog-post-1.html" class="btn read-more pull-left">Read More</a>
        </div>
      </div>
      <!-- /Single News Block -->      
    </section>
    <!-- /Latest News -->


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

  <script type="text/javascript">
    $(".countdown").each(function() {
        $(this).countdown($(this).attr('data-end'), function(event) {
          $(this).text(
            event.strftime('%D days %H:%M:%S')
          );
        });
    })
  </script>

</body>

</html>
