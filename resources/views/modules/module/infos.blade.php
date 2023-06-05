<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Info Module') }}
        </h2>
    </x-slot>
    {{-- start arrival info  --}}
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <span class="mb-4">Rappels</span>
                        <form action="{{ route('rappel.create')}}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="info_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" id="rappel_title" name="rappel_title"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Titre...">
                            </div>

                            <div class="mb-6">
                                <label for="info_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea type="text" id="rappel_info" placeholder="Message..." name="rappel_info"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    ></textarea>
                            </div>

                            <button type=""
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer</button>
                            
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
                                           Message
                                        </th>
                                       
                                        <th scope="col" class="px-6 py-3">
                                            Options
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rappels as $rappel)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $rappel->title }}
                                        </th> 
                                        <td class="px-6 py-4">
                                            {{ mb_strimwidth($rappel->rappel_info, 0, 40, "..."); }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('rappel.updating',['id' => $rappel->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                            <b>/</b>
                                            <a href="{{ route('rappel.delete',['id' => $rappel->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="m-3">
                                {{-- {!! $arrivalinfos->withQueryString()->links() !!}    --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>
    {{-- end arrival info  --}}
    {{-- start arrival info  --}}
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <span class="mb-4">Clés</span>
                        <form action="{{ route('key.create')}}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="info_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" id="key_title" name="key_title"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Titre...">
                            </div>

                            <div class="mb-6">
                                <label for="info_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea type="text" id="key_info" placeholder="Message..." name="key_info"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    ></textarea>
                            </div>

                            <button type=""
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer</button>
                            
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
                                           Message
                                        </th>
                                       
                                        <th scope="col" class="px-6 py-3">
                                            Options
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($keys as $key)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $key->title }}
                                        </th> 
                                        <td class="px-6 py-4">
                                            {{ mb_strimwidth($key->key_info, 0, 40, "..."); }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('key.updating',['id' => $key->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                            <b>/</b>
                                            <a href="{{ route('key.delete',['id' => $key->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="m-3">
                                {{-- {!! $arrivalinfos->withQueryString()->links() !!}    --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>
    {{-- end arrival info  --}}
    {{-- start arrival info  --}}
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <span class="mb-4">Réglement Interne</span>
                        <form action="{{ route('reglement.create')}}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="info_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" id="reglement_title" name="reglement_title"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Titre...">
                            </div>

                            <div class="mb-6">
                                <label for="info_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea type="text" id="reglement_message" placeholder="Message..." name="reglement_message"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    ></textarea>
                            </div>

                            <button type=""
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer</button>
                            
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
                                           Message
                                        </th>
                                       
                                        <th scope="col" class="px-6 py-3">
                                            Options
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reglements as $reglement)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $reglement->title }}
                                        </th> 
                                        <td class="px-6 py-4">
                                            {{ mb_strimwidth($reglement->reglement, 0, 40, "..."); }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('reglement.updating',['id' => $reglement->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                            <b>/</b>
                                            <a href="{{ route('reglement.delete',['id' => $reglement->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="m-3">
                                {{-- {!! $arrivalinfos->withQueryString()->links() !!}    --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>
    {{-- end arrival info  --}}

    {{-- start arrival info  --}}
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <span class="mb-4">Temps D'arrivée</span>
                        <form action="{{ route('arrivalinfo.create')}}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="info_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" id="arrivalinfo_title" name="arrivalinfo_title"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Titre...">
                            </div>

                            <div class="mb-6">
                                <label for="info_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea type="text" id="arrivalinfo_message" placeholder="Message..." name="arrivalinfo_message"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    ></textarea>
                            </div>

                            <button type=""
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer</button>
                            
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
                                           Message
                                        </th>
                                       
                                        <th scope="col" class="px-6 py-3">
                                            Options
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($arrivalinfos as $info)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $info->title }}
                                        </th> 
                                        <td class="px-6 py-4">
                                            {{ mb_strimwidth($info->arrival_message, 0, 40, "...") }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('arrivalinfo.updating',['id' => $info->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                            <b>/</b>
                                            <a href="{{ route('arrivalinfo.delete',['id' => $info->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="m-3">
                                {{-- {!! $arrivalinfos->withQueryString()->links() !!}    --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>
    {{-- end arrival info  --}}
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <form action="{{ route('infos.create')}}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="info_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" id="info_name" name="info_name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Titre de l'information" >
                            </div>

                            <div class="mb-6">
                                <label for="info_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea type="text" id="info_description" placeholder="Description de l'info" name="info_description"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    ></textarea>
                            </div>

                            <button type=""
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer L'info</button>
                            
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
                                           Description
                                        </th>
                                       
                                        <th scope="col" class="px-6 py-3">
                                            Options
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($infos as $info)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $info->title }}
                                        </th> 
                                        <td class="px-6 py-4">
                                            {{ mb_strimwidth($info->description, 0, 40, "..."); }}
                                        </td>
                                       
                                        <td class="px-6 py-4">
                                            <a href="{{ route('infos.update',['id' => $info->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                            <b>/</b>
                                            <a href="{{ route('infos.delete',['id' => $info->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                            <div class="m-3">
                                {!! $infos->withQueryString()->links() !!}   
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
