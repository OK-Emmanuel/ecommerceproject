<?php
session_start();
if(!isset($_SESSION['user_id'])){
header('location: index.php');
}
?>

<?php
include('db_con.php');
$id = 1;
$sql = "SELECT * FROM adminreg WHERE id = '$id'";
$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
?>



<?php 
include("db_con.php");
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM shop WHERE uin='$_REQUEST[uin]' ";
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
                
                    <!-- RD Navbar Search-->
                    
                    <!-- RD Navbar Share-->
                  
                    <!-- <div class="rd-navbar-search">
                      <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                      <form class="rd-search" action="search-results.php" data-search-live="rd-search-results-live" method="GET">
                        <div class="form-wrap">
                          <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                          <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                          <div class="rd-search-results-live" id="rd-search-results-live"></div>
                        </div>
                        <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                      </form>
                    </div> -->
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
        <div class="breadcrumbs-custom context-dark bg-overlay-40">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Product Details</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="../index.html">Home</a></li>
              <li><a href="shop.html">Shop</a></li>
              <li class="active">About Product</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(images/bg-shop-2.jpg);"></div>
        </div>
      </section>
      <!-- Single Product-->
      <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-6">
              <div class="slick-product">
                <!-- Slick Carousel-->
                <div class="slick-slider carousel-parent" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">

                  <div class="item">
                    <div class="slick-product-figure"><img src="app/coverphoto/<?php echo $row['coverphoto']; ?>" alt="" width="530" height="480">
                    </div>
                  </div>
                </div>
                <div class="slick-slider child-carousel" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3" data-slide-to-scroll="1" data-md-vertical="true">
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="single-product">
                <h3><?php echo $row['productname']; ?></h3>
                <div class="group-md group-middle">
                  <div class="single-product-price">$<?php echo $row['price']; ?></div>
                  <div class="box-rating"><span class="icon fa fa-star"></span><span class="icon fa fa-star"></span><span class="icon fa fa-star"></span><span class="icon fa fa-star"></span><span class="icon fa fa-star-half-o"></span></div>
                </div>
                <p><?php echo $row['description']; ?></p>
                <div class="divider divider-30"></div>
                <ul class="list list-description d-inline-block d-md-block">
                  <li><span>Material:</span><span><?php echo $row['category']; ?></span></li>
                  <li><span>Weight:</span><span>15 kg</span></li>
                  <li><span>Dimensions:</span><span>60 x 60 x 90 cm</span></li>
                </ul>
                <div class="group-sm group-middle">
                <form method="POST">
                  <?php
                  error_reporting(E_ALL);
                  
                  include('db_con.php');
                  if(isset($_REQUEST['addtocart'])){
                  $uin=$row['uin'];
                  $productname=$row['productname'];
                  $price=$row['price'];
                  $quantity=$_REQUEST['quantity'];
                  $total=$price * $quantity;
                  $coverphoto=$row['coverphoto'];
                  $status='pending';

                  $user_id = $_SESSION['user_id'];

                  $check=mysqli_query($con, "SELECT * FROM cart WHERE productname='$productname'");
                                $checkrows=mysqli_num_rows($check);
                                 if($checkrows>0){
                                   echo"<script>alert('Product already exists in your cart')
                                   location.href='cart-page.php'</script>";
                                 } else {

                                  $sql="INSERT INTO cart (productname, price, quantity, total, status, coverphoto, date) VALUES ('$productname','$price','$quantity','$total','$status','$coverphoto',CURDATE())";

                                  mysqli_query($conn,$sql);
                                  echo "<script>alert('item successfully added to cart!')</script>";
                                  echo "<script>window.open('cart-page.php','_self')</script>"; 
                  }}
                  ?>
                  <div class="product-stepper">
                    <input class="for-input" type="number" name="quantity" data-zeros="true" value="1" min="1" max="1000">
                  </div>
                  <div><button type="submit" class="button button-primary button-pipaluk" name="addtocart"> Add to cart</button></div>
                </div>
                </form>
            
                <div class="divider divider-40"></div>
                <div class="group-md group-middle"><span class="social-title">Share</span>
                  <div>
                    <ul class="list-inline list-inline-sm social-list">
                      <li><a class="icon fa fa-facebook" href="#"></a></li>
                      <li><a class="icon fa fa-twitter" href="#"></a></li>
                      <li><a class="icon fa fa-google-plus" href="#"></a></li>
                      <li><a class="icon fa fa-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Bootstrap tabs-->
          <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-5">
            <!-- Nav tabs-->
            <ul class="nav nav-tabs">
              <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-5-1" data-toggle="tab">Testimonials (1)</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-5-2" data-toggle="tab">Additional information</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-5-3" data-toggle="tab">Delivery and payment</a></li>
            </ul>
            <!-- Tab panes-->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-5-1">
                <div class="box-comment">
                  <div class="unit unit-spacing-md flex-column flex-md-row align-items-lg-center">
                    <div class="unit-left"><a class="box-comment-figure" href="#"><img src="images/user-1-119x119.jpg" alt="" width="119" height="119"></a></div>
                    <div class="unit-body">
                      <div class="group-sm group-justify">
                        <div>
                          <div class="group-sm group-middle">
                            <p class="box-comment-author"><a href="#">John Doe</a></p>
                            <div class="box-rating"><span class="icon fa fa-star"></span><span class="icon fa fa-star"></span><span class="icon fa fa-star"></span><span class="icon fa fa-star"></span><span class="icon fa fa-star-half-o"></span></div>
                          </div>
                        </div>
                        <div class="box-comment-time">
                          <time datetime="2019-11-30">Nov 30, 2019</time>
                        </div>
                      </div>
                      <p class="box-comment-text">The product you delivered me has surpassed all my expectations. The item is one of the best, all-purpose items ever crafted. I love everything about my purchase. Reliable, secure, quirky, easy to clean in and out.</p>
                    </div>
                  </div>
                </div>
                <h5 class="text-spacing-100 font-weight-normal">Add Your Comment</h5>
                <form class="rd-form rd-mailform">
                  <div class="row row-14 gutters-14">
                    <div class="col-sm-6">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-4" type="text" name="name" data-constraints="@Required">
                        <label class="form-label" for="contact-your-name-4">Your Name</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-email-4" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="contact-email-4">Your E-mail</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-wrap">
                        <label class="form-label" for="contact-message-4">Message</label>
                        <textarea class="form-input textarea-lg" id="contact-message-4" name="message" data-constraints="@Required"></textarea>
                      </div>
                    </div>
                  </div>
                  <button class="button button-primary button-pipaluk" type="submit">Submit</button>
                </form>
              </div>
              <div class="tab-pane fade" id="tabs-5-2">
                <p>Here you will find more useful information about the chosen product. It’s always good to have the choice we can offer. We try to cater to the needs of each and every whimsical buyer. This product is qualitative and affordable at the same time. Take advantage of this product’s benefits and you'll see that this is exactly the product you need. Besides you can save your money on account of the lowest prices.</p>
              </div>
              <div class="tab-pane fade" id="tabs-5-3">
                <p>Here you can read some details about a nifty little lifecycle of your order's journey from the time you place your order to your new treasures arriving at your doorstep. At first you choose the product you like. Then you put into your shopping cart and pass the checkout process in a few clicks. Our store offers several payment and delivery methods, so you have an opportunity to choose which one is the most convenient for you.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Single Product-->
      <section class="section section-sm section-last bg-default">
        <div class="container">
          <h4>Related Products</h4>
          <div class="row row-40 justify-content-center">
           
            
            
           

              <article class="product">
                <div class="product-figure"><img src="app/coverphoto/<?php echo $row['coverphoto']; ?>" alt="" width="270" height="280">
                  <div class="product-button"><a class="button button-md button-white button-ujarak" href="product-details.php?uin=<?php echo $row ['uin'];?>">View Product</a></div>
                </div>
                
                <h5 class="product-title"><a href="product-details.php"><?php echo $row ['productname'];?> </a></h5>
                <div class="product-price-wrap">
                  <div class="product-price">$<?php echo $row ['price'];?></div>
                </div>
              </article>
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
                <div class="footer-brand"><a href="index.html"><img src="images/logo-inverse-190x43.png" alt="" width="190" height="43"></a></div>
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
          <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Creator</span>. All rights reserved. <a href="privacy-policy.html">Privacy Policy</a>
          </p>
        </div>
      </footer>
    </div>
    <!-- PANEL-->
  
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager --></body>
</html>