<?php
$conn = mysqli_connect("localhost", "root", "", "seminar_project");
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

session_start();
$error = false;
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
    $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
    $username = mysqli_real_escape_string($conn,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn,$password);
    //Checking is user existing in the database or not
    $query = "SELECT * FROM admin WHERE username='$username'and password='$password'";
    $result = mysqli_query($conn,$query) ;
    $rows = mysqli_num_rows($result);
        if($rows==1){
        $_SESSION['username'] = $username;
            // Redirect user to work.php
        header("Location: work.php");
         }else{
	$error = true;
    }
    }else{
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>I Agency Seminar - Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 4px;
  font-size: 20px;
  width: 75px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-instagram {
  background: #125688;
  color: white;
}
</style>
</head>

<body>
<div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0" nonce="xf4OSkTh"></script>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.php">
                <i class='bx bx-buildings bx-sm text-dark'></i>
                <span class="text-dark h4">I Agency</span> <span class="text-primary h4">Seminar</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- TODO: change the reference link -->
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="aboutus.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="login.php">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="options.php">Seminar Plan</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
		<div class="fb-share-button" data-href="https://www.facebook.com/GreatEasternMY/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FGreatEasternMY%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                <div class="fa fa-instagram"><a href="https://www.instagram.com/greateasterntakaful/?hl=en"></a>
		</div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    <section class="bg-light pt-sm-0 py-5">

        <h1 class="h2 semi-bold-600 text-center pt-5">Login into Admin Page</h1>
        <p class="text-center pb-5 light-300">
            Insert your login info to access the admin page.
        </p>

        <div class="row d-flex align-items-center pb-5">

            <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2">
                <img class="rounded float-right" src="./assets/img/pricing.svg">
            </div>

            <div class="col-lg-6">
                <!-- Start Contact Form -->
                <div class="col-lg-10 ">
                    <form class="contact-form row" action="" method="post" role="form">

                        <div class="col-lg-12 mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-lg light-300" id="floatingname"
                                    name="username" placeholder="Username" required>
                                <label for="floatingname light-300">Username</label>
                            </div>
                        </div><!-- End Input Name -->

                        <div class="col-lg-12 mb-4">
                            <div class="form-floating">
                                <input type="password" class="form-control form-control-lg light-300" id="floatingphone"
                                    name="password" placeholder="Password" required>
                                <label for="floatingphone light-300">Password</label>
                            </div>
                        </div><!-- End Input Password -->

                        <div class="col-md-12 col-12 m-auto text-end">
                            <button type="submit"
                                class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Log In</button>
                        </div>

                    </form>
			<?php if($error){ ?>
   			<script> alert ("Incorrect Username or Password!")</script>
 			<?php } ?>
                </div>
                <!-- End Contact Form -->
            </div>
        </div>
    </section>


<!-- Start Footer -->
<footer class="bg-secondary pt-4">
    <div class="container">
        <div class="row py-4">

            <div class="col-lg-3 col-12 align-left">
                <a class="navbar-brand" href="index.php">
                    <i class='bx bx-buildings bx-sm text-light'></i>
                    <span class="text-light h5">I Agency</span> <span class="text-light h5 semi-bold-600">Seminar</span>
                </a>
                <p class="text-light my-lg-4 my-2">
                    Join our FREE seminar and let the experts tell you the truth about your insurance policy.
                </p> 
            </div>

            <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                <h3 class="h4 pb-lg-3 text-light light-300">Our Company</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.php">Home</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="aboutus.php">About Us</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="login.php">Work</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a class="text-decoration-none text-light py-1" href="options.php">Seminar Plan</a>
                        </li>
                    </ul>
            </div>

            <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                <h2 class="h4 pb-lg-3 text-light light-300">For Client</h2>
                <ul class="list-unstyled text-light light-300">
                    <li class="pb-2">
                        <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:010-020-0340">010-020-0340</a>
                    </li>
                    <li class="pb-2">
                        <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:info@company.com">info@company.com</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="w-100 bg-primary py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-lg-6 col-sm-12">
                    <p class="text-lg-start text-center text-light light-300">
                        © Copyright 2021 Seminar Project Company. All Rights Reserved.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p class="text-lg-end text-center text-light light-300">
                        Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://templatemo.com/" target="_blank"><strong>TemplateMo</strong></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->


    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>

</body>

</html>