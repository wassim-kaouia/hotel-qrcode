<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion Des Plans') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-1 md:col-span-1 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-2 lg:gab-4 p-8">
                     

    @if($errors->any())
    @foreach ($errors->all() as $error)
    <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
      <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium">Erreur de validation! </span> {{ $error }}
      </div>
    </div>    
    @endforeach
@endif
<form action="{{ route('store.plans') }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- section 1  --}}
    <div class="mb-6">

      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre de Plan</label>
      <input type="text" id="title" value="" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>


    <div class="mb-6">

        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix</label>
        <input type="text" id="price" value="" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
      </div>


    <div class="mb-6">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
        <textarea cols="3" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            
        </textarea>
    </div>
    
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer</button>
  </form>

  <div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Titre de Plan
                    </th>
                    
                    <th scope="col" class="px-6 py-3">
                        Prix
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Options
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $plan)
                <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $plan->title }}
                </th>
                <td class="px-6 py-4">
                   {{ $plan->price }}
                </td>
                
                <td class="px-6 py-4">
                    <a href="{{ route('edit.plan',['id' => $plan->id]) }}"
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                    <b>/</b>
                    <a href="{{ route('delete.plan',['id' => $plan->id]) }}"
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
        <div class="m-3">
            {{-- {!! $alentours->withQueryString()->links() !!}   --}}
        </div>
    </div>
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

<script src="{{ asset('ckeditor/build/ckeditor.js') }}">

</script>
<script>
    ClassicEditor
        .create( document.querySelector('#description') )
        .catch( error => {
            console.error( error );
        } );

</script>

