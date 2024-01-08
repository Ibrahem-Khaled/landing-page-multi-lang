<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ __('messages.danah') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Favicons -->
    <link href="{{ asset('logo.jpeg') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .icon-box p,
        h4 {
            text-align: center;
        }

        .img-fluids {
            object-fit: contain;
            width: 15%;
        }

        .img-fluide {
            height: 200px;
            width: 250px;
        }

        ul li {
            list-style: none;
        }

        .member-info span {
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:khaled@danahsports.com">info@danahsports.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+966 55 313 7737</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://twitter.com/@DanahSports" target="_blank" class="twitter"><i
                        class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=61554671773801" target="_blank" class="facebook"><i
                        target="_blank" class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/danahsports/" target="_blank" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/danah-sports" target="_blank" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
            </div>
            <div class="col-md-4">
                <select class="form-control changeLang">
                    <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>عربي</option>
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                </select>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html"><img src="{{ asset('logo.jpeg') }}" width="220px" /></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">{{ __('messages.home') }}</a></li>
                    <li><a class="nav-link scrollto" href="#about">{{ __('messages.about') }}</a></li>
                    <li><a class="nav-link scrollto" href="#clients">{{ __('messages.clients') }}</a></li>
                    <li><a class="nav-link scrollto"
                            href="{{ route('download.pdf') }}">{{ __('messages.companyProfile') }}</a></li>
                    <li><a class="nav-link scrollto"
                            href="https://docs.google.com/forms/d/1nVKBFmGZMnSphE-4OKIsVEttoTicX_YVD6GqS64eph4/prefill">{{ __('messages.register') }}</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>{{ __('messages.welcome') }}<span> {{ __('messages.danah') }}</span></h1>
            <h2 style="color: antiquewhite">{{ __('messages.solve') }}</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">{{ __('messages.started') }}</a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">{{ __('messages.card1Title') }}</a></h4>
                            <p class="description">{{ __('messages.card1P1') }}</p>
                            <p class="description">{{ __('messages.card1P2') }}</p>
                            <p class="description">{{ __('messages.card1P3') }}</p>
                            <p class="description">{{ __('messages.card1P4') }}</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">{{ __('messages.card2Title') }}</a></h4>
                            <p class="description">{{ __('messages.card2P1') }}</p>
                            <p class="description">{{ __('messages.card2P2') }}</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">{{ __('messages.card3Title') }}</a></h4>
                            <p class="description">{{ __('messages.card3P1') }}</p>
                            <p class="description">{{ __('messages.card3P2') }}</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">{{ __('messages.card4Title') }}</a></h4>
                            <p class="description">{{ __('messages.card4P1') }}</p>
                            <p class="description">{{ __('messages.card4P2') }}</p>
                            <p class="description">{{ __('messages.card4P3') }}</p>
                            <p class="description">{{ __('messages.card4P4') }}</p>
                            <p class="description">{{ __('messages.card4P5') }}</p>
                            <p class="description">{{ __('messages.card4P6') }}</p>
                            <p class="description">{{ __('messages.card4P7') }}</p>
                            <p class="description">{{ __('messages.card4P8') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ __('messages.about') }}</h2>
                    <h3><span> {{ __('messages.about') }} </span></h3>
                    <p style="font-size: 17px">{{ __('messages.aboutUs') }}</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <img src="https://images.unsplash.com/photo-1511886929837-354d827aae26?q=80&w=1664&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            height="150px" style="border-radius: 5px" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <p class="fst-italic" style="font-weight: 900">
                            {{ __('messages.moreAboutUs') }}
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">
                <div class="row" style="align-items: center;display: flex;justify-content: space-around;">
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div style="display: flex;justify-content: center;align-items: center;">
                                <h4>+</h4>
                                <span data-purecounter-start="0" data-purecounter-end="374"
                                    data-purecounter-duration="1" class="purecounter"></span>
                            </div>
                            <p>{{ __('messages.HappyClients') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <div style="display: flex;justify-content: center;align-items: center;">
                                <h4>+</h4>
                                <span data-purecounter-start="0" data-purecounter-end="120"
                                    data-purecounter-duration="1" class="purecounter"></span>
                            </div>
                            <p> {{ __('messages.Projects') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <div style="display: flex;justify-content: center;align-items: center;">
                                <h4>+</h4>
                                <span data-purecounter-start="0" data-purecounter-end="22"
                                    data-purecounter-duration="1" class="purecounter"></span>
                            </div>
                            <p> {{ __('messages.HoursOfSupport') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container" data-aos="zoom-in">
                <div style="align-items: center;display: flex;justify-content: space-around;">
                    <img src="assets/img/clients/1.jpeg" class="img-fluids" alt="">
                    <img src="assets/img/clients/2.jpeg" class="img-fluids" alt="">
                    <img src="assets/img/clients/3.jpeg" class="img-fluids" alt="">
                    <img src="assets/img/clients/4.jpeg" class="img-fluids" alt="">
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2> {{ __('messages.service') }}</h2>
                    <h3>{{ __('messages.serviceDisc') }} <span> {{ __('messages.danah') }}</span></h3>
                    <p>{{ __('messages.service1') }}</p>
                    <p>{{ __('messages.service2') }}</p>
                    <p>{{ __('messages.service3') }}</p>
                    <p>{{ __('messages.service4') }}</p>
                    <p>{{ __('messages.service5') }}</p>
                    <p>{{ __('messages.service6') }}</p>
                    <p>{{ __('messages.service7') }}</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a style="color: cadetblue;">{{ __('messages.serviceTitle1Card1') }}</a></h4>
                            <p>{{ __('messages.serviceDisc1Card1') }}</p>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle2Card1') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.serviceDisc2Card1') }}</li>
                                    <li>{{ __('messages.serviceDisc3Card1') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle3Card1') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service2Disc1Card1') }}</li>
                                    <li>{{ __('messages.service2Disc2Card1') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle4Card1') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service3Disc1Card1') }}</li>
                                    <li>{{ __('messages.service3Disc2Card1') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle5Card1') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service4Disc1Card1') }}</li>
                                    <li>{{ __('messages.service4Disc2Card1') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle6Card1') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service5Disc1Card1') }}</li>
                                    <li>{{ __('messages.service5Disc2Card1') }}</li>
                                </ul>
                            </div>
                            <h5>{{ __('messages.serviceFooterCard1') }}</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a style="color: cadetblue;">{{ __('messages.serviceTitle1Card2') }}</a></h4>
                            <p>{{ __('messages.serviceDisc1Card2') }}</p>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle2Card2') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.serviceDisc2Card2') }}</li>
                                    <li>{{ __('messages.serviceDisc3Card2') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle3Card2') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service2Disc1Card2') }}</li>
                                    <li>{{ __('messages.service2Disc2Card2') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle4Card2') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service3Disc1Card2') }}</li>
                                    <li>{{ __('messages.service3Disc2Card2') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle5Card2') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service4Disc1Card2') }}</li>
                                    <li>{{ __('messages.service4Disc2Card2') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle6Card2') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service5Disc1Card2') }}</li>
                                    <li>{{ __('messages.service5Disc2Card2') }}</li>
                                </ul>
                            </div>
                            <h5>{{ __('messages.serviceFooterCard2') }}</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a style="color: cadetblue;">{{ __('messages.serviceTitle1Card3') }}</a></h4>
                            <p>{{ __('messages.serviceDisc1Card3') }}</p>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle2Card3') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.serviceDisc2Card3') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle3Card3') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service2Disc1Card3') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle4Card3') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service3Disc1Card3') }}</li>
                                </ul>
                            </div>
                            <h5>{{ __('messages.serviceFooterCard3') }}</h5>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 5px">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a style="color: cadetblue;">{{ __('messages.serviceTitle1Card4') }}</a></h4>
                            <p>{{ __('messages.serviceDisc1Card4') }}</p>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle2Card4') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.serviceDisc2Card4') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle3Card4') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service2Disc1Card4') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle4Card4') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service3Disc1Card4') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle5Card4') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service4Disc1Card4') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a style="color: cadetblue;">{{ __('messages.serviceTitle1Card5') }}</a></h4>
                            <p>{{ __('messages.serviceDisc1Card5') }}</p>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle2Card5') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.serviceDisc2Card5') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle3Card5') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service2Disc1Card5') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle4Card5') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service3Disc1Card5') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle5Card5') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service4Disc1Card5') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a style="color: cadetblue;">{{ __('messages.serviceTitle1Card6') }}</a></h4>
                            <p>{{ __('messages.serviceDisc1Card6') }}</p>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle2Card6') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.serviceDisc2Card6') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle3Card6') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service2Disc1Card6') }}</li>
                                </ul>
                            </div>
                            <div>
                                <h4><a href="">{{ __('messages.serviceTitle4Card6') }}</a></h4>
                                <ul>
                                    <li>{{ __('messages.service3Disc1Card6') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ __('messages.team') }}</h2>
                    <h3> {{ __('messages.teamDisc') }} <span> {{ __('messages.team') }} </span></h3>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="team/khaled.jpeg" class="img-fluide" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ __('messages.teamlead') }}</h4>
                                <span>{{ __('messages.teamLeadDisc') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="team/ibrahem.jpeg" class="img-fluide" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ __('messages.team1') }}</h4>
                                <span>{{ __('messages.team1Disc') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="team/roshdy.jpeg" class="img-fluide" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ __('messages.team2') }}</h4>
                                <span>{{ __('messages.team2Disc') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="team/seaf.jpeg" class="img-fluide" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ __('messages.team3') }}</h4>
                                <span>{{ __('messages.team3Disc') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="team/ahmedF.jpeg" class="img-fluide" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ __('messages.team4') }}</h4>
                                <span>{{ __('messages.team4Disc') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="team/ahmedM.jpeg" class="img-fluide" alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ __('messages.team5') }}</h4>
                                <span>{{ __('messages.team5Disc') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Team Section -->

        <section id="contacUs" class="contact section-bg">
            <div class="container mt-5">
                <h2>Contact Us</h2>
                <form id="contactForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="submitForm()">Submit</button>
                </form>
            </div>
        </section>
        <!-- End Contact Section -->
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3><span>.</span>{{ __('messages.danah') }}</h3>
                        <p>
                            {{ __('messages.address') }}
                            <strong>Phone:</strong>+966 55 313 7737<br>
                            <strong>Email:</strong>info@danahsports.com<br>
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/@DanahSports"target="_blank" class="twitter"><i
                                    class="bx bxl-twitter"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=61554671773801" target="_blank"
                                class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/danahsports/" target="_blank" class="instagram"><i <a
                                    href="https://www.linkedin.com/company/danah-sports" class="linkedin"><i
                                        class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>DANAH</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script type="text/javascript">
        $(function() {
            var url = "{{ route('changeLang') }}";

            $(".changeLang").change(function() {
                window.location.href = url + "?lang=" + $(this).val();
            });
        });
    </script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
