﻿<?php
include('session_manager.php');
include('db_con.php');
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>About Us</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/fav.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="../../css?family=Poppins:400,500%7CTeko:300,400,500%7CMaven+Pro:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">  
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
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="../EcommerceProject/index.php"><img src="logo.png" style="width: 130px;" alt="" width="190" height="43"></a></div>
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
                      <form class="rd-search" action="search-results.php" data-search-live="rd-search-results-live" method="GET">
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
                      <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                        <!-- RD Navbar Dropdown-->
                      </li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="about-us.php">About Us</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="portfolio.php">Portfolio</a>
                        <!-- RD Navbar Dropdown-->
                        <li class="rd-nav-item"><a class="rd-nav-link" href="blog.php">Blog</a>
                          <!-- RD Navbar Dropdown-->
                        </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="category.php">Shop</a>
                        <!-- RD Navbar Dropdown-->
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.php">Contact Us</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="faq.php">Faq</a>
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
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">About Us</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active">About Us</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(images/bg-about.jpg);"></div>
        </div>
      </section>
      <!-- Why choose us-->
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 justify-content-center align-items-xl-center">
            <div class="col-md-10 col-lg-5 col-xl-6"><img src="images/about-1-519x564.jpg" alt="" width="519" height="564">
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
              <h1 class="text-spacing-25 font-weight-normal title-opacity-9">Why choose us</h1>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Experience</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Skills</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">Mission</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    <p>Creator is an internationally recognized and award-winning interior design firm with expertise in residential, commercial, hospitality, retail, healthcare and beauty projects.</p>
                    <!-- Linear progress bar-->
                    <article class="progress-linear progress-secondary">
                      <div class="progress-header">
                        <p>Interior Design</p>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear"><span class="progress-value">79</span><span class="progress-marker"></span></div>
                      </div>
                    </article>
                    <!-- Linear progress bar-->
                    <article class="progress-linear progress-orange">
                      <div class="progress-header">
                        <p>3d modeling</p>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear"><span class="progress-value">72</span><span class="progress-marker"></span></div>
                      </div>
                    </article>
                    <!-- Linear progress bar-->
                    <article class="progress-linear">
                      <div class="progress-header">
                        <p>Architecture</p>
                      </div>
                      <div class="progress-bar-linear-wrap">
                        <div class="progress-bar-linear"><span class="progress-value">88</span><span class="progress-marker"></span></div>
                      </div>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-2">
                    <div class="row row-40 justify-content-center text-center inset-top-10">
                      <div class="col-sm-4">
                        <!-- Circle Progress Bar-->
                        <div class="progress-bar-circle" data-value="0.87" data-gradient="#ec7575" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                        <p class="progress-bar-circle-title">Interior Design</p>
                      </div>
                      <div class="col-sm-4">
                        <!-- Circle Progress Bar-->
                        <div class="progress-bar-circle" data-value="0.74" data-gradient="#e7a855" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                        <p class="progress-bar-circle-title">Architecture</p>
                      </div>
                      <div class="col-sm-4">
                        <!-- Circle Progress Bar-->
                        <div class="progress-bar-circle" data-value="0.99" data-gradient="#50ba87" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                        <p class="progress-bar-circle-title">Space Planning</p>
                      </div>
                    </div>
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Get in touch</a><a class="button button-width-xl-310 button-default-outline button-wapasha" href="#">Download presentation</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-3">
                    <p>Our mission is simple—working with people to create beautiful homes and environments through inspiration and design. We will take the time to understand you and your project, and then design a plan that suits you.</p>
                    <div class="text-center text-sm-left offset-top-30">
                      <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                        <li>Interior design</li>
                        <li>Space planning</li>
                        <li>Decorating services</li>
                        <li>Paint consultations</li>
                        <li>Furniture selections</li>
                        <li>Room layouts</li>
                      </ul>
                    </div>
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Get in touch</a><a class="button button-width-xl-310 button-default-outline button-wapasha" href="#">Download presentation</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest   s-->
      <section class="section section-sm section-fluid bg-default">
        <div class="container">
          <h3>Project timeline</h3>
        </div>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-nav="true" data-dots="true" data-autoplay="false">
       
          <div class="owl-item">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary thumbnail-md">
              <div class="thumbnail-mary-figure"><img src="images/project-6-420x308.jpg" alt="" width="420" height="308">
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/project-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/project-6-420x308.jpg" alt="" width="420" height="308"></a>
              </div>
            </article>
            <div class="thumbnail-mary-description">
              <h5 class="thumbnail-mary-project"><a href="single-project.php">Small Kitchen</a></h5><span class="thumbnail-mary-decor"></span>
              <h5 class="thumbnail-mary-time">
                <time datetime="2019">2019</time>
              </h5>
            </div>
          </div>
        </div>
      </section>
      <!-- What people Say-->
      <section class="section section-sm section-last bg-default">
        <div class="container">
          <h3>What people Say</h3>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true" data-animation-in="fadeIn" data-animation-out="fadeOut">
            <!-- Quote Lisa-->
            <article class="quote-lisa">
              <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-16-100x100.jpg" alt="" width="100" height="100"></a>
                <div class="quote-lisa-text">
                  <p class="q">I chose Creator because of their knowledge, experience and attention to detail that has proven invaluable to me in creating a superior finished project, which attracts more clients to my shop. I can surely say that their team has a gift for truly interpreting a client’s ideas and transforming them into reality.</p>
                </div>
                <h5 class="quote-lisa-cite"><a href="#">Catherine Williams</a></h5>
                <p class="quote-lisa-status">Local shop owner</p>
              </div>
            </article>
            <!-- Quote Lisa-->
            <article class="quote-lisa">
              <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-17-100x100.jpg" alt="" width="100" height="100"></a>
                <div class="quote-lisa-text">
                  <p class="q">This agency was highly recommended to me. The sensitivity, knowledge, vision and ultimate execution this firm brought to the table was tremendous. They have enormously talented designers in the team who consistently deliver the highest quality as well as aesthetically beautiful solutions for their clients.</p>
                </div>
                <h5 class="quote-lisa-cite"><a href="#">Rupert Wood</a></h5>
                <p class="quote-lisa-status">House owner</p>
              </div>
            </article>
            <!-- Quote Lisa-->
            <article class="quote-lisa">
              <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles" src="images/user-18-100x100.jpg" alt="" width="100" height="100"></a>
                <div class="quote-lisa-text">
                  <p class="q">Your professional guidance gave me results that far exceeded my expectations. My clients thoroughly enjoy the fun, relaxing ambience that the interior design creates. Thank you for helping me bring my ideas to life and transform my own workspace into something new and awesome!</p>
                </div>
                <h5 class="quote-lisa-cite"><a href="#">Samantha Brown</a></h5>
                <p class="quote-lisa-status">Freelancer</p>
              </div>
            </article>
          </div>
        </div>
      </section>
      <!-- Counter Classic-->
      <section class="section section-fluid bg-default">
        <div class="parallax-container" data-parallax-img="images/bg-counter-2.jpg">
          <div class="parallax-content section-xl context-dark bg-overlay-26">
            <div class="container">
              <div class="row row-50 justify-content-center border-classic">
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">12</span>
                    </div>
                    <h5 class="counter-classic-title">Design awards</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">194</span>
                    </div>
                    <h5 class="counter-classic-title">Projects</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">2</span><span class="symbol">k</span>
                    </div>
                    <h5 class="counter-classic-title">Designed interiors</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">25</span>
                    </div>
                    <h5 class="counter-classic-title">Team members</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our clients-->
      <section class="section section-xl bg-default">
        <div class="container">
          <h3>Our clients</h3>
          <div class="row row-30 row-sm">
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInDown" data-wow-delay=".3s"><a class="clients-classic" href="#"><img src="images/clients-1-270x145.png" alt="" width="270" height="145"></a></div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInDown" data-wow-delay=".2s"><a class="clients-classic" href="#"><img src="images/clients-2-270x145.png" alt="" width="270" height="145"></a></div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInDown" data-wow-delay=".1s"><a class="clients-classic" href="#"><img src="images/clients-3-270x145.png" alt="" width="270" height="145"></a></div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInDown"><a class="clients-classic" href="#"><img src="images/clients-4-270x145.png" alt="" width="270" height="145"></a></div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInUp"><a class="clients-classic" href="#"><img src="images/clients-5-270x145.png" alt="" width="270" height="145"></a></div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInUp" data-wow-delay=".1s"><a class="clients-classic" href="#"><img src="images/clients-6-270x145.png" alt="" width="270" height="145"></a></div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInUp" data-wow-delay=".2s"><a class="clients-classic" href="#"><img src="images/clients-7-270x145.png" alt="" width="270" height="145"></a></div>
            <div class="col-sm-6 col-md-4 col-xl-3 wow fadeInUp" data-wow-delay=".3s"><a class="clients-classic" href="#"><img src="images/clients-8-270x145.png" alt="" width="270" height="145"></a></div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="section section-fluid footer-classic">
        <div class="container-fluid">
          <div class="row row-30 justify-content-center">
            <div class="col-md-10 col-lg-12 col-xl-4 wow fadeInRight">
              <div class="box-footer box-footer-small">
                <div class="footer-brand"><a href="index.html"><img src="logo.png" alt="" width="190" height="43"></a></div>
                <p class="text-width-medium">Our design studio helps clients make wise decisions and avoid costly mistakes. Allow our designers and architectors to make your dream space a reality.</p>
                <div class="contact-classic">
                  <div class="contact-classic-item">
                    <div class="unit align-items-center">
                      <div class="unit-left">
                        <h6 class="contact-classic-title">Address</h6>
                      </div>
                      <div class="unit-body contact-classic-link"><a href="#">NO14, Agbajopo Quarters, Ilupeju, Apata, Ibadan</a></div>
                    </div>
                  </div>
                  <div class="contact-classic-item">
                    <div class="unit align-items-center">
                      <div class="unit-left">
                        <h6 class="contact-classic-title">Phones</h6>
                      </div>
                      <div class="unit-body contact-classic-link"><a href="tel:#">+234 8169759929</a>
                      </div>
                    </div>
                  </div>
                  <div class="contact-classic-item">
                    <div class="unit align-items-center">
                      <div class="unit-left">
                        <h6 class="contact-classic-title">E-mails</h6>
                      </div>
                      <div class="unit-body contact-classic-link"><a href="mailto:#">Ibigbemipelumi@gmail.com</a>
                      </div>
                    </div>
                  </div>
                </div>
                <ul class="list-inline list-inline-sm footer-social-list">
                  <li><a class="icon fa fa-facebook" href="https://www.facebook.com/ibigbemi.pelumi?mibextid=ZbWKwL"></a></li>
                  <li><a class="icon fa fa-twitter" href="https://twitter.com/Emmakulate11?t=MNPGESB89vMqhvzdU2bKsQ&s=08"></a></li>
                  <li><a class="icon fa fa-linkedin" href="https://www.linkedin.com/in/ibigbemi-pelumi-8b5b821b2"></a></li>
                  <li><a class="icon fa fa-instagram" href="https://www.instagram.com/emma_kulate001?igsh=MTh5bjR5MDM2bGRhaw=="></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".1s">
              <div class="box-footer">
                <h3 class="font-weight-normal">Questions? Contact Us</h3>
                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-name-6" type="text" name="name" data-constraints="@Required">
                    <label class="form-label" for="contact-name-6">Name</label>
                  </div>
                  <div class="form-wrap">
                    <input class="form-input" id="contact-email-6" type="email" name="email" data-constraints="@Email @Required">
                    <label class="form-label" for="contact-email-6">E-mail</label>
                  </div>
                  <div class="form-wrap">
                    <label class="form-label" for="contact-message-6">Message</label>
                    <textarea class="form-input" id="contact-message-6" name="message" data-constraints="@Required"></textarea>
                  </div>
                  <button class="button button-block button-ujarak button-secondary" type="submit">Send Message</button>
                </form>
              </div>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay=".2s">
              <div class="box-footer">
                <h3 class="font-weight-normal">See how we work</h3>
                <ul class="footer-list-category">
                  <li class="heading-5"><a href="#">Home design<span></span></a></li>
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
          <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Oluwapelumi</span>. All rights reserved. <a href="privacy-policy.php">Privacy Policy</a>
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
  </body>
</html>