<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewagon.github.io/stisla-1/layout-top-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2026 01:32:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('') }}assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            {{-- -ini navabar --}}
            @include('guest.layouts.navbar')
            {{-- end navbar --}}

            {{-- ini sidebar --}}
            @include('guest.layouts.sidebar')
            {{-- end sidebar --}}

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Top Navigation</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">Layout</a></div>
                            <div class="breadcrumb-item">Top Navigation</div>
                        </div>
                    </div>

                    <div class="section-body">
                        <h2 class="section-title">This is Example Page</h2>
                        <p class="section-lead">This page is just an example for you to create your own page.</p>
                        <div class="card">
                            <div class="card-header">
                                <h4>Example Card</h4>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="card-footer bg-whitesmoke">
                                This is card footer
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            {{-- end content --}}
            {{--ini footer --}}
            @include('guest.layouts.footer')
            {{-- end footer --}}
        </div>
     

    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('') }}assets/modules/jquery.min.js"></script>
    <script src="{{ asset('') }}assets/modules/popper.js"></script>
    <script src="{{ asset('') }}assets/modules/tooltip.js"></script>
    <script src="{{ asset('') }}assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('') }}assets/modules/moment.min.js"></script>
    <script src="{{ asset('') }}assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('') }}assets/js/scripts.js"></script>
    <script src="{{ asset('') }}assets/js/custom.js"></script>
</body>

<!-- Mirrored from themewagon.github.io/stisla-1/layout-top-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2026 01:32:10 GMT -->

</html>