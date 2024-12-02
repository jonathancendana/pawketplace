@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Pet Cost Calculator</div>
        <div class="css-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>Pet Type</th>
                        <th width="30%">Last Updated On</th>
                        <th width="20%">Action(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dog</td>
                        <td>01 Nov 2024, 11:20AM</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/content-management/pet-cost-calculator/edit') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Cat</td>
                        <td>01 Nov 2024, 11:20AM</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/content-management/pet-cost-calculator/edit') }}">Edit details</a>
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
        $('.nav-group-pet-cost a').addClass('active');

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