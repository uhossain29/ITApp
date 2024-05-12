@extends('layouts.frontend_app')
@section('tittle','Tuition Fees')
@section('admission')
active
@endsection
@section('frontend_content')
<div class="main-content bg-lighter">
  <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{asset("assets/img/bg")}}/bg6.jpg">
    <div class="container pt-70 pb-20">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title text-white">@yield('tittle')</h2>
            <ol class="breadcrumb text-center text-black mt-10">
              <li><a href="{{'/'}}">Home</a></li>
              <li class="active text-gray-silver">@yield('tittle')</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about">
    <div class="container >
      <div class="section-content">
        <div class="row >
          <div class="col-sm-12 col-md-12 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <h3 class="text-uppercase mt-15 text-center">Tuition <span class="text-theme-color-2"> Fees</span></h3>
           
<ul id="myTab" class="nav nav-tabs boot-tabs nav-center">
  <li class="active"><a href="#home" data-toggle="tab"><h4 class=" mt-15 text-center">Tuition Fees For Undergraduate Program</h4></a></li>
  <li><a href="#profile" data-toggle="tab"><h4 class=" mt-15 text-center">Tuition Fees For Graduate Program</h4></a></li>

</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade in active" id="home">
    <table class="table table-hover">
  <!-- On rows -->
  <tr>
      <th>Name of Program</th>
      <th>Durations</th>
      <th>Credit Hours</th>
      <th>Cost Per Credit</th>
      <th>Total Fees(BDT)</th>
      <th>Admission Fees </th>
      <th>Semester Fees</th>
      <th>Total Tuition Cost (BDT)</th>
      <th>International Students (USD)</th>
  </tr>

<!-- On cells (`td` or `th`) -->
@foreach ($tuition as $fees)
@if($fees->program_type== 1)
<tr>
             <td class="active">{{ $fees->program_name}}</td>
             <td class="success">{{ $fees->course_duration}}-Years</td>
             <td class="warning">{{ $fees->total_credit}}</td>
             <td class="danger">{{ number_format($fees->cost_per_credit)}}</td>
             <td class="info">{{ number_format($fees->cost_per_credit * $fees->total_credit)}}</td>
             <td class="active">{{number_format($fees->admission_fees)}}</td>
             <td class="success">{{number_format( $fees->semester_fees)}}</td>
             <td class="warning">{{ number_format($fees->cost_per_credit * $fees->total_credit + $fees->semester_fees + $fees->admission_fees)}}</td>
             <td class="info">{{ number_format(($fees->cost_per_credit * $fees->total_credit + $fees->semester_fees + $fees->admission_fees)/$fees->dollar_rate,2)}}</td>
        </tr>
@endif
@endforeach 
        </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="profile">
  <table class="table table-hover">
  <!-- On rows -->
  <tr>
      <th>Name of Program</th>
      <th>Durations</th>
      <th>Credit Hours</th>
      <th>Cost Per Credit</th>
      <th>Total Fees(BDT)</th>
      <th>Admission Fees </th>
      <th>Semester Fees</th>
      <th>Total Tution Cost (BDT)</th>
      <th>International Students (USD)</th>
  </tr>

<!-- On cells (`td` or `th`) -->
@foreach ($tuition as $fees)
@if($fees->program_type== 2)
<tr>
             <td class="active">{{ $fees->program_name}}</td>
             <td class="success">{{ $fees->course_duration}}-Years</td>
             <td class="warning">{{ $fees->total_credit}}</td>
             <td class="danger">{{ number_format($fees->cost_per_credit)}}</td>
             <td class="info">{{ number_format($fees->cost_per_credit * $fees->total_credit)}}</td>
             <td class="active">{{number_format($fees->admission_fees)}}</td>
             <td class="success">{{number_format( $fees->semester_fees)}}</td>
             <td class="warning">{{ number_format($fees->cost_per_credit * $fees->total_credit + $fees->semester_fees + $fees->admission_fees)}}</td>
             <td class="danger">{{ number_format(($fees->cost_per_credit * $fees->total_credit + $fees->semester_fees + $fees->admission_fees)/$fees->dollar_rate,2)}}</td>
        </tr>
@endif
@endforeach 
        </tbody>
    </table>  
</div>
</div> 
</div>
        </div>
      </div>
    </div>
  </section>

</div>
@endsection