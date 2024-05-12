
@extends('layouts.frontend_app')
@section('tittle','Student Details')
@section('about')
active
@endsection
@section('frontend_content')
<div class="main-content bg-lighter">

  @if(Session::has('no-results'))
  <div class="text-center mb-40"><a href="#" class=""><img alt="" src="{{asset('assets\img\logo\logo.png')}}"></a>
    <h3>Welcome to Online Certificate Verification of City University</h3>
    <hr>
    </div>
  <div class="row">
          <div class="col-md-4 col-md-push-4">
            <div class="widget border-5px p-40">

            <h4 class="line-bottom">Student Search Info:</h4>  
           <h4> <span class="text-theme-color-2"> {{ Session::get('no-results') }}</span></h4>
           <br><br>

              <h5> Office of the Controller<br>
                 <small>Khagan, Birulia, Savar, Dhaka-1340, Bangladesh</small>
                 <small>Email:exam@vityuniversity.ac.bd</small>
               </h5>

            </div>
          </div>
        </div>
        <p class="text-center">
                     <script>
                       document.write(new Date().getFullYear())
                     </script>    
                      © Develop By - <a href="#">Uzzal Hossain</a>
                  </p> 
@else
  @if(!empty($searched_items))
	@foreach($searched_items as $profile)
@if($profile->std_certificate_issue== 'Issued')
    <!-- Section: Student Details -->
    <section id="home" class="bg-lighter">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-push-2">
                <div class="bg-lightest border-5px p-30 mb-0">

                <div class="text-center mb-5">
                  <a href="#" class="" ><img alt="" src="{{asset('assets\img\logo\logo.png')}}"></a>
                </div>
                  <hr>
                  <h4 class="text-center text-underline">Online Certificate Verification</span></h4>

            <div class="row">
              <div class="col-md-4">
                        <div class="volunteer-address">
                            <img style="height: 200px; width: 200px;" src="{{asset('assets/images/student_photo') }}/{{ $profile->std_photo }}" alt="">
                        <h4 class="text-center text-underline">Degree<span class="text-theme-color-2"> Info:</span></h4>

                <ul>
                  <li>
                    <div class="bg-light media border-bottom-theme-colored-2px p-5 mb-5">
                      <div class="media-left">
                        <i class="fa fa-graduation-cap text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Education:</h5>
                        <h6>{{$profile->std_program}}</h6>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-light media border-bottom-theme-colored-2px p-5 mb-5">
                      <div class="media-left">
                        <i class="fa fa-check text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">CGPA:{{$profile->std_cgpa}}</h5>
                       
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-light media border-bottom-theme-colored-2px p-5 mb-5">
                      <div class="media-left">
                        <i class="fa fa-check text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Credit:{{$profile->std_tcredit}}</h5>
                       
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-light media border-bottom-theme-colored-2px p-5 mb-5">
                      <div class="media-left">
                        <i class="fa fa-check text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Certificate Serial No:{{$profile->std_certificate_no}}</h5>

                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-light media border-bottom-theme-colored-2px p-5 mb-5">
                      <div class="media-left">
                        <i class="fa fa-check text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Semester: {{$profile->std_lsemester}}</h5>
                       
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
           </div>



                     <div class="col-md-8">
                     <div class="tab-content">
                  <div class="">
                    <dl class="dl-horizontal doctor-info">
                    <h4 class="text-center text-underline">Student<span class="text-theme-color-2"> Info:</span></h4>
                      <hr>
                      <dt>Name</dt>
                      <dd> {{$profile->std_name}}</dd>
                      <hr>
                      <dt>ID</dt>
                      <dd> {{$profile->std_id}}</dd>
                      <hr>
                      <dt>Batch</dt>
                      <dd> {{$profile->std_batch}}</dd>
                      <hr>
                      <dt>Father Name</dt>
                      <dd> {{$profile->std_fname}}</dd>
                      <hr>
                      <dt>Mother Name</dt>
                      <dd> {{$profile->std_mname}}</dd>
                      <hr>
                      <dt>Date of Birth</dt>
                      <dd> {{$profile->std_dob}}</dd>
                      <hr>
                      <dt>NID:</dt>
                      <dd> {{$profile->std_nid}}</dd>
                      <hr>
                      <dt>Phone:</dt>
                      <dd> {{$profile->std_phone}}</dd>
                      <hr>
                      <dt>Email:</dt>
                      <dd> {{$profile->std_email}}</dd>
                    
                    </dl>
                  </div>
                </div>
              </div>
             </div>
            </div>  
                 <br>
                  <p class="text-center">
                     <script>
                       document.write(new Date().getFullYear())
                     </script>    
                      © Develop By - <a href="#">Uzzal Hossain</a>
                  </p> 
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    @else
    <div class="text-center mb-40"><a href="#" class=""><img alt="" src="{{asset('assets\img\logo\logo.png')}}"></a>
    <h3>Welcome to Online Certificate Verification of City University</h3>
    <hr>
    </div>
  <div class="row">
          <div class="col-md-4 col-md-push-4">
            <div class="widget border-5px p-40">

            <h4 class="line-bottom">Student Search Info:</h4>  
           <h4> <span class="text-theme-color-2"> Your certificate has not been issued</span></h4>
           <br><br>

              <h5> Office of the Controller<br>
                 <small>Khagan, Birulia, Savar, Dhaka-1340, Bangladesh</small>
                 <small>Email:exam@vityuniversity.ac.bd</small>
               </h5>

            </div>
          </div>
        </div>
        <p class="text-center">
                     <script>
                       document.write(new Date().getFullYear())
                     </script>    
                      © Develop By - <a href="#">Uzzal Hossain</a>
                  </p> 
@endif
	
	@endforeach       
	@else{
           <td>No Data</td>
         }
@endif

@endif
  </div>

@endsection