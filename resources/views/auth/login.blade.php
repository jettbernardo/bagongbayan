@extends('layouts.auth')
@section('title')
Login | Bagong Bayan Management System 
@endsection
@section('content')
<section id="wrapper" class="login-register login-sidebar" style="background-image:url({{asset('images/background/login-register.jpg')}});">
    <div class="login-box card">
        <div class="card-body">
            <form method="POST" class="form-horizontal form-material" id="loginform"  action="{{ route('login') }}">
                @csrf
                <a href="javascript:void(0)" class="text-center db"><img src="{{asset('images/logo-icon.png')}}" alt="Home" /><br/><img src="{{asset('images/logo-text.png')}}" alt="Home" /></a>
                <div class="form-group m-t-40">
                    <div class="col-xs-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="d-flex no-block align-items-center">
                        <div class="checkbox checkbox-primary p-t-0">
                             <input class="form-check-input" type="checkbox" name="remember" id="checkbox-signup" {{ old('remember') ? 'checked' : '' }}>
                            <label for="checkbox-signup"> Remember me </label>
                        </div>
                        <div class="ml-auto">
                            <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> 
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        Don't have an account? <a href="{{route('register')}}" class="text-primary m-l-5"><b>Sign Up</b></a>
                    </div>
                </div>
            </form>
            <form class="form-horizontal" id="recoverform" action="index.html">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Recover Password</h3>
                        <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
    