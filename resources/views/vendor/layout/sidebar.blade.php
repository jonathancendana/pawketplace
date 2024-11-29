<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="box-hdr d-md-none">
        <div class="row">
            <div class="col-8 offset-2 my-auto">
                <ul class="l-hdr">
                    <li>
                        <div class="logo">
                            <img src="{{ asset('assets/img/admin/logo2.png') }}" alt="" title=""/>
                        </div>
                    </li>
                    <li>
                        <div class="box-menu">Vendor</div>
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
        <li class="nav-group nav-item nav-group-appointments">
            <a class="nav-link" href="{{ URL::to('/vendor/appointments/upcoming') }}"><img class="no-active" src="{{ asset('assets/img/admin/appointment1.svg') }}" alt="" title=""/><img class="active" src="{{ asset('assets/img/admin/appointment2.svg') }}" alt="" title=""/>Appointments</a>
        </li>
        <li class="nav-group nav-item nav-group-services">
            <a class="nav-link" href="{{ URL::to('/vendor/services-pricing') }}"><img class="no-active" src="{{ asset('assets/img/admin/services1.svg') }}" alt="" title=""/><img class="active" src="{{ asset('assets/img/admin/services2.svg') }}" alt="" title=""/>Services & Pricing</a>
        </li>
        <li class="nav-group nav-item nav-group-faq">
            <a class="nav-link" href="{{ URL::to('/vendor/faq') }}"><img class="no-active" src="{{ asset('assets/img/admin/faq1.svg') }}" alt="" title=""/><img class="active" src="{{ asset('assets/img/admin/faq2.svg') }}" alt="" title=""/>FAQ</a>
        </li>
        <li class="nav-group nav-item nav-group-contact">
            <a class="nav-link" href="{{ URL::to('/vendor/contact-us') }}"><img class="no-active" src="{{ asset('assets/img/admin/contact1.svg') }}" alt="" title=""/><img class="active" src="{{ asset('assets/img/admin/contact2.svg') }}" alt="" title=""/>Contact Us</a>
        </li>
    </ul>
</div>
    