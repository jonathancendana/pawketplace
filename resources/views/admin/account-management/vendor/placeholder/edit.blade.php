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
                                <option value="Category 1" selected>Category 1</option>
                                <option value="Category 2">Category 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Shop’s name</label>
                        <input type="text" class="form-control" value="FurEver Friends Academy"/>
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" class="form-control" value="www.facebook.com/fureverfriendsacademy"/>
                    </div>
                    <div class="form-group">
                        <label>Shop’s address line 1</label>
                        <input type="text" class="form-control" value="291 Tanjong Katong Rd"/>
                    </div>
                    <div class="form-group">
                        <label>Shop’s address line 2</label>
                        <input type="text" class="form-control" value="291 Tanjong Katong Rd"/>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Shop’s Postal code</label>
                                <input type="text" class="form-control" value="437074"/>
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
                                        <input class="form-control only-number" type="text" name="" value="123123" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Shop’s email address</label>
                        <input type="text" class="form-control" value="hi@thegentlevet.sg"/>
                    </div>
                    <div class="form-group">
                        <label>Photo<span class="red">*</span></label>
                        <div class="upload-container">
                            <div class="file-info">
                                <img src="{{ asset('assets/img/admin/upload.svg') }}" alt="Preview">
                                <span>bg-plan.png</span>
                                <button class="remove-btn">Remove</button>
                            </div>
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
                                <div class="text flex left big"><span class="day">Mon</span> <input type="text" class="form-control" name="" required value="9:30am–1pm, 2:30–8:30pm" required/></div>
                                <div class="text flex left big"><span class="day">Tue</span> <input type="text" class="form-control" name="" required value="9:30am–1pm, 2:30–8:30pm" required/></div>
                                <div class="text flex left big"><span class="day">Wed</span> <input type="text" class="form-control" name="" required value="9:30am–1pm, 2:30–8:30pm" required/></div>
                                <div class="text flex left big"><span class="day">Thu</span> <input type="text" class="form-control" name="" required value="9:30am–1pm, 2:30–8:30pm" required/></div>
                            </div>
                            <div class="col-md-6">
                                <div class="text flex left big"><span class="day">Fri</span> <input type="text" class="form-control" name="" required value="9:30am–1pm, 2:30–8:30pm" required/></div>
                                <div class="text flex left big"><span class="day">Sat</span> <input type="text" class="form-control" name="" required value="9:30am–1pm, 2:30–8:30pm" required/></div>
                                <div class="text flex left big"><span class="day">Sun</span> <input type="text" class="form-control" name="" required value="9:30am–1pm, 2:30–8:30pm" required/></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Additional services</label>
                        <ul class="l-radio">
                            <li>
                                <label class="css-radio">
                                    <input type="radio" checked name="services" value="24/7 Emergency">
                                    <span class="checkmark"></span>
                                    <div class="text">24/7 Emergency</div>
                                </label>
                            </li>
                            <li>
                                <label class="css-radio">
                                    <input type="radio" name="services" value="Vet Specialist">
                                    <span class="checkmark"></span>
                                    <div class="text">Vet Specialist</div>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <ul class="l-btn center mt50">
                        <li>
                            <a class="bdr" data-coreui-toggle="modal" data-coreui-target="#deleteModal">Delete Vendor</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/admin/account-management/vendor/placeholder') }}">
                                <button class="hvr-button white" type="button">Back</button>
                            </a>
                        </li>
                        <li>
                            <button class="hvr-button" type="submit">Save</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ URL::to('/admin/account-management/vendor/placeholder') }}">
                <div class="mb15">
                    <div class="row row4">
                        <div class="col-10 my-auto">
                            <div class="t-pop">Delete Vendor</div>
                        </div>
                        <div class="col-2 my-auto text-end">
                            <div class="close" data-coreui-dismiss="modal">
                                <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bdy-pop">
                    <p>Are you sure you want to delete Vendor? All details about the shop will be deleted permanently.</p>
                </div>
                <ul class="l-btn right">
                    <li>
                        <button class="hvr-button w120 white" data-coreui-dismiss="modal" type="button">Cancel</button>
                    </li>
                    <li>
                        <button class="hvr-button w120" type="submit">Confirm</button>
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
        $('.nav-group-vendor a').addClass('active');

        $('.css-select select').select2({
            allowClear: true,
            minimumResultsForSearch: Infinity
        });
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