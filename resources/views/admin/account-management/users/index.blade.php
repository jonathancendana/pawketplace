@extends('admin.layout.app')

@section('css')
<link href="{{ asset('js/select2/select2.min.css') }}" rel="stylesheet"/>
@endsection

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="row">
            <div class="col-md-5 my-auto">
                <div class="title mb0">Admin Users</div>
            </div>
            <div class="col-md-7 my-auto">
                <ul class="l-btn right">
                    <li>
                        <a data-coreui-toggle="modal" data-coreui-target="#addModal">
                            <button class="hvr-button" type="button">Create Admin User</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="search m30">
            <input type="text" class="form-control" placeholder="Search Name, Role" />
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
                        <th>Name</th>
                        <th>Role</th>
                        <th>Designation</th>
                        <th>Contact no.</th>
                        <th>Action(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <td>A01</td>
                        <td>David Lim</td>
                        <td>
                            <div class="box-status grey">Admin</div>
                        </td>
                        <td>Operations Specialist</td>
                        <td>+65 9876 5432</td>
                        <td>
                            <div class="link-global">
                                <a data-coreui-toggle="modal" data-coreui-target="#editModal">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>A02</td>
                        <td>Jerome Tan</td>
                        <td>
                            <div class="box-status green">Super Admin</div>
                        </td>
                        <td>OperaMarketing Manager</td>
                        <td>+65 9123 1233</td>
                        <td>
                            <div class="link-global">
                                <a data-coreui-toggle="modal" data-coreui-target="#editModal">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>A01</td>
                        <td>David Lim</td>
                        <td>
                            <div class="box-status grey">Admin</div>
                        </td>
                        <td>Operations Specialist</td>
                        <td>+65 9876 5432</td>
                        <td>
                            <div class="link-global">
                                <a data-coreui-toggle="modal" data-coreui-target="#editModal">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td>A02</td>
                        <td>Jerome Tan</td>
                        <td>
                            <div class="box-status green">Super Admin</div>
                        </td>
                        <td>OperaMarketing Manager</td>
                        <td>+65 9123 1233</td>
                        <td>
                            <div class="link-global">
                                <a data-coreui-toggle="modal" data-coreui-target="#editModal">Edit details</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="addModal" aria-labelledby="addModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ URL::to('/admin/account-management/vendor/placeholder') }}">
                <div class="mb15">
                    <div class="row row4">
                        <div class="col-10 my-auto">
                            <div class="t-pop">Add Admin User</div>
                        </div>
                        <div class="col-2 my-auto text-end">
                            <div class="close" data-coreui-dismiss="modal">
                                <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name<span class="red">*</span></label>
                            <input type="text" class="form-control" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact no.<span class="red">*</span></label>
                            <div class="row row4">
                                <div class="col-5">
                                    <div class="css-select">
                                        <select name="" id="">
                                            <option value="+65" selected>+65</option>
                                            <option value="+62">+62</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <input class="form-control only-number" type="text" name="" value="" required />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email address<span class="red">*</span></label>
                    <input type="email" class="form-control" required/>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Role<span class="red">*</span></label>
                            <ul class="l-radio">
                                <li>
                                    <label class="css-checkbox">
                                        <input type="radio" name="services" class="type-radio" value="Admin" required>
                                        <span class="checkmark"></span>
                                        <div class="text">Admin</div>
                                    </label>
                                </li>
                                <li>
                                    <label class="css-checkbox">
                                        <input type="radio" name="services" class="type-radio" value="Super Admin" required>
                                        <span class="checkmark"></span>
                                        <div class="text">Super Admin</div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Designation<span class="red">*</span></label>
                            <input type="text" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <ul class="l-btn right">
                    <li>
                        <button class="hvr-button w120 white" data-coreui-dismiss="modal" type="button">Cancel</button>
                    </li>
                    <li>
                        <a data-coreui-toggle="modal" data-coreui-target="#successModal">
                            <button class="hvr-button w120" type="submit" disabled>Create</button>
                        </a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ URL::to('/admin/account-management/vendor/placeholder') }}">
                <div class="mb15">
                    <div class="row row4">
                        <div class="col-10 my-auto">
                            <div class="t-pop">Edit Admin User</div>
                        </div>
                        <div class="col-2 my-auto text-end">
                            <div class="close" data-coreui-dismiss="modal">
                                <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name<span class="red">*</span></label>
                                <input type="text" class="form-control" required value="Jerome Tan"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact no.<span class="red">*</span></label>
                                <div class="row row4">
                                    <div class="col-5">
                                        <div class="css-select">
                                            <select name="" id="">
                                                <option value="+65" selected>+65</option>
                                                <option value="+62">+62</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <input class="form-control only-number" type="text" name="" value="91231233" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email address<span class="red">*</span></label>
                        <input type="email" class="form-control" required value="jerometan@gmail.com"/>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Role<span class="red">*</span></label>
                                <ul class="l-radio">
                                    <li>
                                        <label class="css-checkbox">
                                            <input type="radio" name="services" checked class="type-radio" value="Admin" required>
                                            <span class="checkmark"></span>
                                            <div class="text">Admin</div>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="css-checkbox">
                                            <input type="radio" name="services" class="type-radio" value="Super Admin" required>
                                            <span class="checkmark"></span>
                                            <div class="text">Super Admin</div>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Designation<span class="red">*</span></label>
                                <input type="text" class="form-control" required value="Marketing Manager"/>
                            </div>
                        </div>
                    </div>
                    <ul class="l-btn right">
                        <li>
                            <button class="hvr-button w120 white" data-coreui-dismiss="modal" type="button">Cancel</button>
                        </li>
                        <li>
                            <a data-coreui-toggle="modal" data-coreui-target="#successModal">
                                <button class="hvr-button w120" type="submit">Create</button>
                            </a>
                        </li>
                    </ul>
                </form>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="successModal" aria-labelledby="successModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ URL::to('/admin/account-management/users') }}">
                <div class="mb15">
                    <div class="row row4">
                        <div class="col-10 my-auto">
                            <div class="t-pop">Admin user created</div>
                        </div>
                        <div class="col-2 my-auto text-end">
                            <div class="close" data-coreui-dismiss="modal">
                                <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-pop success">
                    <div class="img">
                        <img src="{{ asset('assets/img/modal-success.svg') }}" alt="" title="">
                    </div>
                    <div class="bdy">
                        <p>Application approved and vendor’s shop is now published on PawketPlace website.</p>
                    </div>
                </div>
                <ul class="l-btn right">
                    <li>
                        <button class="hvr-button w120 white" type="submit">Close</button>
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
        $('.nav-group-users a').addClass('active');

        $('.css-select select').select2({
            allowClear: true,
            minimumResultsForSearch: Infinity
        });

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
    });

    document.addEventListener('DOMContentLoaded', () => {
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input[required], select[required]');
        const submitButton = form.querySelector('button[type="submit"]');

        const checkRequiredFields = () => {
            const allFilled = Array.from(inputs).every(input => {
                if (input.type === 'radio') {
                    return form.querySelector(`input[name="${input.name}"]:checked`) !== null;
                }
                return input.value.trim() !== '';
            });

            submitButton.disabled = !allFilled;
        };
        inputs.forEach(input => {
            if (input.type === 'radio') {
                const radios = form.querySelectorAll(`input[name="${input.name}"]`);
                radios.forEach(radio => radio.addEventListener('change', checkRequiredFields));
            } else {
                input.addEventListener('input', checkRequiredFields);
            }
        });
        checkRequiredFields();
    });
</script>
@endsection