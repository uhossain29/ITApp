@extends('dashboard.main')
@section('tittle', 'Department')
@section('Dashboard')
active
@endsection
@section('department')
active
@endsection
@section('dashboard_content')
<div class="row">
                    <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                   
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                <th>SL</th>
                                                    <th>Department Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>@foreach ($data as $i)
                                               
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{ $i->department_name}}</td>
                                                <td>
                                                <a href="{{  route('department.show',$i->id)  }}" title="Compose" class="ti-pencil-alt btn btn-success"> </a>
                                                     

                                                     <form method="post" action="{{  route('department.destroy',$i->id) }}">
                                                      @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="ti-trash"></i></button>
                                                       </form>
                                                </td>
                                            </tr>
                                                @endforeach 
                                            </tbody>
                                        </table>
                            </div>
                        </div>
                    </div>

                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">

                                    <h1 class="">Add Department</h1>
                                    <form class="form-horizontal" method="post" action="{{  route('department.store') }}" >
                                    @csrf  
                                            <div class="form-group row is-invalid">
                                                <label class="col-lg-4 col-form-label" >Department Name <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control"  name="department_name" placeholder="Enter a department Name.." required>
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

@endsection