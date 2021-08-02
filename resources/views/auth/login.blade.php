@extends('layouts.app')

@section('content')
    <!-- /.login-logo -->
    <div class="login-box-body">
        <form action="{{ route('login') }}" method="post">
            @csrf
          <div class="form-group has-feedback @error('email') has-error @enderror">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @error('email')
                <span class="text-danger">
                    <small>{{ $message }}</small>
                </span>
            @enderror
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" @error('password') has-error @enderror class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @error('password')
                <span class="text-danger">
                    <small>{{ $message }}</small>
                </span>
            @enderror
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input name="remember" type="checkbox"> Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

      </div>
@endsection
