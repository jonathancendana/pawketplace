@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="back">
            <a href="{{ URL::to('/admin/appointments/view') }}"><img src="{{ asset('assets/img/admin/back.svg') }}" alt="" title=""> <span class="text">Back to listings</span></a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="mb25-global">
                    <div class="row">
                        <div class="col-md-6 my-auto">
                            <div class="title mb0">Appointment details</div>
                        </div>
                        <div class="col-md-6 my-auto text-end">
                            <div class="box-status grey">No show</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ID</label>
                            <div class="text">0023</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date & time</label>
                            <div class="text">Thursday 28 Nov 2024, 1:30PM</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Shop name</label>
                            <div class="text"><a href="{{ URL::to('/admin/account-management/vendor/registered/active') }}">The Gentle Vet</a> (V00012)</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pet owner</label>
                            <div class="text"><a href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Janet Tan</a> (P00041)</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pet(s)</label>
                            <div class="text"><a href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Mochi</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Have you been to this clinic?</label>
                            <div class="text">No</div>
                        </div>
                    </div>
                </div>
                <div class="box-audit mt0">
                    <div class="t1">Audit trail</div>
                    <div class="mb10">
                        <div class="tbl">
                            <div class="cell w150">28 Nov 2024, 1:40PM</div>
                            <div class="cell">The Gentle Vet (V00012) marked appointment as No-show</div>
                        </div>
                    </div>
                    <div class="mb10">
                        <div class="tbl">
                            <div class="cell w150">24 Nov 2024, 1:30PM</div>
                            <div class="cell">The Gentle Vet (V00012) confirmed a time slot </div>
                        </div>
                    </div>
                    <div class="mb10">
                        <div class="tbl">
                            <div class="cell w150">22 Nov 2024, 1:40PM</div>
                            <div class="cell">Janet Tan (P00041) modified a booking</div>
                        </div>
                    </div>
                    <div class="mb10">
                        <div class="tbl">
                            <div class="cell w150">22 Nov 2024, 1:30PM</div>
                            <div class="cell">Janet Tan (P00041) submitted a new booking</div>
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
        $('.nav-group-appointments a').addClass('active');
    });
</script>
@endsection