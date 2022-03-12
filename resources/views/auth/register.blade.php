<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Blog | Registration Page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href=""><b>My </b>Blog</a>
    </div>
    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>
        @if(session()->has('success'))
        <div class="alert alert-info">
          {{ session()->get('success') }}
        </div>
        @endif
        <form action="{{ url('auth/user/register') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name" name="name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          @if ($errors->has('name'))
          <span class="text-danger">{{ $errors->first('name') }}</span>
          @endif
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          @if ($errors->has('password'))
          <span class="text-danger">{{ $errors->first('password') }}</span>
          @endif
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Retype password" name="confirm_password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          @if ($errors->has('confirm_password'))
          <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
          @endif
          <div class="row">
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
          </div>
        </form>
        <a href="{{ url('auth/login') }}" class="text-center">I already have a membership</a>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
</body>

</html>