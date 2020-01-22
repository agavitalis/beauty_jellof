@extends('layouts.app')

@section('styles')
	
	<!-- Bookings Css -->
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('app_assets/plugins/smartwizard/css/smart_wizard.css') }}">
	<link rel="stylesheet" href="{{ asset('app_assets/plugins/datepicker/css/bootstrap-datetimepicker.min.css') }}"/>
	<!-- Bookings Style -->
@endsection


@section('header')
	@include("partials/app.app_header")
@endsection

@section('content')
	<!-- Content -->
	<div class="page-content bg-white">
		<!-- inner page banner -->
		<div class="dlab-bnr-inr overlay-primary" style="background-image:url({{ asset('app_assets/images/banner/bnr1.jpg') }});">
			<div class="container">
				<div class="dlab-bnr-inr-entry">
					<h1 class="text-white">Booking</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Booking</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
				</div>
			</div>
		</div>
		<!-- inner page banner END -->
		<div class="content-block">
			<!-- About Us -->
			<div class="section-full content-inner-2">
				<div class="container">
					<div id="smartwizard">
						<ul class="d-flex">
							<li class="flex-fill"><a href="#time"><span><strong>1</strong><i
											class="fa fa-check"></i></span> Time</a></li>
							<li class="flex-fill"><a href="#service"><span><strong>2</strong><i
											class="fa fa-check"></i></span> Service</a></li>
							<li class="flex-fill"><a href="#details"><span><strong>3</strong><i
											class="fa fa-check"></i></span> Details</a></li>
							<li class="flex-fill"><a href="#payment"><span><strong>4</strong><i
											class="fa fa-check"></i></span> Payment</a></li>
							<li class="flex-fill"><a href="#done"><span><strong>5</strong><i
											class="fa fa-check"></i></span> Done</a></li>
						</ul>

						<div>
							<div id="time" class="wizard-box">
								<h6 class="m-b30">Please select service:</h6>
								<form class="row">
									<div class="col-lg-4 col-md-3 col-sm-3 form-group">
										<label>Category</label>
										<select>
											<option>Select category</option>
											<option>Cosmetic Dentistry</option>
											<option>Invisalign</option>
											<option>Orthodontics</option>
											<option>Dentures</option>
										</select>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 form-group">
										<label>Service</label>
										<select>
											<option>Select service</option>
											<option>Crown and Bridge</option>
											<option>Teeth Whitening</option>
											<option>Veneers</option>
											<option>Invisalign (invisable braces)</option>
											<option>Orthodontics (braces)</option>
											<option>Wisdom tooth Removal</option>
											<option>Root Canal Treatment</option>
											<option>Dentures</option>
										</select>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 form-group">
										<label>Employee</label>
										<select>
											<option>Any</option>
											<option>Nick Knight</option>
											<option>Jane Howard</option>
											<option>Ashley Stamp</option>
											<option>Bradley Tannen</option>
											<option>Wayne Turner</option>
											<option>Emily Taylor</option>
											<option>Hugh Canberg</option>
											<option>Jim Gonzalez</option>
											<option>Nancy Stinson</option>
											<option>Marry Murphy</option>
										</select>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 form-group">
										<label>I'm available on or after</label>
										<input name="dzOther[date]" class="form-control" placeholder="Select Date"
											id="datetimepicker4" type="text">
									</div>
									<div class="col-lg-2 col-md-6 col-sm-6 form-group">
										<label>Start from</label>
										<select>
											<option>8:00 am</option>
											<option>9:00 am</option>
											<option>10:00 am</option>
											<option>11:00 am</option>
											<option>12:00 pm</option>
											<option>1:00 pm</option>
											<option>2:00 pm</option>
											<option>3:00 pm</option>
											<option>4:00 pm</option>
											<option>5:00 pm</option>
											<option>6:00 pm</option>
										</select>
									</div>
									<div class="col-lg-2 col-md-6 col-sm-6 form-group">
										<label>Finish by</label>
										<select>
											<option>8:00 am</option>
											<option>9:00 am</option>
											<option>10:00 am</option>
											<option>11:00 am</option>
											<option>12:00 pm</option>
											<option>1:00 pm</option>
											<option>2:00 pm</option>
											<option>3:00 pm</option>
											<option>4:00 pm</option>
											<option>5:00 pm</option>
											<option>6:00 pm</option>
										</select>
									</div>
								</form>
							</div>
							<div id="service" class="">
								<h6 class="m-b5">Booking Time</h6>
								<p class="m-b30">Below you can find list of available time slots for Crown and
									Bridge by Nick Knight. Click on a time slot to proceed with booking.</p>
								<div class="book-time row">
									<div class="btn-group d-flex flex-column m-b10 col-lg-2 col-md-4 col-sm-6 col-6"
										data-toggle="buttons">
										<label class="btn active active-time">
											<input type="checkbox" checked=""> Fri Sep 14
										</label>
										<label class="btn"> 9:00 am
											<input type="checkbox">
										</label>
										<label class="btn"> 10:00 am
											<input type="checkbox">
										</label>
										<label class="btn">
											<input type="checkbox"> 11:00 am
										</label>
										<label class="btn"> 12:00 am
											<input type="checkbox">
										</label>
										<label class="btn active active-time"> Fri Sep 16
											<input type="checkbox">
										</label>
										<label class="btn active">
											<input type="checkbox"> 2:00 am
										</label>
										<label class="btn"> 3:00 am
											<input type="checkbox">
										</label>
										<label class="btn"> 4:00 am
											<input type="checkbox">
										</label>
									</div>
									<div class="btn-group d-flex flex-column m-b10 col-lg-2 col-md-4 col-sm-6 col-6"
										data-toggle="buttons">

										<label class="btn"> 9:00 am
											<input type="checkbox">
										</label>
										<label class="btn active"> 10:00 am
											<input type="checkbox">
										</label>
										<label class="btn">
											<input type="checkbox"> 11:00 am
										</label>
										<label class="btn"> 12:00 am
											<input type="checkbox">
										</label>
										<label class="btn active active-time">
											<input type="checkbox" checked=""> Fri Sep 17
										</label>
										<label class="btn">
											<input type="checkbox"> 2:00 am
										</label>
										<label class="btn">
											<input type="checkbox"> 2:00 am
										</label>
										<label class="btn"> 3:00 am
											<input type="checkbox">
										</label>
										<label class="btn"> 4:00 am
											<input type="checkbox">
										</label>
									</div>
									<div class="btn-group d-flex flex-column m-b10 col-lg-2 col-md-4 col-sm-6 col-6"
										data-toggle="buttons">
										<label class="btn"> 9:00 am
											<input type="checkbox">
										</label>
										<label class="btn"> 10:00 am
											<input type="checkbox">
										</label>
										<label class="btn active active-time">
											<input type="checkbox" checked=""> Fri Sep 14
										</label>
										<label class="btn">
											<input type="checkbox"> 11:00 am
										</label>
										<label class="btn active"> 12:00 am
											<input type="checkbox">
										</label>
										<label class="btn">
											<input type="checkbox"> 2:00 am
										</label>
										<label class="btn"> 3:00 am
											<input type="checkbox">
										</label>
										<label class="btn"> 4:00 am
											<input type="checkbox">
										</label>
										<label class="btn active active-time"> Fri Sep 16
											<input type="checkbox">
										</label>
									</div>
									<div class="btn-group d-flex flex-column m-b10 col-lg-2 col-md-4 col-sm-6 col-6"
										data-toggle="buttons">

										<label class="btn"> 9:00 am
											<input type="checkbox">
										</label>
										<label class="btn"> 10:00 am
											<input type="checkbox">
										</label>
										<label class="btn active active-time">
											<input type="checkbox" checked=""> Fri Sep 14
										</label>
										<label class="btn">
											<input type="checkbox"> 11:00 am
										</label>
										<label class="btn"> 12:00 am
											<input type="checkbox">
										</label>
										<label class="btn">
											<input type="checkbox"> 2:00 am
										</label>
										<label class="btn"> 3:00 am
											<input type="checkbox">
										</label>
										<label class="btn active active-time"> Fri Sep 16
											<input type="checkbox">
										</label>
										<label class="btn"> 4:00 am
											<input type="checkbox">
										</label>
									</div>
									<div class="btn-group d-flex flex-column m-b10 col-lg-2 col-md-4 col-sm-6 col-6"
										data-toggle="buttons">
										<label class="btn active"> 9:00 am
											<input type="checkbox">
										</label>
										<label class="btn"> 10:00 am
											<input type="checkbox">
										</label>
										<label class="btn active active-time">
											<input type="checkbox" checked=""> Fri Sep 14
										</label>
										<label class="btn">
											<input type="checkbox"> 11:00 am
										</label>
										<label class="btn"> 12:00 am
											<input type="checkbox">
										</label>
										<label class="btn">
											<input type="checkbox"> 2:00 am
										</label>
										<label class="btn active"> 3:00 am
											<input type="checkbox">
										</label>
										<label class="btn active active-time"> Fri Sep 16
											<input type="checkbox">
										</label>
										<label class="btn"> 4:00 am
											<input type="checkbox">
										</label>
									</div>
									<div class="btn-group d-flex flex-column m-b10 col-lg-2 col-md-4 col-sm-6 col-6"
										data-toggle="buttons">

										<label class="btn"> 9:00 am
											<input type="checkbox">
										</label>
										<label class="btn"> 10:00 am
											<input type="checkbox">
										</label>
										<label class="btn active active-time">
											<input type="checkbox" checked=""> Fri Sep 14
										</label>
										<label class="btn">
											<input type="checkbox"> 11:00 am
										</label>
										<label class="btn"> 12:00 am
											<input type="checkbox">
										</label>
										<label class="btn">
											<input type="checkbox"> 2:00 am
										</label>
										<label class="btn"> 3:00 am
											<input type="checkbox">
										</label>
										<label class="btn active active-time"> Fri Sep 16
											<input type="checkbox">
										</label>
										<label class="btn"> 4:00 am
											<input type="checkbox">
										</label>
									</div>
								</div>

							</div>
							<div id="details" class="">
								<h6 class="m-b5">Details</h6>
								<p class="m-b0">You selected to book Crown and Bridge by Nick Knight at <b
										class="text-black">3:00</b> pm on <b class="text-black">September 19,
										2018.</b> Price for the service is <b class="text-black">$350.00</b>.</p>
								<p class="m-b30">Please provide your details in the form below to proceed with
									booking.</p>
								<form class="row">
									<div class="col-lg-4 col-md-4 form-group">
										<label>Name</label>
										<input class="form-control" placeholder="Your Name" type="text">
									</div>
									<div class="col-lg-4 col-md-4 form-group">
										<label>Phone</label>
										<input class="form-control" placeholder="Phone No." type="text">
									</div>
									<div class="col-lg-4 col-md-4 form-group">
										<label>Email</label>
										<input class="form-control" placeholder="support@email.com" type="email">
									</div>
								</form>
							</div>
							<div id="payment" class="">
								<h6>Please tell us how you would like to pay:</h6>
								<form action="https://beautyzone.dexignzone.com/action_page.php">
									<div class="custom-control custom-radio">
										<input type="radio" class="custom-control-input" id="customRadio"
											name="example1">
										<label class="custom-control-label" for="customRadio">I will pay
											locally</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" class="custom-control-input" id="customRadio1"
											name="example1">
										<label class="custom-control-label" for="customRadio1">I will pay now with
											PayPal </label>
									</div>
								</form>
							</div>
							<div id="done" class="">
								<div class="successful-box text-center">
									<div class="successful-check"><i class="ti-check"></i></div>
									<h2>Successful</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contact area END -->
	</div>
	<!-- Content END-->
@endsection

@section('footer')
	@include("partials/app.app_footer")
@endsection
    
    
@section('scripts')
<!-- JAVASCRIPT FILES ========================================= -->
	<script src="{{ asset('app_assets/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('app_assets/plugins/wow/wow.js') }}"></script><!-- WOW JS -->
    <script src="{{ asset('app_assets/plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('app_assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('app_assets/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('app_assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('app_assets/plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{ asset('app_assets/plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('app_assets/plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('app_assets/plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
    <script src="{{ asset('app_assets/plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('app_assets/plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('app_assets/plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
    <script src="{{ asset('app_assets/plugins/rangeslider/rangeslider.js') }}"></script><!-- Rangeslider -->
    <script src="{{ asset('app_assets/js/custom.min.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('app_assets/js/dz.carousel.min.js') }}"></script><!-- SORTCODE FUCTIONS  -->
    <script src="{{ asset('app_assets/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
    <script src="{{ asset('app_assets/plugins/datepicker/js/moment.js') }}"></script><!-- DATEPICKER JS -->
    <script src="{{ asset('app_assets/plugins/datepicker/js/bootstrap-datetimepicker.min.js') }}"></script><!-- DATEPICKER JS -->
    <script src="{{ asset('app_assets/plugins/smartwizard/js/jquery.smartWizard.js') }}"></script>
	<script>
    $(document).ready(function() {

        // Step show event
        $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
            //alert("You are on step "+stepNumber+" now");
            if (stepPosition === 'first') {
                $("#prev-btn").addClass('disabled');
            } else if (stepPosition === 'final') {
                $("#next-btn").addClass('disabled');
            } else {
                $("#prev-btn").removeClass('disabled');
                $("#next-btn").removeClass('disabled');
            }
        });

        // Toolbar extra buttons
        var btnFinish = $('<button></button>').text('Finish')
            .addClass('btn btn-info')
            .on('click', function() {
                alert('Finish Clicked');
            });
        var btnCancel = $('<button></button>').text('Cancel')
            .addClass('btn btn-danger')
            .on('click', function() {
                $('#smartwizard').smartWizard("reset");
            });


        // Smart Wizard
        $('#smartwizard').smartWizard({
            selected: 0,
            theme: 'default',
            transitionEffect: 'fade',
            showStepURLhash: true,
            toolbarSettings: {
                toolbarPosition: 'both',
                toolbarButtonPosition: 'end',
                toolbarExtraButtons: [btnFinish, btnCancel]
            }
        });


        // External Button Events
        $("#reset-btn").on("click", function() {
            // Reset wizard
            $('#smartwizard').smartWizard("reset");
            return true;
        });

        $("#prev-btn").on("click", function() {
            // Navigate previous
            $('#smartwizard').smartWizard("prev");
            return true;
        });

        $("#next-btn").on("click", function() {
            // Navigate next
            $('#smartwizard').smartWizard("next");
            return true;
        });

        $("#theme_selector").on("change", function() {
            // Change theme
            $('#smartwizard').smartWizard("theme", $(this).val());
            return true;
        });

        // Set selected theme on page refresh
        $("#theme_selector").change();
    });
    </script>
    <script>
    jQuery(document).ready(function() {
        $('#datetimepicker4').datetimepicker();
    });
	</script>
@endsection
</body>

</html>