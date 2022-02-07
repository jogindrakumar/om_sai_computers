<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Fwd</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->

    
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('frontend/images/fevicon.png')}}" type="image/gif" />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{asset('frontend/images/loading.gif')}}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
  @include('layouts.body.header')
    <!-- end header inner -->
    <!-- end header -->
    <!-- top -->
    
      
    
    <!-- end banner -->
    <!-- wedo -->
   @yield('main_content')
    <!-- end contact -->
    <!--  footer -->
    @include('layouts.body.footer')
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
</body>

</html>