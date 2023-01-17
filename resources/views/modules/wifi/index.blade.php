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

<div class="h-full mybg relative">
    <div class="text-center">
        <div class="flex justify-center py-3">
            <img class="h-10" src="https://1000logos.net/wp-content/uploads/2017/08/Airbnb-emblem.jpg" alt="">
        </div>
        <h1 class="text-bold font-extrabold	text-white">Hey !</h1>
        <h2 class="text-white px-4 mx-5">
            Chère Visiteur, je vous souhaite un agréable séjour !!
        </h2>
    </div>

    <div class="px-6 pt-10">
        <div class="rounded-md bg-blue-300 opacity-75 w-full pb-4">
            <div class="flex justify-center py-4">
                <span class=""><i class="fa fa-wifi text-white text-4xl" aria-hidden="true"></i></span>
            </div>
            <div class="flex justify-start px-2">
                <h2 class="text-white">Nom de Wifi : Vodaphone-434</h2>
            </div>

            <div class="flex justify-start px-2">
                <h2 class="text-white">Mot de Passe : vcdsdsf</h2>
            </div>
        </div>
    </div>

    <div class="px-6 pt-10">
        <div class="rounded-md bg-blue-300 opacity-75 w-full pb-4">
            <div class="flex justify-center py-4">
                <span class=""><i class="fa fa-wifi text-white text-4xl" aria-hidden="true"></i></span>
            </div>
            <div class="flex justify-start px-2">
                <h2 class="text-white">Nom de Wifi : Vodaphone-434</h2>
            </div>

            <div class="flex justify-start px-2">
                <h2 class="text-white">Mot de Passe : vcdsdsf</h2>
            </div>
        </div>
    </div>

    <div class="py-4 flex justify-center absolute bottom-0">
        <img class="w-1/2" src="{{ asset('assets/images/ovm_logo.png') }}" alt="">
    </div>
        
</div>

@endsection

@section('js')
<script>

</script>
@endsection