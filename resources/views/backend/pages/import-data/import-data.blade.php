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

              <h4 class="card-title mb-0">Import</h4>

           </div>
           <div class="card-body">
            @include('backend.includes.flash_message')
              <form method="POST" enctype="multipart/form-data" action="{{ route('import') }}">
                @csrf
                <div class="form-group">
                    <label for="title">Choose Excel File</label>
                    <input type="file" name="file" class="form-control"/>


                </div>

                <button type="submit" class="btn btn-primary mt-2 submit">Submit</button>
                   <button type="reset" class="btn btn-secondary mt-2 reset">Cancel</button>
              </form>
           </div>
        </div>

</div>

</div>

@endsection
