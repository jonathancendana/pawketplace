@extends('admin.auth.layout')

@section('content')
	<div class="auth auth200">
		<div class="abs">
			<img src="{{ asset('assets/img/admin/bg-login.png') }}" alt="" title="">
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
						<a href="{{ URL::to('/admin/login') }}">
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
		$('.box-name').hide();
	});
</script>
@endsection