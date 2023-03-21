@extends('layout.master')

@section('title')
    test
@endsection

@section('mycss')
@endsection

@section('content')
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
                            <a href="/welcome" data-panel="left" class="open-panel">
                                <div class="navbar_right"><img
                                        src="{{ asset('assets/mobile/images/icons/white/menu.png') }}" alt=""
                                        title="" /></div>
                            </a>
                        </div>

                        <!-- Slider -->
                        <div class="swiper-container swiper-init" data-effect="slide" data-parallax="true"
                            data-pagination=".swiper-pagination" data-pagination-clickable="true">
                            <div class="swiper-wrapper">
                                @foreach ($app->images as $image)
                                <div class="swiper-slide">  
                                    <img class="w-screen h-full" src="/imagesApp/gallery/{{ $app->user_id}}/{{ $image->url }}" alt=""
                                    title="" />
                                <div class="slider-caption">
                                    <div class="">
                                        <div class="">
                                            <img id="avatar" class="rounded-full mx-auto p-4" style="width: 150px; height:150px;"
                                                src="{{ asset('assets/images/avatar.png') }}" alt="">
                                        </div>
                                        <div class="">
                                            <h2 data-swiper-parallax="-100%" id="app_title">{{ $app->title }} {{ $image->url }}</h2>
                                        <p data-swiper-parallax="-30%" id="app_description">
                                            {{ $app->description }}
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>

                        <nav class="main-nav">
                            {{-- top of icons - start  --}}
                            <ul>
                                <li class="wifi_module"  style="display: {{ $app->setting->modules_state['wifi'] == 'on' ? 'block' : 'none' }};">
                                    <a href="#">
                                        <i class="fa fa-wifi text-3xl" id="icon-color1" aria-hidden="true"></i>
                                        <span id="title-color1">Wifi</span>
                                    </a>
                                </li>
                                <li class="digicode_module" style="display: {{ $app->setting->modules_state['digicode'] == 'on' ? 'block' : 'none' }};">
                                    <a href="#">
                                        <i class="fa fa-calculator text-3xl" id="icon-color2" aria-hidden="true"></i>
                                        <span id="title-color2">Digicode</span>
                                    </a>
                                </li>
                                <li class="alentour_module" style="display: {{ $app->setting->modules_state['arround'] == 'on' ? 'block' : 'none' }};">
                                    <a href="#">
                                        <i class="fa fa-street-view text-3xl" id="icon-color3" aria-hidden="true"></i>
                                        <span id="title-color3">Alentours</span>
                                    </a>
                                </li>

                                <li class="infos_module" style="display: {{ $app->setting->modules_state['info'] == 'on' ? 'block' : 'none' }};">
                                    <a href="#">
                                        <i class="fa fa-info text-3xl" id="icon-color4" aria-hidden="true"></i>
                                        <span id="title-color4">Infos Pratiques</span>
                                        </a>
                                    </li>
                                <li class="livre_module" style="display: {{ $app->setting->modules_state['livre'] == 'on' ? 'block' : 'none' }};">
                                    <a href="#">
                                        <i class="fa fa-address-book text-3xl" id="icon-color5" aria-hidden="true"></i>
                                        <span id="title-color5">Livre d'Or</span>
                                    </a>
                                </li>
                                <li class="nums_module" style="display: {{ $app->setting->modules_state['nums'] == 'on' ? 'block' : 'none' }};">
                                    <a href="#" data-popup=".popup-social" class="open-popup">
                                        <i class="fa fa-volume-control-phone text-3xl" id="icon-color6" aria-hidden="true"></i>
                                        <span id="title-color6">Numéros utiles</span>
                                    </a>
                                </li>
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

   
@endsection

@section('js')
    <script></script>
@endsection
