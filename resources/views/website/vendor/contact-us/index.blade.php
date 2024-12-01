@extends('website.vendor.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="title">Contact Us</div>
        <div class="content">
            <div class="row">
                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label>Contact person name<span class="red">*</span></label>
                            <input type="text" class="form-control" name="" required />
                            <div class="required">This field is required</div>
                        </div>
                        <div class="form-group">
                            <label>Email address<span class="red">*</span></label>
                            <input class="form-control" type="email" name="" required />
                            <div class="required">Please input a valid email address</div>
                        </div>
                        <div class="form-group">
                            <label>Message<span class="red">*</span></label>
                            <textarea class="form-control" type="message" name="" required></textarea>
                            <div class="required">This field is required</div>
                        </div>
                        <div class="link-btn">
                            <button class="hvr-button w200" type="submit" disabled>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="successModal" aria-labelledby="successModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row row4">
                    <div class="col-10 my-auto">
                        <div class="t-pop">Form submitted successfully</div>
                    </div>
                    <div class="col-2 my-auto text-end">
                        <div class="close" data-coreui-dismiss="modal">
                            <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                        </div>
                    </div>
                </div>
                <div class="box-pop success">
                    <div class="img">
                        <img src="{{ asset('assets/img/modal-success.svg') }}" alt="" title="">
                    </div>
                    <div class="bdy">
                        <p>Thank you for reaching out! Your form has been submitted. You should receive a response in your email inbox within the next few working days.</p>
                    </div>
                </div>
                <ul class="l-btn right">
                    <li>
                        <button class="hvr-button white" type="button" data-coreui-dismiss="modal">Close</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="failedModal" aria-labelledby="failedModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row row4">
                    <div class="col-10 my-auto">
                        <div class="t-pop">Failed to submit form</div>
                    </div>
                    <div class="col-2 my-auto text-end">
                        <div class="close" data-coreui-dismiss="modal">
                            <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                        </div>
                    </div>
                </div>
                <div class="box-pop failed">
                    <div class="img">
                        <img src="{{ asset('assets/img/modal-failed.svg') }}" alt="" title="">
                    </div>
                    <div class="bdy">
                        <p>There was an error submitting your form.</p>
                        <p>Please try again.</p>
                    </div>
                </div>
                <ul class="l-btn right">
                    <li>
                        <button class="hvr-button white" type="button" data-coreui-dismiss="modal">Close</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-group-contact a').addClass('active');

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