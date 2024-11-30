@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="back">
            <a href="{{ URL::to('/admin/content-management/advertisement') }}"><img src="{{ asset('assets/img/admin/back.svg') }}" alt="" title=""> <span class="text">Back to listings</span></a>
        </div>
        <div class="title">Advertisement</div>
        <form action="{{ URL::to('/admin/content-management/advertisement') }}">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name<span class="red">*</span></label>
                                <input type="text" class="form-control" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Website<span class="red">*</span></label>
                                <input type="text" class="form-control" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Image<span class="red">*</span></label>
                        <div class="upload-container">
                            <div class="upload-button">Upload file</div>
                            <input type="file" class="file-input" accept="image/*" required style="display: none;">
                        </div>
                        <div class="note">
                            <div>Only PNG, JPG, and PDF files are accepted. Maximum file size: 2MB.</div>
                            <div>File dimension should be XXXpx by XXXpx</div>
                        </div>
                    </div>
                    <ul class="l-btn right mt50">
                        <li>
                            <button class="hvr-button white" type="button" data-coreui-toggle="modal" data-coreui-target="#arrangesequenceModal">Cancel</button>
                        </li>
                        <li>
                            <button class="hvr-button" type="submit">Save changes</button>
                        </li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-group-advertisement a').addClass('active');
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