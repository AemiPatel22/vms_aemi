@extends('backend.layout.login_layout')
@section('section')
<div class="container">
    <div class="account-logo">
       <a href="{{ route('dashboard') }}"><img src="{{ asset('public/backend/assets/img/logo2.png ') }}" alt="Dreamguy's Technologies"></a>
    </div>
    <div class="account-box">
       <div class="account-wrapper">
          <h3 class="account-title">Login</h3>
          <p class="account-subtitle">Access to our dashboard</p>
          <form action="admin-dashboard.html">
             <div class="form-group">
                <label>Email Address</label>
                <input class="form-control" type="text" value="admin@dreamguys.in">
             </div>
             <div class="form-group">
                <div class="row">
                   <div class="col">
                      <label>Password</label>
                   </div>

                </div>
                <div class="position-relative">
                   <input class="form-control" type="password" value="123456" id="password">
                   <span class="fa fa-eye-slash" id="toggle-password"></span>
                </div>
             </div>
             <div class="form-group text-center">
                <a href = "{{ route('dashboard') }}" class="btn btn-primary account-btn" type="submit">Login</a>
             </div>
             <div class="account-footer">
                <p>Don't have an account yet? <a href="{{ route('register') }}">Register</a></p>
             </div>
          </form>
       </div>
    </div>
 </div>

@endsection
