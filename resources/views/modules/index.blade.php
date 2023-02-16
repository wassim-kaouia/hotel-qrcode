<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion de Visuel') }}
        </h2>
    </x-slot>
    <style>
        .iphone_bg {
            width: 450px;
            height: 810px;
            margin: auto;
            background: url({{ asset('assets/images/iphone.png') }}) no-repeat center;
        }

        .mobile_wrap {
            width: 350px;
            height: 580px;
            padding: 100px 0 0 63px;
        }
    </style>
    <div class="py-12">
        <form action="{{ route('settings.post') }}" method="POST" enctype="multipart/form-data" id="modules-form">
            @csrf
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="grid lg:grid-cols-4 sm:grid-cols-1 md-cols-2 lg:gab-4 p-8">
                            {{-- wifi module  --}}
                            <div class="bg-gray-100 shadow-md rounded-md w-32 h-32 mb-8">
                                <div class="p-4">
                                    <i class="fa fa-wifi text-3xl flex justify-center" aria-hidden="true"></i>
                                    <h2 class="flex justify-center mb-2">Wifi</h2>
                                    <div class="flex justify-center">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox"
                                                {{ $setting->modules_state['wifi'] == 'on' ? 'checked' : '' }}
                                                name="wifi_state" class="sr-only peer" id="wifi">
                                            <input type="hidden" name="wifi_state" value="off" class="sr-only peer"
                                                id="wifi_hidden">
                                            <div
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- end module wifi  --}}
                            {{-- wifi module digicode --}}
                            <div class="bg-gray-100 shadow-md rounded-md w-32 h-32 mb-8">
                                <div class="p-4">
                                    <i class="fa fa-calculator text-3xl flex justify-center" aria-hidden="true"></i>
                                    <h2 class="flex justify-center mb-2">Digicode</h2>
                                    <div class="flex justify-center">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox"
                                                {{ $setting->modules_state['digicode'] == 'on' ? 'checked' : '' }}
                                                class="sr-only peer" id="digicode" name="digicode_state">
                                            <input type="hidden" name="digicode_state" value="off"
                                                class="sr-only peer" id="digicode_hidden">
                                            <div
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- end module digicode  --}}
                            {{-- wifi module Livre d'Or --}}
                            <div class="bg-gray-100 shadow-md rounded-md w-32 h-32 mb-8">
                                <div class="p-4">
                                    <i class="fa fa-bookmark text-3xl flex justify-center" aria-hidden="true"></i>
                                    <h2 class="flex justify-center mb-2">Livre d'Or</h2>
                                    <div class="flex justify-center">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox"
                                                {{ $setting->modules_state['livre'] == 'on' ? 'checked' : '' }}
                                                name="livre_state" class="sr-only peer" id="livre">
                                            <input type="hidden" name="livre_state" value="off" class="sr-only peer"
                                                id="livre_hidden">
                                            <div
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- end module Livre d'Or  --}}
                            {{-- wifi module Alentours --}}
                            <div class="bg-gray-100 shadow-md rounded-md w-32 h-32 mb-8">
                                <div class="p-4">
                                    <i class="fa fa-street-view text-3xl flex justify-center" aria-hidden="true"></i>
                                    <h2 class="flex justify-center mb-2">Alentours</h2>
                                    <div class="flex justify-center">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox"
                                                {{ $setting->modules_state['arround'] == 'on' ? 'checked' : '' }}
                                                name="arround_state" class="sr-only peer" id="arround">
                                            <input type="hidden" name="arround_state" value="off"
                                                class="sr-only peer" id="arround_hidden">
                                            <div
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- end module Alentours  --}}
                            {{-- wifi module Infos --}}
                            <div class="bg-gray-100 shadow-md rounded-md w-32 h-32 mb-8">
                                <div class="p-4">
                                    <i class="fa fa-info text-3xl flex justify-center" aria-hidden="true"></i>
                                    <h2 class="flex justify-center mb-2">Infos</h2>
                                    <div class="flex justify-center">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox"
                                                {{ $setting->modules_state['info'] == 'on' ? 'checked' : '' }}
                                                name="info_state" class="sr-only peer" id="info">
                                            <input type="hidden" name="info_state" value="off" class="sr-only peer"
                                                id="info_hidden">
                                            <div
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- end module Infos  --}}
                            {{-- wifi module Numéros --}}
                            <div class="bg-gray-100 shadow-md rounded-md w-32 h-32 mb-8">
                                <div class="p-4">
                                    <i class="fa fa-volume-control-phone text-3xl flex justify-center"
                                        aria-hidden="true"></i>
                                    <h2 class="flex justify-center mb-2">Numéros</h2>
                                    <div class="flex justify-center">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox"
                                                {{ $setting->modules_state['nums'] == 'on' ? 'checked' : '' }}
                                                name="nums_state" class="sr-only peer" id="nums">
                                            <input type="hidden" name="nums_state" value="off"
                                                class="sr-only peer" id="nums_hidden">
                                            <div
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- end module Numéros --}}
                        </div>
                        <div class="grid lg:grid-cols-1">
                            <div class="px-4 mb-2">
                                <label for="default-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" id="title_input" name="app_title"
                                    value="{{ $app->title }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="px-4 mb-2">
                                <label for="default-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <input type="text" id="description_input" name="app_description"
                                    value="{{ $app->description }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="px-4 mb-2">
                                <label for="default-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de Lien
                                    'Application URL'</label>
                                <input type="text" id="link_input" name="app_link"
                                    value="{{ $app->urlName }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            <div class="px-4 mb-2">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Photo Avatar</label>
                                <input name="avatar"
                                    class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG,
                                    PNG,
                                    JPG
                                    or
                                    GIF (MAX. 800x400px).</p>
                            </div>

                            <div class="px-4 mb-4">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="multiple_files">Upload multiple files</label>
                                <input name="gallery_images"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="multiple_files" type="file" multiple>
                            </div>

                            <div class="grid grid-cols-4">
                                <div class="px-4 mb-2">
                                    <label for="icons-color"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Icons</label>
                                    <input type="color" id="icons-color" name="icons_color"
                                        value="{{ $setting->app_theme['icons_color'] }}"
                                        class="bg-gray-50 border border-gray-300 rounded-lg w-full px-1 py-1">
                                </div>
                                <div class="px-4 mb-2">
                                    <label for="titles-color"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titres</label>
                                    <input type="color" id="titles-color" name="title_color"
                                        value="{{ $setting->app_theme['title_color'] }}"
                                        class="bg-gray-50 border border-gray-300 rounded-lg w-full px-1 py-1">
                                </div>
                                <div class="px-4 mb-2">
                                    <label for="bg-color"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Arrières-plan</label>
                                    <input type="color" id="bgs-color" name="background_color"
                                        value="{{ $setting->app_theme['background_color'] }}"
                                        class="bg-gray-50 border border-gray-300 rounded-lg w-full px-1 py-1">
                                </div>
                                <div class="px-4 mb-2">
                                    <label for="carousel-color"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Carousel</label>
                                    <input type="color" id="carousel-color" name="notes_color"
                                        value="{{ $setting->app_theme['notes_color'] }}"
                                        class="bg-gray-50 border border-gray-300 rounded-lg w-full px-1 py-1">
                                </div>
                            </div>
                            <div class="px-4 mb-2">
                                <div class="flex items-start mb-6">
                                    <div class="flex items-center h-5">
                                    </div>
                                </div>
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modifier</button>
                            </div>
                        </div>
                    </div>

                    <div class="lg:scale-100 md:scale-75">
                        <div class="iphone_bg">
                            <div class="mobile_wrap">
                                <iframe id="frame" frameborder="no" border="0" scrolling="no"
                                    width="325px" height="580px" src="{{ route('home.index') }}">
                                </iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script defer>
        //listen if the dom get loaded 
        document.addEventListener("DOMContentLoaded", () => {

            console.log("DOM Content Loaded !");
            //color inputs
            var icons_changer = document.getElementById('icons-color');
            var title_changer = document.getElementById('titles-color');
            var bg_changer = document.getElementById('bgs-color');
            var carousel_changer = document.getElementById('carousel-color');
            var title_input = document.getElementById('title_input').value;
            var description_input = document.getElementById('description_input').value;

            //when the window get all elements loaded successfully 
            window.onload = function() {
                let myframe = document.getElementById('frame');
                let doc = myframe.contentDocument;

                var app_title = "{{ $app->title }}";
                $('#frame').contents().find('#app_title').text(app_title);
                document.getElementById("title_input").addEventListener("change", function() {
                    console.log(title_input);
                    $('#frame').contents().find('#app_title').text(title_input);
                });

                var app_description = "{{ $app->description }}";
                $('#frame').contents().find('#app_description').text(app_description);
                document.getElementById("description_input").addEventListener("change", function() {
                    console.log(title_input);
                    $('#frame').contents().find('#app_description').text(title_input);
                });

                var colors_icon = "{{ $setting->app_theme['icons_color'] }}";

                $('#frame').contents().find('#icon-color1').css('color', colors_icon);
                $('#frame').contents().find('#icon-color2').css('color', colors_icon);
                $('#frame').contents().find('#icon-color3').css('color', colors_icon);
                $('#frame').contents().find('#icon-color4').css('color', colors_icon);
                $('#frame').contents().find('#icon-color5').css('color', colors_icon);
                $('#frame').contents().find('#icon-color6').css('color', colors_icon);

                //change icons color in iframe when change event occurs in color input
                document.getElementById("icons-color").addEventListener("change", function() {
                    var currentColorIcon = icons_changer;
                    var currentColorTitle = title_changer;
                    $('#frame').contents().find('#icon-color1').css('color', currentColorIcon.value);
                    $('#frame').contents().find('#icon-color2').css('color', currentColorIcon.value);
                    $('#frame').contents().find('#icon-color3').css('color', currentColorIcon.value);
                    $('#frame').contents().find('#icon-color4').css('color', currentColorIcon.value);
                    $('#frame').contents().find('#icon-color5').css('color', currentColorIcon.value);
                    $('#frame').contents().find('#icon-color6').css('color', currentColorIcon.value);
                }, false);

                var title_color = "{{ $setting->app_theme['title_color'] }}";
                $('#frame').contents().find('#title-color1').css('color', title_color);
                $('#frame').contents().find('#title-color2').css('color', title_color);
                $('#frame').contents().find('#title-color3').css('color', title_color);
                $('#frame').contents().find('#title-color4').css('color', title_color);
                $('#frame').contents().find('#title-color5').css('color', title_color);
                $('#frame').contents().find('#title-color6').css('color', title_color);
                //change title under icns in iframe when input color event change
                document.getElementById("titles-color").addEventListener("change", function() {
                    var currentColorTitle = title_changer;
                    $('#frame').contents().find('#title-color1').css('color', currentColorTitle.value);
                    $('#frame').contents().find('#title-color2').css('color', currentColorTitle.value);
                    $('#frame').contents().find('#title-color3').css('color', currentColorTitle.value);
                    $('#frame').contents().find('#title-color4').css('color', currentColorTitle.value);
                    $('#frame').contents().find('#title-color5').css('color', currentColorTitle.value);
                    $('#frame').contents().find('#title-color6').css('color', currentColorTitle.value);
                }, false);

                var background_color = "{{ $setting->app_theme['background_color'] }}";
                $('#frame').contents().find('.homepage').css('background-color', background_color);
                //change background color in iframe from color input event change
                document.getElementById("bgs-color").addEventListener("change", function() {
                    var currentColorBg = bg_changer;
                    $('#frame').contents().find('.homepage').css('background-color', currentColorBg
                        .value);
                });

                var carousel_color = "{{ $setting->app_theme['notes_color'] }}";
                $('#frame').contents().find('.swiper-pagination-bullet').css('background-color', carousel_color);
                //change carousel color in iframe from color input event change
                document.getElementById("carousel-color").addEventListener("change", function() {
                    var currentColorCarousel = carousel_changer;
                    $('#frame').contents().find('.swiper-pagination-bullet-active').css(
                        'background-color', currentColorCarousel.value);
                    $('#frame').contents().find('.swiper-pagination-bullet').css('background-color',
                    currentColorCarousel.value);
                });

                //get wifi state from blade 
                var wifi_state = "{{ $setting->modules_state['wifi'] }}";
                // switch buttons -> display or hide elements on iframe screen when change event occurs in switch buttons
                if (wifi_state == 'on') {
                    $('#frame').contents().find('.wifi_module').css('display', 'block');
                } else if (wifi_state == 'off') {
                    $('#frame').contents().find('.wifi_module').css('display', 'none');
                }
                document.getElementById("wifi").addEventListener("change", function() {
                    if (this.checked) {
                        $('#frame').contents().find('.wifi_module').css('display', 'block');
                    } else if (!this.checked) {
                        $('#frame').contents().find('.wifi_module').css('display', 'none');
                    }
                });

                //get digicode state from blade 
                var digicode_state = "{{ $setting->modules_state['digicode'] }}";
                // switch buttons -> display or hide elements on iframe screen when change event occurs in switch buttons
                if (digicode_state == 'on') {
                    $('#frame').contents().find('.digicode_module').css('display', 'block');
                } else if (digicode_state == 'off') {
                    $('#frame').contents().find('.digicode_module').css('display', 'none');
                }
                document.getElementById("digicode").addEventListener("change", function() {
                    if (this.checked) {
                        $('#frame').contents().find('.digicode_module').css('display', 'block');
                    } else {
                        $('#frame').contents().find('.digicode_module').css('display', 'none');
                    }
                });

                //get livre state from blade 
                var livre_state = "{{ $setting->modules_state['livre'] }}";
                // switch buttons -> display or hide elements on iframe screen when change event occurs in switch buttons
                if (livre_state == 'on') {
                    $('#frame').contents().find('.livre_module').css('display', 'block');
                } else if (livre_state == 'off') {
                    $('#frame').contents().find('.livre_module').css('display', 'none');
                }
                document.getElementById("livre").addEventListener("change", function() {
                    if (this.checked) {
                        $('#frame').contents().find('.livre_module').css('display', 'block');
                    } else {
                        $('#frame').contents().find('.livre_module').css('display', 'none');
                    }
                });

                //get arround state from blade 
                var alentour_state = "{{ $setting->modules_state['arround'] }}";
                // switch buttons -> display or hide elements on iframe screen when change event occurs in switch buttons
                if (alentour_state == 'on') {
                    $('#frame').contents().find('.alentour_module').css('display', 'block');
                } else if (alentour_state == 'off') {
                    $('#frame').contents().find('.alentour_module').css('display', 'none');
                }
                document.getElementById("arround").addEventListener("change", function() {
                    if (this.checked) {
                        $('#frame').contents().find('.alentour_module').css('display', 'block');
                    } else {
                        $('#frame').contents().find('.alentour_module').css('display', 'none');
                    }
                });

                //get info state from blade 
                var info_state = "{{ $setting->modules_state['info'] }}";
                // switch buttons -> display or hide elements on iframe screen when change event occurs in switch buttons
                if (info_state == 'on') {
                    $('#frame').contents().find('.infos_module').css('display', 'block');
                } else if (info_state == 'off') {
                    $('#frame').contents().find('.infos_module').css('display', 'none');
                }
                document.getElementById("info").addEventListener("change", function() {
                    if (this.checked) {
                        $('#frame').contents().find('.infos_module').css('display', 'block');
                    } else {
                        $('#frame').contents().find('.infos_module').css('display', 'none');
                    }
                });


                //get nums state from blade 
                var nums_state = "{{ $setting->modules_state['nums'] }}";
                // switch buttons -> display or hide elements on iframe screen when change event occurs in switch buttons
                if (nums_state == 'on') {
                    $('#frame').contents().find('.nums_module').css('display', 'block');
                } else if (nums_state == 'off') {
                    $('#frame').contents().find('.nums_module').css('display', 'none');
                }
                document.getElementById("nums").addEventListener("change", function() {
                    if (this.checked) {
                        $('#frame').contents().find('.nums_module').css('display', 'block');
                    } else {
                        $('#frame').contents().find('.nums_module').css('display', 'none');
                    }
                });

                // trick to send on/off value in checkbox buttons to backend
                document.getElementById("modules-form").addEventListener("submit", function() {
                    if (document.getElementById("wifi").checked) {
                        document.getElementById('wifi_hidden').disabled = true;
                    }
                    if (document.getElementById("digicode").checked) {
                        document.getElementById('digicode_hidden').disabled = true;
                    }
                    if (document.getElementById("info").checked) {
                        document.getElementById('info_hidden').disabled = true;
                    }
                    if (document.getElementById("arround").checked) {
                        document.getElementById('arround_hidden').disabled = true;
                    }
                    if (document.getElementById("livre").checked) {
                        document.getElementById('livre_hidden').disabled = true;
                    }
                    if (document.getElementById("nums").checked) {
                        document.getElementById('nums_hidden').disabled = true;
                    }
                });

                console.log(wifi_state);
            }

        });
    </script>
</x-app-layout>

<div class="">
    @include('layout.dashboard_footer')
</div>
