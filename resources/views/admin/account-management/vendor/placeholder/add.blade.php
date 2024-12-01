@extends('admin.layout.app')

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
                        <div class="text">Vet</div>
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <div class="text">Company</div>
                    </div>
                    <div class="form-group">
                        <label>Existing shop in PawketPlace</label>
                        <div class="text">---</div>
                    </div>
                    <div class="t-form">Company details</div>
                    <div class="form-group">
                        <label>Company name</label>
                        <div class="text">The Gentle Vet</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 my-auto">
                            <div class="form-group">
                                <label>UEN</label>
                                <div class="text">123123123123</div>
                            </div>
                        </div>
                        <div class="col-md-6 my-auto text-end">
                            <div class="form-group">
                                <label>AVS licensed number</label>
                                <div class="text">123123123123</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Certification</label>
                        <ul class="l-pdf">
                            <li><img src="{{ asset('assets/img/frontpanel/pdf.svg') }}" alt="" title=""> <a href="/lorem.pdf" download>This is the document name.pdf</a></li>
                            <li><img src="{{ asset('assets/img/frontpanel/pdf.svg') }}" alt="" title=""> <a href="/lorem.pdf" download>This is the document name2.pdf</a></li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <label>Company address line 1</label>
                        <div class="text">291 Tanjong Katong Rd</div>
                    </div>
                    <div class="form-group">
                        <label>Company address line 2</label>
                        <div class="text">---</div>
                    </div>
                    <div class="form-group">
                        <label>Postal code</label>
                        <div class="text">437074</div>
                    </div>
                    <div class="t-form">Shop’s contact information</div>
                    <div class="form-group">
                        <label>Shop’s name</label>
                        <div class="text">The Gentle Vet</div>
                    </div>
                    <div class="form-group">
                        <label>Company address line 1</label>
                        <div class="text">291 Tanjong Katong Rd</div>
                    </div>
                    <div class="form-group">
                        <label>Company address line 2</label>
                        <div class="text">---</div>
                    </div>
                    <div class="form-group">
                        <label>Postal code</label>
                        <div class="text">437074</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Shop’s email address</label>
                                <div class="text">hi@thegentlevet.sg <img class="verified" src="{{ asset('assets/img/admin/verified.svg') }}" alt="" title=""></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Shop’s contact no.</label>
                                <div class="text">+66 6655 3970</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <div class="text">www.thegentlevet.sg</div>
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <ul class="l-pdf">
                            <li><img src="{{ asset('assets/img/frontpanel/pdf.svg') }}" alt="" title=""> <a href="/lorem.pdf" download>This is the document name.jpg</a></li>
                        </ul>
                    </div>
                    <div class="t-form">Shop’s details</div>
                    <div class="form-group">
                        <label>Description</label>
                        <div class="text">
                            <div class="mb20">The Gentle Vet, a Singaporean veterinary clinic founded in 2022, focuses on caring for elder and chronically ill pets with a priority in creating a stress-free, welcoming environment for pets and owners. Our approach aims to minimise stress and anxiety during medical care – guiding you and your pets with compassion and empathy.</div>
                            <div>With a commitment to providing the highest standard of care, our clinic stands out for its empathetic approach, skilled staff, and swift, accurate diagnosis.</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Services</label>
                        <div class="text">Vet services, consultation, dental</div>
                    </div>
                    <div class="form-group">
                        <label>Operating hours</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text flex left"><span class="day">Mon</span> 9:30am–1pm, 2:30–8:30pm</div>
                                <div class="text flex left"><span class="day">Tue</span> 9:30am–1pm, 2:30–8:30pm</div>
                                <div class="text flex left"><span class="day">Wed</span> 9:30am–1pm, 2:30–8:30pm</div>
                                <div class="text flex left"><span class="day">Thu</span> 9:30am–1pm, 2:30–8:30pm</div>
                            </div>
                            <div class="col-md-6">
                                <div class="text flex left"><span class="day">Fri</span> 9:30am–1pm, 2:30–8:30pm</div>
                                <div class="text flex left"><span class="day">Sat</span> 9:30am–1pm, 2:30–8:30pm</div>
                                <div class="text flex left"><span class="day">Sun</span> 9:30am–1pm, 2:30–8:30pm</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Additional services</label>
                        <div class="text">---</div>
                    </div>
                    <div class="form-group">
                        <label>GST registered</label>
                        <div class="text">Yes</div>
                    </div>
                    <div class="bdr-form"></div>
                    <div class="form-group">
                        <label>PDPA disclaimer</label>
                        <label class="css-radio">
                            <input type="radio" name="" value="" checked disabled>
                            <span class="checkmark"></span>
                            <div class="text">I have read and acknowledged the <a href="#">PDPA disclaimer</a>.</div>
                        </label>
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
<script type="text/javascript">
    $(document).ready(function () {
        $('.nav-group-vendor a').addClass('active');
    });
</script>
@endsection