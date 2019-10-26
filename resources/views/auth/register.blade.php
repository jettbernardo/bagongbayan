@extends('layouts.auth')
@section('title')
Register | Bagong Bayan Management System 
@endsection
@section('content')
<section id="wrapper" class="login-register login-sidebar"  style="background-image:url({{asset('images/background/login-register.jpg')}});">
  <div class="login-box card">
    <div class="card-body">
      <form class="form-horizontal form-material" method="POST" id="loginform" action="{{route('register')}}">
        @csrf
        <a href="javascript:void(0)" class="text-center db"><img src="{{asset('images/logo-icon.png')}}" alt="Home" /><br/><img src="{{asset('images/logo-text.png')}}" alt="Home" /></a> 
        <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account</small> 
        <div class="form-group m-t-20">
          <div class="col-xs-12">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
          </div>
        </div>
        <div class="form-group">
          <div class="">
            <div class="checkbox checkbox-primary p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
            </div>
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            Already have an account? <a href="{{route('login')}}" class="text-info m-l-5"><b>Sign In</b></a>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection