<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modules') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-4 sm:grid-cols-1 md-cols-2 lg:gab-4 p-8">
                        {{-- wifi module  --}}
                        <div class="bg-gray-100 shadow-md rounded-md w-40 h-40 mb-8">
                            <div class="p-4">
                                {{-- <i class="fa fa-wifi text-6xl flex justify-center" aria-hidden="true"></i> --}}
                                <img src="{{ url('imagesApp/images/icons/'.$settingGeneral->wifi_path) }}" class="icon d-block center-block w-20 mx-auto">
                                <a href="{{ route('wifi.index') }}" class="flex justify-center mb-2 text-2xl mt-2">Wifi</a>
                            </div>
                        </div>
                        {{-- end module wifi  --}}
                        {{-- wifi module digicode --}}
                        <div class="bg-gray-100 shadow-md rounded-md w-40 h-40  mb-8">
                            <div class="p-4">
                                {{-- <i class="fa fa-calculator text-6xl flex justify-center" aria-hidden="true"></i> --}}
                                <img src="{{ url('imagesApp/images/icons/'.$settingGeneral->digicode_path) }}" class="icon d-block center-block w-24 mx-auto">

                                <a href="{{ route('digicode.index') }}" class="flex justify-center mb-2 text-2xl mt-2">Digicode</a>
                               
                            </div>
                        </div>
                        {{-- end module digicode  --}}
                        {{-- wifi module Livre d'Or --}}
                        <div class="bg-gray-100 shadow-md rounded-md w-40 h-40  mb-8">
                            <div class="p-4">
                                {{-- <i class="fa fa-bookmark text-6xl flex justify-center" aria-hidden="true"></i> --}}
                                <img src="{{ url('imagesApp/images/icons/'.$settingGeneral->livre_path) }}" class="icon d-block center-block w-24 mx-auto">

                                <a href="{{ route('livre.index') }}" class="flex justify-center mb-2 text-2xl mt-2">Livre d'or</a>
                               
                            </div>
                        </div>
                        {{-- end module Livre d'Or  --}}
                        {{-- wifi module Alentours --}}
                        <div class="bg-gray-100 shadow-md rounded-md w-40 h-40  mb-8">
                            <div class="p-4">
                                {{-- <i class="fa fa-street-view text-6xl flex justify-center" aria-hidden="true"></i> --}}
                                <img src="{{ url('imagesApp/images/icons/'.$settingGeneral->arround_path) }}" class="icon d-block center-block w-24 mx-auto">

                                <a href="{{ route('alentours.index') }}" class="flex justify-center mb-2 text-2xl mt-2">Alentours</a>
                                
                            </div>
                        </div>
                        {{-- end module Alentours  --}}
                        {{-- wifi module Infos --}}
                        <div class="bg-gray-100 shadow-md rounded-md w-40 h-40  mb-8">
                            <div class="p-4">
                                {{-- <i class="fa fa-info text-6xl flex justify-center" aria-hidden="true"></i> --}}
                                <img src="{{ url('imagesApp/images/icons/'.$settingGeneral->info_path) }}" class="icon d-block center-block w-24 mx-auto">

                                <a href="{{ route('infos.index') }}" class="flex justify-center mb-2 text-2xl mt-2">Info</a>
                            </div>
                        </div>
                        {{-- end module Infos  --}}
                        {{-- start module Numéros --}}
                        <div class="bg-gray-100 shadow-md rounded-md w-40 h-40  mb-8">
                            <div class="p-4">
                                {{-- <i class="fa fa-volume-control-phone text-6xl flex justify-center"
                                    aria-hidden="true"></i> --}}
                                <img src="{{ url('imagesApp/images/icons/'.$settingGeneral->numero_path) }}" class="icon d-block center-block w-24 mx-auto">

                                <a href="{{ route('numeros.index') }}" class="flex justify-center mb-2 text-2xl mt-2">Numeros</a>
                                
                            </div>
                        </div>
                        {{-- end module Numéros --}}
                        {{-- start module partenariat  --}}
                        <div class="bg-gray-100 shadow-md rounded-md w-40 h-40  mb-8">
                            <div class="p-4">
                                {{-- <i class="fa fa-handshake-o text-6xl flex justify-center"
                                    aria-hidden="true"></i> --}}
                                <img src="{{ url('imagesApp/images/icons/'.$settingGeneral->partenariat_path) }}" class="icon d-block center-block w-24 mx-auto">
    
                                <a href="{{ route('partenariat.index') }}" class="flex justify-center mb-2 text-2xl mt-2">Partenariat</a>
                                
                            </div>
                        </div>
                        {{-- end module Numéros --}}
                    </div>
                   
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</x-app-layout>

<div class="">
    @include('layout.dashboard_footer')
</div>
