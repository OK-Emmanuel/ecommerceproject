<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Registration Page</title>
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
                    <h3>Create An Account</h3>
                    <div class="btn-section clearfix">
                        <a href="login.php" class="link-btn active btn-1 default-bg">Login</a>
                        <a href="register.php" class="link-btn btn-2 active-bg">Register</a>
                    </div>
                    <div class="login-inner-form">
                        <form method="POST" enctype="multipart/form-data">
                            <?php
                            $rand= rand(100000,999999);
                            include('db_con.php');
                            if(isset($_REQUEST['submit'])){
                                $uin=$_REQUEST['uin'];
                                $fullname=$_REQUEST['fullname'];
                                $emailadd=$_REQUEST['emailadd'];
                                $phone=$_REQUEST['phone'];
                                $gender=$_REQUEST['gender'];
                                $designation=$_REQUEST['designation'];
                                $password = $_REQUEST['password'];

                                $passport=$_FILES["passport"]['name'];
                                $target="passport/";
                                $target=$target.$_FILES["passport"]['name'];

                                $check=mysqli_query($conn, "SELECT * FROM adminreg WHERE `phone`='$phone' OR emailadd='$emailadd'");
                                $checkrows=mysqli_num_rows($check);
                                 if($checkrows>0){
                                   echo"<script>alert('This user already exists in Database')</script>";}
                                   else{

                                    if(move_uploaded_file( $_FILES["passport"]['tmp_name'], $target)>0){

                                        $sql = "INSERT INTO adminreg ( uin, fullname, emailadd, phone, gender, designation, `password`, passport) VALUES ('$uin','$fullname', '$emailadd', '$phone', '$gender', '$designation', '$password', '$passport')";

                                        mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                        $num=mysqli_insert_id($conn);
                                        if(mysqli_affected_rows($conn) !=1){
                                            $message= "Error Inserting record into database";
                                        }
                            }
                            
                            echo "<script>alert('Dear $fullname, your request has been successfully submitted.')</script>";
                         }
}
                            ?>
                            <input type="hidden" name='uin' value="<?php echo $rand; ?>">
                            <div class="form-group form-box">
                                <input name="fullname" type="text" class="form-control" placeholder="Full Name" aria-label="Full Name">
                                <i class="flaticon-user"></i>
                            </div>
                            <div class="form-group form-box">
                                <input name="emailadd" type="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                                <i class="flaticon-mail-2"></i>
                            </div>
                            <div class="form-group form-box">
                                <input name="phone" type="tel" class="form-control" placeholder="Phone Number" aria-label="Phone Number">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="form-group form-box">
                                <select name="gender" id="gender" class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                <i class="flaticon-gender"></i>
                            </div>
                            <div class="form-group form-box">
                                <input name="passport" id="passport" type="file" class="form-control" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" aria-label="Passport Document">
                                <i class="flaticon-file"></i>
                            </div>
                            <div class="form-group form-box">
                                <input name="designation" type="text" class="form-control" placeholder="Designation" aria-label="Designation">
                                <i class="flaticon-employee"></i>
                            </div>
                            <div class="form-group form-box">
                                <input name="password" type="text" class="form-control" aria-label="Password" placeholder="Enter Password">
                                <!-- <i class="flaticon-employee"></i> -->
                            </div>
                            <div class="form-group form-box">
                                <input name="registration" type="date" class="form-control" placeholder="Date of Registration" aria-label="Date of Registration">
                                <i class="flaticon-calendar"></i>
                            </div>
                            
                            <div class="form-group checkbox clearfix">
                                <div class="clearfix float-start">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terms">
                                        <label class="form-check-label" for="terms">
                                            I agree to the terms of service
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" name='submit' class="btn btn-primary btn-lg btn-theme">Register</button>
                            </div>
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
                    <p class="full-none">Already a member? <a href="login.php">Login here</a></p>
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
