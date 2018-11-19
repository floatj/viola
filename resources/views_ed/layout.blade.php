<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>盈達貿易股份有限公司</title>
    <meta name="Keywords" content="" />
    <meta name="Description"content="" />

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" >
    <!--找不到-->
    <!--<link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <!--找不到-->
    <!--<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--不同的 view 依需求各自引入（只有該 view）需要的 js 和 css，請到需要個別引入 js 和 css 的 view 的 section('head-required') 去做修改-->
    @yield('head-required')
</head>

<body>

@include('menu')

<div class="container"><!--body的 div container-->
<!--<div class="container-fluid">--><!--body的 div container-->
@yield('page')
</div><!--body的 div container-->
<!--結尾-->
@include('end')

<!--各頁共用js-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>-->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script>
/*
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
*/
</script>

<!--各頁獨立js-->
@yield('js')

</body>
</html>
