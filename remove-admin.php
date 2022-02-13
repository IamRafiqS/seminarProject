<?php
        $conn = mysqli_connect("localhost", "root", "", "seminar_project");
        $sql_member = "SELECT * from admin ORDER BY id ASC;";
        $result_member = $conn-> query($sql_member);
	$success=false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>I Agency Seminar - Admin List Page</title>
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
    <!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>

<body>
    <!-- Header -->
        <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1">
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
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="work.php">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="register-admin.php">Register Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="remove-admin.php">Admin List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="register-seminar.php">Register Seminar</a>
                        </li>
			<li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="remove-seminar.php">Seminar List</a>
                        </li>
                    </ul>
                </div>
		<div class="navbar align-self-center d-flex">
                	<a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="index.php" role="button">Log Out</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->


    <!-- Start Banner Hero -->
    <section class="bg-light">
        <div class="container py-4">
            <div class="row align-items-center justify-content-between">
                <div class="contact-header col-lg-4">
                    <h1 class="h2 pb-3 text-primary">Admin List</h1>
                    <!-- <h3 class="h4 regular-400">Elit, sed do eiusmod tempor</h3> -->
                    <p class="light-300">
                        This page is for admin to view and edit other admins.
                    </p>
                </div>
                <div class="contact-img col-lg-5 align-items-end col-md-4">
                    <img src="./assets/img/banner-img-02.svg">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->

    <!-- Start Our Work -->
    <section class="container py-5">

        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <table data-vertable="ver1">
                        <thead>
                            <tr class="row100 head">
                                <th class="column100 column3" data-column="column2">ID</th>
                                <th class="column100 column2" data-column="column1">Username</th>
                                <th class="column100 column2" data-column="column3">Password</th>
                                <th class="column100 column2" data-column="column3">Edit</th>
                                <th class="column100 column2" data-column="column3">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
			<?php
                    		while($row =mysqli_fetch_array($result_member,MYSQLI_ASSOC)){
                                             $id=$row['id'];
                                             $username=$row['username'];
                                             $password=$row['password'];
			if (isset($_GET['delete'])) {
			$id = $_GET['delete'];
			mysqli_query($conn, "DELETE FROM admin WHERE id=$id");
			$success=true; 
			}
                     	?>
                            <tr class="row100">
                                <td class="column100 column3" data-column="column2">
                                    <?php echo $id;?></td>
                                <td class="column100 column2" data-column="column1">
                                    <?php echo $username;?></td>
                                <td class="column100 column2" data-column="column1">
                                    <?php echo $password;?></td>
                                <td class="column100 column2" data-column="column1">
                                    <a href="edit-admin.php?edit=<?php echo $row["id"]; ?> & username=<?php echo $username; ?> & password=<?php echo $password; ?>">
                                        Edit
                                </td></a>
                                <td class="column100 column2" data-column="column1">
                                    <a href="remove-admin.php?delete=<?php echo $row["id"]; ?>">
                                        Delete
                                </td></a>
                            </tr>
			<?php if($success){ ?>
   			<script> alert ("Admin Details Deleted!")</script>
 			<?php } ?>			
			<?php
                        }
                     	?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- <div class="row projects gx-lg-5">
            <a href="work-single.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing social business">
                <div class="service-work overflow-hidden card mb-5 mx-5 m-sm-0">
                    <img class="card-img-top" src="./assets/img/our-work-01.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Seminar Plan A</h5>
                        <p class="card-text light-300 text-dark">
                            This is the most basic plan.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.php" class="col-sm-6 col-lg-4 text-decoration-none project graphic social">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-02.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Seminar Plan B</h5>
                        <p class="card-text light-300 text-dark">
                            This is a description for seminar plan.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing graphic business">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-03.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Seminar Plan C</h5>
                        <p class="card-text light-300 text-dark">
                            This is a description for seminar plan.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.php" class="col-sm-6 col-lg-4 text-decoration-none project social business">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-04.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Seminar Plan D</h5>
                        <p class="card-text light-300 text-dark">
                            This is a description for seminar plan.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-05.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Seminar Plan E</h5>
                        <p class="card-text light-300 text-dark">
                            This is a description for seminar plan.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing graphic">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="./assets/img/our-work-06.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Seminar Plan F</h5>
                        <p class="card-text light-300 text-dark">
                            This is a description for seminar plan.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a> -->
        </div>
        <!-- <div class="row">
            <div class="btn-toolbar justify-content-center pb-4" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-secondary text-white">Previous</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-light">1</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-secondary text-white">2</button>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                    <button type="button" class="btn btn-secondary text-white">Next</button>
                </div>
            </div>
        </div> -->
    </section>
    <!-- End Our Work -->

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Lightbox -->
    <script src="assets/js/fslightbox.js"></script>
    <script>
        fsLightboxInstances['gallery'].props.loadOnlyCurrentSource = true;
    </script>
    <!-- Load jQuery require for isotope -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function () {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function () {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>

</body>

</html>