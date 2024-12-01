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
			                <li class="line on">
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
						<div class="box-info-step">Is your shop already listed in <a href="#">PawketPlace’s list of shops</a>? If yes, please select your shop below, and we’ll verify the details.</div>
						<form action="{{ URL::to('/vendor/step3') }}">
							<div class="t-form">Company details</div>
							<div class="form-group">
								<label>Company name<span class="red">*</span></label>
								<input class="form-control" type="text" name="" required />
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>UEN<span class="red">*</span></label>
										<input class="form-control" type="text" name="" required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>AVS licensed number 
											<div class="css-tooltip">
												<img class="tool" src="{{ asset('assets/img/frontpanel/tooltip.svg') }}" alt="" title="">
												<div class="box-tooltip">My Tooltip <img src="{{ asset('assets/img/frontpanel/arrow-tooltip.svg') }}" alt="" title=""></div>
											</div>
										</label>
										<input class="form-control" type="text" name=""/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Certification
									<div class="css-tooltip">
										<img class="tool" src="{{ asset('assets/img/frontpanel/tooltip.svg') }}" alt="" title="">
										<div class="box-tooltip">My Tooltip <img src="{{ asset('assets/img/frontpanel/arrow-tooltip.svg') }}" alt="" title=""></div>
									</div>
								</label>
		                        <div class="upload-container">
								    <div class="file-list"></div>
								    <div class="upload-area">
								        <div class="upload-button">Upload file</div>
								        <input type="file" class="file-input" accept="image/*" required style="display: none;" multiple>
								    </div>
								</div>
		                        <div class="note">
		                            <div>You may upload multiple certificates.</div>
		                        	<div>Only PNG, JPG, and PDF files are accepted. Maximum file size: 2MB.</div>
		                        </div>
		                    </div>
							<div class="form-group">
								<label>Company address line 1<span class="red">*</span></label>
								<input class="form-control" type="text" name="" required />
							</div>
							<div class="form-group">
								<label>Company address line 2</label>
								<input class="form-control" type="text" name=""/>
							</div>
							<div class="form-group">
								<label>Postal code<span class="red">*</span></label>
								<input class="form-control" type="text" name="" required />
							</div>
							<div class="t-form">Contact person’s details</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Contact person’s name<span class="red">*</span></label>
										<input class="form-control" type="text" name="" required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
		                                <label>Contact person’s contact no.<span class="red">*</span></label>
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
		                                        <input class="form-control only-number" type="text" name="" value="" required />
		                                    </div>
		                                </div>
		                            </div>
								</div>
							</div>
							<div class="form-group">
								<label>Contact person’s email address<span class="red">*</span></label>
								<input class="form-control" type="email" name="" required />
							</div>
							<ul class="l-btn center mt50">
								<li>
									<a href="{{ URL::to('/vendor/step1') }}">
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

		$('.css-select select').select2({
            allowClear: true,
            minimumResultsForSearch: Infinity
        });
	});
	document.querySelectorAll('.upload-container').forEach((container) => {
	    const uploadButton = container.querySelector('.upload-button');
	    const fileInput = container.querySelector('.file-input');
	    const fileList = container.querySelector('.file-list');

	    uploadButton.onclick = () => fileInput.click();

	    fileInput.onchange = () => {
	        Array.from(fileInput.files).forEach((file) => {
	            const fileInfo = document.createElement('div');
	            fileInfo.className = 'file-info';

	            fileInfo.innerHTML = `
	                <img src="{{ asset('assets/img/admin/upload.svg') }}" alt="Preview">
	                <span>${file.name}</span>
	                <button class="remove-btn">Remove</button>
	            `;

	            fileList.prepend(fileInfo);

	            fileInfo.querySelector('.remove-btn').onclick = () => {
	                fileInfo.remove();
	            };
	        });
	        fileInput.value = '';
	    };
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