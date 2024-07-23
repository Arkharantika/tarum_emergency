
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>SISTARUM - Sistem Informasi Saluran Irigasi Citarum</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/animations.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/font-awesome5.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('theme/css/main.css')}}" class="color-switcher-link">
	<link rel="stylesheet" href="{{asset('theme/css/shop.css')}}" class="color-switcher-link">
	<script src="{{asset('theme/js/vendor/modernizr-2.6.2.min.js')}}"></script>

	<meta property="og:locale" content="id_ID" />
	<meta property="og:title" content="Tatonas – Good Product Good Service" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="https://web.tatonas.co.id/" />
	<meta property="og:site_name" content="CV Tatonas" />
	<link rel="shortcut icon" href="{{asset('images/pupr.png')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('images/pupr.png')}}" type="image/x-icon">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>
	<div id="team-form" class="ds modal">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="form-wrapper ls rounded">
						<form class="contact-form" method="post" action="/">
							<div class="row c-mb-20">
								<div class="col-12 form-title text-center form-builder-item">
									<div class="header title">
										<h4><span class="thin">Contact</span> me</h4>
									</div>
								</div>
							</div>
							<div class="row c-mb-20">
								<div class="col-sm-12">
									<div class="form-group has-placeholder">
										<label for="name333">Full Name <span class="required">*</span></label>
										<input type="text" aria-required="true" size="30" value="" name="name" id="name333" class="form-control" placeholder="Your name">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group has-placeholder">
										<label for="phone35533">Email address<span class="required">*</span></label>
										<input type="tel" aria-required="true" size="30" name="phone" id="phone35533" class="form-control" placeholder="Phone Number">
									</div>
								</div>
							</div>
							<div class="row c-mb-20">
								<div class="col-sm-12">
									<div class="form-group has-placeholder">
										<label for="message333">Message</label>
										<textarea aria-required="true" rows="3" cols="45" name="message" id="message333" class="form-control" placeholder="Message"></textarea>
									</div>
								</div>
							</div>
							<div class="row c-mb-20">
								<div class="col-sm-12 mb-0 mt-10 text-center">
									<div class="form-group">
										<input class="btn btn-gradient" type="submit" value="Contact me">
									</div>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>


		</div>


	</div>


	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<!--topline section visible only on small screens|-->

			<div class="header_absolute">
				<!--eof topline-->
				<!-- header with two Bootstrap columns - left for logo and right for navigation -->
				<header class="page_header_side header_slide header-special header_side_right ds">

					<div class="scrollbar-macosx">
						<div class="side_header_inner">
							<p class="text-right mb-0 close-wrapper"><a href="javascript:void(0)">×</a></p>

							<div class="widget widget_recent_posts">

								<h3 class="widget-title">Our news</h3>
								<ul class="list-unstyled">
									<li class="media">
										<article class="vertical-item  post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-content">
												<div class="entry-header">
													<div class="entry-meta">
														<div class="byline">
															<span class="date">
																<a href="blog-@@type.html" rel="bookmark">
																	<time class="published entry-date" datetime="2019-04-09T12:23:09+00:00">20.03.2019</time>
																</a>
															</span>
															<span class="author vcard">
																<a class="url fn n" href="blog-@@type.html" rel="author"><span>by</span> Admin</a>
															</span>
														</div>
													</div>
													<h4 class="entry-title">
														<a href="blog-single-@@type.html" rel="bookmark">
															Adipisicing elit sed do eiusmod
														</a>
													</h4>

													<!-- .entry-meta -->
												</div>
												<!-- .entry-header -->
											</div><!-- .item-content -->
										</article>
									</li>
									<li class="media">
										<article class="vertical-item  post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-content">
												<div class="entry-header">
													<div class="entry-meta">
														<div class="byline">
															<span class="date">
																<a href="blog-@@type.html" rel="bookmark">
																	<time class="published entry-date" datetime="2019-04-09T12:23:09+00:00">20.03.2019</time>
																</a>
															</span>
															<span class="author vcard">
																<a class="url fn n" href="blog-@@type.html" rel="author"><span>by</span> Admin</a>
															</span>
														</div>
													</div>
													<h4 class="entry-title">
														<a href="blog-single-@@type.html" rel="bookmark">
															Adipisicing elit sed do eiusmod
														</a>
													</h4>

													<!-- .entry-meta -->
												</div>
												<!-- .entry-header -->
											</div><!-- .item-content -->
										</article>
									</li>
									<li class="media">
										<article class="vertical-item  post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-content">
												<div class="entry-header">
													<div class="entry-meta">
														<div class="byline">
															<span class="date">
																<a href="blog-@@type.html" rel="bookmark">
																	<time class="published entry-date" datetime="2019-04-09T12:23:09+00:00">20.03.2019</time>
																</a>
															</span>
															<span class="author vcard">
																<a class="url fn n" href="blog-@@type.html" rel="author"><span>by</span> Admin</a>
															</span>
														</div>
													</div>
													<h4 class="entry-title">
														<a href="blog-single-@@type.html" rel="bookmark">
															Adipisicing elit sed do eiusmod
														</a>
													</h4>

													<!-- .entry-meta -->
												</div>
												<!-- .entry-header -->
											</div><!-- .item-content -->
										</article>
									</li>

								</ul>
							</div>
							<div class="widget widget_about">
								<h3 class="widget-title">About</h3>
								<p>
									Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde.
								</p>
							</div>
							<div class="widget widget_mailchimp">
								<h3 class="widget-title">Newsletter</h3>

								<form class="signup" action="/">
									<label for="mailchimp_email88d">
										<span class="screen-reader-text">Subscribe:</span>
									</label>
									<input id="mailchimp_email88d" name="email" type="email" class="form-control mailchimp_email has-placeholder" placeholder="Email">
									<button type="submit" class="search-submit">
										<span class="screen-reader-text">Subscribe</span>
									</button>
									<div class="response"></div>
								</form>
							</div>
							<div class="widget widget_social_icons">
								<a href="#" class="fab fa-facebook-f rounded-icon bg-icon fs-16" title="facebook"></a>
								<a href="#" class="fab fa-twitter rounded-icon bg-icon fs-16" title="telegram"></a>
								<a href="#" class="fab fa-linkedin-in rounded-icon bg-icon fs-16" title="linkedin"></a>
								<a href="#" class="fab fa-instagram rounded-icon bg-icon fs-16" title="instagram"></a>
							</div>
						</div>
					</div>
				</header>

				<header class="page_header header-1 ds bg-transparent s-py-xl-20 s-py-10 ">

					<div class="container-fluid">

						<div class="row d-flex">
							<div class="col-xl-4 col-md-4 col-12 text-center">
								<a href="{{url('/')}}" class="logo" style="justify-content: left;">
									<img src="{{asset('images/logo-pupr.png')}}" alt="">
								</a>
							</div>
							<div class="col-xl-8 col-1 text-right">
								<!-- main nav start -->
								<nav class="top-nav">
									<ul class="nav sf-menu">


										<li class="active">
											<a href="{{url('/')}}">Home</a>
										</li>
										<li>
											<a href="{{url('/map')}}">Peta</a>
										</li>
										
										<li>
											<a href="{{url('/kontak')}}">Contact</a>
										</li>
										<li>
											<a href="javascript:void(0)">Jaringan Kami</a>
											<ul>
												<li>
													<a href="{{url('https://www.jasatirta2.co.id/')}}">PJT II</a>
												</li>
												<li>
													<a href="{{url('https://sihka.pusair-pu.go.id/')}}">Sihka</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="about.html">Login</a>
										</li>

									</ul>


								</nav>
								<!-- eof main nav -->
							</div>
							<!-- <div class="col-xl-3 col-md-7 col-12  d-flex justify-content-md-end"> -->
								<!-- <ul class="top-includes">
									<li class="metaphone">
										<a href="#">800 123 4567</a>
									</li>
									<li class="special-menu">
										<span class="toggle_menu toggle_menu_side header-slide toggle_menu_side_special"><span></span></span>
									</li>
								</ul> -->


							<!-- </div> -->

						</div>

					</div>
					<!-- header toggler -->
					<span class="toggle_menu"><span>menu</span></span>
				</header>
			</div>

			<section class="page_slider">
				<div class="flexslider">
					<ul class="slides">
						<li class="ds cover-image">
							<img src="{{asset('images/citarum.jpeg')}}" alt="img">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer">
													<h6 class="intro_before_featured_word">SISTARUM</h6>
													<h2 class="text-capitalize intro_featured_word">
														Sistem Monitoring Hidrologi Untuk Saluran Irigasi Citarum
													</h2><!-- 
													<a href="#" class="btn btn-outline-darkgrey big-btn">get a quote</a>
													<span class="text-divider">or</span>
													<a href="#" class="btn just-link">Request a Callback</a> -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div> <!-- eof flexslider -->
			</section>

			<section class="ds text-sm-left text-center container-px-0 c-gutter-0">
				<div class="container-fluid">
					<div class="row service-v2">
						<div class="col-sm-6 col-md-4 col-xl-3">
							<div class="icon-box service-single with-icon layout2 ds text-center">
								<div class="icon-styled  fs-50">
									<i class="ico ico-location"></i>
								</div>
								<h5>Peta Monitoring</h5>
								<p>Peta Monitoring yang informatif, dilengkapi dengan data posisi yang terperinci pada setiap koordinat titik lokasi.</p>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 col-xl-3">
							<div class="icon-box service-single with-icon layout2 ds text-center">
								<div class="icon-styled  fs-50">
									<i class="flaticon-play-button-4"></i>
								</div>
								<h5>Pantuan CCTV</h5>
								<p>Dilengkapi dengan pemantauan CCTV 24 jam yang Terintegrasi dalam Sistem Telemetri.</p>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 col-xl-3">
							<div class="icon-box service-single with-icon layout2 ds text-center">
								<div class="icon-styled  fs-50">
									<i class="flaticon-bar-chart"></i>
								</div>
								<h5>Grafik Statistik</h5>
								<p>Tampilkan hasil pemantauan sensor dalam bentuk grafik yang informatif dan mudah dipahami.</p>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 col-xl-3">
							<div class="icon-box service-single with-icon layout2 ds text-center">
								<div class="icon-styled  fs-50">
									<i class="flaticon-file"></i>
								</div>
								<h5>Download Data</h5>
								<p>Unduh Data Telemetri dalam format Excel / PDF untuk memudahkan Anda dalam mengolah data.</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls main-testimonial s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60">
				<div class="container">
					<div class="row">
						
						<div class="col-12 col-lg-9 text-center">
							<div class="divider-35 hidden-above-lg"></div>
							<div class="divider--5"></div>
							<p class="excerpt">About SISTARUM</p>
							<p>SISTARUM (Sistem Informasi Saluran Irigasi Citarum) merupakan Sistem Informasi Terpadu yang inovatif untuk memantau secara efisien kondisi hidrologi pada Saluran Irigasi Citarum</p>
						</div>
						<div class="col-12 col-lg-3 text-center">
							<!-- <h2 class="special-heading text-center">
								<span class="text-capitalize">
									welcome!
								</span>
							</h2>
							<div class="divider-30"></div> -->
							<a class="btn btn-gradient big-btn mt-4" href="{{url('/map')}}">Lihat Peta</a>
						</div>
						<!-- <div class="col-12 col-lg-3 text-sm-left text-center">
							<div class="divider-35 hidden-above-lg"></div>
							<div class="signature">
								<div class="signature-image">
									<img src="images/team/testimonial2.jpg" alt="">
								</div>
								<div class="signature-content">
									<span>Diana T. Davis</span>
									<img src="images/signature.png" alt="">
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</section>

			<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
				<div class="cover-image s-cover-left">
					<img src="{{asset('theme/images/cctv.jpg')}}" alt="01">
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-12 col-lg-6">

						</div>
						<div class="col-xs-12 col-12 col-lg-6">
							<div class="content-center">
								<h2 class="special-heading numeric text-sm-left text-center">
									<span class="text-capitalize">
										Monitor CCTV 24 jam
									</span>
								</h2>
								<div class="divider-45 hidden-below-lg"></div>
								<div class="divider-30 hidden-above-lg"></div>
								<p>Dapatkan deteksi dini terhadap perubahan status debit air dengan menggunakan gambar visual dan live streaming secara real-time melalui sistem pengawasan CCTV kami.</p>
								<div class="divider-45 hidden-below-lg"></div>
								<div class="divider-30 hidden-above-lg"></div>
								<ul class="list-styled">
									<li>Gambar dengan High Quality</li>
									<li>Diperkuat dengan daya ramah lingkungan</li>
								</ul>
								<div class="divider--10"></div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
				<div class="cover-image s-cover-right">
					<img src="{{asset('theme/images/services/service2.jpg')}}" alt="01">
				</div>

				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-12 col-lg-6">
							<div class="content-center">
								<h2 class="special-heading numeric text-sm-left text-center">
									<span class="text-capitalize">
										Pantau Neraca Air Secara Efisien
									</span>
								</h2>
								<div class="divider-45 hidden-below-lg"></div>
								<div class="divider-30 hidden-above-lg"></div>
								<p>Sistem ini dilengkapi dengan fitur canggih untuk memudahkan Anda dalam mengakses dan menganalisis data neraca air dengan cepat dan efisien.</p>
								<div class="divider-45 hidden-below-lg"></div>
								<div class="divider-30 hidden-above-lg"></div>
								
							</div>
						</div>
						<div class="col-xs-12 col-12 col-lg-6">


						</div>
					</div>
				</div>
			</section>

			<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
				<div class="cover-image s-cover-left">
					<img src="{{asset('theme/images/visit_lokasi.jpg')}}" alt="01">
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-12 col-lg-6">

						</div>
						<div class="col-xs-12 col-12 col-lg-6">
							<div class="content-center">
								<h2 class="special-heading numeric text-sm-left text-center">
									<span class="text-capitalize">
										Pantau Lokasi Secara Langsung
									</span>
								</h2>
								<div class="divider-45 hidden-below-lg"></div>
								<div class="divider-30 hidden-above-lg"></div>
								<p>Tim dari PJT II maupun dinas terkait secara rutin melakukan pemeriksaan fisik terhadap pos-pos yang terpasang untuk memastikan operasional yang optimal.</p>
								<div class="divider-50 hidden-below-lg"></div>
								<div class="divider-30 hidden-above-lg"></div>
								<ul class="list-styled">
									<li>Pemeriksaan Rutin</li>
									<li>Maintenance Terjadwal</li>
								</ul>
								<div class="divider--10"></div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ds s-overlay portfolio-section  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-center">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2 class="special-heading text-center">
								<span class="text-capitalize">
									Pemantauan Terbaru
								</span>
							</h2>
							<div class="divider-50 hidden-below-lg"></div>
							<div class="divider-30 hidden-above-lg"></div>
							<div class="row isotope-wrapper portfolio masonry-layout c-mb-30" data-filters=".gallery-filters">

								<div class="col-xl-4 col-sm-6 business news">

									<div class="vertical-item item-gallery content-absolute text-center ds">
										<div class="item-media">
											<img src="{{asset('theme/images/gallery/full/01.jpg')}}" alt="img">

										</div>
										<div class="item-content">
											<div class="links-wrap">
												<a class="link-zoom photoswipe-link" title="" href="images/gallery/full/01.jpg"></a>
												<a class="link-anchor" title="" href="gallery-single.html"></a>
											</div>
											<h6>
												<a href="gallery-single.html">Lorem ipsum dolor sit</a>
											</h6>

										</div>
									</div>

								</div>

								<div class="col-xl-4 col-sm-6 innovations corporate">
									<div class="vertical-item item-gallery content-absolute text-center ds">
										<div class="item-media">
											<img src="{{asset('theme/images/gallery/full/02.jpg')}}" alt="img">
										</div>
										<div class="item-content ">
											<div class="links-wrap">
												<a class="link-zoom photoswipe-link" title="" href="images/gallery/full/02.jpg"></a>
												<a class="link-anchor" title="" href="gallery-single.html"></a>
											</div>
											<h6>
												<a href="gallery-single.html">Amet consetetur sadipscing</a>
											</h6>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 entertainment news innovations">
									<div class="vertical-item item-gallery content-absolute text-center ds">
										<div class="item-media">
											<img src="{{asset('theme/images/gallery/full/03.jpg')}}" alt="img">

										</div>
										<div class="item-content ">
											<div class="links-wrap">
												<a class="link-zoom photoswipe-link" title="" href="images/gallery/full/03.jpg"></a>
												<a class="link-anchor" title="" href="gallery-single.html"></a>
											</div>

											<h6>
												<a href="gallery-single.html">Elitr sed diam nonumy</a>
											</h6>


										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 business entertainment">
									<div class="vertical-item item-gallery content-absolute text-center ds">
										<div class="item-media">
											<img src="{{asset('theme/images/gallery/full/04.jpg')}}" alt="img">

										</div>
										<div class="item-content ">
											<div class="links-wrap">
												<a class="link-zoom photoswipe-link" title="" href="images/gallery/full/04.jpg"></a>
												<a class="link-anchor" title="" href="gallery-single.html"></a>
											</div>

											<h6>
												<a href="gallery-single.html">Tempor invidunt ut</a>
											</h6>


										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 innovations corporate">
									<div class="vertical-item item-gallery content-absolute text-center ds">
										<div class="item-media">
											<img src="{{asset('theme/images/gallery/full/05.jpg')}}" alt="img">
										</div>
										<div class="item-content">
											<div class="links-wrap">
												<a class="link-zoom photoswipe-link" title="" href="images/gallery/full/05.jpg"></a>
												<a class="link-anchor" title="" href="gallery-single.html"></a>
											</div>

											<h6>
												<a href="gallery-single.html">Labore et dolore magna</a>
											</h6>


										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 entertainment news corporate">
									<div class="vertical-item item-gallery content-absolute text-center ds">
										<div class="item-media">
											<img src="{{asset('theme/images/gallery/full/06.jpg')}}" alt="img">
										</div>
										<div class="item-content">
											<div class="links-wrap">
												<a class="link-zoom photoswipe-link" title="" href="images/gallery/full/06.jpg"></a>
												<a class="link-anchor" title="" href="gallery-single.html"></a>
											</div>

											<h6>
												<a href="gallery-single.html">Aliquyam erat sed diam</a>
											</h6>


										</div>
									</div>
								</div>


							</div>
							<div class="mt--30"></div>
							<div class="row">
								<div class="col-lg-12">
									<div class="divider-60"></div>
									<a class="btn btn-maincolor2 big-btn" href="gallery-image.html">All projects</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls map-section s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-160 s-pb-lg-130 s-pb-md-90 s-pb-60">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<h2 class="special-heading">
								<span class="text-capitalize">
									Update Terkini<br> Saluran Irigasi Citarum
								</span>
							</h2>
							<div class="divider-45 hidden-below-lg"></div>
							<div class="divider-30 hidden-above-lg"></div>
							<p class="special-heading">
								<span>
									Dapatkan Informasi Terkini Saluran Irigasi Citarum secara Realtime, langsung dari Genggaman Anda!
								</span>
							</p>
							<div class="divider-45 hidden-below-lg"></div>
							<div class="divider-30 hidden-above-lg"></div>
							<div class="d-flex flex-column flex-sm-row justify-content-between flex-wrap ">
								<div class="simple-counter">
									<h3 class="special-heading counter-wrap">
										<span class="counter color-main thin big" data-from="0" data-to="6" data-speed="1800">0</span>
									</h3>
									<p class="special-heading bold color-darkgrey">
										<span>
											Total 
										</span>
									</p>
									<h6 class="special-heading text-capitalize">
										<span>
											CCTV
										</span>
									</h6>
								</div>
								<div class="divider-30 hidden-above-sm"></div>
								<div class="simple-counter">
									<h3 class="special-heading counter-wrap">
										<span class="counter color-main thin big" data-from="0" data-to="22" data-speed="1800">0</span>
									</h3>
									<p class="special-heading bold color-darkgrey">
										<span>
											Total POS
										</span>
									</p>
									<h6 class="special-heading text-capitalize">
										<span>
											Telemetry
										</span>
									</h6>
								</div>
								<div class="divider-30 hidden-above-sm"></div>
								<div class="simple-counter">
									<h3 class="special-heading counter-wrap">
										<span class="counter color-main thin big" data-from="0" data-to="5" data-speed="1800">0</span>
									</h3>
									<p class="special-heading bold color-darkgrey">
										<span>
											Total POS
										</span>
									</p>
									<h6 class="special-heading text-capitalize">
										<span>
											Non Telemetry
										</span>
									</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="divider-40 hidden-above-lg"></div>
							<div id="map-vector"></div>
						</div>
						<div class="col-md-12 text-center"><a class="btn btn-gradient big-btn mt-4" href="{{url('http://kendalimutudata.pusair-pu.go.id:81')}}">Lihat Kendali Mutu Data</a></div>
					</div>
				</div>
			</section>

			<footer class="page_footer text-sm-left  ds  s-pt-55 s-pb-60 s-pt-md-85 s-pb-md-90 s-pt-lg-125 s-pb-lg-130 s-pt-xl-160 s-pb-xl-155 c-gutter-30 s-parallax c-mb-50 c-mb-lg-0">
				<div class="container">
					<div class="row">

						<div class="col-lg-4 col-md-6  animate" data-animation="fadeInUp">
							<a href="{{url('/')}}" class="logo" style="justify-content: left;">
								<img src="{{asset('images/logo-pupr.png')}}" alt="" style="height: 50px; width: auto;">
							</a>
							<div class="widget widget_mailchimp">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2071976574357!2d106.8008284!3d-6.236397599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1422f877725%3A0x906e4d2b1bccd65!2sJl.%20Pattimura%20No.20%2C%20RT.2%2FRW.1%2C%20Selong%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012110!5e0!3m2!1sen!2sid!4v1700053005678!5m2!1sen!2sid" width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 animate" data-animation="fadeInUp">
							<div class="widget widget_nav_menu mb-0">
								<h3 class="widget-title">Instansi Terkait</h3>
								<!-- <div class="row"> -->
									<img src="{{asset('images/logo-jasa-tirta2.png')}}" width="100%" class="pb-3">
									<img src="{{asset('images/logo-citarum.png')}}" width="100%">
                                <!-- </div> -->
							</div>
						</div>

						<div class="col-lg-2 col-md-6 animate" data-animation="fadeInUp">

							<div class="widget widget_nav_menu mb-0">
								<h3 class="widget-title">SISTARUM</h3>
								<ul class="list-unstyled">
									<li>
										<a href="{{url('/')}}">Beranda</a>
									</li>
									<li>
										<a href="{{url('/map')}}">Peta</a>
									</li>
									<li>
										<a href="{{url('/home')}}">Admin</a>
									</li>

									<li>
										<a href="{{url('/kontak')}}">Hubungi Kami</a>
									</li>
								</ul>
							</div>


						</div>

						<div class="col-lg-3 col-md-6 animate" data-animation="fadeInUp">

							<div class="widget widget_icons_list">
								<h3 class="widget-title">Contact Detail</h3>
								<ul>
									<li class="icon-inline">
										<div class="icon-styled icon-top bordered round  fs-16">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<p><span style="font-weight: bold;">Gedung Ditjen SDA</span><br>
										JL. Pattimura 20, Kebayoran Baru, Jakarta - Indonesia - 12110</p>
									</li>
									<li class="icon-inline ">
										<div class="icon-styled icon-top  bordered round fs-16">
											<i class="fas fa-phone"></i>
										</div>
										<p>(021) 739-8614</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</footer>


			<section class="page_copyright ls ms s-py-15 s-bordertop">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-md-12 text-center">
							<p>&copy; Copyright <span class="copyright_year"><?php echo date('Y');?></span> All Rights Reserved</p>
						</div>

					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script data-cfasync="false" src="{{asset('theme/js/email-decode.min.js')}}"></script>
	<script src="{{asset('theme/js/compressed.js')}}"></script>
	<script src="{{asset('theme/js/main.js')}}"></script>
	<!-- <script src="js/switcher.js"></script> -->

	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4&callback=initGoogleMap"></script>

</body>

</html>