<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RC-POS - Login</title>
    <link href="{{ asset('assets_user/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_user/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets_user/css/styles.css') }}" rel="stylesheet">
  </head>
  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header bg-primary text-white">Login to your account</div>
        <div class="card-body">
          <form method="POST" action="{{ url('store') }}">
            @csrf
            <div class="form-group">


                <label for="name">Name</label>
                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
            <div class="form-group">


                <label for="email">Enter username</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

            <div class="form-group">


                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <select class="form-control" name="role">
                <option>Select Item</option>
                @foreach ($data as $value)
                    <option value="{{ $value->id }}">
                        {{ $value->name }}
                    </option>
                @endforeach
            </select>

            {{-- <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div> --}}
            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('register') }}
                    </button>

                    {{-- @if (Route::has('password.request'))
                        <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif --}}
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="{{ url('assets_user/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets_user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets_user/js/jquery.easing.min.js') }}"></script>
  </body>
</html>
