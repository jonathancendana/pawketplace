@extends('website.layout')

@section('content')
	<div class="auth auth200">
		<div class="abs">
			<img src="{{ asset('assets/img/bg-auth.png') }}" alt="" title="">
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 offset-md-6 col-lg-5 offset-lg-7">
					<div class="t1 mb20">Forgot password?</div>
					<div class="pad">
						<div class="desc">Enter the email address associated with your account and we will send an email to you to reset your password.</div>
						<form action="{{ URL::to('/pet-parent/send') }}">
							<div class="form-group">
								<label>Email address<span class="red">*</span></label>
								<input class="form-control" type="email" name=""/>
								<div class="required">Please input a valid email address</div>
							</div>
							<div class="link-btn">
								<button class="hvr-button" type="submit">Send Email</button>
							</div>
						</form>
						<div class="link-text">
							<a href="{{ URL::to('/pet-parent/login') }}">Back to Log in</a>
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