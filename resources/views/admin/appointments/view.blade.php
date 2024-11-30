@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Appointments</div>
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