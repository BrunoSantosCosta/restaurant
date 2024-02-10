<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>


	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
		href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
		href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Lora:ital@1&amp;family=Poppins:wght@400;500;600;700&amp;display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

	<!-- BASE CSS -->
    <link href="{{ asset('assets/frontend/css/vendors.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
	<link href="{{ asset('assets/frontend/css/wizard.css') }}" rel="stylesheet">


	<!-- YOUR CUSTOM CSS -->
	<link href="{{ asset('assets/frontend/css/custom.css') }}" rel="stylesheet">
</head>

<body>

    <div id="preloader">
		<div data-loader="circle-side"></div>
	</div>

    @include('partials.frontend.header');


	<main>
		<div id="carousel-home">
			<div class="owl-carousel owl-theme">
				<div class="owl-slide cover lazy" data-bg="url(img/slides/slide_home_1.jpg)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 m-auto static">
									<div class="slide-text white text-center">
										<h2 class="owl-slide-animated owl-slide-title">Taste unique food</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Cooking delicious food since 2005
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1 btn_scroll"
												href="menu-1.html" role="button">Read more</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="owl-slide cover lazy" data-bg="url(img/slides/slide_home_2.jpg)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 m-auto static">
									<div class="slide-text white text-center">
										<h2 class="owl-slide-animated owl-slide-title">Reserve a Table Now</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Cooking delicious food since 2005
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
												href="reservations.html" role="button">Read more</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="owl-slide cover lazy" data-bg="url(img/slides/slide_home_3.jpg)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
						<div class="container">
							<div class="row">
								<div class="col-lg-12 m-auto static">
									<div class="slide-text white text-center">
										<h2 class="owl-slide-animated owl-slide-title">Enjoy a friends dinner</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Cooking delicious food since 2005
										</p>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
												href="menu-1.html" role="button">Read more</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="icon_drag_mobile"></div>
		</div>

		<div class="pattern_2">
			<div class="container margin_120_100 home_intro">
				<div class="row justify-content-center d-flex align-items-center">
					<div class="col-lg-5 text-lg-center d-none d-lg-block" data-cue="slideInUp">
						<figure>
							<img src="img/home_1_placeholder.png" data-src="img/home_1.jpg" width="354" height="440"
								alt="" class="img-fluid lazy">
							<a href="https://www.youtube.com/watch?v=MO7Hi_kBBBg" class="btn_play" data-cue="zoomIn"
								data-delay="500"><span class="pulse_bt"><i class="arrow_triangle-right"></i></span></a>
						</figure>
					</div>
					<div class="col-lg-5 pt-lg-4" data-cue="slideInUp" data-delay="500">
						<div class="main_title">
							<span><em></em></span>
							<h2>About us</h2>
							<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
						</div>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
							pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
							mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
							laboris nisi ut aliquip ex ea commodo consequat.</p>
						<p><img src="img/signature.png" width="140" height="50" alt="" class="mt-3"></p>
					</div>
				</div>
			</div>
		</div>


		<section class="container margin_120_100">
			<div class="row">
				<div class="col-xl-3">
					<a href="menu.html" class="img_container">
						<img src="img/banner_1.jpg" class="lazy">
						<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<h3>Our Menu</h3>
							<p>View Our Specialites</p>
						</div>
					</a>
				</div>
				<div class="col-xl-3">
					<a href="menu.html" class="img_container">
						<img src="img/banner_2.jpg" class="lazy">
						<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<h3>DELIVERY</h3>
							<p>Home delivery or take away food</p>
						</div>
					</a>
				</div>
				<div class="col-xl-3">
					<a href="menu.html" class="img_container">
						<img src="img/banner_3.jpg" class="lazy">
						<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<h3>INSIDE FOORES</h3>
							<p>View the Gallery</p>
						</div>
					</a>
				</div>
				<div class="col-xl-3">
					<a href="menu.html" class="img_container">
						<img src="img/banner_4.jpg" class="lazy">
						<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<h3>Our Menu</h3>
							<p>View Our Specialites</p>
						</div>
					</a>
				</div>
				<div class="col-xl-3">
					<a href="menu.html" class="img_container">
						<img src="img/banner_5.jpg" class="lazy">
						<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<h3>BOOK A TABLE</h3>
							<p>View Our Specialites</p>
						</div>
					</a>
				</div>
				<div class="col-xl-3">
					<a href="menu.html" class="img_container">
						<img src="img/banner_6.jpg" class="lazy">
						<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<h3>GALLERY</h3>
							<p>Home delivery or take away food</p>
						</div>
					</a>
				</div>
				<div class="col-xl-3">
					<a href="menu.html" class="img_container">
						<img src="img/banner_1.jpg" class="lazy">
						<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<h3>EVENTS</h3>
							<p>View the Gallery</p>
						</div>
					</a>
				</div>
				<div class="col-xl-3">
					<a href="menu.html" class="img_container">
						<img src="img/banner_2.jpg" class="lazy">
						<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<h3>EVENTS</h3>
							<p>View the Gallery</p>
						</div>
					</a>
				</div>
			</div>
		</section>


		<div class="bg_gray">
			<div class="container margin_120_100" data-cue="slideInUp">
				<div class="main_title center mb-5">
					<span><em></em></span>
					<h2>Our Menu</h2>
				</div>
				<div class="row magnific-gallery homepage add_bottom_25">
					<div class="col-xl-8">
						<div class="row">
							<div class="col-lg-6" data-cue="slideInUp">
								<div class="menu_item">
									<figure>
										<a href="img/menu_items/large/3.jpg" title="Summer Berry"
											data-effect="mfp-zoom-in">
											<img src="img/menu_items/menu_items_placeholder.png"
												data-src="img/menu_items/3.jpg" class="lazy" alt="">
										</a>
									</figure>
									<div class="menu_title">
										<h3>Summer Berry</h3><em>$8</em>
									</div>
									<p>Raspberries, Blackberries</p>
									<a class="btn_1" href="#">add to cart</a>
								</div>
							</div>
							<div class="col-lg-6" data-cue="slideInUp">
								<div class="menu_item">
									<figure>
										<a href="img/menu_items/large/4.jpg" title="Coconut Tart"
											data-effect="mfp-zoom-in">
											<img src="img/menu_items/menu_items_placeholder.png"
												data-src="img/menu_items/4.jpg" class="lazy" alt="">
										</a>
									</figure>
									<div class="menu_title">
										<h3>Coconut Tart</h3><em>$10</em>
									</div>
									<p>Blueberries, Graham cracker crumbs</p>
									<a class="btn_1" href="#">add to cart</a>
								</div>
							</div>
							<div class="col-lg-6" data-cue="slideInUp">
								<div class="menu_item">
									<figure>
										<a href="img/menu_items/large/5.jpg" title="Pumpkin Cookies"
											data-effect="mfp-zoom-in">
											<img src="img/menu_items/menu_items_placeholder.png"
												data-src="img/menu_items/5.jpg" class="lazy" alt="">
										</a>
									</figure>
									<div class="menu_title">
										<h3>Pumpkin Cookies</h3><em>$11</em>
									</div>
									<p>Pumpkin, Sugar, Butter</p>
									<a class="btn_1" href="#">add to cart</a>
								</div>
							</div>
							<div class="col-lg-6" data-cue="slideInUp">
								<div class="menu_item">
									<figure>
										<a href="img/menu_items/large/6.jpg" title="Cookies Cream Cheese"
											data-effect="mfp-zoom-in">
											<img src="img/menu_items/menu_items_placeholder.png"
												data-src="img/menu_items/7.jpg" class="lazy" alt="">
										</a>
									</figure>
									<div class="menu_title">
										<h3>Cookies Cream Cheese</h3><em>$14</em>
									</div>
									<p>Sugar, Butter, Eggs</p>
									<a class="btn_1" href="#">add to cart</a>
								</div>
							</div>
							<div class="col-lg-6" data-cue="slideInUp">
								<div class="menu_item">
									<figure>
										<a href="img/menu_items/large/8.jpg" title="Chocolate Cupcakes"
											data-effect="mfp-zoom-in">
											<img src="img/menu_items/menu_items_placeholder.png"
												data-src="img/menu_items/8.jpg" class="lazy" alt="">
										</a>
									</figure>
									<div class="menu_title">
										<h3>Chocolate Cupcakes</h3><em>$14</em>
									</div>
									<p>Chocolate, Eggs, Vanilla</p>
									<a class="btn_1" href="#">add to cart</a>
								</div>
							</div>
							<div class="col-lg-6" data-cue="slideInUp">
								<div class="menu_item">
									<figure>
										<a href="img/menu_items/large/9.jpg" title="Chocolate Cupcakes"
											data-effect="mfp-zoom-in">
											<img src="img/menu_items/menu_items_placeholder.png"
												data-src="img/menu_items/9.jpg" class="lazy" alt="">
										</a>
									</figure>
									<div class="menu_title">
										<h3>Chocolate Cupcakes</h3><em>$14</em>
									</div>
									<p>Chocolate, Eggs, Vanilla</p>
									<a class="btn_1" href="#">add to cart</a>
								</div>
							</div>
							<div class="col-lg-6" data-cue="slideInUp">
								<div class="menu_item">
									<figure>
										<a href="img/menu_items/large/10.jpg" title="Soft shell crab"
											data-effect="mfp-zoom-in">
											<img src="img/menu_items/menu_items_placeholder.png"
												data-src="img/menu_items/10.jpg" class="lazy" alt="">
										</a>
									</figure>
									<div class="menu_title">
										<h3>Soft shell crab</h3><em>$14</em>
									</div>
									<p>Chicken, Potato, Salad</p>
									<a class="btn_1" href="#">add to cart</a>
								</div>
							</div>
							<div class="col-lg-6" data-cue="slideInUp">
								<div class="menu_item">
									<figure>
										<a href="img/menu_items/large/3.jpg" title="Soft shell crab"
											data-effect="mfp-zoom-in">
											<img src="img/menu_items/3.jpg" data-src="img/menu_items/3.jpg" class="lazy"
												alt="">
										</a>
									</figure>
									<div class="menu_title">
										<h3>Soft shell crab</h3><em>$14</em>
									</div>
									<p>Chicken, Potato, Salad</p>
									<a class="btn_1" href="#">add to cart</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="banner lazy" data-bg="url(img/banner_bg.jpg)">
							<div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
								<div class="text">
									<small>Special Offer</small>
									<h3>Burgher Menu $18 only</h3>
									<p>Hamburgher, Chips, Mix Sausages, Beer, Muffin</p>
									<a href="reservations.html" class="btn_1">Reserve now</a>
								</div>
								<!-- <figure class="d-none d-lg-block"><img src="img/banner.svg" alt="" width="200"
										height="200" class="img-fluid"></figure> -->
							</div>
							<!-- /wrapper -->
						</div>
					</div>
				</div>
				<!-- /row -->
				<p class="text-center"><a href="#0" class="btn_1 outline" data-cue="zoomIn">Download Menu (PDF)</a></p>
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_gray -->

		<div class="call_section lazy">
			<div class="overlay">
				<div class="container clearfix">
					<div class="row">
						<div class="col-xl-6 col-lg-5 col-md-6 text-center">
							<div class="box_1" data-cue="slideInUp">
								<h2>Enjoy<span>a Special Event with us!</span></h2>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
									consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
								<a href="contacts.html" class="btn_1 mt-3">Contact us</a>
							</div>
						</div>
						<div class="col-xl-6 col-lg-5 col-md-6 text-center">
							<div class="call_section_img" data-cue="slideInUp">
								<img src="img/bg_call_section.jpg" alt="call" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/call_section-->

			<div class="pattern_2 pattern_calendar">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12" data-cue="slideInUp">
							<div class="main_title">
								<span><em></em></span>
								<h2>Reserve a table</h2>
								<p>or Call us at 0344 32423453</p>
							</div>
							<div id="wizard_container">
								<form id="wrapped" method="POST">
									<input id="website" name="website" type="text" value="">
									<!-- Leave for security protection, read docs for details -->
									<div id="middle-wizard">
										<div class="step">
											<h3 class="main_question"><strong>1/3</strong> Please Select a date</h3>
											<div class="form-group">
												<input type="hidden" name="datepicker_field" id="datepicker_field"
													class="required">
											</div>
											<div id="DatePicker"></div>
										</div>
										<!-- /step-->
										<div class="step">
											<h3 class="main_question"><strong>2/3</strong> Select time and guests</h3>
											<div class="step_wrapper">
												<h4>Time</h4>
												<div class="radio_select add_bottom_15">
													<ul>
														<li>
															<input type="radio" id="time_1" name="time" value="12.00am"
																class="required">
															<label for="time_1">12.00</label>
														</li>
														<li>
															<input type="radio" id="time_2" name="time" value="12.30pm"
																class="required">
															<label for="time_2">12.30</label>
														</li>
														<li>
															<input type="radio" id="time_3" name="time" value="1.00pm"
																class="required">
															<label for="time_3">1.00</label>
														</li>
														<li>
															<input type="radio" id="time_4" name="time" value="1.30pm"
																class="required">
															<label for="time_4">1.30</label>
														</li>
														<li>
															<input type="radio" id="time_5" name="time" value="08.00pm"
																class="required">
															<label for="time_5">8.00</label>
														</li>
														<li>
															<input type="radio" id="time_6" name="time" value="08.30pm"
																class="required">
															<label for="time_6">8.30</label>
														</li>
														<li>
															<input type="radio" id="time_7" name="time" value="09.00pm"
																class="required">
															<label for="time_7">9.00</label>
														</li>
														<li>
															<input type="radio" id="time_8" name="time" value="09.30pm"
																class="required">
															<label for="time_8">9.30</label>
														</li>
													</ul>
												</div>
												<!-- /time_select -->
											</div>
											<!-- /step_wrapper -->
											<div class="step_wrapper">
												<h4>How many people?</h4>
												<div class="radio_select">
													<ul>
														<li>
															<input type="radio" id="people_1" name="people" value="1"
																class="required">
															<label for="people_1">1</label>
														</li>
														<li>
															<input type="radio" id="people_2" name="people" value="2"
																class="required">
															<label for="people_2">2</label>
														</li>
														<li>
															<input type="radio" id="people_3" name="people" value="3"
																class="required">
															<label for="people_3">3</label>
														</li>
														<li>
															<input type="radio" id="people_4" name="people" value="4"
																class="required">
															<label for="people_4">4</label>
														</li>
													</ul>
												</div>
												<!-- /people_select -->
											</div>
											<!-- /step_wrapper -->
										</div>
										<!-- /step-->
										<div class="submit step">
											<h3 class="main_question"><strong>3/3</strong> Please fill with your details
											</h3>
											<div class="form-group">
												<input type="text" name="name_reserve" class="form-control required"
													placeholder="First and Last Name">
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group">
														<input type="email" name="email_reserve"
															class="form-control required" placeholder="Your Email">
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<input type="text" name="telephone_reserve"
															class="form-control required" placeholder="Your Telephone">
													</div>
												</div>
											</div>

											<div class="form-group">
												<textarea class="form-control" name="opt_message_reserve"
													placeholder="Please provide any additional info"></textarea>
											</div>
											<div class="form-group terms">
												<label class="container_check">Please accept our <a href="#"
														data-bs-toggle="modal" data-bs-target="#terms-txt">Terms and
														conditions</a>
													<input type="checkbox" name="terms" value="Yes" class="required">
													<span class="checkmark"></span>
												</label>
											</div>
										</div>
										<!-- /step-->
									</div>
									<!-- /middle-wizard -->
									<div id="bottom-wizard">
										<button type="button" name="backward" class="backward">Prev</button>
										<button type="button" name="forward" class="forward">Next</button>
										<button type="submit" name="process" class="submit">Submit</button>
									</div>
									<!-- /bottom-wizard -->
								</form>
							</div>
							<!-- /Wizard container -->
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /pattern_2 -->
	</main>


    @include('partials.frontend.footer');

  <!-- COMMON SCRIPTS -->
	<script src="{{ asset('assets/frontend/js/common_scripts.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/slider.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/common_func.js') }}"></script>
	<script src="{{ asset('assets/frontend/phpmailer/validate.js') }}"></script>

	<!-- SPECIFIC SCRIPTS (wizard form) -->
	<script src="{{ asset('assets/frontend/js/wizard/wizard_scripts.min.js') }}"></script>
	<script src="{{ asset('assets/frontend/js/wizard/wizard_func.js') }}"></script>

    <!-- Page Specific JS File -->
    @yield('scripts')
</body>
</html>
