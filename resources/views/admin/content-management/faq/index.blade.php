@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">FAQ</div>
        <div class="css-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>FAQ Content</th>
                        <th width="30%">Last Updated On</th>
                        <th width="20%">Action(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>General FAQ</td>
                        <td>01 Nov 2024, 11:20AM</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/content-management/faq/edit') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Vendor FAQ</td>
                        <td>01 Nov 2024, 11:20AM</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/content-management/faq/edit') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-group-faq a').addClass('active');

        var table = $('.table').DataTable({
            ordering: false,
            lengthChange: false,
            searching: false,
            info: false,
            paging: false,
        });
    });
</script>
@endsection