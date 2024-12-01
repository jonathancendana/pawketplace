@extends('website.layout')

@section('content')
	<div class="auth auth200">
		<div class="abs">
			<img src="{{ asset('assets/img/bg-auth2.png') }}" alt="" title="">
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 offset-md-6 col-lg-5 offset-lg-7">
					<div class="t1 mb20">Forgot password?</div>
					<div class="pad">
						<div class="desc">Enter the email address associated with your account and we will send an email to you to reset your password.</div>
						<form action="{{ URL::to('/vendor/send') }}">
							<div class="form-group">
								<label>Email address<span class="red">*</span></label>
								<input class="form-control" type="email" name="" required />
								<div class="required">Please input a valid email address</div>
							</div>
							<div class="link-btn">
								<button class="hvr-button" type="submit">Send Email</button>
							</div>
						</form>
						<div class="link-text">
							<a href="{{ URL::to('/vendor/login') }}">Back to Log in</a>
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

		$('.box-account, .menu, footer').hide();

		$('.box-menu').html('Vendor');
	});

	document.addEventListener('DOMContentLoaded', () => {
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input[required], select[required]');
        const submitButton = form.querySelector('button[type="submit"]');

        const checkRequiredFields = () => {
            const allFilled = Array.from(inputs).every(input => {
                if (input.type === 'radio') {
                    return form.querySelector(`input[name="${input.name}"]:checked`) !== null;
                }
                return input.value.trim() !== '';
            });

            submitButton.disabled = !allFilled;
        };
        inputs.forEach(input => {
            if (input.type === 'radio') {
                const radios = form.querySelectorAll(`input[name="${input.name}"]`);
                radios.forEach(radio => radio.addEventListener('change', checkRequiredFields));
            } else {
                input.addEventListener('input', checkRequiredFields);
            }
        });
        checkRequiredFields();
    });
</script>
@endsection