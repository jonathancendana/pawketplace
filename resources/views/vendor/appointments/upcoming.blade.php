@extends('vendor.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Appointments</div>
        <ul class="l-menu">
            <li>
                <a class="active" href="{{ URL::to('/vendor/appointments/upcoming') }}">Upcoming</a>
            </li>
            <li>
                <a href="{{ URL::to('/vendor/appointments/history') }}">History</a>
            </li>
        </ul>
        <div class="mb25">
            <form>
                <div class="search">
                    <input type="text" class="form-control" name="" placeholder="Search ID, Pet Owner or Contact No." />
                    <div class="abs"><img src="{{ asset('assets/img/admin/search.svg') }}" alt="" title=""/></div>
                </div>
            </form>
        </div>
        <div class="content">
            <div class="tab-content">
                <div class="table-responsive css-table scroll">
                    <table class="table">
                        <thead>
                            <tr class="align-middle">
                                <th width="70">ID</th>
                                <th width="160">Date</th>
                                <th width="80">Time</th>
                                <th width="130">Pet Owner</th>
                                <th width="130">Contact No.</th>
                                <th width="100">Pet(s)</th>
                                <th width="130">Status <a><img src="{{ asset('assets/img/admin/status.svg') }}" alt="" title=""/></a></th>
                                <th width="80">Action(s)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td>0049</td>
                                <td>Friday 8 Nov 2024</td>
                                <td>3:30PM</td>
                                <td>Janet Tan</td>
                                <td>+65 9233 1244</td>
                                <td>1</td>
                                <td>
                                    <div class="box red">Action required</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#required1Modal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0035</td>
                                <td>Monday 11 Nov 2024</td>
                                <td>4:00PM</td>
                                <td>Jamie Ng</td>
                                <td>+65 9233 1244</td>
                                <td>1</td>
                                <td>
                                    <div class="box green">Booked</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#bookedModal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0045</td>
                                <td>---</td>
                                <td>---</td>
                                <td>Alex Tan</td>
                                <td>+65 9233 1244</td>
                                <td>2</td>
                                <td>
                                    <div class="box yellow">Pending</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#pendingModal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0049</td>
                                <td>---</td>
                                <td>---</td>
                                <td>Jean Ong</td>
                                <td>+65 9233 1244</td>
                                <td>2</td>
                                <td>
                                    <div class="box red">Action required</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#required2Modal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0049</td>
                                <td>Friday 8 Nov 2024</td>
                                <td>3:30PM</td>
                                <td>Janet Tan</td>
                                <td>+65 9233 1244</td>
                                <td>1</td>
                                <td>
                                    <div class="box red">Action required</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#required1Modal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0035</td>
                                <td>Monday 11 Nov 2024</td>
                                <td>4:00PM</td>
                                <td>Jamie Ng</td>
                                <td>+65 9233 1244</td>
                                <td>1</td>
                                <td>
                                    <div class="box green">Booked</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#bookedModal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0045</td>
                                <td>---</td>
                                <td>---</td>
                                <td>Alex Tan</td>
                                <td>+65 9233 1244</td>
                                <td>2</td>
                                <td>
                                    <div class="box yellow">Pending</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#pendingModal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0049</td>
                                <td>---</td>
                                <td>---</td>
                                <td>Jean Ong</td>
                                <td>+65 9233 1244</td>
                                <td>2</td>
                                <td>
                                    <div class="box red">Action required</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#required2Modal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0049</td>
                                <td>Friday 8 Nov 2024</td>
                                <td>3:30PM</td>
                                <td>Janet Tan</td>
                                <td>+65 9233 1244</td>
                                <td>1</td>
                                <td>
                                    <div class="box red">Action required</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#required1Modal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0035</td>
                                <td>Monday 11 Nov 2024</td>
                                <td>4:00PM</td>
                                <td>Jamie Ng</td>
                                <td>+65 9233 1244</td>
                                <td>1</td>
                                <td>
                                    <div class="box green">Booked</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#bookedModal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0045</td>
                                <td>---</td>
                                <td>---</td>
                                <td>Alex Tan</td>
                                <td>+65 9233 1244</td>
                                <td>2</td>
                                <td>
                                    <div class="box yellow">Pending</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#pendingModal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0049</td>
                                <td>---</td>
                                <td>---</td>
                                <td>Jean Ong</td>
                                <td>+65 9233 1244</td>
                                <td>2</td>
                                <td>
                                    <div class="box red">Action required</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#required2Modal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0049</td>
                                <td>Friday 8 Nov 2024</td>
                                <td>3:30PM</td>
                                <td>Janet Tan</td>
                                <td>+65 9233 1244</td>
                                <td>1</td>
                                <td>
                                    <div class="box red">Action required</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#required1Modal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0035</td>
                                <td>Monday 11 Nov 2024</td>
                                <td>4:00PM</td>
                                <td>Jamie Ng</td>
                                <td>+65 9233 1244</td>
                                <td>1</td>
                                <td>
                                    <div class="box green">Booked</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#bookedModal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0045</td>
                                <td>---</td>
                                <td>---</td>
                                <td>Alex Tan</td>
                                <td>+65 9233 1244</td>
                                <td>2</td>
                                <td>
                                    <div class="box yellow">Pending</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#pendingModal">View</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>0049</td>
                                <td>---</td>
                                <td>---</td>
                                <td>Jean Ong</td>
                                <td>+65 9233 1244</td>
                                <td>2</td>
                                <td>
                                    <div class="box red">Action required</div>
                                </td>
                                <td>
                                    <a class="link" data-coreui-toggle="modal" data-coreui-target="#required2Modal">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="required1Modal" aria-labelledby="required1Modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row">
                    <div class="col-sm-7 my-auto">
                        <div class="t-pop">View appointment details</div>
                    </div>
                    <div class="col-sm-5 my-auto text-sm-end">
                        <ul class="l-list resp">
                            <li>
                                <div class="box red min100">Action required</div>
                            </li>
                            <li>
                                <div class="close" data-coreui-dismiss="modal">
                                    <img class="img" src="{{ asset('assets/img/admin/close.svg') }}" alt="" title=""/>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="t2-pop">Appointment details</div>
            <form method="POST" action="">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>ID</label>
                            <div class="text">0049</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Date & time</label>
                            <div class="text">Friday 8 Nov 2024</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Pet owner</label>
                            <div class="text">Janet Tan</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Contact no.</label>
                            <div class="text">+65 9123 1233</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>No. of pets</label>
                            <div class="text">1</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Pet(s)</label>
                            <div class="text">
                                <a href="{{ URL::to('/vendor/appointments/view') }}" target="_blank">Melon</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Remarks</label>
                    <div class="text">Excessive shedding and bald patches</div>
                </div>
                <div class="t2-pop">Attendence</div>
                <div class="form-group">
                    <label>Did pet parent and pet(s) show up?<span class="red">*</span></label>
                    <ul class="l-radio">
                        <li>
                            <label class="css-checkbox">
                                <input type="radio" name="parent" value="Yes">
                                <span class="checkmark"></span>
                                <div class="text">Yes</div>
                            </label>
                        </li>
                        <li>
                            <label class="css-checkbox">
                                <input type="radio" name="parent" value="No">
                                <span class="checkmark"></span>
                                <div class="text">No</div>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="box-yes">
                    <ul class="l-btn right">
                        <li>
                            <button class="hvr-button" type="button" disabled>Next</button>
                        </li>
                    </ul>
                </div>
                <div class="box-no" style="display: none;">
                    <ul class="l-btn right">
                        <li>
                            <button class="hvr-button white" type="button" data-coreui-dismiss="modal">Close</button>
                        </li>
                        <li>
                            <button class="hvr-button" type="submit">Confirm</button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="bookedModal" aria-labelledby="bookedModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row">
                    <div class="col-sm-7 my-auto">
                        <div class="t-pop">View appointment details</div>
                    </div>
                    <div class="col-sm-5 my-auto text-sm-end">
                        <ul class="l-list resp">
                            <li>
                                <div class="box green min100">Booked</div>
                            </li>
                            <li>
                                <div class="close" data-coreui-dismiss="modal">
                                    <img class="img" src="{{ asset('assets/img/admin/close.svg') }}" alt="" title=""/>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="desc">The pet owner has shared his/her available timings. Select an option to confirm his/her booking or propose new slots.</div>
            <div class="t2-pop">Appointment details</div>
            <form method="POST" action="">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>ID</label>
                            <div class="text">0049</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Date & time</label>
                            <div class="text">11 Nov 2024 Monday</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Pet owner</label>
                            <div class="text">Jamie Ng</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Contact no.</label>
                            <div class="text">+65 9123 1233</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>No. of pets</label>
                            <div class="text">1</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Pet(s)</label>
                            <div class="text">
                                <a href="{{ URL::to('/vendor/appointments/view') }}" target="_blank">Mochi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Remarks</label>
                    <div class="text">Excessive shedding and bald patches</div>
                </div>
                <ul class="l-btn right">
                    <li>
                        <div class="cancel" data-coreui-toggle="modal" data-coreui-target="#cancelBookingModal">Cancel appointment</div>
                    </li>
                    <li>
                        <button class="hvr-button white" type="button" data-coreui-dismiss="modal">Close</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="cancelBookingModal" aria-labelledby="cancelBookingModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row">
                    <div class="col-8 my-auto">
                        <div class="t-pop">Cancel appointment</div>
                    </div>
                    <div class="col-4 my-auto text-end">
                        <ul class="l-list">
                            <li>
                                <div class="close" data-coreui-dismiss="modal">
                                    <img class="img" src="{{ asset('assets/img/admin/close.svg') }}" alt="" title=""/>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="desc">Are you sure you want to cancel this appointment?</div>
            <ul class="l-btn right">
                <li>
                    <button class="hvr-button white" type="button" data-coreui-toggle="modal" data-coreui-target="#bookedModal">Back</button>
                </li>
                <li>
                    <button class="hvr-button" type="button" data-coreui-dismiss="modal">Confirm</button>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="pendingModal" aria-labelledby="pendingModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row">
                    <div class="col-sm-7 my-auto">
                        <div class="t-pop">View appointment details</div>
                    </div>
                    <div class="col-sm-5 my-auto text-sm-end">
                        <ul class="l-list resp">
                            <li>
                                <div class="box yellow min100">Pending</div>
                            </li>
                            <li>
                                <div class="close" data-coreui-dismiss="modal">
                                    <img class="img" src="{{ asset('assets/img/admin/close.svg') }}" alt="" title=""/>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="desc">The pet owner has shared his/her available timings. Select an option to confirm his/her booking or propose new slots.</div>
            <div class="t2-pop">Appointment details</div>
            <form method="POST" action="">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>ID</label>
                            <div class="text">0049</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Pet owner</label>
                            <div class="text">Jamie Ng</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Contact no.</label>
                            <div class="text">+65 9123 1233</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>No. of pets</label>
                            <div class="text">1</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Pet(s)</label>
                            <div class="text">
                                <a href="{{ URL::to('/vendor/appointments/view') }}" target="_blank">Mochi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Remarks</label>
                    <div class="text">Excessive shedding and bald patches</div>
                </div>
                <div class="bdr-pop"></div>
                <div class="t2-pop">Proposed slots</div>
                <div class="form-group mb15">
                    <label>Slot 1</label>
                    <div class="text">Monday 11 Nov 2024, 2:00PM</div>
                </div>
                <div class="form-group mb15">
                    <label>Slot 2</label>
                    <div class="text">Wednesday 13 Nov 2024, 3:30PM</div>
                </div>
                <div class="form-group">
                    <label>Slot 3</label>
                    <div class="text">Thursday 14 Nov 2024, 1:30PM</div>
                </div>
                <ul class="l-btn right">
                    <li>
                        <div class="cancel" data-coreui-toggle="modal" data-coreui-target="#cancelPendingModal">Cancel appointment</div>
                    </li>
                    <li>
                        <button class="hvr-button white" type="button" data-coreui-dismiss="modal">Close</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="cancelPendingModal" aria-labelledby="cancelPendingModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row">
                    <div class="col-8 my-auto">
                        <div class="t-pop">Cancel appointment</div>
                    </div>
                    <div class="col-4 my-auto text-end">
                        <ul class="l-list">
                            <li>
                                <div class="close" data-coreui-dismiss="modal">
                                    <img class="img" src="{{ asset('assets/img/admin/close.svg') }}" alt="" title=""/>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="desc">Are you sure you want to cancel this appointment?</div>
            <ul class="l-btn right">
                <li>
                    <button class="hvr-button white" type="button" data-coreui-toggle="modal" data-coreui-target="#pendingModal">Back</button>
                </li>
                <li>
                    <button class="hvr-button" type="button" data-coreui-dismiss="modal">Confirm</button>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="required2Modal" aria-labelledby="required2Modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row">
                    <div class="col-sm-7 my-auto">
                        <div class="t-pop">View appointment details</div>
                    </div>
                    <div class="col-sm-5 my-auto text-sm-end">
                        <ul class="l-list resp">
                            <li>
                                <div class="box red min100">Action required</div>
                            </li>
                            <li>
                                <div class="close" data-coreui-dismiss="modal">
                                    <img class="img" src="{{ asset('assets/img/admin/close.svg') }}" alt="" title=""/>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="desc">The pet owner has shared his/her available timings. Select an option to confirm his/her booking or propose new slots.</div>
            <div class="t2-pop">Appointment details</div>
            <form method="POST" action="">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>ID</label>
                            <div class="text">0049</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Pet owner</label>
                            <div class="text">Jamie Ng</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Contact no.</label>
                            <div class="text">+65 9123 1233</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>No. of pets</label>
                            <div class="text">1</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Pet(s)</label>
                            <div class="text">
                                <a href="{{ URL::to('/vendor/appointments/view') }}" target="_blank">Mochi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Remarks</label>
                    <div class="text">Excessive shedding and bald patches</div>
                </div>
                <div class="bdr-pop"></div>
                <div class="t2-pop">Proposed slots</div>
                <div class="form-group slot">
                    <div class="row">
                        <div class="col-8 my-auto">
                            <div class="text">Monday 11 Nov 2024, 2:00PM</div>
                        </div>
                        <div class="col-4 my-auto text-end">
                            <div class="select" data-coreui-toggle="modal" data-coreui-target="#selectSlotModal">Select slot</div>
                        </div>
                    </div>
                </div>
                <div class="form-group slot">
                    <div class="row">
                        <div class="col-8 my-auto">
                            <div class="text">Wednesday 13 Nov 2024, 3:30PM</div>
                        </div>
                        <div class="col-4 my-auto text-end">
                            <div class="select" data-coreui-toggle="modal" data-coreui-target="#selectSlotModal">Select slot</div>
                        </div>
                    </div>
                </div>
                <div class="form-group slot mb30">
                    <div class="row">
                        <div class="col-8 my-auto">
                            <div class="text">Thursday 14 Nov 2024, 1:30PM</div>
                        </div>
                        <div class="col-4 my-auto text-end">
                            <div class="select" data-coreui-toggle="modal" data-coreui-target="#selectSlotModal">Select slot</div>
                        </div>
                    </div>
                </div>
                <ul class="l-btn right">
                    <li>
                        <div class="cancel" data-coreui-toggle="modal" data-coreui-target="#cancelRequiredModal">Cancel appointment</div>
                    </li>
                    <li>
                        <button class="hvr-button white" type="button" data-coreui-toggle="modal" data-coreui-target="#proposeModal">Propose other slots</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="selectSlotModal" aria-labelledby="selectSlotModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row">
                    <div class="col-8 my-auto">
                        <div class="t-pop">Select appointment slot</div>
                    </div>
                    <div class="col-4 my-auto text-end">
                        <ul class="l-list">
                            <li>
                                <div class="close" data-coreui-dismiss="modal">
                                    <img class="img" src="{{ asset('assets/img/admin/close.svg') }}" alt="" title=""/>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="desc">Confirm appointment booking for Tuesday 12 Nov 2024, 4:00PM.</div>
            <ul class="l-btn right">
                <li>
                    <button class="hvr-button white" type="button" data-coreui-toggle="modal" data-coreui-target="#required2Modal">Back</button>
                </li>
                <li>
                    <button class="hvr-button" type="button" data-coreui-dismiss="modal">Confirm</button>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="cancelRequiredModal" aria-labelledby="cancelRequiredModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row">
                    <div class="col-8 my-auto">
                        <div class="t-pop">Cancel appointment</div>
                    </div>
                    <div class="col-4 my-auto text-end">
                        <ul class="l-list">
                            <li>
                                <div class="close" data-coreui-dismiss="modal">
                                    <img class="img" src="{{ asset('assets/img/admin/close.svg') }}" alt="" title=""/>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="desc">Are you sure you want to cancel this appointment?</div>
            <ul class="l-btn right">
                <li>
                    <button class="hvr-button white" type="button" data-coreui-toggle="modal" data-coreui-target="#required2Modal">Back</button>
                </li>
                <li>
                    <button class="hvr-button" type="button" data-coreui-dismiss="modal">Confirm</button>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-group-appointments a').addClass('active');

        var userTable = $('.table').DataTable({
            dom: 'lrtip',
            order: [],
            searching: false,
            paging: true,
            lengthChange: false,
            ordering: false,
            info: true,
            pageLength: 10,
            scrollX: true,
            scrollCollapse: true,
            language: {
                paginate: {
                    previous: `<img src="{{ asset('assets/img/admin/pagination-left.svg') }}" />`,
                    next: `<img src="{{ asset('assets/img/admin/pagination-right.svg') }}" />`,
                }
            },
        });

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
    });
</script>
@endsection