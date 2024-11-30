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
        <li class="nav-group nav-item pl40">Account Management</li>
        <li class="nav-group nav-item nav-group-users">
            <a class="nav-link" href="{{ URL::to('/admin/account-management/users') }}">Admin Users</a>
        </li>
        <li class="nav-group nav-item nav-group-pet-owners">
            <a class="nav-link" href="{{ URL::to('/admin/account-management/pet-owners') }}">Pet Owners</a>
        </li>
        <li class="nav-group nav-item nav-group-vendor mb15">
            <a class="nav-link" href="{{ URL::to('/admin/account-management/vendor') }}">Vendors</a>
        </li>
        <li class="nav-group nav-item pl40">Appointments</li>
        <li class="nav-group nav-item nav-group-appointments mb15">
            <a class="nav-link" href="{{ URL::to('/admin/appointments/view') }}">View Appointments</a>
        </li>
        <li class="nav-group nav-item pl40">Content Management</li>
        <li class="nav-group nav-item nav-group-advertisement">
            <a class="nav-link" href="{{ URL::to('/admin/content-management/advertisement') }}">Advertisement</a>
        </li>
        <li class="nav-group nav-item nav-group-pet-cost">
            <a class="nav-link" href="{{ URL::to('/admin/content-management/pet-cost-calculator') }}">Pet Cost Calculator</a>
        </li>
        <li class="nav-group nav-item nav-group-symptom">
            <a class="nav-link" href="{{ URL::to('/admin/content-management/symptom-checker') }}">Symptom Checker</a>
        </li>
        <li class="nav-group nav-item nav-group-faq">
            <a class="nav-link" href="{{ URL::to('/admin/content-management/faq') }}">FAQ</a>
        </li>
    </ul>
</div>