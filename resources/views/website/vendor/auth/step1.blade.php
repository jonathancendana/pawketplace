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
			                <li class="line on">
			                    <div class="bdr-step">1</div>
			                </li>
			                <li class="line">
			                    <div class="bdr-step">2</div>
			                </li>
			                <li class="line">
			                    <div class="bdr-step">3</div>
			                </li>
			                <li class="line">
			                    <div class="bdr-step">4</div>
			                </li>
			            </ul>
						<div class="t1 mb20">Set up your shop in PawketPlace</div>
						<div class="desc">
							<div>Welcome to PawketPlace!</div><br/>
							<div>First, we will need you to tell us more about your shop.</div>
						</div>
						<form action="">
							<div class="form-group">
								<label>Category<span class="red">*</span></label>
								<div class="select">
									<select name="category" id="" class="css-select" required>
										<option></option>
	                                    <option value="Category 1">Category 1</option>
	                                    <option value="Category 2">Category 2</option>
	                                </select>
	                            </div>
							</div>
							<div class="form-group">
								<label>Type<span class="red">*</span></label>
								<ul class="l-radio">
			                        <li>
			                            <label class="css-checkbox">
			                                <input type="radio" class="type-radio" name="parent" value="Individual" required>
			                                <span class="checkmark"></span>
			                                <div class="text">Individual</div>
			                            </label>
			                        </li>
			                        <li>
			                            <label class="css-checkbox">
			                                <input type="radio" class="type-radio" name="parent" value="Company" required>
			                                <span class="checkmark"></span>
			                                <div class="text">Company</div>
			                            </label>
			                        </li>
			                    </ul>
							</div>
							<ul class="l-btn center mt50">
								<li>
									<a href="{{ URL::to('/vendor/login') }}">
										<button class="hvr-button white" type="button">Back</button>
									</a>
								</li>
								<li>
									<a href="#">
										<button class="hvr-button" type="submit" disabled>Next</button>
									</a>
								</li>
							</ul>
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

	// document.addEventListener('DOMContentLoaded', () => {
	//     const form = document.querySelector('form');
	//     const categorySelect = $('.css-select');
	//     const radioButtons = form.querySelectorAll('.type-radio');
	//     const submitButton = form.querySelector('button[type="submit"]');
	//     const checkRequiredFields = () => {
	//         const isCategorySelected = categorySelect.val() !== null && categorySelect.val() !== '';
	//         const isRadioSelected = Array.from(radioButtons).some(radio => radio.checked);
	//         submitButton.disabled = !(isCategorySelected && isRadioSelected);
	//     };
	//     const updateFormAction = () => {
	//         const selectedRadio = Array.from(radioButtons).find(radio => radio.checked);
	//         if (selectedRadio) {
	//             form.action = selectedRadio.value === 'Individual' 
	//                 ? "{{ URL::to('/vendor/step2-individual') }}" 
	//                 : "{{ URL::to('/vendor/step2-company') }}";
	//         }
	//     };
	//     categorySelect.on('change', () => {
	//         checkRequiredFields();
	//         updateFormAction();
	//     });

	//     radioButtons.forEach(radio => {
	//         radio.addEventListener('change', () => {
	//             checkRequiredFields();
	//             updateFormAction();
	//         });
	//     });
	//     checkRequiredFields();
	//     updateFormAction();
	// });
</script>
@endsection