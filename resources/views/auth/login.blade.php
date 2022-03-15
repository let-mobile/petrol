<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MyBlog | Login </title>
  <meta name="robots" content="noindex">
  <link type="text/css" href="{{ asset('assets_admin/vendor/perfect-scrollbar.css')}}" rel="stylesheet">
  <link type="text/css" href="{{ asset('assets_admin/css/app.css')}}" rel="stylesheet">
  <link type="text/css" href="{{ asset('assets_admin/css/vendor-material-icons.css')}}" rel="stylesheet">
  <link type="text/css" href="{{ asset('assets_admin/css/vendor-fontawesome-free.css')}}" rel="stylesheet">
</head>

<body class="layout-login-centered-boxed">
  <div class="layout-login-centered-boxed__form card">
    <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-4 navbar-light">
      <a href="javascript:;" class="navbar-brand flex-column mb-2 align-items-center mr-0" style="min-width: 0">
        <span class="text-primary mr-2">
          <img src="{{ asset('assets/images/41JkMnWHCKL.jpg') }}" style="width: 45%;margin-left:25%;" alt="avatar">
        </span>
      </a>
      <p class="m-0">Login to access your Account </p>
    </div>
    @if(Session::has('error'))
    <div class="alert alert-danger">
      {{ Session::get('error') }}
      @php
      Session::forget('error');
      @endphp
    </div>
    @endif
    @if(Session::has('warning'))
    <div class="alert alert-warning">
      {{ Session::get('warning') }}
      @php
      Session::forget('warning');
      @endphp
    </div>
    @endif
    <form action="{{ url('auth/user/auth') }}" method="post">
      @csrf
      <div class="form-group">
        <label class="text-label" for="email_2" class="required">Email:</label>
        <div class="input-group input-group-merge">
          <input id="email_2" type="text" required="" name="email" class="form-control form-control-prepended" placeholder="john@doe.com">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="far fa-envelope"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="text-label" for="password_2" class="required">Password:</label>
        <div class="input-group input-group-merge">
          <input id="password_2" type="password" required="" name="password" class="form-control form-control-prepended" placeholder="Enter your password">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="fa fa-key"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <button class="btn btn-block btn-primary" type="submit">Login</button>
      </div>
      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="remember" value="1" class="custom-control-input" id="remember">
          <label class="custom-control-label" for="remember">Remember me</label>
        </div>
      </div>
      <div class="form-group text-center">
        <a href="{{ route('forget.password.get') }}">Forgot password?</a>
      </div>
    </form>
  </div>
  </div>
  <script src="{{ asset('assets_admin/vendor/jquery.min.js')}}"></script>
  <script src="{{ asset('assets_admin/vendor/popper.min.js')}}"></script>
  <script src="{{ asset('assets_admin/vendor/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets_admin/vendor/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('assets_admin/vendor/dom-factory.js')}}"></script>
  <script src="{{ asset('assets_admin/vendor/material-design-kit.js')}}"></script>
  <script src="{{ asset('assets_admin/js/app.js')}}"></script>
</body>

</html>