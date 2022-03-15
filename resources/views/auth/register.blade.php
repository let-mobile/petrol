<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <meta name="robots" content="noindex">
  <link type="text/css" href="{{ asset('assets_admin/vendor/perfect-scrollbar.css')}}" rel="stylesheet">
  <link type="text/css" href="{{ asset('assets_admin/css/app.css')}}" rel="stylesheet">
  <link type="text/css" href="{{ asset('assets_admin/css/vendor-material-icons.css')}}" rel="stylesheet">
  <link type="text/css" href="{{ asset('assets_admin/css/vendor-fontawesome-free.css')}}" rel="stylesheet">
</head>

<body class="layout-login-centered-boxed">
  <div class="layout-login-centered-boxed__form card">
    <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
      <a href="index.html" class="navbar-brand flex-column mb-2 align-items-center mr-0" style="min-width: 0">
        <img class="navbar-brand-icon mr-0 mb-2" src="{{ asset('assets/images/41JkMnWHCKL.jpg') }}" width="200" alt="FlowDash">
        <span>Petrolium</span>
      </a>
      <p class="m-0">Create an account</p>
    </div>
    <form action="{{ url('user/register') }}" method="post">
      @csrf
      <div class="form-group">
        <label class="text-label" for="name_2">Name:</label>
        <div class="input-group input-group-merge">
          <input id="name_2" type="text" required="" name="name" class="form-control form-control-prepended" placeholder="John Doe">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="far fa-user"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="text-label" for="email_2">Email Address:</label>
        <div class="input-group input-group-merge">
          <input id="email_2" type="email" name="email" required="" class="form-control form-control-prepended" placeholder="john@doe.com">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="far fa-envelope"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="text-label" for="password_2">Password:</label>
        <div class="input-group input-group-merge">
          <input id="password_2" type="password" name="password" required="" class="form-control form-control-prepended" placeholder="Enter your password">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="far fa-key"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="text-label" for="password_2">Confirm Password:</label>
        <div class="input-group input-group-merge">
          <input type="password" class="form-control" placeholder="Retype password" name="confirm_password">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="far fa-key"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group mb-5">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" checked="" class="custom-control-input" id="terms" />
          <label class="custom-control-label" for="terms">I accept <a href="#">Terms and Conditions</a></label>
        </div>
      </div>
      <div class="form-group text-center">
        <button class="btn btn-primary mb-2" type="submit">Create Account</button><br>
        <a class="text-body text-underline" href="{{ url('auth/login') }}">Have an account? Login</a>
      </div>
    </form>
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