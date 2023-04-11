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
    
<form action="{{ route('vitrine.editforms') }}" method="POST" enctype="multipart/form-data">
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
        <input type="text" id="video_s1" name="video_s1" value="{{ $frontend->bg_video }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>

    <div class="mb-6">
        <label for="image_s1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Thumbnail Video Promo (Meilleur résolution : 1920x1264)</label>
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

      <p class="my-4">Section 3</p>
    <div class="mb-6">
      <label for="title_s3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
      <input type="text" id="title_s3" value="{{ $frontend->title_s3 }}" name="title_s3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>
    <div class="mb-6">
      <label for="description_s3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
      <input type="text" id="description_s3" value="{{ $frontend->description_s3 }}" name="description_s3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>
   
    <div class="mb-6">
        <label for="bullet1_s3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Point 1</label>
        <input type="text" id="bullet1_s3" value="{{ $frontend->bullet1_s3 }}" name="bullet1_s3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>
  
    <div class="mb-6">
        <label for="bullet2_s3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Point 2</label>
        <input type="text" id="bullet2_s3" value="{{ $frontend->bullet2_s3 }}" name="bullet2_s3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>

    <div class="mb-6">
        <label for="bullet3_s3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Point 3</label>
        <input type="text" id="bullet3_s3" value="{{ $frontend->bullet3_s3 }}" name="bullet3_s3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>

    <div class="mb-6">
        <label for="bullet4_s3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Point 4</label>
        <input type="text" id="bullet4_s3" value="{{ $frontend->bullet4_s3 }}" name="bullet4_s3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>

    <div class="mb-6">
        <label for="image_s3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
        <input type="file" id="image_s3" name="image_s3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>

    {{-- section 4  --}}
    <p class="my-4">Section 4</p>
    <div class="mb-6">
      <label for="title_s4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
      <input type="text" id="title_s4" value="{{ $frontend->title_s4 }}" name="title_s4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>
    <div class="mb-6">
      <label for="description_s4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
      <input type="text" id="description_s4" value="{{ $frontend->description_s4 }}" name="description_s4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>

    {{-- section 5  --}}
    <p class="my-4">Section 5</p>
    <div class="mb-6">
      <label for="title_s4" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
      <input type="text" id="title_s5" value="{{ $frontend->title_s5 }}" name="title_s5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>
    <div class="mb-6">
      <label for="description_s5" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
      <input type="text" id="description_s5" value="{{ $frontend->description_s5 }}" name="description_s5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>

    {{-- section of numbers  --}}
    <p class="my-4">Section 6 </p>
    <div class="mb-6">
      <label for="num1_s6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero 1</label>
      <input type="text" id="num1_s6" value="{{ $frontend->num1_s6 }}" name="num1_s6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>
    <div class="mb-6">
      <label for="title_num1_s6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">titre 1</label>
      <input type="text" id="title_num1_s6" value="{{ $frontend->title_num1_s6 }}" name="title_num1_s6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>

    <div class="mb-6">
        <label for="num2_s6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero 2</label>
        <input type="text" id="num2_s6" value="{{ $frontend->num2_s6 }}" name="num2_s6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>
      <div class="mb-6">
        <label for="title_num2_s6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">titre 2</label>
        <input type="text" id="title_num2_s6" value="{{ $frontend->title_num2_s6 }}" name="title_num2_s6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>

      <div class="mb-6">
        <label for="num3_s6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero 3</label>
        <input type="text" id="num3_s6" value="{{ $frontend->num3_s6 }}" name="num3_s6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>
      <div class="mb-6">
        <label for="title_num3_s6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">titre 3</label>
        <input type="text" id="title_num3_s6" value="{{ $frontend->title_num3_s6 }}" name="title_num3_s6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>

      <div class="mb-6">
        <label for="num4_s6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero 4</label>
        <input type="text" id="num4_s6" value="{{ $frontend->num4_s6 }}" name="num4_s6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>
      <div class="mb-6">
        <label for="title_num4_s6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">titre 4</label>
        <input type="text" id="title_num4_s6" value="{{ $frontend->title_num4_s6 }}" name="title_num4_s6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>

      {{-- footer section  --}}
    <p class="my-4">Footer Section </p>
    <div class="mb-6">
      <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">L'adresse</label>
      <input type="text" id="address" value="{{ $frontend->address }}" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>
    <div class="mb-6">
      <label for="description_footer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description de Footer</label>
      <input type="text" id="description_footer" value="{{ $frontend->description_footer }}" name="description_footer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>

    <div class="mb-6">
        <label for="footer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Footer</label>
        <input type="text" id="footer" value="{{ $frontend->footer }}" name="footer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
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
