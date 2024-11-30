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
						<form action="{{ URL::to('/vendor/step4') }}">
							<div class="t-form no-bdr">Shop’s contact information</div>
							<div class="form-group">
								<label>Shop’s name<span class="red">*</span></label>
								<input type="text" class="form-control" name="" required />
							</div>
							<div class="form-group">
								<label>Shop’s address line 1<span class="red">*</span></label>
								<input type="text" class="form-control" name="" required />
							</div>
							<div class="form-group">
								<label>Shop’s address line 2</label>
								<input type="text" class="form-control" name=""/>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Shop’s postal code<span class="red">*</span></label>
										<input class="form-control" type="text" name="" required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Shop’s contact no.<span class="red">*</span></label>
										<div class="row row4">
											<div class="col-5">
												<div class="select">
													<select name="" id="" class="css-select">
					                                    <option value="+65" selected>+65</option>
					                                    <option value="+62">+62</option>
					                                </select>
					                            </div>
											</div>
											<div class="col-7">
												<input class="form-control" type="text" name="" required />
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Email address</label>
								<div class="text">contact@thegentlevet.sg</div>
							</div>
							<div class="form-group">
								<label>Website<span class="red">*</span></label>
								<input type="text" class="form-control" name="" required />
							</div>
							<div class="form-group">
								<label>Photo<span class="red">*</span></label>
								<input type="text" class="form-control" name="" required />
								<div class="note">
									<div>Upload a photo of your logo or stop. This will be displayed on the website.</div>
									<div>Only PNG, JPG, and PDF files are accepted. Maximum file size: 2MB.</div>
								</div>
							</div>
							<div class="t-form">Shop’s details</div>
							<div class="form-group">
								<label>Description<span class="red">*</span></label>
								<textarea type="message" class="form-control" name="" required placeholder="Provide some description about the company / shop. This will be displayed on the website."></textarea>
							</div>
							<div class="form-group">
								<label>Services<span class="red">*</span></label>
								<textarea type="message" class="form-control" name="" required placeholder="Provide a brief summary of key services provided."></textarea>
							</div>
							<div class="form-group">
								<label>Operating hours<span class="red">*</span></label>
								<div class="row">
									<div class="col-md-6">
										<div class="text flex big"><span class="day">Mon</span> <input type="text" class="form-control" name="" required placeholder="9:30am–1pm, 2:30–8:30pm" required/></div>
										<div class="text flex big"><span class="day">Tue</span> <input type="text" class="form-control" name="" required placeholder="9:30am–1pm, 2:30–8:30pm" required/></div>
										<div class="text flex big"><span class="day">Wed</span> <input type="text" class="form-control" name="" required placeholder="9:30am–1pm, 2:30–8:30pm" required/></div>
										<div class="text flex big"><span class="day">Thu</span> <input type="text" class="form-control" name="" required placeholder="9:30am–1pm, 2:30–8:30pm" required/></div>
									</div>
									<div class="col-md-6">
										<div class="text flex big"><span class="day">Fri</span> <input type="text" class="form-control" name="" required placeholder="9:30am–1pm, 2:30–8:30pm" required/></div>
										<div class="text flex big"><span class="day">Sat</span> <input type="text" class="form-control" name="" required placeholder="9:30am–1pm, 2:30–8:30pm" required/></div>
										<div class="text flex big"><span class="day">Sun</span> <input type="text" class="form-control" name="" required placeholder="9:30am–1pm, 2:30–8:30pm" required/></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Additional services</label>
								<ul class="l-radio">
			                        <li>
			                            <label class="css-radio">
			                                <input type="radio" class="type-radio" name="add" value="24/7 Emergency">
			                                <span class="checkmark"></span>
			                                <div class="text">24/7 Emergency</div>
			                            </label>
			                        </li>
			                        <li>
			                            <label class="css-radio">
			                                <input type="radio" class="type-radio" name="add" value="Vet Specialist">
			                                <span class="checkmark"></span>
			                                <div class="text">Vet Specialist</div>
			                            </label>
			                        </li>
			                    </ul>
							</div>
							<div class="form-group">
								<label>GST registered<span class="red">*</span></label>
								<ul class="l-radio">
			                        <li>
			                            <label class="css-checkbox">
			                                <input type="radio" class="type-radio" name="gst" value="Yes" required>
			                                <span class="checkmark"></span>
			                                <div class="text">Yes</div>
			                            </label>
			                        </li>
			                        <li>
			                            <label class="css-checkbox">
			                                <input type="radio" class="type-radio" name="gst" value="No" required>
			                                <span class="checkmark"></span>
			                                <div class="text">No</div>
			                            </label>
			                        </li>
			                    </ul>
			                    <div class="note">Select “Yes” if your service or shop is subject to GST (9% will be added to the invoice).</div>
							</div>
							<ul class="l-btn center mt50">
								<li>
									<a href="{{ URL::to('/vendor/step2') }}">
										<button class="hvr-button white" type="button">Back</button>
									</a>
								</li>
								<li>
									<button class="hvr-button" type="submit" disabled>Next</button>
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
	    const categorySelect = $('.css-select');
	    const radioButtons = form.querySelectorAll('.type-radio');
	    const submitButton = form.querySelector('button[type="submit"]');
	    const checkRequiredFields = () => {
	        const isCategorySelected = categorySelect.val() !== null && categorySelect.val() !== '';
	        const isRadioSelected = Array.from(radioButtons).some(radio => radio.checked);
	        submitButton.disabled = !(isCategorySelected && isRadioSelected);
	    };
	    categorySelect.on('change', () => {
	        checkRequiredFields();
	    });

	    radioButtons.forEach(radio => {
	        radio.addEventListener('change', () => {
	            checkRequiredFields();
	        });
	    });
	    checkRequiredFields();
	});
</script>
@endsection