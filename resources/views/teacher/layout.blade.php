<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Dashboard | Graindashboard UI Kit</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">


    <!-- DEMO CHARTS -->
    <link rel="stylesheet" href="{{asset('demo/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('demo/chartist-plugin-tooltip.css')}}">

    <!-- Template -->
    <link rel="stylesheet" href="{{asset('graindashboard/css/graindashboard.css')}}">

    <!-- icon links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
<!-- Header -->
<header class="header bg-body">
    <nav class="navbar flex-nowrap p-0">
        <div class="navbar-brand-wrapper d-flex align-items-center col-auto">
            <!-- Logo For Mobile View -->
            <a class="navbar-brand navbar-brand-mobile" href="/">
                <img class="img-fluid w-100" src="public/img/logo-mini.png" alt="Graindashboard">
            </a>
            <!-- End Logo For Mobile View -->

            <!-- Logo For Desktop View -->
            <a class="navbar-brand navbar-brand-desktop" href="/">
                <img class="side-nav-show-on-closed" src="public/img/logo-mini.png" alt="Graindashboard" style="width: auto; height: 33px;">
                <img class="side-nav-hide-on-closed" src="public/img/logo.png" alt="Graindashboard" style="width: auto; height: 33px;">
            </a>
            <!-- End Logo For Desktop View -->
        </div>

        <div class="header-content col px-md-3">
            <div class="d-flex align-items-center">
                <!-- Side Nav Toggle -->
                <a  class="js-side-nav header-invoker d-flex mr-md-2" href="#"
                    data-close-invoker="#sidebarClose"
                    data-target="#sidebar"
                    data-target-wrapper="body">
                    <i class="bi bi-list"></i>
                </a>
                <!-- End Side Nav Toggle -->

                <!-- User Notifications -->
                <div class="dropdown ml-auto">
                    <a id="notificationsInvoker" class="header-invoker" href="#" aria-controls="notifications" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#notifications" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                        <span class="indicator indicator-bordered indicator-top-right indicator-primary rounded-circle"></span>
                        <i class="bi bi-bell"></i>
                    </a>

                    <div id="notifications" class="dropdown-menu dropdown-menu-center py-0 mt-4 w-18_75rem w-md-22_5rem unfold-css-animation unfold-hidden" aria-labelledby="notificationsInvoker" style="animation-duration: 300ms;">
                        <div class="card">
                            <div class="card-header d-flex align-items-center border-bottom py-3">
                                <h5 class="mb-0">Notifications</h5>
                                <a class="link small ml-auto" href="#">Clear All</a>
                            </div>

                            <div class="card-body p-0">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center text-nowrap mb-2">
                                            <i class="gd-info-alt icon-text text-primary mr-2"></i>
                                            <h6 class="font-weight-semi-bold mb-0">New Update</h6>
                                            <span class="list-group-item-date text-muted ml-auto">just now</span>
                                        </div>
                                        <p class="mb-0">
                                            Order <strong>#10000</strong> has been updated.
                                        </p>
                                        <a class="list-group-item-closer text-muted" href="#"><i class="gd-close"></i></a>
                                    </div>
                                    <div class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center text-nowrap mb-2">
                                            <i class="gd-info-alt icon-text text-primary mr-2"></i>
                                            <h6 class="font-weight-semi-bold mb-0">New Update</h6>
                                            <span class="list-group-item-date text-muted ml-auto">just now</span>
                                        </div>
                                        <p class="mb-0">
                                            Order <strong>#10001</strong> has been updated.
                                        </p>
                                        <a class="list-group-item-closer text-muted" href="#"><i class="gd-close"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End User Notifications -->
                <!-- User Avatar -->
                <div class="dropdown mx-3 dropdown ml-2">
                    <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#profileMenu" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                        <!--img class="avatar rounded-circle mr-md-2" src="#" alt="John Doe"-->
                        <span class="mr-md-2 avatar-placeholder">J</span>
                        <span class="d-none d-md-block">John Doe</span>
                        <i class="gd-angle-down d-none d-md-block ml-2"></i>
                    </a>

                    <ul id="profileMenu" class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4 unfold-css-animation unfold-hidden fadeOut" aria-labelledby="profileMenuInvoker" style="animation-duration: 300ms;">
                        <li class="unfold-item">
                            <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                    <span class="unfold-item-icon mr-3">
                      <i class="gd-user"></i>
                    </span>
                                My Profile
                            </a>
                        </li>
                        <li class="unfold-item unfold-item-has-divider">
                            <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                    <span class="unfold-item-icon mr-3">
                      <i class="gd-power-off"></i>
                    </span>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End User Avatar -->
            </div>
        </div>
    </nav>
</header>
<!-- End Header -->

<main class="main">
    <!-- Sidebar Nav -->
    <aside id="sidebar" class="js-custom-scroll side-nav">
        <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
            <!-- Title -->
            <li class="sidebar-heading h6">Dashboard</li>
            <!-- End Title -->

            <!-- Dashboard -->
            <li class="side-nav-menu-item active">
                <a class="side-nav-menu-link media align-items-center" href="/">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-dashboard"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard -->

            <!-- Documentation -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="documentation/" target="_blank">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-file"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Documentation</span>
                </a>
            </li>
            <!-- End Documentation -->

            <!-- Title -->
            <li class="sidebar-heading h6">Examples</li>
            <!-- End Title -->

            <!-- Users -->
            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#"
                   data-target="#subUsers">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-user"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body">Time Table</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Users: subUsers -->
                <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="users.html">Add</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="user-edit.html">Look</a>
                    </li>
                </ul>
                <!-- End Users: subUsers -->
            </li>
            <!-- End Users -->

            <!-- Authentication -->
            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#"
                   data-target="#subPages">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-lock"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Assignment</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Pages: subPages -->
                <ul id="subPages" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="login.html">Add</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="register.html">Look</a>
                    </li>
                </ul>
                <!-- End Pages: subPages -->
            </li>
            <!-- End Authentication -->


            
            <!-- Settings -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="settings.html">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-settings"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Settings</span>
                </a>
            </li>
            <!-- End Settings -->

            <!-- Static -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="static-non-auth.html">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-file"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Static page</span>
                </a>
            </li>
            <!-- End Static -->

        </ul>
    </aside>
    <!-- End Sidebar Nav -->

    <div class="content">
        <div class="py-4 px-3 px-md-4">

            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Dashboard</div>
            </div>




        </div>

        <!-- Footer -->
        <footer class="small p-3 px-md-4 mt-auto">
            <div class="row justify-content-between">
                <div class="col-lg text-center text-lg-left mb-3 mb-lg-0">
                    <ul class="list-dot list-inline mb-0">
                        <li class="list-dot-item list-dot-item-not list-inline-item mr-lg-2"><a class="link-dark" href="#">FAQ</a></li>
                        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="#">Support</a></li>
                        <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="#">Contact us</a></li>
                    </ul>
                </div>

                <div class="col-lg text-center mb-3 mb-lg-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i class="gd-twitter-alt"></i></a></li>
                        <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i class="gd-facebook"></i></a></li>
                        <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i class="gd-github"></i></a></li>
                    </ul>
                </div>

                <div class="col-lg text-center text-lg-right">
                    &copy; 2019 Graindashboard. All Rights Reserved.
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
</main>


<script src="{{asset('graindashboard/js/graindashboard.js')}}"></script>
<script src="{{asset('graindashboard/js/graindashboard.vendor.js')}}"></script>

<!-- DEMO CHARTS -->
<script src="{{asset('demo/resizeSensor.js')}}"></script>
<script src="{{asset('demo/chartist.js')}}"></script>
<script src="{{asset('demo/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('demo/gd.chartist-area.js')}}"></script>
<script src="{{asset('demo/gd.chartist-bar.js')}}"></script>
<script src="{{asset('demo/gd.chartist-donut.js')}}"></script>
<script>
    $.GDCore.components.GDChartistArea.init('.js-area-chart');
    $.GDCore.components.GDChartistBar.init('.js-bar-chart');
    $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
</script>
</body>
</html>