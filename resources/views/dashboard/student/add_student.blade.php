@extends('dashboard.main')
@section('tittle', 'Add Student')
@section('student')
active
@endsection
@section('create')
active
@endsection
@section('dashboard_content')

@if(session('exist'))
        <spam class="text-danger">{{ session('exist') }}</spam>
        @endif
        <div class="row">
           <div class="col-lg-12">
               <div class="card">
                   <div class="card-title">
                       <h4>Add Student Info</h4>
                       <hr>
                   </div>
                   @if(session('edit_status'))
                 <spam class="text-danger">{{ session('edit_status') }}</spam>
                 @endif
                   <div class="card-body">
                       <div class="basic-elements">
                       <form class="form-horizontal" method="post" action="{{  route('student.store') }}" enctype="multipart/form-data">
                  @csrf
                               <div class="row">
                                   <div class="col-lg-6">
                                       <div class="form-group">
                                       <input type="hidden" name="student_id"  placeholder=""  class="form-control" >
                                        <label >Student ID</label>
                                      <input type="text" name="std_id"   class="form-control" >
                                      </div>
                                      @error('std_id')
                                   <spam class="text-danger">{{ $message }}</spam>
                                     @enderror
                                       <div class="form-group">
                                       <label >Student Name</label>
                                      <input type="text" name="std_name"  placeholder=""  class="form-control" >
                                    </div>
                                    @error('std_name')
                                   <spam class="text-danger">{{ $message }}</spam>
                                     @enderror
                                       <div class="form-group">
                                       <label >Father's Name</label>
                                        <input type="text" name="std_fname"  class="form-control" >
                                    </div>
                                       <div class="form-group">
                                       <label >Mother's Name</label>
                                          <input type="text" name="std_mname"   class="form-control" >
                                       </div>
                                       <div class="form-group">
                                       <label >Date of Birth</label>
                                       <input type="text" name="std_dob"  class="form-control" >
                                        </div>
                                        <div class="form-group">
                                        <label >NID</label>
                                        <input type="text" name="std_nid" class="form-control" >
                                      </div>
                                       <div class="form-group">
                                       <label >Phone</label>
                                          <input type="text" name="std_phone"  class="form-control" >
                                     </div>
                                       <div class="form-group">
                                       <label >Email</label>
                                       <input type="text" name="std_email"  class="form-control" >
                                    </div>


                                  </div>
                                   <div class="col-lg-6">
                                       <div class="form-group">
                                       <label >Program</label>
                                       <select name="std_program" id="faculty" class="form-control">
                            <option >Select Faculty</option>
                            @foreach($programe as $p)
						           <option value="{{$p->programe_name}}">{{$p->programe_name}}</option>
                            @endforeach
						    </select>
                                        </div>
                                       <div class="form-group">
                                       <label >Batch</label>
                                         <input type="text" name="std_batch"  class="form-control" >
                                        </div>
                                       <div class="form-group">
                                       <label >CGPA</label>
                                         <input type="text" name="std_cgpa"  class="form-control" >
                                       </div>
                                       <div class="form-group">
                                       <label >Complete Credit</label>
                                         <input type="text" name="std_tcredit"   class="form-control" >
                                         </div>
                                         <div class="form-group">
                                         <label >Certificate SL No.</label>
                                       <input type="text" name="std_certificate_no"  class="form-control" >
                                        </div>
                                        @error('std_certificate_no')
                                   <spam class="text-danger">{{ $message }}</spam>
                                     @enderror
                                        <div class="form-group">
                                           <label>Certificate Status</label>
                                           <select class="form-control" name="std_certificate_issue">
	                                        	<option value="Issued">Issued</option>
	                                        	<option value="Not Issued">Not Issued</option>
	                                        </select>
                                       </div>

                                         <div class="form-group">
                                         <label >Publication Date</label>
                                          <input type="text" name="std_publication_date"  class="form-control" >
                                          </div>

                                           <div class="form-group">
                                           <label >Start Semester</label>
                                                 <input type="text" name="std_lsemester"  class="form-control" >
                                           </div>

                                   </div>
                               </div>


                               <div class="form-group">

<div class="col-lg-offset-4 col-lg-10">
<!-- <span class="btn green fileinput-button"><i class="fa fa-plus fa fa-white"></i>
<span>Attachment</span>
<input type="file" name="std_photo">
</span> -->
             <button class="btn btn-primary" type="submit">Add Profile</button>
             </div>
           </div>

                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>


        
       
@endsection