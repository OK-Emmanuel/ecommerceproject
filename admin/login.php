<?php
    session_start();
	require('db_con.php');
    
    // //this script captures a user's device
	// $device = $_SERVER['HTTP_USER_AGENT'];
// // this line of script captures a user's ip address.
// $ip = $_SERVER['REMOTE_ADDR'];
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){

		$emailadd = stripslashes($_REQUEST['email']); // removes backslashes
		$emailadd = mysqli_real_escape_string($conn,$emailadd); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn,$password);



        $query = "SELECT * FROM `adminreg` WHERE emailadd='$emailadd' AND password='$password' AND designation='CEO'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['email'] = $emailadd;
            echo '<script type="text/javascript"> window.open("../app/index.php", "_self");</script>'; // Redirect user to index.php
        } else {
            echo "<script>alert('Invalid Admin Login Credential');
            location.href='index.php';</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="image.png" type="image/x-icon">

    <!-- Google fonts -->
    <link href="../../../../../css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">

</head>
<body id="top">
<div class="page_loader"></div>

<!-- Login 11 start -->
<div class="login-11">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 bg-img">
                <div class="star-field">
                    <div class="layer"></div>
                    <div class="layer"></div>
                    <div class="layer"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 form-info">
                <div class="form-section">
                    <div class="logo clearfix">
                        <a href="index.php">
                            <img src="logo-default-interior-190x43.png" alt="logo">
                        </a>
                    </div>
                    <h3>Sign Into Your Account</h3>
                    <div class="btn-section clearfix">
                        <a href="login.php" class="link-btn active btn-1 active-bg">Login</a>
                        <a href="register.php" class="link-btn btn-2 default-bg">Register</a>
                    </div>
                    <div class="login-inner-form">
                        <form method="POST">
                            <div class="form-group form-box">
                                <input name="email" type="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                                <i class="flaticon-mail-2"></i>
                            </div>
                            <div class="form-group form-box clearfix">
                                <input name="password" type="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password">
                                <i class="flaticon-password"></i>
                            </div>
                            <div class="checkbox form-group clearfix">
                                <div class="form-check float-start">
                                    <input class="form-check-input" type="checkbox" id="rememberme">
                                    <label class="form-check-label" for="rememberme">
                                        Remember me
                                    </label>
                                </div>
                                <a href="forgot-password.php" class="link-light float-end forgot-password">Forgot your password?</a>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary btn-lg btn-theme">Login</button>
                            </div
                        </form>
                    </div>
                    <div class="social-list">
                        <div class="icon facebook">
                            <div class="tooltip">Facebook</div>
                            <span><i class="fa fa-facebook"></i></span>
                        </div>
                        <div class="icon twitter">
                            <div class="tooltip">Twitter</div>
                            <span><i class="fa fa-twitter"></i></span>
                        </div>
                        <div class="icon instagram">
                            <div class="tooltip">Google</div>
                            <span><i class="fa fa-google"></i></span>
                        </div>
                        <div class="icon github mr-0">
                            <div class="tooltip">Linkedin</div>
                            <span><i class="fa fa-linkedin"></i></span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <p class="full-none">Don't have an account? <a href="register.php" class="thembo"> Register here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 11 end -->

<!-- External JS libraries -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/app.js"></script>
<!-- Custom JS Script -->
</body>
</html>
