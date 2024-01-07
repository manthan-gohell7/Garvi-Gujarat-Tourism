<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Garvi Gujarat Tourism</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Garvi Gujarat Tourism project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
  <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>
  <div class="super_container">

    <header class="header">
      <?php
      $_SESSION['callbackPage'] = 'index.php';
      if ($_SESSION['login']) {

      ?>
        <div class="top-header">
          <div class="container">
            <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
              <li class="tol">Welcome :</li>
              <li class="sig"><?php echo htmlentities($_SESSION['login']); ?></li>
              <li class="sigi"><a href="logout.php">| Logout</a></li>
            </ul>
          </div>
        </div><?php } else { ?>
        <div class="top-header">
          <div class="container">

            <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
              <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal">Sign Up</a></li>
              <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4">| Sign In</a></li>
            </ul>
          </div>
        </div>
      <?php } ?>
      <div class="container">

        <div class="row">
          <div class="col">
            <div class="header_container d-flex flex-row align-items-center justify-content-start">

              <a href="#">
                <div class="logo_container">
                  <div class="logo">
                    <div>Garvi Gujarat Tourism</div>
                    <div>travel agency</div>
                    <div class="logo_image"><img src="images/logo.png" alt=""></div>
                  </div>
                </div>
              </a>
              <nav class="main_nav ml-auto">
                <ul class="main_nav_list">
                  <li class="main_nav_item active"><a href="#">Home</a></li>
                  <li class="main_nav_item"><a href="aboutus.php?type=aboutus">About us</a></li>
                  <li class="main_nav_item"><a href="tours.php">Tours</a></li>
                  <li class="main_nav_item"><a href="contactus.php?type=contact">Contact</a></li>
                </ul>
              </nav>

              <div class="search">
                <form action="#" class="search_form">
                  <input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">
                  <button type="submit" class="search_button ml-auto ctrl_class"><img src="images/search.png" alt=""></button>
                </form>
              </div>

              <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="menu_container menu_mm">

      <div class="menu_close_container">
        <div class="menu_close"></div>
      </div>

      <div class="menu_inner menu_mm">
        <div class="menu menu_mm">
          <div class="menu_search_form_container">
            <form action="#" id="menu_search_form">
              <input type="search" class="menu_search_input menu_mm">
              <button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="images/search_2.png" alt=""></button>
            </form>
          </div>
          <ul class="menu_list menu_mm">
            <li class="menu_item menu_mm"><a href="#">Home</a></li>
            <li class="menu_item menu_mm"><a href="aboutus.php?type=aboutus">About us</a></li>
            <li class="menu_item menu_mm"><a href="tours.php">Tours</a></li>
            <li class="menu_item menu_mm"><a href="tours.php">News</a></li>
            <li class="menu_item menu_mm"><a href="contactus.php?type=contact">Contact</a></li>
          </ul>

          <div class="menu_social_container menu_mm">
            <ul class="menu_social menu_mm">
              <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
              </li>
              <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              </li>
              <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </li>
              <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              </li>
              <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="menu_copyright menu_mm">GGT All rights reserved</div>
        </div>
      </div>
    </div>

    <div class="home">
      <div class="home_background" style="background-image:url(images/home.jpg)"></div>
      <div class="home_content">
        <div class="home_content_inner">
          <div class="home_text_large">discover</div>
          <div class="home_text_small">Discover new worlds</div>
        </div>
      </div>
    </div>

    <div class="find">

      <div class="find_background parallax-window" data-parallax="scroll" data-image-src="images/find.jpg" data-speed="0.8"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="find_title text-center">Find the Adventure of a lifetime</div>
          </div>
          <div class="col-12">
            <div class="find_form_container">
              <form action="#" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
                <div class="find_item">
                  <div>Destination:</div>
                  <input type="text" class="destination find_input" required="required" placeholder="Keyword here">
                </div>
                <div class="find_item">
                  <div>Adventure type:</div>
                  <select name="adventure" id="adventure" class="dropdown_item_select find_input">
                    <option>Categories</option>
                    <option>Categories</option>
                    <option>Categories</option>
                  </select>
                </div>
                <div class="find_item">
                  <div>Min price</div>
                  <select name="min_price" id="min_price" class="dropdown_item_select find_input">
                    <option>&nbsp;</option>
                    <option>Price</option>
                    <option>Price</option>
                  </select>
                </div>
                <div class="find_item">
                  <div>Max price</div>
                  <select name="max_price" id="max_price" class="dropdown_item_select find_input">
                    <option>&nbsp;</option>
                    <option>Price</option>
                    <option>Price</option>
                  </select>
                </div>
                <button class="button find_button"><a href="tours.php">Find</a></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="top">
      <div class="container">
        <div="holiday">
          <div class="row">
            <div class="col">
              <div class="section_title text-center">
                <h2>Top destinations in Gujarat</h2>
                <div>take a look at these offers</div>
              </div>
            </div>
          </div>


          <div class="row top_content">

            <?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
            $query = $dbh->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            $cnt = 1;
            if ($query->rowCount() > 0) {
              foreach ($results as $result) { ?>

                <div class="col-lg-3 col-md-6 top_col">

                  <div class="top_item">
                    <a href="tours.php">
                      <div class="top_item_image">
                        <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>" height="350" width="260" loading="lazy" alt="Location Image">

                        <div class="top_item_content">
                          <div class="top_item_price">Rs.
                            <?php echo htmlentities($result->PackagePrice); ?>
                          </div>
                          <div class="top_item_text">
                            <?php echo htmlentities(substr($result->PackageName, 0, 19) . '...'); ?>
                          </div>

                        </div>
                      </div>
                    </a>
                  </div>

                </div>

            <?php }
            } ?>

            <div class="clearfix"></div>

          </div>
      </div>
    </div>
  </div>

  <div class="last">

    <div class="last_background parallax-window" data-parallax="scroll" data-image-src="images/last.jpg" data-speed="0.8"></div>
    <div class="container">
      <div class="row">
        <div class="last_logo"><img src="images/last_logo.png" alt=""></div>
        <?php
        $sql = "SELECT * from offers limit 2";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = 1;
        if ($query->rowCount() > 0) {
          foreach ($results as $result) { ?>

            <div class="col-lg-6 last_col">
              <div class="last_item">
                <div class="last_item_content">
                  <div class="last_subtitle"><?php echo htmlentities($result->location); ?></div>
                  <div class="last_percent"><?php echo htmlentities($result->discount); ?>%</div>
                  <div class="last_title">Last Minute Offer</div>
                  <div class="last_text"><?php echo htmlentities($result->description); ?></div>
                  <div class="button last_button"><a href="tours.php">See Offer</a></div>
                </div>
              </div>
            </div>

        <?php }
        } ?>
      </div>
    </div>
  </div>

  <div class="video_section d-flex flex-column align-items-center justify-content-center">

    <div class="video_background parallax-window" data-parallax="scroll" data-image-src="images/video.jpg" data-speed="0.8"></div>
    <div class="video_content">
      <div class="video_title">A day on Garvi Gujarat Tourism</div>
      <div class="video_subtitle">A trip organized by GGT's team</div>
      <div class="video_play">
        <a class="video" href="https://www.youtube.com/watch?v=45Djyuzk9fI">
          <svg version="1.1" id="Layer_1" class="play_button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="140px" height="140px" viewBox="0 0 140 140" enable-background="new 0 0 140 140" xml:space="preserve">
            <g id="Layer_2">
              <circle class="play_circle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" cx="70.333" cy="69.58" r="68.542" />
              <polygon class="play_triangle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" points="61.583,56 61.583,84.417 84.75,70 	" />
            </g>
          </svg>
        </a>
      </div>
    </div>
  </div>

  <div class="popular">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title text-center">
            <h2>Popular destinations in 2018</h2>
            <div>take a look at these offers</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="popular_content d-flex flex-md-row flex-column flex-wrap align-items-md-center align-items-start justify-content-md-between justify-content-start">

            <?php
            $sql = "SELECT * from tbl_popular_destinations limit 8";
            $query = $dbh->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            $cnt = 1;
            if ($query->rowCount() > 0) {
              foreach ($results as $result) { ?>

                <div class="popular_item">
                  <a href="tours.php">
                    <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>" height="197.33" width="262.5" loading="lazy" alt="Popular Image">
                    <div class="popular_item_content">
                      <div class="popular_item_price">Rs.
                        <?php echo htmlentities($result->PackagePrice); ?></div>
                      <div class="popular_item_title"><?php echo htmlentities(substr($result->PackageName, 0, 19) . '...'); ?></div>
                    </div>
                  </a>
                </div>

            <?php }
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="special">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title text-center">
            <h2>Special offers</h2>
            <div>take a look at these offers</div>
          </div>
        </div>
      </div>
    </div>
    <div class="special_content">
      <div class="special_slider_container">
        <div class="owl-carousel owl-theme special_slider">

          <?php
          $sql = "SELECT * from tbl_popular_destinations limit 5";
          $query = $dbh->prepare($sql);
          $query->execute();
          $results = $query->fetchAll(PDO::FETCH_OBJ);
          $cnt = 1;
          if ($query->rowCount() > 0) {
            foreach ($results as $result) { ?>

              <div class="owl-item">
                <div class="special_item">
                  <div class="special_item_background"><img style="height: calc(88vh);" src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>" alt="https://unsplash.com/@garciasaldana_"></div>
                  <div class="special_item_content text-center">
                    <div class="special_category">Visiting</div>
                    <div class="special_title"><a href="tours.php"><?php echo htmlentities(substr($result->PackageName, 0, 19) . '...'); ?></a></div>
                  </div>
                </div>
              </div>

          <?php }
          } ?>
        </div>
        <div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
          <img src="images/special_slider.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="newsletter">

    <div class="newsletter_background" style="background-image:url(images/newsletter.jpg)"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="newsletter_content">
            <div class="newsletter_title text-center">Subscribe to our Newsletter</div>
            <div class="newsletter_form_container">
              <form action="#" id="newsletter_form" class="newsletter_form">
                <div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
                  <input type="email" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
                  <button type="submit" id="newsletter_button" class="newsletter_button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 footer_col">
          <div class="footer_about">

            <div class="logo_container">
              <div class="logo">
                <div>Garvi Gujarat Tourism</div>
                <div>travel agency</div>
                <div class="logo_image"><img src="images/logo.png" alt=""></div>
              </div>
            </div>
            <div style="color: aliceblue;" class="footer_about_text">
              <?php
              $pagetype = 'footer';

              $sql = "SELECT content,value from about_us where content=:pagetype";
              $query = $dbh->prepare($sql);
              $query->bindParam(':pagetype', $pagetype, PDO::PARAM_STR);
              $query->execute();
              $results = $query->fetchAll(PDO::FETCH_OBJ);
              $cnt = 1;
              if ($query->rowCount() > 0) {
                foreach ($results as $result) {
              ?>
                  <?php
                  echo $result->value;
                  ?>
              <?php }
              } ?>
            </div>
            <div class="copyright">
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script> All rights reserved
            </div>
          </div>
        </div>

        <div class="col-lg-4 footer_col">
          <div class="footer_latest">
            <div class="footer_title">Latest Offers</div>
            <div class="footer_latest_content">

              <div class="footer_latest_item">
                <div class="footer_latest_image"><img src="images/latest_1.jpg" alt="https://unsplash.com/@peecho">
                </div>
                <div class="footer_latest_item_content">
                  <div class="footer_latest_item_title"><a href="tours.php">Gujarat Summer</a></div>
                  <div class="footer_latest_item_date">Jan 09, 2018</div>
                </div>
              </div>

              <div class="footer_latest_item">
                <div class="footer_latest_image"><img src="images/latest_2.jpg" alt="https://unsplash.com/@sanfrancisco"></div>
                <div class="footer_latest_item_content">
                  <div class="footer_latest_item_title"><a href="tours.php">A perfect vacation</a></div>
                  <div class="footer_latest_item_date">Jan 09, 2018</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 footer_col">
          <div class="tags footer_tags">
            <div class="footer_title">Tags</div>
            <ul class="tags_content d-flex flex-row flex-wrap align-items-start justify-content-start">
              <li class="tag"><a href="#">travel</a></li>
              <li class="tag"><a href="#">summer</a></li>
              <li class="tag"><a href="#">cruise</a></li>
              <li class="tag"><a href="#">beach</a></li>
              <li class="tag"><a href="#">offer</a></li>
              <li class="tag"><a href="#">vacation</a></li>
              <li class="tag"><a href="#">trip</a></li>
              <li class="tag"><a href="#">city break</a></li>
              <li class="tag"><a href="#">adventure</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="styles/bootstrap4/popper.js"></script>
  <script src="styles/bootstrap4/bootstrap.min.js"></script>
  <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
  <script src="plugins/easing/easing.js"></script>
  <script src="plugins/parallax-js-master/parallax.min.js"></script>
  <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="js/custom.js"></script>

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>

  <?php include('includes/signup.php'); ?>
  <?php include('includes/signin.php'); ?>
</body>

</html>