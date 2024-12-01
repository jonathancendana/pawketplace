@extends('admin.layout.app')

@section('css')
<link href="{{ asset('js/select2/select2.min.css') }}" rel="stylesheet"/>
@endsection

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="title">Pet Cost Calculator for Dog</div>
                <form>
                    <div class="table-pet">
                        <div class="tbl tbl-hdr">
                            <div class="cell">Initial Costs</div>
                            <div class="cell w24">Estimated Cost</div>
                            <div class="cell w24">Frequency</div>
                            <div class="cell w15">&nbsp;</div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Adoption</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$70-$350"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Purchase</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$800-$14,000"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">AVS License</div>
                            <div class="cell w63">
                                <input type="text" class="form-control" required value="Beware of purchasing from unethical backyard breeders"/>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">AVS License</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$15"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="table-pet">
                        <div class="tbl tbl-hdr">
                            <div class="cell">Set-Up Expenses</div>
                            <div class="cell w24">Estimated Cost</div>
                            <div class="cell w24">Frequency</div>
                            <div class="cell w15">&nbsp;</div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Basic Necessities</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="> $250"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="table-pet">
                        <div class="tbl tbl-hdr">
                            <div class="cell">Food Costs</div>
                            <div class="cell w24">Estimated Cost</div>
                            <div class="cell w24">Frequency</div>
                            <div class="cell w15">&nbsp;</div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Dry Food</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$30-$80"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time">One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month" selected>per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Wet Food</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$1.50-$7/can"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time">One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month" selected>per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Treats</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$10-$30"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time">One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month" selected>per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Supplements</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$20-$60"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time">One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month" selected>per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="table-pet">
                        <div class="tbl tbl-hdr">
                            <div class="cell">Veterinary Care</div>
                            <div class="cell w24">Estimated Cost</div>
                            <div class="cell w24">Frequency</div>
                            <div class="cell w15">&nbsp;</div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Consultation</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$40-$120"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Vaccinations</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$45-$90"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Microchipping</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$45-$70"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Sterilisation</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$180-$800"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Flea, Mite and Parasite Treatment</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$50-$90"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Dental Procedures</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$180-$800"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="table-pet">
                        <div class="tbl tbl-hdr">
                            <div class="cell">Others</div>
                            <div class="cell w24">Estimated Cost</div>
                            <div class="cell w24">Frequency</div>
                            <div class="cell w15">&nbsp;</div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Pet Insurance</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$300-$750"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Grooming</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$80-$180"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Obedience and behaviour training</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$900"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Pet Boarding/Daycare</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$70/night"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                        <div class="tbl tbl-bdy">
                            <div class="cell">Emergency Fund (Recommended)</div>
                            <div class="cell w24">
                                <input type="text" class="form-control" required value="$2000-$10,000"/>
                            </div>
                            <div class="cell w24">
                                <div class="css-select">
                                    <select name="" id="">
                                        <option value="One-time" selected>One-time</option>
                                        <option value="per year">per year</option>
                                        <option value="per month">per month</option>
                                        <option value="per visit">per visit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cell w15">
                                <label class="css-radio">
                                    <input type="checkbox" name="" class="type-radio" value="">
                                    <span class="checkmark"></span>
                                    <div class="text">Tooltip</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <ul class="l-btn center mt50">
                        <li>
                            <button class="hvr-button white" type="button" data-coreui-toggle="modal" data-coreui-target="#cancelModal">Cancel</button>
                        </li>
                        <li>
                            <button class="hvr-button" type="button" data-coreui-toggle="modal" data-coreui-target="#saveModal">Save Changes</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="cancelModal" aria-labelledby="cancelModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row row4">
                    <div class="col-10 my-auto">
                        <div class="t-pop">Leave page without saving</div>
                    </div>
                    <div class="col-2 my-auto text-end">
                        <div class="close" data-coreui-dismiss="modal">
                            <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ URL::to('/admin/content-management/pet-cost-calculator') }}">
                <div class="bdy-pop">
                    <p>Are you sure you want to leave this page? Any changes made to this page will not be saved.</p>
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

<div class="modal fade" id="saveModal" aria-labelledby="saveModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="row row4">
                    <div class="col-10 my-auto">
                        <div class="t-pop">Save changes</div>
                    </div>
                    <div class="col-2 my-auto text-end">
                        <div class="close" data-coreui-dismiss="modal">
                            <img src="{{ asset('assets/img/close.svg') }}" alt="" title="">
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ URL::to('/admin/content-management/pet-cost-calculator') }}">
                <div class="bdy-pop">
                    <p>Are you sure you want to save changes? Once saved, content will be published on the website.</p>
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
        $('.nav-group-pet-cost a').addClass('active');

        $('.css-select select').select2({
            allowClear: true,
            minimumResultsForSearch: Infinity
        });
    });
</script>
@endsection