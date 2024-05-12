@extends('dashboard.main')
@section('tittle', 'Users')
@section('Dashboard')
active
@endsection
@section('users')
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
                                                    <th>Post Title</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>@foreach ($data as $i)
                                               
                                                <tr>
                                                <td>{{ $i->id}}</td>
                                                    <td>{{ $i->name}}</td>
                                                    <td>
                                                    <a href="{{  route('users.show',$i->id)  }}" title="Compose" class="ti-pencil-alt btn btn-success"> </a>
                                                     

                                                     <form method="post" action="{{  route('users.destroy',$i->id) }}">
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
                                    <form class="form-horizontal" method="post" action="{{  route('users.store') }}" >
                                    @csrf  
                                    <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                    <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('User Role') }}</label>

                            <div class="col-md-6">
                            <select name="role" class="form-control">
                                <option value="2">Editor</option>
                                <option value="3">Teacher</option>
                            </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>
                        <div class="col-md-6">
                            <select name="department_id" class="form-control">
                            @foreach($departments as $department)
                                 <option value="{{$department->id}}">{{$department->department_name}}</option>
                            @endforeach

                            </select>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

@endsection