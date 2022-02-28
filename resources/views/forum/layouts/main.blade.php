<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Endeavour tech">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Endeavour tech | Forum</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('forum/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('forum/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('forum/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('forum/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('forum/css/selectize.css')}}">
    <link rel="stylesheet" href="{{asset('forum/css/style.css')}}">
    <!-- end inject -->
</head>
<body>

@yield('content')

    <script src="{{asset('forum/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('forum/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('forum/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('forum/js/selectize.min.js')}}"></script>
<script src="{{asset('forum/js/main.js')}}"></script>
</body>

</html>