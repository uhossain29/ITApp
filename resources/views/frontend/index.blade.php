@extends('layouts.frontend_app')
@section('tittle',' Online Certificate Verification')

@section('frontend_content')

<div class="main-content bg-lighter">
      <!-- Start main-content -->

      <div class="container">
      <div class="text-center mb-40"><a href="#" class=""><img alt="" src="{{asset('assets\img\logo\logo.png')}}"></a>
    <h3>Welcome to Online Certificate Verification of City University</h3>
    <hr>
    </div>
        <div class="row">
          <div class="col-md-4 col-md-push-4">
            <div class="widget border-5px p-30">
            @if(session('add_status'))
                 <div class="alert alert-success">
                  {{ session('add_status') }}
                  </div>
            @endif
					  @if(session('not_found'))
            <div class="alert alert-success">
                  {{ session('not_found') }}
                  </div>
            @endif
              <h5 class="widget-title line-bottom">Certificate <span class="text-theme-color-2"> Verification</span></h5>
              <form action="{{ route('student.search')}}" method="GET">
                <div class="form-group">
                  <input name="query" class="form-control" type="search"  placeholder="Enter Student ID" value="{{old('query')}}">
                </div>

                <div class="form-group">
                  <input name="query2" class="form-control" type="search" placeholder="Enter Certificate SL No." value="{{old('query2')}}">
                </div>
                <div class="form-group">
                  <!-- <input name="form_botcheck" class="form-control" type="hidden" value="" /> -->
                  <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Search</button>
                </div>
              </form>
              <h5> Office of the Controller<br>
                 <small>Khagan, Birulia, Savar, Dhaka-1340, Bangladesh</small>
                 <small>Email:exam@vityuniversity.ac.bd</small>
               </h5>
              <!-- Quick Contact Form Validation-->
              <script type="text/javascript">
                $("#quick_contact_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
            </div>
          </div>
        </div>
        <br><br><br>
        <p class="text-center">
                     <script>
                       document.write(new Date().getFullYear())
                     </script>    
                      © Develop By - <a href="#">Uzzal Hossain</a>
                  </p> 
  </div>  
  <!-- end main-content -->
  @endsection