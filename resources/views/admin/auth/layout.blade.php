<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0"/> -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Pawket Place | Backpanel</title>
    <!--favicon-->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon-180x180.png?v.2') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png?v.2') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png?v.2') }}"> -->
    
    <!-- CSS -->
    @yield('css')
    <link href="{{ asset('css/coreui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/backpanel/style.css') }}" rel="stylesheet"/>
</head>
<body>

<header>
    <div class="hdr-member">
        <div class="tbl">
            <div class="cell">
                <div class="container">
                    <div class="row">
                        <div class="col-3 col-md-3 col-lg-2 my-auto">
                            <div class="logo">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="" title="">
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

<div id="main">
    @yield('content')
</div>

<script type="text/javascript" src="{{ asset('js/coreui.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js?v.1.3') }}"></script>

<!-- JS -->
@yield('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('.click-name').click(function () {
            $('.drop-name').toggleClass('open');
        });
        $("html").click(function(a) {
            if (!$(a.target).parents().is(".box-name")) {
                $('.drop-name').removeClass('open');
            }
        });
        
        document.addEventListener('DOMContentLoaded', function () {
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
            dropdownToggles.forEach((toggle) => {
                toggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    const parent = this.parentElement;
                    document.querySelectorAll('.menu-item.dropdown').forEach((item) => {
                        if (item !== parent) {
                            item.classList.remove('open');
                        }
                    });
                    parent.classList.toggle('open');
                });
            });
        });
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.menu-item.dropdown')) {
                document.querySelectorAll('.menu-item.dropdown').forEach((item) => {
                    item.classList.remove('open');
                });
            }
        });
    });
</script>

</body>
</html>
        
