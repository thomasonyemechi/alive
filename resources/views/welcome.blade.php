@extends('layout')

@section('page_content')
<main class="main">

	<div class="hero-area pos-rel hero-overlay-2 hero-bg"
		style="background-image: url(assets/img/pictures/hdr.jpg)">
		<img src="assets/img/bg/bg-hdr-left.jpg" alt="no image" class="hdr-shape">
		<img src="assets/img/shape/wavy-1.png" alt="no image" class="hero-shape-3">
		<div class="hero-single">
			<div class="container">
				<div class="row g-5">
					<div class="col-xl-6">
						<div class="hero-content">
							<div class="hero-content-desc">
								<h2 class="hero-title">
									Welcome To {{ env('APP_NAME') }}
								</h2>
								<p class="mb-40">
									Accelerate the quest to be accountable & be practicing believers living the
									overcoming life daily
								</p>
								<div class="hero-btn">
									<a href="#" class="btn-4 btn-md btn-circle">
										Contact Us
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="left-hdr-pic">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="about-area pos-rel de-padding">
		<img src="assets/img/bg/bg-about.png" alt="no image" class="about-bg">
		<div class="container">
			<div class="about-wpr grid-2">
				<div class="about-left pr-60">
					<div class="about-left-content">
						<span class="hero-sub-title">About Us</span>
						<h2 class="heading-1">
							a six months mentorship journey
						</h2>
						<p>
							A journey running March to September yearly. It was launched March 7, 2024.
							The Mentorship Journey covers teaching, training, practical guide and impartations on;
						</p>
						<div class="about-exper mb-40">
							<div class="progress-box">
								<h5>The Divine Life & God's Kingdom Expression & Expansion <span
										class="text-right"></span></h5>
								<div class="progress">
									<div class="progress-bar" role="progressbar" data-width="190"></div>
								</div>
							</div>

							<div class="progress-box">
								<h5>Business School
									<span class="text-right"></span>
								</h5>
								<div class="progress">
									<div class="progress-bar" role="progressbar" data-width="190"></div>
								</div>
							</div>

							<div class="progress-box">
								<h5>The Home (Relationship & Marriage)
									<span class="text-right"></span>
								</h5>
								<div class="progress">
									<div class="progress-bar" role="progressbar" data-width="190"></div>
								</div>
							</div>

							<div class="progress-box">
								<h5>A Mentorship Guide
									<span class="text-right"></span>
								</h5>
								<div class="progress">
									<div class="progress-bar" role="progressbar" data-width="190"></div>
								</div>
							</div>

						</div>
						<div class="about-btn-content">
							<a href="/about" class="btn-1">Know More</a>
							<div class="about-call">
								<div class="about-call-icon">
									<i>
										<img src="assets/img/icon/telephone.png" alt="no image">
									</i>
								</div>
								<div class="about-call-text">
									<span>Call for help</span>
									<h5 class="mb-0"> {{ env('APP_PHONE ') }} </h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="about-right">
					<img src="assets/img/vector/about-right.png" alt="no image">
				</div>
			</div>
		</div>
	</div>

	<div class="service-area pos-rel bg de-padding overflow-hidden">
		<img src="assets/img/shape/service-wavy.png" alt="no image" class="service-wavy">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="site-title text-center">
						<p class="hero-sub-title">Why Choose Us ? </p>
						<div class="site-title-shape text-center mb-4">
							<img src="assets/img/shape/site-title-shape.png" alt="no image">
						</div>
						<h2 class="up-title mb-0">
							We provide best MENTORSHIP
						</h2>
					</div>
				</div>
			</div>
			<div class="service-wpr grid-4">
				<div class="service-box">
					<img src="assets/img/shape/shape-service.png" alt="no image" class="service-shape">
					<div class="service-icon">
						<i class="custom-icon">
							<img src="assets/img/icon/service-trans-1.png" alt="no image">
						</i>
					</div>
					<div class="service-desc">
						<h4 class="heading-4 mb-0">Experienced <br> Live Coach</h4>


					</div>
				</div>
				<div class="service-box">
					<img src="assets/img/shape/shape-service.png" alt="no image" class="service-shape">
					<div class="service-icon">
						<i class="custom-icon">
							<img src="assets/img/icon/service-trans-2.png" alt="no image">
						</i>
					</div>
					<div class="service-desc">
						<h4 class="heading-4 mb-0">Comprehensive <br> Curriculum</h4>

					</div>
				</div>
				<div class="service-box">
					<img src="assets/img/shape/shape-service.png" alt="no image" class="service-shape">
					<div class="service-icon">
						<i class="custom-icon">
							<img src="assets/img/icon/service-trans-3.png" alt="no image">
						</i>
					</div>
					<div class="service-desc">
						<h4 class="heading-4 mb-0">conducive <br> Enviroment</h4>

					</div>
				</div>
				<div class="service-box">
					<img src="assets/img/shape/shape-service.png" alt="no image" class="service-shape">
					<div class="service-icon">
						<i class="custom-icon">
							<img src="assets/img/icon/service-trans-4.png" alt="no image">
						</i>
					</div>
					<div class="service-desc">
						<h4 class="heading-4 mb-0">Relationship <br> and Marriage</h4>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="solve-area pos-rel bg-black overflow-hidden de-padding">
		<span class="solve-circle"></span>
		<span class="solve-rang"></span>
		<div class="container">
			<div class="solve-wpr grid-2">
				<div class="solve-left">
					<div class="solve-left-pic overflow-hidden pos-rel">
						<img src="assets/img/pictures/gul.jpg" class="solve-main-pic" alt="no image">
						<img src="assets/img/shape/solve-shape.png" class="solve-shape" alt="no image">
					</div>
				</div>
				<div class="solve-right solve-text-white pl-60">
					<span class="hero-sub-title">Problem Solving</span>
					<h2 class="heading-1">
						COMMITAL RULES
					</h2>

					<div class="solve-opt-wpr">

						<ul style="list-style: circle">
							<li class="heading-5 mb-2">Discipline is a red line to continuous participation in the
								project</li>
							<li class="heading-5 mb-2">Missing two straight classes, you will be officially
								notified of your being put out of the project, except for highly considered reasons.
							</li>
							<li class="heading-5 mb-2">Doing your after-class assignment is prerequisite to being
								allowed into the next class session. </li>
							<li class="heading-5 mb-2">No passivity - zero tolerance here for a little leaven
								potentially destroys the bunch.
							</li>
							<li class="heading-5 mb-2">Open to more jointly agreed commital rules.
							</li>
						</ul>


						<div class="solve-opt-single">
							<div class="solve-opt-text">
								<h4 class="heading-4">Business Models</h4>
								<p class="mb-0">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacus dolor,
									semper quis lacinia sed, auctor vel urna. Vestibulum etin scelerisque
								</p>
							</div>
							<div class="solve-opt-icon">
								<i class="fal fa-arrow-up"></i>
							</div>
						</div>
						<div class="solve-opt-single">
							<div class="solve-opt-text">
								<h4 class="heading-4">Tech Installation</h4>
								<p class="mb-0">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacus dolor,
									semper quis lacinia sed, auctor vel urna. Vestibulum etin scelerisque
								</p>
							</div>
							<div class="solve-opt-icon">
								<i class="fal fa-arrow-up"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="counter-area de-padding">
		<div class="container">
			<div class="counter-wpr">
				<div class="row">
					<div class="col-xl-6">
						<div class="counter-counter element-center">
							<div class="counter-1 grid-2">
								<div class="counter-left element-center">
									<div class="fun-fact fun-fact-clr-1">
										<div class="counter">
											<div class="timer" data-to="50" data-speed="2000"></div>
											<div class="operator">+</div>
										</div>
										<span class="medium">Students</span>
									</div>
								</div>
								<div class="counter-right">
									<div class="fun-fact fun-fact-clr-2 mb-30">
										<div class="counter">
											<div class="timer" data-to="6" data-speed="2000"></div>
											<div class="operator"></div>
										</div>
										<span class="medium">Months</span>
									</div>
									<div class="fun-fact fun-fact-clr-3">
										<div class="counter">
											<div class="timer" data-to="150" data-speed="2000"></div>
											<div class="operator">M</div>
										</div>
										<span class="medium">Happy clients</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="counter-title">

							<h2 class="heading-1 mb-30">
								COMMITAL RULES
							</h2>
							<div class="solve-opt-wpr">

								<ul style="list-style: circle">
									<li class="heading-5">Discipline is a red line to continuous participation in
										the project</li> <br>
									<li class="heading-5">Missing two straight classes, you will be officially
										notified of your being put out of the project, except for highly considered
										reasons.
									</li><br>
									<li class="heading-5">Doing your after-class assignment is prerequisite to
										being allowed into the next class session. </li><br>
									<li class="heading-5">No passivity - zero tolerance here for a little leaven
										potentially destroys the bunch.
									</li><br>
									<li class="heading-5">Open to more jointly agreed commital rules.
									</li>
								</ul>

							</div>
							<a href="/contact" class="btn-1 btn-circle btn-md btn-black">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="team-area de-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="site-title text-center">
						<p class="hero-sub-title">Our Experts</p>
						<div class="site-title-shape text-center mb-4">
							<img src="assets/img/shape/site-title-shape.png" alt="no image">
						</div>
						<h2 class="up-title mb-0">
							We have skilled people
						</h2>
					</div>
				</div>
			</div>
			<div class="team-wpr grid-4">
				<div class="team-box">
					<div class="team-pic">
						<img src="assets/img/vector/team-1.png" alt="no image" class="team-main-pic">
						<img src="assets/img/shape/team-shape-btm.png" class="team-shape-btm" alt="no image">
						<i class="fal fa-plus pls"></i>
						<ul class="team-social">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>
					<div class="team-desc">
						<span>FOUNDER</span>
						<h4 class="heading-4">Harry Abraham</h4>
					</div>
				</div>
				<div class="team-box">
					<div class="team-pic">
						<img src="assets/img/vector/team-2.png" alt="no image" class="team-main-pic">
						<img src="assets/img/shape/team-shape-btm.png" class="team-shape-btm" alt="no image">
						<i class="fal fa-plus pls"></i>
						<ul class="team-social">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>
					<div class="team-desc">
						<span>CEO</span>
						<h4 class="heading-4">Munir Anchor</h4>
					</div>
				</div>
				<div class="team-box">
					<div class="team-pic">
						<img src="assets/img/vector/team-3.png" alt="no image" class="team-main-pic">
						<img src="assets/img/shape/team-shape-btm.png" class="team-shape-btm" alt="no image">
						<i class="fal fa-plus pls"></i>
						<ul class="team-social">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>
					<div class="team-desc">
						<span>CONSULTANT</span>
						<h4 class="heading-4">Robert Johnson</h4>
					</div>
				</div>
				<div class="team-box">
					<div class="team-pic">
						<img src="assets/img/vector/team-4.png" alt="no image" class="team-main-pic">
						<img src="assets/img/shape/team-shape-btm.png" class="team-shape-btm" alt="no image">
						<i class="fal fa-plus pls"></i>
						<ul class="team-social">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>
					<div class="team-desc">
						<span>MERKETER</span>
						<h4 class="heading-4">Jenelia Orkid</h4>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="promo-area bg-overlay video-bg-live de-pt">
		<div class="player"
			data-property="{videoURL:'https://youtu.be/cQx8ZYK64dM',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:1, opacity:1, quality:'default'}">
		</div>
		<div class="container">
			<div class="promo-wpr">
				<div class="row align-items-center">
					<div class="col-xl-8 col-lg-8">
						<div class="promo-left promo-white">
							<span class="hero-sub-title">Promotional Video</span>
							<h2 class="heading-1">
								Exclusive video presentation <br />about recent project
							</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacus dolor, semper
								quis lacinia sed, auctor vel urna. Vestibulum etin scelerisque purus. Morbi a ornare
								mauris. Pellentesque
							</p>
							<div class="about-btn-content">
								<a href="about.html" class="btn-1">Contact Us</a>
								<div class="about-call">
									<div class="about-call-icon">
										<i>
											<img src="assets/img/icon/telephone.png" alt="no image">
										</i>
									</div>
									<div class="about-call-text">
										<span>Call for help</span>
										<h5 class="mb-0 text-white">+123-4567-8900</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4">
						<div class="promo-right">
							<div class="promo-dg">
								<span class="d-block mb-10">Digital Engagement</span>
								<h5 class="mb-0 text-white">watch history</h5>
							</div>
							<div class="pl">
								<a href="#" class="item popup-youtube play-bt">
									<i class="fal fa-play"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="promo-opt grid-3 de-pt">
				<div class="promo-opt-single">
					<span>01.</span>
					<h4 class="heading-4">
						Payroll <br /> Management
					</h4>
				</div>
				<div class="promo-opt-single promo-opt-active">
					<span>02.</span>
					<h4 class="heading-4">
						Employee <br /> Compensation
					</h4>
				</div>
				<div class="promo-opt-single">
					<span>03.</span>
					<h4 class="heading-4">
						Benefits <br /> Management
					</h4>
				</div>
			</div>
		</div>
	</div>

	<div class="review-area bg de-padding">
		<div class="container container-stage">
			<div class="review-wpr">
				<div class="row g-5">
					<div class="col-xl-4">
						<div class="review-left element-center">
							<div class="review-left-content">
								<h2 class="heading-2">
									Check out what our
									satisfied students
									said.
								</h2>
								<p>
									muffin marzipan cake lemon drops cookie cake sugar plum sweet oat cake. Lollipop
									candy canes cotton candy shortbread shortbread biscuit chocolate
								</p>
								<div class="reveiw-slider-ico">
									<div class="swiper-button-next"></div>
									<div class="swiper-button-prev"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8">

						<div class="review-wpr review-sldr swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="review-single">
										<div class="qoute-icon">
											<img src="assets/img/shape/quote-icon.png" alt="no image">
										</div>
										<p class="review-text">
											Sweet roll sesame snaps jujubes marshmallow chanllenging dragée tart
											tootsie roll. Sesame snaps biscuit halvah tiramisu
										</p>
										<div class="review-bottom">
											<div class="review-bio">
												<h4 class="heading-4">Giaur G. Bernhard</h4>
												<span>CEO &amp; Founder</span>
											</div>
											<div class="review-bio-pic">
												<img src="assets/img/pictures/user-1-s.png" alt="no image">
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="review-single">
										<div class="qoute-icon">
											<img src="assets/img/shape/quote-icon.png" alt="no image">
										</div>
										<p class="review-text">
											Sweet roll sesame snaps jujubes marshmallow chanllenging dragée tart
											tootsie roll. Sesame snaps biscuit halvah tiramisu
										</p>
										<div class="review-bottom">
											<div class="review-bio">
												<h4 class="heading-4">Raihan Sharif</h4>
												<span>Developer</span>
											</div>
											<div class="review-bio-pic">
												<img src="assets/img/pictures/user-2-s.png" alt="no image">
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="review-single">
										<div class="qoute-icon">
											<img src="assets/img/shape/quote-icon.png" alt="no image">
										</div>
										<p class="review-text">
											Sweet roll sesame snaps jujubes marshmallow chanllenging dragée tart
											tootsie roll. Sesame snaps biscuit halvah tiramisu
										</p>
										<div class="review-bottom">
											<div class="review-bio">
												<h4 class="heading-4">Bernard D. helsinki</h4>
												<span>Businessman</span>
											</div>
											<div class="review-bio-pic">
												<img src="assets/img/pictures/user-3-s.png" alt="no image">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



</main>

@endsection