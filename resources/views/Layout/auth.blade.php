<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('/css/dashboard/styles.min.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
            @yield('authContent')
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('/js/homepage/login.js')}}"></script>

  @if (Session::has('error'))
  <script>
      toastr.options = {
          "progressBar" : true,
          "closeButton" : true,
          "positionClass": "toast-bottom-right",
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
      }

      toastr.error("{{ session()->get('error')}}");
  </script>
  @endif
</body>

</html>