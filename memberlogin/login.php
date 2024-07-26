<?php
    session_start();
	require('db_con.php');
    
    // //this script captures a user's device
	// $device = $_SERVER['HTTP_USER_AGENT'];
// // this line of script captures a user's ip address.
// $ip = $_SERVER['REMOTE_ADDR'];
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){

		$email = stripslashes($_REQUEST['email']); // removes backslashes
		$email = mysqli_real_escape_string($conn,$email); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn,$password);



        $query = "SELECT * FROM `memberreg` WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['email'] = $email;
            echo '<script type="text/javascript"> window.open("..", "_self");</script>'; // Redirect user to index.php
        } else {
            echo "<script>alert('Invalid Admin Login Credential');
            location.href='signup.php';</script>";
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
	<!-- // Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Required meta tags // -->

    <meta name="description" content="Login and Register Form HTML Template - developed by 'ceosdesigns' - sold exclusively on 'themeforest.net'">
	<meta name="author" content="ceosdesigns.sk">

    <title>Nimoy · Login and Register Form HTML Template</title>

	<!-- // Favicon -->
	<link href="images/favicon.png" rel="icon">
	<!-- Favicon // -->

	<!-- // Google Web Fonts -->
	<link href="../../css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
	<!-- Google Web Fonts // -->

	<!-- // Font Awesome 5 Free -->
	<link href="../../releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" rel="stylesheet">
	<!-- Font Awesome 5 Free // -->

    <!-- // Template CSS files -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!-- Template CSS files  // -->
</head>
<body>
	<!-- Preloader // -->

	<main class="d-flex">
		<div class="container main-container">
			<div class="row nm-row">
				<div class="col-lg-7 nm-bgi d-none d-lg-flex">
					<div class="overlay">
						<div class="hero-item">
								<img src="images/logoReversed.png" alt="Logo">
							</a>
						</div>
						<div class="hero-item hero-item-1">
							<h2>Go all the way.</h2>
							<h2>Don't give up. Ever.</h2>
							<h2>It's that simple.</h2>
						</div>	
						<ul class="hero-item">
							<li><a href="index.php">Home</a></li>
							<li><a href="../about-us.php">About</a></li>
							<li><a href="../contact-us.php">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-5 nm-mb-1 nm-mb-md-1 nm-aic">
					<div class="card">
						<div class="card-content">
							<div class="header">
								<p class="h2">Welcome Back!</p>
								<p class="h2">Live the experience</p>
							</div>
							<form method="post">
								<div class="form-group">
									<label for="inputEmail">Email</label>
									<div class="input-group nm-gp">
										<span class="nm-gp-pp"><i class="fas fa-envelope-open"></i></span>
										<input id="inputEmail" class="form-control" type="email" tabindex="1" placeholder="Your email" require name="email">
									</div>
								</div>	

								<div class="form-group">
									<label for="inputPassword">Password</label>
									<div class="input-group nm-gp">
										<span class="nm-gp-pp"><i class="fas fa-lock"></i></span>
										<input id="inputPassword" class="form-control" type="password" tabindex="2" placeholder="Enter your password" required name="password">
									</div>
								</div>

								<div class="d-flex nm-jcb nm-mb-1 nm-mt-1">
									<div class="nm-control nm-checkbox">
										<input id="temsAndConditions" class="nm-control-input" type="checkbox">
										<label class="nm-control-label" for="temsAndConditions">Remember me</label>
									</div>

									<a class="nm-ft-b" href="recover.php">Forgot password?</a>
								</div>

								<button type="submit" name="submit" value="submit" class="btn btn-block btn-primary nm-btn">Log In</button>

								<p class="divider">Or continue with your social profile:</p>

								<div class="row social nm-mb-1">
									<div class="col-md-6 mb-2 mb-md-0">
										<a href="#" class="btn btn-block nm-btn btn-facebook">
											<i class="fab fa-facebook-f nm-mr-1h"></i>
											Facebook
										</a>
									</div>

									<div class="col-md-6">
										<a href="#" class="btn btn-block nm-btn btn-google">
											<i class="fab fa-google nm-mr-1h"></i>
											Google
										</a>
									</div>
								</div>

								<p class="text-center nm-ft-b nm-wh mb-0">
									No account yet?
									
								</p><a href="signup.php">Signup</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<!-- // Vendor JS files -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<!-- Vendor JS files // -->

	<!-- Template JS files // -->
	<script src="js/script.js"></script>
	<!-- Template JS files // -->
	 <script>
		let tmpLocation = window.location.href;
		let tmpEndLocation = tmpLocation.split("/");
		let targetLocation = tmpEndLocation[tmpEndLocation.length-1];
		targetLocation = targetLocation.replace(".html","").replace("#", "");
		let targetLocationArray = [];

		if(targetLocation.includes("_")){
			targetLocationArray = targetLocation.split("_");
			targetLocationArray[1] = "_" + targetLocationArray[1];
		}
		else {
			targetLocationArray[0] = targetLocation;
			targetLocationArray[1] = "";
		}

		let l = document.links;
		for(let i=0; i<l.length; i++) {
			let tmp = l[i].attributes.href.nodeValue;
			l[i].attributes.href.nodeValue = tmp.replace("recover","recover" + targetLocationArray[1]).replace("login","login" + targetLocationArray[1]).replace("signup","signup" + targetLocationArray[1]);
		}

		document.getElementById("blue").setAttribute('href',"./" + targetLocationArray[0] + ".html");
		document.getElementById("beige").setAttribute('href',"./" + targetLocationArray[0] + "_1.html");
		document.getElementById("burgundy").setAttribute('href',"./" + targetLocationArray[0] + "_2.html");
		document.getElementById("fuchsia").setAttribute('href',"./" + targetLocationArray[0] + "_3.html");
		document.getElementById("turquoise").setAttribute('href',"./" + targetLocationArray[0] + "_4.html");

		document.getElementById("colors").style.transition = 'all 0.2s';
		document.getElementById("settings").addEventListener("click", () =>{
			let leftPosition = document.getElementById("colors").style.left;

			if(leftPosition == '40px'){
				document.getElementById("colors").style.left = '0px';
			}
			else {
				document.getElementById("colors").style.left = '40px';
			}
		});
	</script>
	<!-- ======================================================= -->
	<!-- Setting to allow preview of different color variants // -->
	<!-- ======================================================= -->
</body>
</html>