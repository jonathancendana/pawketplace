@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="back">
            <a href="{{ URL::to('/admin/account-management/vendor/registered') }}"><img src="{{ asset('assets/img/admin/back.svg') }}" alt="" title=""> <span class="text">Back to listings</span></a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="mb25-global">
                    <div class="row">
                        <div class="col-md-6 my-auto">
                            <div class="title mb0">Vendor application</div>
                        </div>
                        <div class="col-md-6 my-auto text-end">
                            <div class="box-status grey">New</div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Shop’s name</label>
                    <div class="text">The Gentle Vet</div>
                </div>
                <div class="form-group">
                    <label>Shop’s email address</label>
                    <div class="text">hi@thegentlevet.sg</div>
                </div>
                <div class="bdr-form"></div>
                <div class="form-group">
                    <label>PDPA disclaimer</label>
                    <label class="css-radio">
                        <input type="radio" name="" value="" checked disabled>
                        <span class="checkmark"></span>
                        <div class="text">I have read and acknowledged the <a href="#">PDPA disclaimer</a>.</div>
                    </label>
                </div>
                <div class="box-audit">
                    <div class="t1">Audit trail</div>
                    <div class="mb10">
                        <div class="tbl">
                            <div class="cell w150">22 Nov 2024, 1:30PM</div>
                            <div class="cell">The Gentle Vet (V00012) created account</div>
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
        $('.nav-group-vendor a').addClass('active');
    });
</script>
@endsection