<?php
session_start();
if(!isset($_SESSION['user_id'])){
header('location: index.php');
}
?>
<?php 
include("db_con.php");
if(isset($_REQUEST['name'])){
$sql = "SELECT * FROM shop WHERE category='$_REQUEST[name]' ";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Welcome to our Shop</title>
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
                  <div class="rd-navbar-brand"><a class="brand" href="../EcommerceProject/index.php"><img src="logo.png" style="width: 130px;"></a></div>
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
                      <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.php">About Us</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="portfolio.php">Portfolio</a>
                        <!-- RD Navbar Dropdown-->
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="blog.php">Blog</a>
                        <!-- RD Navbar Dropdown-->
                      </li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="category.php">Shop</a>
                        <!-- RD Navbar Dropdown-->
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.php">Contact Us</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="faq.php">FAQ</a>
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
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-39">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Shop</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active">Our Shop</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(images/bg-shop.jpg);"></div>
        </div>
      </section>
      <!-- Shop-->
      <section class="section section-xl bg-default">
        <div class="container">
          <div class="row row-90 justify-content-center">
            <div class="col-lg-8 col-xl-9">
              <div class="product-top-panel group-lg">
                <div class="product-top-panel-title">Showing 1–12 of 18 results</div>
                <div class="product-top-panel-select">
                  <!--Select 2-->
                  <select class="form-input select-filter" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                    <option value="1">Categories</option>
                    <option value="1">Sort by chair</option>
                    <option value="2">Sort by desk</option>
                    <option value="3">Sort by lighting</option>
                    <option value="3">Sort by decor</option>
                  </select>
                </div>
              </div>
              <div class="row row-lg row-40">
              <?php 
include('db_con.php'); 
$sql = "SELECT * FROM shop WHERE category='$_REQUEST[name]' ORDER by `id` DESC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {
 
?> 
                <div class="col-sm-6 col-md-4">
                   <!-- Product-->
                  <article class="product">
                    <div class="product-figure"><img src="app/coverphoto/<?php echo $row['coverphoto']; ?>" alt="" width="270" height="280"> 
                    
                               
                    
                      <div class="product-button"><a class="button button-md button-white button-ujarak" href="product-details.php?uin=<?php echo $row['uin']; ?>">View Product</a></div>
                    </div>
              
                    <h5 class="product-title"><a href="product-details.php?uin=<?php echo $row ['uin'];?>"><?php echo $row['productname']; ?></a></h5>
                  
                    <div class="product-price-wrap">
                      <div class="product-price">$<?php echo $row['price']; ?></div>
                    </div>
                  </article>
                </div><?php }} ?>
              </div>
              <div class="pagination-wrap">
                <!-- Bootstrap Pagination-->
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <li class="page-item page-item-control disabled"><a class="page-link" href="#" aria-label="Previous"><span class="icon" aria-hidden="true"></span></a></li>
                    <li class="page-item active"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item page-item-control"><a class="page-link" href="#" aria-label="Next"><span class="icon" aria-hidden="true"></span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-sm-10 col-md-12 col-lg-4 col-xl-3">
              <!-- RD Search Form-->
              <form class="form-search rd-search form-product-search" action="search-results.php" method="GET">
                <div class="form-wrap">
                  <label class="form-label" for="search-form">Product Search..</label>
                  <input class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                  <button class="button-search fl-bigmug-line-search74" type="submit"></button>
                </div>
              </form>
              <div class="row row-lg row-50 product-sidebar">
                <div class="col-md-6 col-lg-12">
                  <h5>Popular categories</h5>
                  <ul class="list list-shop-filter">
                    <li>
                      <label class="checkbox-inline">
                      <input name="input-group-radio" value="checkbox-1" type="checkbox">Chairs</a>
                      </label><span class="list-shop-filter-number">2</span>
                    </li>
                    <li>
                      <label class="checkbox-inline">
                        <input name="input-group-radio" value="checkbox-2" type="checkbox">Desks
                      </label><span class="list-shop-filter-number">1</span>
                    </li>
                    <li>
                      <label class="checkbox-inline">
                        <input name="input-group-radio" value="checkbox-3" type="checkbox">Lighting
                      </label><span class="list-shop-filter-number">3</span>
                    </li>
                    <li>
                      <label class="checkbox-inline">
                        <input name="input-group-radio" value="checkbox-4" type="checkbox">Decor
                      </label><span class="list-shop-filter-number">1</span>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6 col-lg-12">
                  <h5>Filter by price</h5>
                  <!-- RD Range-->
                  <div class="rd-range" data-min="0" data-max="999" data-min-diff="100" data-start="[66, 290]" data-step="1" data-tooltip="false" data-input=".rd-range-input-value-1" data-input-2=".rd-range-input-value-2"></div>
                  <div class="group-sm group-justify">
                    <div>
                      <div class="button button-md button-primary button-pipaluk">Filter</div>
                    </div>
                    <div>
                      <div class="rd-range-wrap">
                        <div class="rd-range-title">Price:</div>
                        <div class="rd-range-form-wrap">
                          <input class="rd-range-input rd-range-input-value-1" id="test" type="text" name="value-1"><span>$ </span>
                        </div>
                        <div class="rd-range-divider"></div>
                        <div class="rd-range-form-wrap">
                          <input class="rd-range-input rd-range-input-value-2" type="text" name="value-2"><span>$ </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-12">
                  <h5>Popular products</h5>
                  <div class="list-popular-product">
                   
                    
                    <div class="list-popular-product-item">
                    <?php 
include('db_con.php'); 
$sql = "SELECT * FROM shop ORDER by `id` DESC LIMIT 2";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {
 
?> 
                      <!-- Product Minimal-->
                      <article class="product-minimal unit unit-spacing-md">
                        <div class="unit-left"><a class="product-minimal-figure" href="product-details.php?uin=<?php echo $row['uin']; ?>"><img src="app/coverphoto/<?php echo $row['coverphoto']; ?>"alt="" width="108" height="100"></a></div>
                        <div class="unit-body">
                          <h6 class="product-minimal-title"><a href="single-product.php?id=<?php echo $row ['id'];?>"><?php echo $row['productname']; ?></a></h6>
                          <div class="product-minimal-price"><?php echo $row['price']; ?></div>
                        </div>
                      </article>
                    </div><?php }}?>
                  </div>
                </div>
              </div>
            </div>
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
  <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script>
   
<!-- End Google Tag Manager -->
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-c4222796-9b66-477e-a86c-2a18d0eaa83a" data-elfsight-app-lazy></div>
  </body>
</html>