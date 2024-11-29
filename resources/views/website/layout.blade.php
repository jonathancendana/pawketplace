<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0"/>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Pawket Place</title>
    <!--favicon-->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon-180x180.png?v.2') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png?v.2') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png?v.2') }}"> -->
    
    <!-- CSS -->
    @yield('css')
    <link href="{{ asset('css/coreui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/frontend/front.css') }}" rel="stylesheet"/>
</head>
<body>

<section id="main-page">
    <header>
        <div class="hdr-global">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-3 col-lg-2">
                        <div class="h70">
                            <div class="tbl">
                                <div class="cell">
                                    <div class="menu">
                                        <img src="{{ asset('assets/img/menu.svg') }}" alt="" title="">
                                    </div>
                                    <div class="logo">
                                        <a href="{{ URL::to('/') }}">
                                            <img src="{{ asset('assets/img/logo.png') }}" alt="" title="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-6 col-lg-7">
                        <div class="logo2">
                            <a href="{{ URL::to('/') }}">
                                <img src="{{ asset('assets/img/logo2.png') }}" alt="" title="">
                            </a>
                        </div>
                        <nav class="navbar d-none d-md-block">
                            <ul class="main-menu">
                                <li class="menu-item dropdown">
                                    <a href="#">Health & Wellness <img src="{{ asset('assets/img/dropdown.svg') }}" alt="" title=""></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Find a Vet</a></li>
                                        <li><a href="#">Book an appointment</a></li>
                                        <li><a href="#">Symptom checker</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Discover & Track <img src="{{ asset('assets/img/dropdown.svg') }}" alt="" title=""></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ URL::to('/pet-cost-calculator') }}">Pet cost calculator</a></li>
                                        <li><a href="#">Track pet expenses</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-4 col-md-3 text-end">
                        <!-- <div class="h70">
                            <div class="tbl">
                                <div class="cell">
                                    <ul class="l-login">
                                        <li>
                                            <a href="{{ URL::to('/register') }}">Sign Up</a>
                                        </li>
                                        <li>or</li>
                                        <li>
                                            <a href="{{ URL::to('/login') }}">Log In</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <nav class="navbar right">
                            <ul class="main-menu">
                                <li class="menu-item dropdown">
                                    <a href="#">Sign Up or Log In <img src="{{ asset('assets/img/dropdown.svg') }}" alt="" title=""></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ URL::to('/pet-parent/register') }}">Pet parent</a></li>
                                        <li><a href="{{ URL::to('/vendor/register') }}">Vendor</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="hdr-member">
            <div class="tbl">
                <div class="cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-3 col-md-3 col-lg-2 my-auto">
                                <div class="menu">
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
                                <div class="box-menu"></div>
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

    <div id="main">
        @yield('content')
    </div>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="title">PawketPlace</div>
                    <ul class="l-list">
                        <li><a href="{{ URL::to('/about-us') }}">About Us</a></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="title">Support</div>
                    <ul class="l-list">
                        <li><a href="{{ URL::to('/contact-us#faq') }}">FAQ</a></li>
                        <li><a href="{{ URL::to('/contact-us') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="last col-sm-4 col-md-3 offset-md-3 col-lg-2 offset-lg-6">
                    <div class="title">Social Media</div>
                    <ul class="l-soc">
                        <li><a href="#" target="_blank" rel="noreferrer noopener"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="" target="_blank" rel="noreferrer noopener"><i class="fa-brands fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</section>

<script type="text/javascript" src="{{ asset('js/coreui.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js?v.1.3') }}"></script>

<!-- JS -->
@yield('js')
<script type="text/javascript">
    $(document).ready(function() {
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
        
