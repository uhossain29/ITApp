
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- index-mp-layout102:13-->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="City University | Creating a Culture of Excellence" />
<meta name="keywords" content="Tuition Fees, BBA, CSE, Textile," />


<!-- Page Title -->
<title>@yield('tittle')</title>

<!-- Favicon and Touch Icons -->
<link href="{{asset('frontend_assets/images') }}/icon.png" rel="shortcut icon" type="image/png">
<link href="{{asset('frontend_assets') }}/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="{{asset('frontend_assets') }}/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('frontend_assets') }}/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('frontend_assets') }}/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{asset('frontend_assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="{{asset('frontend_assets') }}/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="{{asset('frontend_assets') }}/css/animate.css" rel="stylesheet" type="text/css">
<link href="{{asset('frontend_assets') }}/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{asset('frontend_assets') }}/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{asset('frontend_assets') }}/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{asset('frontend_assets') }}/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{asset('frontend_assets') }}/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{asset('frontend_assets') }}/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{asset('frontend_assets') }}/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="{{asset('frontend_assets') }}/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="{{asset('frontend_assets') }}/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{asset('frontend_assets') }}/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{asset('frontend_assets') }}/js/jquery-2.2.4.min.js"></script>
<script src="{{asset('frontend_assets') }}/js/jquery-ui.min.js"></script>
<script src="{{asset('frontend_assets') }}/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{asset('frontend_assets') }}/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{asset('frontend_assets') }}/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('frontend_assets') }}/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader" style="display: none;">
    <div id="spinner">
      <img alt="" src="{{asset('assets/images') }}/8.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

@yield('frontend_content')
  
   <!-- Footer -->
   <footer id="footer" class="footer bg-black-222" data-bg-img="{{asset('frontend_assets')}}/images/footer-bg.png">
 



 </div>
 <!-- end wrapper -->

 <!-- Footer Scripts -->
 <!-- JS | Custom script for all pages -->
 <script src="{{asset('frontend_assets') }}/js/custom.js"></script>

 <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
       (Load Extensions only on Local File Systems !
        The following part can be removed on Server for On Demand Loading) -->
 <script type="text/javascript" src="{{asset('frontend_assets') }}/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
 <script type="text/javascript" src="{{asset('frontend_assets') }}/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
 <script type="text/javascript" src="{{asset('frontend_assets') }}/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
 <script type="text/javascript" src="{{asset('frontend_assets') }}/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
 <script type="text/javascript" src="{{asset('frontend_assets') }}/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
 <script type="text/javascript" src="{{asset('frontend_assets') }}/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
 <script type="text/javascript" src="{{asset('frontend_assets') }}/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
 <script type="text/javascript" src="{{asset('frontend_assets') }}/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
 <script type="text/javascript" src="{{asset('frontend_assets') }}/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
 </body>

 <!-- index-mp-layout108:42-->
 </html>
