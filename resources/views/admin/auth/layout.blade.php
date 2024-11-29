<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0"/>
    <title>Pawketplace - Backpanel</title>
    @yield('css')
    <link href="{{ asset('css/coreui.min.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/vendors/simplebar.css"> -->
    <!-- Main styles for this application-->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/backpanel/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
</head>
<body>

@yield('content')

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
@yield('scripts')
</body>
</html>
