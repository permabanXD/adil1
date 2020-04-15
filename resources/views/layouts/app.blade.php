<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Free Bootstrap COLOI Multipurpose Template</title>
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--BOOTSTRAP MAIN STYLES -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--FONTAWESOME MAIN STYLE -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
    <!--PRETTYPHOTO MAIN STYLE -->
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet" />
    <!--CUSTOM STYLE -->
    <link href="{{asset('css/style.css')}} " rel="stylesheet" />

</head>

<body>

@yield('content')


    <script src="{{asset('js/jquery.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS LIBRARY -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- PRETTYPHOTO  SCRIPTS  LIBRARY-->
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
     <!-- SCROLL REVEL  SCRIPTS  LIBRARY-->
    <script src="{{asset('js/scrollReveal.js')}}"></script>
    <!-- CUSTOM SCRIPT-->
    <script src="{{asset('scripts/custom.js')}}"></script>


</body>
</html>