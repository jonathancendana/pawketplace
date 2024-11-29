<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="box-hdr d-md-none">
        <div class="row">
            <div class="col-8 offset-2 my-auto">
                <div class="logo">
                    <img src="{{ asset('assets/img/admin/logo.png') }}" alt="" title=""/>
                </div>
            </div>
            <div class="col-2 my-auto text-end">
                <div class="close" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <img src="{{ asset('assets/img/admin/close.svg') }}" alt="" title=""/>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-brand">
        <div class="logo">
            <img src="{{ asset('assets/img/admin/logo.png') }}" alt="" title=""/>
        </div>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-group nav-item nav-group-rental">
            <a class="nav-link" href="{{ URL::to('/backpanel/rental') }}"><img class="no-active" src="{{ asset('assets/img/admin/rental1.svg') }}" alt="" title=""/><img class="active" src="{{ asset('assets/img/admin/rental2.svg') }}" alt="" title=""/>Rental</a>
        </li>
        <li class="nav-group nav-item nav-group-vehicle">
            <a class="nav-link" href="{{ URL::to('/backpanel/vehicle') }}"><img class="no-active" src="{{ asset('assets/img/admin/vehicle1.svg') }}" alt="" title=""/><img class="active" src="{{ asset('assets/img/admin/vehicle2.svg') }}" alt="" title=""/>Vehicle</a>
        </li>
        <li class="nav-group nav-item nav-group-customer">
            <a class="nav-link" href="{{ URL::to('/backpanel/customer') }}"><img class="no-active" src="{{ asset('assets/img/admin/customer1.svg') }}" alt="" title=""/><img class="active" src="{{ asset('assets/img/admin/customer2.svg') }}" alt="" title=""/>Customer </a>
        </li>
        <li class="nav-group nav-item nav-group-staff">
            <a class="nav-link" href="{{ URL::to('/backpanel/staff') }}"><img class="no-active" src="{{ asset('assets/img/admin/staff1.svg') }}" alt="" title=""/><img class="active" src="{{ asset('assets/img/admin/staff2.svg') }}" alt="" title=""/>Staff</a>
        </li>
        <li class="nav-group nav-item nav-group-analytics">
            <a class="nav-link" href="{{ URL::to('/backpanel/analytics/profit') }}"><img class="no-active" src="{{ asset('assets/img/admin/dashboard1.svg') }}" alt="" title=""/><img class="active" src="{{ asset('assets/img/admin/dashboard2.svg') }}" alt="" title=""/>Analytics</a>
        </li>
        <li class="nav-group nav-item nav-group-settings">
            <a class="nav-link" href="{{ URL::to('/backpanel/settings/reminders') }}"><img class="no-active" src="{{ asset('assets/img/admin/settings1.svg') }}" alt="" title=""/><img class="active" src="{{ asset('assets/img/admin/settings2.svg') }}" alt="" title=""/>Settings</a>
        </li>
    </ul>
</div>
    