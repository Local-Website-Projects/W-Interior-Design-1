<?php
require_once('admin/config/dbConfig.php');
$db_handle = new DBController();
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Home || Interior Design</title>
		<meta name="robots" content="noindex, follow">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php include ('includes/css.php');
        $page = 'Home'
        ?>
	</head>
	<body>
	<!-- page wrapper -->
	<div class="page-wrapper" id="page">

		<!-- Header Main Area -->
		<header class="site-header header-style-3">

            <?php include('includes/header.php');?>


			<div class="pbmit-slider-area pbmit-slider-three">
				<div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="true" data-arrows="false" data-columns="1" data-margin="0" data-effect="fade">
					<div class="swiper-wrapper">
						<!-- Slide1 -->
						<div class="swiper-slide">
							<div class="pbmit-slider-item">
								<div class="pbmit-slider-bg" style="background-image: url(images/banner-slider-img/demo3-slide-01.png);"></div>
								<div class="container">
									<div class="row align-items-center">
										<div class="col-md-12 col-lg-7"></div>
										<div class="col-md-12 col-lg-5 pbmit-right-col">
											<div class="pbmit-slider-content">
												<h2 class="pbmit-title transform-left transform-delay-3">Restaurant Interior Design <br> in Bangladesh.</h2>
												<p class="pbmit-desc transform-left transform-delay-4">Designing hospitable environments for your customers.</p>
												<div class="pbmit-button-wrap transform-left transform-delay-5">
													<a class="pbmit-btn pbmit-btn-global" href="Contact-Us">
														<span class="pbmit-button-content-wrapper">
															<span class="pbmit-button-text">Book Consult</span>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Slide2 -->
						<div class="swiper-slide">
							<div class="pbmit-slider-item">
								<div class="pbmit-slider-bg" style="background-image: url(images/banner-slider-img/demo3-slide-02.png);"></div>
								<div class="container">
									<div class="row align-items-center">
										<div class="col-md-12 col-lg-7"></div>
										<div class="col-md-12 col-lg-5 pbmit-right-col">
											<div class="pbmit-slider-content">
												<h2 class="pbmit-title transform-left transform-delay-3">Home Interior Design <br> In Bangladesh.</h2>
												<p class="pbmit-desc transform-left transform-delay-4">Creating beautiful and comfortable homes for you to live in.</p>
												<div class="pbmit-button-wrap transform-left transform-delay-5">
													<a class="pbmit-btn pbmit-btn-global" href="Contact-Us">
														<span class="pbmit-button-content-wrapper">
															<span class="pbmit-button-text">Book Consult</span>
														</span>
													</a>
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
		</header>
		<!-- Header Main Area End Here -->
			
		<!-- page content -->
		<div class="page-content">

			<!-- Client --> 
			<section class="client-three">
				<div class="container">
					<div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="false" data-columns="6" data-margin="0" data-effect="slide">
						<div class="swiper-wrapper">
							<!-- Slide1 -->
							<article class="pbmit-client-style-1 swiper-slide">
								<div class="pbmit-border-wrapper">
									<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
										<h4 class="pbmit-hide">Client 12</h4>
										<div class="pbmit-client-hover-img">
											<img src="images/homepage-3/client/client-global-01.png" class="img-fluid" alt="">

										</div>
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="images/homepage-3/client/client-grey-01.png" class="img-fluid" alt="">
											</div>
										</div>
									</div>
								</div>
							</article>
							<!-- Slide2 -->
							<article class="pbmit-client-style-1 swiper-slide">
								<div class="pbmit-border-wrapper">
									<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
										<h4 class="pbmit-hide">Client 12</h4>
										<div class="pbmit-client-hover-img">
											<img src="images/homepage-3/client/client-global-02.png" class="img-fluid" alt="">
										</div>
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="images/homepage-3/client/client-grey-02.png" class="img-fluid" alt="">
											</div>
										</div>
									</div>
								</div>
							</article>
							<!-- Slide3 -->
							<article class="pbmit-client-style-1 swiper-slide">
								<div class="pbmit-border-wrapper">
									<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
										<h4 class="pbmit-hide">Client 12</h4>
										<div class="pbmit-client-hover-img">
											<img src="images/homepage-3/client/client-global-03.png" class="img-fluid" alt="">
										</div>
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="images/homepage-3/client/client-grey-03.png" class="img-fluid" alt="">
											</div>
										</div>
									</div>
								</div>
							</article>
							<!-- Slide4 -->
							<article class="pbmit-client-style-1 swiper-slide">
								<div class="pbmit-border-wrapper">
									<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
										<h4 class="pbmit-hide">Client 12</h4>
										<div class="pbmit-client-hover-img">
											<img src="images/homepage-3/client/client-global-04.png" class="img-fluid" alt="">
										</div>
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="images/homepage-3/client/client-grey-04.png" class="img-fluid" alt="">
											</div>
										</div>
									</div>
								</div>
							</article>
							<!-- Slide5 -->
							<article class="pbmit-client-style-1 swiper-slide">
								<div class="pbmit-border-wrapper">
									<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
										<h4 class="pbmit-hide">Client 12</h4>
										<div class="pbmit-client-hover-img">
											<img src="images/homepage-3/client/client-global-05.png" class="img-fluid" alt="">
										</div>
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="images/homepage-3/client/client-grey-05.png" class="img-fluid" alt="">
											</div>
										</div>
									</div>
								</div>
							</article>
							<!-- Slide6 -->
							<article class="pbmit-client-style-1 swiper-slide">
								<div class="pbmit-border-wrapper">
									<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
										<h4 class="pbmit-hide">Client 12</h4>
										<div class="pbmit-client-hover-img">
											<img src="images/homepage-3/client/client-global-06.png" class="img-fluid" alt="">
										</div>
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="images/homepage-3/client/client-grey-06.png" class="img-fluid" alt="">
											</div>
										</div>
									</div>
								</div>
							</article>
							<!-- Slide7 -->
							<article class="pbmit-client-style-1 swiper-slide">
								<div class="pbmit-border-wrapper">
									<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
										<h4 class="pbmit-hide">Client 12</h4>
										<div class="pbmit-client-hover-img">
											<img src="images/homepage-3/client/client-global-07.png" class="img-fluid" alt="">
										</div>
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="images/homepage-3/client/client-grey-07.png" class="img-fluid" alt="">
											</div>
										</div>
									</div>
								</div>
							</article>
							<!-- Slide8 -->
							<article class="pbmit-client-style-1 swiper-slide">
								<div class="pbmit-border-wrapper">
									<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
										<h4 class="pbmit-hide">Client 12</h4>
										<div class="pbmit-client-hover-img">
											<img src="images/homepage-3/client/client-global-08.png" class="img-fluid" alt="">
										</div>
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="images/homepage-3/client/client-grey-08.png" class="img-fluid" alt="">
											</div>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section>
			<!-- Client end --> 

			<!-- About Start -->
			<section class="about-section-three">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-xl-6">
							<div class="about-three-left-area">
								<div class="pbmit-heading-subheading animation-style2">
									<h4 class="pbmit-subtitle">What we do</h4>
									<h2 class="pbmit-title">THE IMAGINE INTERIORS ADVANTAGE</h2>
									<div class="pbmit-heading-desc">
                                        Are you looking to create an awesome space to live/work in?

                                        Do you look forward to a hassle-free interior design process?

                                        Would you like your interior design project to be long lasting?

                                        Then you’ve come to the right place!

                                        Our portfolio in both residential interior design and commercial interior design speaks for itself.
									</div>
								</div>
								<div class="row">
									<article class="pbmit-miconheading-style-1 col-md-12">
										<div class="pbmit-ihbox-style-1">
											<div class="pbmit-ihbox-headingicon d-flex align-items-center">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">01.</div>
												</div>
												<div class="pbmit-ihbox-contents">
													<h2 class="pbmit-element-title">
                                                        We make interior design completely hassle-free.
													</h2>
												</div>
											</div>
										</div>
									</article>
									<article class="pbmit-miconheading-style-1 col-md-12">
										<div class="pbmit-ihbox-style-1">
											<div class="pbmit-ihbox-headingicon d-flex align-items-center">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">02.</div>
												</div>
												<div class="pbmit-ihbox-contents">
													<h2 class="pbmit-element-title">
                                                        We are fully transparent about costs.
													</h2>
												</div>
											</div>
										</div>
									</article>
                                    <article class="pbmit-miconheading-style-1 col-md-12">
                                        <div class="pbmit-ihbox-style-1">
                                            <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">03.</div>
                                                </div>
                                                <div class="pbmit-ihbox-contents">
                                                    <h2 class="pbmit-element-title">
                                                        We deliver on time.
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="pbmit-miconheading-style-1 col-md-12">
                                        <div class="pbmit-ihbox-style-1">
                                            <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">04.</div>
                                                </div>
                                                <div class="pbmit-ihbox-contents">
                                                    <h2 class="pbmit-element-title">
                                                        We allow for environmental conditions and employ advanced technology.
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="pbmit-miconheading-style-1 col-md-12">
                                        <div class="pbmit-ihbox-style-1">
                                            <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">05.</div>
                                                </div>
                                                <div class="pbmit-ihbox-contents">
                                                    <h2 class="pbmit-element-title">
                                                        We will extensively consult with you and ensure the final design is exactly what you wanted.
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
								</div>
								<a class="pbmit-btn pbmit-btn-outline mt-3" href="About-Us">
									<span class="pbmit-button-content-wrapper">
										<span class="pbmit-button-text">More About</span>
									</span>
								</a>
							</div>
						</div>
						<div class="col-md-12 col-xl-6 position-relative">
							<div class="about-three-rightbox">
								<div class="fid-style-area">
									<div class="pbminfotech-ele-fid-style-4">
										<div class="pbmit-fld-contents">
											<div class="pbmit-fld-wrap">
												<div class="pbmit-fid-icon-title">		
													<span class="pbmit-fid-title">Started In</span>
												</div>
												<h4 class="pbmit-fid-inner">
													<span class="pbmit-fid-before"></span>
													<span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="1995" data-interval="10" data-before="" data-before-style="" data-after="" data-after-style="">1995</span>
													<span class="pbmit-fid"></span>
												</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="about-three-img1">
									<div class="pbmit-animation-style7">
										<img src="images/homepage-3/img01.jpg" class="img-fluid" alt="img01">
									</div>
								</div>
								<div class="about-three-img2">
									<div class="pbmit-animation-style7">
										<img src="images/homepage-3/img02.jpg" class="img-fluid" alt="img02">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- About End -->

			<!-- Case Study Start -->
            <section class="pbmit-extend-animation section-xl pbmit-bg-color-secondary service-three">
				<div class="container pbmit-col-stretched-yes pbmit-col-right">
					<div class="pbmit-col-stretched-right">
						<div class="row">
							<div class="col-md-12 col-lg-3 pbmit-servicebox-left">
								<div>
									<div class="pbmit-heading-subheading animation-style2">
										<h4 class="pbmit-subtitle">since 1986</h4>
										<h2 class="pbmit-title">Recent case studies</h2>
										<div class="pbmit-heading-desc">
                                            Our portfolio includes design projects in home interior design, office design, restaurant design and hotel design at various locations throughout Bangladesh.
										</div>
									</div>
									<div class="service-arrow swiper-btn-custom d-inline-flex flex-row-reverse"></div>
								</div>
								<div class="pbmit-service-highlight">
									<h2>Service</h2>
								</div>
							</div>
							<div class="pbmit-servicebox-right col-md-12 col-lg-9">
								<div class="swiper-slider" data-arrows-class="service-arrow" data-autoplay="false" data-loop="true" data-dots="false" data-arrows="true" data-columns="2.6" data-margin="30" data-effect="slide">
									<div class="swiper-wrapper">
										<!-- Slide1 -->
										<article class="pbmit-ele-service pbmit-service-style-3 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbminfotech-box-content">
													<div class="pbmit-service-image-wrapper">
														<div class="pbmit-featured-img-wrapper">
															<div class="pbmit-featured-wrapper">
																<img src="images/homepage-3/service/service-01.jpg" class="img-fluid" alt="">
															</div>
														</div>
													</div>
													<div class="pbminfotech-box-number">01</div>
														<div class="pbmit-service-icon elementor-icon">
															<i class=""></i>		
														</div>
													<div class="pbmit-content-box">
														<div class="pbmit-serv-cat">
															<a href="#" rel="tag">Kitchen</a>
														</div>
														<h3 class="pbmit-service-title">
															<a href="#">Transforming Rooms</a>
														</h3>
													</div>
												</div>
												<a class="pbmit-service-btn" href="#" title="Transforming Rooms">
													<span class="pbmit-button-icon">
														<i class="pbmit-base-icon-pbmit-up-arrow"></i>
													</span>
												</a>
											</div>
										</article>
										<!-- Slide2 -->
										<article class="pbmit-ele-service pbmit-service-style-3 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbminfotech-box-content">
													<div class="pbmit-service-image-wrapper">
														<div class="pbmit-featured-img-wrapper">
															<div class="pbmit-featured-wrapper">
																<img src="images/homepage-3/service/service-02.jpg" class="img-fluid" alt="">
															</div>
														</div>
													</div>
													<div class="pbminfotech-box-number">02</div>
														<div class="pbmit-service-icon elementor-icon">
															<i class=""></i>		
														</div>
													<div class="pbmit-content-box">
														<div class="pbmit-serv-cat">
															<a href="#" rel="tag">Interior</a>
														</div>
														<h3 class="pbmit-service-title">
															<a href="#">Weaving Dreams</a>
														</h3>
													</div>
												</div>
												<a class="pbmit-service-btn" href="#" title="Weaving Dreams">
													<span class="pbmit-button-icon">
														<i class="pbmit-base-icon-pbmit-up-arrow"></i>
													</span>
												</a>
											</div>
										</article>
										<!-- Slide3 -->
										<article class="pbmit-ele-service pbmit-service-style-3 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbminfotech-box-content">
													<div class="pbmit-service-image-wrapper">
														<div class="pbmit-featured-img-wrapper">
															<div class="pbmit-featured-wrapper">
																<img src="images/homepage-3/service/service-03.jpg" class="img-fluid" alt="">
															</div>
														</div>
													</div>
													<div class="pbminfotech-box-number">03</div>
														<div class="pbmit-service-icon elementor-icon">
															<i class=""></i>		
														</div>
													<div class="pbmit-content-box">
														<div class="pbmit-serv-cat">
															<a href="#" rel="tag">Bedroom</a>
														</div>
														<h3 class="pbmit-service-title">
															<a href="#">Interior Decorator</a>
														</h3>
													</div>
												</div>
												<a class="pbmit-service-btn" href="#" title="Interior Decorator">
													<span class="pbmit-button-icon">
														<i class="pbmit-base-icon-pbmit-up-arrow"></i>
													</span>
												</a>
											</div>
										</article>
										<!-- Slide4 -->
										<article class="pbmit-ele-service pbmit-service-style-3 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbminfotech-box-content">
													<div class="pbmit-service-image-wrapper">
														<div class="pbmit-featured-img-wrapper">
															<div class="pbmit-featured-wrapper">
																<img src="images/homepage-3/service/service-04.jpg" class="img-fluid" alt="">
															</div>
														</div>
													</div>
													<div class="pbminfotech-box-number">04</div>
														<div class="pbmit-service-icon elementor-icon">
															<i class=""></i>		
														</div>
													<div class="pbmit-content-box">
														<div class="pbmit-serv-cat">
															<a href="#" rel="tag">Furniture</a>
														</div>
														<h3 class="pbmit-service-title">
															<a href="#">Professional Interior</a>
														</h3>
													</div>
												</div>
												<a class="pbmit-service-btn" href="#" title="Professional Interior">
													<span class="pbmit-button-icon">
														<i class="pbmit-base-icon-pbmit-up-arrow"></i>
													</span>
												</a>
											</div>
										</article>
										<!-- Slide5 -->
										<article class="pbmit-ele-service pbmit-service-style-3 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbminfotech-box-content">
													<div class="pbmit-service-image-wrapper">
														<div class="pbmit-featured-img-wrapper">
															<div class="pbmit-featured-wrapper">
																<img src="images/homepage-3/service/service-05.jpg" class="img-fluid" alt="">
															</div>
														</div>
													</div>
													<div class="pbminfotech-box-number">05</div>
														<div class="pbmit-service-icon elementor-icon">
															<i class=""></i>		
														</div>
													<div class="pbmit-content-box">
														<div class="pbmit-serv-cat">
															<a href="#" rel="tag">Kitchen</a>
														</div>
														<h3 class="pbmit-service-title">
															<a href="#">Interior Work Plan</a>
														</h3>
													</div>
												</div>
												<a class="pbmit-service-btn" href="#" title="Interior Work Plan">
													<span class="pbmit-button-icon">
														<i class="pbmit-base-icon-pbmit-up-arrow"></i>
													</span>
												</a>
											</div>
										</article>
										<!-- Slide6 -->
										<article class="pbmit-ele-service pbmit-service-style-3 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbminfotech-box-content">
													<div class="pbmit-service-image-wrapper">
														<div class="pbmit-featured-img-wrapper">
															<div class="pbmit-featured-wrapper">
																<img src="images/homepage-3/service/service-06.jpg" class="img-fluid" alt="">
															</div>
														</div>
													</div>
													<div class="pbminfotech-box-number">06</div>
														<div class="pbmit-service-icon elementor-icon">
															<i class=""></i>		
														</div>
													<div class="pbmit-content-box">
														<div class="pbmit-serv-cat">
															<a href="#" rel="tag">Bedroom</a>
														</div>
														<h3 class="pbmit-service-title">
															<a href="#">2D/3D Layouts</a>
														</h3>
													</div>
												</div>
												<a class="pbmit-service-btn" href="#" title="2D/3D Layouts">
													<span class="pbmit-button-icon">
														<i class="pbmit-base-icon-pbmit-up-arrow"></i>
													</span>
												</a>
											</div>
										</article>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
            </section>
            <!-- Case Study End -->

			<!-- Tab Start --> 
			<section class="section-xl tab-sec-one">
				<div class="container">
					<div class="pbmit-heading-subheading text-center animation-style2">
						<h4 class="pbmit-subtitle">since 1986</h4>
						<h2 class="pbmit-title">What Can We Offer</h2>
					</div>
					<div class="pbmit-tab">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" data-bs-toggle="tab" href="#tab-2-1" aria-selected="true" role="tab"> 
									<span>Interior Design</span>
									<i class="pbmit-base-icon-pbmit-up-arrow"></i>
								</a>	
							</li>
							<li class="nav-item" role="presentation"> 
								<a class="nav-link" data-bs-toggle="tab" href="#tab-2-2" aria-selected="false" role="tab" tabindex="-1"> 
									<span>Exterior Design</span>
									<i class="pbmit-base-icon-pbmit-up-arrow"></i>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" data-bs-toggle="tab" href="#tab-2-3" aria-selected="false" role="tab" tabindex="-1"> 
									<span>Furniture Design</span>
									<i class="pbmit-base-icon-pbmit-up-arrow"></i>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" data-bs-toggle="tab" href="#tab-2-4" aria-selected="false" role="tab" tabindex="-1"> 
									<span>Office Design</span>
									<i class="pbmit-base-icon-pbmit-up-arrow"></i>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" data-bs-toggle="tab" href="#tab-2-5" aria-selected="false" role="tab" tabindex="-1"> 
									<span>Restaurant Design</span>
									<i class="pbmit-base-icon-pbmit-up-arrow"></i>
								</a>
							</li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2-5" aria-selected="false" role="tab" tabindex="-1">
                                    <span>Duplex House Design</span>
                                    <i class="pbmit-base-icon-pbmit-up-arrow"></i>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2-5" aria-selected="false" role="tab" tabindex="-1">
                                    <span>Project Analysis</span>
                                    <i class="pbmit-base-icon-pbmit-up-arrow"></i>
                                </a>
                            </li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane show active" id="tab-2-1" role="tabpanel">
								<div class="pbmit-column-inner">
									<div class="row g-0 align-items-center">
										<div class="col-xl-5 col-md-12 pbmit-tab-img">
											<img src="images/homepage-3/tab-img1.jpg" class="img-fluid" alt="">
										</div>
										<div class="col-xl-7 col-md-12 pbmit-tab-list">
											<h2>Giving your home a new style.</h2>
											There are many variations of passages of Lorem Ipsumbut the majority have suffered alteration in some form, by injected humour, or words which don't look even.
											<ul class="list-group list-group-borderless">
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Experienced, time-served engineers</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Commitment to customer service</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Commitment to taking the stress out of your project.</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Flexible with any structure of the building</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab-2-2" role="tabpanel">
								<div class="pbmit-column-inner">
									<div class="row g-0 align-items-center">
										<div class="col-xl-5 pbmit-tab-img">
											<img src="images/homepage-3/tab-img2.jpg" class="img-fluid" alt="">
										</div>
										<div class="col-xl-7 pbmit-tab-list">
											<h2>Giving your home a new style.</h2>
											There are many variations of passages of Lorem Ipsumbut the majority have suffered alteration in some form, by injected humour, or words which don't look even.
											<ul class="list-group list-group-borderless">
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Experienced, time-served engineers</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Commitment to customer service</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Commitment to taking the stress out of your project.</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Flexible with any structure of the building</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab-2-3" role="tabpanel">
								<div class="pbmit-column-inner">
									<div class="row g-0 align-items-center">
										<div class="col-xl-5 pbmit-tab-img">
											<img src="images/homepage-3/tab-img3.jpg" class="img-fluid" alt="">
										</div>
										<div class="col-xl-7 pbmit-tab-list">
											<h2>Interior Design Transformations.</h2>
											There are many variations of passages of Lorem Ipsumbut the majority have suffered alteration in some form, by injected humour, or words which don't look even.
											<ul class="list-group list-group-borderless">
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Experienced, time-served engineers</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Commitment to customer service</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Commitment to taking the stress out of your project.</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Flexible with any structure of the building</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab-2-4" role="tabpanel">
								<div class="pbmit-column-inner">
									<div class="row g-0 align-items-center">
										<div class="col-xl-5 pbmit-tab-img">
											<img src="images/homepage-3/tab-img4.jpg" class="img-fluid" alt="">
										</div>
										<div class="col-xl-7 pbmit-tab-list">
											<h2>Let's Have A Look At What Creativity</h2>
											There are many variations of passages of Lorem Ipsumbut the majority have suffered alteration in some form, by injected humour, or words which don't look even.
											<ul class="list-group list-group-borderless">
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Experienced, time-served engineers</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Commitment to customer service</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Commitment to taking the stress out of your project.</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Flexible with any structure of the building</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab-2-5" role="tabpanel">
								<div class="pbmit-column-inner">
									<div class="row g-0 align-items-center">
										<div class="col-xl-5 pbmit-tab-img">
											<img src="images/homepage-3/tab-img5.jpg" class="img-fluid" alt="">
										</div>
										<div class="col-xl-7 pbmit-tab-list">
											<h2>Strategy - 3D Interior Design.</h2>
											There are many variations of passages of Lorem Ipsumbut the majority have suffered alteration in some form, by injected humour, or words which don't look even.
											<ul class="list-group list-group-borderless">
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Experienced, time-served engineers</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Commitment to customer service</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Commitment to taking the stress out of your project.</span>
												</li>
												<li class="list-group-item">
													<span class="pbmit-icon-list-icon">
														<i aria-hidden="true" class="pbmit-xinterio-icon pbmit-xinterio-icon-tick-mark"></i>
													</span>
													<span class="pbmit-icon-list-text">Flexible with any structure of the building</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> 
			<!-- Tab end -->

			<!-- Before After Start -->
			<section>
				<div class="section-xl container-fluid p-0">
					<div class="row g-2">
						<div class="col-md-12 col-xl-6">
							<div class="before-after-left-area pbmit-bg-color-blackish">
								<div class="pbmit-heading-subheading animation-style4">
									<h4 class="pbmit-subtitle">since 1986</h4>
									<h2 class="pbmit-title">Get The Imagine Interiors Advantage!</h2>
									<div class="pbmit-heading-desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
									</div>
								</div>
								<div class="row pbmit-fid-style-one">
									<div class="col-md-4">
										<div class="pbminfotech-ele-fid-style-1">
											<div class="pbmit-fld-contents d-flex align-items-center">
												<div class="pbmit-circle-outer" data-digit="87" data-fill="#bb9a65" data-emptyfill="" data-before="" data-after="<span>%</span>" data-thickness="1" data-size="127">
													<div class="pbmit-circle">
														<div class="pbmit-fid-inner">
															<span class="pbmit-fid-before"></span>
															<span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="87" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">87</span>
															<span class="pbmit-fid"><span>%</span></span>
														</div>
													</div>
												</div>
												<div class="pbmit-fid-sub">
													<h3 class="pbmit-fid-title">Detailed <br> Consultation</h3>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="pbminfotech-ele-fid-style-1">
											<div class="pbmit-fld-contents d-flex align-items-center">
												<div class="pbmit-circle-outer" data-digit="89" data-fill="#bb9a65" data-emptyfill="" data-before="" data-after="<span>%</span>" data-thickness="1" data-size="127">
													<div class="pbmit-circle">
														<div class="pbmit-fid-inner">
															<span class="pbmit-fid-before"></span>
															<span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="89" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">89</span>
															<span class="pbmit-fid"><span>%</span></span>
														</div>
													</div>
												</div>
												<div class="pbmit-fid-sub">
													<h3 class="pbmit-fid-title">Premium <br> Materials</h3>
												</div>
											</div>
										</div>
									</div>
                                    <div class="col-md-4">
                                        <div class="pbminfotech-ele-fid-style-1">
                                            <div class="pbmit-fld-contents d-flex align-items-center">
                                                <div class="pbmit-circle-outer" data-digit="89" data-fill="#bb9a65" data-emptyfill="" data-before="" data-after="<span>%</span>" data-thickness="1" data-size="127">
                                                    <div class="pbmit-circle">
                                                        <div class="pbmit-fid-inner">
                                                            <span class="pbmit-fid-before"></span>
                                                            <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="89" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">89</span>
                                                            <span class="pbmit-fid"><span>%</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pbmit-fid-sub">
                                                    <h3 class="pbmit-fid-title">On-time <br> Delivery</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-xl-6">
							<div class="twentytwenty-container">
								<img src="images/homepage-3/after.png" alt="Before">
								<img src="images/homepage-3/before.png" alt="After">
							</div>
						</div>
					</div>
				</div>
            </section>
			<!-- Before After End -->

			<!-- About Us Start -->
			<section class="section-xl about-us-three-sec">
				<div class="container">
					<div class="row g-0">
						<div class="col-md-12 col-xl-4">
							<div class="about-us-three-content">
								<div class="pbmit-heading-subheading animation-style2">
									<h2 class="pbmit-title">Hello! I`m Brantlee stvens</h2>
									<div class="pbmit-heading-desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
									</div>
								</div>
								<div class="pbmit-animation-style1">
									<img src="images/homepage-3/sign2.png" alt="">
								</div>
								<div class="pbmit-text-editor">@ Founder</div>
							</div>
						</div>
						<div class="col-md-12 col-xl-4">
							<div class="pbmit-animation-style7 single-img">
								<img src="images/homepage-3/single-img.png" alt="">
							</div>
						</div>
						<div class="col-md-12 col-xl-4">
							<div class="fid-style-area">
								<div class="pbminfotech-ele-fid-style-2">
									<div class="pbmit-fld-contents">
										<div class="pbmit-fld-wrap">
											<div class="pbmit-fid-icon-title">
												<div class="pbmit-sbox-icon-wrapper pbmit-icon-type-icon">
													<i class="pbmit-xinterio-icon pbmit-xinterio-icon-offer"></i>
												</div>
												<span class="pbmit-fid-title">Happy Client Review</span>
											</div>
											<h4 class="pbmit-fid-inner">
												<span class="pbmit-fid-before"></span>
												<span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="235" data-interval="1" data-before="" data-before-style="" data-after="" data-after-style="">235</span>
												<span class="pbmit-fid"><sup>+</sup></span>
											</h4>
										</div>
									</div>
								</div>
								<div class="pbminfotech-ele-fid-style-2 py-3">
									<div class="pbmit-fld-contents">
										<div class="pbmit-fld-wrap">
											<div class="pbmit-fid-icon-title">
												<div class="pbmit-sbox-icon-wrapper pbmit-icon-type-icon">
													<i class="pbmit-xinterio-icon pbmit-xinterio-icon-engineer"></i>
												</div>
												<span class="pbmit-fid-title">Work Departments</span>
											</div>
											<h4 class="pbmit-fid-inner">
												<span class="pbmit-fid-before"></span>
												<span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="420" data-interval="1" data-before="" data-before-style="" data-after="" data-after-style="">420</span>
												<span class="pbmit-fid"><sup>+</sup></span>
											</h4>
										</div>
									</div>
								</div>
								<div class="pbminfotech-ele-fid-style-2">
									<div class="pbmit-fld-contents">
										<div class="pbmit-fld-wrap">
											<div class="pbmit-fid-icon-title">
												<div class="pbmit-sbox-icon-wrapper pbmit-icon-type-icon">
													<i class="pbmit-xinterio-icon pbmit-xinterio-icon-client"></i>
												</div>
												<span class="pbmit-fid-title">Our Happy Client</span>
											</div>
											<h4 class="pbmit-fid-inner">
												<span class="pbmit-fid-before"></span>
												<span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="30" data-interval="1" data-before="" data-before-style="" data-after="" data-after-style="">30</span>
												<span class="pbmit-fid"><span>K</span></span>
											</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- About Us End -->

			<!-- Testimonial Start -->
			<section class="">
				<div class="container-fluid p-0"> 
					<div class="row g-2">
						<div class="col-md-12 col-xl-6">
							<div class="testimonial-three-bg"></div>
						</div>
						<div class="col-md-12 col-xl-6">
							<div class="testimonial-three-main">
								<div class="pbmit-heading-subheading animation-style4">
									<h4 class="pbmit-subtitle">Clients feedback</h4>
									<h2 class="pbmit-title">What our client's have to say</h2>
								</div>
								<div class="swiper-slider" data-autoplay="false" data-loop="false" data-dots="true" data-arrows="false" data-columns="1" data-margin="30" data-effect="slide">
									<div class="swiper-wrapper">
										<!-- Slide1 -->
										<article class="pbmit-testimonial-style-3 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbmit-box-content-wrap">
													<div class="pbminfotech-box-star-ratings">
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
													</div>
													<div class="pbminfotech-box-desc">
														<blockquote class="pbminfotech-testimonial-text">
															<p>Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks guys for all your hard work. Trust us we looked for a very long time.</p>
														</blockquote>
													</div>
													<div class="pbminfotech-box-author d-flex align-items-center">
														<div class="pbminfotech-box-img">
															<div class="pbmit-featured-img-wrapper">
																<div class="pbmit-featured-wrapper">
																	<img src="images/homepage-3/reviewer/reviewer-01.jpg" class="img-fluid" alt="">
																</div>
															</div>
														</div>
														<div class="pbmit-auther-content">
															<h3 class="pbminfotech-box-title">Olivia Cruz</h3>
															<div class="pbminfotech-testimonial-detail">Grorgia, USA</div>
														</div>
													</div>
												</div>
											</div>
										</article> 
										<!-- Slide2 -->
										<article class="pbmit-testimonial-style-3 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbmit-box-content-wrap">
													<div class="pbminfotech-box-star-ratings">
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
													</div>
													<div class="pbminfotech-box-desc">
														<blockquote class="pbminfotech-testimonial-text">
															<p>Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks guys for all your hard work. Trust us we looked for a very long time.</p>
														</blockquote>
													</div>
													<div class="pbminfotech-box-author d-flex align-items-center">
														<div class="pbminfotech-box-img">
															<div class="pbmit-featured-img-wrapper">
																<div class="pbmit-featured-wrapper">
																	<img src="images/homepage-3/reviewer/reviewer-02.jpg" class="img-fluid" alt="">
																</div>
															</div>
														</div>
														<div class="pbmit-auther-content">
															<h3 class="pbminfotech-box-title">Martin Bailey</h3>
															<div class="pbminfotech-testimonial-detail">Grorgia, USA</div>
														</div>
													</div>
												</div>
											</div>
										</article> 
										<!-- Slide3 -->
										<article class="pbmit-testimonial-style-3 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbmit-box-content-wrap">
													<div class="pbminfotech-box-star-ratings">
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
													</div>
													<div class="pbminfotech-box-desc">
														<blockquote class="pbminfotech-testimonial-text">
															<p>Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks guys for all your hard work. Trust us we looked for a very long time.</p>
														</blockquote>
													</div>
													<div class="pbminfotech-box-author d-flex align-items-center">
														<div class="pbminfotech-box-img">
															<div class="pbmit-featured-img-wrapper">
																<div class="pbmit-featured-wrapper">
																	<img src="images/homepage-3/reviewer/reviewer-03.jpg" class="img-fluid" alt="">
																</div>
															</div>
														</div>
														<div class="pbmit-auther-content">
															<h3 class="pbminfotech-box-title">Alex Zender</h3>
															<div class="pbminfotech-testimonial-detail">Grorgia, USA</div>
														</div>
													</div>
												</div>
											</div>
										</article> 
										<!-- Slide4 -->
										<article class="pbmit-testimonial-style-3 swiper-slide">
											<div class="pbminfotech-post-item">
												<div class="pbmit-box-content-wrap">
													<div class="pbminfotech-box-star-ratings">
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
														<i class="pbmit-base-icon-star-1 pbmit-active"></i>
													</div>
													<div class="pbminfotech-box-desc">
														<blockquote class="pbminfotech-testimonial-text">
															<p>Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks guys for all your hard work. Trust us we looked for a very long time.</p>
														</blockquote>
													</div>
													<div class="pbminfotech-box-author d-flex align-items-center">
														<div class="pbminfotech-box-img">
															<div class="pbmit-featured-img-wrapper">
																<div class="pbmit-featured-wrapper">
																	<img src="images/homepage-3/reviewer/reviewer-04.jpg" class="img-fluid" alt="">
																</div>
															</div>
														</div>
														<div class="pbmit-auther-content">
															<h3 class="pbminfotech-box-title">Robert Gold</h3>
															<div class="pbminfotech-testimonial-detail">Grorgia, USA</div>
														</div>
													</div>
												</div>
											</div>
										</article> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Testimonial End -->
			
			<!-- Blog Start -->
			<section class="section-xl section-md">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="pbmit-heading-subheading animation-style4">
								<h4 class="pbmit-subtitle">What we do</h4>
								<h2 class="pbmit-title">Latest posts & articles</h2>
							</div>
						</div>
						<div class="col-md-6">
							<div class="blog-btn">
								<a class="pbmit-btn pbmit-btn-outline" href="#">
									<span class="pbmit-button-content-wrapper">
										<span class="pbmit-button-text">See all blogs</span>
									</span>
								</a>
							</div>
						</div>
					</div>
					<div class="row g-0 align-items-center">
						<div class="col-md-12 col-xl-7">
                            <?php
                            $fetch_blog = $db_handle->runQuery("select * from blogs order by blog_id DESC limit 1");
                            ?>
							<article class="pbmit-ele-blog pbmit-blog-style-3">
								<div class="post-item d-flex">
									<div class="pbmit-featured-container">
										<div class="pbmit-bg-image" style="background-image:url('<?php echo $fetch_blog[0]['blog_image'];?>')">
											<div class="pbmit-featured-img-wrapper">
												<div class="pbmit-featured-wrapper">
													<img src="<?php echo $fetch_blog[0]['blog_image'];?>" class="img-fluid" alt="blog-01">
												</div>
											</div>
										</div>
									</div>
									<div class="pbminfotech-box-wrap">
										<div class="pbminfotech-box-content">
											<div class="pbmit-date-admin-wraper d-flex align-items-center">
												<div class="pbmit-meta-date pbmit-meta-line">
													<span class="pbmit-post-date">
														<i class="pbmit-base-icon-calendar-3"></i><?php echo $fetch_blog[0]['publish_date'];?>
													</span>
												</div>
												<div class="pbmit-meta-author pbmit-meta-line">
												<span class="pbmit-post-author">
													<i class="pbmit-base-icon-user-3"></i>
													<span>By</span>admin
												</span>
												</div>
											</div>
											<h3 class="pbmit-post-title">
												<a href="Blog-Details?blog_id=<?php echo $fetch_blog[0]['blog_id'];?>"><?php echo $fetch_blog[0]['blog_title'];?></a>
											</h3>
											<div class="pbminfotech-box-desc">
                                                <?php echo substr($fetch_blog[0]['blog_body'], 0, 80); ?> ...
											</div>
										</div>
										<a class="pbmit-blog-btn" href="#">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-pbmit-up-arrow"></i>
											</span>
										</a>
									</div>
								</div>
							</article>
						</div>
						<div class="col-md-12 col-xl-5">
							<div class="blog-three-right-col">
								<div class="row">
                                    <?php
                                    $fetch_blogs = $db_handle->runQuery("SELECT * FROM blogs WHERE blog_id != (SELECT MAX(blog_id) FROM blogs) ORDER BY blog_id DESC limit 3");
                                    $fetch_blogs_no = $db_handle->numROws("SELECT * FROM blogs WHERE blog_id != (SELECT MAX(blog_id) FROM blogs) ORDER BY blog_id DESC limit 3");
                                    for($i=0; $i<$fetch_blogs_no; $i++){
                                        ?>
                                        <article class="pbmit-ele-blog pbmit-blog-style-2 col-md-12">
                                            <div class="post-item">
                                                <div class="pbminfotech-box-content">
                                                    <div class="pbminfotech-content-inner">
                                                        <div class="pbmit-featured-img-wrapper">
                                                            <div class="pbmit-featured-wrapper">
                                                                <img src="<?php echo $fetch_blogs[$i]['blog_image'];?>" class="img-fluid" alt=""></div>
                                                        </div>
                                                        <div class="pbmit-meta-wraper">
                                                            <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                                                <div class="pbmit-meta-date">
																<span class="pbmit-post-date">
																	<i class="pbmit-base-icon-calendar-3"></i><?php echo $fetch_blogs[$i]['publish_date'];?>
																</span>
                                                                </div>
                                                            </div>
                                                            <div class="pbmit-meta-author pbmit-meta-line">
															<span class="pbmit-post-author">
																<i class="pbmit-base-icon-user-3"></i>
																<span>By</span>admin
															</span>
                                                            </div>
                                                            <div class="pbmit-content-wrapper">
                                                                <h3 class="pbmit-post-title">
                                                                    <a href="Blog-Details?blog_id=<?php echo $fetch_blogs[$i]['blog_id'];?>"><?php echo $fetch_blogs[$i]['blog_title'];?></a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <?php
                                    }
                                    ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Blog End -->

		</div>
		<!-- page content End -->

		<!-- footer -->
        <?php include ('includes/footer.php');?>
		<!-- footer End -->

	</div>
	<!-- page wrapper End -->

	<!-- Scroll To Top -->
	<div class="pbmit-progress-wrap">
		<svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
		</svg>	
	</div>
	<!-- Scroll To Top End -->
	
	<!-- JS
		============================================ -->
    <?php include ('includes/js.php');?>

</body>

</html>