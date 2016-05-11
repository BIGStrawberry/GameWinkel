<!DOCTYPE html>
  <!-- include database connection -->
  		<?php include '../includes/db_conn.php';?>
  <!-- Head and preloader -->
  		<?php include '../includes/head-light.php';?>
  <!-- /Head and preloader -->
  <!-- Navbar -->
 		<?php include '../includes/navbar.php';?>
  <!-- /Navbar -->


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
          <li data-thumb="assets/images/banner-bg.jpg" data-saveperformance="on" data-transition="random-static" data-slotamount="7" data-masterspeed="700">
            <!-- MAIN IMAGE -->
            <img src="assets/images/dummy.png" alt="" data-lazyload="assets/images/banner-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption customin customout" data-x="left" data-hoffset="60" data-y="center" data-voffset="-45" data-customin="x:200;scaleX:0.5;scaleY:0.5;" data-customout="x:0;scaleX:1;scaleY:1;" data-start="500" data-speed="700" data-easing="Sine.easeInOut"
            data-endspeed="600" data-endeasing="Linear.easeNone">
             <h2 class="h1">StarWars: <br>Battlefront</h2>
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption customin customout" data-x="left" data-hoffset="60" data-y="center" data-voffset="45" data-customin="x:200;scaleX:0.5;scaleY:0.5;" data-customout="x:0;scaleX:1;scaleY:1;" data-start="1000" data-speed="700" data-easing="Sine.easeInOut"
            data-endspeed="600" data-endeasing="Linear.easeNone">
              <a class="btn btn-lg" href="#!">Purchase</a>
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

      <!-- Games List -->
      <div class="col-md-9 isotope">
       <!-- Sort Categories -->
         <ul class="pagination isotope-options">
          <li data-filter="all" class="active"><span>All Platforms</span>
          </li>
          <li data-filter="PC"><span>PC Games</span>
          </li>
          <li data-filter="XBOX"><span>XBOX Games</span>
          </li>
          <li data-filter="PlayStation"><span>PlayStation Games</span>
          </li>
        </ul>
              
        <p>Buy Games</p>
        <!-- /Sort Categories -->

        <div class="isotope-list">

          <!-- Single Product Block -->
        <?php

          $sql = "SELECT id, name, description, price, platform FROM product";
  		    $result = $db_conn->query($sql);

      		if ($result->num_rows > 0) {
      		     while($row = $result->fetch_assoc()) {
		    ?>
			

		     	<?php
		         echo "
		         <a href='../light/product-page.php?id=".$row["id"]."' class='item angled-bg' data-filters='".$row["platform"]."'>
	            <div class='row'>
	              <div class='col-lg-2 col-md-3 col-xs-4'>
	                <div class='angled-img'>
	                  <div class='img'>
                      <img src='../assets/images/games/". $row["id"] .".jpg' alt='logo' max-height='115' max-width='85'>
	                  </div>
	                </div>
	              </div>
			         <div class='col-lg-10 col-md-9 col-xs-8'>
	                <div class='row'>
	                  <div class='col-xs-6 col-md-9'>
	                    <h4>". $row["name"] ."</h4>
	                    <div class='rating'>
	                      <i class='fa fa-star'></i>
	                      <i class='fa fa-star'></i>
	                      <i class='fa fa-star'></i>
	                      <i class='fa fa-star'></i>
	                      <i class='fa fa-star'></i>
	                    </div>
	                  </div>
	                  <div class='col-xs-6 col-md-3 align-right'>
	                    <div class='price'>
	                      €". $row["price"] ."
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
		         ";
		     }
		     
		} 

		?>

        </div>

      </div>
      <!-- /Games List -->
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

  <!-- Countdown -->
  <script type="text/javascript" src="../assets/plugins/jquery.coundown/jquery.countdown.min.js"></script>

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