@extends('website.pet-parent.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="row">
            <div class="col-xl-11">
                <div class="box-dash">
                    <div class="t1">My pet(s)</div>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 my-auto">
                            <div class="item-dash">
                                <div class="tbl">
                                    <div class="cell">
                                        <div class="link text-center">
                                            <a href="#">Add pet</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-xl-8">
                        <div class="box-app">
                            <div class="h40">
                                <div class="row">
                                    <div class="col-md-6 my-auto">
                                        <div class="t1">Upcoming appointment(s)</div>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                        <div class="link">
                                            <a href="#">
                                                <button type="button" class="hvr-button">Book an appointment</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hscroll">
                                <div class="tbl">
                                    <div class="cell">
                                        <div class="empty">
                                            <img src="{{ asset('assets/img/frontpanel/empty-appointment.svg') }}" alt="" title=""/>
                                            <div class="text">There are no upcoming reminders</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="box-app">
                            <div class="h40">
                                <div class="t1">Reminder(s)</div>
                            </div>
                            <div class="hscroll">
                                <div class="tbl">
                                    <div class="cell">
                                        <div class="empty">
                                            <img src="{{ asset('assets/img/frontpanel/empty-remendir.svg') }}" alt="" title=""/>
                                            <div class="text">There are no upcoming reminders</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        $('.nav-group-dashboard a').addClass('active');
    });
</script>
@endsection