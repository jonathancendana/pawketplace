@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Pet Owners</div>
        <div class="search m30">
            <input type="text" class="form-control" placeholder="Search Name, Email address, Contact no." />
            <div class="abs"><img src="{{ asset('assets/img/admin/search.svg') }}" alt="Search Icon" title=""/></div>
        </div>
        <div class="css-table">
            <table class="table">
                <thead>
                    <tr class="align-middle">
                        <th>UID</th>
                        <th>Pet owner’s name</th>
                        <th>Contact no.</th>
                        <th>Email address</th>
                        <th>No.of pets owned</th>
                        <th>Action(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <td>P00041</td>
                        <td>Janet Tan</td>
                        <td>+65 9123 1233</td>
                        <td>janet_tan@gmail.com</td>
                        <td>2</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>P00041</td>
                        <td>Janet Tan</td>
                        <td>+65 9123 1233</td>
                        <td>janet_tan@gmail.com</td>
                        <td>2</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>P00041</td>
                        <td>Janet Tan</td>
                        <td>+65 9123 1233</td>
                        <td>janet_tan@gmail.com</td>
                        <td>2</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>P00041</td>
                        <td>Janet Tan</td>
                        <td>+65 9123 1233</td>
                        <td>janet_tan@gmail.com</td>
                        <td>2</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>P00041</td>
                        <td>Janet Tan</td>
                        <td>+65 9123 1233</td>
                        <td>janet_tan@gmail.com</td>
                        <td>2</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>P00041</td>
                        <td>Janet Tan</td>
                        <td>+65 9123 1233</td>
                        <td>janet_tan@gmail.com</td>
                        <td>2</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>P00041</td>
                        <td>Janet Tan</td>
                        <td>+65 9123 1233</td>
                        <td>janet_tan@gmail.com</td>
                        <td>2</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>P00041</td>
                        <td>Janet Tan</td>
                        <td>+65 9123 1233</td>
                        <td>janet_tan@gmail.com</td>
                        <td>2</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>P00041</td>
                        <td>Janet Tan</td>
                        <td>+65 9123 1233</td>
                        <td>janet_tan@gmail.com</td>
                        <td>2</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>P00041</td>
                        <td>Janet Tan</td>
                        <td>+65 9123 1233</td>
                        <td>janet_tan@gmail.com</td>
                        <td>2</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>P00041</td>
                        <td>Janet Tan</td>
                        <td>+65 9123 1233</td>
                        <td>janet_tan@gmail.com</td>
                        <td>2</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>P00041</td>
                        <td>Janet Tan</td>
                        <td>+65 9123 1233</td>
                        <td>janet_tan@gmail.com</td>
                        <td>2</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/pet-owners/view') }}">Edit details</a>
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
        $('.nav-group-pet-owners a').addClass('active');

        var table = $('.table').DataTable({
            ordering: false,
            lengthChange: false,
            searching: false,
            info: false,
            paging: true,
            language: {
                paginate: {
                    previous: `<img src="{{ asset('assets/img/admin/pagination-left.svg') }}" />`,
                    next: `<img src="{{ asset('assets/img/admin/pagination-right.svg') }}" />`,
                }
            },
        });
        $('.dataTables_wrapper .row .col-md-5:empty').remove();
        $('.dataTables_wrapper .row .col-md-7').removeClass('col-md-7').addClass('col-sm-12');
    });
</script>
@endsection