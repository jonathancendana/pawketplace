@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="row">
            <div class="col-md-5 my-auto">
                <div class="title mb0">FAQ</div>
            </div>
            <div class="col-md-7 my-auto">
                <ul class="l-btn right">
                    <li>
                        <a href="{{ URL::to('/admin/content-management/faq/add') }}">
                            <button class="hvr-button" type="button">Add FAQ</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-group-faq a').addClass('active');
    });
</script>
@endsection