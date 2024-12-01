@extends('admin.layout.app')

@section('content')
<div class="pad-content pet">
    <div class="container">
        <div class="back">
            <a href="{{ URL::to('/admin/account-management/pet-owners') }}"><img src="{{ asset('assets/img/admin/back.svg') }}" alt="" title=""> <span class="text">Back to listings</span></a>
        </div>
        <div class="title">Janet Tan</div>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email address</label>
                            <div class="text">janet_tan@gmail.com <img class="verified" src="{{ asset('assets/img/admin/verified.svg') }}" alt="" title=""></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Contact no.</label>
                            <div class="text">+65 9123 1123</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No. of pets owned</label>
                            <div class="text">2</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pad-content2">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="title3">View pet profile:</div>
                <ul class="l-menu">
                    <li>
                        <a class="active" href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Mochi</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/admin/account-management/pet-owners/view2') }}">Donut</a>
                    </li>
                </ul>
                <div class="box-profile">
                    <div class="tbl">
                        <div class="cell img">
                            <div class="bdr">
                                <img src="{{ asset('assets/img/admin/profile-cat.png') }}" alt="" title="">
                            </div>
                        </div>
                        <div class="cell">
                            <div class="nm">Mochi</div>
                            <ul class="l-profile">
                                <li>Cat</li>
                                <li>British Shorthair</li>
                                <li>5 years 11 months</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="title2">Profile</div>
                <div class="mb30-global">
                    <div class="title3">Pet details</div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Gender</label>
                                <div class="text">Female</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Date of birth</label>
                                <div class="text">20 Nov 2018</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Colour</label>
                                <div class="text">Grey</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Weight</label>
                                <div class="text">8.0 kg</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Sterilised</label>
                                <div class="text">Yes</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Sterilisation certificate</label>
                                <div class="text"><a href="#">View file</a></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Microchip number</label>
                                <div class="text">---</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Microchip registration</label>
                                <div class="text">---</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>FIV</label>
                                <div class="text">Positive</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>FeLV</label>
                                <div class="text">Positive</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Pet insurance</label>
                                <div class="text">No</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb30-global">
                    <div class="title3">About the pet</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Personality</label>
                                <div class="text">Playful</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dietary preferences</label>
                                <div class="text">---</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Allergies</label>
                                <div class="text">---</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb30-global">
                    <div class="title2">Health records</div>
                    <div class="box-pet grey">
                        <ul class="l-pet">
                            <li><img class="verified" src="{{ asset('assets/img/admin/vaccination.svg') }}" alt="" title=""></li>
                            <li>Vaccination</li>
                        </ul>
                        <div class="link-global">
                            <a href="#">View record(s)</a>
                        </div>
                    </div>
                    <div class="box-pet pink">
                        <ul class="l-pet">
                            <li><img class="verified" src="{{ asset('assets/img/admin/deworm.svg') }}" alt="" title=""></li>
                            <li>Deworm</li>
                        </ul>
                        <div class="link-global">
                            <a href="#">View record(s)</a>
                        </div>
                    </div>
                    <div class="box-pet orange">
                        <ul class="l-pet">
                            <li><img class="verified" src="{{ asset('assets/img/admin/parasite-control.svg') }}" alt="" title=""></li>
                            <li>Parasite control</li>
                        </ul>
                        <div class="link-global">
                            <a href="#">View record(s)</a>
                        </div>
                    </div>
                </div>
                <div class="title2">Medical history</div>
                <div class="box-pet grey">
                    <ul class="l-pet mb10">
                        <li><img class="verified" src="{{ asset('assets/img/admin/veterinary-visits.svg') }}" alt="" title=""></li>
                        <li>Veterinary Visits</li>
                    </ul>
                    <div class="box2-pet">
                        <ul class="l-date">
                            <li>Thursday 21 Nov 2024</li>
                        </ul>
                        <div class="mb5"><b>The Gentle Vet</b></div>
                        <div class="link-global">
                            <a href="#">View more</a>
                        </div>
                    </div>
                    <div class="box2-pet">
                        <ul class="l-date">
                            <li>Wednesday 13 Nov 2024</li>
                            <li>
                                <div class="box-status red">Follow up required</div>
                            </li>
                        </ul>
                        <div class="mb5"><b>The Gentle Vet</b></div>
                        <div class="link-global">
                            <a href="#">View more</a>
                        </div>
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
        $('.nav-group-pet-owners a').addClass('active');

        $('.pt120').addClass('pt70');
    });
</script>
@endsection