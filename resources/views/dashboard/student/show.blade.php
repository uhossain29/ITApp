@extends('dashboard.main')
@section('tittle', 'Update Student')
@section('student')
active
@endsection
@section('dashboard_content')
<div class="row">
           <div class="col-lg-12">
               <div class="card">
                   <div class="card-title">
                       <h4>Update Student Info</h4>
                       <hr>
                   </div>

                 @if (session('edit_status'))
    <div class="alert alert-success">
        {{ session('edit_status') }}
    </div>
@endif
                   <div class="card-body">
                       <div class="basic-elements">
                       <form method="post" action="{{route('student.update', $students->id)}}" enctype="multipart/form-data">
                      @csrf
                      @method('PATCH')
                               <div class="row">
                                   <div class="col-lg-6">
                                       <div class="form-group">
                                       <input type="hidden" name="student_id" value="{{$students->id}}" placeholder=""  class="form-control" required>
                                        <label >Student ID</label>
                                      <input type="text" name="std_id" value="{{$students->std_id}}"  class="form-control" >
                                      </div>
                                       <div class="form-group">
                                       <label >Student Name</label>
                                      <input type="text" name="std_name" value="{{$students->std_name}}" placeholder=""  class="form-control" required>
                                    </div>
                                       <div class="form-group">
                                       <label >Father's Name</label>
                                        <input type="text" name="std_fname" value="{{$students->std_fname}}"  class="form-control" >
                                    </div>
                                       <div class="form-group">
                                       <label >Mother's Name</label>
                                          <input type="text" name="std_mname" value="{{$students->std_mname}}"  class="form-control" >
                                       </div>
                                       <div class="form-group">
                                       <label >Date of Birth</label>
                                       <input type="text" name="std_dob" value="{{$students->std_dob}}" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                        <label >NID</label>
                                        <input type="text" name="std_nid" value="{{$students->std_nid}}"class="form-control" >
                                      </div>
                                       <div class="form-group">
                                       <label >Phone</label>
                                          <input type="text" name="std_phone" value="{{$students->std_phone}}"  class="form-control" >
                                     </div>
                                       <div class="form-group">
                                       <label >Email</label>
               <input type="text" name="std_email" value="{{$students->std_email}}" class="form-control" >
            </div>


                                  </div>
                                   <div class="col-lg-6">
                                       <div class="form-group">
                                       <label >Program</label>
					                              	    <select name="std_program" id="faculty" class="form-control">
                                              <option  value="{{$students->std_program}}">{{$students->std_program}}</option>

                                                          @foreach($programe as $p)
                                                  <option  value="{{$p->programe_name}}">{{$p->programe_name}}</option>
                                                          @endforeach
                                                                                                                    <!-- @foreach($programe as $p)
                                                  <option {{ ($p->programe_name == $students->std_program) ? "selected":""}} value="{{$p->programe_name}}">{{$p->programe_name}}</option>
                                                          @endforeach -->
					                              	    </select>
                                        </div>
                                       <div class="form-group">
                                       <label >Batch</label>
                                         <input type="text" name="std_batch" value="{{$students->std_batch}}"  class="form-control" >
                                        </div>
                                       <div class="form-group">
                                       <label >CGPA</label>
                                         <input type="text" name="std_cgpa" value="{{$students->std_cgpa}}" class="form-control" >
                                       </div>
                                       <div class="form-group">
                                       <label >Complete Credit</label>
                                         <input type="text" name="std_tcredit" value="{{$students->std_tcredit}}"  class="form-control" >
                                         </div>
                                         <div class="form-group">
                                         <label >Certificate SL No.</label>
                                       <input type="text" name="std_certificate_no" value="{{$students->std_certificate_no}}" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                           <label>Certificate Status</label>
                                           <select class="form-control" name="std_certificate_issue">
	                                        	<option value="{{$students->std_certificate_issue}}">{{$students->std_certificate_issue}}</option>
	                                        	<option value="Issued">Issued</option>
	                                        	<option value="Not Issued">Not Issued</option>
	                                        </select>
                                       </div>

                                         <div class="form-group">
                                         <label >Publication Date</label>
                                          <input type="text" name="std_publication_date" value="{{$students->std_publication_date}}" class="form-control" >
                                          </div>

                                           <div class="form-group">
                                           <label >Start Semester</label>
                                                 <input type="text" name="std_lsemester" value="{{$students->std_lsemester}}" class="form-control" >
                                           </div>

                                   </div>
                               </div>


                               <div class="form-group">
                    <!-- <img class="media-object" src="{{asset('assets')}}/images/student_photo/{{$students->std_photo}}" style="  height: 50px; width: 50px;" alt="..."> -->

<div class="col-lg-offset-4 col-lg-10">
<!-- <span class="btn green fileinput-button"><i class="fa fa-plus fa fa-white"></i>
<span>Attachment</span>
<input type="file" name="std_photo">
</span> -->
             <button class="btn btn-primary" type="submit">Update</button>
             </div>
           </div>

                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>




  @endsection