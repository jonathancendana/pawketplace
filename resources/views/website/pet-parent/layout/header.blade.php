<header class="header">
    <div class="hdr-member">
        <div class="tbl">
            <div class="cell">
                <div class="container">
                    <div class="row">
                        <div class="col-3 col-md-3 col-lg-2 my-auto">
                            <div class="menu" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                                <img src="{{ asset('assets/img/menu.svg') }}" alt="" title="">
                            </div>
                            <div class="logo">
                                <a href="{{ URL::to('/') }}">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="" title="">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-7 my-auto">
                            <div class="logo3">
                                <a href="{{ URL::to('/') }}">
                                    <img src="{{ asset('assets/img/logo3.png') }}" alt="" title="">
                                </a>
                            </div>
                            <div class="box-menu">Pet Parent</div>
                        </div>
                        <div class="col-3 text-end">
                            <div class="box-name">J</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>