@extends('website.layout')

@section('content')
	<div class="pad80">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-11 col-lg-8">
					<div class="detail">
						<div class="img"><img src="{{ asset('assets/img/dog.png') }}" alt="" title=""></div>
						<div class="t1">Pet cost calculator</div>
						<div class="t2">for adopting a dog</div>
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
</script>
@endsection