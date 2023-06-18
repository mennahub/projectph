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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.css" rel="stylesheet">
    <!-- Option 1: Include in HTML -->
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

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
                <!-- <img src="img/Logo.jpg" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="Package.php" class="nav-item nav-link">Packages</a>
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
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Camping is one of the most beautiful things
                            that you can do it to get rid of your negative energy by staying away from the noise of the
                            city. <br>You will aquire new and fun experience from camping.<br>Come and Join us <a
                                href="Package.php"><u>Now</u></a></p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" list="cities"
                                type="text" id="city-input" placeholder="Eg: Dahab">
                            <button type="button" id="city-search"
                                class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                                style="margin-top: 7px;" onclick="linkToPackage">Search</button>
                            <datalist id="cities">
                                <option value="Dahab">Dahab</option>
                                <option value="Taba">Taba</option>
                                <option value="Nuweiba">Nuweiba</option>
                                <option value="Ras Sheetan">Ras Sheetan</option>
                                <option value="Saint Catherine">Saint Catherine</option>
                            </datalist>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about us.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Adventurous</span></h1>
                    <p class="mb-4">Camping:is an easy, healthy and cheap activity that can easily enjoyed by
                        everyone;It has a lot of fun more than residing in hitels or resort.</p>
                    <p class="mb-4">Many place across Egypt such as <b><i>South Sinai</i></b>,are full of charming
                        landscape, nature reserves and mountains, which has captured traveler's imaginations to
                        experience the true taste of adventures and escape from the hustle of big cities.</p>
                    <p class="mb-4"></p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Camps</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Comfortable
                                Transportations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Tour Guid</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Many Programs</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Natural Places Tours</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="team.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="mb-5">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-map-marked-alt text-primary mb-4"></i>
                            <h5>Sinai Tours</h5>
                            <p>You can enjoy the natural place in Sinai with us to get rid of the negative energy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-campground text-primary mb-4"></i>
                            <h5>Camp Reservation</h5>
                            <p>You can choose from more than one program and make a compare between them without wasting
                                time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Team</h5>
                            <p>Our team are availabe for you 24/7 to help you if you need a help.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-keyboard text-primary mb-4"></i>
                            <h5>Customize</h5>
                            <p>You can customize your own program by your self and chhose what you want what ever it
                                will be.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-bus text-primary mb-4"></i>
                            <h5>Transportation</h5>
                            <p>You reserve your transportation with us, it's optional but we can provide it to you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-camera text-primary mb-4"></i>
                            <h5>Photographer</h5>
                            <p>If you need a Photographer we can provide it, and it will be with low prices and high
                                quality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-hiking text-primary mb-4"></i>
                            <h5>Hiking</h5>
                            <p>You will be able to make hiking with us and feel the adventure with us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-fire-alt text-primary mb-4"></i>
                            <h5>Offers</h5>
                            <p>If you have a large number of Adventures, we can provide you a special offer for you and
                                your group.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Destination Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">Choose your Favorite Location</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="da.php">
                                <img class="img-fluid position-absolute w-100 h-100" src="Dahab/5b.jpg" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    35% OFF</div>
                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Dahab</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="Nu.php">
                                <img class="img-fluid position-absolute w-100 h-100"
                                    src="Nuweiba/flyingcarpettours.com_.jpeg" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    30% OFF</div>
                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Nuweiba</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="ta.php">
                                <img class="img-fluid position-absolute w-100 h-100" src="Taba/taba-1-1024x654.jpg"
                                    alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    25% OFF</div>
                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Taba</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="saint.php">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="Saint Catherine/vlad-kiselov-Fe3eF795O24-unsplash-1.jpg" alt=""
                            style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF
                        </div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Saint
                            Cathrine</div>
                    </a>
                </div>
                <div class="col-lg-100 col-md-500 wow zoomIn" data-wow-delay="0.5s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="ras.php">
                        <img class="img-fluid position-absolute w-100 h-100" src="ras shetaan/edit 2.jpg" alt=""
                            style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">15% OFF
                        </div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Ras
                            Shetaan</div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-map-marker-alt fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4"><a href="Package.php"> Where?</a></h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Choose your prefered destination, <br> ,program you like. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-clock fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4"><a href="booking.php#booking-form">When?</a> </h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Now choose your perfect time for the perfect vacation. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4"><a href="booking.php#booking-form">Confirm!</a></h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Now Choose your prefered payment method, Now Lets go! <br></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Process Start -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Team</h6>
                <h1 class="mb-5">Meet Our Team</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/Menna.jpeg" alt="" height="300" width="500">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1"
                                href="https://www.facebook.com/menna.alaa.71404?mibextid=LQQJ4d"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/menna-alaa-863a6720b"><i
                                    class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1"
                                href="https://instagram.com/menna.alaa06?igshid=YmMyMTA2M2Y="><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Menna Talaah Alaa</h5>
                            <small>Team Leader.<br>Front-End Team.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/Abdallah.jpeg" alt="" height="300" width="500">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1"
                                href="https://www.facebook.com/abdallah.elshamy.33?mibextid=LQQJ4d"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1"
                                href="https://instagram.com/elshamyy33?igshid=YmMyMTA2M2Y="><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Abdallah Mohamed</h5>
                            <small>Co-Founder.<br>DataBase Team.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/Mariam.jpeg" alt="" height="300" width="500">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1"
                                href="https://www.facebook.com/profile.php?id=100009302018230&mibextid=LQQJ4d"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1"
                                href="https://instagram.com/mariam.arb2?igshid=YmMyMTA2M2Y="><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mariam Mahmoud</h5>
                            <small>Founder.<br>Front-End Team.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/Donia.jpg" alt="" height="300" width="500">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1"
                                href="https://www.facebook.com/profile.php?id=100009302018230&mibextid=LQQJ4d"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1"
                                href="https://instagram.com/doniamohameed66?igshid=YmMyMTA2M2Y="><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Neamaat Mohamed</h5>
                            <small>Team member.<br>DataBase Team.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/Noura.jpg" alt="" height="500" width="500">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1"
                                href="https://www.facebook.com/noura.hany.180?mibextid=LQQJ4d"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1"
                                href="https://instagram.com/no_uraa_hany?igshid=YmMyMTA2M2Y="><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Noura Hany</h5>
                            <small>Team member.<br>DataBase Team.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/Yasmine.jpg" alt="" height="300" width="500">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1"
                                href="https://www.facebook.com/yasmeen.mohamed.3557?mibextid=LQQJ4d"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1"
                                href="https://instagram.com/yasmiinmuhamed?igshid=YmMyMTA2M2Y="><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Yasmine Mohamed</h5>
                            <small>Team member.<br>DataBase Team.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/Joo.jpeg" alt="" height="300" width="500">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1" href="https://instagram.com/__j0oo?igshid=YmMyMTA2M2Y="><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Youssef Mohamed</h5>
                            <small>Team member.<br>Back-End Team.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/Debo.jpeg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Hossam ELdien Khaled</h5>
                            <small>Team member.<br>Back-End Team.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/Valeria Pedro.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Valeria Pedro</h5>
                    <p>Spain, Mayroka</p>
                    <p class="mt-2 mb-0">It was a good choice for me to travel with -Adventurous-, i felt the beauty of
                        everything with them; Everthing was so easy and i am happy to knew This staff.<br> Thanks for
                        your efforts, Everthing was great❤️💚❤️.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/Evan Igro.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Evan Igor</h5>
                    <p>Russia, Maskova</p>
                    <p class="mt-2 mb-0">It was a good trip, Everything was so organized & Beautiful as I asked for
                        it.<br> I hope i could join them again soon because it was so effective to me & i learned new
                        things Thank you for everything.<br> Спасибо😍.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/Morad Khaled.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Morad Khaled</h5>
                    <p>Egypt, Cairo</p>
                    <p class="mt-2 mb-0">It was a great exprience to join a trip with this team and i hope i could join
                        them again soon.<br> I have seen and enjoyed many places that i didn't know before,<br>Thank you
                        for all thge knowledge i gain from your team🥰.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/Bensu Ercel.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Bencu Erçel</h5>
                    <p>Turkey, Ankara</p>
                    <p class="mt-2 mb-0">I can't describe how much i felt happy in this trip, Everthing was so nice the
                        team, organization everthing really.<br> I was so depressed but after this trip i am with
                        positive energy, It was a great experience for me💙.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/Akram Ammar.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Akram Ammar</h5>
                    <p>UAE, Ajman</p>
                    <p class="mt-2 mb-0">I saw many natural places in this trip and i felt so happy with this team.<br>
                        All i can say thanks for this website that make everything easy for enjoying my holiday.<br>I
                        will join them again soon.<br> God Bless This team Inshallah😻.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/Cyrena Hani.webp"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Cyrena Hani</h5>
                    <p>Lebanon, Beirut</p>
                    <p class="mt-2 mb-0">I booked a full board trip with Adventurous and the least i can say is that
                        they were perfect! Starting from the website that made everything easier for me, to the very
                        friendly staff they have, moving on to the comfortable transportation & thier drivers♥️.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/Rahul Manish1.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Rahul Manish</h5>
                    <p>India, Chennai</p>
                    <p class="mt-2 mb-0">The trip was literally everything i dreamt of and the best thing about it is
                        that i could plan everything i need in advance through their website.<br>Definitely it cannot be
                        the last time using this website!!❤️</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/Ava Milo.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Ava Milo</h5>
                    <p>Kenya, Nairobi</p>
                    <p class="mt-2 mb-0">It was the most wonderful experience ever, as i was able to choose my own
                        program through adventurous, as it is one of the easiest sites to choose distinct camping sites
                        due to its many choices and facilitates the reservation process🤩.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/Aiden Hackson.jpeg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Aiden Jackson</h5>
                    <p>Canada, Toronto</p>
                    <p class="mt-2 mb-0">Everthing was great starting with choosing the camping site and the special
                        program that I want, to the end of facilitating transportation and travel conditions .. A site
                        that is really worth trying It has become my favorite site and I will always use it!👍🏻.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/Emilia Hans.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Emilia Hans</h5>
                    <p>German, Dresden</p>
                    <p class="mt-2 mb-0">One of the easiest sites to book for camping, and it is characterized by many
                        distinguished programs for the trip.<br> I was able to choose the appropriate program, which
                        included everything I needed from the beginning of the trip to its end💜.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/Jacob Ellias.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Jakob Elias</h5>
                    <p>Austria, Vienna</p>
                    <p class="mt-2 mb-0">Everything i asked for all the details, with the highest service from all
                        parties to the camp crew, good treatment, cleanliness of the camp, means of transportation,
                        drinks & food everthing was Perfect!; It can't be the last time I use this site. I will use it
                        every time❣️.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="lib/bootstrap-5.0.2/dist/js/bootstrap.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


</body>

</html>