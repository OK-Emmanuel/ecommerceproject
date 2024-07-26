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
	<main class="d-flex">
		<div class="container main-container">
			<div class="row nm-row">
				<div class="col-lg-7 nm-bgi d-none d-lg-flex">
					<div class="overlay">
						<div class="hero-item">
							<a href="index.php" aria-label="Nimoy">
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
								<p class="h2">Come to join 3 million</p>
								<p class="h2">members around the world</p>
							</div>
							<form method="POST" enctype="multipart/form-data">

							<?php
                            $rand= rand(100000,999999);
                            include('db_con.php');
                            if(isset($_REQUEST['submit'])){
                                $uin=$_REQUEST['uin'];
                                $fullname=$_REQUEST['fullname'];
                                $lastname=$_REQUEST['lastname'];
                                $gender=$_REQUEST['gender'];
                                $relationship=$_REQUEST['relationship'];
                                $email=$_REQUEST['email'];
                                $postaladd = $_REQUEST['postaladd'];
                               
                                $password = $_REQUEST['password'];
                                $phone = $_REQUEST['phone'];

                                $passport=$_FILES["passport"]['name'];
                                $target="passport/";
                                $target=$target.$_FILES["passport"]['name'];

                                $check=mysqli_query($conn, "SELECT * FROM memberreg WHERE `phone`='$phone' OR email='$email'");
                                $checkrows=mysqli_num_rows($check);
                                 if($checkrows>0){
                                   echo"<script>alert('This user already exists in Database')</script>";}
                                   else{

                                    if(move_uploaded_file( $_FILES["passport"]['tmp_name'], $target)>0){

                                        $sql = "INSERT INTO memberreg (uin, fullname, lastname, gender, relationship, email, postaladd, passport, `password`, phone) VALUES ('$uin','$fullname','$lastname','$gender', '$relationship','$email','$postaladd','$passport','$password','$phone')";

                                        mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                        $num=mysqli_insert_id($conn);
                                        if(mysqli_affected_rows($conn) !=1){
                                            $message= "Error Inserting record into database";
                                        }
                            }
                            
                            echo "<script>alert('Dear $fullname $lastname, your request has been successfully submitted.')location.href='login.php'</script>";
                         }
}
                            ?>

								<div class="form-group">
									<!-- <label for="uin" class="control-label">UIN</label> -->
									<div class="input-group nm-gp">
										<span class="nm-gp-pp"><i class="fas fa-user"></i></span>
										<input type="hidden" class="form-control" id="uin" name="uin" value="<?php echo $rand; ?>" readonly required placeholder="UIN">
									</div>
								</div>
								<div class="form-group">
									<label for="inputFirstName">First Name</label>
									<div class="input-group nm-gp">
										<span class="nm-gp-pp"><i class="fas fa-user"></i></span>
										<input id="firstname" class="form-control" type="text" tabindex="5" placeholder="First Name" name="fullname" required>
									</div>
								</div>
							
								<div class="form-group">
									<label for="inputLastName">Last Name</label>
									<div class="input-group nm-gp">
										<span class="nm-gp-pp"><i class="fas fa-user"></i></span>
										<input id="lastname" class="form-control" type="text" tabindex="6" placeholder="Last Name" required name="lastname">
									</div>
								</div>

								<div class="form-group">
									<label for="inputGender">Gender</label>
									<div class="input-group nm-gp">
										<span class="nm-gp-pp"><i class="fas fa-venus-mars"></i></span>
										<select id="gender" class="form-control" tabindex="9" name="gender" required>
											<option value="" disabled selected>Select your gender</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
											<option value="other">Other</option>
											<option value="prefer-not-to-say">Prefer not to say</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="inputRelationship">Relationship Status</label>
									<div class="input-group nm-gp">
										<span class="nm-gp-pp"><i class="fas fa-venus-mars"></i></span>
										<select id="relationship" class="form-control" tabindex="9"  name="relationship" required>
											<option value="" disabled selected>Relationship Status</option>
											<option value="single">Single</option>
											<option value="married">Married</option>
											<option value="divorced">Divorced</option>
											<option value="complicated">It's Complicated</option>
											<option value="prefer-not-to-say">Prefer-not-to-say</option>
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label for="inputEmail">Email</label>
									<div class="input-group nm-gp">
										<span class="nm-gp-pp"><i class="fas fa-envelope-open"></i></span>
										<input id="email" class="form-control" type="email" tabindex="1" placeholder="Email" required  name="email">
									</div>
								</div>  

								<div class="form-group">
									<label for="inputAddress">Postal Address</label>
									<div class="input-group nm-gp">
										<span class="nm-gp-pp"><i class="fas fa-map-marker-alt"></i></span>
										<input id="inputaddress" class="form-control" type="text" tabindex="8" placeholder="Address" required name="postaladd">
									</div>
								</div>
							
								<div class="form-group">
									<label for="inputpassport">Upload a passport</label>
									<div class="input-group nm-gp">
										<span class="nm-gp-pp"><i class="fas fa-user"></i></span>
										<input id="passport" class="form-control" type="file" tabindex="2" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" required name="passport">
									</div>
								</div>  
							
								<div class="form-group">
									<div class="input-group nm-gp">
										<span class="nm-gp-pp"><i class="fas fa-lock"></i></span>
										<input type="hidden" class="form-control" id="password" name="password" value="<?php echo $rand; ?>" readonly required placeholder="Password">
								</div>
							
								<div class="form-group">
									<label for="inputPhone">Phone Number</label>
									<div class="input-group nm-gp">
										<span class="nm-gp-pp"><i class="fas fa-phone"></i></span>
										<input id="inputphone" class="form-control" type="number" tabindex="7" placeholder="Phone Number" required name="phone">
									</div>
								</div>
<!-- 
								<div class="d-flex nm-jcb nm-mb-1 nm-mt-1">
									<div class="nm-control nm-checkbox">
										<input id="termsandconditions" class="nm-control-input" type="checkbox" required>
										<label class="nm-control-label" for="termsAndConditions">I accept the <a href="#">Terms</a> & <a href="#">Conditions</a></label>
									</div>
								</div> -->
							
								<button type="submit" name="submit" value="submit" class="btn btn-block btn-primary nm-btn">Sign Up</button>
							
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
									Already a member?
									<a href="login.php">Login</a>
								</p>
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