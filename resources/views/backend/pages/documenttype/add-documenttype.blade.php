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
                 <h4 class="card-title mb-0">Add Document Type</h4>
              </div>
              <div class="card-body">

                 @include('backend.includes.flash_message')
                 <form method="post" id="employee_form" action="{{ route('save-doctype') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">



                        <div class="col-sm-6">
                             <div class="mb-3">

                                 <label for="name" class="form-label">Document for<span class="text-danger">*</span></label>

                                    <select class="form-control select2" name="document_for" id="document_for">
                                        <option value="">Select Document type</option>
                                        @foreach ($document_list as $key => $value)
                                            <option value="{{ $value['d_for_id'] }}"> {{ $value['document_for'] }} </option>
                                      @endforeach
                                    </select>
                            </div>
                        </div>



                       <div class="col-sm-6">
                          <div class="mb-3">
                             <label class="form-label text-dark">Document Name<span class="text-danger">*</span></label>
                             <input type="text" class="form-control" placeholder="Please Enter document name" name="document_name">
                          </div>
                       </div>
                       <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                       <div class="col-sm-6">
                          <div class="mb-3">
                             <label class="form-label text-dark">Validity Period(In Months)<span class="text-danger">*</span></label>
                             <input type="text" class="form-control" placeholder="Please enter validity period" name="validity_piriod">
                          </div>
                       </div>
                       <!-- Col -->
                       <div class="col-sm-6">
                          <div class="mb-3">
                             <label class="form-label text-dark">Warn Before(In Days)<span class="text-danger">*</span></label>
                             <input type="text" class="form-control" autocomplete="off" placeholder="Please enter warn before" name="warn_before">
                          </div>
                       </div>
                       <!-- Col -->
                    </div>




                    <div class="row">
                         <div class="col-sm-6">
                            <div class="mb-3">

                                <div class="form-check">
                                    <label class="form-check-label text-dark" for="radioSelected">
                                        Is Expire<span class="text-danger">*</span>
                                    </label><br>
                                     <div class="mt-2">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" value="Y" name="is_expire" id="radioInline" checked>
                                            <label class="form-check-label text-dark" for="radioInline">
                                                Yes
                                                </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" value="N" name="is_expire" id="radioInline1">
                                            <label class="form-check-label text-dark" for="radioInline1">
                                                No
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">

                                <div class="form-check">
                                    <label class="form-check-label text-dark" for="radioSelected">
                                        Status<span class="text-danger">*</span>
                                    </label><br>
                                     <div class="mt-2">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" value="A" name="status" id="radioInline" checked>
                                                <label class="form-check-label text-dark" for="radioInline">
                                                Active
                                                </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" value="I" name="status" id="radioInline1">
                                            <label class="form-check-label text-dark" for="radioInline1">
                                                Inactive
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                   <button type="submit" class="btn btn-primary mt-2 submit">Submit</button>
                   <button type="submit" class="btn btn-secondary mt-2 submit">Cancel</button>
                 </form>

              </div>
           </div>
        </div>
     </div>


</div>

@endsection
