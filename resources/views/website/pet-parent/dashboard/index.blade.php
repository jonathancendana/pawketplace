@extends('website.pet-parent.layout.app')

@section('content')
<div class="pad-content">
    <div class="container">
        <div class="row">
            <div class="col-xl-11">
                <div class="box-dash">
                    <div class="t1">My pet(s)</div>
                    <div class="row">
                        <div class="col-md-6 col-lg-3 my-auto">
                            <div class="item-dash">
                                <div class="tbl">
                                    <div class="cell w45">
                                        <div class="img">
                                            <img src="{{ asset('assets/img/frontpanel/cat.svg') }}" alt="" title=""/>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <div class="nm">Mochi</div>
                                        <div class="view"><a href="#">View profile</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 my-auto">
                            <div class="item-dash">
                                <div class="tbl">
                                    <div class="cell w45">
                                        <div class="img">
                                            <img src="{{ asset('assets/img/frontpanel/dog.png') }}" alt="" title=""/>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <div class="nm">Donut</div>
                                        <div class="view"><a href="#">View profile</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 my-auto">
                            <div class="item-dash">
                                <div class="tbl">
                                    <div class="cell w45">
                                        <div class="img">
                                            <img src="{{ asset('assets/img/frontpanel/cat.svg') }}" alt="" title=""/>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <div class="nm">Brioche</div>
                                        <div class="view"><a href="#">View profile</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 my-auto">
                            <div class="item-dash">
                                <div class="tbl">
                                    <div class="cell">
                                        <div class="link text-center">
                                            <a href="#">Add another pet</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-xl-8">
                        <div class="box-app">
                            <div class="h40">
                                <div class="row">
                                    <div class="col-md-6 my-auto">
                                        <div class="t1">Upcoming appointment(s)</div>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                        <div class="link">
                                            <a data-coreui-toggle="modal" data-coreui-target="#appointmentModal">
                                                <button type="button" class="hvr-button">Book an appointment</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hscroll">
                                <div class="in-app rel">
                                    <div class="tbl block">
                                        <div class="cell">
                                            <div class="date">Monday 11 Nov 2024 | 4:00PM</div>
                                            <div class="nm">The Gentle Vet <span class="reg">for</span> Mochi</div>
                                            <div class="view">
                                                <a href="#">View details</a>
                                            </div>
                                        </div>
                                        <div class="cell text-end">
                                            <div class="box green">Booked</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-app rel">
                                    <div class="tbl block">
                                        <div class="cell">
                                            <div class="nm">The Gentle Vet <span class="reg">for</span> Mochi</div>
                                            <div class="view">
                                                <a href="#">View details</a>
                                            </div>
                                        </div>
                                        <div class="cell text-end">
                                            <div class="box yellow">Pending</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="box-app">
                            <div class="h40">
                                <div class="t1">Reminder(s)</div>
                            </div>
                            <div class="hscroll">
                                <div class="in-app">
                                    <div class="tbl">
                                        <div class="cell img">
                                            <img src="{{ asset('assets/img/frontpanel/vaccination.svg') }}" alt="" title=""/>
                                        </div>
                                        <div class="cell">
                                            <div class="date">Tuesday 12 Nov 2024</div>
                                            <div class="nm2">Mochi’s vaccination</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-app">
                                    <div class="tbl">
                                        <div class="cell img">
                                            <img src="{{ asset('assets/img/frontpanel/parasite.png') }}" alt="" title=""/>
                                        </div>
                                        <div class="cell">
                                            <div class="date">Wednesday 20 Nov 2024</div>
                                            <div class="nm2">Mochi’s parasite control</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-app">
                                    <div class="tbl">
                                        <div class="cell img">
                                            <img src="{{ asset('assets/img/frontpanel/vaccination.svg') }}" alt="" title=""/>
                                        </div>
                                        <div class="cell">
                                            <div class="date">Tuesday 12 Nov 2024</div>
                                            <div class="nm2">Mochi’s vaccination</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-app">
                                    <div class="tbl">
                                        <div class="cell img">
                                            <img src="{{ asset('assets/img/frontpanel/parasite.png') }}" alt="" title=""/>
                                        </div>
                                        <div class="cell">
                                            <div class="date">Wednesday 20 Nov 2024</div>
                                            <div class="nm2">Mochi’s parasite control</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-app">
                                    <div class="tbl">
                                        <div class="cell img">
                                            <img src="{{ asset('assets/img/frontpanel/vaccination.svg') }}" alt="" title=""/>
                                        </div>
                                        <div class="cell">
                                            <div class="date">Tuesday 12 Nov 2024</div>
                                            <div class="nm2">Mochi’s vaccination</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-app">
                                    <div class="tbl">
                                        <div class="cell img">
                                            <img src="{{ asset('assets/img/frontpanel/parasite.png') }}" alt="" title=""/>
                                        </div>
                                        <div class="cell">
                                            <div class="date">Wednesday 20 Nov 2024</div>
                                            <div class="nm2">Mochi’s parasite control</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="appointmentModal" aria-labelledby="appointmentModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="mb15">
                <div class="t-pop">Book an appointment</div>
            </div>
            <div class="bdy-pop mb20">Easily schedule a visit with a Vet or Wellness Partner for your pet. Select your preferred date and time, and the clinic will confirm availability.</div>
            <div class="box-emergency">If this is an emergency, please bring your pet to the nearest veterinary clinic immediately. Making an online booking could delay critical care.</div>
            <ul class="l-btn right">
                <li>
                    <button class="hvr-button white" type="button" data-coreui-toggle="modal" data-coreui-target="#pendingModal">Close</button>
                </li>
                <li>
                    <button class="hvr-button" type="button" data-coreui-toggle="modal" data-coreui-target="#appointmentstep1Modal">Proceed with booking</button>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="appointmentstep1Modal" aria-labelledby="appointmentstep1Modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <ul class="box-step">
                <li class="line on">
                    <div class="bdr-step">1</div>
                </li>
                <li class="line">
                    <div class="bdr-step">2</div>
                </li>
                <li class="line">
                    <div class="bdr-step">3</div>
                </li>
                <li class="line">
                    <div class="bdr-step">4</div>
                </li>
            </ul>
            <div class="mb15">
                <div class="t-pop">Select a clinic</div>
            </div>
            <div class="bdy-pop mb20">Please choose a registered clinic to proceed with your booking. You can <a href="#">view full list of Vets and Wellness Partners here</a>.</div>
            <form>
                <div class="form-group">
                    <label>Clinic<span class="red">*</span></label>
                    <div class="autocomplete-container">
                        <input type="text" placeholder="Search or Select a clinic" class="form-control autocomplete-input" data-source="clinicName">
                        <span class="close-icon" onclick="clearInput(this)"><img src="{{ asset('assets/img/frontpanel/search.svg') }}" alt="" title=""/></span>
                        <div class="suggestions"></div>
                    </div>
                </div>
                <ul class="l-btn right">
                    <li>
                        <button class="hvr-button white" type="button" data-coreui-toggle="modal" data-coreui-target="#pendingModal">Close</button>
                    </li>
                    <li>
                        <button class="hvr-button" type="button" data-coreui-toggle="modal" data-coreui-target="#appointmentstep2Modal">Next</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="appointmentstep2Modal" aria-labelledby="appointmentstep2Modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <ul class="box-step">
                <li class="line active">
                    <div class="bdr-step">1</div>
                </li>
                <li class="line on">
                    <div class="bdr-step">2</div>
                </li>
                <li class="line">
                    <div class="bdr-step">3</div>
                </li>
                <li class="line">
                    <div class="bdr-step">4</div>
                </li>
            </ul>
            <div class="mb15">
                <div class="t-pop">Select pet(s) visiting the clinic</div>
            </div>
            <div class="bdy-pop mb20">
                <div>Select pet(s) visiting the clinic – you may select and book for multiple pets.</div>
                <div>Go to <a href="{{ URL::to('/pet-parent/dashboard') }}">Dashboard</a> to add or edit a pet if needed.</div>
            </div>
            <div class="mb15">
                <!-- <div class="row">
                    <div class="col-md-6 my-auto">
                        <div class="item-dash">
                            <div class="tbl">
                                <div class="cell w45">
                                    <div class="img">
                                        <img src="{{ asset('assets/img/frontpanel/cat.svg') }}" alt="" title=""/>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div class="nm">Mochi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-auto">
                        <div class="item-dash">
                            <div class="tbl">
                                <div class="cell w45">
                                    <div class="img">
                                        <img src="{{ asset('assets/img/frontpanel/dog.png') }}" alt="" title=""/>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div class="nm">Donut</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-auto">
                        <div class="item-dash">
                            <div class="tbl">
                                <div class="cell w45">
                                    <div class="img">
                                        <img src="{{ asset('assets/img/frontpanel/cat.svg') }}" alt="" title=""/>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div class="nm">Brioche</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="bdy-pop mb20">
                <div>Describe the symptoms your pet is experiencing or the reason for the vet visit. Go to <a href="#">Symptom Checker</a> to explore and check if needed.</div>
            </div>
            <form>
                <div class="form-group">
                    <label>Remarks</label>
                    <textarea class="form-control" type="message"></textarea>
                </div>
                <div class="form-group">
                    <label>Have you been to this clinic?<span class="red">*</span></label>
                    <ul class="l-radio">
                        <li>
                            <label class="css-checkbox">
                                <input type="radio" name="parent" value="Yes">
                                <span class="checkmark"></span>
                                <div class="text">Yes</div>
                            </label>
                        </li>
                        <li>
                            <label class="css-checkbox">
                                <input type="radio" name="parent" value="No">
                                <span class="checkmark"></span>
                                <div class="text">No</div>
                            </label>
                        </li>
                    </ul>
                </div>
                <ul class="l-btn right">
                    <li>
                        <a data-coreui-dismiss="modal">Cancel</a>
                    </li>
                    <li>
                        <button class="hvr-button white" type="button" data-coreui-toggle="modal" data-coreui-target="#appointmentstep1Modal">Back</button>
                    </li>
                    <li>
                        <button class="hvr-button" type="button" data-coreui-toggle="modal" data-coreui-target="#appointmentstep3Modal">Next</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="appointmentstep3Modal" aria-labelledby="appointmentstep3Modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <ul class="box-step">
                <li class="line active">
                    <div class="bdr-step">1</div>
                </li>
                <li class="line active">
                    <div class="bdr-step">2</div>
                </li>
                <li class="line on">
                    <div class="bdr-step">3</div>
                </li>
                <li class="line">
                    <div class="bdr-step">4</div>
                </li>
            </ul>
            <div class="mb15">
                <div class="t-pop">Select preferred date and time</div>
            </div>
            <div class="bdy-pop mb20">Provide up to 5 preferred slots and the clinic will assign a slot for you based on their availability.</div>
            <form>
                <div class="form-group">
                    <label>Slot 1<span class="red">*</span></label>
                </div>
                <ul class="l-btn right">
                    <li>
                        <a data-coreui-dismiss="modal">Cancel</a>
                    </li>
                    <li>
                        <button class="hvr-button white" type="button" data-coreui-toggle="modal" data-coreui-target="#appointmentstep2Modal">Back</button>
                    </li>
                    <li>
                        <button class="hvr-button" type="button" data-coreui-toggle="modal" data-coreui-target="#appointmentstep4Modal">Next</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="appointmentstep4Modal" aria-labelledby="appointmentstep4Modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <ul class="box-step">
                <li class="line active">
                    <div class="bdr-step">1</div>
                </li>
                <li class="line active">
                    <div class="bdr-step">2</div>
                </li>
                <li class="line active">
                    <div class="bdr-step">3</div>
                </li>
                <li class="line on">
                    <div class="bdr-step">4</div>
                </li>
            </ul>
            <div class="mb15">
                <div class="row">
                    <div class="t-pop">Review appointment details</div>
                </div>
            </div>
            <div class="bdy-pop mb20">Please review and confirm your appointment details below before proceeding with your booking.</div>
            <div class="box-address">
                <div><b>The Gentle Vet</b></div>
                <div>291 Tanjong Katong Road, Singapore 437074</div> 
                <div>+65 6655 3970</div>
            </div>
            <div class="form-group">
                <label>Pet(s)</label>
                <div class="text">Donut</div>
            </div>
            <div class="form-group">
                <label>Remarks</label>
                <div class="text">Excessive shedding and bald patches</div>
            </div>
            <div class="form-group">
                <label>Have you been to this clinic?</label>
                <div class="text">No</div>
            </div>
            <div class="form-group">
                <label>Slot 1</label>
                <div class="text">Monday 11 Nov 2024, 2:00PM</div>
            </div>
            <div class="form-group">
                <label>Slot 2</label>
                <div class="text">Wednesday 13 Nov 2024, 3:30PM</div>
            </div>
            <div class="form-group">
                <label>Slot 3</label>
                <div class="text">Thursday 14 Nov 2024, 1:30PM</div>
            </div>
            <form action="{{ URL::to('/pet-parent/dashboard') }}">
                <ul class="l-btn right">
                    <li>
                        <a data-coreui-dismiss="modal">Cancel</a>
                    </li>
                    <li>
                        <button class="hvr-button white" type="button" data-coreui-toggle="modal" data-coreui-target="#appointmentstep3Modal">Back</button>
                    </li>
                    <li>
                        <button class="hvr-button" type="submit">Next</button>
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
        $('.nav-group-dashboard a').addClass('active');
    });

    const suggestionsData = {
        clinicName: ["Jason Tan (449B)", "Jason Ng (336B)", "Jason Wu (227B)"]
    };

    document.querySelectorAll(".autocomplete-input").forEach(input => {
        input.addEventListener("input", function() {
            showSuggestions(input);
            toggleCloseIcon(input);
        });

        // Tambahkan listener untuk fokus pertama kali
        input.addEventListener("focus", function() {
            showSuggestions(input);
            toggleCloseIcon(input);
        });
    });

    function showSuggestions(inputElement) {
        const suggestionsContainer = inputElement.nextElementSibling.nextElementSibling;
        const source = inputElement.getAttribute("data-source");
        const query = inputElement.value;
        suggestionsContainer.innerHTML = "";

        // Ambil semua data jika input kosong (saat fokus pertama kali)
        const filteredSuggestions = query.length === 0
            ? suggestionsData[source]
            : suggestionsData[source].filter(item =>
                item.toLowerCase().includes(query.toLowerCase())
            );

        // Tampilkan saran
        filteredSuggestions.forEach(item => {
            const suggestionItem = document.createElement("div");
            suggestionItem.classList.add("suggestion-item");
            suggestionItem.textContent = item;

            suggestionItem.onclick = function() {
                inputElement.value = item;
                suggestionsContainer.innerHTML = "";
                toggleCloseIcon(inputElement);
            };

            suggestionsContainer.appendChild(suggestionItem);
        });
    }

    // Tampilkan ikon close hanya jika ada teks di input
    function toggleCloseIcon(inputElement) {
        const closeIcon = inputElement.nextElementSibling;
        closeIcon.style.display = inputElement.value ? "inline" : "none";
    }

    function clearInput(closeIconElement) {
        const input = closeIconElement.previousElementSibling;
        input.value = ""; 
        closeIconElement.style.display = "none";
        input.nextElementSibling.nextElementSibling.innerHTML = "";
    }

    // Event listener untuk semua input autocomplete
    document.querySelectorAll(".autocomplete-input").forEach(input => {
        input.addEventListener("input", function() {
            showSuggestions(input);
            toggleCloseIcon(input);
        });
    });
</script>
@endsection