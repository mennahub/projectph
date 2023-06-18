<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Adventurous- Camping Agency -</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&amp;family=Nunito:wght@600;700;800&amp;display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Modern Academy, Cairo,
                        Egypt</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+01004159357</small>
                    <small class="text-light"><i
                            class="fa fa-envelope-open me-2"></i>adventurous.camping124@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://twitter.com/adventurou79102?s=11" target="_blank"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.facebook.com/profile.php?id=100092186344850&mibextid=LQQJ4d"
                        target="_blank"><i style="--i:6;--clr:#1877f2;" class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://instagram.com/adve.nturouscamping?igshid=YmMyMTA2M2Y" target="_blank"><i
                            class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fas fa-campground me-3"></i>Adventurous</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="package.php" class="nav-item nav-link active">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="booking.php#booking-form" class="dropdown-item">Booking</a>
                            <a href="team.php" class="dropdown-item">Team</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <?php if (is_logged_in()): ?>
                    <a href="account.php" class="btn btn-primary rounded-pill py-2 px-4">Account</a>
                <?php else: ?>
                    <a href="register.php" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
                <?php endif; ?>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Packages</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item"><a href="Package.php">Packages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Ras Shetaan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Ras Shetaan</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="ras shetaan/maxresdefault.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Ras Shetaan</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>5 days</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fas fa-campground text-primary me-2"></i>Mixer</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">2,250 L.E</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>You will enjoy your holiday in Mixer Camp in a simple way; This package contain:<br>-Room
                                with 2 beds & bathroom.<br>-Diving in Ras Mamlish.<br>-Visit the Coloured
                                Canyon.<br>-Tranportations.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="booking.php#booking-form" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 30px 30px 30px 30px;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="ras shetaan/ras-shaitan-nuweiba-4-1.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Ras Shetaan</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>5 days</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fas fa-campground text-primary me-2"></i>Mixer</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">2,350 L.E</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>You will enjoy your holiday in Mixer Camp in a simple way; This package contain:<br>-Room
                                with 2 beds & bathroom.<br>-Diving in Dense.<br>-Visit the Sayadeen
                                Village.<br>-Tranportations.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="booking.php#booking-form" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 30px 30px 30px 30px;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="ras shetaan/edit 2.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Ras Shetaan</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>5 days</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fas fa-campground text-primary me-2"></i>Mixer</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">2,500 L.E</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>You will enjoy your holiday in Mixer Camp in a simple way; This package contain:<br>-Room
                                with 2 beds & bathroom.<br>-Trip for Sayedeen Village.<br>-Visit the
                                Nuwamis.<br>-Tranportations.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="booking.php#booking-form" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 30px 30px 30px 30px;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <center>
                <a href="contact.php" class="btn btn-sm btn-primary px-3"
                    style="border-radius: 100px 100px 100px 100px; height: 100%;">Customize Your Own Program Now</a>
            </center>
        </div>
    </div>
    <!-- Package End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms &amp; Condition</a>
                    <a class="btn btn-link" href="contact.php">FAQs &amp; Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Modern Academy, Cairo, Egypt</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+01004159357</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>adventurous.camping124@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/adventurou79102?s=11"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.facebook.com/profile.php?id=100092186344850&mibextid=LQQJ4d"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social"
                            href="https://instagram.com/adve.nturouscamping?igshid=YmMyMTA2M2Y"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="Dahab/5b.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="Nuweiba/Al-Magarra-Camp-Hotel-Nuweiba-Exterior.jpg"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="ras shetaan/5ed2efb38752de6724c03560ffc4a3c8.jpg"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1"
                                src="Saint Catherine/vlad-kiselov-Fe3eF795O24-unsplash-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="Taba/337646264.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="Taba/357721479.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Let's live the Adventure now</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <a class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                            href="register.php">Registration</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        © <a class="border-bottom" href="index.php">Adventurous</a>, All Right Reserved.

                        Designed By <a class="border-bottom" href="team.php">Our Team</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="index.php">Home</a>
                            <a href="">Cookies</a>
                            <a href="contact.php">Help</a>
                            <a href="contact.php">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">&uarr;</a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/bootstrap-5.0.2/dist/js/bootstrap.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


</body>

</html>