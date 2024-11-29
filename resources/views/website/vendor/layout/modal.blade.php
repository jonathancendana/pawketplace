<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" id="form-add" novalidate>
        @csrf
        <div class="modal-content">
            <div class="t-pop">Add {{ $menu }}</div>
            @if($menu == 'Social Media & Payment')
            <div class="form-group">
                <label>Type</label>
                <select name="type" class="form-control @error('type') is-invalid @enderror">
                    <option value=""></option>
                    <option value="Social Media">Social Media</option>
                    <option value="Payment Method">Payment Method</option>
                </select>
                @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            @endif
            @if($menu == 'Banner')
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value=""/>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            @elseif($menu == 'School Category' || $menu == 'Social Media & Payment' || $menu == 'Purpose of Bookings' || $menu == 'Enquiry')
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value=""/>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            @endif
            @if($menu == 'Banner' || $menu == 'Social Media & Payment' || $menu == 'School Category' || $menu == 'Announcement')
            <div class="form-group">
                <label>Image</label>
                <div id="holder"></div>
                <div class="input-group css-upload">
                    <input id="thumbnail" readonly class="form-control @error('image') is-invalid @enderror" type="text" name="image">
                    <span class="input-group-btn">
                        <a data-input="thumbnail" data-preview="holder" class="lfm btn">
                            <svg class="icon"><use xlink:href="/icons/sprites/free.svg#cil-cloud-upload"></use></svg> Choose
                        </a>
                    </span>
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @if($menu == 'Banner' || $menu == 'Social Media & Payment')
                <div class="txt-upload">PNG or JPG format, 40 x 30 px</div>
                @elseif($menu == 'School Category')
                <div class="txt-upload">PNG or JPG format, 380 x 500 px</div>
                @elseif($menu == 'Announcement')
                <div class="txt-upload">PNG or JPG format, 400 x 250 px</div>
                @endif
                <!-- <div class="btn-upload">
                    <input type="file" name="image" class="form-control" accept="image/png, image/gif, image/jpeg">
                </div> -->
            </div>
            @endif
            @if($menu == 'Banner' || $menu == 'Social Media & Payment')
            <div class="form-group mb0">
                <label>Link</label>
                <input type="text" class="form-control" name="link" value=""/>
            </div>
            @endif
            @if($menu == 'Announcement')
            <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value=""/>
                @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea type="message" name="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            @endif
            <ul class="list-btn css-link">
                <li>
                    <a data-coreui-dismiss="modal">Cancel</a>
                </li>
                <li>
                    <button class="hvr-button" type="submit">Add</button>
                </li>
            </ul>
        </div>
        </form>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog">
        <form role="form" id="form-edit" method="POST" >
        @method('PUT')
        @csrf
        <div class="modal-content">
            <div class="t-pop">Edit {{ $menu }}</div>
            @if($menu == 'Social Media & Payment')
            <div class="form-group">
                <label>Type</label>
                <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
                    <option value=""></option>
                    <option value="Social Media">Social Media</option>
                    <option value="Payment Method">Payment Method</option>
                </select>
                @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            @endif
            @if($menu == 'Banner')
            <div class="form-group">
                <label>Title</label>
                <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title"/>
            </div>
            @elseif($menu == 'School Category' || $menu == 'Social Media & Payment' || $menu == 'Purpose of Bookings' || $menu == 'Enquiry')
            <div class="form-group">
                <label>Name</label>
                <input type="text" id="title" class="form-control @error('name') is-invalid @enderror" name="name"/>
            </div>
            @endif
            @if($menu == 'Banner' || $menu == 'Social Media & Payment' || $menu == 'School Category' || $menu == 'Announcement')
            <div class="form-group">
                <label>Image</label>
                <div id="holder-edit"></div>
                <div class="input-group css-upload">
                    <input id="thumbnail-edit" readonly class="form-control @error('image') is-invalid @enderror" type="text" name="image">
                    <span class="input-group-btn">
                        <a data-input="thumbnail-edit" data-preview="holder-edit" class="lfm btn">
                            <svg class="icon"><use xlink:href="/icons/sprites/free.svg#cil-cloud-upload"></use></svg> Choose
                        </a>
                    </span>
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @if($menu == 'Banner' || $menu == 'Social Media & Payment')
                <div class="txt-upload">PNG or JPG format, 40 x 30 px</div>
                @elseif($menu == 'School Category')
                <div class="txt-upload">PNG or JPG format, 380 x 500 px</div>
                @elseif($menu == 'Announcement')
                <div class="txt-upload">PNG or JPG format, 400 x 250 px</div>
                @endif
            </div>
            @endif
            @if($menu == 'Banner' || $menu == 'Social Media & Payment')
            <div class="form-group mb0">
                <label>Link</label>
                <input type="text" class="form-control" id="link" name="link" value=""/>
            </div>
            @endif
            @if($menu == 'Announcement')
            <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" value=""/>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea type="message" name="description" id="description" class="form-control"></textarea>
            </div>
            @endif
            <ul class="list-btn css-link">
                <li>
                    <a data-coreui-dismiss="modal">Cancel</a>
                </li>
                <li>
                    <button class="hvr-button" type="submit">Save</button>
                </li>
            </ul>
        </div>
        </form>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog">
        <form id="form-delete" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-content">
            <div class="img-pop"><img src="{{ asset('assets/img/admin/delete.png') }}" alt="" title=""/></div>
            <div class="t-pop text-center">Are you sure you want to delete selected entries?</div>
            <ul class="list-btn css-link">
                <li>
                    <a data-coreui-dismiss="modal">Cancel</a>
                </li>
                <li>
                    <button class="hvr-button" type="submit">Delete</button>
                </li>
            </ul>
        </div>
        </form>
    </div>
</div>