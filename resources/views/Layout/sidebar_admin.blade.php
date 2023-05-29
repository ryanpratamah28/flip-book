<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('/css/dashboard/styles.min.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @if (Auth::check())
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="{{url('/')}}" class="text-nowrap logo-img">
                        <img src="{{ asset('/images/logos/dark-logo.svg') }}" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{url('/dashboard/admin/home')}}">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Flipbook generator</span>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{url('/dashboard/admin/flipbook')}}">
                                <span>
                                    <i class="ti ti-book"></i>
                                </span>
                                <span class="hide-menu">Page 1</span>
                            </a>
                        </li>

                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Account Management</span>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{url('/dashboard/admin/account')}}">
                                <span>
                                    <i class="ti ti-user-plus"></i>
                                </span>
                                <span class="hide-menu">List Admin Account</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown d-flex align-items-center">
                                <p class="mb-0 fs-3">Hi, {{ old('nama', Auth::user()->username)}} </p>

                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    @if(is_null(auth()->user()->image_profile))
                                    <img src="{{asset('images/profile/user-1.jpg')}}" class="rounded-circle" alt=""
                                        width="37" height="35">
                                    @else
                                    <img src="{{asset('images/profile/'. auth()->user()->image_profile)}}"
                                        class="rounded-circle" alt="" width="37" height="35">
                                    @endif
                                </a>

                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="{{route('profile.edit')}}"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>

                                        <a href="{{route('change-password')}}"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-lock fs-6"></i>
                                            <p class="mb-0 fs-3">Change Password</p>
                                        </a>

                                        <a href="{{route('logout')}}"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!--  Header End -->

            <div class="container-fluid" style="padding: 85px 0px 0px">
                @yield('dashboardContent')
            </div>

        </div>
    </div>

    <script src="{{ asset('/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/dashboard/sidebarmenu.js') }} "></script>

    <script src="{{ asset('/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/libs/simplebar/dist/simplebar.js') }} "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('/js/dashboard/app.min.js') }} "></script>
    <script src="{{ asset('/js/dashboard/dashboard.js') }}"></script>
    <script src="{{ asset('/js/dashboard/account.js')}}"></script>
    <script src="{{ asset('/js/dashboard/changePassword.js')}}"></script>

    @if (Session::has('success'))
        <script>
            toastr.options = {
                "progressBar" : true,
                "closeButton" : true,
                "positionClass": "toast-bottom-right",
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
            }

            toastr.success("{{ session()->get('success')}}");
        </script>
    @endif

    @if (Session::has('passwordUpdated'))
        <script>
            toastr.options = {
                "progressBar" : true,
                "closeButton" : true,
                "positionClass": "toast-bottom-right",
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
            }
            toastr.success("{{ session()->get('passwordUpdated')}}");
        </script>
    @endif

    @if (Session::has('deleted'))
    <script>
        toastr.options = {
            "progressBar" : true,
            "closeButton" : true,
            "positionClass": "toast-bottom-right",
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
        }

        toastr.error("{{ session()->get('deleted')}}");
    </script>
    @endif

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

    @endif
</body>

</html>
