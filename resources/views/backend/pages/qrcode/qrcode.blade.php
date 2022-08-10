@extends('backend.layout.layout')
@section('section')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Welcome User!</h3>
                @include('backend.includes.breadcrumb')
            </div>
        </div>
    </div>

    <div class="row">


        <div class="card">
           <div class="card-header">
            <h2>Simple QR generater</h2>
           </div>
           <div class="card-body">
            @include('backend.includes.flash_message')

            {!! QrCode::size(200)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-8') !!}

           </div>
        </div>

    </div>

</div>

@endsection
