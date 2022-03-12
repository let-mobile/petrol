<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="{{ asset('assets_admin/vendor/perfect-scrollbar.css')}}"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="{{ asset('assets_admin/css/app.css')}}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets_admin/css/app.rtl.css')}}"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="{{ asset('assets_admin/css/vendor-material-icons.css')}}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets_admin/css/vendor-material-icons.rtl.css')}}"
              rel="stylesheet">

        <!-- Font Awesome FREE Icons -->
        <link type="text/css"
              href="{{ asset('assets_admin/css/vendor-fontawesome-free.css')}}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets_admin/css/vendor-fontawesome-free.rtl.css')}}"
              rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async
                src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-133433427-1');
        </script>

        <!-- Flatpickr -->
        <link type="text/css"
              href="{{ asset('assets_admin/css/vendor-flatpickr.css')}}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets_admin/css/vendor-flatpickr.rtl.css')}}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets_admin/css/vendor-flatpickr-airbnb.css')}}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets_admin/css/vendor-flatpickr-airbnb.rtl.css')}}"
              rel="stylesheet">

        <!-- Vector Maps -->
        <link type="text/css"
              href="{{ asset('assets_admin/vendor/jqvmap/jqvmap.min.css')}}"
              rel="stylesheet">

    </head>

    <body class="layout-default">

        <div class="preloader"></div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            @include('admin.layouts.navbar')

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div class="mdk-drawer-layout js-mdk-drawer-layout"
                     data-push
                     data-responsive-width="992px">
                    <div class="mdk-drawer-layout__content page">

                       @yield('content')
                    </div>
                    <!-- // END drawer-layout__content -->

                    @include('admin.layouts.sidebar')
                </div>
                <!-- // END drawer-layout -->

            </div>
            <!-- // END header-layout__content -->

        </div>
        <!-- // END header-layout -->

        <!-- App Settings FAB -->
        <div id="app-settings">
            <app-settings layout-active="default"
                          :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app-settings>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('assets_admin/vendor/jquery.min.js')}}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('assets_admin/vendor/popper.min.js')}}"></script>
        <script src="{{ asset('assets_admin/vendor/bootstrap.min.js')}}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{ asset('assets_admin/vendor/perfect-scrollbar.min.js')}}"></script>

        <!-- DOM Factory -->
        <script src="{{ asset('assets_admin/vendor/dom-factory.js')}}"></script>

        <!-- MDK -->
        <script src="{{ asset('assets_admin/vendor/material-design-kit.js')}}"></script>

        <!-- App -->
        <script src="{{ asset('assets_admin/js/toggle-check-all.js')}}"></script>
        <script src="{{ asset('assets_admin/js/check-selected-row.js')}}"></script>
        <script src="{{ asset('assets_admin/js/dropdown.js')}}"></script>
        <script src="{{ asset('assets_admin/js/sidebar-mini.js')}}"></script>
        <script src="{{ asset('assets_admin/js/app.js')}}"></script>

        <!-- App Settings (safe to remove) -->
        <script src="{{ asset('assets_admin/js/app-settings.js')}}"></script>

        <!-- Flatpickr -->
        <script src="{{ asset('assets_admin/vendor/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{ asset('assets_admin/js/flatpickr.js')}}"></script>

        <!-- Global Settings -->
        <script src="{{ asset('assets_admin/js/settings.js')}}"></script>

        <!-- Moment.js -->
        <script src="{{ asset('assets_admin/vendor/moment.min.js')}}"></script>
        <script src="{{ asset('assets_admin/vendor/moment-range.js')}}"></script>

        <!-- Chart.js -->
        <script src="{{ asset('assets_admin/vendor/Chart.min.js')}}"></script>

        <!-- App Charts JS -->
        <script src="{{ asset('assets_admin/js/charts.js')}}"></script>
        <script src="{{ asset('assets_admin/js/chartjs-rounded-bar.js')}}"></script>

        <!-- Chart Samples -->
        <script src="{{ asset('assets_admin/js/page.dashboard.js')}}"></script>
        <script src="{{ asset('assets_admin/js/progress-charts.js')}}"></script>

        <!-- Vector Maps -->
        <script src="{{ asset('assets_admin/vendor/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{ asset('assets_admin/vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
        <script src="{{ asset('assets_admin/js/vector-maps.js')}}"></script>
    
    </body>

</html>
