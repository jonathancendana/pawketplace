@extends('admin.layout.app')

@section('content')
<div class="pb50">
    <div class="container">
        @include('admin.analytics.menu')
        <div class="mb35">
            <div class="row">
                <div class="col-xl-5 my-auto">
                    <ul class="l-total-dash">
                        <li>
                            <div class="item-dash">
                                <div class="total">Total Profit</div>
                                <div class="price">$0</div>
                                <ul class="list grey">
                                    <li>= 0%</li>
                                    <li>vs last month</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-7 my-auto">
                    <div class="row row-dash">
                        <div class="col-7-dash my-auto">
                            <div class="search full">
                                <input type="text" class="form-control" name="" placeholder="Search by VRN or Rental Agreement No." />
                                <div class="abs"><img src="{{ asset('assets/img/admin/search.svg') }}" alt="" title=""/></div>
                            </div>
                        </div>
                        <div class="col-5-dash my-auto">
                            <div class="css-date calender-from-to">
                                <div class="input-img">
                                    <img src="{{ asset('assets/img/admin/calendar.svg') }}" alt="" title=""/>
                                </div>
                                <ul>
                                    <li>
                                        <input type="text" class="form-control" id="from" name="from" readonly placeholder="Select Date">
                                    </li>
                                    <li class="to">-</li>
                                    <li>
                                        <input type="text" class="form-control" id="to" name="to" readonly placeholder="Select Date">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="box-empty">
                <div class="img">
                    <img src="{{ asset('assets/img/admin/empty.svg') }}" alt="" title=""/>
                </div>
                <div class="t1">No data available</div>
                <div class="t2">Create your vehicle, customer and rental now to get started!</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-profit').addClass('active');

        var dateFormat = "d/mm/yy",
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