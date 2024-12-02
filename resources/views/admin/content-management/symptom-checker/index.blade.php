@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Symptom Checker</div>
        <div class="row">
            <div class="col-md-5 my-auto">
                <ul class="l-menu mb0">
                    <li>
                        <a class="active" href="#">Dog</a>
                    </li>
                    <li>
                        <a href="#">Cat</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7 my-auto">
                <ul class="l-btn right">
                    <li>
                        <a data-coreui-toggle="modal" data-coreui-target="#addModal">
                            <button class="hvr-button" type="button">Add symptom</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="css-table mt30">
            <table class="table">
                <thead>
                    <tr>
                        <th>Symptom</th>
                        <th width="30%">Last Updated On</th>
                        <th width="20%">Action(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Coughing</td>
                        <td>01 Nov 2024, 11:20AM</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/content-management/symptom-checker/edit') }}">Edit details</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Blood in Stool</td>
                        <td>01 Nov 2024, 11:20AM</td>
                        <td>
                            <div class="link-global">
                                <a href="{{ URL::to('/admin/content-management/symptom-checker/edit') }}">Edit details</a>
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
            <form action="{{ URL::to('/admin/content-management/symptom-checker/add') }}">
                <div class="mb15">
                    <div class="row row4">
                        <div class="col-10 my-auto">
                            <div class="t-pop">Add symptom for Dog</div>
                        </div>
                        <div class="col-2 my-auto text-end">
                            <div class="close" data-coreui-dismiss="modal">
                                <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Symptom<span class="red">*</span></label>
                    <input type="text" class="form-control" required/>
                </div>
                <ul class="l-btn right">
                    <li>
                        <button class="hvr-button w120 white" data-coreui-dismiss="modal" type="button">Cancel</button>
                    </li>
                    <li>
                        <button class="hvr-button w120" type="submit" disabled>Add</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-group-symptom a').addClass('active');

        var table = $('.table').DataTable({
            ordering: false,
            lengthChange: false,
            searching: false,
            info: false,
            paging: false,
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