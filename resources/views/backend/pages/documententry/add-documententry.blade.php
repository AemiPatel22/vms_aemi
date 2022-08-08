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
                 <h4 class="card-title mb-0">Add Document</h4>
              </div>
              <div class="card-body">

                 @include('backend.includes.flash_message')
                 <form method="post" id="docentry_form" action="{{ route('save-docentry') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">



                        <div class="col-sm-6">
                             <div class="mb-3">

                                 <label for="name" class="form-label text-dark">Document for<span class="text-danger">*</span></label>

                                    <select class="form-control select2" name="document_for" id="document_for">
                                        <option value="">Select Document</option>
                                        @foreach ($document_for as $key => $value)
                                            <option value="{{ $value['id'] }}"> {{ $value['document_for'] }} </option>
                                      @endforeach
                                    </select>
                            </div>
                        </div>



                       <div class="col-sm-6">
                          <div class="mb-3">
                             <label class="form-label text-dark">Document Type<span class="text-danger">*</span></label>
                             <select class="form-control select2" name="document_type" id="document_type">
                                <option value="">Select Document Type</option>

                            </select>
                          </div>
                       </div>
                       <!-- Col -->
                    </div>
                    <!-- Row -->
                    <div class="row">
                       <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label text-dark">Document Of<span class="text-danger">*</span></label>
                            <select class="form-control select2" name="document_of" id="document_of">
                               <option value="">Select Document</option>

                           </select>
                         </div>
                       </div>
                       <!-- Col -->
                       <div class="col-sm-6">
                          <div class="mb-3">
                             <label class="form-label text-dark">Issue Date<span class="text-danger">*</span></label>
                             <input type="date" class="form-control" autocomplete="off" placeholder="Please enter warn before" name="issue_date">
                          </div>
                       </div>
                       <!-- Col -->
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                           <div class="mb-3">
                              <label class="form-label text-dark">Expriy Date<span class="text-danger">*</span></label>
                              <input type="date" class="form-control" placeholder="Please enter expriy date" name="expriy_date">
                           </div>
                        </div>
                        <!-- Col -->
                        <div class="col-sm-6">
                           <div class="mb-3">
                              <label class="form-label text-dark">Document Number<span class="text-danger">*</span></label>
                              <input type="text" class="form-control" autocomplete="off" placeholder="Please enter document number" name="document_number">
                           </div>
                        </div>
                        <!-- Col -->
                     </div>




                    <div class="row">
                         <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label text-dark">Issue Place<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" autocomplete="off" placeholder="Please enter issue place" name="issue_place">
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
                   <button type="reset" class="btn btn-secondary mt-2 reset">Cancel</button>
                 </form>

              </div>
           </div>
        </div>
     </div>


</div>

@endsection
