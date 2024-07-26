<?php
include('session.php');
include('db_con.php');
$id = 1;
$sql="SELECT * FROM adminreg WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>
<?php 
include("db_con.php");
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM memberreg WHERE uin='$_REQUEST[uin]' ";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
}
?>

<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- start of mega tag -->
<meta name="keywords" content="">

<meta name="author" content="Wetin Dey Code Academy, Wetin Dey Inc., Wetin Dey">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="logo.png">

    <!-- TITLE -->
    <title>Edit Profile</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- STYLE CSS -->
     <link href="assets/css/style.css" rel="stylesheet">

	<!-- Plugins CSS -->
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="assets/css/icons.css" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="assets/switcher/demo.css" rel="stylesheet">

</head>



<body class="app sidebar-mini ltr light-mode">

<?php include("menu.php"); ?>
            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Edit Profile</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-xl-4">
                                



                               
                            </div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Profile</h3>
                                    </div><form method="post">
                                        <?php
                                        include("db_con.php");
                                        if(isset($_REQUEST['uin'])) {
                                            $sql = "SELECT * FROM memberreg WHERE uin='$_REQUEST[uin]'";
                                            $result=mysqli_query($conn, $sql);
                                            $row=mysqli_fetch_array($result);


                                            include("db_con.php");
                                            if(isset($_REQUEST['save'])){
                                                $uin = $_REQUEST['uin'];
                                                $fullname = $_REQUEST['fullname'];
                                                $lastname = $_REQUEST['lastname'];
                                                 $phone = $_REQUEST['phone'];
                                                $gender = $_REQUEST['gender'];
                                                $relationship = $_REQUEST['relationship'];
                                                $email = $_REQUEST['email'];
                                                $postaladd = $_REQUEST['postaladd'];
                                                $passport = $_REQUEST['passport'];
                                                $password = $_REQUEST['password'];
                                                // $phone = $_REQUEST['phone'];
                                               
    

                                                $sql = "UPDATE memberreg SET `fullname`='$fullname', lastname='$lastname', phone='$phone', gender='$gender', relationship='$relationship', `gender`='$gender', relationship='$relationship', email='$email', postaladd='$postaladd', passport='$passport', password=$'password', phone='$phone' WHERE uin='$uin'";
                                                mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                                if(mysqli_affected_rows($conn) != 1){
                                                    $message = "Erorr Updating Acount Information.";
                                                }
                                                echo "<script>alert('$fullname info successfully updated on website')
                                                location.href=view.php'</script";
                                            }
    }
                                        ?>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">

                                            <input type="hidden" class="form-control" id="exampleInputname" value="<?php echo $row['uin']; ?>" name="uin">

                                                <div class="form-group">
                                                    <label for="exampleInputname">Full Name</label>
                                                    <input type="text" class="form-control" id="exampleInputname" value="<?php echo $row['fullname']; ?>" name="fullname">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname1">Last Name</label>
                                                    <input type="text" class="form-control" id="exampleInputname1" value="<?php echo $row['lastname']; ?>" name="lastname">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname">phone</label>
                                                    <input type="number" class="form-control" id="exampleInputname" value="<?php echo $row['phone']; ?>" name="phone">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname1">Gender</label>
                                                    <input type="text" class="form-control" id="exampleInputname1" value="<?php echo $row['gender']; ?>" name="gender">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Relationship</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row['relationship']; ?>" name="relationship">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputnumber">Email</label>
                                            <input type="email" class="form-control" id="exampleInputnumber" value="<?php echo $row['email']; ?>" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputnumber">Postal Address</label>
                                            <input type="text" class="form-control" id="exampleInputnumber" value="<?php echo $row['postaladd']; ?>" name="postaladd">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputnumber">Password</label>
                                            <input type="text" class="form-control" id="exampleInputnumber" value="<?php echo $row['password']; ?>" name="password">
                                        </div>
                                    </div>
                                     <div class="card-footer text-end">
                                        <!-- <a href="javascript:void(0)" class="btn btn-success my-1" name="save">Save</a> -->
                                         <input type="submit" name="save" onclick="return confirm('Are you sure to update Record?')" value="Update" class="btn btn-success my-2">
                                    </div>
                                     <div class="card-footer text-end">
                                        <a href="editpassport.php?id=<?php echo $row['id'];?>" class="btn btn-success my-1" name="save">update passport</a>    
                                    </div>
                                    </form>
                                   
                                </div>
                    <!--CONTAINER CLOSED -->

                </div>
            </div>
            <!--app-content open-->
        </div>

       
        <!-- FOOTER -->
         <?php include("footer.php"); ?>
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- INPUT MASK JS-->
    <script src="assets/plugins/input-mask/jquery.mask.min.js"></script>

	<!-- TypeHead js -->
	<script src="assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="assets/js/typehead.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="assets/js/show-password.min.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="assets/plugins/select2/select2.full.min.js"></script>
    <script src="assets/js/select2.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="assets/plugins/p-scroll/pscroll.js"></script>
    <script src="assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- SIDEBAR JS -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>

    <!-- Color Theme js -->
    <script src="assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>

    <!-- Custom-switcher -->
    <script src="assets/js/custom-swicher.js"></script>

    <!-- Switcher js -->
    <script src="assets/switcher/js/switcher.js"></script>

</body>

</html>