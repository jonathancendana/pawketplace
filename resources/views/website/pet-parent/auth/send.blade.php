@extends('website.layout')

@section('content')
	<div class="auth auth200">
		<div class="abs">
			<img src="{{ asset('assets/img/bg-auth.png') }}" alt="" title="">
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 offset-md-6 col-lg-5 offset-lg-7">
					<div class="t1 mb20">Password reset email sent!</div>
					<div class="desc">
						<div class="mb20">A password reset email has been sent if there’s a registered account with that email.</div>
						<div>Please check your email inbox and click the link to change your password. If you don’t see it, you may need to check your spam folder.</div>
					</div>
					<div class="link-btn">
						<a href="{{ URL::to('/pet-parent/login') }}">
							<button class="hvr-button white" type="button">Back to Log in</button>
						</a>
					</div>
					<div class="link-text">
						Need help? <a href="{{ URL::to('/contact-us') }}">Contact us</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		$('.hdr-member').show();

		$('.box-name').hide();

		$('.menu').hide();

		$('footer').hide();
	});

	document.addEventListener('DOMContentLoaded', () => {
	    const form = document.querySelector('form');
	    const inputs = form.querySelectorAll('.form-control');
	    const submitButton = form.querySelector('button[type="submit"]');

	    function checkInputs() {
	        const allFilled = Array.from(inputs).every(input => input.value.trim() !== '');
	        submitButton.disabled = !allFilled;
	    }
	    inputs.forEach(input => {
	        input.addEventListener('input', checkInputs);
	    });
	    checkInputs();
	});
</script>
@endsection