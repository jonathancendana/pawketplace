@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Users</div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-group-users a').addClass('active');
    });
</script>
@endsection