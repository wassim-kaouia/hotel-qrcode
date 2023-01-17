@extends('layout.master')

@section('title')
    
@endsection

@section('mycss')
    <style>
        .mybg {
            background-image: url('https://mapio.net/images-p/40292896.jpg');
            background-size: cover;
            /* position: fixed; */
            background-repeat: no-repeat;
            
        }
    </style>
@endsection

@section('content')

<div class="h-screen mybg relative overflow-scroll">

    <div class="text-center">
        <div class="flex justify-center py-3">
            <img class="h-10" src="https://1000logos.net/wp-content/uploads/2017/08/Airbnb-emblem.jpg" alt="">
        </div>
        <h1 class="text-bold font-extrabold	text-white">Hey !</h1>
        <h2 class="text-white px-4 mx-5">
            Chère Visiteur, je vous souhaite un agréable séjour !!
        </h2>
    </div>

    <div class="">
        <div class="px-6 pt-10">
            <div class="rounded-md bg-blue-300 opacity-75 w-full pb-4">
                <div class="flex justify-center py-4">
                    <span class=""><i class="fa fa-bookmark text-white text-4xl" aria-hidden="true"></i></span>
                </div>
                <form action="" method="POST">
                  @csrf
                  <div class="mb-3 px-3">
                      <input type="text" class="form-control rounded-md w-full" id="exampleFormControlInput1" placeholder="Votre Nom" name="name">
                  </div>
                  <div class="mb-3 px-3">
                    <input type="text" class="form-control rounded-md w-full" id="name" placeholder="Votre pays" name="country">
                </div>
                  <div class="mb-3 px-3">
                      <input type="text" class="form-control rounded-md w-full" id="email" placeholder="Email" name="email">
                  </div>
                  <div class="mb-3 px-3">
                      <textarea class="form-control rounded-md px-3 w-full" id="message" rows="4" name="message"></textarea>
                  </div>
                  <div class="px-3">
                      <button class="rounded-md bg-blue-700 text-white px-4 py-2 ">Ajouter</button>
                  </div>
                   </form>
            </div>
        </div>

        <div class="px-6 pt-10 ">
            <div class="rounded-md bg-blue-300 opacity-75 w-full pb-4">
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Nom: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Email: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Pays: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Message: </h2>
                </div>
            </div>    
        </div>

        <div class="px-6 pt-10 ">
            <div class="rounded-md bg-blue-300 opacity-75 w-full pb-4">
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Nom: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Email: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Pays: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Message: </h2>
                </div>
            </div>    
        </div>

        <div class="px-6 pt-10 ">
            <div class="rounded-md bg-blue-300 opacity-75 w-full pb-4">
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Nom: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Email: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Pays: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Message: </h2>
                </div>
            </div>    
        </div>

        <div class="px-6 pt-10 ">
            <div class="rounded-md bg-blue-300 opacity-75 w-full pb-4">
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Nom: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Email: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Pays: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Message: </h2>
                </div>
            </div>    
        </div>

        <div class="px-6 pt-10 ">
            <div class="rounded-md bg-blue-300 opacity-75 w-full pb-4">
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Nom: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Email: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Pays: </h2>
                </div>
                <div class="flex justify-start p-2">
                    <h2 class="text-white">Message: </h2>
                </div>
            </div>    
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