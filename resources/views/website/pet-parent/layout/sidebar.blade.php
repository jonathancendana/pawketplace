<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="box-hdr d-md-none">
        <div class="row">
            <div class="col-8 offset-2 my-auto">
                <ul class="l-hdr">
                    <li>
                        <div class="logo">
                            <img src="{{ asset('assets/img/logo3.png') }}" alt="" title="">
                        </div>
                    </li>
                    <li>
                        <div class="box-menu">Pet Parent</div>
                    </li>
                </ul>
            </div>
            <div class="col-2 my-auto text-end">
                <div class="close" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <img src="{{ asset('assets/img/admin/close.svg') }}" alt="" title=""/>
                </div>
            </div>
        </div>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-group nav-item nav-group-dashboard">
            <a class="nav-link" href="{{ URL::to('/pet-parent/dashboard') }}"><img class="no-active" src="{{ asset('assets/img/frontpanel/dashboard1.svg') }}" alt="" title=""/><img class="active" src="{{ asset('assets/img/frontpanel/dashboard2.svg') }}" alt="" title=""/>Dashboard</a>
        </li>
        <li class="nav-group nav-item nav-group-appointments">
            <a class="nav-link" href="{{ URL::to('/pet-parent/services-pricing') }}"><img class="no-active" src="{{ asset('assets/img/frontpanel/appointments1.svg') }}" alt="" title=""/><img class="active" src="{{ asset('assets/img/frontpanel/services2.svg') }}" alt="" title=""/>My appointments</a>
        </li>
        <li class="nav-group nav-item nav-group-pet">
            <a class="nav-link" href="{{ URL::to('/pet-parent/faq') }}"><img class="no-active" src="{{ asset('assets/img/frontpanel/my-pet1.svg') }}" alt="" title=""/><img class="active" src="{{ asset('assets/img/frontpanel/faq2.svg') }}" alt="" title=""/>My pet(s)</a>
        </li>
        <li class="nav-group nav-item nav-group-pennies">
            <a class="nav-link" href="{{ URL::to('/pet-parent/contact-us') }}"><img class="no-active" src="{{ asset('assets/img/frontpanel/pet-pennies1.svg') }}" alt="" title=""/><img class="active" src="{{ asset('assets/img/frontpanel/pet-pennies2.svg') }}" alt="" title=""/>Pet Pennies</a>
        </li>
    </ul>
</div>
    