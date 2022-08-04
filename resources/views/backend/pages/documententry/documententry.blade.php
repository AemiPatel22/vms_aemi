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
                  <h4 class="card-title mb-0">Add Document</h4>
                  <a href="{{route('add-docentry')}}"><button type="button"  style="float: right" class="btn btn-primary text-white">Add Document</button></a>
               </div>
               <div class="card-body">
                @include('backend.includes.flash_message')
                  <div class="table-responsive">
                     <table class="table table-hover mb-0"> @csrf
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Document For</th>
                              <th>Document Type</th>
                              <th>Document Of</th>
                              <th>Issue Date</th>
                              <th>Expriy Date</th>
                              <th>Document Number</th>
                              <th>Issue Place</th>
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
                            <td>{{ $value['document_type']}}</td>
                            <td>{{ $value['document_of']}}</td>
                            <td>{{ $value['issue_date']}}</td>
                            <td>{{ $value['expriy_date']}}</td>
                            <td>{{ $value['document_number']}}</td>
                            <td>{{ $value['issue_place']}}</td>

                            <td>
                                <h5><span class="badge  {{ $value['status'] == 'A' ? 'bg-primary' : 'bg-danger'}} ">{{ $value['status'] == 'A' ? 'Active' : 'Inactive'}}</span></h5>
                            </td>


                             <td>
                                                <a href ="{{ route('view-docentry',$value['id']) }}"><i class="text-info fa fa-eye mr-2"></i></a>&nbsp;

                                                <a href="{{ route('edit-docentry',$value['id']) }}"><i class="text-warning fa fa-edit mr-2"></i></a>

                                                @if ($value['status'] == 'A')
                                                    <a class="docentry-action" data-bs-toggle="modal" data-bs-target="#inactiveModal" data-action-type="0" data-id="{{ $value['id']; }}"><i class="text-primary fa fa-close  mr-2"></i></a>
                                                @else
                                                    <a class="docentry-action" data-bs-toggle="modal" data-bs-target="#activeModal" data-action-type="1" data-id="{{ $value['id']; }}"><i class="text-primary fa fa-check mr-2"></i></a>
                                                @endif

                                                <a class="docentry-action" data-bs-toggle="modal" data-bs-target="#deleteModal" data-action-type="2" data-id="{{ $value['id']; }}"><i class="text-danger fa fa-trash mr-2"></i></a>

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
