
<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Google Tag Manager -->
    <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TAGCODE');</script> -->
    <!-- End Google Tag Manager -->
    <title>EASYNEWS ADMIN REGISTRATION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">


    <link href="../icon/css/bootstrap.min.css" rel="stylesheet">
    <link href="../icon/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../icon/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../icon/css/animate.css" rel="stylesheet">
    <link href="../icon/css/css/all.min.css" rel="stylesheet">

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
                        <a href="loginform.php">
                            <img src="assets/img/logos/new1.png" style="height: 80px;"  alt="logo">
                        </a>
                    </div>
                    <?php
                    include("blogger_conn.php");
                    $ip=$_SERVER['REMOTE_ADDR'];
        $device=$_SERVER['HTTP_USER_AGENT'];
        $rand=rand(0, 50);
        $current= date("Y/");
        $uin="USER/".$current .$rand;

                    error_reporting(E_ALL);
                    if(isset($_REQUEST["submit"])){
                    $fullname =trim(addslashes($_REQUEST["fullname"]));
                    $uin = $_REQUEST["uin"];
                    $email = $_REQUEST["email"];
                    $designation = $_REQUEST["designation"];
                    $phonenumber = $_REQUEST["phonenumber"];
                    $password = trim(addslashes($_REQUEST["password"]));
                    $passport = $_FILES["passport"]['name'];
                    $target = "passport/";
                    $target=$target.$_FILES["passport"]['name'];
                        
                    $check=mysqli_query($conn,"SELECT * FROM register WHERE uin='$uin' OR fullname='$fullname'");
                    $checkrows=mysqli_num_rows($check);
                   if($checkrows > 0){
                     echo "<script> alert('You Have Already Been Registered Please Login')
                     location='loginform.php'</script>";
                   }
                    else{
                        if(move_uploaded_file($_FILES["passport"]['tmp_name'], $target) >0){

                            $sql = "INSERT INTO register (ip_address, device, fullname, phonenumber, email, uin, designation, passport, `password`) VALUES('$ip', '$device', '$fullname','$phonenumber', '$email', '$uin','$designation', '$passport', PASSWORD('$password') )";

                            mysqli_query($conn, $sql) or die (mysqli_error($conn));
                            $num=mysqli_insert_id($conn);
                            if(mysqli_affected_rows($conn)!=1){
                            $message="error inserting record to DB";
                            } 

                            echo"<script> alert('Dear $fullname Your Registration was Successful please record your UIN which is $uin')
                         location='loginform.php'
                            </script>"; 
                        }
                    }
                }
                    ?>
                 
                    <h3>Create An Cccount</h3>
                    <div class="login-inner-form">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group clearfix">
                                <label for="third_field" class="form-label">Full Name</label>
                                <div class="form-box">
                                    <input  type="text" name="fullname" class="form-control" id="third_field" required placeholder="Enter Full Name" aria-label="Full Name">
                                    <i class="flaticon-user"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                            <label for="third_field" class="form-label">UIN NUMBER</label>
                                <div class="form-box">
                                    <input  type="text" readonly name="uin" class="form-control" id="third_field" value="<?php echo $uin ?>"  aria-label="Full Name">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                   
                            <div class="form-group clearfix">
                                <label for="first_field" class="form-label">Phone Number</label>
                                <div class="form-box">
                                    <input name="phonenumber" required type="text" class="form-control" id="first_field" placeholder="Phone Number" aria-label="Email Address">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="first_field" class="form-label">Email address</label>
                                <div class="form-box">
                                    <input name="email" required type="email" class="form-control" id="first_field" placeholder="Email Address" aria-label="Email Address">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="third_field" class="form-label">Designation</label>
                                <div class="form-box">
                                    <select required name="designation" type="text" class="form-control" id="third_field"  aria-label="Full Name">
                                        <option value="">Select Role</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Blogger">Blogger</option>
                                        <option value="Editior">Editor</option>
                                        
                                    </select>
                                    <i class="fa fa-suitcase"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="third_field" class="form-label">ASSGIN A PASSPORT</label>
                                <div class="form-box">
                                    <input name="passport" required type="file" class="form-control" id="third_field" placeholder="Full Name" aria-label="Full Name">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="second_field" class="form-label">Password</label>
                                <div class="form-box">
                                    <input name="password" type="password" class="form-control" required autocomplete="off" id="second_field" placeholder="Password" aria-label="Password">
                                    <i class="flaticon-password"></i>
                                </div>
                            </div>
                            <div class="form-group checkbox clearfix">
                                <div class="clearfix float-start">
                                    <div class="form-check">
                                        <input class="form-check-input" required type="checkbox" id="rememberme">
                                        <label class="form-check-label" for="rememberme">
                                            I agree to the terms of service
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix mb-0">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-theme" onclick="return confirm('Are You Ready To Submit')">Register</button>
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
                    <p class="text-center">Don't have an account?<a href="loginform.php"> Login here</a></p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12 bg-img">
                <div class="info">
                    <h1 class="animate-charcter">Welcome To EASYNEWS</h1>
                    <p >The Ceneter for latest, Legit and Trendig Update happening all around the world</p>
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