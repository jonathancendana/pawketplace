@extends('website.layout')

@section('content')
	<div class="pad-contact">
		<div class="abs">
			<img src="{{ asset('assets/img/bg-contact.png') }}" alt="" title="">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-5 offset-md-6">
					<div class="t1">Contact Us</div>
					<form>
						<div class="form-group">
							<label>Name<span class="red">*</span></label>
							<input class="form-control" type="text" name=""/>
							<div class="required">This field is required</div>
						</div>
						<div class="form-group">
							<label>Email address<span class="red">*</span></label>
							<input class="form-control" type="email" name=""/>
							<div class="required">Please input a valid email address</div>
						</div>
						<div class="form-group">
							<label>Message<span class="red">*</span></label>
							<textarea class="form-control" type="message" name=""></textarea>
							<div class="required">This field is required</div>
						</div>
						<div class="link-btn">
							<button class="hvr-button" type="submit" disabled>Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="pad-faq" id="faq">
		<div class="container">
			<div class="t1">Frequently asked questions</div>
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="accordion">
						<div class="item">
							<div class="nm">
								<button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq1" aria-expanded="false" aria-controls="faq1">Question 1 goes here, description etc etc etc?</button>
							</div>
							<div id="faq1" class="accordion-collapse collapse">
								<div class="body">
									<p>Answer for question 1 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="nm">
								<button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq2" aria-expanded="false" aria-controls="faq2">Question 2 goes here, description etc etc etc?</button>
							</div>
							<div id="faq2" class="accordion-collapse collapse">
								<div class="body">
									<p>Answer for question 2 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="nm">
								<button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq3" aria-expanded="false" aria-controls="faq3">Question 3 goes here, description etc etc etc?</button>
							</div>
							<div id="faq3" class="accordion-collapse collapse">
								<div class="body">
									<p>Answer for question 3 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="nm">
								<button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq4" aria-expanded="false" aria-controls="faq4">Question 4 goes here, description etc etc etc?</button>
							</div>
							<div id="faq4" class="accordion-collapse collapse">
								<div class="body">
									<p>Answer for question 4 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="nm">
								<button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#faq5" aria-expanded="false" aria-controls="faq5">Question 5 goes here, description etc etc etc?</button>
							</div>
							<div id="faq5" class="accordion-collapse collapse">
								<div class="body">
									<p>Answer for question 5 goes here.  Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="successModal" aria-labelledby="successModal" aria-hidden="true">
	    <div class="modal-dialog modal-dialog-centered">
	        <div class="modal-content">
	            <div class="mb15">
	                <div class="row row4">
	                    <div class="col-10 my-auto">
	                        <div class="title">Form submitted successfully</div>
	                    </div>
	                    <div class="col-2 my-auto text-end">
	                        <div class="close" data-coreui-dismiss="modal">
	                            <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
	                        </div>
	                    </div>
	                </div>
	                <div class="box success">
	                    <div class="img">
	                        <img src="{{ asset('assets/img/modal-success.svg') }}" alt="" title="">
	                    </div>
	                    <div class="bdy">
	                        <p>Thank you for reaching out! Your form has been submitted. You should receive a response in your email inbox within the next few working days.</p>
	                    </div>
	                </div>
	                <div class="link">
	                    <button class="hvr-button white" type="button" data-coreui-dismiss="modal">Close</button>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="modal fade" id="failedModal" aria-labelledby="failedModal" aria-hidden="true">
	    <div class="modal-dialog modal-dialog-centered">
	        <div class="modal-content">
	            <div class="mb15">
	                <div class="row row4">
	                    <div class="col-10 my-auto">
	                        <div class="title">Failed to submit form</div>
	                    </div>
	                    <div class="col-2 my-auto text-end">
	                        <div class="close" data-coreui-dismiss="modal">
	                            <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
	                        </div>
	                    </div>
	                </div>
	                <div class="box failed">
	                    <div class="img">
	                        <img src="{{ asset('assets/img/modal-failed.svg') }}" alt="" title="">
	                    </div>
	                    <div class="bdy">
	                        <p>There was an error submitting your form.</p>
	                        <p>Please try again.</p>
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
		$('.hdr-global').show();
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