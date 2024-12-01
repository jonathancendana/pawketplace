@extends('website.layout')

@section('css')
<link href="{{ asset('js/select2/select2.min.css') }}" rel="stylesheet"/>
@endsection

@section('content')
	<div class="auth">
		<div class="abs">
			<img src="{{ asset('assets/img/bg-auth.png') }}" alt="" title="">
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 offset-md-6 col-lg-5 offset-lg-7">
					<div class="t1">Welcome to Pawketplace</div>
					<div class="pad">
						<div class="box-error">There is an account registered with this email address. Please <a href="{{ URL::to('/pet-parent/login') }}">log in</a> instead.</div>
						<form action="{{ URL::to('/pet-parent/register-created') }}">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Name<span class="red">*</span></label>
										<input class="form-control" type="text" name="" required />
										<div class="required">This field is required</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Contact no.<span class="red">*</span></label>
										<div class="row row4">
											<div class="col-5">
												<div class="css-select">
													<select name="" id="">
					                                    <option value="+65" selected>+65</option>
					                                    <option value="+62">+62</option>
					                                </select>
					                            </div>
											</div>
											<div class="col-7">
												<input class="form-control only-number" type="text" name="" required />
											</div>
										</div>
										<div class="required">Please input a valid contact no.</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Email address<span class="red">*</span></label>
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
							<div class="link-btn mt0">
								<button class="hvr-button" type="submit">Create account</button>
							</div>
						</form>
						<div class="link-text">Already have an account? <a href="{{ URL::to('/pet-parent/login') }}">Log in</a>.</div>
						<div class="or"><span>Or sign up with</span></div>
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
<script src="{{ asset('js/select2/select2.min.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.hdr-member').show();

		$('.menu, footer').hide();

		$('.box-menu').html('Pet Parent');

		$('.css-select select').select2({
            allowClear: true,
            minimumResultsForSearch: Infinity
        });
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