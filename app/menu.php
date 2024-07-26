<?php include("db_con.php"); ?>
    <!-- GLOBAL-LOADER -->
    <!-- <div id="global-loader">
        <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
    </div> -->
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.php">
                            <img src="assets/images/brand/logo-white.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="assets/images/brand/logo-dark.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-lg-block">
                           <form action="search.php" method="post">
                             <input type="text" class="form-control" id="typehead" placeholder="Search for members..." name="search" required>
                           <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </form>
                        </div>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- COUNTRY -->
                                        <div class="d-flex">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- CART -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        <!-- FULL-SCREEN -->
                                        <div class="dropdown  d-flex notifications">
                                            <a class="nav-link icon" data-bs-toggle="dropdown"><i
                                                    class="fe fe-bell"></i><span class=" pulse"></span>
                                            </a>
                                        </div>
                                        <!-- MESSAGE-BOX -->
                                        <div class="dropdown d-flex header-settings">
                                            <a href="javascript:void(0);" class="nav-link icon"
                                                data-bs-toggle="sidebar-right" data-target=".sidebar-right">
                                                <i class="fe fe-align-right"></i>
                                            </a>
                                        </div>
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="../passport/<?php echo $session_passport?>" alt="profile-user"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold"> <?php echo $session_fullname?></h5>
                                                        <small class="text-muted"><?php echo $session_designation ?></small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="profile.php">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                </a>
                                                <a class="dropdown-item" href="email-inbox.html">
                                                    <i class="dropdown-icon fe fe-mail"></i> Inbox
                                                    <span class="badge bg-danger rounded-pill float-end">5</span>
                                                </a>
                                                <a class="dropdown-item" href="lockscreen.html">
                                                    <i class="dropdown-icon fe fe-lock"></i> Lockscreen
                                                </a>
                                                <a class="dropdown-item" href="logout.php">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                </a>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="index.php">
                <img src="logos.png" class="header-brand-img desktop-logo" alt="logo" style="height: 70px;">
                <img src="logos.png" class="header-brand-img toggle-logo" alt="logo" style="height: 70px;">
                <img src="logos.png" class="header-brand-img light-logo" alt="logo" style="height: 70px;">
                <img src="logos.png" class="header-brand-img light-logo1" alt="logos" style="height: 70px;">
            </a>
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.php"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="sub-category">
                    <h3>ADMIN</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="send_bulk_mail.php"><i class="side-menu__icon fe fe-mail"></i><span class="side-menu__label">Send Bulk Mail</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">E Commerce</span><i class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="view-product.php" class="slide-item"> view All Product</a></li>
                        <li><a  data-bs-toggle="modal" data-bs-target="#category" data-bs-whatever="@mdo"class="slide-item"> Product Category</a></li>
                        <li><a href="add-product.php" class="slide-item"> Add Product</a></li>
                        <li><a href="customers.php" class="slide-item">View all Customers</a></li>
                        <li><a href="reviews.php" class="slide-item"> Reviews</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="add-new-blog.php"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Add Blog</span></a>
                </li>
            </ul>
            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>

            <!--/APP-SIDEBAR-->

            
    <!-- Input modal -->
    <div class="modal fade" id="Addnewmember">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">               
                <div class="modal-body">
                    <!-- The modal form starts here! -->
                <form method="post" enctype="multipart/form-data">
                    <!-- My SQL statement starts here! -->

                    <?php 
                    date_default_timezone_set('Africa/Lagos');
                    $rand=rand(1000,9999);
                    $today=date('h');
                    $today1=date('his');
                    $UID= $today.$rand;
                    $password=$today1.$rand;
                    include("db_con.php");
                    error_reporting(E_ALL);
                    if(isset($_REQUEST['Addnewmember'])){
                        $uin=$_REQUEST['uin'];
                        $businessname=$_REQUEST['businessname'];
                        $emailaddress=$_REQUEST['emailaddress'];
                        $paddress=$_REQUEST['paddress'];
                        $category=$_REQUEST['category'];
                        $businesstype=$_REQUEST['businesstype'];
                        $ownername=$_REQUEST['ownername'];
                        $phonenumber=$_REQUEST['phonenumber'];
                        $password=$_REQUEST['password'];
                        $status=$_REQUEST['status'];
                        $dob=$_REQUEST['dob'];
                        $radio=$_REQUEST['radio'];

                          //This script controls the passport
                           $passport = $_FILES['passport']['name'];
                            $target="passport/";
                            $target=$target.$_FILES['passport']['name'];

                             //this script checks for duplicate data
                             $check=mysqli_query($conn, "SELECT * FROM memberreg WHERE uin='$uin' OR phonenumber='$phonenumber' OR emailaddress='$emailaddress'");
                             $checkrows=mysqli_num_rows($check);
                              if($checkrows>0){
                                echo"<script>alert('This user already exists in Database')</script>";}
                                else{

                                       if(move_uploaded_file( $_FILES['passport']['tmp_name'], $target)>0){

                                        $sql = "INSERT INTO memberreg ( uin, businessname, emailaddress, paddress, category, businesstype, ownername, phonenumber, password, status, dob, radio, passport) VALUES ('$uin','$businessname','$emailaddress','$paddress','$category','$businesstype', '$ownername', '$phonenumber', '$password', '$status', '$dob', '$radio', '$passport')";

                                        mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                        $num=mysqli_insert_id($conn);
                                        if(mysqli_affected_rows($conn) !=1){
                                            $message= "Error Inserting record into database";
                                        }
                                        echo "<script>alert('Dear $ownername, your record has been succesfully submited into the database.')
                                        location.href='#'</script>";}
                                  }}?>

                <input type="hidden" name="uin" value="<?php echo $UID; ?>">
                        <div class="form-group form-box">
                            <input name="businessname" type="text" class="form-control" placeholder="Business Name" aria-label="Full Name">
                            <i class="flaticon-user"></i>
                        </div>

                        <div class="form-group form-box">
                            <input name="emailaddress" type="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                            <i class="flaticon-mail-2"></i>
                        </div>

                        <div class="form-group form-box">
                            <input name="paddress" type="text" class="form-control" placeholder="Postal Address" aria-label="Postal Address">
                            <!-- <i class="flaticon-house-2"></i> -->
                        </div>

                        <div class="form-group form-box clearfix">
                            <select name="category" class="form-control">
                                <option value="">--Which Category do you belong to?--</option>
                                <!-- <option value="Fashion">Fashion</option>
                                <option value="Buying and Selling">Buying and Selling</option> -->
                                <?php 
                                    $category ="Fashion, Buying and Selling, Artisan, Logistics, Craft, Event decoration";
                                    $arrcategory= explode(",", $category);
                                    for ($x=0; $x<=5; $x++){
                                        $value=trim($arrcategory[$x]);
                                        echo"<option value=\"$value\">$value</option>";
                                    }
                                    ?>
                              </select>
                        </div>

                        <div class="form-group form-box">
                            <input name="businesstype" type="text" class="form-control" placeholder="Business Service" aria-label="Business Service">
                            <!-- <i class="flaticon-mail-2"></i> -->
                        </div>

                        <div class="form-group form-box">
                            <label>Upload Your Passport here:</label>
                            <input name="passport" type="file" class="form-control">
                            <!-- <i class="flaticon-mail-2"></i> -->
                        </div>

                        <div class="form-group form-box">
                            <input name="ownername" type="text" class="form-control" placeholder="Name Of Business Owner">
                            <!-- <i class="flaticon-mail-2"></i> -->
                        </div>

                        <div class="form-group form-box">
                            <input name="phonenumber" type="number" class="form-control" placeholder="Phone Number">
                            <!-- <i class="flaticon-phone-2"></i> -->
                        </div>

                        <div class="form-group form-box clearfix">
                            <input name="password" type="hidden" value="<?php echo $rand; ?>">
                        </div>

                        <div class="form-group form-box clearfix">
                            <select name="status" class="form-control">
                                <option value="">--Select Status--</option>
                                <!-- <option value="Married">Married</option>
                                <option value="Single">Single</option> -->
                                <?php 
                                    $status ="Married, Single, Divorced, Widowed, Taken for granted";
                                    $arrstatus= explode(",", $status);
                                    for ($x=0; $x<=4; $x++){
                                        $value=trim($arrstatus  [$x]);
                                        echo"<option value=\"$value\">$value</option>";
                                    }
                                    ?>
                              </select>
                        </div>

                        <div class="form-group form-box clearfix">
                        <label for="recipient-name" class="col-form-label">Registration Date</label>
                            <input type="date" class="form-control" name="dob">
                        </div>

                        <div class="form-group form-box clearfix">
                            <label>Is your Business registered with CAC?</label><br>
                            <input type="radio" name="radio" value="yes">Yes
                            <input type="radio" value="no" name="radio"> No
                        </div>
                        <div class="form-group checkbox clearfix">
                            <div class="clearfix float-start">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberme">
                                    <label class="form-check-label" for="rememberme">
                                        I agree to the terms of service
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-theme btn-pill btn-block" name="Addnewmember"><span>Register</span></button>
                        </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
    <!-- End Input modal -->
    <div class="modal fade" id="category">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">New message to @mdo</h6>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data">
                        <?php
                          $rand=rand(100000,999999);
                        include('db_con.php');
                       if(isset($_REQUEST['submit'])){
                        $uin=$_REQUEST['uin'];
                        $name=trim(addslashes($_REQUEST['name']));
                        $catdescription=trim(addslashes($_REQUEST['catdescription']));

                        $catimage = $rand.$_FILES["catimage"]['name'];
                        $targetphoto="catimage/";
                        $targetphoto=$targetphoto.$rand.$_FILES["catimage"]['name'];

                        
                              if(move_uploaded_file($_FILES["catimage"]['tmp_name'], $targetphoto)>0){

                        $sql="INSERT INTO category (uin, `name`, catimage, catdescription) VALUES ('$uin','$name','$catimage','$catdescription')";
                        mysqli_query($conn, $sql) or die(mysqli_error($conn));
                        $num=mysqli_insert_id($conn);
                        if(mysqli_affected_rows($conn) !=1){
                            $message= "Error uploading product";
                        }
                        echo "<script>alert('product sucessfully uploaded.')</script>";
                     }}
                    ?>
                    <div class="mb-3" hidden>
                        <!-- <label for="recipient-name" class="col-form-label">Name:</label> -->
                        <input type="text" class="form-control"  name="uin" value="<?php echo $rand; ?>">
                      </div>

                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="recipient-name" name="name">
                      </div>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Category image:</label>
                        <input type="file" class="form-control" id="recipient-name" name="catimage">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Descrption:</label>
                        <textarea class="form-control" id="message-text" name="catdescription"></textarea>
                      </div>
                  
                  </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-success" type="submit" name="submit">Submit</button>
                    <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>