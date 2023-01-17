<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
        <link href="{{ asset('assets/mobile/images/apple-touch-startup-image-320x460.png') }}" media="(device-width: 320px)" rel="apple-touch-startup-image">
        <link href="{{ asset('assets/mobile/images/apple-touch-startup-image-640x920.png') }}" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
        <link rel="stylesheet" href="{{ asset('assets/mobile/css/framework7.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/mobile/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/mobile/css/swipebox.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/mobile/css/animations.css') }}" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">

        <title>@yield('title')</title>
        @yield('mycss')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite('resources/js/app.js')
    </head>
    
    <body class="antialiased" id="mobile_wrap">

       @yield('content')
       <div>
        <img src="https://assets.stickpng.com/images/585990234f6ae202fedf28cf.png" alt="">
    </div>
       @yield('js')
    <script type="text/javascript" src="{{ asset('assets/mobile/js/jquery-1.12.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mobile/js/jquery.validate.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/mobile/js/framework7.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mobile/js/jquery.swipebox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mobile/js/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mobile/js/email.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mobile/js/audio.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mobile/js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mobile/js/selectFx.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mobile/js/my-app.js') }}"></script>

    </body>

</html>