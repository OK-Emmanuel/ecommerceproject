<?php
include('session.php');
include('db_con.php');
$id = 1;
$sql = "SELECT * FROM adminreg WHERE id='$id'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$rows = mysqli_fetch_array($result);
?>
<?php
include('db_con.php');
if(isset($_REQUEST['uin'])){
$sql = "SELECT * FROM memberreg WHERE uin='$_REQUEST[uin]' ";
$sql = "SELECT * FROM memberreg WHERE uin='$_REQUEST[uin]' ";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$rows = mysqli_fetch_array($result);
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

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://georgenekoko.com">
<meta property="og:title" content="Send Bulk Mail || <?php echo $session_fullname;?>">
<meta property="og:description" content="">
<meta property="og:image" content="https://wetindeycodeacademy.com.ng/moonwalker/ODSB/logo.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://georgenekoko.com">
<meta property="twitter:title" content="Send Bulk Mail || <?php echo $session_fullname;?>">
<meta name="twitter:site" content="@georgenekoko" />
<meta property="twitter:description" content="">
<meta property="twitter:image" content="https://wetindeycodeacademy.com.ng/moonwalker/ODSB/logo.png">
    <!-- end of mega tag -->

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="logo.png">

    <!-- TITLE -->
    <title>Send Bulk Mail ||
        <?php echo $session_fullname; ?>
    </title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!-- Froala Editor Stylesheet-->
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css'>

    <!-- Animate css -->
    <link href="assets/css/animated.css" rel="stylesheet">

    <!--- FONT ICONS -->
    <link href="assets/css/icons.css" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="assets/switcher/demo.css" rel="stylesheet">

</head>

<body class="app sidebar-mini ltr light-mode">

<?php include('menu.php');?>

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Send Bulk Mail ||<?php echo $session_fullname;?></h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Send Bulk Mail</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                    <h3 class="card-title">Send Bulk Mail || <?php echo $session_fullname;?></h3>
                                    </div>

                                    <form method="post" class="card" enctype="multipart/form-data"
                            action="send_mail.php">

                            
                            <div class="form-row card-body">

                                        <div class="col-xl-6 mb-3">
                                            <label for="validationCustom01">Subject:</label>
                                            <input type="text" placeholder="Mail Subject" name="subject" 
                                                class="form-control" title="Date is Required"
                                                id="validationCustom01" required>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>

                                        <div class="col-xl-6 mb-3">
                                            <label for="validationCustom01">Attach Flyer/Photo:</label>
                                            <input type="file" id="flyer" name="flyer" 
                                                class="form-control" title="Flyer is Required"
                                                id="validationCustom01" required accept=".jpg,.jpeg,.png,.PNG,.JPG,.JPEG">
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>

                                        

                                      
                                        <div class="col-xl-12 mb-3">
                                            <label for="validationCustom02">Message:</label>
                                            <textarea id="summernote" name="body" placeholder="" required class="form-control"></textarea>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>


                                        <button class="btn btn-primary btn-block" name="submit" type="submit"
                                        onclick="return confirm('Are you sure to Send Bulk Mail?')"><b>Send Bulk Mail</b></button>

                            </div>
</div>
                            
                        </form>

                                       

                                    </div>
                                </div>
                            </div>

                        

                        

                        

                        

                        
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!--app-content closed-->
        </div>

        

        <!-- FOOTER -->
        <?php include('footer.php'); ?>
        <!-- FOOTER END -->
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

    <!-- INTERNAL WYSIWYG Editor JS -->
    <script src="assets/plugins/wysiwyag/jquery.richtext.js"></script>
    <script src="assets/plugins/wysiwyag/wysiwyag.js"></script>

    <!-- INTERNAL SUMMERNOTE Editor JS -->
    <script src="assets/plugins/summernote/summernote1.js"></script>
    <script src="assets/js/summernote.js"></script>

    <!-- INTERNAL FORMEDITOR JS -->
    <script src="assets/plugins/quill/quill.min.js"></script>
    <script src="assets/js/form-editor2.js"></script>

    <!-- Froala Editor JS-->
    <script src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    <script src="assets/js/froala.js"></script>

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