<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link href="{{ asset('assets/mobile/images/apple-touch-startup-image-320x460.png') }}" media="(device-width: 320px)"
        rel="apple-touch-startup-image">
    <link href="{{ asset('assets/mobile/images/apple-touch-startup-image-640x920.png') }}"
        media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
    <link rel="stylesheet" href="{{ asset('assets/mobile/css/framework7.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mobile/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/mobile/css/swipebox.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/mobile/css/animations.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
    @yield('mycss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="antialiased" id="mobile_wrap">

    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>
    <div class="views">
        <div class="view view-main">
            <div class="pages">

                <div data-page="index" class="page homepage">
                    <div class="page-content homepagecontent">

                        <div class="homenavbar flex justify-between">
                            <img class="p-2" src="{{ asset('assets/images/ovm_logo.png') }}" alt="" width="200"
                                class="btn btn-danger">
                            <a href="#" data-panel="left" class="open-panel">
                                <div class="navbar_right"><img
                                        src="{{ asset('assets/mobile/images/icons/white/menu.png') }}" alt=""
                                        title="" /></div>
                            </a>
                        </div>

                        <!-- Slider -->
                        <div class="swiper-container swiper-init" data-effect="slide" data-parallax="true"
                            data-pagination=".swiper-pagination" data-pagination-clickable="true">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <img class="" src="{{ asset('assets/images/gite.jpeg') }}" alt=""
                                        title="" />
                                    <div class="slider-caption">
                                        <div class="flex justify-center">
                                            <img class="rounded-full mx-auto p-4" style="width: 150px; height:150px;"
                                                src="{{ asset('assets/images/avatar.png') }}" alt="">
                                        </div>
                                        <h2 data-swiper-parallax="-100%">Gite La Nature</h2>
                                        <p data-swiper-parallax="-30%">
                                            You can design and create, and build the most
                                            wonderful place
                                        </p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/mobile/images/slider/slide3.jpg') }}" alt=""
                                        title="" />
                                    <div class="slider-caption">
                                        <div class="flex justify-center">
                                            <img class="rounded-full mx-auto p-4" style="width: 150px; height:150px;"
                                                src="{{ asset('assets/images/avatar.png') }}" alt="">
                                        </div>
                                        <h2 data-swiper-parallax="-100%">Gite La Nature</h2>
                                        <p data-swiper-parallax="-30%">You can design and create, and build the most
                                            wonderful place</p>
                                    </div>
                                </div>

                       
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>

                        <nav class="main-nav">
                            {{-- top of icons - start  --}}
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-wifi text-3xl" aria-hidden="true"></i>
                                        <span>Wifi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calculator text-3xl" aria-hidden="true"></i>
                                        <span>Digicode</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-street-view text-3xl" aria-hidden="true"></i>
                                        <span>Autour de moi</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-info text-3xl" aria-hidden="true"></i>
                                        <span>Infos Pratiques</span>
                                        </a>
                                    </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-address-book text-3xl" aria-hidden="true"></i>
                                        <span>Livre d'or</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-popup=".popup-social" class="open-popup">
                                        <i class="fa fa-volume-control-phone text-3xl" aria-hidden="true"></i>
                                        <span>Numéros utiles</span>
                                    </a>
                                </li>

                                {{-- <li><a href="#" data-popup=".popup-login" class="open-popup"><img
                                            src="{{ asset('assets/mobile/images/icons/green/lock.png') }}" alt=""
                                            title="" /><span>LOGIN</span></a></li> --}}
                            </ul>
                            {{-- button of icons - end  --}}
                            <div class="p-10 flex justify-center bottom-0">
                                <img class="w-36" src="{{ asset('assets/images/ovm_logo.png') }}" alt="">
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        {{-- end of view write down --}}
    </div>

    <!-- Login Popup  or ny other window for other icons -->
    <div class="popup popup-login">
        <div class="content-block">
            <h4>LOGIN</h4>
            <div class="loginform">
                <form id="LoginForm" method="post">
                    <input type="text" name="Username" value="" class="form_input required"
                        placeholder="username" />
                    <input type="password" name="Password" value="" class="form_input required"
                        placeholder="password" />
                    <div class="forgot_pass"><a href="#" data-popup=".popup-forgot" class="open-popup">Forgot
                            Password?</a></div>
                    <input type="submit" name="submit" class="form_submit" id="submit" value="SIGN IN" />
                </form>
                <div class="signup_bottom">
                    <p>Don't have an account?</p>
                    <a href="#" data-popup=".popup-signup" class="open-popup">SIGN UP</a>
                </div>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img
                        src="{{ asset('assets/mobile/images/icons/black/menu_close.png') }}" alt=""
                        title="" /></a>
            </div>
        </div>
    </div>

    <!-- Register Popup -->
    <div class="popup popup-signup">
        <div class="content-block">
            <h4>REGISTER</h4>
            <div class="loginform">
                <form id="RegisterForm" method="post">
                    <input type="text" name="Username" value="" class="form_input required"
                        placeholder="Username" />
                    <input type="text" name="Email" value="" class="form_input required"
                        placeholder="Email" />
                    <input type="password" name="Password" value="" class="form_input required"
                        placeholder="Password" />
                    <input type="submit" name="submit" class="form_submit" id="submit" value="SIGN UP" />
                </form>
                <h5>- OR REGISTER WITH A SOCIAL ACCOUNT -</h5>
                <div class="signup_social">
                    <a href="http://www.facebook.com/" class="signup_facebook external">FACEBOOK</a>
                    <a href="http://www.twitter.com/" class="signup_twitter external">TWITTER</a>
                </div>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img
                        src="{{ asset('assets/mobile/images/icons/black/menu_close.png') }}" alt=""
                        title="" /></a>
            </div>
        </div>
    </div>

    <!-- Forgot Password Popup -->
    <div class="popup popup-forgot">
        <div class="content-block">
            <h4>FORGOT PASSWORD</h4>
            <div class="loginform">
                <form id="ForgotForm" method="post">
                    <input type="text" name="Email" value="" class="form_input required"
                        placeholder="email" />
                    <input type="submit" name="submit" class="form_submit" id="submit" value="RESEND PASSWORD" />
                </form>
                <div class="signup_bottom">
                    <p>Check your email and follow the instructions to reset your password.</p>
                </div>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img
                        src="{{ asset('assets/mobile/images/icons/black/menu_close.png') }}" alt=""
                        title="" /></a>
            </div>
        </div>
    </div>
    <div>
        <img src="https://assets.stickpng.com/images/585990234f6ae202fedf28cf.png" alt="">
    </div>
    @yield('js')
    <script type="text/javascript" src="{{ asset('assets/mobile/js/jquery-1.12.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mobile/js/jquery.validate.min.js') }}"></script>
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
