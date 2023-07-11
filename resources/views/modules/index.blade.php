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

        .center-block {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .icon {
            width: 50px;
        }
    </style>
    <div class="py-12">
        <form action="{{ route('settings.post') }}" method="POST" enctype="multipart/form-data" id="modules-form">
            @csrf
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @if (Auth::user()->role == 'admin')
                        <div class="p-8">
                            <a href="{{ route('icons.update') }}" class="bg-red-500 text-white rounded px-4 py-2">Modifier Les Modules</a>
                        </div>
                        @endif
                        <div class="grid lg:grid-cols-4 sm:grid-cols-1 md-cols-2 lg:gab-4 p-8">
                            {{-- wifi module  --}}
                            <div class="bg-gray-100 shadow-md rounded-md w-32 h-32 mb-8">
                                <div class="p-4">
                                    {{-- <i class="fa fa-wifi text-3xl flex justify-center" aria-hidden="true"></i> --}}
                                    <img src="{{ url('imagesApp/images/icons/'.$settingGeneral->wifi_path) }}" class="icon d-block center-block">
                                    <h2 class="flex justify-center mb-2">{{ $settingGeneral->wifi_text }}</h2>
                                    <div class="flex justify-center">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox"
                                                {{ count($setting->modules_state) > 0  && $setting->modules_state['wifi'] == 'on' ? 'checked' : '' }}
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
                                    {{-- <i class="fa fa-calculator text-3xl flex justify-center" aria-hidden="true"></i> --}}
                                    <img src="{{ url('imagesApp/images/icons/'.$settingGeneral->digicode_path) }}" class="icon d-block center-block">

                                    <h2 class="flex justify-center mb-2">{{ $settingGeneral->digicode_text }}</h2>
                                    <div class="flex justify-center">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox"
                                                {{ count($setting->modules_state) > 0  && $setting->modules_state['digicode'] == 'on' ? 'checked' : '' }}
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
                                    <img src="{{ url('imagesApp/images/icons/'.$settingGeneral->livre_path) }}" class="icon d-block center-block">
                                    {{-- <i class="fa fa-bookmark text-3xl flex justify-center" aria-hidden="true"></i> --}}
                                    <h2 class="flex justify-center mb-2">{{ $settingGeneral->livre_text }}</h2>
                                    <div class="flex justify-center">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox"
                                                {{ count($setting->modules_state) > 0  && $setting->modules_state['livre'] == 'on' ? 'checked' : '' }}
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
                                    {{-- <i class="fa fa-street-view text-3xl flex justify-center" aria-hidden="true"></i> --}}
                                    <img src="{{ url('imagesApp/images/icons/'.$settingGeneral->arround_path) }}" class="icon d-block center-block">
                                    <h2 class="flex justify-center mb-2">{{ $settingGeneral->arround_text }}</h2>
                                    <div class="flex justify-center">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox"
                                                {{ count($setting->modules_state) > 0  && $setting->modules_state['arround'] == 'on' ? 'checked' : '' }}
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
                                    <img src="{{ url('imagesApp/images/icons/'.$settingGeneral->info_path) }}" class="icon d-block center-block">

                                    {{-- <i class="fa fa-info text-3xl flex justify-center" aria-hidden="true"></i> --}}
                                    <h2 class="flex justify-center mb-2">{{ $settingGeneral->info_text }}</h2>
                                    <div class="flex justify-center">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox"
                                                {{ count($setting->modules_state) > 0  && $setting->modules_state['info'] == 'on' ? 'checked' : '' }}
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
                            {{-- start module Numéros --}}
                            <div class="bg-gray-100 shadow-md rounded-md w-32 h-32 mb-8">
                                <div class="p-4">
                                    {{-- <i class="fa fa-volume-control-phone text-3xl flex justify-center"
                                        aria-hidden="true"></i> --}}
                                        <img src="{{ url('imagesApp/images/icons/'.$settingGeneral->numero_path) }}" class="icon d-block center-block">

                                    <h2 class="flex justify-center mb-2">{{ $settingGeneral->numero_text }}</h2>
                                    <div class="flex justify-center">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox"
                                                {{ count($setting->modules_state) > 0  && $setting->modules_state['nums'] == 'on' ? 'checked' : '' }}
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

                            {{-- start module partenariat --}}
                                 <div class="bg-gray-100 shadow-md rounded-md w-32 h-32 mb-8">
                                    <div class="p-4">
                                        {{-- <i class="fa fa-volume-control-phone text-3xl flex justify-center"
                                            aria-hidden="true"></i> --}}
                                            <img src="{{ url('imagesApp/images/icons/'.$settingGeneral->partenariat_path) }}" class="icon d-block center-block">
    
                                        <h2 class="flex justify-center mb-2">{{ $settingGeneral->partenariat_text }}</h2>
                                        <div class="flex justify-center">
                                            <label class="relative inline-flex items-center cursor-pointer">
                                                <input type="checkbox"
                                                    {{ count($setting->modules_state) > 0  && $setting->modules_state['partenariat'] == 'on' ? 'checked' : '' }}
                                                    name="partenariat_state" class="sr-only peer" id="partenariat">
                                                <input type="hidden" name="partenariat_state" value="off"
                                                    class="sr-only peer" id="partenariat_hidden">
                                                <div
                                                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                {{-- end module Partenariat --}}

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
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                    PNG,
                                    JPG
                                    (MAX. 800x800px).</p>
                                <div>
                                    <img src="{{ url('imagesApp/images/'.Auth::user()->id.'/'.$app->avatar) }}" alt="avatar" class="w-32">    
                                </div>    
                            </div>

                            <div class="px-4 mb-2">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Background de l'application</label>
                                <input name="background_img"
                                    class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                    PNG,
                                    JPG
                                    (Image : Portrait).</p>
                                <div>
                                    <img src="{{ url('imagesApp/images/'.Auth::user()->id.'/'.$setting->background_image) }}" alt="background image" class="w-32">    
                                </div>    
                            </div>

                            <div class="px-4 mb-2 mt-4">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Message de Bienvenue:</label>
                                <textarea name="welcome_message"
                                    class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                >{{ $setting->welcome_text }}</textarea>
                                
                            </div>

                            {{-- <div class="px-4 mb-4">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="multiple_files">Upload multiple files</label>
                                <input name="gallery_images"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="multiple_files" type="file">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                        PNG,
                                        JPG
                                        (MAX. 1050x1350px).</p>
                            </div> --}}

                            {{-- <div class="my-6 flex"> --}}
                                {{-- fetch images of app  --}}
                                {{-- @foreach($app->images as $image) --}}
                                {{-- <div class="bg-gray-100 p-6 mx-4 relative rounded-lg"> --}}
                                    {{-- <form action="{{ route('settings.imagedelete',['id' => $image->id]) }}" method="POST"> --}}
                                        {{-- @csrf --}}
                                        {{-- <a class="absolute top-3 right-3 text-2xl text-red-500" href="{{ route('settings.imagedelete',['id' => $image->id]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a> --}}
                                        {{-- <button class="fa fa-trash absolute top-3 right-3 text-2xl text-red-500" type="submit"></button> --}}
                                    {{-- </form> --}}
                                    {{-- @if ($image->url == '')
                                    <img class="mx-2 h-auto w-32 rounded-lg"
                                    src="https://customercare.igloosoftware.com/.api2/api/v1/communities/10068556/previews/thumbnails/4fc20722-5368-e911-80d5-b82a72db46f2?width=680&height=680&crop=False"
                                    alt="image description">
                                    @else --}}
                                    {{-- <p>{{ asset('imagesApp/gallery/'.auth()->user()->id.'/'.$image->url) }}</p> --}}
                                    {{-- <img class="h-full w-full rounded-lg"
                                    src="{{ asset('imagesApp/gallery/'.auth()->user()->id.'/'.$image->url) }}"
                                    alt="">
                                    @endif --}}
                                {{-- </div> --}}
                                {{-- @endforeach --}}
                            {{-- </div> --}}

                            <div class="grid grid-cols-4">
                                <div class="px-4 mb-2">
                                    <label for="icons-color"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre et Description</label>
                                    <input type="color" id="icons-color" name="icons_color"    
                                        value="{{ empty($setting->app_theme) ? '' : $setting->app_theme['icons_color'] }}"
                                        class="bg-gray-50 border border-gray-300 rounded-lg w-full px-1 py-1">
                                </div>
                                <div class="px-4 mb-2">
                                    <label for="titles-color"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titres - Icons</label>
                                    <input type="color" id="titles-color" name="title_color"
                                        value="{{ empty($setting->app_theme) ? '' : $setting->app_theme['title_color'] }}"
                                        class="bg-gray-50 border border-gray-300 rounded-lg w-full px-1 py-1">
                                </div>
                                <div class="px-4 mb-2">
                                    <label for="bg-color"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Arrières-plan - Icons</label>
                                    <input type="color" id="bgs-color" name="background_color"
                                        value="{{ empty($setting->app_theme) ? '' : $setting->app_theme['background_color'] }}"
                                        class="bg-gray-50 border border-gray-300 rounded-lg w-full px-1 py-1">
                                </div>
                                <div class="px-4 mb-2">
                                    <label for="carousel-color"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Carousel</label>
                                    <input type="color" id="carousel-color" name="notes_color"
                                        value="{{ empty($setting->app_theme) ? '' : $setting->app_theme['notes_color'] }}"
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

                var app_avatar = "{{ $app->avatar }}";
                $('#frame').contents().find('#avatar').attr("src","/imagesApp/images/"+{{ auth()->user()->id }}+"/"+app_avatar);

                var app_title = "{{ $app->title }}";
                // i changed .text to .html to solve ascii caractere probleme - issued by Joel
                $('#frame').contents().find('.title-application').html(app_title);
                document.getElementById("title_input").addEventListener("change", function() {
                    $('#frame').contents().find('.title-application').html(title_input);
                });

                var app_description = "{{ $app->description }}";
                $('#frame').contents().find('.description-application').html(app_description);
                document.getElementById("description_input").addEventListener("change", function() {
                    $('#frame').contents().find('.description-application').html(description_input);
                });

                var colors_icon = "{{ count($setting->app_theme) > 0  ?  $setting->app_theme['icons_color'] : '' }}";

                $('#frame').contents().find('.title-application').css('color', colors_icon);
                $('#frame').contents().find('.description-application').css('color', colors_icon);

                //change wifi icon
                $('#frame').contents().find('.icon_wifi').attr('src',"/imagesApp/images/icons/"+"{{ $app->setting->wifi_path}}");
                $('#frame').contents().find('.icon_wifi').addClass('icon');
                $('#frame').contents().find('.icon_wifi').addClass('d-block');
                $('#frame').contents().find('.icon_wifi').addClass('center-block');

                //change digicode icon
                $('#frame').contents().find('.icon_digicode').attr('src',"/imagesApp/images/icons/"+"{{ $app->setting->digicode_path}}");
                $('#frame').contents().find('.icon_digicode').addClass('icon');
                $('#frame').contents().find('.icon_digicode').addClass('d-block');
                $('#frame').contents().find('.icon_digicode').addClass('center-block');

                //change livre icon
                $('#frame').contents().find('.icon_livre').attr('src',"/imagesApp/images/icons/"+"{{ $app->setting->livre_path}}");
                $('#frame').contents().find('.icon_livre').addClass('icon');
                $('#frame').contents().find('.icon_livre').addClass('d-block');
                $('#frame').contents().find('.icon_livre').addClass('center-block');

                //change infos icon
                $('#frame').contents().find('.icon_info').attr('src',"/imagesApp/images/icons/"+"{{ $app->setting->info_path}}");
                $('#frame').contents().find('.icon_info').addClass('icon');
                $('#frame').contents().find('.icon_info').addClass('d-block');
                $('#frame').contents().find('.icon_info').addClass('center-block');

                //change arround icon
                $('#frame').contents().find('.icon_arround').attr('src',"/imagesApp/images/icons/"+"{{ $app->setting->arround_path}}");
                $('#frame').contents().find('.icon_arround').addClass('icon');
                $('#frame').contents().find('.icon_arround').addClass('d-block');
                $('#frame').contents().find('.icon_arround').addClass('center-block');

                //change numeros icon
                $('#frame').contents().find('.icon_nums').attr('src',"/imagesApp/images/icons/"+"{{ $app->setting->numero_path}}");
                $('#frame').contents().find('.icon_nums').addClass('icon');
                $('#frame').contents().find('.icon_nums').addClass('d-block');
                $('#frame').contents().find('.icon_nums').addClass('center-block');

                //change partenariat icon
                $('#frame').contents().find('.icon_partenariat').attr('src',"/imagesApp/images/icons/"+"{{ $app->setting->partenariat_path}}");
                $('#frame').contents().find('.icon_partenariat').addClass('icon');
                $('#frame').contents().find('.icon_partenariat').addClass('d-block');
                $('#frame').contents().find('.icon_partenariat').addClass('center-block');
                
                //change title + description color in iframe when change event occurs in color input
                document.getElementById("icons-color").addEventListener("change", function() {
                    var currentColorIcon = icons_changer;
                    var currentColorTitle = title_changer;
                    $('#frame').contents().find('.title-application').css('color', currentColorIcon.value);
                    $('#frame').contents().find('.description-application').css('color', currentColorIcon.value);
                    
                }, false);

                var title_color = "{{ count($setting->app_theme) > 0  ? $setting->app_theme['title_color'] : '' }}";
                $('#frame').contents().find('.icon-title').css('color', title_color);
              
                //change title under icons in iframe when input color event change
                document.getElementById("titles-color").addEventListener("change", function() {
                    var currentColorTitle = title_changer;
                    $('#frame').contents().find('.icon-title').css('color', currentColorTitle.value);
                  
                }, false);

                var background_color = "{{ count($setting->app_theme) > 0 ? $setting->app_theme['background_color'] : '' }}";
                $('#frame').contents().find('.square-icon').css('background-color', background_color);
                //change background color in iframe from color input event change
                document.getElementById("bgs-color").addEventListener("change", function() {
                    var currentColorBg = bg_changer;
                    $('#frame').contents().find('.square-icon').css('background-color', currentColorBg
                        .value);
                });

                var carousel_color = "{{ count($setting->app_theme) > 0  ?  $setting->app_theme['notes_color'] : '' }}";
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
                var wifi_state = "{{ count($setting->modules_state) > 0 ? $setting->modules_state['wifi'] : '' }}";
                // switch buttons -> display or hide elements on iframe screen when change event occurs in switch buttons
                if (wifi_state == 'on') {
                    $('#frame').contents().find('.wifi_module').css('display', 'block');
                    $('#frame').contents().find('.wifi_module').removeClass('d-none');

                } else if (wifi_state == 'off') {
                    $('#frame').contents().find('.wifi_module').css('display', 'none');
                    $('#frame').contents().find('.wifi_module').addClass('d-none');
                }
                document.getElementById("wifi").addEventListener("change", function() {
                    if (this.checked) {
                        console.log('checked');
                        $('#frame').contents().find('.wifi_module').css('display', 'block');
                        $('#frame').contents().find('.wifi_module').removeClass('d-none');
                    } else {
                        console.log('unchecked');
                        $('#frame').contents().find('.wifi_module').css('display', 'none');
                        $('#frame').contents().find('.wifi_module').addClass('d-none');
                    }
                });

                //get partenariat state from blade 
                var partenariat_state = "{{ count($setting->modules_state) > 0 ? $setting->modules_state['partenariat'] : '' }}";
                // switch buttons -> display or hide elements on iframe screen when change event occurs in switch buttons
                if (partenariat_state == 'on') {
                    $('#frame').contents().find('.partenariat_module').css('display', 'block');
                    $('#frame').contents().find('.partenariat_module').removeClass('d-none');

                } else if (partenariat_state == 'off') {
                    $('#frame').contents().find('.partenariat_module').css('display', 'none');
                    $('#frame').contents().find('.partenariat_module').addClass('d-none');
                }
                document.getElementById("partenariat").addEventListener("change", function() {
                    if (this.checked) {
                        console.log('checked');
                        $('#frame').contents().find('.partenariat_module').css('display', 'block');
                        $('#frame').contents().find('.partenariat_module').removeClass('d-none');
                    } else {
                        console.log('unchecked');
                        $('#frame').contents().find('.partenariat_module').css('display', 'none');
                        $('#frame').contents().find('.partenariat_module').addClass('d-none');
                    }
                });

                //get digicode state from blade 
                var digicode_state = "{{ count($setting->modules_state) > 0  ? $setting->modules_state['digicode'] : '' }}";
                // switch buttons -> display or hide elements on iframe screen when change event occurs in switch buttons
                if (digicode_state == 'on') {
                    $('#frame').contents().find('.digicode_module').css('display', 'block');
                    $('#frame').contents().find('.wifi_module').removeClass('d-none');

                } else if (digicode_state == 'off') {
                    $('#frame').contents().find('.digicode_module').css('display', 'none');
                    $('#frame').contents().find('.digicode_module').addClass('d-none');
                }
                document.getElementById("digicode").addEventListener("change", function() {
                    if (this.checked) {
                        $('#frame').contents().find('.digicode_module').css('display', 'block');
                        $('#frame').contents().find('.digicode_module').removeClass('d-none');
                    } else {
                        $('#frame').contents().find('.digicode_module').css('display', 'none');
                        $('#frame').contents().find('.digicode_module').addClass('d-none');
                    }
                });

                //get livre state from blade 
                var livre_state = "{{ count($setting->modules_state) > 0  ? $setting->modules_state['livre'] : '' }}";
                // switch buttons -> display or hide elements on iframe screen when change event occurs in switch buttons
                if (livre_state == 'on') {
                    $('#frame').contents().find('.livre_module').css('display', 'block');
                    $('#frame').contents().find('.livre_module').removeClass('d-none');
                } else if (livre_state == 'off') {
                    $('#frame').contents().find('.livre_module').css('display', 'none');
                    $('#frame').contents().find('.livre_module').addClass('d-none');
                }
                document.getElementById("livre").addEventListener("change", function() {
                    if (this.checked) {
                        $('#frame').contents().find('.livre_module').css('display', 'block');
                        $('#frame').contents().find('.livre_module').removeClass('d-none');
                    } else {
                        $('#frame').contents().find('.livre_module').css('display', 'none');
                        $('#frame').contents().find('.livre_module').addClass('d-none');
                    }
                });

                //get arround state from blade 
                var arround_state = "{{ count($setting->modules_state) > 0 ?  $setting->modules_state['arround'] : '' }}";
                // switch buttons -> display or hide elements on iframe screen when change event occurs in switch buttons
                if (arround_state == 'on') {
                    $('#frame').contents().find('.alentour_module').css('display', 'block');
                    $('#frame').contents().find('.alentour_module').removeClass('d-none');
                } else if (arround_state == 'off') {
                    $('#frame').contents().find('.alentour_module').css('display', 'none');
                    $('#frame').contents().find('.alentour_module').addClass('d-none');
                }
                document.getElementById("arround").addEventListener("change", function() {
                    if (this.checked) {
                        $('#frame').contents().find('.alentour_module').css('display', 'block');
                        $('#frame').contents().find('.alentour_module').removeClass('d-none');
                    } else {
                        $('#frame').contents().find('.alentour_module').css('display', 'none');
                        $('#frame').contents().find('.alentour_module').addClass('d-none');
                    }
                });

                //get info state from blade 
                var info_state = "{{ count($setting->modules_state) > 0  ? $setting->modules_state['info'] : '' }}";
                // switch buttons -> display or hide elements on iframe screen when change event occurs in switch buttons
                if (info_state == 'on') {
                    $('#frame').contents().find('.infos_module').css('display', 'block');
                    $('#frame').contents().find('.infos_module').removeClass('d-none');

                } else if (info_state == 'off') { 
                    $('#frame').contents().find('.infos_module').css('display', 'none');
                    $('#frame').contents().find('.infos_module').addClass('d-none');
                }
                document.getElementById("info").addEventListener("change", function() {
                    if (this.checked) {
                        $('#frame').contents().find('.infos_module').css('display', 'block');
                        $('#frame').contents().find('.infos_module').removeClass('d-none');

                    } else {
                        $('#frame').contents().find('.infos_module').css('display', 'none');
                        $('#frame').contents().find('.infos_module').addClass('d-none');
                    }
                });

                //get nums state from blade 
                var nums_state = "{{ count($setting->modules_state) > 0  ? $setting->modules_state['nums'] : '' }}";
                // switch buttons -> display or hide elements on iframe screen when change event occurs in switch buttons
                if (nums_state == 'on') {
                    $('#frame').contents().find('.nums_module').css('display', 'block');
                    $('#frame').contents().find('.nums_module').removeClass('d-none');

                } else if (nums_state == 'off') {
                    $('#frame').contents().find('.nums_module').css('display', 'none');
                    $('#frame').contents().find('.nums_module').addClass('d-none');
                }
                document.getElementById("nums").addEventListener("change", function() {
                    if (this.checked) {
                        $('#frame').contents().find('.nums_module').css('display', 'block');
                        $('#frame').contents().find('.nums_module').removeClass('d-none');
                    } else {
                        $('#frame').contents().find('.nums_module').css('display', 'none');
                        $('#frame').contents().find('.nums_module').addClass('d-none');
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

                    if (document.getElementById("partenariat").checked) {
                        document.getElementById('partenariat_hidden').disabled = true;
                    } 
                });
            }
        });
    </script>
</x-app-layout>

<div class="">
    @include('layout.dashboard_footer')
</div>
