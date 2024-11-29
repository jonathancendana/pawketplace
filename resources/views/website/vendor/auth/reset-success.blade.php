@extends('website.layout')

@section('content')
	<div class="auth">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="img-success"><img src="{{ asset('assets/img/success.svg') }}" alt="" title=""></div>
					<div class="t1 mb20">Password reset successful</div>
					<div class="desc">You can now log in to book vet visits and track your pet’s expenses.</div>
					<div class="link-btn">
						<a href="{{ URL::to('/vendor/login') }}">
							<button class="hvr-button" type="button">Back to log in</button>
						</a>
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
</script>
@endsection