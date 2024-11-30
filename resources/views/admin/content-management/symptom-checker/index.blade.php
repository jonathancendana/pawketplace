@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Symptom Checker</div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-group-symptom a').addClass('active');
    });
</script>
@endsection