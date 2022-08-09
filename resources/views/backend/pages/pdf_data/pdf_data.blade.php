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

              <h4 class="card-title mb-0">Add PDF Data</h4>
              <a href="{{route('download-pdf')}}"><i class="fa fa-file-pdf-o fa-2x text-danger mr-3" style="float: right" aria-hidden="true"></i></a>




           </div>
           <div class="card-body">
            @include('backend.includes.flash_message')
              <div class="table-responsive">
                 <table class="table table-hover mb-0"> @csrf
                    <thead>
                       <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Gender</th>
                          <th>Phone Number</th>
                          <th>Discription</th>

                    </thead>
                    <tbody>
                        @php
                        $srno = 1;
                        @endphp
                        @foreach ($pdf_data_list as $key => $value)
                       <tr>
                        <td>{{ $srno }}</td>
                        <td>{{ $value['first_name']}}</td>
                        <td>{{ $value['last_name']}}</td>
                        <td>{{ $value['email']}}</td>
                        <td>{{ $value['gender']}}</td>
                        <td>{{ $value['phone_number']}}</td>
                        <td>{{ $value['description']}}</td>




                       </tr>
                       @php
                       $srno++;
                   @endphp
                   @endforeach


                    </tbody>

                 </table>
              </div>
           </div>
        </div>

    </div>

</div>

@endsection
