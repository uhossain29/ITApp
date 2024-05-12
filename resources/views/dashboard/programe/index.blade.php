@extends('dashboard.main')
@section('tittle', 'Programe')
@section('Dashboard')
active
@endsection
@section('programe')
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
                                                    <th>Faculty Name</th>
                                                    <th>Department Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>@foreach ($programes as $p)
                                               
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>
                                                @foreach ($data as $i)
                                                @if( $i->id == $p->department_id)
                                                    {{ $i->department_name}}
                                                @endif
                                                @endforeach 
                                                </td>
                                                <td>{{ $p->programe_name}}</td>
                                                <td>
                                                <a href="{{  route('programe.show',$i->id)  }}" title="Compose" class="ti-pencil-alt btn btn-success"> </a>
                                                     

                                                     <form method="post" action="{{  route('programe.destroy',$i->id) }}">
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
                                    <form class="form-horizontal" method="post" action="{{  route('programe.store') }}" >
                                    @csrf  
                                            <div class="form-group row is-invalid">
                                                <label class="col-lg-4 col-form-label" >Programe Name <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control"  name="programe_name" placeholder="Enter a department Name.." required>
                                                </div>
                                                <label class="col-lg-4 col-form-label" >Faculty Name <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                <select name="department_id" id="dropdown" class="form-control">
                                                @foreach($data as $i)
											        <option value="{{$i->id}}">{{$i->department_name}}</option>
                                                @endforeach
                                                </select>
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