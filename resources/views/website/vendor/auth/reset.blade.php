@extends('website.layout')

@section('content')
	<div class="auth">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4">
					<div class="t1 mb20">Reset password</div>
					<div class="desc">Create a new password for your account.</div>
					<div class="pad">
						<form action="{{ URL::to('/vendor/reset-success') }}">
							<div class="form-group">
								<label>New password<span class="red">*</span></label>
								<input class="form-control" type="password" name=""/>
								<div class="required">This field is required</div>
							</div>
							<div class="form-group">
								<label>Re-enter new password<span class="red">*</span></label>
								<input class="form-control" type="password" name=""/>
								<div class="required">Passwords do not match.</div>
							</div>
							<div class="link-btn">
								<button class="hvr-button" type="submit" disabled>Reset password</button>
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
		$('.hdr-member').show();

		$('.box-name').hide();

		$('.menu').hide();

		$('footer').hide();

		$('.box-menu').html('Vendor');
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