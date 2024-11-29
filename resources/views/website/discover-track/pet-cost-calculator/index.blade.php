@extends('website.layout')

@section('content')
	<div class="pad80">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-11 col-lg-8">
					<div class="title-global">Pet cost calculator</div>
					<div class="bdy-global">
						<p>Description goes here, description goes here, description goes here, description goes here description goes here, description goes here, description goes here etc.</p>
					</div>
					<div class="box-select">
						<div class="t1">I want to get a...</div>
						<ul class="l-select">
							<li>
								<a>
									<div class="img">
										<img src="{{ asset('assets/img/dog.png') }}" alt="" title="">
									</div>
									<div class="nm">Dog</div>
								</a>
							</li>
							<li>
								<a>
									<div class="img">
										<img src="{{ asset('assets/img/cat.png') }}" alt="" title="">
									</div>
									<div class="nm">Cat</div>
								</a>
							</li>
						</ul>
						<div class="t1">I intend to...</div>
						<ul class="l-select pad">
							<li>
								<a>
									<div class="nm">Adopt</div>
								</a>
							</li>
							<li>
								<a>
									<div class="nm">Purchase</div>
								</a>
							</li>
						</ul>
						<div class="link disabled">
							<a>
								<button type="button" class="hvr-button">Next</button>
							</a>
						</div>
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
		
		function checkSelection() {
	        if ($('ul.l-select:eq(0) li a.active').length > 0 && 
	            $('ul.l-select:eq(1) li a.active').length > 0) {
	            $('.link').removeClass('disabled').find('a').attr('href', "{{ URL::to('/pet-cost-calculator/checkout') }}");
	        } else {
	            $('.link').addClass('disabled').find('a').removeAttr('href');
	        }
	    }

	    $('ul.l-select li a').click(function () {
	        $(this).closest('ul').find('li a').removeClass('active');
	        $(this).addClass('active');
	        checkSelection();
	    });
	});
</script>
@endsection