@extends('admin.layout.app')

@section('css')
<link href="{{ asset('js/select2/select2.min.css') }}" rel="stylesheet"/>
@endsection

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
        <div class="css-table mt30">
            <table class="table">
                <thead>
                    <tr>
                        <th width="20%">Sequence</th>
                        <th>Name</th>
                        <th width="30%">Last Updated On</th>
                        <th width="20%">Action(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>---</td>
                        <td>Purina Pro Plan</td>
                        <td>01 Nov 2024, 11:20AM</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/content-management/advertisement/edit') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>---</td>
                        <td>Purina Pro Plan</td>
                        <td>01 Nov 2024, 11:20AM</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/content-management/advertisement/edit') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="arrangesequenceModal" aria-labelledby="arrangesequenceModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ URL::to('/admin/content-management/advertisement') }}">
                <div class="mb15">
                    <div class="row row4">
                        <div class="col-10 my-auto">
                            <div class="t-pop">Arrange sequence</div>
                        </div>
                        <div class="col-2 my-auto text-end">
                            <div class="close" data-coreui-dismiss="modal">
                                <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group tbl-form">
                    <div class="tbl">
                        <div class="cell w140">
                            <label>Sequence 1<span class="red">*</span></label>
                        </div>
                        <div class="cell">
                            <div class="css-select">
                                <select name="" id="">
                                    <option></option>
                                    <option value="Purina Pro Plan">Purina Pro Plan</option>
                                    <option value="K9 Natural">K9 Natural</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group tbl-form">
                    <div class="tbl">
                        <div class="cell w140">
                            <label>Sequence 2<span class="red">*</span></label>
                        </div>
                        <div class="cell">
                            <div class="css-select">
                                <select name="" id="">
                                    <option></option>
                                    <option value="Purina Pro Plan">Purina Pro Plan</option>
                                    <option value="K9 Natural">K9 Natural</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="l-btn right">
                    <li>
                        <button class="hvr-button w120 white" data-coreui-dismiss="modal" type="button">Cancel</button>
                    </li>
                    <li>
                        <button class="hvr-button w120" type="submit">Save</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/select2/select2.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-group-advertisement a').addClass('active');

        $('.css-select select').select2({
            allowClear: true,
            placeholder: "Select advertisment",
            minimumResultsForSearch: Infinity
        });

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