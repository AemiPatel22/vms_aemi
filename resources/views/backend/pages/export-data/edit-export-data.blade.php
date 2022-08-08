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
        <div class="col-md-12">
           <div class="card mb-0">
              <div class="card-header">
                 <h4 class="card-title mb-0">Edit Data</h4>
              </div>
              <div class="card-body">

                 @include('backend.includes.flash_message')
                 <form method="post" id="docentry_form" action="{{ route('save-export-data') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- Row -->
                    <div class="row">
                       <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label text-dark">First Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" autocomplete="off" placeholder="Please enter Your first name" name="first_name">
                         </div>
                       </div>
                       <!-- Col -->
                       <div class="col-sm-6">
                          <div class="mb-3">
                             <label class="form-label text-dark">Last Name<span class="text-danger">*</span></label>
                             <input type="text" class="form-control" autocomplete="off" placeholder="Please enter your last name" name="last_name">
                          </div>
                       </div>
                       <!-- Col -->
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                           <div class="mb-3">
                              <label class="form-label text-dark">Email<span class="text-danger">*</span></label>
                              <input type="text" class="form-control" placeholder="Please enter your email" name="email">
                           </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                           <div class="mb-3">
                              <label class="form-label text-dark">Phone Number<span class="text-danger">*</span></label>
                              <input type="text" class="form-control" autocomplete="off" placeholder="Please enter your phone number" name="phone_number">
                           </div>
                        </div>
                        <!-- Col -->
                     </div>




                    <div class="row">

                        {{-- <div class="col-sm-6">
                            <div class="mb-3">
                               <label class="form-label text-dark">Input File</label>
                               <input type="file" class="form-control" autocomplete="off" name="file">
                            </div>
                        </div> --}}
                        <div class="col-sm-6">
                            <div class="mb-3">
                               <label class="form-label text-dark">Description<span class="text-danger">*</span></label>
                               <input type="text" class="form-control" autocomplete="off" placeholder="Please enter description" name="description">
                            </div>
                         </div>
                        <div class="col-sm-6">
                            <div class="mb-3">

                                <div class="form-check">
                                    <label class="form-check-label text-dark" for="radioSelected">
                                        Gender<span class="text-danger">*</span>
                                    </label><br>
                                     <div class="mt-2">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" value="M" name="gender" id="radioInline">
                                                <label class="form-check-label text-dark" for="radioInline">
                                                Male
                                                </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" value="F" name="gender" id="radioInline1">
                                            <label class="form-check-label text-dark" for="radioInline1">
                                                Female
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>



                   <button type="submit" class="btn btn-primary mt-2 submit">Submit</button>
                   <button type="reset" class="btn btn-secondary mt-2 reset">Cancel</button>
                 </form>

              </div>
           </div>
        </div>
     </div>


</div>

@endsection
