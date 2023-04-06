<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion De Vitrine') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-1 md:col-span-1 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-2 lg:gab-4 p-8">
    
<form action="{{ route('vitrine.editforms') }}" method="POST" >
    @csrf
    {{-- section 1  --}}
    <p class="my-4">Section 1</p>
    <div class="mb-6">
      <label for="title_s1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
      <input type="text" id="title_s1" value="{{ $frontend->title_s1 }}" name="title_s1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>
    <div class="mb-6">
      <label for="description_s1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
      <input type="text" id="description_s1" value="{{ $frontend->description_s1 }}" name="description_s1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>
   
    <div class="mb-6">
        <label for="video_s1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lien video Promo</label>
        <input type="text" id="video_s1" name="video_s1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>

    <div class="mb-6">
        <label for="image_s1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Thumbnail Video Promo</label>
        <input type="file" id="image_s1" name="image_s1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>

    {{-- section 2  --}}
    <p class="my-4">Section 2</p>

    <div class="mb-6">
        <label for="title_s2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
        <input type="text" id="title_s2" value="{{ $frontend->title_s2 }}" name="title_s2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>
      
      <div class="mb-6">
        <label for="description_s2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
        <input type="text" id="description_s2" value="{{ $frontend->description_s2 }}" name="description_s2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>

      <div class="mb-6">
        <label for="title_icon1_s2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre Icon 1</label>
        <input type="text" id="title_icon1_s2" value="{{ $frontend->title_icon1_s2 }}" name="title_icon1_s2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>

      <div class="mb-6">
        <label for="description_icon1_s2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description Icon 1</label>
        <input type="text" id="description_icon1_s2" value="{{ $frontend->description_icon1_s2 }}" name="description_icon1_s2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>

      <div class="mb-6">
        <label for="title_icon2_s2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre Icon 2</label>
        <input type="text" id="title_icon2_s2" value="{{ $frontend->title_icon2_s2 }}" name="title_icon2_s2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>

      <div class="mb-6">
        <label for="description_icon2_s2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description Icon 2</label>
        <input type="text" id="description_icon2_s2" value="{{ $frontend->description_icon2_s2 }}" name="description_icon2_s2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>

      <div class="mb-6">
        <label for="title_icon3_s2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre Icon 3</label>
        <input type="text" id="title_icon3_s2" value="{{ $frontend->title_icon3_s2 }}" name="title_icon3_s2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>

      <div class="mb-6">
        <label for="description_icon3_s2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description Icon 3</label>
        <input type="text" id="description_icon3_s2" value="{{ $frontend->description_icon3_s2 }}" name="description_icon3_s2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>

      <div class="mb-6">
        <label for="title_icon4_s2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre Icon 4</label>
        <input type="text" id="title_icon4_s2" value="{{ $frontend->title_icon4_s2 }}" name="title_icon4_s2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>

      <div class="mb-6">
        <label for="description_icon4_s2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description Icon 4</label>
        <input type="text" id="description_icon4_s2" value="{{ $frontend->description_icon4_s2 }}" name="description_icon4_s2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer</button>
  </form>
  
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
