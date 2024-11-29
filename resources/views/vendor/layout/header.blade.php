<header class="header">
    <div class="container-fluid">
        <div class="w100">
            <div class="row">
                <div class="col-3 my-auto d-md-none">
                    <div class="menu" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                        <img src="{{ asset('assets/img/admin/menu.svg') }}" alt="" title=""/>
                    </div>
                </div>
                <div class="col-6 col-md-9">
                    <ul class="l-hdr">
                        <li>
                            <div class="logo">
                                <img class="d-none d-md-block" src="{{ asset('assets/img/admin/logo.png') }}" alt="" title=""/>
                                <img class="d-md-none" src="{{ asset('assets/img/admin/logo2.png') }}" alt="" title=""/>
                            </div>
                        </li>
                        <li>
                            <div class="box-menu">Vendor</div>
                        </li>
                    </ul>
                </div>
                <div class="col-3 my-auto text-end">
                    <div class="account">
                        <a><img src="{{ asset('assets/img/admin/account-vendor.svg') }}" alt="" title=""/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>