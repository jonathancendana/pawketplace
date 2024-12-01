@extends('admin.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="back">
            <a href="{{ URL::to('/admin/account-management/vendor/registered') }}"><img src="{{ asset('assets/img/admin/back.svg') }}" alt="" title=""> <span class="text">Back to listings</span></a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="mb25-global">
                    <div class="row">
                        <div class="col-md-6 my-auto">
                            <div class="title mb0">Vendor application</div>
                        </div>
                        <div class="col-md-6 my-auto text-end">
                            <div class="box-status yellow">Pending</div>
                        </div>
                    </div>
                </div>
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
                    <div class="col-md-6 my-auto">
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
                <div class="t-form">Contact person’s details</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact person’s name</label>
                            <div class="text">Jerome Ong</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact person’s contact no.</label>
                            <div class="text">+65 91111 1123</div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Contact person’s email address</label>
                    <div class="text">JeromeOng@thegentlevet.sg</div>
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
                        <a data-coreui-toggle="modal" data-coreui-target="#rejectdModal">
                            <button class="hvr-button white" type="button">Reject</button>
                        </a>
                    </li>
                    <li>
                        <a data-coreui-toggle="modal" data-coreui-target="#approveModal">
                            <button class="hvr-button" type="button">Approve</button>
                        </a>
                    </li>
                </ul>
                <div class="box-audit">
                    <div class="t1">Audit trail</div>
                    <div class="mb10">
                        <div class="tbl">
                            <div class="cell w150">22 Nov 2024, 1:40PM</div>
                            <div class="cell">The Gentle Vet (V00012) submitted shop application</div>
                        </div>
                    </div>
                    <div class="mb10">
                        <div class="tbl">
                            <div class="cell w150">22 Nov 2024, 1:31PM</div>
                            <div class="cell">The Gentle Vet (V00012) verified email address</div>
                        </div>
                    </div>
                    <div class="mb10">
                        <div class="tbl">
                            <div class="cell w150">22 Nov 2024, 1:30PM</div>
                            <div class="cell">The Gentle Vet (V00012) created account</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="approveModal" aria-labelledby="approveModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row row4">
                    <div class="col-10 my-auto">
                        <div class="t-pop">Provide remarks</div>
                    </div>
                    <div class="col-2 my-auto text-end">
                        <div class="close" data-coreui-dismiss="modal">
                            <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bdy-pop">
                <p class="mb20">Please check if there is an existing placeholder shop listed in <a href="#">PawketPlace’s list of shops</a>. If yes, please delete the placeholder shop to avoid duplicates.</p>
                <p>Once approved, this vendor’s shop details will be published on PawketPlace’s website immediately.</p>
            </div>
            <ul class="l-btn right">
                <li>
                    <button class="hvr-button w120 white" data-coreui-dismiss="modal" type="button">Cancel</button>
                </li>
                <li>
                    <a data-coreui-toggle="modal" data-coreui-target="#approvedModal">
                        <button class="hvr-button w120" type="submit">Confirm</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="approvedModal" aria-labelledby="approvedModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row row4">
                    <div class="col-10 my-auto">
                        <div class="t-pop">Application approved</div>
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
                    <button class="hvr-button w120 white" data-coreui-dismiss="modal" type="button">Close</button>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="rejectdModal" aria-labelledby="rejectdModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row row4">
                    <div class="col-10 my-auto">
                        <div class="t-pop">Reject application</div>
                    </div>
                    <div class="col-2 my-auto text-end">
                        <div class="close" data-coreui-dismiss="modal">
                            <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ URL::to('/admin/account-management/vendor/registered') }}">
                <div class="bdy-pop">
                    <p>Please provide remarks or reasons for rejecting this application.</p>
                </div>
                <div class="form-group">
                    <label>Remarks<span class="red">*</span></label>
                    <textarea class="form-control" type="message" placeholder="Provide remarks"></textarea>
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