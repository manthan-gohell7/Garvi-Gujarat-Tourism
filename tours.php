<?php
session_start();
error_reporting(0);
include('includes/config.php');

session_start();

for ($i = 0; $i < $_SESSION['resultLength']; $i++) {
  if (isset($_POST['buyNow' . $i]) && $_SESSION['login']) {
    $_SESSION['pkgID'] = $_POST['pkgID'][$i];
    $show_modal = "1";
    include("showModel.js.php");
  } else if ($_POST['buyNow' . $i] && !$_SESSION['login']) {
    echo ("<script>if(alert('You must be logged in to buy any packages')) {document.location = 'tours.php';}else{document.location = 'tours.php';}</script>");
    break;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tours</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Garvi Gujarat Tourism project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
  <link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">

  <style>
    @import url(https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic);

    body,
    html {
      height: 100%;
      padding: 0;
      margin: 0;
      font-family: 'Arimo', sans-serif;
    }

    main {
      z-index: 999;
      position: relative;
      -webkit-transition: transform .7s ease-in-out;
      -moz-transition: transform .7s ease-in-out;
      -ms-transition: transform .7s ease-in-out;
      -o-transition: transform .7s ease-in-out;
      transition: transform .7s ease-in-out;
    }

    .sidebar {
      padding-left: 30px;
      padding-right: 30px;
      overflow-y: auto;
      height: 100%;
      width: 400px;
      position: fixed;
      top: 0;
      z-index: 1;
      right: 0;
      background-color: #fbefd0;
      visibility: hidden;
    }

    .bar {
      display: block;
      height: 5px;
      width: 50px;
      background-color: #EF8354;
      margin: 10px auto;
    }

    .buttonMenu {
      z-index: 1000;
      cursor: pointer;
      display: inline-block;
      width: auto;
      margin: 0 auto;
      -webkit-transition: all .7s ease;
      -moz-transition: all .7s ease;
      -ms-transition: all .7s ease;
      -o-transition: all .7s ease;
      transition: all .7s ease;

    }

    .nav-right {
      position: fixed;
      right: 40px;
      top: 45px;
    }

    .nav-right.visible-xs {
      z-index: 3;
    }

    .hidden-xs {
      display: none;
    }

    .middle {
      margin: 0 auto;
    }

    .bar {
      -webkit-transition: all .7s ease;
      -moz-transition: all .7s ease;
      -ms-transition: all .7s ease;
      -o-transition: all .7s ease;
      transition: all .7s ease;
    }

    .nav-right.visible-xs .active .bar {
      background-color: #FFF;
      -webkit-transition: all .7s ease;
      -moz-transition: all .7s ease;
      -ms-transition: all .7s ease;
      -o-transition: all .7s ease;
      transition: all .7s ease;
    }

    .buttonMenu.active .top {
      z-index: 1000;
      -webkit-transform: translateY(15px) rotateZ(45deg);
      -moz-transform: translateY(15px) rotateZ(45deg);
      -ms-transform: translateY(15px) rotateZ(45deg);
      -o-transform: translateY(15px) rotateZ(45deg);
      transform: translateY(15px) rotateZ(45deg);
    }

    .buttonMenu.active .bottom {
      z-index: 1000;
      -webkit-transform: translateY(-15px) rotateZ(-45deg);
      -moz-transform: translateY(-15px) rotateZ(-45deg);
      -ms-transform: translateY(-15px) rotateZ(-45deg);
      -o-transform: translateY(-15px) rotateZ(-45deg);
      transform: translateY(-15px) rotateZ(-45deg);
    }

    .buttonMenu.active .middle {
      z-index: 1000;
      width: 0;
    }

    .move-to-left {
      -webkit-transform: translateX(-400px);
      -moz-transform: translateX(-400px);
      -ms-transform: translateX(-400px);
      -o-transform: translateX(-400px);
      transform: translateX(-400px);
    }

    .sidebar-list {
      padding: 0;
      margin: 0;
      list-style: none;
      position: relative;
      margin-top: 50px;
      text-align: center;
    }

    .sidebar-item {
      margin: 50px 0;
      opacity: 0;
      -webkit-transform: translateY(-20px);
      -moz-transform: translateY(-20px);
      -ms-transform: translateY(-20px);
      -o-transform: translateY(-20px);
      transform: translateY(-20px);
    }

    .sidebar-item:first-child {
      -webkit-transition: all .7s .2s ease-in-out;
      -moz-transition: all .7s .2s ease-in-out;
      -ms-transition: all .7s .2s ease-in-out;
      -o-transition: all .7s .2s ease-in-out;
      transition: all .7s .2s ease-in-out;
    }

    .sidebar-item:nth-child(2) {
      -webkit-transition: all .7s .4s ease-in-out;
      -moz-transition: all .7s .4s ease-in-out;
      -ms-transition: all .7s .4s ease-in-out;
      -o-transition: all .7s .4s ease-in-out;
      transition: all .7s .4s ease-in-out;
    }

    .sidebar-item:nth-child(3) {
      -webkit-transition: all .7s .6s ease-in-out;
      -moz-transition: all .7s .6s ease-in-out;
      -ms-transition: all .7s .6s ease-in-out;
      -o-transition: all .7s .6s ease-in-out;
      transition: all .7s .6s ease-in-out;
    }

    .sidebar-item:last-child {
      -webkit-transition: all .7s .8s ease-in-out;
      -moz-transition: all .7s .8s ease-in-out;
      -ms-transition: all .7s .8s ease-in-out;
      -o-transition: all .7s .8s ease-in-out;
      transition: all .7s .6s ease-in-out;
    }

    .sidebar-item.active {
      opacity: 1;
      -webkit-transform: translateY(0px);
      -moz-transform: translateY(0px);
      -ms-transform: translateY(0px);
      -o-transform: translateY(0px);
      transform: translateY(0px);
    }

    .sidebar-anchor {
      color: #FFF;
      text-decoration: none;
      font-size: 1.8em;
      text-transform: uppercase;
      position: relative;
      padding-bottom: 7px;
    }

    .sidebar-anchor:before {
      content: "";
      width: 0;
      height: 2px;
      position: absolute;
      bottom: 0;
      left: 0;
      background-color: #FFF;
      -webkit-transition: all .7s ease-in-out;
      -moz-transition: all .7s ease-in-out;
      -ms-transition: all .7s ease-in-out;
      -o-transition: all .7s ease-in-out;
      transition: all .7s ease-in-out;
    }

    .sidebar-anchor:hover:before {
      width: 100%;
    }

    .ua {
      position: absolute;
      bottom: 20px;
      left: 30px;
    }

    .fa {
      font-size: 1.4em;
      color: #EF8354;
      -webkit-transition: all 1s ease;
      -moz-transition: all 1s ease;
      -ms-transition: all 1s ease;
      -o-transition: all 1s ease;
      transition: all 1s ease;
    }

    .ua:hover .fa {
      color: #FFF;
      -webkit-transform: scale(1.3);
      -moz-transform: scale(1.3);
      -ms-transform: scale(1.3);
      -o-transform: scale(1.3);
      transform: scale(1.3);
      -webkit-transition: all 1s ease;
      -moz-transition: all 1s ease;
      -ms-transition: all 1s ease;
      -o-transition: all 1s ease;
      transition: all 1s ease;
    }

    @media (min-width: 480px) {
      .nav-list {
        display: block;
      }
    }

    @media (min-width: 768px) {
      .nav-right {
        position: absolute;
      }

      .hidden-xs {
        display: block;
      }

      .visible-xs {
        display: none;
      }
    }

    @media (max-width: 767.98px) {
      .border-sm-start-none {
        border-left: none !important;
      }
    }
  </style>

</head>

<body>
  <?php
  if (isset($_SESSION['login'])) { ?>
    <div style="z-index: 1000;" class="nav-right visible-xs">
      <div class="buttonMenu" id="btn">
        <img style='padding-left: 10px;  z-index: 1000' class="buttonMenu" id="btn" width="50px" height="50px" src="images/order.png"><br>
        <b style="color: red;  z-index: 1000;">Purchases</b>
      </div>
    </div>

    <main>
      <nav>
        <div style="z-index: 1000;" class="nav-right hidden-xs">
          <img style='padding-left: 10px; ' class="buttonMenu" id="btn" width="50px" height="50px" src="images/order.png"><br>
          <b style="color: red;  z-index: 1000;">Purchases</b>
        </div>
      </nav>
    </main>
  <?php
  }
  ?>


  <div style="z-index: 999;" class="sidebar super_container" id="sidebar">
    <ul class="sidebar-list">
      <li class="sidebar-item">

        <h3 style="color: red;"><b>Your Purchases</b></h3>

      </li>
      <?php
      $email = $_SESSION['login'];
      $status = 'Payment success';

      $sql = "SELECT PackageId from tblbooking where UserEmail=:email and status=:status";
      $query = $dbh->prepare($sql);
      $query->bindParam(':email', $email, PDO::PARAM_STR);
      $query->bindParam(':status', $status, PDO::PARAM_STR);
      $query->execute();
      $results = $query->fetchAll(PDO::FETCH_OBJ);
      $cnt = 1;
      if ($query->rowCount() > 0) {
        foreach ($results as $result) {
          $pkgId = $result->PackageId;
          $innerSql = "SELECT * from tbltourpackages where PackageId=:pkgId";
          $innerQuery = $dbh->prepare($innerSql);
          $innerQuery->bindParam(':pkgId', $pkgId, PDO::PARAM_STR);
          $innerQuery->execute();
          $innerResults = $innerQuery->fetchAll(PDO::FETCH_OBJ);
      ?>

          <li class="sidebar-item">
            <div class="row justify-content-center mb-3">
              <div class="row-md-12 row-xl-10">
                <div class="card shadow-0 border rounded-3">
                  <div style="margin-left: 20px; margin-right: 20px;" class="card-body">
                    <div class="row">
                      <div class="row-md-5 row-lg-3 row-xl-3 mb-4 mb-lg-0">
                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                          <img center width="318px" height="150px" src="admin/pacakgeimages/<?php echo htmlentities($innerResults[0]->PackageImage); ?>" class="my-auto" />
                          <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="padding-left: 20px; padding-top: 35px;" class="row-md-10 row-lg-10 row-xl-10 justify-content-center">
                        <h5><?php echo htmlentities($innerResults[0]->PackageName); ?></h5>
                        <h6><?php echo htmlentities($innerResults[0]->PackageLocation); ?></h6>
                        <div class="d-flex flex-row justify-content-center mb-1">
                          <h4 class="mb-1 me-1">Rs. <?php echo htmlentities($innerResults[0]->PackagePrice); ?></h4>
                        </div>
                        <h6 class="text-success">Purchased</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
      <?php
        }
      } else {
        echo ("<li class='sidebar-item'><h4>No purchases found!</h4></li>");
      }
      ?>
    </ul>
  </div>

  <div class="super_container">

    <header class="header">
      <?php
      $_SESSION['callbackPage'] = 'tours.php';
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
          <div style="z-index: 1;" class="col">
            <div class="header_container d-flex flex-row align-items-center justify-content-start">

              <div class="logo_container">
                <div class="logo">
                  <div>Garvi Gujarat Tourism</div>
                  <div>travel agency</div>
                  <div class="logo_image"><img src="images/logo.png" alt=""></div>
                </div>
              </div>

              <nav class="main_nav ml-auto">
                <ul class="main_nav_list">
                  <li class="main_nav_item"><a href="index.php">Home</a></li>
                  <li class="main_nav_item"><a href="aboutus.php">About us</a></li>
                  <li class="main_nav_item active"><a href="#">Tours</a></li>
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
            <li class="menu_item menu_mm"><a href="index-2.html">Home</a></li>
            <li class="menu_item menu_mm"><a href="about.html">About us</a></li>
            <li class="menu_item menu_mm"><a href="#">Tours</a></li>
            <li class="menu_item menu_mm"><a href="tours.php">News</a></li>
            <li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
          </ul>

          <div class="menu_social_container menu_mm">
            <ul class="menu_social menu_mm">
              <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
              <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="menu_copyright menu_mm">GGT All rights reserved</div>
        </div>
      </div>
    </div>

    <div class="home">

      <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/offers.jpg" data-speed="0.8"></div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="home_content">
              <div class="home_content_inner">
                <div class="home_title">Tours</div>
                <div class="home_breadcrumbs">
                  <ul class="home_breadcrumbs_list">
                    <li class="home_breadcrumb"><a href="index-2.html">Home</a></li>
                    <li class="home_breadcrumb">Tours</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="find">

      <div class="find_background_container prlx_parent">
        <div class="find_background prlx" style="background-image:url(images/find.jpg)"></div>
      </div>

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

    <div class="offers">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section_title text-center">
              <h2>Top destinations in Gujarat</h2>
              <div>take a look at these packages</div>
            </div>
          </div>
        </div>
        <div class="row filtering_row">
          <div class="col">
            <div class="sorting_group_1">
              <ul class="item_sorting">
                <li>
                  <span class="sorting_text">Filter by</span>
                  <i class="fa fa-angle-down"></i>
                  <ul>
                    <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Show All</span></li>
                    <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                    <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Name</span></li>
                  </ul>
                </li>
                <li>
                  <span class="sorting_text">Stars</span>
                  <i class="fa fa-angle-down"></i>
                  <ul>
                    <li class="item_filter_btn" data-filter="*"><span>Show All</span></li>
                    <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Ascending</span></li>
                    <li class="item_filter_btn" data-filter=".rating_1"><span>1</span></li>
                    <li class="item_filter_btn" data-filter=".rating_2"><span>2</span></li>
                    <li class="item_filter_btn" data-filter=".rating_3"><span>3</span></li>
                    <li class="item_filter_btn" data-filter=".rating_4"><span>4</span></li>
                    <li class="item_filter_btn" data-filter=".rating_5"><span>5</span></li>
                  </ul>
                </li>
                <li>
                  <span class="sorting_text">Price</span>
                  <i class="fa fa-angle-down"></i>
                  <ul>
                    <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
                    <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                  </ul>
                </li>
                <li>
                  <span class="sorting_text">Facility</span>
                  <i class="fa fa-angle-down"></i>
                  <ul>
                    <li><span>Facility</span></li>
                    <li><span>Facility</span></li>
                    <li><span>Facility</span></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="sorting_group_2 clearfix">
              <div class="sorting_icons clearfix">
                <div class="detail_view"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <div class="box_view"><i class="fa fa-th-large" aria-hidden="true"></i></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="items item_grid clearfix">

              <form action="#" method="POST">
                <?php
                $sql = "SELECT * from tbltourpackages";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $cnt = 0;
                if ($query->rowCount() > 0) {
                  foreach ($results as $result) {

                    $_SESSION['resultLength'] = count($results);
                ?>

                    <div class="item clearfix rating_5">
                      <div class="item_image"><img style="width: calc(53vw); height: calc(52vh);" src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>" alt=""></div>
                      <div class="item_content">
                        From Rs. <input readonly style="border: 0px;" name="purchaseAmount[]" class="item_price" value="<?php echo htmlentities($result->PackagePrice); ?>">
                        <input hidden name="pkgID[]" value="<?php echo htmlentities($result->PackageId); ?>">
                        <div class="item_title"> <?php echo htmlentities($result->PackageName); ?></div>
                        <ul>
                          <li>1 person</li>
                          <li>4 nights</li>
                          <li>3 star hotel</li>
                        </ul>
                        <div class="rating rating_5" data-rating="5">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="item_text"><?php echo htmlentities($result->PackageDetails); ?>
                        </div>
                        <br><br>
                        <input type="submit" name="buyNow<?php echo $cnt ?>" id="newsletter_button" class="newsletter_button" value="Book Now">
                      </div>
                    </div>
                <?php $cnt++;
                  }
                } ?>
              </form>
            </div>
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
  <script src="plugins/greensock/TweenMax.min.js"></script>
  <script src="plugins/greensock/TimelineMax.min.js"></script>
  <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
  <script src="plugins/greensock/animation.gsap.min.js"></script>
  <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
  <script src="plugins/Isotope/isotope.pkgd.min.js"></script>
  <script src="plugins/easing/easing.js"></script>
  <script src="plugins/parallax-js-master/parallax.min.js"></script>
  <script src="js/offers_custom.js"></script>

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script>
    $(document).ready(function() {

      function toggleSidebar() {
        $(".buttonMenu").toggleClass("active");
        $("main").toggleClass("move-to-left");
        $("sidebar").toggleClass("move-to-left");
        $(".sidebar-item").toggleClass("active");

        document.getElementById('sidebar').style.visibility = document.getElementById('sidebar').style.visibility == 'visible' ? 'hidden' : 'visible';
      }

      $(".buttonMenu").on("click tap", function() {
        toggleSidebar();
      });

      $(document).keyup(function(e) {
        if (e.keyCode === 27) {
          toggleSidebar();
        }
      });

    });
  </script>

  <?php include('includes/signup.php'); ?>
  <?php include('includes/signin.php'); ?>
  <?php include('bookPackage.php'); ?>
</body>

</html>