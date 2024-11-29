@extends('website.layout')

@section('content')
	<div class="auth">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="img-success"><img src="{{ asset('assets/img/success.svg') }}" alt="" title=""></div>
					<div class="t1 mb20">Pending admin approval</div>
					<div class="desc">
						<div class="mb20">Your shop application has been submitted successfully!</div>
						<div class="mb20">Our admin team will review your shop application and notify you about its status within a few working days.</div>
						<div class="mb20">Once approved, your shop will be live on PawketPlace, allowing you to list services, set prices, and manage appointments seamlessly.</div>
					</div>
					<div class="link-text">Need help? <a href="{{ URL::to('/contact-us') }}">Contact us</a></div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		$('.hdr-member').show();

		$('.menu, footer').hide();

		$('.box-menu').html('Vendor');
	});
</script>
@endsection