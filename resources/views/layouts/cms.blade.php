<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-stadio</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    -->
   
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    
     <link href="{{asset('src/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
        <!-- flex slider css -->
        <link href="{{asset('src/css/flexslider.css')}}" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  -->
        <link href="{{ asset('src/css/animate.css')}}" rel="stylesheet" type="text/css" media="screen"> 
        <!-- Revolution Style-sheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('src/rs-plugin/css/settings.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('src/css/rev-style.css')}}">
        <!--owl carousel css-->
        <link href="{{ asset('src/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{ asset('src/css/owl.theme.css')}}" rel="stylesheet" type="text/css" media="screen">
        <!--mega menu -->
        <link href="{{ asset('src/css/yamm.css')}}" rel="stylesheet" type="text/css">
        <!--cube css-->
        <link href="{{ asset('src/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css">
        <!-- custom css-->
        <link href="{{ asset('src/css/style.css')}}" rel="stylesheet" type="text/css" media="screen">

    <!-- JavaScripts -->
       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="{{asset('src/js/brackets.js') }}"></script>
        <script src="{{asset('src/js/jquery.min.js')}}"></script>
        <script src="{{asset('src/js/jquery-migrate.min.js')}}"></script> 
        <!--bootstrap js plugin-->
        <script src="{{asset('src/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="{{asset('src/js/jquery.easing.1.3.min.js')}}" type="text/javascript"></script>
        
        <!--flex slider plugin-->
        <script src="{{asset('src/js/jquery.flexslider-min.js')}}" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="{{asset('src/js/jquery.stellar.min.js')}}" type="text/javascript"></script>
        <!--digit countdown plugin-->
        <script src="{{asset('src/js/waypoints.min.js')}}"></script>
        <!--digit countdown plugin-->
        <script src="{{asset('src/js/jquery.counterup.min.js')}}" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="{{asset('src/js/wow.min.js')}}" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="{{asset('src/js/owl.carousel.min.js')}}" type="text/javascript"></script>
        <!--popup js-->
        <script src="{{asset('src/js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
        <!--you tube player-->
        <script src="{{asset('src/js/jquery.mb.YTPlayer.min.js')}}" type="text/javascript"></script>        
        <!--customizable plugin edit according to your needs-->
        <script src="{{asset('src/js/custom.js')}}" type="text/javascript"></script>
        <script type="text/javascript" src="{{asset('src/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('src/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('src/js/revolution-custom.js')}}"></script>
        
        
  </head>
  <body>
    @include('cms.header')

    <div>
        @include('cms.alerts')
        @yield('content')
    </div>
    
    @include('cms.footer')
  </body>
</html>
