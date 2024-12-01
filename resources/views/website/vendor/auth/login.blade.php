@extends('website.layout')

@section('content')
	<div class="auth">
		<div class="abs">
			<img src="{{ asset('assets/img/bg-auth2.png') }}" alt="" title="">
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 offset-md-6 col-lg-5 offset-lg-7">
					<div class="t1">Welcome back</div>
					<div class="pad">
						<div class="box-error">Your password is incorrect or this account doesn’t exist. Please try again.</div>
						<form action="{{ URL::to('/vendor/step1') }}">
							<div class="form-group">
								<label>Email address<span class="red">*</span></label>
								<input class="form-control" type="text" name="" required/>
								<div class="required">Please input a valid email address</div>
							</div>
							<div class="form-group mb8">
								<label>Password<span class="red">*</span></label>
								<input class="form-control" type="password" name="" required/>
								<div class="required">This field is required</div>
							</div>
							<div class="link">
								<a href="{{ URL::to('/vendor/forgot') }}">Forgot password?</a>
							</div>
							<div class="link-btn">
								<button class="hvr-button" type="submit" disabled>Login in</button>
							</div>
						</form>
						<div class="link-text">Do not have an account yet? <a href="{{ URL::to('/vendor/register') }}">Create an account</a>.</div>
						<div class="or"><span>Or log in with</span></div>
						<ul class="l-soc">
							<li><a href="#"><img src="{{ asset('assets/img/apple.png') }}" alt="" title=""></a></li>
							<li><a href="#"><img src="{{ asset('assets/img/facebook.png') }}" alt="" title=""></a></li>
							<li><a href="#"><img src="{{ asset('assets/img/google.png') }}" alt="" title=""></a></li>
						</ul>
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