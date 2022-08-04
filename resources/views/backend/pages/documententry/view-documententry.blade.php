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
        @csrf
        <div class="card mb-0">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-12">
                     <div class="profile-view">

                        <div class="profile-basic">
                           <div class="row">
                              <div class="col-md-5">
                                 <div class="profile-info-left">
                                    <h3 class="user-name m-t-0 mb-0">Aemi Patel</h3>
                                    <h6 class="text-muted">CEO</h6>

                                    <div class="staff-id">Document ID : {{$document_list[0]['id']}}</div>

                                    <div class="staff-msg"><a class="btn btn-custom" href="chat.html">Send Message</a></div>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <ul class="personal-info">
                                    <li>
                                       <div class="title">Document For:</div>
                                       <div class="text"><a href="">{{$document_list[0]['document_for']}}</a></div>
                                    </li>
                                    <li>
                                       <div class="title">Document Type:</div>
                                       <div class="text"><a href="">{{$document_list[0]['document_type']}}</span></a></div>
                                    </li>
                                    <li>
                                       <div class="title">Document Of:</div>
                                       <div class="text">{{$document_list[0]['document_of']}}</div>
                                    </li>
                                    <li>
                                       <div class="title">Issue Date:</div>
                                       <div class="text">{{$document_list[0]['issue_date']}}</div>
                                    </li>
                                    <li>
                                        <div class="title">Expire Date:</div>
                                        <div class="text">{{$document_list[0]['expriy_date']}}</div>
                                     </li>
                                     <li>
                                        <div class="title">Document Number:</div>
                                        <div class="text">{{$document_list[0]['document_number']}}</div>
                                     </li><br>
                                     <li>
                                        <div class="title">Issue Place:</div>
                                        <div class="text">{{$document_list[0]['issue_place']}}</div>
                                     </li>
                                    <li>
                                       <div class="title">Is Deleted:</div>
                                       <div class="text">

                                        @if ($document_list[0]['is_deleted']=='Y')
                                            Yes
                                        @else
                                           No

                                        @endif

                                    </div>
                                    </li>
                                    <li>
                                       <div class="title">Status:</div>
                                       <div class="text">
                                        @if($document_list[0]['status']=='A')
                                           Active
                                        @else
                                            Inactive
                                        @endif
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
     </div>
     </div>


</div>

@endsection
