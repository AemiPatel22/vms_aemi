<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <meta name="description" content="Smarthr - Bootstrap Admin Template">
      <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
      <meta name="author" content="Dreamguys - Bootstrap Admin Template">
      <meta name="robots" content="noindex, nofollow">
      <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />
    <meta name="keywords" content="{{ $keywords }}" />
      <link rel="shortcut icon" type="image/x-icon" href=" {{ asset('public/backend/assets/img/favicon.png ') }}">
      <link rel="stylesheet" href="{{ asset('public/backend/assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('public/backend/assets/css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('public/backend/assets/css/style.css') }}">
      <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="account-page">
      <div class="main-wrapper">
         <div class="account-content">
            <div class="account-content">
                @yield('section')
         </div>
      </div>
      <script src="{{ asset('public/backend/assets/js/jquery-3.6.0.min.js ') }}"></script>
      <script src="{{ asset('public/backend/assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('public/backend/assets/js/app.js') }}"></script>
   </body>
</html>
