@extends('admin.auth.layout')

@section('content')
	<div class="auth">
		<div class="abs">
			<img src="{{ asset('assets/img/admin/bg-login.png') }}" alt="" title="">
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 offset-md-6 col-lg-5 offset-lg-7">
					<div class="t1">Log in to your account</div>
					<div class="pad">
						<div class="box-error">Your password is incorrect or this account doesn’t exist. Please try again.</div>
						<form action="{{ URL::to('/admin/dashboard') }}">
							<div class="form-group">
								<label>Email address<span class="red">*</span></label>
								<input class="form-control" type="text" name="" required />
								<div class="required">Please input a valid email address</div>
							</div>
							<div class="form-group mb8">
								<label>Password<span class="red">*</span></label>
								<input class="form-control" type="password" name="" required />
								<div class="required">This field is required</div>
							</div>
							<div class="link">
								<a href="{{ URL::to('/admin/forgot') }}">Forgot password?</a>
							</div>
							<div class="link-btn">
								<button class="hvr-button" type="submit" disabled>Login in</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		$('.box-name').hide();
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