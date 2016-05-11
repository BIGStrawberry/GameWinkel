<!DOCTYPE html>
  <!-- include database connection -->
      <?php include '../includes/db_conn.php';?>
  <!-- Head and preloader -->
      <?php include '../includes/head-light.php';?>
  <!-- /Head and preloader -->
  <!-- Navbar -->
    <?php include '../includes/navbar.php';?>
  <!-- /Navbar -->
    <?php
       $productId = $_GET["id"];
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
          <li data-thumb="assets/images/game-botanicula-500x375.jpg" data-saveperformance="on" data-transition="random-static" data-slotamount="7" data-masterspeed="700">
            <!-- MAIN IMAGE -->
            <img src="assets/images/dummy.png" alt="" data-lazyload="assets/images/game-botanicula-1920x1080.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption customin customout" data-x="left" data-hoffset="60" data-y="center" data-voffset="-45" data-customin="x:0;" data-customout="x:0;" data-start="0" data-speed="500" data-endspeed="500">
              <h2 class="h1"><?php echo $productId; ?></h2>
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption customin customout" data-x="left" data-hoffset="60" data-y="center" data-voffset="45" data-customin="x:0;" data-customout="x:0;" data-start="0" data-speed="500" data-endspeed="500">
              <a class="btn btn-lg" href="#!">$39.99</a>
            </div>
          </li>  
        </ul>
        <div class="tp-bannertimer"></div>
      </div>
    </div>
    <!-- /Slider Revolution-->


    <div class="container youplay-store">

      <!-- Left Side -->
      <div class="col-md-3">

        <!-- Side Search -->
        <div class="side-block ">
          <p>Search by Games:</p>
          <form action="search.html">
            <div class="youplay-input">
              <input type="text" name="search" placeholder="enter search term">
            </div>
          </form>
        </div>
        <!-- /Side Search -->

        <!-- Side Categories -->
        <div class="side-block ">
          <h4 class="block-title">Categories</h4>
          <ul class="block-content">
            <li><a href="#!">All</a>
            </li>
            <li><a href="#!">Action</a>
            </li>
            <li><a href="#!">Adventure</a>
            </li>
            <li><a href="#!">Casual</a>
            </li>
            <li><a href="#!">Indie</a>
            </li>
            <li><a href="#!">Racing</a>
            </li>
            <li><a href="#!">RPG</a>
            </li>
            <li><a href="#!">Simulation</a>
            </li>
            <li><a href="#!">Strategy</a>
            </li>
          </ul>
        </div>
        <!-- /Side Categories -->

        <!-- Side Popular News -->
        <div class="side-block ">
          <h4 class="block-title">Popular Games</h4>
          <div class="block-content p-0">
            <!-- Single News Block -->
            <div class="row youplay-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="store-product-1.html" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-road-no-taken-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="store-product-1.html" title="Road Not Taken">Road Not Taken</a></h4>
                <span class="price">$50.00</span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row youplay-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="#!" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-botanicula-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="#!" title="Botanicula">Botanicula</a></h4>
                <span class="price">$39.99 <sup><del>$49.99</del></sup></span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row youplay-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="#!" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-journey-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="#!" title="Journey">Journey</a></h4>
                <span class="price">$20.00</span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row youplay-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="#!" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-world-of-goo-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="#!" title="World of Goo">World of Goo</a></h4>
                <span class="price">$10.00</span>
              </div>
            </div>
            <!-- /Single News Block -->
          </div>
        </div>
        <!-- /Side Popular News -->
      </div>
      <!-- /Left Side -->

      <div class="col-md-9">
        <!-- Post Info -->
        <article>

          <!-- Description -->
          <h2 class="mt-0">Description</h2>
          <div class="description">
            <p>
              Suspicio? Bene ... tunc ibimus? Quis uh ... CONEXUS locus his diebus? Quisque semper aliquid videtur, in volutpat mauris. Nolo enim dicere. Vobis neque ab aliis. Ego feci memetipsum explicans. Gus mortuus est. Lorem opus habeo.
            </p>
            <p>
              Jackson Isai? Tu quoque ... A te quidem a ante. Vos scitis quod blinking res Ive 'been vocans super vos? Et conteram illud, et conteram hoc. Maledicant druggie excors. Iam hoc tu facere conatus sum ad te in omni tempore?
            </p>
            <p>
              Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus. Qui curis! Modo nobis certamen est, qui non credunt at.
            </p>
            <p>
              Nonne vides quid sit? Tu es ... Jesse me respice. Tu ... blowfish sunt. A blowfish! Cogitare. Statura pusillus, nec sapientium panem, nec artificum. Sed predators facile prædam blowfish secretum telum non se habet. Non ille? Quid faciam blowfish, Isai.
              Blowfish quid faciat? In blowfish inflat, purus?
            </p>
          </div>
          <!-- /Description -->

          <!-- Images With Text -->
          <div class="youplay-carousel gallery-popup">
            <a class="angled-img" href="http://www.youtube.com/watch?v=UP_Kwb9bdHk">
              <div class="img">
                <img src="assets/images/game-botanicula-500x375.jpg" alt="">
              </div>
              <i class="fa fa-play icon"></i>
            </a>
            <a class="angled-img" href="assets/images/game-botanicula-2-1920x1080.jpg">
              <div class="img">
                <img src="assets/images/game-botanicula-2-500x375.jpg" alt="">
              </div>
              <i class="fa fa-search-plus icon"></i>
            </a>
            <a class="angled-img" href="assets/images/game-botanicula-3-1920x1080.jpg">
              <div class="img">
                <img src="assets/images/game-botanicula-3-500x375.jpg" alt="">
              </div>
              <i class="fa fa-search-plus icon"></i>
            </a>
            <a class="angled-img" href="assets/images/game-botanicula-4-1920x1080.jpg">
              <div class="img">
                <img src="assets/images/game-botanicula-4-500x375.jpg" alt="">
              </div>
              <i class="fa fa-search-plus icon"></i>
            </a>
            <a class="angled-img" href="assets/images/game-botanicula-5-1920x1080.jpg">
              <div class="img">
                <img src="assets/images/game-botanicula-5-500x375.jpg" alt="">
              </div>
              <i class="fa fa-search-plus icon"></i>
            </a>
            <a class="angled-img" href="assets/images/game-botanicula-6-1920x1080.jpg">
              <div class="img">
                <img src="assets/images/game-botanicula-6-500x375.jpg" alt="">
              </div>
              <i class="fa fa-search-plus icon"></i>
            </a>
          </div>
          <!-- /Images With Text -->

          <!-- Post Share -->
          <div class="btn-group social-list mt-20">
            <a class="btn btn-default" title="Share on Facebook" href="#!"><i class="fa fa-facebook"></i></a>
            <a class="btn btn-default" href="#!" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
            <a class="btn btn-default" href="#!" title="Share on Google Plus"><i class="fa fa-google-plus"></i></a>
            <a class="btn btn-default" href="#!" title="Share on LinkedIn"><i class="fa fa-linkedin"></i></a>
            <a class="btn btn-default" href="#!" title="Share on Tumblr"><i class="fa fa-tumblr"></i></a>
          </div>
          <!-- /Post Share -->
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
                  <div>
                    <strong>OS:</strong> Windows 7 SP1 64bit, Windows 8.1 64bit
                  </div>
                  <div>
                    <strong>Processor:</strong> AMD® A8 3870 3,6 Ghz or Intel® Core ™ i3 2100 3.1Ghz
                  </div>
                  <div>
                    <strong>Memory:</strong> 4 GB RAM
                  </div>
                  <div>
                    <strong>Graphics:</strong> NVIDIA® GeForce GTX 465 / ATI Radeon TM HD 6870
                  </div>
                  <div>
                    <strong>DirectX:</strong> Version 11
                  </div>
                  <div>
                    <strong>Network:</strong> Broadband Internet connection
                  </div>
                  <div>
                    <strong>Hard Drive:</strong> 23 GB available space
                  </div>
                  <div>
                    <strong>Sound Card:</strong> DirectX 11 sound device
                  </div>
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
                  <div>
                    <strong>OS:</strong> Windows 7 SP1 64bit, Windows 8.1 64bit
                  </div>
                  <div>
                    <strong>Processor:</strong> AMD® FX 8150 3.6 GHz or Intel® Core™ i7 2600 3.4 GHz
                  </div>
                  <div>
                    <strong>Memory:</strong> 8 GB RAM
                  </div>
                  <div>
                    <strong>Graphics:</strong> NVIDIA® GeForce® GTX 750, ATI Radeon™ HD 7850
                  </div>
                  <div>
                    <strong>DirectX:</strong> Version 11
                  </div>
                  <div>
                    <strong>Network:</strong> Broadband Internet connection
                  </div>
                  <div>
                    <strong>Hard Drive:</strong> 23 GB available space
                  </div>
                  <div>
                    <strong>Sound Card:</strong> DirectX 11 sound device
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Information -->


        <!-- Reviews -->
        <div class="reviews-block mb-0">
          <h2>Reviews <small>(3)</small></h2>

          <!-- Reviews List -->
          <ul class="reviews-list">
            <!-- Kristen Bradley review -->
            <li>
              <article>
                <div class="review-avatar pull-left">
                  <img src="assets/images/avatar-user-3.png" alt="">
                </div>
                <div class="review-cont clearfix">
                  <div class="rating pull-right">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <a class="review-author h4" href="#!">Richard Lambert</a>
                  <div class="date"><i class="fa fa-calendar"></i> January 29, 2015</div>
                  <div class="review-text">
                    <p>
                      Prohibere. Striga! Ut custodiant te sermonem dicens - periculi ... periculo! Non ego illud numquam. Dixi sunt implicatae. Elatus deinde manubrio!
                    </p>
                    <ul>
                      <li><strong>Gus</strong> sit amet suum motum.</li>
                      <li><strong>Nescio quando</strong>, aut quomodo, nescio quo.</li>
                      <li><strong>Illud scio</strong>, amet tortor.</li>
                      <li><strong>Suarum impotens</strong> prohibere eum.</li>
                    </ul>
                    <p>
                      Sum expectantes. Ego hodie expectantes. Expectantes, et misit unum de pueris Gus interficere. Et suus vos. Nescio quis, qui est bonus usus liberi ad Isai? Qui nosti ... Quis dimisit filios ad necem ... hmm? Gus! Est, ante me factus singulis decem gradibus.
                      Et nunc ad aliud opus mihi tandem tollendum est puer ille consensus et nunc fugit. Ipse suus obtinuit eam. Non solum autem illa, sed te tractantur in se trahens felis.
                    </p>
                  </div>
                  <div class="pull-right review-like">
                    <a href="#!" class="text-success"><i class="fa fa-thumbs-up"></i> 32</a>
                    <a href="#!" class="text-danger"><i class="fa fa-thumbs-down"></i> 10</a>
                  </div>
                </div>
              </article>
            </li>
            <!-- /Kristen Bradley review -->
            <!-- Scott Sutton review -->
            <li>
              <article>
                <div class="review-avatar pull-left">
                  <img src="assets/images/avatar-user-4.png" alt="">
                </div>
                <div class="review-cont clearfix">
                  <div class="rating pull-right">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <a class="review-author h4" href="#!">Clyde Fields</a>
                  <div class="date"><i class="fa fa-calendar"></i> January 11, 2015</div>
                  <div class="review-text">
                    <p>
                      Ut sibi fuerat socius sagittis. Ego intervenerit. Vere quia a te nuper iratus occidit illos undecim annorum puer. Deinde, si hoc forte qui fuit imperavit.
                    </p>
                    <p>
                      Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum
                      duo te mihi videtur.
                    </p>
                  </div>
                  <div class="pull-right review-like">
                    <a href="#!" class="text-success"><i class="fa fa-thumbs-up"></i> 27</a>
                    <a href="#!" class="text-danger"><i class="fa fa-thumbs-down"></i> 5</a>
                  </div>
                </div>
              </article>
            </li>
            <!-- /Scott Sutton review -->
          </ul>
          <!-- /Reviews List -->

          <!-- Review Form -->
          <form action="#!" class="review-form mb-0">
            <div class="review-avatar pull-left">
              <img src="assets/images/avatar.png" alt="">
            </div>
            <div class="review-cont clearfix">
              <div class="youplay-input">
                <input type="text" name="username" placeholder="Your Name *">
              </div>
              <div class="youplay-input">
                <input type="email" name="email" placeholder="Your Email *">
              </div>
              <div class="youplay-textarea">
                <textarea name="message" rows="5" placeholder="Your Review..."></textarea>
              </div>
              <div class="youplay-rating pull-right">
                <input type="radio" id="review-rate-5" name="review-rate" value="5">
                <label for="review-rate-5"><i class="fa fa-star"></i>
                </label>
                <input type="radio" id="review-rate-4" name="review-rate" value="4">
                <label for="review-rate-4"><i class="fa fa-star"></i>
                </label>
                <input type="radio" id="review-rate-3" name="review-rate" value="3">
                <label for="review-rate-3"><i class="fa fa-star"></i>
                </label>
                <input type="radio" id="review-rate-2" name="review-rate" value="2">
                <label for="review-rate-2"><i class="fa fa-star"></i>
                </label>
                <input type="radio" id="review-rate-1" name="review-rate" value="1">
                <label for="review-rate-1"><i class="fa fa-star"></i>
                </label>
              </div>
              <div class="clearfix"></div>
              <button class="btn btn-default pull-right">Submit</button>
            </div>
          </form>
          <!-- /Review Form -->
        </div>
        <!-- /Reviews -->
      </div>

    </div>

    <!-- Related -->
    <h2 class="container">Related</h2>
    <br>
    <div class="youplay-carousel">
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-machinarium-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Machinarium</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-broken-age-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Broken Age</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-dream-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Dream</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-world-of-goo-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>World of Goo</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <!-- /Related -->

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