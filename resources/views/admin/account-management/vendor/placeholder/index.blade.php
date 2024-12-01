@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Vendor</div>
        <ul class="l-menu">
            <li>
                <a href="{{ URL::to('/account-management/vendor/registered') }}">Registered</a>
            </li>
            <li>
                <a class="active" href="{{ URL::to('/account-management/vendor/placeholder') }}">Placeholder</a>
            </li>
        </ul>
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