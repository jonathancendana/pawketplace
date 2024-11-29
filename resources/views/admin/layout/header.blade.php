<header class="header">
    <div class="container-fluid">
        <div class="w100">
            <div class="row">
                <div class="col-4 my-auto d-md-none">
                    <div class="menu" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                        <img src="{{ asset('assets/img/admin/menu.svg') }}" alt="" title=""/>
                    </div>
                </div>
                <div class="col-4 my-auto d-md-none">
                    <div class="logo">
                        <img src="{{ asset('assets/img/admin/logo.png') }}" alt="" title=""/>
                    </div>
                </div>
                <div class="col-6 my-auto d-none d-md-block">
                    <div class="title"></div>
                    <div class="back">
                        <a href="#" class="urlBack"><img src="{{ asset('assets/img/admin/back.svg') }}" alt="" title=""/> Back</a>
                    </div>
                </div>
                <div class="col-4 col-md-6 my-auto text-end">
                    <div class="account">
                        <a><img class="icon1" src="{{ asset('assets/img/admin/account.svg') }}" alt="" title=""/><span class="text">Jaslyn</span><img class="icon2" src="{{ asset('assets/img/admin/arrow-account.svg') }}" alt="" title=""/></a>
                        <div class="box-account">
                            <ul>
                                <li><a href="{{ URL::to('/backpanel/profile/edit') }}">Edit Profile</a></li>
                                <li><a href="{{ URL::to('/backpanel/profile/password') }}">Password</a></li>
                                <li><a href="{{ URL::to('/backpanel/login') }}">Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>