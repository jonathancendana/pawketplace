@extends('website.vendor.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="row block400">
                    <div class="col-6 my-auto">
                        <div class="title mb0">Services & Pricing</div>
                    </div>
                    <div class="col-6 my-auto text-end">
                        <div class="link-add">
                            <a href="{{ URL::to('/vendor/services-pricing/add') }}"><button type="button" class="hvr-button w200">Add services</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="desc">Display the services your clinic offers, complete with pricing, to help pet owners on our platform make informed choices when booking appointments.</div>
                <div class="box-desc">
                    <div class="mb20">Below is an example of the information you can add – category, service, and price range:</div>
                    <div><b>Category</b>: Consultation</div>
                    <div><b>Service</b>: General Consultation, $40 - $80</div>
                    <div><b>Service</b>: Specialist Consultation, $80 - $150</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-group-services a').addClass('active');
    });
</script>
@endsection