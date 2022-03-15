<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Dashboard</title>
      <meta name="robots" content="noindex">
      <link type="text/css" href="{{ asset('assets_admin/vendor/perfect-scrollbar.css')}}" rel="stylesheet">
      <link type="text/css" href="{{ asset('assets_admin/css/app.css')}}" rel="stylesheet">
      <link type="text/css" href="{{ asset('assets_admin/css/vendor-material-icons.css')}}" rel="stylesheet">
      <link type="text/css" href="{{ asset('assets_admin/css/vendor-fontawesome-free.css')}}" rel="stylesheet">

</head>

<body class="layout-default">

      <div class="preloader"></div>

      <div class="mdk-header-layout js-mdk-header-layout">
            @include('layouts.navbar')
            <div class="mdk-header-layout__content">

                  <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                        <div class="mdk-drawer-layout__content page">

                              @yield('content')
                        </div>
                        @include('layouts.sidebar')
                  </div>
            </div>
      </div>
      <div id="app-settings">
            <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app-settings>
      </div>
      <script src="{{ asset('assets_admin/vendor/jquery.min.js')}}"></script>
      <script src="{{ asset('assets_admin/vendor/popper.min.js')}}"></script>
      <script src="{{ asset('assets_admin/vendor/bootstrap.min.js')}}"></script>
      <script src="{{ asset('assets_admin/vendor/perfect-scrollbar.min.js')}}"></script>
      <script src="{{ asset('assets_admin/vendor/dom-factory.js')}}"></script>
      <script src="{{ asset('assets_admin/vendor/material-design-kit.js')}}"></script>
      <script src="{{ asset('assets_admin/js/toggle-check-all.js')}}"></script>
      <script src="{{ asset('assets_admin/js/check-selected-row.js')}}"></script>
      <script src="{{ asset('assets_admin/js/dropdown.js')}}"></script>
      <script src="{{ asset('assets_admin/js/sidebar-mini.js')}}"></script>
      <script src="{{ asset('assets_admin/js/app.js')}}"></script>
      <script src="{{ asset('assets_admin/js/app-settings.js')}}"></script>
      <script src="{{ asset('assets_admin/vendor/flatpickr/flatpickr.min.js')}}"></script>
      <script src="{{ asset('assets_admin/js/flatpickr.js')}}"></script>
      <script src="{{ asset('assets_admin/js/settings.js')}}"></script>
      <script src="{{ asset('assets_admin/vendor/moment.min.js')}}"></script>
      <script src="{{ asset('assets_admin/vendor/moment-range.js')}}"></script>
      <script src="{{ asset('assets_admin/vendor/Chart.min.js')}}"></script>
      <script src="{{ asset('assets_admin/js/charts.js')}}"></script>
      <script src="{{ asset('assets_admin/js/chartjs-rounded-bar.js')}}"></script>
      <script src="{{ asset('assets_admin/js/page.dashboard.js')}}"></script>
      <script src="{{ asset('assets_admin/js/progress-charts.js')}}"></script>
      <script src="{{ asset('assets_admin/vendor/jqvmap/jquery.vmap.min.js')}}"></script>
      <script src="{{ asset('assets_admin/vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
      <script src="{{ asset('assets_admin/js/vector-maps.js')}}"></script>

</body>

</html>