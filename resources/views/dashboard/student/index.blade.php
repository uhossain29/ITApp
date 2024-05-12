@extends('dashboard.main')
@section('tittle', 'Student Details')
@section('student')
active
@endsection
@section('studentdetail')
active
@endsection


@section('dashboard_content')
<div class="inbox-body text-center">
                            <a class="btn btn-success" href="{{ route('student.create') }}">Add New Student</a>
                            <a href="#myModal" data-toggle="modal" title="Compose" class="btn btn-success"> Import Student</a>
                            <a class="btn btn-success" href="{{ route('export-users') }}">Export Student</a>
                            <!-- Modal -->
                            <div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content text-left">
                                  <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="ti-close"></i></button>
                                    <h4 class="modal-title">Import Student</h4>
                                  </div>
                                  
                                  <div class="modal-body">
                                  <form class="form-horizontal" method="post" action="{{  route('import') }}" enctype="multipart/form-data">                                    @csrf
                                    
                                      
                                      <div class="form-group mb-4">
                                        <div class="custom-file text-left">
                                              <input type="file" name="file" class="custom-file-input" id="customFile">
                                              <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                          <button class="btn btn-primary" type="submit">Import</button>
                                      
                                    </form>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                          </div>


                    @if (session('edit_status'))
    <div class="alert alert-success">
        {{ session('edit_status') }}
    </div>
@endif
<!-- table section -->
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Photo</th>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Batch</th>
                                                    <th>Birth Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>@foreach ($data as $i)
                                                <tr>
                                                    <td>
                                                        <a href="#"><img class="media-object" src="{{asset('assets')}}/images/student_photo/{{ $i->std_photo}}" style="  height: 50px; width: 50px;" alt="..."></a>
                                                    </td>
                                                    <td>{{ $i['std_id']}}</td>
                                                    <td>{{ $i->std_name}}</td>
                                                    <td>{{ $i->std_phone}}</td>
                                                    <td>{{ $i->std_dob}}</td>
                                                    <td class="text text-success">{{ $i->std_certificate_issue}}</td>
                                                  
                                                </tr>
                                              
                                                @endforeach 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>

                  
                    <div class="inbox-body text-center">
                           
                            <!-- Modal -->
                            <div aria-hidden="true" role="dialog" tabindex="-1" id="myModaledit" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content text-left">
                                  <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="ti-close"></i></button>
                                    <h4 class="modal-title">Notice Edit</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form class="form-horizontal">
                                      <div class="form-group">
                                        <label class="col-lg-4 control-label">Notice Title</label>
                                        <div class="col-lg-12">
                                          <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-lg-4 control-label">Notice Note</label>
                                        <div class="col-lg-12">
                                          <textarea rows="10" cols="30" class="form-control" id="texarea1" name="texarea"></textarea>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <div class="col-lg-offset-4 col-lg-10">
                                          <span class="btn green fileinput-button"><i class="fa fa-plus fa fa-white"></i>
																	<span>Attachment</span>
                                          <input type="file" name="image" >
                                          </span>
                                          <button class="btn btn-primary" type="submit">Send</button>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                          </div> 

  
@endsection