@extends('admin.layout.app')

@section('css')
<link href="{{ asset('js/select2/select2.min.css') }}" rel="stylesheet"/>
@endsection

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="back">
            <a href="{{ URL::to('/admin/account-management/vendor/placeholder') }}"><img src="{{ asset('assets/img/admin/back.svg') }}" alt="" title=""> <span class="text">Back to listings</span></a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="{{ URL::to('/admin/account-management/vendor/placeholder') }}">
                    <div class="title">Placeholder Vendor</div>
                    <div class="form-group">
                        <label>Category</label>
                        <div class="css-select">
                            <select name="" id="">
                                <option></option>
                                <option value="Category 1">Category 1</option>
                                <option value="Category 2">Category 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Shop’s name</label>
                        <input type="text" class="form-control" value=""/>
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" class="form-control" value=""/>
                    </div>
                    <div class="form-group">
                        <label>Shop’s address line 1</label>
                        <input type="text" class="form-control" value=""/>
                    </div>
                    <div class="form-group">
                        <label>Shop’s address line 2</label>
                        <input type="text" class="form-control" value=""/>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Shop’s Postal code</label>
                                <input type="text" class="form-control" value=""/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Shop’s contact no.</label>
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
                        <label>Shop’s email address</label>
                        <input type="text" class="form-control" value=""/>
                    </div>
                    <div class="form-group">
                        <label>Photo<span class="red">*</span></label>
                        <div class="upload-container">
                            <div class="upload-button">Upload file</div>
                            <input type="file" class="file-input" accept="image/*" required style="display: none;">
                        </div>
                        <div class="note">
                            <div>Only PNG, JPG, and PDF files are accepted. Maximum file size: 2MB.</div>
                            <div>File dimension should be XXXpx by XXXpx</div>
                        </div>
                    </div>
                    <div class="t-form">Shop’s details</div>
                    <div class="form-group">
                        <label>Operating hours</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text flex left big"><span class="day">Mon</span> <input type="text" class="form-control" name="" required placeholder="9:30am–1pm, 2:30–8:30pm" required/></div>
                                <div class="text flex left big"><span class="day">Tue</span> <input type="text" class="form-control" name="" required placeholder="9:30am–1pm, 2:30–8:30pm" required/></div>
                                <div class="text flex left big"><span class="day">Wed</span> <input type="text" class="form-control" name="" required placeholder="9:30am–1pm, 2:30–8:30pm" required/></div>
                                <div class="text flex left big"><span class="day">Thu</span> <input type="text" class="form-control" name="" required placeholder="9:30am–1pm, 2:30–8:30pm" required/></div>
                            </div>
                            <div class="col-md-6">
                                <div class="text flex left big"><span class="day">Fri</span> <input type="text" class="form-control" name="" required placeholder="9:30am–1pm, 2:30–8:30pm" required/></div>
                                <div class="text flex left big"><span class="day">Sat</span> <input type="text" class="form-control" name="" required placeholder="9:30am–1pm, 2:30–8:30pm" required/></div>
                                <div class="text flex left big"><span class="day">Sun</span> <input type="text" class="form-control" name="" required placeholder="9:30am–1pm, 2:30–8:30pm" required/></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Additional services</label>
                        <ul class="l-radio">
                            <li>
                                <label class="css-radio">
                                    <input type="radio" name="services" class="type-radio" value="24/7 Emergency">
                                    <span class="checkmark"></span>
                                    <div class="text">24/7 Emergency</div>
                                </label>
                            </li>
                            <li>
                                <label class="css-radio">
                                    <input type="radio" name="services" class="type-radio" value="Vet Specialist">
                                    <span class="checkmark"></span>
                                    <div class="text">Vet Specialist</div>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <ul class="l-btn center mt50">
                        <li>
                            <a href="{{ URL::to('/admin/account-management/vendor/placeholder') }}">
                                <button class="hvr-button white" type="button">Back</button>
                            </a>
                        </li>
                        <li>
                            <button class="hvr-button" type="submit" disabled>Save</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/select2/select2.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-group-vendor a').addClass('active');

        $('.css-select select').select2({
            allowClear: true,
            placeholder: "Select",
            minimumResultsForSearch: Infinity
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

    const uploadButton = document.querySelector('.upload-button');
    const fileInput = document.querySelector('.file-input');

    function removeFileInfo() {
        const fileInfo = document.querySelector('.file-info');
        if (fileInfo) {
            fileInfo.remove();
            fileInput.value = '';
        }
    }
    const removeButton = document.querySelector('.remove-btn');
    if (removeButton) {
        removeButton.onclick = removeFileInfo;
    }
    uploadButton.onclick = () => fileInput.click();
    fileInput.onchange = () => {
        if (fileInput.files[0]) {
            removeFileInfo();

            const file = fileInput.files[0];
            const fileInfo = document.createElement('div');
            fileInfo.className = 'file-info';

            fileInfo.innerHTML = `
                <img src="{{ asset('assets/img/admin/upload.svg') }}" alt="Preview">
                <span>${file.name}</span>
                <button class="remove-btn">Remove</button>
            `;
            document.querySelector('.upload-container').insertBefore(fileInfo, uploadButton);
            fileInfo.querySelector('.remove-btn').onclick = removeFileInfo;
        }
    };
</script>
@endsection