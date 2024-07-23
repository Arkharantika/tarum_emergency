<!DOCTYPE html>
<html lang="en">

<head>
    <title>SISTARUM - Sistem Informasi Saluran Irigasi Citarum</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="author" content="https://web.tatonas.co.id/">
    <meta name="description" content="">
    <meta name="keywords"
        content="Pusat pembuatan peralatan material testing Hidrologi & Klimatologi terbaik di Indonesia. Terakreditasi dari KAN sehingga kualitas tak perlu di ragukan lagi.">
    <meta name="robots" content="all,index,follow">
    <meta http-equiv="Content-Language" content="id-ID">
    <meta NAME="Distribution" CONTENT="Global">
    <meta NAME="Rating" CONTENT="General">
    <link rel="canonical" href="https://web.tatonas.co.id/" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:title" content="Tatonas – Good Product Good Service" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="https://web.tatonas.co.id/" />
    <meta property="og:site_name" content="CV Tatonas" />

    <link rel="shortcut icon" href="{{asset('images/pupr.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/pupr.png')}}" type="image/x-icon">
    <!-- Stylesheets -->
    <link href="{{asset('assetnew/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assetnew/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assetnew/css/style-custom.css')}}" rel="stylesheet">
    <link href="{{asset('assetnew/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assetnew/css/color-themes/blue-theme.css')}}" rel="stylesheet" id="theme-color-file">
    <script src="{{asset('assetnew/js/jquery.js')}}"></script>
    <style type="text/css">
        .main-footer .footer-bottom .footer-nav .theme_color {
            color: #00b9e7 !important;
        }
    </style>

</head>

<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <style type="text/css">
            .sidenav-bar .language {
                position: absolute;
                left: 20px;
                text-align: center;
                color: #ffffff;
                cursor: pointer;
                z-index: 10;
                -webkit-transform: translateY(-50px);
                -moz-transform: translateY(-50px);
                -ms-transform: translateY(-50px);
                -o-transform: translateY(-50px);
                transform: translateY(-50px);
                font-family: "Oswald", sans-serif;
            }

            .bahasa {
                background-color: rgba(0, 0, 0, 0.20);
                font-size: 18px;
                float: left;
                padding: 5px 10px;
                color: #ffffff;
            }

            .sidenav-bar .language .active {
                color: #00b9e7;
            }

            .card-bar {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #fff;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                z-index: 1000;
                width: 700px;
                height: 700px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .card-bar img {
                max-width: 100%;
                max-height: 100%;
                margin: 5px;
                border-radius: 5px;
            }

            /* .tombol-mini {
                width: 10px;
                height: 10px;
                border-radius: 50%;
                box-shadow: 0px 0px 1px 1px #0000001a;
                animation: pulse-animation 2s infinite;
                background: #8B0000;
                position: absolute;
                top: 50px;
                left: 50px;
                z-index: 1001;
                cursor: pointer;
            }

            .tombol-mini .tooltiptext {
                visibility: hidden;
                width: 120px;
                background-color: #333;
                color: #fff;
                text-align: center;
                border-radius: 6px;
                padding: 5px;
                position: absolute;
                z-index: 1;
                bottom: 125%;
                left: 50%;
                margin-left: -60px;
                opacity: 0;
                transition: opacity 0.3s;
            }

            .tombol-mini:hover .tooltiptext {
                visibility: visible;
                opacity: 1;
            } */

            .tombol-mini {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    box-shadow: 0px 0px 1px 1px #0000001a;
    animation: pulse-animation 2s infinite;
    background: #8B0000;
    position: absolute;
    z-index: 1001;
    cursor: pointer;
}

.tombol-mini .tooltiptext {
    visibility: visible; /* Make it visible by default */
    opacity: 1; /* Ensure it is fully opaque */
    width: 120px;
    background-color: transparent;
    /* background-color: rgba(10, 100, 10, 0.2); */
    color: #000;
    text-align: center;
    border-radius: 6px;
    padding: 5px;
    position: absolute;
    z-index: 1;
    bottom: 100%;
    /* left: 50%; */
    left: 100%;
    /* margin-left: -60px; */
    margin-left: -30px;
    transition: opacity 0.3s;
}

/* Optional: Adjust the position if necessary */
.tombol-mini .tooltiptext {
    /* Modify as needed for better positioning */
    bottom: 10px; /* Example: Adjust this to fit your design */
}


            @keyframes pulse-animation {
                0% {
                    box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.2);
                }

                100% {
                    box-shadow: 0 0 0 30px rgba(0, 0, 0, 0);
                }
            }

            .tutung {
                transition: transform 0.5s ease-in-out;
            }

            .tutung:hover {
                transform: scale(1.2);
            }

            .close-button {
                position: absolute;
                top: 5px;
                right: 5px;
                cursor: pointer;
                font-size: 20px;
                color: #333;
            }

            .custom-div {
                width: 200px;
                /* Set the width to your desired value */
                height: 100px;
                /* Set the height to your desired value */
                background-color: #f0f0f0;
                /* Optional: Set a background color for better visibility */
                border: 1px solid #ccc;
                /* Optional: Add a border for better visibility */
                position: absolute;
                top: 50px;
                left: 50px;
                z-index: 1001;
            }
        </style>
        <!-- Sidenav Bar -->
        <section class="sidenav-bar">
            <div class="nav-box">
                <div class="inner-box">
                    <div class="upper-box">
                        <div class="btn-box">
                            <button class="close-btn"><span class="fa fa-times"></span></button>
                        </div>
                    </div>

                    <!-- .Side Nav -->
                    <nav class="side-nav">
                        <ul class="navigation clearfix" id="nav">
                            <li class="current"><a href="{{url('/')}}">Home</a></li>
                            <li class=""><a href="{{url('/map')}}">Peta</a></li>
                            <li class=""><a href="{{url('/home')}}">Admin</a></li>
                            <li class="dropdown "><a href="javascript:void(0)">Jaringan Kami</a>
                                <ul>
                                    <li><a href="{{url('https://www.jasatirta2.co.id/')}}">PJT II</a></li>
                                    <li><a href="{{url('https://sihka.pusair-pu.go.id/')}}">SIHKA</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="{{url('/kontak')}}">Contact</a></li>
                        </ul>
                    </nav><!-- /.Side-menu -->

                    <div class="contact-info-box">
                        <!--Info Box-->
                        <div class="info-box">
                            <div class="icon-box"><span class="fa fa-home"></span></div>
                            <p>KANTOR PUSAT PERUM JASA TIRTA II<br>Jl. Lurah Kawi No. 1 Jatiluhur, Kab. Purwakarta, Jawa
                                Barat</p>
                        </div>

                        <!--Info Box-->
                        <div class="info-box">
                            <div class="icon-box"><span class="flaticon-call-1"></span></div>
                            <p><a href="tel:62264201972">(0264) 201972</a></p>
                            <p><a href="mailto:pjt2@jasatirta2.co.id">pjt2@jasatirta2.co.id</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Sidenav Bar -->

        <!-- Start Main Content -->
        <main id="content">

            <span class="header-span"></span>

            <!-- Main Header-->
            <header class="main-header header-style-two">
                <div class="outer-container">
                    <div class="main-box clearfix">
                        <div class="logo-box">
                            <div class="logo"><a href="{{url('/')}}"><img src="{{asset('images/logo-pupr.png')}}" alt=""
                                        title="" style="height: 50px;"></a></div>
                        </div>

                        <div class="nav-outer">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="{{url('/')}}">Home</a></li>
                                        <li class=""><a href="{{url('/map')}}">Peta</a></li>
                                        <li class=""><a
                                                href="{{url('https://drive.google.com/drive/folders/1ARE7uUyh4Wtf1UfFhx5bD137H65m5l6L')}}">Data
                                                - data</a></li>
                                        <li class=""><a href="{{url('/home')}}">Admin</a></li>
                                        <li class="dropdown "><a href="javascript:void(0)">Jaringan Kami</a>
                                            <ul>
                                                <li><a href="{{url('https://www.jasatirta2.co.id/')}}">PJT II</a></li>
                                                <li><a href="{{url('https://sihka.pusair-pu.go.id/')}}">SIHKA</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="{{url('/kontak')}}">Contact</a></li>
                                    </ul>

                                </div>
                            </nav>
                            <!-- Main Menu End-->

                            <div class="outer-box clearfix">
                                <div class="btn-box no-touch"><button class="nav-toggler"><span></span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--End Main Header -->

            <!-- Content -->
            <!-- Banner Section -->
            <section class="banner-section-two">
                <div class="banner-carousel owl-carousel owl-theme">
                    <div class="slide-item" style="background-image: url({{asset('images/1.jpg')}});">
                        <div class="content-box">
                            <div class="content">
                                <div class="auto-container">
                                    <h2><span class="theme_color">Sistem Monitoring Hidrologi</span> untuk Saluran
                                        Irigasi <span class="theme_color">Citarum</span></h2>
                                    <div class="text">Sistem informasi untuk monitoring aliran irigasi di Tarum Barat
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{url('/map')}}" class="theme-btn btn-style-two"><span
                                                class="btn-title">Lihat Peta</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item" style="background-image: url({{asset('images/2.jpg')}});">
                        <div class="content-box">
                            <div class="content">
                                <div class="auto-container">
                                    <h2><span class="theme_color">Sistem Monitoring Hidrologi</span> untuk Saluran
                                        Irigasi <span class="theme_color">Citarum</span></h2>
                                    <div class="text">Sistem informasi untuk monitoring aliran irigasi di Tarum Barat
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{url('/map')}}" class="theme-btn btn-style-two"><span
                                                class="btn-title">Lihat Peta</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item" style="background-image: url({{asset('images/3.jpg')}});">
                        <div class="content-box">
                            <div class="content">
                                <div class="auto-container">
                                    <h2><span class="theme_color">Sistem Monitoring Hidrologi</span> untuk Saluran
                                        Irigasi <span class="theme_color">Citarum</span></h2>
                                    <div class="text">Sistem informasi untuk monitoring aliran irigasi di Tarum Barat
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{url('/map')}}" class="theme-btn btn-style-two"><span
                                                class="btn-title">Lihat Peta</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item" style="background-image: url({{asset('images/4.jpg')}});">
                        <div class="content-box">
                            <div class="content">
                                <div class="auto-container">
                                    <h2><span class="theme_color">Sistem Monitoring Hidrologi</span> untuk Saluran
                                        Irigasi <span class="theme_color">Citarum</span></h2>
                                    <div class="text">Sistem informasi untuk monitoring aliran irigasi di Tarum Barat
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{url('/map')}}" class="theme-btn btn-style-two"><span
                                                class="btn-title">Lihat Peta</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--END Banner Section -->

            <!-- About Us -->
            <section class="about-us">
                <div class="auto-container">
                    <div class="sec-title light">
                        <span class="float-text">About</span>
                        <h2>About <span>SISTARUM</span></h2>
                    </div>
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <!-- <div class="about-years">
                            	<h3>Sistem Informasi Terpadu untuk Monitoring Hidrologi Saluran Irigasi Tarum Barat</h3></div> -->
                                <div class="text-box">
                                    <p>SISTARUM (Sistem Informasi Saluran Irigasi Citarum) merupakan Sistem Informasi
                                        Terpadu yang inovatif untuk memantau secara efisien kondisi hidrologi pada
                                        Saluran Irigasi Citarum</p>
                                </div>

                                <!-- Feature Block -->
                                <div class="feature-block wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="icon-box"><span class="icon flaticon-worldwide"></span></div>
                                        <h4>Peta Monitoring</h4>
                                        <div class="text">Peta Monitoring yang informatif, dilengkapi dengan data posisi
                                            yang terperinci pada setiap koordinat titik lokasi.</div>
                                    </div>
                                </div>

                                <!-- Feature Block -->
                                <div class="feature-block wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="icon-box"><span class="icon flaticon-play-button-4"></span></div>
                                        <h4>Pantuan CCTV</h4>
                                        <div class="text">Dilengkapi dengan pemantauan CCTV 24 jam yang Terintegrasi
                                            dalam Sistem Telemetri.</div>
                                    </div>
                                </div>

                                <!-- Feature Block -->
                                <div class="feature-block wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="icon-box"><span class="icon flaticon-bar-chart"></span></div>
                                        <h4>Grafik Statistik</h4>
                                        <div class="text">Tampilkan hasil pemantauan sensor dalam bentuk grafik yang
                                            informatif dan mudah dipahami.</div>
                                    </div>
                                </div>

                                <!-- Feature Block -->
                                <div class="feature-block wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="icon-box"><span class="icon flaticon-file"></span></div>
                                        <h4>Download Data</h4>
                                        <div class="text">Unduh Data Telemetri dalam format Excel / PDF untuk memudahkan
                                            Anda dalam mengolah data.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    <div class="slide-item">
                                        <figure class="image"><a href="{{asset('images/about-us-5.png')}}"
                                                class="lightbox-image" data-fancybox="images"><img
                                                    src="{{asset('images/about-us-5.png')}}" alt=""></a></figure>
                                    </div>
                                    <div class="slide-item">
                                        <figure class="image"><a href="{{asset('images/about-us-1.png')}}"
                                                class="lightbox-image" data-fancybox="images"><img
                                                    src="{{asset('images/about-us-1.png')}}" alt=""></a></figure>
                                    </div>
                                    <div class="slide-item">
                                        <figure class="image"><a href="{{asset('images/about-us-2.png')}}"
                                                class="lightbox-image" data-fancybox="images"><img
                                                    src="{{asset('images/about-us-2.png')}}" alt=""></a></figure>
                                    </div>
                                    <div class="slide-item">
                                        <figure class="image"><a href="{{asset('images/about-us-3.png')}}"
                                                class="lightbox-image" data-fancybox="images"><img
                                                    src="{{asset('images/about-us-3.png')}}" alt=""></a></figure>
                                    </div>
                                    <div class="slide-item">
                                        <figure class="image"><a href="{{asset('images/about-us-4.png')}}"
                                                class="lightbox-image" data-fancybox="images"><img
                                                    src="{{asset('images/about-us-4.png')}}" alt=""></a></figure>
                                    </div>
                                    <div class="slide-item">
                                        <figure class="image"><a href="{{asset('images/about-us-6.png')}}"
                                                class="lightbox-image" data-fancybox="images"><img
                                                    src="{{asset('images/about-us-6.png')}}" alt=""></a></figure>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
            <!-- End About Us -->

            <!-- Services Section -->
            <section class="services-section pt-0">
                <div class="auto-container">
                    <div class="sec-title text-center">
                        <span class="float-text">Information</span>
                        <h2>Status <span>Kendali Mutu</span></h2>
                    </div>

                    <div class="carousel-outer">
                        <!-- Services Carousel -->
                        <div class="services-carousel owl-carousel owl-theme fact-counter" id="kategori">
                            <div class="service-block">
                                <div class="inner-box">
                                    <img src="{{asset('images/cctv-icon.png')}}" style="width: 70px; margin:auto;"
                                        class="icon pb-4">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="6">0</span>
                                    </div>
                                    <h3>Total CCTV Aktif</h3>
                                </div>
                            </div>
                            <div class="service-block">
                                <div class="inner-box">
                                    <img src="{{asset('images/telemetry-icon.png')}}" style="width: 70px; margin:auto;"
                                        class="icon pb-4">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="22">0</span>
                                    </div>
                                    <h3>Total Pos Telemetry</h3>
                                </div>
                            </div>
                            <div class="service-block">
                                <div class="inner-box">
                                    <img src="{{asset('images/telemetry-icon.png')}}" style="width: 70px; margin:auto;"
                                        class="icon pb-4">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="5">0</span>
                                    </div>
                                    <h3>Total Pos Non-Telemetry</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <center><a href="{{url('http://kendalimutudata.pusair-pu.go.id:81')}}"
                            class="theme-btn btn-style-one" style="border: 1px solid #00b9e7;" target="_blank"><span
                                class="btn-title">Lihat Selengkapnya <i
                                    class="fas fa-angle-double-right"></i></span></a></center>
                </div>
            </section>
            <!-- End service Section -->

            <section class="about-section section-padding p-0" style="background: #252525;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="video-block" >
                                <img src="{{asset('images/monitoring-cctv.jpeg')}}" alt="" class="img-fluid"
                                    id="clickableImageXXX" style="cursor: pointer;" onclick="testcctv()">
                                <!-- <button class="btn btn-sm btn-primary" onclick="testcctv()"
                                    id="clickableImage" style="cursor: pointer;">test</button> -->
                            </div>
                        </div>

                        <div class="col-xl-6 pl-5 col-lg-6">
                            <div class="features-section mt-4 mt-lg-0 ">
                                <div class="sec-title active">
                                    <h3 class="font-weight-bold text-white">Monitoring CCTV <span
                                            style="color:#00b9e7">24 jam</span></h3>
                                </div>
                                <div class="text-column">
                                    <p>Deteksi dini adanya kenaikan atau penurunan status debit air via gambar visual
                                        maupun live streaming </p>
                                    <ul class="list-style-one">
                                        <li>Gambar dengan High Quality</li>
                                        <li>Diperkuat dengan daya ramah lingkungan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-section section-padding p-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 pl-5 col-lg-6">
                            <div class="features-section mt-lg-0 ">
                                <div class="sec-title active">
                                    <h3 class="font-weight-bold text-white">Management <span style="color:#00b9e7">Data
                                            Pos</span></h3>
                                </div>
                                <div class="text-column">
                                    <p>Disertai fitur untuk management data untuk pos hidrologi disertai dengan tampilan
                                        admin yang menarik</p>
                                    <ul class="list-style-one">
                                        <li>Desain Responsive</li>
                                        <li>Fitur Management Data</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <img src="{{asset('images/managementpos.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-section section-padding p-0" style="background: #252525;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <!-- <div class="video-block"> -->
                            <img onclick="tutungopen(this.src)" src="{{asset('images/newneraca2.jpg')}}"
                                style="cursor:pointer;" alt="" class="img-fluid">
                            <!-- <a href="#" class="video-icon"><i class="fa fa-play"></i></a> -->
                            <!-- </div> -->
                        </div>
                        <div class="col-xl-6 pl-5 col-lg-6">
                            <div class="features-section mt-lg-0 ">
                                <div class="sec-title active">
                                    <h3 class="font-weight-bold text-white"><span style="color:#00b9e7">Rating</span>
                                        Curve dan</h3><h3 class="font-weight-bold text-white"><span style="color:#00b9e7">Neraca</span>
                                        Air</h3>
                                </div>
                                <div class="text-column">
                                    <p>Sistem ini juga memilki fitur untuk melihat data neraca air</p>
                                    <ul class="list-style-one">
                                        <li>Desain Responsive</li>
                                        <li>Fitur Management Data</li>
                                        <button class="btn btn-lg btn-success" onclick="testgambar()" >Lihat Neraca Air</button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-section section-padding pt-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 pl-5 col-lg-6">
                            <div class="features-section mt-lg-0 ">
                                <div class="sec-title active">
                                    <h3 class="font-weight-bold text-white"><span style="color:#00b9e7">Visit</span>
                                        Lokasi</h3>
                                </div>
                                <div class="text-column">
                                    <p>Pihak PJT II maupun dari dinas, melakukan cek fisik secara berkala terhadap pos -
                                        pos yg terpasang</p>
                                    <ul class="list-style-one">
                                        <li>Pemeriksaan Rutin</li>
                                        <li>Maintenance Terjadwal</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <img src="{{asset('images/cekair2.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact-info-section"
                style="background-image: url(https://web.tatonas.co.id/asset/images/jasa-kalibrasi.png);">
                <div class="auto-container">
                    <div class="content">
                        <h2>Dapatkan <span style="color:#00b9e7">Update Terkini</span> Saluran Irigasi Citarum</h2>
                        <p class="text mb-3">Peroleh Informasi Terkini Saluran Irigasi Citarum secara Realtime, langsung
                            dari Genggaman Anda!</p>
                        <a href="{{url('/map')}}" class="theme-btn btn-style-one"
                            style="border: 1px solid #00b9e7;"><span class="btn-title">Lihat Peta Sekarang <i
                                    class="fas fa-angle-double-right"></i></span></a>
                    </div>
                </div>
            </section>
            <!--End Contact Info Section -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="auto-container">
                        <div class="row">
                            <!--Big Column-->
                            <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <!--Footer Column-->
                                    <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget about-widget">
                                            <div class="logo">
                                                <a href="{{url('/')}}"><img src="{{asset('images/logo-pupr.png')}}"
                                                        alt="" /></a>
                                            </div>
                                            <div class="text">
                                                <!-- <p>SISTARUM menampilkan pos duga air, baik pos manual/otomatis maupun pos telemetri. Dilengkapi dengan informasi detail pos berupa koordinat, alamat, dan foto pos.</p> -->
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2071976574357!2d106.8008284!3d-6.236397599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1422f877725%3A0x906e4d2b1bccd65!2sJl.%20Pattimura%20No.20%2C%20RT.2%2FRW.1%2C%20Selong%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012110!5e0!3m2!1sen!2sid!4v1700053005678!5m2!1sen!2sid"
                                                    width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Footer Column-->
                                    <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <!--Footer Column-->
                                        <div class="footer-widget recent-posts">
                                            <h2 class="widget-title">Instansi Terkait</h2>
                                            <!--Footer Column-->
                                            <div class="row">
                                                <div class="col-12 pb-3">
                                                    <img src="{{asset('images/logo-jasa-tirta2.png')}}" width="100%">
                                                </div>
                                                <div class="col-12 pb-3">
                                                    <img src="{{asset('images/logo-citarum.png')}}" width="100%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Big Column-->
                            <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <!--Footer Column-->
                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget useful-links">
                                            <h2 class="widget-title">Menu</h2>
                                            <ul class="user-links">
                                                <li><a href="{{url('/')}}">Beranda</a></li>
                                                <li><a href="{{url('/map')}}">Peta</a></li>
                                                <li><a href="{{url('/home')}}">Admin</a></li>
                                                <li><a href="{{url('/kontak')}}">Hubungi Kami</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--Footer Column-->
                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                        <!--Footer Column-->
                                        <div class="footer-widget contact-widget">
                                            <h2 class="widget-title">Contact Us</h2>
                                            <!--Footer Column-->
                                            <div class="widget-content">
                                                <ul class="contact-list">
                                                    <li>
                                                        <span class="icon flaticon-maps-and-flags"></span>
                                                        <div class="text"><a
                                                                href="https://maps.app.goo.gl/E1uh3F4HyKQF2oYP9"
                                                                target="_blank" rel="nofollow"><b>Gedung Ditjen
                                                                    SDA</b><br>JL. Pattimura 20, Kebayoran Baru, Jakarta
                                                                - Indonesia - 12110</a></div>
                                                    </li>
                                                    <!-- <li>
                                                    <span class="icon flaticon-call-1"></span>
                                                    <div class="text"><a href="tel:62264201972">(0264) 201972</a></div>
                                                </li>
                                                <li>
                                                    <span class="icon flaticon-email"></span>
                                                    <div class="text"><a href="mailto:pjt2@jasatirta2.co.id">pjt2@jasatirta2.co.id</a></div>
                                                </li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Footer Bottom-->
                <div class="footer-bottom">
                    <div class="auto-container">
                        <div class="inner-container clearfix">
                            <div class="copyright-text">
                                <p>© Copyright 2023 All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

        </main>
        <!-- End Main Content -->
        <div style="display:none;width:1080px;top:50%;" class="card-bar" id="uhuy">
            <!-- <span class="close-button" onclick="tutungclose()"> X </span> -->
            <button style="position:absolute;top:600px;" onclick="tutungclose()" class="btn btn-sm btn-secondary">tutup X</button>
            <img id="imgbox" src="" alt="">
            <div class="tombol-mini" style="top:198px;left: 206px;">
                <div id=4322 class="tooltiptext" style="font-size: 10px; bottom: 5px;">Loading . . . </div>
            </div>
            <div class="tombol-mini" style="top:233px;left: 298px;">
                <div id=4323 class="tooltiptext" style="font-size: 10px; bottom: 0px;">Loading . . . </div>
            </div>
            <div class="tombol-mini" style="top:247px;left: 365px;">
                <div id=4325 class="tooltiptext" style="font-size: 10px; bottom: 40px;">Loading . . . </div>
            </div>
            <div class="tombol-mini" style="top:249px;left: 378px;">
                <div id=4326 class="tooltiptext" style="font-size: 10px; bottom: 30px;">Loading . . . </div>
            </div>
            <div class="tombol-mini" style="top:257px;left: 406px;">
                <div id=4327 class="tooltiptext" style="font-size: 10px; bottom: 25px;">Loading . . . </div>
            </div>
            <div class="tombol-mini" style="top:265px;left: 426px;">
                <div id=4328 class="tooltiptext" style="font-size: 10px; bottom: 20px;">Loading . . . </div>
            </div>
            <div class="tombol-mini" style="top:270px;left: 446px;">
                <div id=4329 class="tooltiptext" style="font-size: 10px;">Loading . . . </div>
            </div>
            <div class="tombol-mini" style="top:283px;left: 489px;">
                <div id=4330 class="tooltiptext" style="font-size: 10px;">Loading . . . </div>
            </div>
            <div  class="tombol-mini" style="top:290px;left: 508px;">
                <div id=4331 class="tooltiptext" style="font-size: 10px;">Loading . . . </div>
            </div>
            <div  class="tombol-mini" style="top:310px;left: 546px;">
                <div id=4332 class="tooltiptext" style="font-size: 10px;">Loading . . . </div>
            </div>
            <div  class="tombol-mini" style="top:327px;left: 608px;">
                <div id=4333 class="tooltiptext" style="font-size: 10px;">Loading . . . </div>
            </div>
            <div  class="tombol-mini" style="top:338px;left: 640px;">
                <div id=4334 class="tooltiptext" style="font-size: 10px;">Loading . . . </div>
            </div>
            <div  class="tombol-mini" style="top:348px;left: 675px;">
                <div id=4335 class="tooltiptext" style="font-size: 10px;">Loading . . . </div>
            </div>
            <div  class="tombol-mini" style="top:362px;left: 731px;">
                <div id=4336 class="tooltiptext" style="font-size: 10px;">Loading . . . </div>
            </div>
            <div  class="tombol-mini" style="top:403px;left: 763px;">
                <div id=4338 class="tooltiptext" style="font-size: 10px;">Loading . . . </div>
            </div>
            <div  class="tombol-mini" style="top:428px;left: 830px;">
                <div id=4339 class="tooltiptext" style="font-size: 10px;">Loading . . . </div>
            </div>
            <div  class="tombol-mini" style="top:431px;left: 845px;">
                <div id=4340 class="tooltiptext" style="font-size: 10px;bottom: 5px;">Loading . . . </div>
            </div>
            <div  class="tombol-mini" style="top:459px;left: 905px;">
                <div id=4301 class="tooltiptext" style="font-size: 10px;">Loading . . . </div>
            </div>
            

        </div>
    </div>


    <script src="{{asset('assetnew/js/popper.min.js')}}"></script>
    <script src="{{asset('assetnew/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assetnew/js/owl.js')}}"></script>
    <script src="{{asset('assetnew/js/wow.js')}}"></script>
    <script src="{{asset('assetnew/js/appear.js')}}"></script>
    <script src="{{asset('assetnew/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assetnew/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('assetnew/js/mixitup.js')}}"></script>
    <script src="{{asset('assetnew/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('assetnew/js/validate.js')}}"></script>
    <script src="{{asset('assetnew/js/swiper.min.js')}}"></script>
    <script src="{{asset('assetnew/js/TweenMax.min.js')}}"></script>
    <script src="{{asset('assetnew/js/script.js?v=21')}}"></script>
    <script>
        // >>> XXX
        async function fetchData(id) {
        try {
            const response = await fetch(`http://sisirumba.pusair-pu.go.id/test_sisirumba/public/qpilihan/${id}`);
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            const data = await response.json();
            return data; // Assuming the API returns an object with Q, k1, k2, k3 properties
        } catch (error) {
            console.error('Error fetching data:', error);
            return null; // Handle errors gracefully
        }
    }

    // Update values in tooltips
    async function updateValues() {
        const divs = document.querySelectorAll('.tooltiptext');
        divs.forEach(async (div) => {
            const id = div.id;
            const data = await fetchData(id);
            if (data !== null) {
                const {  k1, k2, k3, value } = data;
                // const numQ = parseFloat(Q);
                const numK1 = parseFloat(k1);
                const numK2 = parseFloat(k2);
                const numK3 = parseFloat(k3);
                const valuenya = parseFloat(value)
                // const result =   numK1+numK2+numK3;
                const result = (numK1 * Math.pow(valuenya, 2) + (numK2 * valuenya) + numK3 )
                const formattedResult = parseFloat(result).toFixed(2); // Limit to 2 decimal places
                div.textContent = `Q = ${formattedResult} m³/s`;
            }
        });
    }

    // Call the updateValues function when the document is fully loaded
    document.addEventListener('DOMContentLoaded', updateValues);
    // >>> XXX
        // function getQ() {
           
        // }

        // var ArrayJson = [];

        // function useStoredData() {
            
        // }

        $(function () {
            $('body').scrollspy({
                target: '.feature-items',
                offset: 240
            })
            $(window).scrollspy({
                target: '.features-menu',
                offset: 240
            })
            $(window).on('activate.bs.scrollspy', function (e, data) {
                if ($(data.relatedTarget).hasClass('feature-item-preview')) {
                    $('.feature-item-preview').removeClass('visible');
                    $(data.relatedTarget).addClass('visible');
                }
            })

            var featuresMenuVisible = false;

            const observer = new IntersectionObserver(function (entries) {
                console.log(entries);
                entries.forEach(function (entry) {
                    if (entry.isIntersecting && !featuresMenuVisible) {
                        $('.features-menu').fadeIn();
                        featuresMenuVisible = true;
                    }

                    if (!entry.isIntersecting && featuresMenuVisible) {
                        $('.features-menu').fadeOut()
                        featuresMenuVisible = false;
                    }
                })
            }, {
                threshold: 0.05,
            });

            observer.observe($('#features')[0]);

            const root = document.documentElement;
            const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue(
                "--marquee-elements-displayed");

            $('.marquee-content').each(function (i, marqueeContent) {
                for (let i = 0; i < marqueeElementsDisplayed; i++) {
                    marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
                }
            });
        });
        var image = document.getElementById("clickableImageXXX");

        // Add a click event listener to the image
        image.addEventListener("click", function () {
            console.log("kentang jaya mandiri !")
            // Redirect to the desired URL when the image is clicked
            // window.location.href = "http://103.149.208.46/akentang/player-min.html";
            // window.location.href = "http://103.184.52.96/";
            // alert("test cctv");
        });

        function testcctv(){
            // alert("test cctv");
            window.location.href = "http://103.184.52.96/";
        }
            
        function testgambar(){
            window.location.href = "http://sisirumba.pusair-pu.go.id/test_gambar2/";
        }

        function tutungopen(content) {
            // alert(""+content);
            console.log(content)
            var tutungan = document.getElementById("uhuy")
            tutungan.style.display = "flex";

            var gambar = document.getElementById("imgbox")
            var imageUrl = content;
            gambar.src = imageUrl;

        }

        function tutungclose() {
            var tutungan = document.getElementById("uhuy")
            tutungan.style.display = "none";
        }

        function lightboxopen(content) {
            var tutungan = document.getElementById("uhuy")
            tutungan.style.display = "flex";

            console.log(content)

            var gambar = document.getElementById("imgbox")
            var imageUrl = "../../../contoh_pindahan/" + content;
            gambar.src = imageUrl;
            console.log(gambar.src);
        }
    </script>
</body>

</html>