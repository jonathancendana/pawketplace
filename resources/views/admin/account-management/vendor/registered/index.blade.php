@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Vendors</div>
        <ul class="l-menu">
            <li>
                <a class="active" href="{{ URL::to('/admin/account-management/vendor/registered') }}">Registered</a>
            </li>
            <li>
                <a href="{{ URL::to('/admin/account-management/vendor/placeholder') }}">Placeholder</a>
            </li>
        </ul>
        <div>
            <form>
                <div class="search">
                    <input type="text" class="form-control" name="" placeholder="Search ID, Pet Owner or Contact No." />
                    <div class="abs"><img src="{{ asset('assets/img/admin/search.svg') }}" alt="" title=""/></div>
                </div>
            </form>
        </div>
        <div class="css-table mt30">
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
                    <tr>
                        <th>UID</th>
                        <th>Shop name</th>
                        <th>Category</th>
                        <th>Contact person</th>
                        <th>Contact no.</th>
                        <th>
                            Status 
                            <div class="dropdown-container">
                                <span class="icon-drop"><img src="{{ asset('assets/img/admin/status.svg') }}" alt="" title=""/></span>
                                <ul class="dropdown-filter">
                                    <li class="staus-filter" data-status="Pending">Pending</li>
                                    <li class="staus-filter" data-status="New">New</li>
                                    <li class="staus-filter" data-status="Rejected">Rejected</li>
                                    <li class="staus-filter" data-status="Active">Active</li>
                                </ul>
                            </div>
                        </th>
                        <th>Action(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>V00012</td>
                        <td>The Gentle Vet</td>
                        <td>Vet</td>
                        <td>Jamie Ng</td>
                        <td>+65 9123 1233</td>
                        <td>
                            <div class="box-status yellow">Pending</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/vendor/registered/pending') }}">Review</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>V00012</td>
                        <td>The Gentle Vet</td>
                        <td>Vet</td>
                        <td>Jamie Ng</td>
                        <td>+65 9123 1233</td>
                        <td>
                            <div class="box-status yellow">Pending</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/vendor/registered/pending') }}">Review</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>V00012</td>
                        <td>The Gentle Vet</td>
                        <td>Vet</td>
                        <td>Jamie Ng</td>
                        <td>+65 9123 1233</td>
                        <td>
                            <div class="box-status grey">New</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/vendor/registered/new') }}">View</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>V00012</td>
                        <td>The Gentle Vet</td>
                        <td>Vet</td>
                        <td>Jamie Ng</td>
                        <td>+65 9123 1233</td>
                        <td>
                            <div class="box-status grey">New</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/vendor/registered/new2') }}">View</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>V00012</td>
                        <td>The Gentle Vet</td>
                        <td>Vet</td>
                        <td>Jamie Ng</td>
                        <td>+65 9123 1233</td>
                        <td>
                            <div class="box-status green">Active</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/vendor/registered/active') }}">View</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>V00012</td>
                        <td>The Gentle Vet</td>
                        <td>Vet</td>
                        <td>Jamie Ng</td>
                        <td>+65 9123 1233</td>
                        <td>
                            <div class="box-status green">Active</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/vendor/registered/active') }}">View</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>V00012
                        <td>The Gentle Vet</td>
                        <td>Vet</td>
                        <td>Jamie Ng</td>
                        <td>+65 9123 1233</td>
                        <td>
                            <div class="box-status red">Rejected</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/account-management/vendor/registered/pending') }}">View</a>
                            <div>
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

        const radioButtons = document.querySelectorAll('input[name="parent"]');
        const boxYes = document.querySelector('.box-yes');
        const boxNo = document.querySelector('.box-no');
        const nextButton = document.querySelector('.box-yes .hvr-button');

        radioButtons.forEach((radio) => {
            radio.addEventListener('change', (event) => {
                if (event.target.value === "Yes") {
                    boxYes.style.display = 'block';
                    boxNo.style.display = 'none';
                    nextButton.removeAttribute('disabled');
                    nextButton.setAttribute('data-coreui-toggle', 'modal');
                    nextButton.setAttribute('data-coreui-target', '#uploadModal');
                } else if (event.target.value === "No") {
                    boxYes.style.display = 'none';
                    boxNo.style.display = 'block';
                    nextButton.setAttribute('disabled', 'true');
                    nextButton.removeAttribute('data-coreui-toggle');
                    nextButton.removeAttribute('data-coreui-target');
                }
            });
        });

        var table = $('.table').DataTable({
            ordering: false,
            lengthChange: false,
            info: false,
            paging: true,
            langustatus: {
                paginate: {
                    previous: `<img src="{{ asset('assets/img/admin/pagination-left.svg') }}" />`,
                    next: `<img src="{{ asset('assets/img/admin/pagination-right.svg') }}" />`,
                }
            },
        });

        $('.search .form-control').on('keyup', function () {
            var searchValue = $(this).val();
            table.search(searchValue).draw();

            var filteredCount = table.rows({ filter: 'applied' }).count();
            if (searchValue.trim() !== '') {
                $('#resultsCount').text(`${filteredCount} results found`);
                $('.result').show();
            } else {
                $('.result').hide();
            }
        });

        $('.icon-drop').on('click', function () {
            $(this).parent().toggleClass('active');
        });

        $('.staus-filter').on('click', function () {
            var status = $(this).data('status');

            if (status) {
                table.column(5).search('^' + status + '$', true, false).draw();
            } else {
                table.column(5).search('').draw();
            }

            $('.dropdown-container').removeClass('active');

            var filteredCount = table.rows({ filter: 'applied' }).count();
            $('#resultsCount').text(`${filteredCount} results found`);
            $('.result').show();
        });

        $(document).on('click', function (e) {
            if (!$(e.target).closest('.dropdown-container').length) {
                $('.dropdown-container').removeClass('active');
            }
        });

        $('#resetButton').on('click', function () {
            table.search('').columns().search('').draw();
            $('.search .form-control').val('');
            $('.result').hide();
            $('ul.dropdown-filter li').removeClass('active');
        });

        $('ul.dropdown-filter li').on('click', function () {
            $('ul.dropdown-filter li').removeClass('active');
            $(this).addClass('active');
        });


        $('.dataTables_wrapper .row .col-md-5:empty').remove();
        $('.dataTables_wrapper .row .col-md-7').removeClass('col-md-7').addClass('col-sm-12');
    });
</script>
@endsection