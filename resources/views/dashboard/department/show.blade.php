@extends('dashboard.main')
@section('tittle', 'Teachers Profile Edit')
@section('Dashboard')
active
@endsection
@section('department')
active
@endsection
@section('dashboard_content')

<div class="col-md-8 m-auto">
         <div class=" panel panel-default">
<h1>Update Favulty </h1>
         <div class="panel-body">


                     @if(session('edit_status'))
                 <spam class="text-danger">{{ session('edit_status') }}</spam>
                 @endif

           <form method="post" action="{{route('department.update',$departments->id)}}" enctype="multipart/form-data">
                       @csrf
                       @method('PATCH')
            <div class="form-group">
            <label >department Name</label>
            <input type="hidden" name="department_id" value="{{$departments->id}}" placeholder=""  class="form-control" required>
                  <input type="text" name="department_name" value="{{$departments->department_name}}" placeholder=""  class="form-control" required>
                <div>
                <div class="form-group">
              <label >Faculty</label>
						    <select name="faculty_id" id="dropdown" class="form-control">
                    @foreach($faculties as $faculty)
                    <option {{ ($faculty->id == $departments->faculty_id) ? "selected":""}} value="{{$faculty->id}}">{{$faculty->faculty_name}}</option>
                            @endforeach
						    </select>
                            <div>
                <div class="form-group">
            <label >department Name</label>
                  <input type="text" name="department_link" value="{{$departments->department_link}}" placeholder=""  class="form-control" required>
                <div>
                    <div class="form-group">
                 <div class="col-lg-offset-4 col-lg-10">
             <button class="btn btn-primary" type="submit">Send</button>
             </div>
           </div>
   </form>
</div>
</div>
</div>
  @endsection