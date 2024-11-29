@extends('website.layout')

@section('css')
<link href="{{ asset('js/select2/select2.min.css') }}" rel="stylesheet"/>
@endsection

@section('content')
	<div class="auth">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 col-xl-6">
					<div class="pad">
						<ul class="box-step">
			                <li class="line active">
			                    <div class="bdr-step">1</div>
			                </li>
			                <li class="line active">
			                    <div class="bdr-step">2</div>
			                </li>
			                <li class="line on">
			                    <div class="bdr-step">3</div>
			                </li>
			                <li class="line">
			                    <div class="bdr-step">4</div>
			                </li>
			            </ul>
						<div class="t1 mb20">Set up your shop in PawketPlace</div>
						<div class="box-info-step">Details about your shop will be displayed on PawketPlace’s website once your account is approved and active.</div>
						<form action="">
							<ul class="l-btn center mt50">
								<li>
									<a href="{{ URL::to('/vendor/step2') }}">
										<button class="hvr-button white" type="button">Back</button>
									</a>
								</li>
								<li>
									<a href="{{ URL::to('/vendor/step4') }}">
										<button class="hvr-button" type="submit" disabled>Next</button>
									</a>
								</li>
							</div>
						</form>
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

		$('.box-menu').html('Vendor');

		$('.css-select').select2({
			placeholder: "Select",
            allowClear: true,
            minimumResultsForSearch: Infinity
        });
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