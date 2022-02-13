<!DOCTYPE html>
<html lang="en">

<head>
    <title>I Agency Seminar - Admin Page</title>
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
    <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
        <div
            class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
            <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
                <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Admin Page</h1>
                <h3 class="h4 pb-2 regular-400">Welcome to the Admin page for I Agency Seminar.</h3>
                <p class="banner-body pb-2 light-300">
                    If you are not an admin please sign out.
                </p>
                <a href="register-admin.php">
                    <button type="submit" class="btn rounded-pill btn-outline-light px-4 me-4 light-300">Register New
                        Admin</button>
                </a>
                <a href="remove-admin.php">
                    <button type="submit" class="btn rounded-pill btn-outline-light px-4 me-4 light-300">Admin List
                    </button>
                </a>
                <a href="register-seminar.php">
                    <button type="submit" class="btn rounded-pill btn-secondary text-light px-4 light-300">Register New
                        Seminar</button>
                </a>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Our Work -->
    <section class="container py-5">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <table data-vertable="ver1">
                        <thead>
                            <tr class="row100 head">
                                <!-- <th class="column100 column3" data-column="column2">No.</th> -->
                                <th class="column100 column2" data-column="column1">Topic</th>
                                <th class="column100 column2" data-column="column3">Date</th>
                                <th class="column100 column2" data-column="column3">Time</th>
                                <th class="column100 column2" data-column="column3">Venue</th>
                                <th class="column100 column1" data-column="column3">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="row100">
                                <!-- <td class="column100 column3" data-column="column2">1.</td> -->
                                <td class="column100 column2" data-column="column1">
                                    <a href="work-single.html">
                                        Seminar Plan A
                                </td></a>
                                <td class="column100 column2" data-column="column1">
                                    1/1/2022</td>
                                <td class="column100 column2" data-column="column1">
                                    2200h</td>
                                <td class="column100 column2" data-column="column1">
                                    Google Meet</td>
                                <td class="column100 column1" data-column="column3">Description of Seminar Plan.</td>
                            </tr>
                            <tr class="row100">
                                <!-- <td class="column100 column3" data-column="column2">1.</td> -->
                                <td class="column100 column2" data-column="column1">
                                    <a href="work-single.html">
                                        Seminar Plan B
                                </td></a>
                                <td class="column100 column2" data-column="column1">
                                    1/1/2022</td>
                                <td class="column100 column2" data-column="column1">
                                    2100h</td>
                                <td class="column100 column2" data-column="column1">
                                    Google Meet</td>
                                <td class="column100 column1" data-column="column3">Description of Seminar Plan.</td>
                            </tr>
                            <tr class="row100">
                                <!-- <td class="column100 column3" data-column="column2">1.</td> -->
                                <td class="column100 column2" data-column="column1">
                                    <a href="work-single.html">
                                        Seminar Plan C
                                </td></a>
                                <td class="column100 column2" data-column="column1">
                                    2/12/2022</td>
                                <td class="column100 column2" data-column="column1">
                                    1600h</td>
                                <td class="column100 column2" data-column="column1">
                                    Zoom Meeting</td>
                                <td class="column100 column1" data-column="column3">Description of Seminar Plan.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
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
