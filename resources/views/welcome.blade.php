@extends('layout.master')

@section('title')
    
@endsection

@section('mycss')
    <style>
        .mybg {
            background-image: url('https://mapio.net/images-p/40292896.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            
        }
    </style>
@endsection

@section('content')

<div class="h-screen mybg w-screen relative overflow-scroll">

    <div class="text-center">
        <div class="flex justify-center py-3">
            <img class="h-10" src="https://1000logos.net/wp-content/uploads/2017/08/Airbnb-emblem.jpg" alt="">
        </div>
        <h1 class="text-bold font-extrabold	text-white">Hey !</h1>
        <h2 class="text-white px-4 mx-5">
            Chère Visiteur, je vous souhaite un agréable séjour !
        </h2>
    </div>

    <div class="grid grid-cols-2 gab-2 p-6 overflow-auto">
        <div class="bg-blue-500 m-6 rounded-md opacity-75 p-3">
            <div class="flex justify-center ">
                <span class=""><i class="fa fa-wifi text-white text-6xl" aria-hidden="true"></i></span>
            </div>
            <h2 class="flex justify-center mt-2 text-white">Wifi</h2>
        </div>

        <div class="bg-blue-500 m-6 rounded-md opacity-75 p-4">
            <div class="flex justify-center">
                <span class=""><i class="fa fa-address-book text-white text-6xl" aria-hidden="true"></i></span>
            </div>
            <h2 class="flex justify-center mt-2 text-white">Digicode</h2>
        </div>

        <div class="bg-blue-500 m-6 rounded-md opacity-75 p-4">
            <div class="flex justify-center ">
                <span class=""><i class="fa fa-map-marker text-white text-6xl" aria-hidden="true"></i></span>
            </div>
            <h2 class="flex justify-center mt-2 text-white text-center">Autour de moi</h2>
        </div>


        <div class="bg-blue-500 m-6 rounded-md opacity-75 p-4">
            <div class="flex justify-center ">
                <span class=""><i class="fa fa-info text-white text-6xl" aria-hidden="true"></i></span>
            </div>
            <h2 class="flex justify-center mt-2 text-white text-center">Infos Pratiques</h2>
        </div>

        <div class="bg-blue-500 m-6 rounded-md opacity-75 p-4">
            <div class="flex justify-center ">
                <span class=""><i class="fa fa-bookmark text-white text-6xl" aria-hidden="true"></i></span>
            </div>
            <h2 class="flex justify-center mt-2 text-white">Livre d'or</h2>
        </div>

        <div class="bg-blue-500 m-6 rounded-md opacity-75 p-4">
            <div class="flex justify-center ">
                <span class=""><i class="fa fa-mobile text-white text-6xl" aria-hidden="true"></i></span>
            </div>
            <h2 class="flex justify-center mt-2 text-white text-center">Numéros utiles</h2>
        </div>

    </div>
    <div class="py-4 flex justify-center absolute bottom-0 sticky">
        <img class="w-1/2" src="{{ asset('assets/images/ovm_logo.png') }}" alt="">
    </div>
</div>
@endsection

@section('js')
<script>

</script>
@endsection