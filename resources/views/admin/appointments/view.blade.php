@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Appointments</div>
        <div class="search">
            <input type="text" class="form-control" name="" placeholder="Search ID, Shop Name or Pet Owner" />
            <div class="abs"><img src="{{ asset('assets/img/admin/search.svg') }}" alt="" title=""/></div>
        </div>
        <div class="css-date calender-from-to">
            <ul>
                <li>
                    <input type="text" class="form-control" id="from" name="from" readonly placeholder="Start Date">
                </li>
                <li class="to">-</li>
                <li>
                    <input type="text" class="form-control" id="to" name="to" readonly placeholder="End Date">
                </li>
            </ul>
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
                        <th>Date</th>
                        <th>Time</th>
                        <th>Shop Name</th>
                        <th>Pet Owner</th>
                        <th>
                            Status 
                            <div class="dropdown-container">
                                <span class="icon-drop"><img src="{{ asset('assets/img/admin/status.svg') }}" alt="" title=""/></span>
                                <ul class="dropdown-filter">
                                    <li class="staus-filter" data-status="Pending">Pending</li>
                                    <li class="staus-filter" data-status="Did not attend">Did not attend</li>
                                    <li class="staus-filter" data-status="Booked">Booked</li>
                                    <li class="staus-filter" data-status="Completed">Completed</li>
                                    <li class="staus-filter" data-status="Cancelled">Cancelled</li>
                                </ul>
                            </div>
                        </th>
                        <th>Action(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0023</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>The Gentle Vet</td>
                        <td>Janet Tan</td>
                        <td>
                            <div class="box-status green">Booked</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/booked') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0022</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>Healthy Paws Clinic</td>
                        <td>Cheryl Lim</td>
                        <td>
                            <div class="box-status green">Booked</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/booked') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0021</td>
                        <td>---</td>
                        <td>---</td>
                        <td>Whiskers & Wags Vet</td>
                        <td>Jason Ng</td>
                        <td>
                            <div class="box-status yellow">Pending</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/pending') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0020</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>Purrfect Health Vet</td>
                        <td>Ethan Ong</td>
                        <td>
                            <div class="box-status grey">Did not attend</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/no-show') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0019</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>AllPaws Vet Care</td>
                        <td>Natalie Wong</td>
                        <td>
                            <div class="box-status green">Completed</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/completed') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0018</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>Four-Legged Vets</td>
                        <td>Ryan Koh</td>
                        <td>
                            <div class="box-status green">Completed</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/completed') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0018</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>Harmony Vet Care</td>
                        <td>Michelle Teo</td>
                        <td>
                            <div class="box-status light-grey">Cancelled</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/cancelled') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0023</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>The Gentle Vet</td>
                        <td>Janet Tan</td>
                        <td>
                            <div class="box-status green">Booked</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/booked') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0022</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>Healthy Paws Clinic</td>
                        <td>Cheryl Lim</td>
                        <td>
                            <div class="box-status green">Booked</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/booked') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0021</td>
                        <td>---</td>
                        <td>---</td>
                        <td>Whiskers & Wags Vet</td>
                        <td>Jason Ng</td>
                        <td>
                            <div class="box-status yellow">Pending</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/pending') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0020</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>Purrfect Health Vet</td>
                        <td>Ethan Ong</td>
                        <td>
                            <div class="box-status grey">Did not attend</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/no-show') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0019</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>AllPaws Vet Care</td>
                        <td>Natalie Wong</td>
                        <td>
                            <div class="box-status green">Completed</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/completed') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0018</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>Four-Legged Vets</td>
                        <td>Ryan Koh</td>
                        <td>
                            <div class="box-status green">Completed</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/completed') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0018</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>Harmony Vet Care</td>
                        <td>Michelle Teo</td>
                        <td>
                            <div class="box-status light-grey">Cancelled</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/cancelled') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0023</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>The Gentle Vet</td>
                        <td>Janet Tan</td>
                        <td>
                            <div class="box-status green">Booked</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/booked') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0022</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>Healthy Paws Clinic</td>
                        <td>Cheryl Lim</td>
                        <td>
                            <div class="box-status green">Booked</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/booked') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0021</td>
                        <td>---</td>
                        <td>---</td>
                        <td>Whiskers & Wags Vet</td>
                        <td>Jason Ng</td>
                        <td>
                            <div class="box-status yellow">Pending</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/pending') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0020</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>Purrfect Health Vet</td>
                        <td>Ethan Ong</td>
                        <td>
                            <div class="box-status grey">Did not attend</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/no-show') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0019</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>AllPaws Vet Care</td>
                        <td>Natalie Wong</td>
                        <td>
                            <div class="box-status green">Completed</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/completed') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0018</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>Four-Legged Vets</td>
                        <td>Ryan Koh</td>
                        <td>
                            <div class="box-status green">Completed</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/completed') }}">View details</a>
                            <div>
                        </td>
                    </tr>
                    <tr>
                        <td>0018</td>
                        <td>Thursday 28 Nov 2024</td>
                        <td>1:30PM</td>
                        <td>Harmony Vet Care</td>
                        <td>Michelle Teo</td>
                        <td>
                            <div class="box-status light-grey">Cancelled</div>
                        </td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/appointments/view/cancelled') }}">View details</a>
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
        $('.nav-group-appointments a').addClass('active');

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

        var dateFormat = "dd M yy",
        from = $("#from").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            dateFormat: dateFormat,
            changeMonth: true,
            changeYear: true,
            onSelect: function (selectedDate) {
                to.datepicker("option", "minDate", selectedDate);
            }
        }),
        to = $("#to").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            dateFormat: dateFormat,
            onSelect: function (selectedDate) {
                from.datepicker("option", "maxDate", selectedDate);
            },
            beforeShowDay: function (date) {
                var fromDate = $("#from").datepicker("getDate");
                var toDate = $("#to").datepicker("getDate");
                if (fromDate && toDate && date >= fromDate && date <= toDate) {
                    return [true, "highlight", ""];
                }
                return [true, "", ""];
            }
        });
        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }
            return date;
        }
    });
</script>
@endsection