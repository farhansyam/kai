<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Maxa - Multipurpose HTML5 Template">

    <!-- ========== Page Title ========== -->
    <title>Konsultan Ahli IT Home Pages</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/2.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('assets/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/assets/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/assets/css/elegant-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/assets/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/assets//css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/assets/css/responsive.css')}}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->


</head>

<body class="blue">

    <!-- Preloader Start -->
    <!-- <div id="site-preloader" class="site-preloader">
        <div class="loader-wrap">
            <div class="ring">
                <span></span>
            </div>
            <h2>KAI</h2>
        </div>
    </div> -->
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container-full">

                <!-- Start Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/2.png" class="logo logo-display" alt="Logo">
                        <img src="assets/img/1.png" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="#about">About</a></li>
                        <li><a href="#team-area">Our Team</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="menu"><a href="{{route('login')}}"><i class=""></i> Login</a></li>
                      <li class="menu"><a href="{{route('register')}}"><i class=""></i> Register</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area text-light text-default top-pad-50">
        <!-- Shape -->
        <div class="shape-left" style="background-image: url(assets/img/shape/40.png);"></div>
        <!-- End Shape -->
        <div class="item">
            <div class="box-table">
                <div class="box-cell">
                    <div class="container">
                        <div class="content">
                            <div class="row align-center">
                                <div class="col-lg-7 info"> 
                                    <div class="atas-teks">
                                    <h2 class="wow fadeInDown" data-wow-duration="1s">Konsultan Ahli IT</h2>
                                    <h4 class="wow fadeInLeft" data-wow-duration="1.3s">
                                        Forum Diskusi IT (Problem Solving) dan Menyediakan layanan Konsultasi bidang IT.
                                    </h4>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="thumb width-110 atas-gambar">
                                        <img src="assets/img/illustration/hero-img.png" alt="Thumb">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Star Services
    ============================================= -->
    <div class="services-list-area overflow-hidden default-padding bottom-less">
        <div class="container">
            <section id="about">
                <br><br><br><br><br>

            <div class="heading-center text-center">
                <h3>About KAI</h3><br>
            </div>
            <div class="row">
                <div class="col-lg-6">
                        <p>“KAI (Konsultan Ahli IT)” Website ini dilatar belakangi oleh berkembangnya teknologi secara cepat dan permintaan pasar
                        software yang tinggi. Sehingga perlunya diadakan inovasi terkait konsultasi dibidang IT secara digital, maka dari itu
                        kami membuat website yang dapat melayani kebutuhan pasar tersebut. Seperti pengamanan sistem data dengan cara
                        penetration testing"</p>
                </div>
                <div class="col-lg-6">
                        <p>“troubelshooting dari suatu source code, problem solving terkait masalah yang terjadi pada komputer,
                        serta melayani kebutuhan software sesuai keinginan dengan harga yang kompetitif. Kemudian didalam website ini juga
                        terdapat fitur freelance yang kendala tersebut dapat diatasi oleh mahasiswa yang sudah terdaftar menjadi member di forum
                        tersebut"</p>
                </div>
            </div>
        </section>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Fun Factor 
    ============================================= -->
    <!-- Start About Us Area
    ============================================= -->

    <!-- Star Work Process
    ============================================= -->
    <div class="our-process-area text-center relative default-padding-bottom bottom-less">
        <div class="container data-aos ">
            <section id="team-area" >
            <br><br><br><br><br>
            <div class="row" >
                <div class="col-lg-6 offset-lg-3" >
                    <div class="heading-center text-center">
                        <h2>Our KAI Team's</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container box-team">
            <div class="process-list-items">

                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-6 col-md-6 single-item">
                        <div class="team-item">
                            <div class="icon-profile">
                                <img src="assets/img/team/susil.jpeg" alt="" style="border-radius:50%">
                            </div>
                            <h4>Susilowati</h4>
                            <h5>Chief Executive Officer</h5>
                            <i>
                                Sekolah Vokasi IPB University.
                            </i>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 single-item">
                        <div class="item">
                            <div class="icon-profile">
                                <img src="assets/img/team/sured.jpeg" alt="" style="border-radius:50%">
                            </div>
                            <h4>Suredsi Ulpada</h4>
                            <h5>Web Security</h5>
                            <i>
                                Sekolah Vokasi IPB University.
                            </i>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 single-item">
                        <div class="item">
                            <div class="icon-profile">
                                <img src="assets/img/team/Lazuardi.jpeg" alt="" style="border-radius:50%">
                            </div>
                            <h4>Lazuardi Siddiq</h4>
                            <h5>Front-End Developer</h5>
                            <i>
                                Sekolah Vokasi IPB University.
                            </i>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 single-item">
                        <div class="item">
                            <div class="icon-profile">
                                <img src="assets/img/team/farhan.jpeg" alt="" style="border-radius:50%">
                            </div>
                            <h4>Farhan Syamsuddin</h4>
                            <h5>Back-End Developer</h5>
                            <i>
                                Sekolah Vokasi IPB University.
                            </i>
                        </div>
                    </div>
                    
                    <!-- End Single Item -->
                </div>
            </div>
            <div class="container">
                <section id="contact">
                <div style="padding-top: 100px;"><br></div>
                <div class="contact-items">
                    <div class="row" align="center">
                        
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-md-4 rata-tengah">
                                    <div class="item">
                                        <div class="info">
                                            <h6> <i class="flaticon-location"></i> Location</h6>
                                            <p class="rata-tengah">
                                                Jl. Kumbang No. 33 16128 Bogor West Java
                                            </p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-md-4 rata-tengah" >
                                    <div class="item">
                                        <div class="info">
                                            <h6> <i class="flaticon-telephone"></i> Make a Call</h6>
                                            <p class=" rata-tengah">
                                                +62-940-394-2948 <br> +62-389-385-3807
                                            </p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-md-4">
                                    <div class="item">
                                        <div class="info">
                                            <h5><i class="flaticon-email"></i> Send a Mail</h5>
                                            <p class=" rata-tengah">
                                                kai@gmail.com <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                        
    
                    </div>
                </div>
            </div>
        
        </div>
        </section>
        
    </div>
    <!-- End Work Process -->

    <!-- End Clients Area -->

    <!-- Start Overflow Box
    ============================================= -->
    <div class="overflow-box overflow-hidden">
        <!-- Start Pricing Area
        ============================================= -->
        <!-- End Pricing Area -->

        <!-- Star Testimonials
        ============================================= -->
    </div>
    <!-- End Overflow Box -->


    <!-- Star Contact Area
    ============================================= -->
    <div class="contact-area default-padding">
       
 <!-- Fixed BG -->
 
<!-- Fixed BG -->
        
    </div>
    <!-- End Contact Area -->

    <!-- Star Blog
    ============================================= -->
    <!-- End Blog -->

    <!-- Star Footer
    ============================================= -->
    <footer>
        &copy; Copyright 2022. KAI-Team
    </footer>
    <!-- End Footer-->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{asset('assets/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('assets/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{asset('assets/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/progress-bar.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/count-to.js')}}"></script>
    <script src="{{asset('assets/assets/js/YTPlayer.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/assets/js/bootsnav.js')}}"></script>
    <script src="{{asset('assets/assets/js/main.js')}}"></script>

</body>
</html>