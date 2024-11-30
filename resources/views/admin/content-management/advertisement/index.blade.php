@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="row">
            <div class="col-md-5 my-auto">
                <div class="title mb0">Advertisement</div>
            </div>
            <div class="col-md-7 my-auto">
                <ul class="l-btn right">
                    <li>
                        <button class="hvr-button white" type="button" data-coreui-toggle="modal" data-coreui-target="#arrangesequenceModal">Arrange sequence</button>
                    </li>
                    <li>
                        <a href="{{ URL::to('/admin/content-management/advertisement/add') }}">
                            <button class="hvr-button" type="button">Add advertisement</button>
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
        $('.nav-group-advertisement a').addClass('active');
    });
</script>
@endsection