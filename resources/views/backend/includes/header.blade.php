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

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/backend/assets/img/favicon.png') }}">

	<link rel="stylesheet" href="{{ asset('public/backend/assets/css/bootstrap.min.css') }}">

	<link rel="stylesheet" href="{{ asset('public/backend/assets/css/font-awesome.min.css') }}">

	<link rel="stylesheet" href="{{ asset('public/backend/assets/css/line-awesome.min.css') }}">

	<link rel="stylesheet" href="{{ asset('public/backend/assets/plugins/morris/morris.css') }}">

	<link rel="stylesheet" href="{{ asset('public/backend/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/mystyle.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('public/backend/assets/css/style.bundle.css') }}"> --}}
    {{-- <link href="{{ asset('public/backend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" /> --}}

    @if (!empty($css))
    @foreach ($css as $value)
        @if(!empty($value))
            <link rel="stylesheet" href="{{ asset('public/backend/assets/css/'.$value) }}">
        @endif
    @endforeach
@endif

@if (!empty($plugincss))
            @foreach ($plugincss as $value)
                @if(!empty($value))
                    <link rel="stylesheet" href="{{ asset('public/backend/assets/'.$value) }}">
                @endif
            @endforeach
        @endif
<script>
    var baseurl = "{{ asset('/') }}";
</script>
</head>
