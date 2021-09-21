<!DOCTYPE html>
<html lang="{{setting('language','en')}}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{setting('app_name')}} | {{setting('app_short_description')}}</title>
    <meta name="viewport" content="width=device-wi  dth, initial-scale=1">
    <link rel="icon" type="image/png" href="{{$app_logo ?? ''}}"/>

    <link rel="stylesheet" href="{{asset('website/css/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/mmenu.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap&subset=latin-ext,vietnamese"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"
          type="text/css">
</head>
<body class="header-one">
<div id="main_wrapper">
    @include ('website.header')
    @include ('website.home')
    @include ('website.footer')
</div>
</body>
</html>
