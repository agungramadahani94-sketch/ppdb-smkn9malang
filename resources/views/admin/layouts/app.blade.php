<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewagon.github.io/stisla-1/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2026 01:32:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

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

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      {{-- -ini navabar --}}
      @include('admin.layouts.navbar')
      
      {{-- end navbar --}}
      {{-- ini sidebar --}}
      @include('admin.layouts.sidebar')
      
      {{-- end sidebar --}}
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Blank Page</h1>
          </div>

          <div class="section-body">
          </div>
        </section>
      </div>
      {{-- end content --}}
      {{--ini footer  --}}
      @include('admin.layouts.footer')
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

<!-- Mirrored from themewagon.github.io/stisla-1/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2026 01:32:10 GMT -->

</html>