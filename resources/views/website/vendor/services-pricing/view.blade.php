@extends('vendor.layout.app')

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
                            <a href="{{ URL::to('/vendor/services-pricing/edit') }}"><button type="button" class="hvr-button w200">Edit services</button></a>
                        </div>
                    </div>
                </div>
                <div class="box-view">
                    <div class="t1">Emergency Services</div>
                    <div class="row text">
                        <div class="col-sm-9 col-xl-8">Emergency Consultation (after hours)</div>
                        <div class="col-sm-3 col-xl-4">$100 - $200</div>
                    </div>
                </div>
                <div class="box-view">
                    <div class="t1">Consultation</div>
                    <div class="row text">
                        <div class="col-sm-9 col-xl-8">General Consultation</div>
                        <div class="col-sm-3 col-xl-4">$40 - $80</div>
                    </div>
                    <div class="row text">
                        <div class="col-sm-9 col-xl-8">Specialist Consultation (Dermatology, Orthopedic, etc.)</div>
                        <div class="col-sm-3 col-xl-4">$80 - $150</div>
                    </div>
                </div>
                <div class="box-view">
                    <div class="t1">Vaccinations</div>
                    <div class="row text">
                        <div class="col-sm-9 col-xl-8">Core Vaccinations (e.g., DHPPi for dogs, FVRCP for cats)</div>
                        <div class="col-sm-3 col-xl-4">$30 - $80</div>
                    </div>
                    <div class="row text">
                        <div class="col-sm-9 col-xl-8">Rabies Vaccination</div>
                        <div class="col-sm-3 col-xl-4">$50 - $100</div>
                    </div>
                    <div class="row text">
                        <div class="col-sm-9 col-xl-8">Non-Core Vaccinations (e.g., kennel cough)</div>
                        <div class="col-sm-3 col-xl-4">$40 - $80</div>
                    </div>
                </div>
                <div class="box-view">
                    <div class="t1">Diagnostics and Lab Tests</div>
                    <div class="row text">
                        <div class="col-sm-9 col-xl-8">Blood Tests (Basic profile)</div>
                        <div class="col-sm-3 col-xl-4">$80 - $150</div>
                    </div>
                    <div class="row text">
                        <div class="col-sm-9 col-xl-8">Urine Analysis</div>
                        <div class="col-sm-3 col-xl-4">$40 - $80</div>
                    </div>
                    <div class="row text">
                        <div class="col-sm-9 col-xl-8">Fecal Analysis</div>
                        <div class="col-sm-3 col-xl-4">$30 - $60</div>
                    </div>
                    <div class="row text">
                        <div class="col-sm-9 col-xl-8">X-ray</div>
                        <div class="col-sm-3 col-xl-4">$100 - $250</div>
                    </div>
                    <div class="row text">
                        <div class="col-sm-9 col-xl-8">Ultrasound</div>
                        <div class="col-sm-3 col-xl-4">$150 - $300</div>
                    </div>
                </div>
                <div class="box-view">
                    <div class="t1">Surgery</div>
                    <div class="row text">
                        <div class="col-sm-9 col-xl-8">Spaying/Neutering (Cats)</div>
                        <div class="col-sm-3 col-xl-4">$150 - $300</div>
                    </div>
                    <div class="row text">
                        <div class="col-sm-9 col-xl-8">Spaying/Neutering (Dogs)</div>
                        <div class="col-sm-3 col-xl-4">$250 - $600</div>
                    </div>
                    <div class="row text">
                        <div class="col-sm-9 col-xl-8">Orthopedic Surgery</div>
                        <div class="col-sm-3 col-xl-4">$1,500 - $4,000</div>
                    </div>
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