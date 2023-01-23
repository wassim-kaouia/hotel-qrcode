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
                                <img class="w-screen h-full" src="{{ asset('assets/images/gite.jpeg') }}" alt=""
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
                                <img class="w-screen h-full" src="{{ asset('assets/mobile/images/slider/slide3.jpg') }}" alt=""
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
                                    <i class="fa fa-wifi text-3xl" id="icon-color" aria-hidden="true"></i>
                                    <span>Wifi</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-calculator text-3xl" id="" aria-hidden="true"></i>
                                    <span>Digicode</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-street-view text-3xl" id="" aria-hidden="true"></i>
                                    <span>Alentours</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa fa-info text-3xl" id="" aria-hidden="true"></i>
                                    <span>Infos Pratiques</span>
                                    </a>
                                </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-address-book text-3xl" id="" aria-hidden="true"></i>
                                    <span>Livre d'or</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-popup=".popup-social" class="open-popup">
                                    <i class="fa fa-volume-control-phone text-3xl" id="icon-color" aria-hidden="true"></i>
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
