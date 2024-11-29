@extends('website.layout')

@section('content')
	<div class="auth auth200">
		<div class="abs">
			<img src="{{ asset('assets/img/bg-auth.png') }}" alt="" title="">
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 offset-md-6 col-lg-5 offset-lg-7">
					<div class="t1 mb20">Account created!</div>
					<div class="desc">
						<div class="mb20">Before we get started, we will need you to verify your email address.</div>
						<div>Please check your email inbox and click the verification link to complete your registration. If you don’t see it, you may need to check your spam folder.</div>
					</div>
					<div class="link-btn">
						<a data-coreui-toggle="modal" data-coreui-target="#resendModal">
							<button class="hvr-button white" type="button">Resend verification email</button>
						</a>
					</div>
					<div class="link-text">
						Need help? <a href="{{ URL::to('/contact-us') }}">Contact us</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="resendModal" aria-labelledby="resendModal" aria-hidden="true">
	    <div class="modal-dialog modal-dialog-centered">
	        <div class="modal-content">
	            <div class="mb15">
	                <div class="title">Verification email sent</div>
	                <div class="box success">
	                	<div class="img">
	                		<img src="{{ asset('assets/img/modal-success.svg') }}" alt="" title="">
	                	</div>
	                	<div class="bdy">
	                		<p>We’ve sent another verification email to you successfully.</p>
	                		<p>Please check your email inbox and spam folder.</p>
	                	</div>
	                </div>
	                <div class="link">
                		<button class="hvr-button white" type="button" data-coreui-dismiss="modal">Close</button>
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

		$('.menu, footer').hide();

		$('.box-menu').html('Pet Parent');
	});
</script>
@endsection