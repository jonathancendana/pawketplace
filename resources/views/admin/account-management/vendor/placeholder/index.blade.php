@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Vendor</div>
        <div class="row">
            <div class="col-md-5 my-auto">
                <ul class="l-menu mb0">
                    <li>
                        <a href="{{ URL::to('/admin/account-management/vendor/registered') }}">Registered</a>
                    </li>
                    <li>
                        <a class="active" href="{{ URL::to('/admin/account-management/vendor/placeholder') }}">Placeholder</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7 my-auto">
                <ul class="l-btn right">
                    <li>
                        <a href="{{ URL::to('/admin/account-management/vendor/placeholder/add') }}">
                            <button class="hvr-button" type="button">Create Vendor</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="search m30">
            <input type="text" class="form-control" placeholder="Search Shop Name" />
            <div class="abs"><img src="{{ asset('assets/img/admin/search.svg') }}" alt="Search Icon" title=""/></div>
        </div>
        <div class="css-table">
            <div class="result">
                <ul>
                    <li>
                        <div id="resultsCount">X results found</div>
                    </li>
                    <li>
                        <div class="link-global" id="resetButton">Reset</div>
                    </li>
                </ul>
            </div>
            <table class="table">
                <thead>
                    <tr class="align-middle">
                        <th>UID</th>
                        <th>Shop name</th>
                        <th>Category</th>
                        <th>Website</th>
                        <th>Action(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <td>V00023</td>
                        <td>Wag & Wellness Haven</td>
                        <td>Wellness Partner</td>
                        <td><div class="limit">www.instagram.com/wagandwellne.com</div></td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/vendor/placeholder/edit') }}">View or edit</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>V00022</td>
                        <td>Little Paws Training Co.</td>
                        <td>Trainer</td>
                        <td><div class="limit">www.instagram.com/littlepawstrainin.com</div></td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/vendor/placeholder/edit') }}">View or edit</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>V00021</td>
                        <td>The Whisker Clinic</td>
                        <td>Vet</td>
                        <td><div class="limit">www.thewhiskerclinic.com</div></td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/vendor/placeholder/edit') }}">View or edit</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>V00020</td>
                        <td>FurEver Friends Academy</td>
                        <td>Trainer</td>
                        <td><div class="limit">www.facebook.com/fureverfriendsac.com</div></td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/vendor/placeholder/edit') }}">View or edit</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>V00019</td>
                        <td>Tail Trails Pet Services</td>
                        <td>Wellness Partner</td>
                        <td><div class="limit">www.tailtrailspets.com</div></td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/vendor/placeholder/edit') }}">View or edit</a>
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
        $('.nav-group-vendor a').addClass('active');

        var table = $('.table').DataTable({
            ordering: false,
            lengthChange: false,
            info: false,
            paging: true,
            language: {
                paginate: {
                    previous: `<img src="{{ asset('assets/img/admin/pagination-left.svg') }}" />`,
                    next: `<img src="{{ asset('assets/img/admin/pagination-right.svg') }}" />`,
                }
            },
        });

        $('.search .form-control').on('input', function () {
            const value = $(this).val().trim();
            const count = table.search(value).draw().rows({ filter: 'applied' }).count();

            $('.result').toggle(value !== '');
            $('#resultsCount').text(`${count} results found`);
        });

        $('#resetButton').on('click', function () {
            table.search('').draw();
            $('.search .form-control').val('');
            $('.result').hide();
        });

        $('.dataTables_wrapper .row .col-md-5:empty').remove();
        $('.dataTables_wrapper .row .col-md-7').removeClass('col-md-7').addClass('col-sm-12');
    });

    document.querySelectorAll('.limit').forEach(element => {
        const maxLength = 50;
        if (element.textContent.length > maxLength) {
            element.textContent = element.textContent.slice(0, maxLength) + '...';
        }
    });
</script>
@endsection