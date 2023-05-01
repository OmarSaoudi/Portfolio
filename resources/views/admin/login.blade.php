@extends('admin.layouts.auth')

@section('title')
   Log in
@stop

@section('css')

@endsection


@section('content_auth')
<div class="login-box">
    <div class="register-logo">
        <a href="{{ url('/') }}"><img src="{{ URL::asset('attachments/settings_images/'.$settings->settings_images) }}" alt="Company Logo" width="250" height="130"></a>
      </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Login To <b>{{ $settings->name }}</b></p>

      <form action="{{ route('login') }}" method="post" class="form-login">
        @csrf
        <div class="form-group has-feedback @error('email') has-error @enderror">
            <input type="text" name="login" class="form-control" placeholder="Email or Phone" required value="{{ old('login') }}" autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @error('email')
                <span class="help-block">{{ $message }}</span>
            @else
            <span class="help-block with-errors"></span>
            @enderror
        </div>
        <div class="form-group has-feedback @error('password') has-error @enderror">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @error('password')
                <span class="help-block">{{ $message }}</span>
            @else
                <span class="help-block with-errors"></span>
            @enderror
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> Remember Me
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

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection


@section('scripts')

@endsection
