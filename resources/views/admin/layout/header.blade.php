<header class="fixed">
    <div class="hdr-member">
        <div class="tbl">
            <div class="cell">
                <div class="container">
                    <div class="row">
                        <div class="col-3 col-md-3 col-lg-2 my-auto">
                            <div class="logo">
                                <a href="{{ URL::to('/') }}">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="" title="">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-7 my-auto">
                            <div class="box-menu">Admin</div>
                        </div>
                        <div class="col-3 text-end">
                            <div class="box-name">
                                <div class="click-name">J</div>
                                <ul class="drop-name">
                                    <li><a href="#">View profile</a></li>
                                    <li><a href="{{ URL::to('/') }}">Log out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>