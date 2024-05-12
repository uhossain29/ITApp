@extends('dashboard.main')
@section('tittle', 'User Update')
@section('Dashboard')
active
@endsection
@section('users')
active
@endsection
@section('dashboard_content')
<div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                    <form class="form-horizontal" method="post" action="{{  route('users.store') }}" >
                                    @csrf  
                                    <input type="hidden" name="user_id" value="{{$user->id}}" placeholder=""  class="form-control" required>

                                    <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

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
                                <option value="{{($user->role)}}">
                                    @if($user->role==1)
                                    Admin
                                    @elseif($user->role==2)
                                    Editor
                                    @else
                                    Teacher
                                    @endif
                                </option>
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
 @endsection