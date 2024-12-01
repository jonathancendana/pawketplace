@extends('website.layout')

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
			                <li class="line active">
			                    <div class="bdr-step">3</div>
			                </li>
			                <li class="line on">
			                    <div class="bdr-step">4</div>
			                </li>
			            </ul>
						<div class="t1 mb20">Set up your shop in PawketPlace</div>
						<div class="box-info-step">Review and submit your account creation request for approval.</div>
						<div class="form-group">
							<label>Category</label>
							<div class="text">Vet</div>
						</div>
						<div class="form-group">
							<label>Type</label>
							<div class="text">Company</div>
						</div>
						<div class="form-group">
							<label>Existing shop in PawketPlace</label>
							<div class="text">---</div>
						</div>
						<div class="t-form">Company details</div>
						<div class="form-group">
							<label>Company name</label>
							<div class="text">The Gentle Vet</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>UEN</label>
									<div class="text">123123123123</div>
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
									<div class="text">123123123123</div>
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
							<ul class="l-pdf">
								<li><img src="{{ asset('assets/img/frontpanel/pdf.svg') }}" alt="" title=""> <a href="/lorem.pdf" download>This is the document name.pdf</a></li>
								<li><img src="{{ asset('assets/img/frontpanel/pdf.svg') }}" alt="" title=""> <a href="/lorem.pdf" download>This is the document name2.pdf</a></li>
							</ul>
						</div>
						<div class="form-group">
							<label>Company address line 1</label>
							<div class="text">291 Tanjong Katong Rd</div>
						</div>
						<div class="form-group">
							<label>Company address line 2</label>
							<div class="text">---</div>
						</div>
						<div class="form-group">
							<label>Postal code</label>
							<div class="text">437074</div>
						</div>
						<div class="t-form">Contact person’s details</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Contact person’s name</label>
									<div class="text">Jerome Ong</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Contact person’s contact no.</label>
									<div class="text">+65 91111 1123</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Contact person’s email address</label>
							<div class="text">JeromeOng@thegentlevet.sg</div>
						</div>
						<div class="t-form">Shop’s contact information</div>
						<div class="form-group">
							<label>Shop’s name</label>
							<div class="text">The Gentle Vet</div>
						</div>
						<div class="form-group">
							<label>Company address line 1</label>
							<div class="text">291 Tanjong Katong Rd</div>
						</div>
						<div class="form-group">
							<label>Company address line 2</label>
							<div class="text">---</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Postal code</label>
									<div class="text">437074</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Shop’s contact no.</label>
									<div class="text">+66 6655 3970</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Email address</label>
							<div class="text">contact@thegentlevet.sg</div>
						</div>
						<div class="form-group">
							<label>Website</label>
							<div class="text">www.thegentlevet.sg</div>
						</div>
						<div class="form-group">
							<label>Photo</label>
							<ul class="l-pdf">
								<li><img src="{{ asset('assets/img/frontpanel/pdf.svg') }}" alt="" title=""> <a href="/lorem.pdf" download>This is the document name.jpg</a></li>
							</ul>
						</div>
						<div class="t-form">Shop’s details</div>
						<div class="form-group">
							<label>Description</label>
							<div class="text">
								<div class="mb20">The Gentle Vet, a Singaporean veterinary clinic founded in 2022, focuses on caring for elder and chronically ill pets with a priority in creating a stress-free, welcoming environment for pets and owners. Our approach aims to minimise stress and anxiety during medical care – guiding you and your pets with compassion and empathy.</div>
								<div>With a commitment to providing the highest standard of care, our clinic stands out for its empathetic approach, skilled staff, and swift, accurate diagnosis.</div>
							</div>
						</div>
						<div class="form-group">
							<label>Services</label>
							<div class="text">Vet services, consultation, dental</div>
						</div>
						<div class="form-group">
							<label>Operating hours</label>
							<div class="row">
								<div class="col-md-6">
									<div class="text flex"><span class="day">Mon</span> 9:30am–1pm, 2:30–8:30pm</div>
									<div class="text flex"><span class="day">Tue</span> 9:30am–1pm, 2:30–8:30pm</div>
									<div class="text flex"><span class="day">Wed</span> 9:30am–1pm, 2:30–8:30pm</div>
									<div class="text flex"><span class="day">Thu</span> 9:30am–1pm, 2:30–8:30pm</div>
								</div>
								<div class="col-md-6">
									<div class="text flex"><span class="day">Fri</span> 9:30am–1pm, 2:30–8:30pm</div>
									<div class="text flex"><span class="day">Sat</span> 9:30am–1pm, 2:30–8:30pm</div>
									<div class="text flex"><span class="day">Sun</span> 9:30am–1pm, 2:30–8:30pm</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Additional services</label>
							<div class="text">---</div>
						</div>
						<div class="form-group">
							<label>GST registered</label>
							<div class="text">Yes</div>
						</div>
						<ul class="l-btn center mt50">
							<li>
								<a href="{{ URL::to('/vendor/step3') }}">
									<button class="hvr-button white" type="button">Back</button>
								</a>
							</li>
							<li>
								<a href="{{ URL::to('/vendor/pending-admin') }}">
									<button class="hvr-button" type="button">Submit</button>
								</a>
							</li>
						</ul>
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

		$('.box-menu').html('Vendor');
	});
</script>
@endsection