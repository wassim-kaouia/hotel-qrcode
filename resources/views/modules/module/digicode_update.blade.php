<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mise à jour des Digicodes | ') }} <a style="color: red" href="{{ route('digicode.index') }}">Créer un nouveau</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <form action="{{ route('digicode.updates')}}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="digicode_titre"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                                <input type="text" id="digicode_titre" value="{{ $onedigicode->title }}" name="digicode_titre"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                                    placeholder="Porte principale Ex" required>    
                                
                            </div>

                            <div class="mb-6">
                                <label for="digicode_key"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code
                                                d'accès</label>
                                            <input type="text" id="digicode_key" placeholder="1449 Ex" value="{{ $onedigicode->access_code }}" name="digicode_key"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                                required>
                            </div>

                            
                            <input type="hidden" value="{{ $onedigicode->id }}" name="digicode_id">
                            <button type="submit"
                                class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mettre à jour
                                le digicode</button>
                            
                        </form>

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Titre
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Digicode Key
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Options
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($digicodes as $digicode)
                                    <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $digicode->title }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $digicode->access_code }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('digicode.update',['id' => $digicode->id]) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                        <b>/</b>
                                        <a href="{{ route('digicode.delete',['id' => $digicode->id]) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="m-3">
                                {!! $digicodes->withQueryString()->links() !!}   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</x-app-layout>

<div class="">
    @include('layout.dashboard_footer')
</div>
