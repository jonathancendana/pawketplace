@extends('website.layout')

@section('content')
	<div class="home">
		<div class="pad-home">
			<div class="abs">
				<img class="img1" src="{{ asset('assets/img/bg-home.png') }}" alt="" title="">
				<img class="img2" src="{{ asset('assets/img/bg-home2.png') }}" alt="" title="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xl-5">
						<div class="t1">Your partner in pet health – expert care at your fingertips.</div>
						<div class="bdy">
							<p>Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc</p>
						</div>
						<ul class="l-button left">
							<li>
								<a href="#">
									<button type="button" class="hvr-button">Book an appointment</button>
								</a>
							</li>
							<li>
								<a href="#">
									<button type="button" class="hvr-button white">CTA button 2</button>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="pad-info">
			<div class="container">
				<div class="t1">Is your pet feeling unwell?</div>
				<div class="row">
					<div class="col-md-4">
						<div class="item">
							<div class="img">
								<img src="{{ asset('assets/img/appointment.svg') }}" alt="" title="">
							</div>
							<div class="nm">Book an appointment</div>
							<div class="desc">
								<p>Description goes here, description goes here, description goes here etc</p>
							</div>
							<ul class="l-button">
								<li>
									<a href="#">
										<button type="button" class="hvr-button white">Book now</button>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<div class="img">
								<img src="{{ asset('assets/img/near.svg') }}" alt="" title="">
							</div>
							<div class="nm">Book a Vet near you</div>
							<div class="desc">
								<p>Description goes here, description goes here, description goes here etc</p>
							</div>
							<ul class="l-button">
								<li>
									<a href="#">
										<button type="button" class="hvr-button white">View all clinics</button>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<div class="img">
								<img src="{{ asset('assets/img/checker.svg') }}" alt="" title="">
							</div>
							<div class="nm">Symptom checker tool</div>
							<div class="desc">
								<p>Description goes here, description goes here, description goes here etc</p>
							</div>
							<ul class="l-button">
								<li>
									<a href="#">
										<button type="button" class="hvr-button white">Evaluate now</button>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pad-plan">
			<div class="abs">
				<img src="{{ asset('assets/img/bg-plan.png') }}" alt="" title="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-6 col-xl-5 offset-xl-7">
						<div class="t1">
							<div>Plan and track your pet’s</div>
							<div>expenses with ease</div>
						</div>
						<div class="bdy">
							<p>Get a clear view of pet ownership costs, from initial expenses to daily care. Our tools keep you informed, whether you’re welcoming a new pet or managing your current one.</p>
						</div>
						<ul class="l-button left">
							<li>
								<a href="#">
									<button type="button" class="hvr-button white">Calculate costs</button>
								</a>
							</li>
							<li>
								<a href="#">
									<button type="button" class="hvr-button white">Track pet expenses</button>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="pad-slider">
			<div class="container">
				<div class="slider-home">
					<div class="item">
						<div class="row">
							<div class="col-md-7 col-lg-8 my-auto px-0">
								<div class="img">
									<img src="{{ asset('assets/img/buddy-bites.jpg') }}" alt="" title="">
								</div>
							</div>
							<div class="col-md-5 col-lg-4 my-auto">
								<div class="pad">
									<div class="t1">Loved by fussy eaters</div>
									<div class="bdy">
										<p>Get premium, healthy & nutrient-rich dog food delivered to your door every month. Loved by fussy eaters and great for dogs with allergies.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-7 col-lg-8 my-auto px-0">
								<div class="img">
									<img src="{{ asset('assets/img/buddy-bites.jpg') }}" alt="" title="">
								</div>
							</div>
							<div class="col-md-5 col-lg-4 my-auto">
								<div class="pad">
									<div class="t1">Loved by fussy eaters</div>
									<div class="bdy">
										<p>Get premium, healthy & nutrient-rich dog food delivered to your door every month. Loved by fussy eaters and great for dogs with allergies.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-7 col-lg-8 my-auto px-0">
								<div class="img">
									<img src="{{ asset('assets/img/buddy-bites.jpg') }}" alt="" title="">
								</div>
							</div>
							<div class="col-md-5 col-lg-4 my-auto">
								<div class="pad">
									<div class="t1">Loved by fussy eaters</div>
									<div class="bdy">
										<p>Get premium, healthy & nutrient-rich dog food delivered to your door every month. Loved by fussy eaters and great for dogs with allergies.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pad-about">
			<div class="abs">
				<img src="{{ asset('assets/img/bg-about.png') }}" alt="" title="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="t1">About PawketPlace</div>
						<div class="bdy">
							<p class="mb10">Description goes here, description goes here, description goes here, description goes here, description goes here.</p>
							<p>Description goes here, description goes here, description goes here etc.</p>
						</div>
						<ul class="l-button left">
							<li>
								<a href="#">
									<button type="button" class="hvr-button white">Find out more</button>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="pad-faq" style="background: #F7F7F7;">
			<div class="container">
				<div class="t1">Frequently asked questions</div>
				<div class="row justify-content-center">
					<div class="col-md-10 col-lg-8">
						<div class="accordion">
							<div class="item">
								<div class="nm">
									<button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq1" aria-expanded="false" aria-controls="faq1">Question 1 goes here, description etc etc etc?</button>
								</div>
								<div id="faq1" class="accordion-collapse collapse">
									<div class="body">
										<p>Answer for question 1 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="nm">
									<button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq2" aria-expanded="false" aria-controls="faq2">Question 2 goes here, description etc etc etc?</button>
								</div>
								<div id="faq2" class="accordion-collapse collapse">
									<div class="body">
										<p>Answer for question 2 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="nm">
									<button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq3" aria-expanded="false" aria-controls="faq3">Question 3 goes here, description etc etc etc?</button>
								</div>
								<div id="faq3" class="accordion-collapse collapse">
									<div class="body">
										<p>Answer for question 3 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="nm">
									<button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq4" aria-expanded="false" aria-controls="faq4">Question 4 goes here, description etc etc etc?</button>
								</div>
								<div id="faq4" class="accordion-collapse collapse">
									<div class="body">
										<p>Answer for question 4 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="nm">
									<button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq5" aria-expanded="false" aria-controls="faq5">Question 5 goes here, description etc etc etc?</button>
								</div>
								<div id="faq5" class="accordion-collapse collapse">
									<div class="body">
										<p>Answer for question 5 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/slick/slick.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.hdr-global').show();
		
		$('.slider-home').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			centerMode: false,
			arrows: false,
			infinite: true,
			autoplay: false,
			autoplaySpeed: 2000,
		});
	});
</script>
@endsection