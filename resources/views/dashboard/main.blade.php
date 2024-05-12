<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>@yield('tittle')</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="{{asset('assets')}}/img/logo/icon.png">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets')}}/img/logo/icon.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets')}}/img/logo/icon.png">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets')}}/img/logo/icon.png">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets')}}/img/logo/icon.png">
    <!-- Styles -->
    <link href="{{asset('assets')}}/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/lib/themify-icons.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/lib/helper.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="{{url('home')}}">
                    <span>  <img src="{{asset('assets')}}/img/logo/logo.jpg" alt="" /></span><br><span>U-Panel</span></a></div>
                    <!-- <li class="label">Main</li> -->
                    @if(Auth::user()->role==1)
                    <li Class="@yield('Dashboard')"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span
                                class="sidebar-collapse-icon ti-angle-down  "></span></a>
                      <ul>
                        <li class="@yield('department')"><a href="{{route('department.index')}}"><i class="ti-user"></i>Department List</a></li>
                        <li class="@yield('programe')"><a href="{{route('programe.index')}}"><i class="ti-user"></i>Programe List</a></li>
                        <li class="@yield('users')"><a href="{{route('users.index')}}"><i class="ti-user"></i>User List</a></li>
                      </ul>
                    </li>
                    <li class="@yield('student')"><a class="sidebar-sub-toggle"><i class="ti-user"></i> Student <span
                                class="sidebar-collapse-icon ti-angle-down  "></span></a>
                      <ul>
                      <li class="@yield('create')"><a href="{{ route('student.create') }}"><i class="ti-email"></i>Add Profile</a></li>
                      <li class="@yield('studentdetail')"><a href="{{route('student.index')}}"><i class="ti-email"></i>Issued Certificate</a></li>
                      <li class="@yield('issue')"><a href="{{url('issue')}}"><i class="ti-email"></i>Not Issued Certificate</a></li>
                      </ul>
                    </li>
                    @elseif(Auth::user()->role==2)
                    <li class="@yield('student')"><a href="{{route('student.index')}}"><i class="ti-email"></i>Students Details</a></li>
                    @else
                    <li class="@yield('student')"><a href="{{route('student.index')}}"><i class="ti-email"></i>Students Details</a></li>
                    @endif

                    <li class="@yield('setting')"><a class="sidebar-sub-toggle"><i class="ti-settings"></i> Setting <span
                                class="sidebar-collapse-icon ti-angle-down  "></span></a>
                      <ul>
                         <li class="  @yield('profile')"> <a href="{{url('profile')}}"><i class="ti-user"></i><span>Profile</span></a></li>
                         <li class="  @yield('passwordchange')"> <a  href="{{url('passwordchange')}}"><i class="ti-key"></i><span>Change Password </span></a></li>
                      </ul>
                    <li class="  @yield('logout')"><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                 <i class="ti-close"></i> 
                                                      <span>  {{ __('Logout') }}</span>
                                      
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon">
                            <img class="media-object" src="{{asset('assets')}}/images/user_photos/{{ Auth::user()->profile_photo }}" style="  height: 30px; width: 30px;" alt="...">
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">{{ Auth::user()->name }}
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <!-- <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-body">
                                        <ul>
                                        <li>
                                                <a href="{{url('profile')}}">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>
                                            <li> <a  href="{{url('passwordchange')}}">
                                                <i class="ti-key"></i>
                                                <span>Change Password </span>
                                                </a>

                                            </li>


                                            <li>
                                                <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="ti-power-off"></i>
                                                    <span>{{ __('Logout') }}</span>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                 @csrf
                                                </form>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, {{ Auth::user()->name }}</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class=" "><a href="{{url('home')}}">Dashboard /</a></li>
                                    <li class="  ">@yield('tittle')</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">

                @yield('dashboard_content')

                    

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>
                                    <script>
                  document.write(new Date().getFullYear())
                </script>    
                                © U Panel - <a href="#">By Uzzal Hossain</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    

    
    <!-- jquery vendor -->
    <script src="{{asset('assets')}}/js/lib/jquery.min.js"></script>
    <script src="{{asset('assets')}}/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="{{asset('assets')}}/js/lib/menubar/sidebar.js"></script>
    <script src="{{asset('assets')}}/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="{{asset('assets')}}/js/lib/bootstrap.min.js"></script><script src="js/scripts.js"></script>
    <!-- scripit init-->
    <script src="{{asset('assets')}}/js/lib/data-table/datatables.min.js"></script>
    <script src="{{asset('assets')}}/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="{{asset('assets')}}/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="{{asset('assets')}}/js/lib/data-table/jszip.min.js"></script>
    <script src="{{asset('assets')}}/js/lib/data-table/pdfmake.min.js"></script>
    <script src="{{asset('assets')}}/js/lib/data-table/vfs_fonts.js"></script>
    <script src="{{asset('assets')}}/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="{{asset('assets')}}/js/lib/data-table/buttons.print.min.js"></script>
    <script src="{{asset('assets')}}/js/lib/data-table/datatables-init.js"></script>

</body>

</html>
