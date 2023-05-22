<?php
	require('blogger_conn.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){

		
    $email = stripslashes($_REQUEST['email']); // removes backslashes
		$email = mysqli_real_escape_string($conn,$email); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn,$password);
   



	//Checking if user existing in the database or not
        $query = "SELECT * FROM register WHERE password=PASSWORD('$password') AND email='$email'";
		$result = mysqli_query($conn,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['email'] = $email;
			echo "<script type='text/javascript'> window.open('../dashboard/index.php','_self'); alert('WELCOME TO YOUR ADMIN DASHBOARD') </script>"; // Redirect user to index.php 
            }{
    echo "<script>alert('Invalid Staff ID & Password ')
	location.href='loginform.php'</script>";
   }
    }
?><!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TAGCODE');</script>
    <!-- End Google Tag Manager -->
    <title>EASYNEWS ADMIN LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/logos/logo-2.png" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="../../../../../css.css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
    <link href="../../../../../css2.css?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Login 11 start -->
<div class="login-11">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-12 bg-color-11">
                <div class="form-section">
                    <div class="logo">
                        <a href="login-11.html">
                            <img src="assets/img/logos/new1.png" style="height: 80px;" alt="logo">
                        </a>
                    </div>
                    <h3>Sign Into Your Account</h3>
                    <div class="login-inner-form">
                        <form action="#" method="post">
                            <!-- <div class="form-group clearfix">
                                <label for="first_field" class="form-label">UIN</label>
                                <div class="form-box">
                                    <input name="uin" type="text" class="form-control" id="first_field" placeholder="Your UIN here" aria-label="Email Address">
                                    <i class="flaticon-mail-2"></i>
                                </div>
                            </div> -->
                            <div class="form-group clearfix">
                                <label for="first_field" class="form-label">Email address</label>
                                <div class="form-box">
                                    <input name="email" type="email" class="form-control" id="first_field" placeholder="Enter Your Email Address" aria-label="Email Address">
                                    <i class="flaticon-mail-2"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="second_field" class="form-label">Password</label>
                                <div class="form-box">
                                    <input name="password" type="password" class="form-control" autocomplete="off" id="second_field" placeholder="Password" aria-label="Password">
                                    <i class="flaticon-password"></i>
                                </div>
                            </div>
                            <div class="checkbox form-group clearfix">
                                <!-- <div class="form-check float-start">
                                    <input class="form-check-input" type="checkbox" id="rememberme">
                                    <label class="form-check-label" for="rememberme">
                                        Remember me
                                    </label>
                                </div> -->
                                <a href="forgot-password-11.html" class="link-light float-end forgot-password">Forgot your password?</a>
                            </div>
                            <div class="form-group clearfix mb-0">
                                <button type="submit" class="btn btn-primary btn-lg btn-theme">Login</button>
                            </div>
                        </form>
                        <div class="extra-login">
                            <span>Or Login With</span>
                        </div>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg">Facebook</a></li>
                            <li><a href="#" class="twitter-bg">Twitter</a></li>
                            <li><a href="#" class="google-bg">Google</a></li>
                        </ul>
                    </div>
                    <p class="text-center">Don't have an account?<a href="registerxyz.php"> Register here</a></p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12 bg-img">
                <div class="info">
                    <h1 class="animate-charcter">Welcome To EASYNEWS</h1>
                    <p>The Ceneter for latest, Legit and Trendig Update happening all around the world</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 11 end -->

<!-- External JS libraries -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS Script -->
</body>
</html>