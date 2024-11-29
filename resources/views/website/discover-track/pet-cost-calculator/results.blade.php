@extends('website.layout')

@section('content')
	<div class="pad80">
		<div class="container">
			<div class="detail">
				<div class="img"><img src="{{ asset('assets/img/dog.png') }}" alt="" title=""></div>
				<div class="t1">Pet cost calculator</div>
				<div class="t2 mb15">for adopting a dog</div>
				<div class="row justify-content-center">
					<div class="col-md-9 col-lg-7 col-xl-5">
						<div class="bdy-global">
							<p>Based on your inputs, here is the total estimated cost of adopting and caring for a dog over its 13-year lifespan.</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="box-results">
							<div class="w300 mb7">
								<div class="tbl">
									<div class="cell w240">One-time Costs:</div>
									<div class="cell">$2,235</div>
								</div>
							</div>
							<div class="w300 mb7">
								<div class="tbl">
									<div class="cell w240">Yearly Expenses:</div>
									<div class="cell">$5,760</div>
								</div>
							</div>
							<div class="w300 mb7">
								<div class="tbl">
									<div class="cell w240">Emergency Fund:</div>
									<div class="cell">$10,000</div>
								</div>
							</div>
							<div class="w300">
								<div class="tbl">
									<div class="cell w240">Total Expenses for 13 years:</div>
									<div class="cell"><b>$87,115</b></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<ul class="l-button">
					<li>
						<a href="{{ URL::to('/pet-cost-calculator/checkout') }}">
							<button type="button" class="hvr-button white">Edit costs</button>
						</a>
					</li>
					<li>
						<a href="{{ URL::to('/pet-cost-calculator') }}">
							<button type="button" class="hvr-button">Start over</button>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
@endsection

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		$('.hdr-global').show();
	});
</script>
@endsection