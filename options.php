<?php
        $conn = mysqli_connect("localhost", "root", "", "seminar_project");
        $sql_member = "SELECT * from seminar ORDER BY id ASC;";
        $result_member = $conn-> query($sql_member);
	$success=false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>I Agency Seminar - Seminar Plan Page</title>
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
    <link rel="stylesheet" type="text/css" href="new.css">
    <!-- Custom Icon -->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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


    <!-- Start Banner Hero -->
    <div id="plan_single_banner" class="bg-light w-100">
        <div class="container-fluid text-light d-flex justify-content-center align-items-center border-0 rounded-0 p-0 py-5">
            <div class="banner-content col-lg-8 m-lg-auto text-center py-5 px-3">
                <h1 class="banner-heading h2 pb-5 typo-space-line-center">Seminar Plan List</h1>
                <h3 class="h4 pb-2 light-300">
                    Listed below is the list of seminars and their information.
                </h3>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Work Sigle -->
    <section class="container py-5">

        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <table data-vertable="ver1">
                        <thead>
                            <tr class="row100 head">
                                <th class="column100 column3" data-column="column2">ID</th>
                                <th class="column100 column2" data-column="column1">Name</th>
                                <th class="column100 column2" data-column="column3">Date</th>
                                <th class="column100 column2" data-column="column3">Time</th>
                                <th class="column100 column2" data-column="column3">Venue</th>
                            </tr>
                        </thead>
                        <tbody>
			<?php
                    		while($row =mysqli_fetch_array($result_member,MYSQLI_ASSOC)){
                                             $id=$row['id'];
                                             $name=$row['name'];
                                             $date=$row['date'];
                                             $time=$row['time'];
                                             $venue=$row['venue'];
                     	?>
                            <tr class="row100">
                                <td class="column100 column3" data-column="column2">
                                    <?php echo $id;?></td>
                                <td class="column100 column2" data-column="column1">
                                    <?php echo $name;?></td>
                                <td class="column100 column2" data-column="column1">
                                    <?php echo $date;?></td>
				<td class="column100 column2" data-column="column1">
                                    <?php echo $time;?></td>
                                <td class="column100 column2" data-column="column1">
                                    <?php echo $venue;?></td>
                            </tr>
			<?php
                        }
                     	?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<br>
	<div style="text-align:center;">
	<a style="text-align: center" class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="register.php" role="button">Register Now</a>
	</div>
<!-- End Paragrph -->
    </section>
    <!-- End Work Sigle -->

 <!-- Start Footer -->
 <footer class=" pt-4" style="background-color: #6266ea;">
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
    <!-- Load jQuery require for Page Script -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // Slide
            $('.templatemo-slide-link').click(function() {
                var this_href = $(this).attr('href');
                $('#templatemo-slide-link-target img').attr('src', this_href);
                return false;
            });
            // End Slide
        });
    </script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>

</body>

</html>