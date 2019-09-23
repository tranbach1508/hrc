<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{asset('')}}">
    <title>HRC Company</title>


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">


    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/dichvu.css')}}">
    <link rel="stylesheet" href="{{asset('css/lienhe.css')}}">
    <link rel="stylesheet" href="{{asset('css/tinTuc.css')}}">
    <link rel="stylesheet" href="{{asset('css/traiNghiem.css')}}">
    <link rel="stylesheet" href="{{asset('css/gioithieu.css')}}">
  



    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/da679a1af2.js"></script>

    <!-- WOW JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    

    


    <!-- Customer CSS -->
   
    



</head>

<body>


    @include('lay-out.header')
    @yield('content')
    @include('lay-out.footer')

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('js/jquery.sticky.js')}}"></script>

  
  <script src="{{asset('js/main.js')}}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
</script>
  

</body>

</html>