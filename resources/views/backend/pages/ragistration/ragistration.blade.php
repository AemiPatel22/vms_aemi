@extends('backend.layout.registration_layout')
@section('section')
<div class="container">
    <div class="account-logo">
       <a href="admin-dashboard.html"><img src="{{ asset('public/backend/assets/img/logo2.png ') }}" alt="Dreamguy's Technologies"></a>
    </div>
    <div class="account-box">
       <div class="account-wrapper">
          <h3 class="account-title">Register</h3>
          <p class="account-subtitle">Access to our dashboard</p>
          <form action="admin-dashboard.html">
             <div class="form-group">
                <label>Email<span class="mandatory">*</span></label>
                <input class="form-control" type="text">
             </div>
             <div class="form-group">
                <label>Password<span class="mandatory">*</span></label>
                <input class="form-control" type="password">
             </div>
             <div class="form-group">
                <label>Repeat Password<span class="mandatory">*</span></label>
                <input class="form-control" type="password">
             </div>
             <div class="form-group text-center">
                <a href = "{{ route('dashboard') }}" class="btn btn-primary account-btn" type="submit">Register</a>
             </div>
             <div class="account-footer">
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
             </div>
          </form>
       </div>
    </div>
 </div>
@endsection
