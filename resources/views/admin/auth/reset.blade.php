@extends('admin.auth.layout')

@section('content')
	<div class="auth">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4">
					<div class="t1 mb20">Reset password</div>
					<div class="desc">Create a new password for your account.</div>
					<div class="pad">
						<form action="{{ URL::to('/admin/reset-success') }}">
							<div class="form-group">
								<label>New password<span class="red">*</span></label>
								<input class="form-control" type="password" name="" required />
								<div class="required">This field is required</div>
							</div>
							<div class="form-group">
								<label>Re-enter new password<span class="red">*</span></label>
								<input class="form-control" type="password" name="" required />
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
		$('.box-name').hide();
	});

	document.addEventListener('DOMContentLoaded', () => {
	    const form = document.querySelector('form');
	    const requiredFields = form.querySelectorAll('[required]');
	    const submitButton = form.querySelector('button[type="submit"]');

	    function checkRequiredFields() {
	        const allRequiredFilled = Array.from(requiredFields).every(field => field.value.trim() !== '');
	        submitButton.disabled = !allRequiredFilled;
	    }

	    requiredFields.forEach(field => {
	        field.addEventListener('input', checkRequiredFields);
	    });
	    checkRequiredFields();
	});
</script>
@endsection