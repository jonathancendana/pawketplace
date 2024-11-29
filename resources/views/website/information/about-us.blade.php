@extends('website.layout')

@section('content')
	<div class="about">
		 <div class="pad-about1">
			<div class="container">
				<div class="row">
					<div class="col-md-6  offset-md-6 offset-lg-7 col-lg-5 col-xl-4">
						<div class="t1">Modernising Pet Health and Wellness Care</div>
						<div class="bdy">
							<p>PawketPlace is a pioneering pet health and wellness concierge designed to modernise pet care and elevate the standards of the industry.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="abs">
				<img src="{{ asset('assets/img/about1.png') }}" alt="" title="">
			</div>
		</div>
		<div class="pad-about2">
			<div class="container">
				<div class="t1">Empowering Informed Decisions</div>
				<div class="row justify-content-center">
					<div class="col-md-10 col-lg-7">
						<div class="bdy">
							<p>We offer a suite of tools and services that simplify and enrich every aspect of pet ownership, helping pet parents make informed, data-driven decisions about their pets’ health and well-being.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="item">
							<div class="img">
								<img src="{{ asset('assets/img/health-records.svg') }}" alt="" title="">
							</div>
							<div class="nm">Health Records</div>
							<div class="desc">
								<p>Track and receive pet health reminders</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<div class="img">
								<img src="{{ asset('assets/img/pet-pennies.svg') }}" alt="" title="">
							</div>
							<div class="nm">Pet Pennies</div>
							<div class="desc">
								<p>Record and track your pet’s expenses</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<div class="img">
								<img src="{{ asset('assets/img/symptom-checker.svg') }}" alt="" title="">
							</div>
							<div class="nm">Symptom Checker</div>
							<div class="desc">
								<p>Identify and uncover medical issues</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pad-about3">
			<div class="abs">
				<img src="{{ asset('assets/img/about2.png') }}" alt="" title="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-5 col-xl-4">
						<div class="vector"><img src="{{ asset('assets/img/providing-cost-transparency.svg') }}" alt="" title=""></div>
						<div class="t1">Providing Cost Transparency</div>
						<div class="bdy">
							<p class="mb10">In an industry still reliant on outdated methods, we are addressing one of the most significant barriers in the pet care ecosystem: the unpredictability of healthcare costs.</p>
							<p>By making expenses more <b>transparent and predictable</b>, we empower pet owners to manage their financial responsibilities more effectively, reducing instances of pet abandonment.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pad-about4">
			<div class="container">
				<div class="row">
					<div class="col-md-7 my-auto">
						<div class="img">
							<img src="{{ asset('assets/img/about3.png') }}" alt="" title="">
						</div>
					</div>
					<div class="col-md-5 col-xl-4 my-auto">
						<div class="vector"><img src="{{ asset('assets/img/delivering-peace.svg') }}" alt="" title=""></div>
						<div class="t1">Delivering peace of mind to you</div>
						<div class="bdy">
							<p>In essence, our platform is designed to be a holistic solution for health insights, cost forecasting, and, ultimately, a smoother path to affordable, comprehensive care—delivering peace of mind for pet parents and better outcomes for their pets.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		$('.hdr-global').show();
	});
</script>
@endsection