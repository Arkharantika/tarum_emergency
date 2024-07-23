<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv="refresh" content="30"> -->
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
    <!-- Page Title -->

    <!-- Stylesheets -->
    <link href="{{asset('assetnew/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assetnew/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assetnew/css/style-custom.css')}}" rel="stylesheet">
    <link href="{{asset('assetnew/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assetnew/css/color-themes/blue-theme.css')}}" rel="stylesheet" id="theme-color-file">
    <script src="{{asset('assetnew/js/jquery.js')}}"></script>
    <style type="text/css">
        .main-footer .footer-bottom .footer-nav .theme_color {
            color: #ffbc00 !important;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <title>SISIRUMBA</title>

    <style>
        #map {
            height: 700px;
            width: 100%;
            border-radius: 0.5rem;
        }

        .carousel-container {
            width: 300px;
            /* Adjust the width as per your requirements */
            overflow: hidden;
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel img {
            width: 100%;
            height: auto;
        }

        .carousel-button {
            cursor: pointer;
            padding: 5px;
            background-color: #333;
            color: white;
        }

        .leaflet-popup-content-wrapper {
            border-radius: 0.5rem;
            font-size: 12px;
            background: linear-gradient(to top, #66ffff 0%, #ffffff 50%);
        }

        .colorthead {
            background: #669cff;
        }

        .swal-height {
            height: 7rem !important;
        }

        .swal2-styled {
            height: 40px;
            margin-top: 0;
        }

        .swal2-actions {
            height: 30px;
            margin-top: 0;
        }

        .swal2-select {
            height: 35px;
        }

        /* .leaflet-control-layers-overlays>label {
            font-size: 11px;
            line-height: 1;
        } */

        .leaflet-control-layers-overlays>label>span {
            font-size: 11px;
            line-height: 1;
        }

        /* .leaflet-control-layers-overlays>label>span>input {
            width: 40px;
            height: auto;
            line-height: 1;
        } */

        .ring-container {
            position: relative;
        }

        .circle {
            width: 15px;
            height: 15px;
            background-color: red;
            border-radius: 50%;
            position: absolute;
            top: 23px;
            left: 23px;
        }

        .ringring {
            border: 3px solid red;
            -webkit-border-radius: 30px;
            height: 25px;
            width: 25px;
            position: absolute;
            left: 15px;
            top: 15px;
            -webkit-animation: pulsate 1s ease-out;
            -webkit-animation-iteration-count: infinite;
            opacity: 0.0
        }

        @-webkit-keyframes pulsate {
            0% {
                -webkit-transform: scale(0.1, 0.1);
                opacity: 0.0;
            }

            50% {
                opacity: 1.0;
            }

            100% {
                -webkit-transform: scale(1.2, 1.2);
                opacity: 0.0;
            }
        }

        .leaflet-div-ser {
            background: blue;
            border: 3px solid rgba(255, 255, 255, 0.5);
            color: blue;
            font-weight: bold;
            text-align: center;
            /* border-radius:50%; */
            /* line-height:30px;
            line-width:30px; */
            height: 30px;
            width: 30px;
        }

        .leaflet-control-layers-expanded {
            /* height: 160px; */
            /* width: 200px; */
            /* padding-top: 30px; */
            /* right: 10px; */
            /* background: linear-gradient(to bottom, #6c757d 12%, white 12%); */
            /* font-size:12px !important; */
        }

        .card-bar {
            position: absolute;
            top: 210px;
            right: 30px;
            background-color: rgba(255, 255, 255, 255);
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            z-index: 1000;
            /* Ensure the card-bar appears above the map */
            width: 180px;
        }

        .tombolmenu {
            position: absolute;
            top: 210px;
            right: 30px;
            /* background-color: rgba(255, 255, 255, 0.8); */
            /* padding: 10px; */
            /* border: 1px solid #ccc; */
            /* border-radius: 5px; */
            z-index: 1000;
            /* Ensure the card-bar appears above the map */
            width: 165px;
            padding: 10px 10px;
            font-size: 15px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #04AA6D;
            border: none;
            border-radius: 15px;
            box-shadow: 0 3px #999;
        }

        .tombolmenu:hover {
            background-color: #3e8e41
        }

        .tombolmenu:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
            outline: none;
        }

        .custom-popup .leaflet-popup-content-wrapper {
            width: 400px;
            /* height:200px; */
            /* border-radius:5%; */
        }

        /* Define the loading animation */
        .loading {
            /* Customize the appearance of the loading animation */
            /* position: relative;
            left: 10px; */
            border: 4px solid #f3f3f3; /* Light gray border */
            border-top: 4px solid #3498db; /* Blue top border */
            border-radius: 50%; /* Make it circular */
            width: 30px; /* Set width */
            height: 30px; /* Set height */
            animation: spin 1s linear infinite; /* Spin animation */
            margin: 0 auto; /* Center the loading animation */
        }

        /* Spin animation */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
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
                        <li class=""><a href="{{url('/')}}">Home</a></li>
                        <li class="current"><a href="{{url('/map')}}">Peta</a></li>
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

    <!--wrapper-->
    <div class="wrapper">

        <!--start header (Bagian Atas (Topbar)) -->
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
                                    <li class=""><a href="{{url('/')}}">Home</a></li>
                                    <li class="current"><a href="{{url('/map')}}">Peta</a></li>
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
        <!-- <header> -->

        <div class="wrapper" style="margin-top: 80px;">
            <!-- <hr> -->
            <nav class="navbar card-body " style="display: flex;justify-content: flex-start; background:white;">


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary shadow-lg" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" style="position: absolute;top: 30px;right: 42.5%;z-index: 1000;">
                    Rekapitulasi Data Pos Hari Ini
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive">
                                    <table id="example2" class="table table-striped table-bordered text-center lontong"
                                        style="font-size:9px;">
                                        <thead>
                                            <tr>
                                                <th colspan="2"></th>
                                                <th colspan="3">Tinggi Muka Air Hari Ini (m)</th>
                                                <th colspan="3">Debit (m<sup>3</sup>/s)</th>
                                                <th colspan="1"></th>
                                            </tr>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pos</th>
                                                <th>Nilai</th>
                                                <th>Max</th>
                                                <th>Min</th>
                                                <th>Nilai </th>
                                                <th>Max</th>
                                                <th>Min</th>
                                                <th>Update Terakhir</th>
                                                <th>KD Hardware</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                            @foreach($ars as $ken => $wow)
                                            <?php 
                                                $a = $wow->k1;
                                                $b = $wow->k2;
                                                $c = $wow->k3;
                                                ?>
                                                <tr>
                                                <td>{{$wow->urutan}}</td>
                                                <td>{{$wow->pos_name}}</td>
                                                <td class="hardware-value" data-hardware-id="{{ $wow->kd_hardware }}" data-k1="{{ $a }}" data-k2="{{ $b }}" data-k3="{{ $c }}">Loading...</td>
                                                <td class="hardwaremax" data-hardware-id="{{ $wow->kd_hardware }}" data-k1="{{ $a }}" data-k2="{{ $b }}" data-k3="{{ $c }}">Loading...</td>
                                                <td class="hardwaremin" data-hardware-id="{{ $wow->kd_hardware }}" data-k1="{{ $a }}" data-k2="{{ $b }}" data-k3="{{ $c }}">Loading...</td>
                                                <!-- <td></td> -->
                                                <!-- <td></td> -->
                                                <!-- <td></td> -->
                                                <!-- <td class="hardware-value" data-hardware-id="{{ $wow->kd_hardware }}" data-k1="{{ $a }}" data-k2="{{ $b }}" data-k3="{{ $c }}">Loading...</td> -->
                                                <td class="debit" data-hardware-id="{{ $wow->kd_hardware }}" data-k1="{{ $a }}" data-k2="{{ $b }}" data-k3="{{ $c }}">Loading...</td>
                                                <td class="debitmax" data-hardware-id="{{ $wow->kd_hardware }}" data-k1="{{ $a }}" data-k2="{{ $b }}" data-k3="{{ $c }}">Loading...</td>
                                                <td class="debitmin" data-hardware-id="{{ $wow->kd_hardware }}" data-k1="{{ $a }}" data-k2="{{ $b }}" data-k3="{{ $c }}">Loading...</td>
                                                <td>{{$wow->tlocal}}</td>
                                                <td>{{$wow->kd_hardware}}</td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="map" class="border border-light" style="line-height: 1;"></div>

                <!-- test card -->
                <!-- <div class="tombolmenu">
                        menu >>
                    </div> -->

                <button class="tombolmenu " onclick="openize()" id="openmenu" style="display:block;">menu navigasi
                    >></button>

                <div class="card-bar" id="cardnyadong" style="display:none;color: black;font-size:11px;line-height: 1;">
                    <div class="row row-cols-6 mb-2">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div><button onclick="minimize()" id="btnminimize" class="btn btn-sm btn-secondary"> >>
                            </button></div>
                    </div>
                    <div class="card-header text-center">
                        <h5>PUPR</h5>
                    </div>
                    <div class="card-body">
                        <label>
                            <input type="checkbox" id="tombolTMA" onclick="tampilTMA()"> POS TMA
                        </label>
                        <div id="showTMA" style="display:none;margin-left:20px;">
                            <label>
                                <input type="checkbox" id="tatonasCheckbox"> POS Telemetry
                            </label>
                            <br>
                            <br>
                          
                        </div>
                    </div>
                    
            </nav>
        </div>
        <!-- </header> -->
        <!--end header -->

        <!--start page wrapper (Bagian Isi Utama)-->

        <!-- <div class="page-content"> -->
        @yield('content')
        <!-- </div> -->

        <!--end page wrapper -->

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!-- <footer class="page-footer bg-primary"> -->

        <!-- </footer> -->
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
                                            <a href="{{url('/')}}"><img src="{{asset('images/logo-pupr.png')}}" alt=""
                                                    style="max-width: 100%;" /></a>
                                        </div>
                                        <div class="text">
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
                                                                SDA</b><br>JL. Pattimura 20, Kebayoran Baru, Jakarta -
                                                            Indonesia - 12110</a></div>
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
        $(document).ready(function() {
            // Fetch hardware value for each hardware item
            $('.hardware-value').each(function() {
                var hardwareId = $(this).data('hardware-id');
                var nilaiK1 = parseFloat($(this).data('k1'));
                var nilaiK2 = parseFloat($(this).data('k2'));
                var nilaiK3 = parseFloat($(this).data('k3'));
                var url = 'http://sisirumba.pusair-pu.go.id/test_sisirumba/public/nilaipilihan/' + hardwareId;
                
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        $('.hardware-value[data-hardware-id="' + hardwareId + '"]').text(response.value);
                        $('.hardwaremax[data-hardware-id="' + hardwareId + '"]').text(response.max_value);
                        $('.hardwaremin[data-hardware-id="' + hardwareId + '"]').text(response.min_value);
                        var Qnya = (nilaiK1 * Math.pow(response.value, 2) + (nilaiK2 * response.value) + nilaiK3 ).toFixed(2)
                        var Qmax = (nilaiK1 * Math.pow(response.max_value, 2) + (nilaiK2 * response.max_value) + nilaiK3 ).toFixed(2)
                        var Qmin = (nilaiK1 * Math.pow(response.min_value, 2) + (nilaiK2 * response.min_value) + nilaiK3 ).toFixed(2)
                        $('.debit[data-hardware-id="' + hardwareId + '"]').text(Qnya);
                        // $('.debit[data-hardware-id="' + hardwareId + '"]').text(response.value);
                        $('.debitmax[data-hardware-id="' + hardwareId + '"]').text(Qmax);
                        $('.debitmin[data-hardware-id="' + hardwareId + '"]').text(Qmin);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching hardware value:', error);
                        $('.hardware-value[data-hardware-id="' + hardwareId + '"]').text('Error');
                        $('.hardwaremax[data-hardware-id="' + hardwareId + '"]').text('Error');
                        $('.hardwaremin[data-hardware-id="' + hardwareId + '"]').text('Error');
                        $('.debit[data-hardware-id="' + hardwareId + '"]').text('Error');
                    }
                });
            });
        });

        
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
                heightAuto: false,
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

        function tampilTMA() {
            var checktomboltma = document.getElementById("tombolTMA");
            var listCBXtma = document.getElementById("showTMA");

            if (checktomboltma.checked) {
                listCBXtma.style.display = "block";
            } else {
                listCBXtma.style.display = "none";
            }
        }

        function tampilCurahHujan() {
            var checktombolCH = document.getElementById("tombolCurahHujan");
            var listCBXch = document.getElementById("showCurahHujan");

            if (checktombolCH.checked) {
                listCBXch.style.display = "block";
            } else {
                listCBXch.style.display = "none";
            }
        }

        function tampilKlimatologi() {
            var checktombolKlm = document.getElementById("tombolKlimatologi");
            var listCBXklm = document.getElementById("showKlimatologi");

            if (checktombolKlm.checked) {
                listCBXklm.style.display = "block";
            } else {
                listCBXklm.style.display = "none";
            }
        }

        function minimize() {
            var cardnya = document.getElementById("cardnyadong");
            var tombolopen = document.getElementById("openmenu");
            cardnya.style.display = "none";
            tombolopen.style.display = "block";
        }

        function openize() {
            var cardnya = document.getElementById("cardnyadong");
            var tombolopen = document.getElementById("openmenu");
            cardnya.style.display = "block";
            tombolopen.style.display = "none";
        }

        // >>> TEST NEW VARIABLES
        function updateMax() {
            $.ajax({
                url: 'http://sisirumba.pusair-pu.go.id/test_sisirumba_4/public/nilaimax',
                method: 'GET',
                dataType: 'json',
                beforeSend: function () {
                    console.log('Fetching data...');
                    // alert("loading . . .")
                },
                success: function (data) {
                    localStorage.setItem('fetchedData', JSON.stringify(data));
                    document.getElementById('result').innerHTML = JSON.stringify(data, null, 2);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error('There was a problem with the fetch operation:', errorThrown);
                },
                complete: function () {
                    console.log('Fetch completed.');
                }
            });
        }

        function updateMin() {
            $.ajax({
                url: 'http://sisirumba.pusair-pu.go.id/test_sisirumba_4/public/nilaimin',
                method: 'GET',
                dataType: 'json',
                beforeSend: function () {
                    console.log('Fetching data...');
                    // alert("loading . . .")
                },
                success: function (data) {
                    localStorage.setItem('minData', JSON.stringify(data));
                    document.getElementById('result').innerHTML = JSON.stringify(data, null, 2);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error('There was a problem with the fetch operation:', errorThrown);
                },
                complete: function () {
                    console.log('Fetch completed.');
                }
            });
        }

        function updateUtama() {
            $.ajax({
                url: 'http://sisirumba.pusair-pu.go.id/test_sisirumba_4/public/nilaiutama',
                method: 'GET',
                dataType: 'json',
                beforeSend: function () {
                    console.log('Fetching data...');
                    // alert("loading . . .")
                },
                success: function (data) {
                    localStorage.setItem('utamaData', JSON.stringify(data));
                    document.getElementById('result').innerHTML = JSON.stringify(data, null, 2);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error('There was a problem with the fetch operation:', errorThrown);
                },
                complete: function () {
                    console.log('Fetch completed.');
                }
            });
        }

        // <---- this is deleted functions --->
        // updateMax();
        // updateMin();
        // updateUtama();
        // setInterval(updateMax, 30*1000);
        // setInterval(updateMin, 30*1000);
        // setInterval(updateUtama, 30*1000);

        var jsonMax = [];
        var jsonMin = [];
        var jsonUtama = [];

        // Call this function to use the data stored in localStorage
        function useStoredData() {
            const storedData = localStorage.getItem('fetchedData');
            jsonMax = [];
            if (storedData) {
                const parsedData = JSON.parse(storedData);
                for (const key in parsedData) {
                    if (parsedData.hasOwnProperty(key)) {
                        let value = parsedData[key];
                        if (value == null) {
                            value = 0;
                        }
                        jsonMax.push(value);
                    }
                }
                // console.log('Data max from localStorage:', parsedData);
                console.log('JsonMax now :', jsonMax);
            } else {
                console.log('No data found in localStorage');
            }
        }

        function minData() {
            const storedData = localStorage.getItem('minData');
            jsonMin = [];
            if (storedData) {
                const parsedData = JSON.parse(storedData);
                for (const key in parsedData) {
                    if (parsedData.hasOwnProperty(key)) {
                        let value = parsedData[key];
                        if (value == null) {
                            value = 0;
                        }
                        jsonMin.push(value);
                    }
                }
                // console.log('Data min from localStorage:', parsedData);
                console.log('JsonMin now :', jsonMin);
            } else {
                console.log('No data found in localStorage');
            }
        }

        function utamaData() {
            const storedData = localStorage.getItem('utamaData');
            jsonUtama = [];
            if (storedData) {
                const parsedData = JSON.parse(storedData);
                for (const key in parsedData) {
                    if (parsedData.hasOwnProperty(key)) {
                        let value = parsedData[key];
                        if (value == null) {
                            value = 0;
                        }
                        jsonUtama.push(value);
                    }
                }
                // console.log('Data min from localStorage:', parsedData);
                console.log('JsonUtama now :', jsonUtama);
            } else {
                console.log('No data found in localStorage');
            }
        }
        // Example: Call the function to use the stored data
        
        // <---- this is deleted functions --->
        // useStoredData();
        // minData();
        // utamaData();
        // setInterval(useStoredData, 30*1000);
        // setInterval(minData, 30*1000);
        // setInterval(utamaData, 30*1000);
        

        var ktma = [];

        @foreach($ars as $kentang => $record)
            // var ref_id = "{{ $kentang }}";
            var k1 = {{$record->k1}};
            var k2 = {{$record->k2}};
            var k3 = {{$record->k3}};
            var k_tma = {{$record->k_tma}};
            // console.log("bojoku=>"+bojonegoro);
            var newData = { k_tma:parseFloat(k_tma), k1:parseFloat(k1), k2:parseFloat(k2), k3:parseFloat(k3) }
            // var newData = { lat: lats, lng: longs, name: '{{$record->pos_name}}',vmax:valuemax,vmin:valuemin,daterecord:'{{$record->tlocal}}', intivalue:valuenya, kentang:jujukan_id }
            // console.log(k_tma)
            ktma.push(newData);
        @endforeach
        console.log(ktma)

        function changeMaxMin() {
            console.log("!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!")
            // var table = document.getElementById('example2');
            const tables = document.querySelectorAll('.lontong');
            const table = tables[0]; // Assuming there is only one table with the specified class

            const tableBody = table.querySelector('tbody');
            // for (let i = 0; i < jsonUtama.length; i++) {
            //     // console.log("opa")
            //     tableBody.rows[i].cells[2].innerHTML = (jsonUtama[i]).toFixed(2);
            //     tableBody.rows[i].cells[5].innerHTML = ((ktma[i].k1 * Math.pow(jsonUtama[i], 2))+(ktma[i].k2 * jsonUtama[i])+(ktma[i].k3)).toFixed(2);
            // }
            // for (let i = 0; i < jsonMax.length; i++) {
            //     // console.log("opa")
            //     tableBody.rows[i].cells[3].innerHTML = (jsonMax[i]).toFixed(2);
            //     tableBody.rows[i].cells[6].innerHTML = ((ktma[i].k1 * Math.pow(jsonMax[i], 2))+(ktma[i].k2 * jsonMax[i])+(ktma[i].k3)).toFixed(2);
            // }
            // for (let i = 0; i < jsonMin.length; i++) {
            //     // console.log("opa")
            //     tableBody.rows[i].cells[4].innerHTML = (jsonMin[i]).toFixed(2);
            //     tableBody.rows[i].cells[7].innerHTML = ((ktma[i].k1 * Math.pow(jsonMin[i], 2))+(ktma[i].k2 * jsonMin[i])+(ktma[i].k3)).toFixed(2);
            // }
        }

        changeMaxMin();

        // window.addEventListener('load', function() {
        //     changeMaxMin();
        //     alert('ok!!')
        //     // Your code here
        //     console.log("Window has finished loading!");
        // });
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