<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Modules') }}
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
                                        <input type="checkbox" value="" class="sr-only peer">
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
                                        <input type="checkbox" value="" class="sr-only peer">
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
                                        <input type="checkbox" value="" class="sr-only peer">
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
                                        <input type="checkbox" value="" class="sr-only peer">
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
                                        <input type="checkbox" value="" class="sr-only peer">
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
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div
                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        {{-- end module Numéros  --}}
                    </div>
                    <div class="grid lg:grid-cols-1">
                        <div class="px-4 mb-2">
                            <label for="default-input"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                            <input type="text" id="default-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="px-4 mb-2">
                            <label for="default-input"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <input type="text" id="default-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                        <div class="px-4 mb-2">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="file_input">Photo Avatar</label>
                            <input
                                class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="file_input_help" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG
                                or
                                GIF (MAX. 800x400px).</p>
                        </div>

                        <div class="grid grid-cols-3">
                            <div class="px-4 mb-2">
                                <label for="icons-color"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Icons</label>
                                <input type="color" id="icons-color"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="px-4 mb-2">
                                <label for="bg-color"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Arrière-plan</label>
                                <input type="color" id="bg-color"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="px-4 mb-2">
                                <label for="carousel-color"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Buttons
                                    Carousel</label>
                                <input type="color" id="carousel-color"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="lg:scale-100 md:scale-75">
                    <div class="iphone_bg">
                        <div class="mobile_wrap">
                            <iframe id="frame" frameborder="no" border="0" scrolling="no" width="325px"
                                height="580px" src="{{ route('home.index') }}">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script defer>
        document.addEventListener("DOMContentLoaded", () => {

            console.log("DOM Content Loaded !");
            var icons_changer = document.getElementById('icons-color').value;
            var bg_changer = document.getElementById('bg-color');
            var carousel_changer = document.getElementById('carousel-color');

            var icon_mobile = document.getElementById('icon-color');
            var bg_mobile = document.getElementById('bg-colorr');
            var carousel_mobile = document.getElementById('icons-color');


            document.getElementById("icons-color").addEventListener("change", function(){
                icon_mobile.style.color = 'red';
                console.log('hey :'+document.getElementById('icon-color').value);
                console.log('change happens icons ! :'+icons_changer);
            });

            // document.getElementById("bg-color").addEventListener("change", function(){
            //     console.log('change happens bg-color !');
            // });

            // document.getElementById("carousel-color").addEventListener("change", function(){
            //     console.log('change happens carousel-color !');
            // });

            
        });
    </script>
</x-app-layout>
