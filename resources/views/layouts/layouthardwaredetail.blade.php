<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('images/pupr.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{asset('CostumStyle/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/datatable/css/dataTables.dateTime.min.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('CostumStyle/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('CostumStyle/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('CostumStyle/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('CostumStyle/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('CostumStyle/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('CostumStyle/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('CostumStyle/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('CostumStyle/css/header-colors.css')}}" />
    <!-- Additional CSS -->
    <link rel="stylesheet" href="{{asset('CostumStyle/style.css')}}">
    <link rel="stylesheet" href="{{asset('assetnew/css/style.css')}}">
    <!-- Page Title -->
    <!-- Stylesheets -->
    <link href="{{asset('assetnew/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assetnew/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assetnew/css/style-custom.css')}}" rel="stylesheet">
    <link href="{{asset('assetnew/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assetnew/css/color-themes/blue-theme.css')}}" rel="stylesheet" id="theme-color-file">
    <script src="{{asset('assetnew/js/jquery.js')}}"></script>
    <style type="text/css">
        .main-footer .footer-bottom .footer-nav .theme_color{
            color: #ffbc00 !important;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>SISIRUMBA</title>
    <style>
        .swal-height{
            height:7rem !important;
        }
        .swal2-styled{
            height: 40px;
            margin-top:0;
        }
        .swal2-actions{
            height: 30px;
            margin-top:0;
        }
        .swal2-select{
            height: 35px;
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
            height: 500px;
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
    </style>

</head>

<!-- Bagian Body Semua Berawal Dari Sini -->

<body>
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
                        <p>KANTOR PUSAT PERUM JASA TIRTA II<br>Jl. Lurah Kawi No. 1 Jatiluhur, Kab. Purwakarta, Jawa Barat</p>
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


    
    <!--wrapper-->
    <div class="wrapper">

        <!--start header (Bagian Atas (Topbar)) -->
        <header class="main-header header-style-two">
            <div class="outer-container">
                <div class="main-box clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="{{url('/')}}"><img src="{{asset('images/logo-pupr.png')}}" alt="" title="" style="height: 50px;"></a></div>
                    </div>

                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
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
        <!--end header -->

        <!--start page wrapper (Bagian Isi Utama)-->

        <!-- <div class="page-content"> -->
        @yield('content')
        <!-- </div> -->

        <!--end page wrapper -->

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        
        <!--Start Back To Top Button--> 
        <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        
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
                                            <a href="{{url('/')}}"><img src="{{asset('images/logo-pupr.png')}}" alt="" style="max-width: 100%;" /></a>
                                        </div>
                                        <div class="text">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2071976574357!2d106.8008284!3d-6.236397599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1422f877725%3A0x906e4d2b1bccd65!2sJl.%20Pattimura%20No.20%2C%20RT.2%2FRW.1%2C%20Selong%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012110!5e0!3m2!1sen!2sid!4v1700053005678!5m2!1sen!2sid" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                                    <div class="text"><a href="https://maps.app.goo.gl/E1uh3F4HyKQF2oYP9" target="_blank" rel="nofollow"><b>Gedung Ditjen SDA</b><br>JL. Pattimura 20, Kebayoran Baru, Jakarta - Indonesia - 12110</a></div>
                                                </li>
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
    </div>
    <!--end wrapper-->
    <!-- Additional Css -->
    <!-- <script src="{{asset('CostumStyle/script.js')}}"></script> -->
    <script>
        function linkterkait() {
            Swal.fire({
                // title: 'Link Terkait',
                width: '13rem',
                position: 'top-end',
                input: 'select',
                inputOptions: {
                    pjt: 'PJT II',
                    sihka: 'SIHKA'
                },
                heightAuto:false,
                customClass: 'swal-height',
                inputValidator: (value) => {
                    return new Promise((resolve) => {
                        if (value === 'pjt') {
                            // resolve()
                            // window.location.href = "{{url('www.google.com')}}";
                            // window.location.replace('www.google.com2');
                            window.location.href = 'https://www.jasatirta2.co.id/';
                        } else {
                            // resolve('You need to select oranges :)')
                            window.location.href = 'https://sihka.pusair-pu.go.id/';
                        }
                    })
                }
            })
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="{{asset('CostumStyle/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('CostumStyle/js/jquery.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/datatable/js/dataTables.dateTime.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/datatable/js/moment.min.js')}}"></script>
    <script src="{{asset('CostumStyle/js/table-datatable.js')}}"></script>
    <!--app JS-->
    <script src="{{asset('CostumStyle/js/app.js')}}"></script>

    <script src="{{asset('CostumStyle/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- <script src="{{asset('CostumStyle/plugins/apexcharts-bundle/js/apex-custom.js')}}"></script> -->
    @yield('CustomScripts')
    <!-- <script src="{{asset('CostumStyle/js/index.js')}}"></script> -->

    <script src="{{asset('assetnew/js/script.js?v=21')}}"></script>

</body>

</html>