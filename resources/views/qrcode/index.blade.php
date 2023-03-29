<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mon Qr Code') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-2 lg:gab-4 p-8">

                       <p class="text-3xl mb-3"> Mon lien d'application:</p> {{ $link }}
                       <p class="mt-10 mb-4">
                        Pour imprimer ou enregistrer le Qr Code 
                       </p>
                       <a href="" class="bg-blue-300 w-64 text-center rounded px-4 py-2 text-lg">Telecharger le Qr Code</a>
                    </div>
                </div>
                <div class="lg:col-span-1 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-2 lg:gab-4 p-8">

                        <div class="relative overflow-x-auto sm:rounded-lg justify-center">
                          
                            <div class="visible-print text-center">
                                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate($link)) !!} ">
                        
                                <p class="mt-2">Scanez le qr code pour aller à votre application</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</x-app-layout>

<div class="">
    @include('layout.dashboard_footer')
</div>
