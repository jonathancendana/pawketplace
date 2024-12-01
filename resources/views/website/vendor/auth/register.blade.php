@extends('website.layout')

@section('content')
	<div class="auth">
		<div class="abs">
			<img src="{{ asset('assets/img/bg-auth2.png') }}" alt="" title="">
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 offset-md-6 col-lg-5 offset-lg-7">
					<div class="t1 mb20">Welcome to Pawketplace</div>
					<div class="pad">
						<div class="desc2">Create an account to list your services and manage appointments, whether you’re a Vet Clinic, Wellness Partner, or Trainer.</div>
						<div class="box-error">There is an account registered with this email address. Please <a href="{{ URL::to('/vendor/login') }}">log in</a> instead.</div>
						<form action="{{ URL::to('/vendor/register-created') }}">
							<div class="form-group">
								<label>Shop name<span class="red">*</span></label>
								<input class="form-control" type="text" name="" required/>
								<div class="required">This field is required</div>
							</div>
							<div class="form-group">
								<label>Shop’s email address<span class="red">*</span></label>
								<input class="form-control" type="email" name="" required />
								<div class="required">Please input a valid email address</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Password<span class="red">*</span></label>
										<input class="form-control" type="password" name="" required />
										<div class="required">This field is required</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Re-enter password<span class="red">*</span></label>
										<input class="form-control" type="password" name="" required />
										<div class="required">Passwords do not match.</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>PDPA disclaimer<span class="red">*</span></label>
							</div>
							<div class="link-btn mt0">
								<button class="hvr-button" type="submit">Create</button>
							</div>
						</form>
						<div class="link-text">Already have an account? <a href="{{ URL::to('/vendor/login') }}">Log in</a>.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
<script src="{{ asset('js/select2/select2.min.js') }}"></script>

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