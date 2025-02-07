﻿<?php
session_start();
date_default_timezone_set('Africa/Lagos');
$_SESSION['user_id'] = uniqid('user_', true);
?>

<?php
include('db_con.php');
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Oluwapelumi || Ecommerce</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/fav.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="../../css?family=Poppins:400,500%7CTeko:300,400,500%7CMaven+Pro:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style-3.css" id="main-styles-link">
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic rd-navbar-classic-2" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.php"><img src="logo.png" style="width: 130px;"></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Basket-->
                    <div class="rd-navbar-basket-wrap">
                      <button class="rd-navbar-basket fl-bigmug-line-shopping198" data-rd-navbar-toggle=".cart-inline"><span>2</span></button>
                      <div class="cart-inline">
                        <div class="cart-inline-header">
                          <h5 class="cart-inline-title">In cart:<span> 2</span> Products</h5>
                          <h6 class="cart-inline-title">Total price:<span> $800</span></h6>
                        </div>
                        <div class="cart-inline-body">
                          <div class="cart-inline-item">
                            <div class="unit align-items-center">
                              <div class="unit-left"><a class="cart-inline-figure" href="single-product.php"><img src="images/product-mini-9-100x100.png" alt="" width="100" height="100"></a></div>
                              <div class="unit-body">
                                <h6 class="cart-inline-name"><a href="single-product.php">CB2 Coup Grey Office Chair</a></h6>
                                <div>
                                  <div class="group-xs group-middle-1">
                                    <div class="table-cart-stepper">
                                      <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                    </div>
                                    <h6 class="cart-inline-title">$550</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="cart-inline-item">
                            <div class="unit align-items-center">
                              <div class="unit-left"><a class="cart-inline-figure" href="single-product.php"><img src="images/product-mini-10-100x100.png" alt="" width="100" height="100"></a></div>
                              <div class="unit-body">
                                <h6 class="cart-inline-name"><a href="single-product.php">Ikea Tertial Work lamp</a></h6>
                                <div>
                                  <div class="group-xs group-middle-1">
                                    <div class="table-cart-stepper">
                                      <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                    </div>
                                    <h6 class="cart-inline-title">$250</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="cart-inline-footer">
                          <div class="group-sm"><a class="button button-md button-default-outline-2 button-wapasha" href="cart-page.php">Go to cart</a><a class="button button-md button-primary button-pipaluk" href="checkout.php">Checkout</a></div>
                        </div>
                      </div>
                    </div>
                    <!-- RD Navbar Search-->
                    <div class="rd-navbar-search">
                      <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                      <form class="rd-search" action="search-results.php" data-search-live="rd-search-results-live" method="get">
                        <div class="form-wrap">
                          <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                          <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                          <div class="rd-search-results-live" id="rd-search-results-live"></div>
                        </div>
                        <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                      </form>
                    </div>
                    <!-- RD Navbar Share-->
                    <div class="rd-navbar-share fl-bigmug-line-share27" data-rd-navbar-toggle=".rd-navbar-share-list">
                      <ul class="list-inline rd-navbar-share-list">
                        <li class="rd-navbar-share-list-item"><a class="icon fa fa-facebook" href="#"></a></li>
                        <li class="rd-navbar-share-list-item"><a class="icon fa fa-twitter" href="#"></a></li>
                        <li class="rd-navbar-share-list-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                        <li class="rd-navbar-share-list-item"><a class="icon fa fa-instagram" href="#"></a></li>
                      </ul><a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping198" href="cart-page.php"><span>2</span></a>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a>
                        <!-- RD Navbar Dropdown-->
                      <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.php">About Us</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="portfolio.php">Portfolio</a>
                        <!-- RD Navbar Dropdown-->
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="blog.php">Blog</a>
                        <!-- RD Navbar Dropdown-->
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="category.php">Shop</a>
                        <!-- RD Navbar Dropdown-->
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.php">Contact Us</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="our-services.php">Our Services</a>
                        <!-- RD Navbar Megamenu-->
                      </li>
                    </ul>
                  </div>
                  <div class="rd-navbar-project-hamburger" data-rd-navbar-toggle=".rd-navbar-main">
                    <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
                    <div class="project-close"><span></span><span></span></div>
                  </div>
                </div>
                <div class="rd-navbar-project rd-navbar-classic-project">
                  <h4 class="text-spacing-50">Our Works</h4>
                  <div class="rd-navbar-project-content rd-navbar-classic-project-content">
                    <div class="row" data-lightgallery="group">
                      <div class="col-12">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/gallery-image-1-330x240.jpg" alt="" width="330" height="240">
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/grid-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-1-330x240.jpg" alt="" width="330" height="240"></a>
                          </div>
                        </article>
                      </div>
                      <div class="col-12">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/gallery-image-2-330x240.jpg" alt="" width="330" height="240">
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-masonry-gallery-10-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-2-330x240.jpg" alt="" width="330" height="240"></a>
                          </div>
                        </article>
                      </div>
                      <div class="col-12">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/gallery-image-3-330x240.jpg" alt="" width="330" height="240">
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-3-330x240.jpg" alt="" width="330" height="240"></a>
                          </div>
                        </article>
                      </div>
                      <div class="col-12">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/gallery-image-4-330x240.jpg" alt="" width="330" height="240">
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/masonry-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-4-330x240.jpg" alt="" width="330" height="240"></a>
                          </div>
                        </article>
                      </div>
                      <div class="col-12">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/gallery-image-5-330x240.jpg" alt="" width="330" height="240">
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-masonry-gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-5-330x240.jpg" alt="" width="330" height="240"></a>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-classic swiper-slider-classic-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-direction="vertical" data-nav="false">
        <div class="swiper-wrapper text-center">
          <div class="swiper-slide swiper-slide-1 context-dark text-left" data-slide-bg="images/cozy3.jpg">
            <div class="swiper-slide-caption swiper-slide-custom section-md">
              <div class="container">
                <h1 class="swiper-title-2 oh"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="300">Create</span></h1>
                <h3 class="text-strike-1" data-caption-animate="fadeInRight" data-caption-delay="0">Interior Design</h3>
                <h2 class="oh"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="300">Coziness</span></h2><a class="button button-white-outline button-ujarak" href="portfolio.php" data-caption-animate="fadeInLeft" data-caption-delay="600">Check out our Portfolio</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/cozy2.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <h1 data-caption-animate="fadeInRight" data-caption-delay="0">Harmonious and cozy</h1>
                <p><em class="text-width-large" data-caption-animate="fadeInLeft" data-caption-delay="100">We develop individual room concepts for private and commercial use. Our team focuses on the interior design of private living rooms, hotels, offices, and more.</em></p><a class="button button-white-outline button-ujarak" href="contact-us.php" data-caption-animate="fadeInUp" data-caption-delay="200">Get in touch</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="images/cozy1.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <h1 class="oh"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">Comfy and Stylish</span></h1>
                <p><em class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">Since our establishment, our team has been creating comfortable and cozy spaces for our clients. We design people’s everyday life and work through innovative ideas.</em></p><a class="button button-white-outline button-ujarak" href="contact-us.php" data-caption-animate="fadeInLeft" data-caption-delay="200">Get in touch</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination__module">
          <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">00</span><span class="swiper-pagination__fraction-divider">/</span><span class="swiper-pagination__fraction-count">00</span></div>
          <div class="swiper-pagination__divider"></div>
          <div class="swiper-pagination"></div>
        </div>
      </section>
      <!-- Following the dream since 1999-->
      <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-md-8 col-lg-4 col-xl-6 wow fadeInLeft"><img src="images/about-2-570x449.jpg" alt="" width="570" height="449">
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="row row-30">
                <div class="col-12 oh-desktop">
                  <div class="box-info wow slideInDown">
                    <h5 class="box-info-title">Tasks of design</h5>
                    <p class="box-info-text">Interior design makes interior spaces functional, safe, and beautiful by determining and updating its vital elements.</p>
                  </div>
                </div>
                <div class="col-12 oh-desktop">
                  <div class="box-info wow slideInUp">
                    <h5 class="box-info-title">Personalized interiors</h5>
                    <p class="box-info-text">Our designers create interiors that reflect your personality, complement your mood, and improve your life.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3 oh-desktop">
              <div class="box-info wow slideInRight" data-wow-delay=".1s">
                <h5 class="box-info-title">Creative solutions</h5>
                <p class="box-info-text">We are all about creativity and it concerns everything we do to transform your house. Our approach includes:</p>
                <ul class="list-marked-3 box-info-list">
                  <li>Focus on our clients</li>
                  <li>Non-trivial ideas</li>
                  <li>Full project support</li>
                </ul><a class="button button-lg button-gray-32 button-pipaluk" href="#">Get in touch</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section Masonry Gallery-->
      <section class="section section-sm section-fluid bg-default text-center isotope-wrap">
        <div class="container">
          <div class="isotope-top-panel oh-desktop">
            <h3 class="isotope-top-panel-title"><span class="d-inline-block wow slideInDown">Latest Projects</span></h3>
            <div class="isotope-filters isotope-filters-horizontal oh-desktop">
              <button class="isotope-filters-toggle button button-md button-icon button-icon-right button-default-outline button-wapasha" data-custom-toggle="#isotope-5" data-custom-toggle-hide-on-blur="true" data-custom-toggle-disable-on-blur="true"><span class="icon fa fa-caret-down"></span>Filter</button>
              <ul class="isotope-filters-list-classic wow slideInUp" id="isotope-5">
                <li><a class="active" href="#" data-isotope-filter="*">All Works</a></li>
                <li><a href="#" data-isotope-filter="Type 1">Home design</a></li>
                <li><a href="#" data-isotope-filter="Type 2">Commercial design</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container-fluid isotope-content">
          <div class="row row-30 row-isotope isotope" data-lightgallery="group">
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item" data-filter="Type 1">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-md">
                <div class="thumbnail-mary-figure"><img src="images/fullwidth-masonry-gallery-7-420x330.jpg" alt="" width="420" height="330">
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-masonry-gallery-7-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-masonry-gallery-7-420x330.jpg" alt="" width="420" height="330"></a>
                  <h5 class="thumbnail-mary-title"><a href="single-project.php">379 Harvey Rd</a></h5>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item" data-filter="Type 2">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-md">
                <div class="thumbnail-mary-figure"><img src="images/fullwidth-masonry-gallery-8-420x330.jpg" alt="" width="420" height="330">
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/masonry-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-masonry-gallery-8-420x330.jpg" alt="" width="420" height="330"></a>
                  <h5 class="thumbnail-mary-title"><a href="single-project.php">64 James Ave</a></h5>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item" data-filter="Type 1">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-md">
                <div class="thumbnail-mary-figure"><img src="images/fullwidth-masonry-gallery-9-420x690.jpg" alt="" width="420" height="690">
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-masonry-gallery-1-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-masonry-gallery-9-420x690.jpg" alt="" width="420" height="690"></a>
                  <h5 class="thumbnail-mary-title"><a href="single-project.php">861 E. Oklahoma Dr</a></h5>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-8 col-xl-6 isotope-item" data-filter="Type 2">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-xl thumbnail-custom-mobile-1">
                <div class="thumbnail-mary-figure"><img src="images/fullwidth-masonry-gallery-10-870x330.jpg" alt="" width="870" height="330">
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-masonry-gallery-10-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-masonry-gallery-10-870x330.jpg" alt="" width="870" height="330"></a>
                  <h5 class="thumbnail-mary-title"><a href="single-project.php">14 Pulaski Str</a></h5>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item" data-filter="Type 2">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-md">
                <div class="thumbnail-mary-figure"><img src="images/fullwidth-masonry-gallery-11-420x330.jpg" alt="" width="420" height="330">
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-masonry-gallery-11-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-masonry-gallery-11-420x330.jpg" alt="" width="420" height="330"></a>
                  <h5 class="thumbnail-mary-title"><a href="single-project.php">8381 Peg Shop Str</a></h5>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 isotope-item" data-filter="Type 1">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-mary thumbnail-md">
                <div class="thumbnail-mary-figure"><img src="images/fullwidth-masonry-gallery-6-420x330.jpg" alt="" width="420" height="330">
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/fullwidth-masonry-gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/fullwidth-masonry-gallery-6-420x330.jpg" alt="" width="420" height="330"></a>
                  <h5 class="thumbnail-mary-title"><a href="single-project.php">830 Bridge Str</a></h5>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Following the dream since 2024-->
      <section class="section section-sm bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Following the dream since 2024 </span></h3>
          <div class="row row-30 justify-content-center">
            <div class="col-8 col-sm-4 wow fadeInUp">
              <div class="counter-modern">
                <div class="counter-modern-body">
                  <div class="counter-modern-number"><span class="counter">2</span>
                  </div>
                  <div class="counter-modern-decor"></div>
                  <h4 class="counter-modern-title">Design<br>awards</h4>
                </div>
              </div>
            </div>
            <div class="col-8 col-sm-4 wow fadeInUp" data-wow-delay=".1s">
              <div class="counter-modern">
                <div class="counter-modern-body">
                  <div class="counter-modern-number"><span class="counter">4</span>
                  </div>
                  <div class="counter-modern-decor"></div>
                  <h4 class="counter-modern-title">Successful<br>projects</h4>
                </div>
              </div>
            </div>
            <div class="col-8 col-sm-4 wow fadeInUp" data-wow-delay=".2s">
              <div class="counter-modern">
                <div class="counter-modern-body">
                  <div class="counter-modern-number"><span class="counter">5</span>
                  </div>
                  <div class="counter-modern-decor"></div>
                  <h4 class="counter-modern-title">Team<br>members</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Different people  — one mission-->
      <section class="section section-sm section-fluid bg-default">
        <div class="container-fluid section-lg bg-gray-4 oh">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Different people  — one mission</span></h3>
          <div class="section-relative">
            <div class="container container-custom-2">
              <!-- Owl Carousel-->
              <div class="owl-carousel owl-team" data-items="1" data-md-items="2" data-lg-items="3" data-margin="30" data-mouse-drag="false" data-nav="true" data-dots="true">
                <!-- Team Creative-->
                <article class="team-creative"><a class="team-creative-figure" href="#"><img src="images/team-4-370x366.jpg" alt="" width="370" height="366"></a>
                  <div class="team-creative-caption">
                    <h5 class="team-creative-name"><a href="#">Jill Peterson</a></h5>
                    <p class="team-creative-status">Designer</p>
                    <div class="team-creative-decor-bottom"></div>
                    <div class="team-creative-decor-left"></div>
                  </div>
                </article>
                <!-- Team Creative-->
                <article class="team-creative"><a class="team-creative-figure" href="#"><img src="images/team-5-370x366.jpg" alt="" width="370" height="366"></a>
                  <div class="team-creative-caption">
                    <h5 class="team-creative-name"><a href="#">Will O’brien</a></h5>
                    <p class="team-creative-status">Designer</p>
                    <div class="team-creative-decor-bottom"></div>
                    <div class="team-creative-decor-left"></div>
                  </div>
                </article>
                <!-- Team Creative-->
                <article class="team-creative"><a class="team-creative-figure" href="#"><img src="images/team-6-370x366.jpg" alt="" width="370" height="366"></a>
                  <div class="team-creative-caption">
                    <h5 class="team-creative-name"><a href="#">Ann Anderson</a></h5>
                    <p class="team-creative-status">Junior Designer</p>
                    <div class="team-creative-decor-bottom"></div>
                    <div class="team-creative-decor-left"></div>
                  </div>
                </article>
                <!-- Team Creative-->
                <article class="team-creative"><a class="team-creative-figure" href="#"><img src="images/team-15-370x366.jpg" alt="" width="370" height="366"></a>
                  <div class="team-creative-caption">
                    <h5 class="team-creative-name"><a href="#">Ryan Wilson</a></h5>
                    <p class="team-creative-status">Founder, senior designer</p>
                    <div class="team-creative-decor-bottom"></div>
                    <div class="team-creative-decor-left"></div>
                  </div>
                </article>
                <!-- Team Creative-->
                <article class="team-creative"><a class="team-creative-figure" href="#"><img src="images/team-16-370x366.jpg" alt="" width="370" height="366"></a>
                  <div class="team-creative-caption">
                    <h5 class="team-creative-name"><a href="#">Samuel Miller</a></h5>
                    <p class="team-creative-status">Senior Architect</p>
                    <div class="team-creative-decor-bottom"></div>
                    <div class="team-creative-decor-left"></div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Secrets of our success-->
      <section class="section section-sm bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Secrets of our success</span></h3>
          <div class="row row-40 row-sm align-items-lg-center flex-lg-row-reverse">
            <div class="col-lg-5 col-xl-6 wow fadeInRight">
              <div class="video-classic"><img src="images/video-2-570x438.jpg" alt="" width="570" height="438"><a class="video-classic-play video-classic-play-2" data-lightgallery="item" href="https://www.youtube.com/embed/e_TCFkRDmls"><span></span></a>
              </div>
            </div>
            <div class="col-lg-7 col-xl-6">
              <div class="row row-40 justify-content-center box-ordered">
                <div class="col-sm-6 col-md-5 col-lg-6 wow fadeInDown" data-wow-delay=".1s">
                  <article class="box-icon-creative">
                    <div class="box-icon-creative-header">
                      <div class="box-icon-creative-icon fl-bigmug-line-paintbrush9"></div>
                      <div class="box-icon-creative-decor"></div>
                      <div class="box-icon-creative-count box-ordered-item"></div>
                    </div>
                    <h5 class="box-icon-creative-title"><a href="single-service.php">Intuitive and easy</a></h5>
                    <p class="box-icon-creative-text">Our team focuses on designing exciting interiors that are intuitively organized.</p>
                  </article>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-6 wow fadeInDown">
                  <article class="box-icon-creative">
                    <div class="box-icon-creative-header">
                      <div class="box-icon-creative-icon fl-bigmug-line-circular224"></div>
                      <div class="box-icon-creative-decor"></div>
                      <div class="box-icon-creative-count box-ordered-item"></div>
                    </div>
                    <h5 class="box-icon-creative-title"><a href="single-service.php">Focus on our clients</a></h5>
                    <p class="box-icon-creative-text">We create all our projects with client in mind and adhere to their preferences and needs.</p>
                  </article>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-6 wow fadeInUp" data-wow-delay=".1s">
                  <article class="box-icon-creative">
                    <div class="box-icon-creative-header">
                      <div class="box-icon-creative-icon fl-bigmug-line-hot67"></div>
                      <div class="box-icon-creative-decor"></div>
                      <div class="box-icon-creative-count box-ordered-item"></div>
                    </div>
                    <h5 class="box-icon-creative-title"><a href="single-service.php">Non-trivial ideas</a></h5>
                    <p class="box-icon-creative-text">At Creator, we use the latest trends combined with innovations that give us great ideas.</p>
                  </article>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-6 wow fadeInUp">
                  <article class="box-icon-creative">
                    <div class="box-icon-creative-header">
                      <div class="box-icon-creative-icon fl-bigmug-line-chat55"></div>
                      <div class="box-icon-creative-decor"></div>
                      <div class="box-icon-creative-count box-ordered-item"></div>
                    </div>
                    <h5 class="box-icon-creative-title"><a href="single-service.php">Full project support</a></h5>
                    <p class="box-icon-creative-text">From the beginning to project completion, our team provides full support on all levels.</p>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- What people say-->
      <section class="section section-sm section-lg-bottom-10 bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">What people say</span></h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-classic owl-quote" data-items="1" data-md-items="2" data-lg-items="2" data-xl-items="3" data-margin="30" data-nav="true" data-dots="true">
            <!-- Quote Nancy-->
            <article class="quote-nancy">
              <div class="quote-nancy-content">
                <div class="quote-nancy-figure"><img src="images/testimonials-1-368x503.jpg" alt="" width="368" height="503">
                </div>
                <div class="quote-nancy-body">
                  <div class="quote-nancy-quote">
                    <h4 class="q">They have a very innovative vision</h4>
                  </div>
                  <p class="quote-nancy-text">This agency was highly recommended to me. The sensitivity, knowledge, vision and ultimate execution this firm brought to the table was tremendous. They have enormously talented designers in the team who consistently deliver the highest quality as well as aesthetically beautiful solutions for their clients.</p>
                  <div class="unit unit-spacing-sm align-items-center">
                    <div class="unit-left"><img class="img-circles" src="images/user-13-87x87.jpg" alt="" width="87" height="87">
                    </div>
                    <div class="unit-body">
                      <h5 class="quote-nancy-cite">Rupert Wood</h5>
                      <p class="quote-nancy-status">House owner</p>
                    </div>
                  </div>
                </div>
              </div>
            </article>
            <!-- Quote Nancy-->
            <article class="quote-nancy">
              <div class="quote-nancy-content">
                <div class="quote-nancy-figure"><img src="images/testimonials-2-368x503.jpg" alt="" width="368" height="503">
                </div>
                <div class="quote-nancy-body">
                  <div class="quote-nancy-quote">
                    <h4 class="q">We quickly found a common language</h4>
                  </div>
                  <p class="quote-nancy-text">I chose Creator because of their knowledge, experience and attention to detail that has proven invaluable to me in creating a superior finished project, which attracts more clients to my shop. I can surely say that their team has a gift for truly interpreting a client’s ideas and transforming them into reality.</p>
                  <div class="unit unit-spacing-sm align-items-center">
                    <div class="unit-left"><img class="img-circles" src="images/user-14-87x87.jpg" alt="" width="87" height="87">
                    </div>
                    <div class="unit-body">
                      <h5 class="quote-nancy-cite">Catherine Williams</h5>
                      <p class="quote-nancy-status">Local shop owner</p>
                    </div>
                  </div>
                </div>
              </div>
            </article>
            <!-- Quote Nancy-->
            <article class="quote-nancy">
              <div class="quote-nancy-content">
                <div class="quote-nancy-figure"><img src="images/testimonials-3-368x503.jpg" alt="" width="368" height="503">
                </div>
                <div class="quote-nancy-body">
                  <div class="quote-nancy-quote">
                    <h4 class="q">The greatest interior design experts</h4>
                  </div>
                  <p class="quote-nancy-text">Creator designed my home from top to bottom, and 5 years later I still appreciate their work. They found the most beautiful rug for my living room and designed built-in cabinetry that works perfectly. When I bought a second home, I hired them again. I recommend their team without reservation.</p>
                  <div class="unit unit-spacing-sm align-items-center">
                    <div class="unit-left"><img class="img-circles" src="images/user-15-87x87.jpg" alt="" width="87" height="87">
                    </div>
                    <div class="unit-body">
                      <h5 class="quote-nancy-cite">Sam Peterson</h5>
                      <p class="quote-nancy-status">Sales manager</p>
                    </div>
                  </div>
                </div>
              </div>
            </article>
            <!-- Quote Nancy-->
            <article class="quote-nancy">
              <div class="quote-nancy-content">
                <div class="quote-nancy-figure"><img src="images/testimonials-3-368x503.jpg" alt="" width="368" height="503">
                </div>
                <div class="quote-nancy-body">
                  <div class="quote-nancy-quote">
                    <h4 class="q">You’ve done an amazing job!</h4>
                  </div>
                  <p class="quote-nancy-text">The team of Creator knew how to translate my desires into a unique architectural design, one that makes me feel at ease with the different characteristics that identify me and what I do, something all clients surely seek. They have an immense potential for creative ideas and I’m glad to recommend them.</p>
                  <div class="unit unit-spacing-sm align-items-center">
                    <div class="unit-left"><img class="img-circles" src="images/user-21-87x87.jpg" alt="" width="87" height="87">
                    </div>
                    <div class="unit-body">
                      <h5 class="quote-nancy-cite">Samantha Brown</h5>
                      <p class="quote-nancy-status">Freelancer</p>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>
      <!-- Latest blog posts-->
      <section class="section section-sm section-last bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Latest blog posts</span></h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-posts owl-posts-2" data-items="1" data-md-items="2" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut">
            <!-- Post Aria-->
            <article class="post post-aria post-aria-2"><a class="post-aria-figure" href="blog-post.php"><img src="images/post-24-570x492.jpg" alt="" width="570" height="492"></a>
              <div class="post-aria-footer">
                <h4 class="post-aria-title"><a href="blog-post.php">Arched Book Shelves, Doorways, and Windows</a></h4>
                <div class="post-aria-time">
                  <time datetime="2019-05-17">May 17, 2019</time>
                </div>
                <ul class="list-inline group-sm post-aria-list-social">
                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                  <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>
              </div>
            </article>
            <!-- Post Aria-->
            <article class="post post-aria post-aria-2"><a class="post-aria-figure" href="blog-post.php"><img src="images/post-25-570x492.jpg" alt="" width="570" height="492"></a>
              <div class="post-aria-footer">
                <h4 class="post-aria-title"><a href="blog-post.php">Top 5 affordable ideas for designing your office</a></h4>
                <div class="post-aria-time">
                  <time datetime="2019-05-12">May 12, 2019</time>
                </div>
                <ul class="list-inline group-sm post-aria-list-social">
                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                  <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>
              </div>
            </article>
            <!-- Post Aria-->
            <article class="post post-aria post-aria-2"><a class="post-aria-figure" href="blog-post.php"><img src="images/post-22-570x492.jpg" alt="" width="570" height="492"></a>
              <div class="post-aria-footer">
                <h4 class="post-aria-title"><a href="blog-post.php">Here are the most stylish colors for next spring</a></h4>
                <div class="post-aria-time">
                  <time datetime="2019-05-17">May 17, 2019</time>
                </div>
                <ul class="list-inline group-sm post-aria-list-social">
                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                  <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>
              </div>
            </article>
            <!-- Post Aria-->
            <article class="post post-aria post-aria-2"><a class="post-aria-figure" href="blog-post.php"><img src="images/post-23-570x492.jpg" alt="" width="570" height="492"></a>
              <div class="post-aria-footer">
                <h4 class="post-aria-title"><a href="blog-post.php">Popular Décor Trends you surely need to know about</a></h4>
                <div class="post-aria-time">
                  <time datetime="2019-05-12">May 12, 2019</time>
                </div>
                <ul class="list-inline group-sm post-aria-list-social">
                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                  <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>
              </div>
            </article>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="section section-fluid footer-classic footer-classic-2">
        <div class="container-fluid">
          <div class="row row-30 justify-content-center">
            <div class="col-md-10 col-lg-12 col-xl-4 wow fadeInRight">
              <div class="box-footer box-footer-small">
                <div class="footer-brand"><a href="index.php"><img src="logo.png" alt="" width="190" height="43"></a></div>
                <p class="text-width-medium">Our design studio helps clients make wise decisions and avoid costly mistakes. Allow our designers and architectors to make your dream space a reality.</p>
                <div class="contact-classic">
                  <div class="contact-classic-item">
                    <div class="unit align-items-center">
                      <div class="unit-left">
                        <h6 class="contact-classic-title">Address</h6>
                      </div>
                      <div class="unit-body contact-classic-link"><a href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></div>
                    </div>
                  </div>
                  <div class="contact-classic-item">
                    <div class="unit align-items-center">
                      <div class="unit-left">
                        <h6 class="contact-classic-title">Phones</h6>
                      </div>
                      <div class="unit-body contact-classic-link"><a href="tel:#">+1 323-913-4688</a>, <a href="tel:#"> +1 323-888-4554</a>
                      </div>
                    </div>
                  </div>
                  <div class="contact-classic-item">
                    <div class="unit align-items-center">
                      <div class="unit-left">
                        <h6 class="contact-classic-title">E-mails</h6>
                      </div>
                      <div class="unit-body contact-classic-link"><a href="mailto:#"> info@demolink.org</a>, <a href="mailto:#"> mail@demolink.org</a>
                      </div>
                    </div>
                  </div>
                </div>
                <ul class="list-inline list-inline-sm footer-social-list">
                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                  <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
              <div class="box-footer">
                <h3 class="font-weight-normal">Questions? Contact Us</h3>
                <form class="rd-form rd-mailform"  data-form-type="contact" method="post"  enctype="multipart/form-data">
                  
                <?php
                        // date_default_timezone_set('Lagos/Africa');
                        include("db_con.php");
                        error_reporting(E_ALL);
                        if(isset($_REQUEST["submit"])){
                          $fullname=$_REQUEST['fullname'];
                          $emailadd=$_REQUEST['emailadd'];
                          $message=$_REQUEST['message'];
                          
                          $sql= "INSERT INTO landingpage(fullname, emailadd, `message`) VALUES ('$fullname', '$emailadd', '$message')";

                          mysqli_query($conn, $sql) or die(mysqli_error($conn));
                          $num=mysqli_insert_id($conn);
                          if(mysqli_affected_rows($conn) !=1){
                              $messages = "Error Inserting record into database";
                          }
                          else{
                          echo "<script>alert('Dear $fullname, you have successfully subscribed to the newsletter.')</script>";}
                       }
                        ?>
                  <div class="form-wrap">
                    <input class="form-input" id="contact-name-6" type="text" name="fullname" data-constraints="@Required">
                    <label class="form-label" for="contact-name-6">Name</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input" id="contact-email-6" type="email" name="emailadd" data-constraints="@Email @Required">
                    <label class="form-label" for="contact-email-6">E-mail</label>
                  </div>
                  <div class="form-wrap">
                    <label class="form-label" for="contact-message-6">Message</label>
                    <textarea class="form-input" id="contact-message-6" name="message" data-constraints="@Required"></textarea>
                  </div>
                  <button class="button button-block button-ujarak button-primary" name='submit' type="submit">Send Message</button>
                </form>
              </div>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
              <div class="box-footer">
                <h3 class="font-weight-normal">See how we work</h3>
                <ul class="footer-list-category">
                  <li class="heading-5"><a href="#">Home design<span><a href="../EcommerceProject/admin/login.php" ></a></span></a></li>
                  <li class="heading-5"><a href="#">Commercial design<span></span></a></li>
                  <li class="heading-5"><a href="#">Office design<span></span></a></li>
                  <li class="heading-5"><a href="#">Consultations<span></span></a></li>
                  <li class="heading-5"><a href="#">Architect services<span></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="container footer-bottom-panel wow fadeInUp">
          <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Creator</span>. All rights reserved. <a href="privacy-policy.html">Privacy Policy</a>
          </p>
        </div>
      </footer>
    </div>    
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  <div class="elfsight-app-c4222796-9b66-477e-a86c-2a18d0eaa83a" data-elfsight-app-lazy></div>  
</body>
</html>