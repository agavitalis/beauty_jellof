@extends('layouts.app')

@section('styles')
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('app_assets/plugins/revolution/revolution/css/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('app_assets/plugins/revolution/revolution/css/settings.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ secure_asset('app_assets/plugins/revolution/revolution/css/navigation.css') }}">
    <!-- Revolution Navigation Style -->
@endsection

@section('header')
	@include("partials/app.app_header")
@endsection



@section('content')
<div class="page-content">
	<!-- Main Slider -->
	@include("partials/app.app_slider")
	<!-- Main Slider -->
	<!-- Map And Form -->
	<div class="section-full bg-white content-inner-2" style="background-image:url({{ secure_asset('app_assets/images/background/bg7.jpg') }}); background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 m-b30 align-self-center">
					<div class="dis-tbl-cell  m-b30">							
						<h2 class="m-t0 m-b10">Why Our Clients Choose Us </h2>
						<h6 class="fw7 m-b15">We are the leading beauty salon in LA providing high-quality hairdressing, makeup, and skin care services to everyone.</h6>
						<ul class="list-angle-right">
							<li>fully focused on accessibility</li>
							<li>Based on modern design concept</li>
							<li>impressive and attractive design with graceful features</li>
							<li>More creative with smoothness and flexibility </li>
							<li>Unlimited power and customization possibilities</li>
						</ul>
						<a href="#" class="site-button m-r15">About US <i class="ti-arrow-right m-l10"></i></a>
						<a href="#" class="site-button-secondry ">Read More <i class="ti-arrow-right m-l10"></i></a>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1">
					<div class="img-collage">
						<div class="coll-1"><img src="{{ secure_asset('app_assets/images/collage/pic1.jpg') }}" alt=""/></div>
						<div class="coll-2"><img src="{{ secure_asset('app_assets/images/collage/pic2.jpg') }}" alt=""/></div>
						<div class="coll-3"><img src="{{ secure_asset('app_assets/images/collage/pic3.jpg') }}" alt=""/></div>
						<div class="coll-4"><img src="{{ secure_asset('app_assets/images/collage/pic4.jpg') }}" alt=""/></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Map And Form END -->
	<!-- Services -->
	<div class="section-full about-section bg-white">
		<div class="container-fluid">
			<div class="row equal-wraper">
				<div class="bg-primary col-xl-3 p-a0 col-md-6 col-lg-3 col-xs-12 equal-col dis-tbl">
					<div class="p-a30 text-white dis-tbl-cell wow fadeIn" data-wow-delay="0.3s">
						<p class="font-weight-600 m-b10">Hair Salon</p>
						<h4 class="font-weight-700">BeautyJolly Hair Salon Creating Beauty </h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text.</p>
						<a href="#" class="site-button white outline outline-2">Read More</a>
					</div> 
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 p-a0 col-xs-12 equal-col">
					<img src="{{ secure_asset('app_assets/images/about/img1.jpg') }}" class="abt-img img-cover equal-col" alt=""/>
				</div>
				<div class="bg-primary col-xl-3 p-a0 col-md-6 col-lg-3 col-xs-12 equal-col dis-tbl">
					<div class="p-a30 text-white dis-tbl-cell wow fadeIn" data-wow-delay="0.6s">
						<p class="font-weight-600 m-b10">Hair Salon</p>
						<h4 class="font-weight-700">All Hair Services for Your Pleasure </h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text.</p>
						<a href="#" class="site-button white">Read More</a>
					</div> 
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 p-a0 col-xs-12 equal-col">
					<img src="{{ secure_asset('app_assets/images/about/img2.jpg') }}" class="abt-img img-cover equal-col" alt=""/>
				</div>
			</div>
		</div>
	</div>
	<!-- Services END -->
	<!-- About Us -->
	<div class="section-full content-inner-2 bg-white hair-services">
		<div class="container">
			<div class="section-head text-black text-center">
				<h2 class="text-primary m-b10">Our Services</h2>
				<div class="dlab-separator-outer m-b0">
					<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
				</div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
					<div class="icon-bx-wraper center p-a30">
						<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-barbershop"></i></a> </div>
						<div class="icon-content">
							<h5 class="dez-tilte"><a href="#">Haircut & Styling</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
					<div class="icon-bx-wraper center p-a30">
						<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-makeup"></i></a> </div>
						<div class="icon-content">
							<h5 class="dez-tilte"><a href="#">Makeup</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
					<div class="icon-bx-wraper center p-a30">
						<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-makeup-1"></i></a> </div>
						<div class="icon-content">
							<h5 class="dez-tilte"><a href="#">Manicure & Pedicure</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
					<div class="icon-bx-wraper center p-a30">
						<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-woman-1"></i></a> </div>
						<div class="icon-content">
							<h5 class="dez-tilte"><a href="#">Skin Care</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
					<div class="icon-bx-wraper center p-a30">
						<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-woman"></i></a> </div>
						<div class="icon-content">
							<h5 class="dez-tilte"><a href="#">Body Treatment</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
					<div class="icon-bx-wraper center p-a30">
						<div class="icon-lg radius m-b20"> <a href="#" class="icon-cell"><i class="flaticon-candle-1"></i></a> </div>
						<div class="icon-content">
							<h5 class="dez-tilte"><a href="#">Massage</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Us -->
	<!-- Our Services -->
	<div class="section-full content-inner bg-blue-light" style="background-image:url({{ secure_asset('app_assets/images/background/bg5.jpg') }}); background-position: bottom; background-size: cover; background-repeat: no-repeat;">
		<div class="container">
			<div class="section-head text-black text-center">
				<h2 class="text-primary m-b10">Our Pricing</h2>
				<div class="dlab-separator-outer m-b0">
					<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
				</div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="price-tbl d-flex">
						<div class="flex-grow-1">
							<h4 class="text-primary">Deep Tissue Massage</h4>
							<p>60 – 100 Minute Session </p>
						</div>
						<div class="price-val align-self-center">
							<h3 class="text-secondry">$40.00</h3>
						</div>
					</div>
					<div class="price-tbl d-flex">
						<div class="flex-grow-1">
							<h4 class="text-primary">Swedish Massage</h4>
							<p>30 – 40 Minute Session  </p>
						</div>
						<div class="price-val align-self-center">
							<h3 class="text-secondry">$35.00</h3>
						</div>
					</div>
					<div class="price-tbl d-flex">
						<div class="flex-grow-1">
							<h4 class="text-primary">Deep Tissue Massage</h4>
							<p>60 – 100 Minute Session </p>
						</div>
						<div class="price-val align-self-center">
							<h3 class="text-secondry">$40.00</h3>
						</div>
					</div>
					<div class="price-tbl d-flex">
						<div class="flex-grow-1">
							<h4 class="text-primary">Therapeutic Massage</h4>
							<p>40 – 60 Minute Session</p>
						</div>
						<div class="price-val align-self-center">
							<h3 class="text-secondry">$30.00</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="price-tbl d-flex">
						<div class="flex-grow-1">
							<h4 class="text-primary">Hot Stone Massage</h4>
							<p>50 – 60 Minute Session </p>
						</div>
						<div class="price-val align-self-center">
							<h3 class="text-secondry">$34.00</h3>
						</div>
					</div>
					<div class="price-tbl d-flex">
						<div class="flex-grow-1">
							<h4 class="text-primary">Couples Massage</h4>
							<p>20 – 30 Minute Session  </p>
						</div>
						<div class="price-val  align-self-center">
							<h3 class="text-secondry">$42.00</h3>
						</div>
					</div>
					<div class="price-tbl d-flex">
						<div class="flex-grow-1">
							<h4 class="text-primary">Facial</h4>
							<p>15 – 30 Minute Session </p>
						</div>
						<div class="price-val align-self-center">
							<h3 class="text-secondry">$38.00</h3>
						</div>
					</div>
					<div class="price-tbl d-flex">
						<div class="flex-grow-1">
							<h4 class="text-primary">Body Waxing</h4>
							<p>80 – 100 Minute Session </p>
						</div>
						<div class="price-val align-self-center">
							<h3 class="text-secondry">$65.00</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Our Services -->
	<!-- Portfolio -->
	<div class="section-full content-inner-1 bg-white portfolio-box">
		<div class="container-fluid">
			<div class="section-head text-black text-center m-b20">
				<h2 class="text-primary m-b10">Our Portfolio</h2>
				<div class="dlab-separator-outer m-b0">
					<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
				</div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
			</div>
			<div class="site-filters style1 clearfix center">
				<ul class="filters" data-toggle="buttons">
					<li data-filter="" class="btn active"><input type="radio"><a href="#"><span>All</span></a></li>
					<li data-filter="web" class="btn"><input type="radio"><a href="#"><span>Haircuts</span></a></li>
					<li data-filter="advertising" class="btn"><input type="radio"><a href="#"><span>Coloring</span></a></li>
					<li data-filter="branding" class="btn"><input type="radio"><a href="#"><span>Makeup</span></a></li>
					<li data-filter="design" class="btn"><input type="radio"><a href="#"><span>Massage</span></a></li>
					<li data-filter="photography" class="btn"><input type="radio"><a href="#"><span>Highlights</span></a></li>
				</ul>
			</div>
			<div class="clearfix">
				<ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery lightgallery sp10">
					<li class="web design card-container col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="dlab-box dlab-gallery-box">
							<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
								<a href="javascript:void(0);"> <img src="{{ secure_asset('app_assets/images/gallery/pic1.jpg') }}"  alt=""> </a>
								<div class="overlay-bx">
									<div class="overlay-icon"> 
										<span data-exthumbimage="{{ secure_asset('app_assets/images/gallery/thumb/pic1.jpg') }}" data-src="{{ secure_asset('app_assets/images/gallery/pic1.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
											<i class="ti-fullscreen"></i> 
										</span>	
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="dlab-box dlab-gallery-box">
							<div class="dlab-media dlab-img-overlay1 dlab-img-effect dlab-img-effect "> 
							<a href="javascript:void(0);"> <img src="{{ secure_asset('app_assets/images/gallery/pic2.jpg') }}"  alt=""> </a>
								<div class="overlay-bx">
									<div class="overlay-icon"> 
										<span data-exthumbimage="{{ secure_asset('app_assets/images/gallery/thumb/pic2.jpg') }}" data-src="{{ secure_asset('app_assets/images/gallery/pic2.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
											<i class="ti-fullscreen"></i> 
										</span>	
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li class="branding design photography card-container col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="dlab-box dlab-gallery-box">
							<div class="dlab-media dlab-img-overlay1 dlab-img-effect"> 
							<a href="javascript:void(0);"> <img src="{{ secure_asset('app_assets/images/gallery/pic3.jpg') }}"  alt=""> </a>
								<div class="overlay-bx">
									<div class="overlay-icon"> 
										<span data-exthumbimage="{{ secure_asset('app_assets/images/gallery/thumb/pic3.jpg') }}" data-src="{{ secure_asset('app_assets/images/gallery/pic3.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
											<i class="ti-fullscreen"></i> 
										</span>	
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="web design card-container col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="dlab-box dlab-gallery-box">
							<div class="dlab-media dlab-img-overlay1 dlab-img-effect"> 
							<a href="javascript:void(0);"> <img src="{{ secure_asset('app_assets/images/gallery/pic4.jpg') }}"  alt=""> </a>
								<div class="overlay-bx">
									<div class="overlay-icon"> 
										<span data-exthumbimage="{{ secure_asset('app_assets/images/gallery/thumb/pic4.jpg') }}" data-src="{{ secure_asset('app_assets/images/gallery/pic4.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
											<i class="ti-fullscreen"></i> 
										</span>	
									</div>
								</div>
							</div>
						</div>
					</li>
						<li class="web branding card-container col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="dlab-box dlab-gallery-box">
							<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
							<a href="javascript:void(0);"> <img src="{{ secure_asset('app_assets/images/gallery/pic5.jpg') }}"  alt=""> </a>
								<div class="overlay-bx">
									<div class="overlay-icon"> 
										<span data-exthumbimage="{{ secure_asset('app_assets/images/gallery/thumb/pic5.jpg') }}" data-src="{{ secure_asset('app_assets/images/gallery/pic5.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
											<i class="ti-fullscreen"></i> 
										</span>	
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="advertising design photography card-container col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="dlab-box dlab-gallery-box">
							<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
							<a href="javascript:void(0);"> <img src="{{ secure_asset('app_assets/images/gallery/pic6.jpg') }}"  alt=""> </a>
								<div class="overlay-bx">
									<div class="overlay-icon"> 
										<span data-exthumbimage="{{ secure_asset('app_assets/images/gallery/thumb/pic6.jpg') }}" data-src="{{ secure_asset('app_assets/images/gallery/pic6.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
											<i class="ti-fullscreen"></i> 
										</span>	
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="web branding card-container col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="dlab-box dlab-gallery-box">
							<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
								<a href="javascript:void(0);"> <img src="{{ secure_asset('app_assets/images/gallery/pic7.jpg') }}"  alt=""> </a>
								<div class="overlay-bx">
									<div class="overlay-icon"> 
										<span data-exthumbimage="{{ secure_asset('app_assets/images/gallery/thumb/pic7.jpg') }}" data-src="{{ secure_asset('app_assets/images/gallery/pic7.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
											<i class="ti-fullscreen"></i> 
										</span>	
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="advertising design photography card-container col-lg-3 col-md-4 col-sm-6 col-6">
						<div class="dlab-box dlab-gallery-box">
							<div class="dlab-media dlab-img-overlay1 dlab-img-effect dlab-img-effect "> 
							<a href="javascript:void(0);"> <img src="{{ secure_asset('app_assets/images/gallery/pic8.jpg') }}"  alt=""> </a>
								<div class="overlay-bx">
									<div class="overlay-icon"> 
										<span data-exthumbimage="{{ secure_asset('app_assets/images/gallery/thumb/pic8.jpg') }}" data-src="{{ secure_asset('app_assets/images/gallery/pic8.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
											<i class="ti-fullscreen"></i> 
										</span>	
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Portfolio End -->
	<!-- Our Professional Team -->
	<div class="section-full bg-white content-inner">
		<div class="container">
			<div class="section-head text-black text-center">
				<h2 class="text-primary m-b10">Our Professional Team</h2>
				<div class="dlab-separator-outer m-b0">
					<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
				</div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
					<div class="service-box text-center">
						<div class="service-images m-b15">
							<img src="{{ secure_asset('app_assets/image/our-team/pic1.jpg') }}" alt=""/>
						</div>
						<div class="service-content">
							<h6 class="text-uppercase"><a href="#" class="text-primary">Ann Smith</a></h6>
							<p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
					<div class="service-box text-center">
						<div class="service-images m-b15">
							<img src="{{ secure_asset('app_assets/image/our-team/pic2.jpg') }}" alt=""/>
						</div>
						<div class="service-content">
							<h6 class="text-uppercase"><a href="#" class="text-primary">Mary Lucas</a></h6>
							<p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
					<div class="service-box text-center">
						<div class="service-images m-b15">
							<img src="{{ secure_asset('app_assets/image/our-team/pic3.jpg') }}" alt=""/>
						</div>
						<div class="service-content">
							<h6 class="text-uppercase"><a href="#" class="text-primary">Ann Smith</a></h6>
							<p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
					<div class="service-box text-center">
						<div class="service-images m-b15">
							<img src="{{ secure_asset('app_assets/image/our-team/pic4.jpg') }}" alt=""/>
						</div>
						<div class="service-content">
							<h6 class="text-uppercase"><a href="#" class="text-primary">Candice Marshall </a></h6>
							<p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Our Professional Team -->
	
	<!-- Testimonials Of Our Clients -->
	<div class="section-full content-inner-2" style="background-image:url({{ secure_asset('app_assets/image/background/bg4.jpg') }}); background-position: bottom; background-size:cover;">
		<div class="container">
			<div class="section-head text-black text-center">
				<h2 class="text-primary m-b10">Testimonials Of Our Clients</h2>
				<div class="dlab-separator-outer m-b0">
					<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
				</div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
			</div>
			<div class="testimonial-two-dots owl-carousel owl-theme owl-dots-primary-full owl-btn-center-lr owl-btn-3">
				<div class="item p-a5">
					<div class="testimonial-9">
						<div class="testimonial-pic radius style1"><img src="{{ secure_asset('app_assets/image/testimonials/pic1.jpg') }}" width="100" height="100" alt=""></div>
						<div class="testimonial-text">
							<p>BeautyJolly was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
						</div>
						<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
					</div>
				</div>
				<div class="item p-a5">
					<div class="testimonial-9">
						<div class="testimonial-pic radius style1"><img src="{{ secure_asset('app_assets/image/testimonials/pic2.jpg') }}" width="100" height="100" alt=""></div>
						<div class="testimonial-text">
							<p>BeautyJolly was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
						</div>
						<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
					</div>
				</div>
				<div class="item p-a5">
					<div class="testimonial-9">
						<div class="testimonial-pic radius style1"><img src="{{ secure_asset('app_assets/image/testimonials/pic3.jpg') }}" width="100" height="100" alt=""></div>
						<div class="testimonial-text">
							<p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
						</div>
						<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
					</div>
				</div>
				<div class="item p-a5">
					<div class="testimonial-9">
						<div class="testimonial-pic radius style1"><img src="{{ secure_asset('app_assets/image/testimonials/pic1.jpg') }}" width="100" height="100" alt=""></div>
						<div class="testimonial-text">
							<p>BeautyJolly was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
						</div>
						<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
					</div>
				</div>
				<div class="item p-a5">
					<div class="testimonial-9">
						<div class="testimonial-pic radius style1"><img src="{{ secure_asset('app_assets/image/testimonials/pic2.jpg') }}" width="100" height="100" alt=""></div>
						<div class="testimonial-text">
							<p>BeautyJolly was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
						</div>
						<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
					</div>
				</div>
				<div class="item p-a5">
					<div class="testimonial-9">
						<div class="testimonial-pic radius style1"><img src="{{ secure_asset('app_assets/image/testimonials/pic3.jpg') }}" width="100" height="100" alt=""></div>
						<div class="testimonial-text">
							<p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
						</div>
						<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
					</div>
				</div>
				<div class="item p-a5">
					<div class="testimonial-9">
						<div class="testimonial-pic radius style1"><img src="{{ secure_asset('app_assets/image/testimonials/pic1.jpg') }}" width="100" height="100" alt=""></div>
						<div class="testimonial-text">
							<p>BeautyJolly was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
						</div>
						<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
					</div>
				</div>
				<div class="item p-a5">
					<div class="testimonial-9">
						<div class="testimonial-pic radius style1"><img src="{{ secure_asset('app_assets/image/testimonials/pic2.jpg') }}" width="100" height="100" alt=""></div>
						<div class="testimonial-text">
							<p>BeautyJolly was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
						</div>
						<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
					</div>
				</div>
				<div class="item p-a5">
					<div class="testimonial-9">
						<div class="testimonial-pic radius style1"><img src="{{ secure_asset('app_assets/image/testimonials/pic3.jpg') }}" width="100" height="100" alt=""></div>
						<div class="testimonial-text">
							<p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
						</div>
						<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonials Of Our Clients -->
	
	<!-- contact area END -->
</div>	
@endsection


@section('footer')
	@include("partials/app.app_footer")
@endsection

@section('scripts')
<!-- JavaScript  files ========================================= -->
<script src="{{ secure_asset('app_assets/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ secure_asset('app_assets/plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ secure_asset('app_assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ secure_asset('app_assets/plugins/wow/wow.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ secure_asset('app_assets/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ secure_asset('app_assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ secure_asset('app_assets/plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
<script src="{{ secure_asset('app_assets/plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ secure_asset('app_assets/plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ secure_asset('app_assets/plugins/imagesloaded/imagesloaded.js') }}"></script><!-- MASONRY  -->
<script src="{{ secure_asset('app_assets/plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY  -->
<script src="{{ secure_asset('app_assets/plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY  -->
<script src="{{ secure_asset('app_assets/plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL  SLIDER  -->
<script src="{{ secure_asset('app_assets/plugins/rangeslider/rangeslider.js') }}" ></script><!-- Rangeslider -->
<script src="{{ secure_asset('app_assets/plugins/lightgallery/js/lightgallery-all.js') }}"></script><!-- LIGHT GALLERY -->
<script src="{{ secure_asset('app_assets/js/dz.carousel.min.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ secure_asset('app_assets/plugins/loading/anime.js') }}"></script><!-- LOADING JS -->
<script src="{{ secure_asset('app_assets/plugins/loading/anime-app.js') }}"></script><!-- LOADING JS -->
<script src="{{ secure_asset('app_assets/js/custom.min.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ secure_asset('app_assets/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
<!-- REVOLUTION JS FILES -->
<script src="{{ secure_asset('app_assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ secure_asset('app_assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ secure_asset('app_assets/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ secure_asset('app_assets/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ secure_asset('app_assets/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ secure_asset('app_assets/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ secure_asset('app_assets/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ secure_asset('app_assets/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ secure_asset('app_assets/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ secure_asset('app_assets/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script  src="{{ secure_asset('app_assets/js/rev.slider.js') }}"></script>
<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_6();
});	/*ready*/
</script>

@endsection