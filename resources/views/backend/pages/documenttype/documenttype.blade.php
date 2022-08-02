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
                  <h4 class="card-title mb-0">Document Type list</h4>
                  <a href="{{route('add-doctype')}}"><button type="button"  style="float: right" class="btn btn-primary text-white">Add Document Type</button></a>
               </div>
               <div class="card-body">
                @include('backend.includes.flash_message')
                  <div class="table-responsive">
                     <table class="table table-hover mb-0"> @csrf
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Document For</th>
                              <th>Document Name</th>
                              <th>Validity Period(In Months)</th>
                              <th>Warn Before(In Days)</th>
                              <th>Is Expires</th>
                              <th>Status</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                            @php
                            $srno = 1;
                            @endphp
                            @foreach ($document_list as $key => $value)
                           <tr>
                            <td>{{ $srno }}</td>
                            <td>{{ $value['document_for']}}</td>
                            <td>{{ $value['document_name']}}</td>
                            <td>{{ $value['validity_piriod']}}</td>
                            <td>{{ $value['warn_before']}}</td>
                            <td>
                                <h5><span class="badge  {{ $value['is_expire'] == 'Y' ? 'bg-primary' : 'bg-danger'}} ">{{ $value['is_expire'] == 'Y' ? 'Yes' : 'No'}}</span></h5>
                            </td>
                            <td>
                                <h5><span class="badge  {{ $value['status'] == 'A' ? 'bg-primary' : 'bg-danger'}} ">{{ $value['status'] == 'A' ? 'Active' : 'Inactive'}}</span></h5>
                            </td>


                             <td>
                                                <a href ="{{ route('view-doctype',$value['id']) }}"><i class="text-info fa fa-eye mr-2"></i></a>&nbsp;

                                                <a href="{{ route('edit-doctype',$value['id']) }}"><i class="text-warning fa fa-edit mr-2"></i></a>

                                                @if ($value['status'] == 'A')
                                                    <a><i class="text-primary fa fa-close doctype-action mr-2"   data-bs-toggle="modal" data-bs-target="#inactiveModal" data-action-type="0" data-id="{{ $value['id']; }}"></i></a>
                                                @else
                                                    <a><i class="text-primary fa fa-check doctype-action"   data-bs-toggle="modal" data-bs-target="#activeModal" data-action-type="1" data-id="{{ $value['id']; }}"></i></a>
                                                @endif

                                                <a><i class="text-danger fa fa-trash doctype-action" data-bs-toggle="modal" data-bs-target="#deleteModal" data-action-type="2" data-id="{{ $value['id']; }}"></i></a>

                                </td>

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
