@extends('dashboard.main')
@section('tittle', 'Update Profile')
@section('setting')
active
@endsection
@section('profile')
active
@endsection

@section('dashboard_content')

<div class="col-md-8 m-auto">
         <div class=" panel panel-default">
<h4>User Profile</h4>
         <div class="panel-body">

         @if ($errors->all())
                              <spam class="text-danger">
                                 @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                   @endforeach
                                     </spam>
                                  @endif
                     @if(session('edit_status'))
                 <spam class="text-danger">{{ session('edit_status') }}</spam>
                 @endif
                 
                 @if(session('image_error'))
                 <spam class="text-danger">{{ session('image_error') }}</spam>
                 @endif

           <form method="post" action="{{url('profileupdate')}}" enctype="multipart/form-data">
                       @csrf

            <div class="form-group">
             <label >User Name</label>
               <input type="text" name="name" value="{{Auth::user()->name}}" placeholder=""  class="form-control" disabled>
             <div>

             <div class="form-group">
             <label >User Email</label>
               <input type=""  value="{{Auth::user()->email}}" placeholder=""  class="form-control" disabled>
             <div>

             <div class="form-group">
             <label >User Department</label>
             @foreach($departments as $department)
               @if(Auth::User()->department_id==$department->id)
										<input type="text" value="{{$department->department_name}}" class="form-control" disabled>
                    @endif
             @endforeach
             <div>

                    <div class="form-group">
                    <label >User Image</label><br>
                    <img class="media-object" src="{{asset('assets')}}/images/user_photos/{{Auth::user()->profile_photo}}" style="  height: 50px; width: 50px;" alt="...">

                 <div class="col-lg-offset-4 col-lg-10">
                <span class="btn green fileinput-button"><i class="fa fa-plus fa fa-white"></i>
          			<span>Attachment</span>
                <input type="file"  name="profile_photo" onchange="readURL(this);">
                   <img class="hidden" id="tenant_photo_viewer" src="#" alt="your image" />
                      <script>
                      function readURL(input) {
                        if (input.files && input.files[0]) {
                          var reader = new FileReader();
                          reader.onload = function (e) {
                            $('#tenant_photo_viewer').attr('src', e.target.result).width(50).height(50);
                          };
                          $('#tenant_photo_viewer').removeClass('hidden');
                          reader.readAsDataURL(input.files[0]);
                        }
                      }
                      </script>
               </span>
             <button class="btn btn-primary" type="submit">Send</button>
             </div>
           </div>
   </form>
</div>
</div>
</div>
  @endsection