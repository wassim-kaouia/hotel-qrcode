<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mise à jour des infos | ') }} <a style="color: red" href="{{ route('infos.index') }}">Créer un nouveau</a>
        </h2>
    </x-slot>

    @if (Route::currentRouteName() == 'rappel.updating')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <form action="{{ route('rappel.update')}}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="info_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" id="rappel_title" name="rappel_title" value="{{ $rappel->title }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Titre de l'information" >
                            </div>

                            <div class="mb-6">
                                <label for="info_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <input type="text" id="rappel_info" placeholder="Description de l'info" name="rappel_info" value="{{ $rappel->rappel_info }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    >
                            </div>

                           
                            <input type="hidden" value="{{ $rappel->id }}" name="rappel_id">
                            <button type="submit"
                                class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mettre à jour
                                l'Info</button>
                            
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
                                {{-- {!! $keys->withQueryString()->links() !!}    --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>
    @endif

    @if (Route::currentRouteName() == 'key.updating')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <form action="{{ route('key.update')}}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="info_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" id="key_title" name="key_title" value="{{ $key->title }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Titre de l'information" >
                            </div>

                            <div class="mb-6">
                                <label for="info_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <input type="text" id="key_info" placeholder="Description de l'info" name="key_info" value="{{ $key->key_info }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    >
                            </div>

                           
                            <input type="hidden" value="{{ $key->id }}" name="key_id">
                            <button type="submit"
                                class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mettre à jour
                                l'Info</button>
                            
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
                                {{-- {!! $keys->withQueryString()->links() !!}    --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>
    @endif

    @if (Route::currentRouteName() == 'reglement.updating')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <form action="{{ route('reglement.update')}}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="info_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" id="reglement_title" name="reglement_title" value="{{ $reglement->title }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Titre de l'information" >
                            </div>

                            <div class="mb-6">
                                <label for="info_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <input type="text" id="reglement_message" placeholder="Description de l'info" name="reglement_message" value="{{ $reglement->reglement }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    >
                            </div>

                           
                            <input type="hidden" value="{{ $reglement->id }}" name="reglement_id">
                            <button type="submit"
                                class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mettre à jour
                                l'Info</button>
                            
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
                                {!! $infos->withQueryString()->links() !!}   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>
    @endif

    @if (Route::currentRouteName() == 'arrivalinfo.updating')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <form action="{{ route('arrivalinfo.update')}}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="info_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" id="arrivalinfo_title" name="arrivalinfo_title" value="{{ $arrivalinfo->title }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Titre de l'information" >
                            </div>

                            <div class="mb-6">
                                <label for="info_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <input type="text" id="arrivalinfo_message" placeholder="Description de l'info" name="arrivalinfo_message" value="{{ $arrivalinfo->arrival_message }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    >
                            </div>

                           
                            <input type="hidden" value="{{ $arrivalinfo->id }}" name="arrivalinfo_id">
                            <button type="submit"
                                class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mettre à jour
                                l'Info</button>
                            
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
                                    @foreach ($arrivalinfos as $info)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $info->title }}
                                        </th> 
                                        <td class="px-6 py-4">
                                            {{ mb_strimwidth($info->arrival_message, 0, 40, "..."); }}
                                        </td>
                                       
                                        <td class="px-6 py-4">
                                            <a href="{{ route('arrivalinfo.updatingc',['id' => $info->id]) }}"
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
                                {!! $arrivalinfos->withQueryString()->links() !!}   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>
    @endif

    @if (Route::currentRouteName() == 'plant.updating')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <form action="{{ route('plant.update')}}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="plant_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" id="plant_title" name="plant_title" value="{{ $plant->title }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Titre de l'information" >
                            </div>

                            <div class="mb-6">
                                <label for="info_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <input type="text" id="plant_info" placeholder="Description de l'info" name="plant_info" value="{{ $plant->plant_info }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    >
                            </div>

                           
                            <input type="hidden" value="{{ $plant->id }}" name="plant_id">
                            <button type="submit"
                                class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mettre à jour</button>
                            
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
                                    @foreach ($plants as $plant)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $plant->title }}
                                        </th> 
                                        <td class="px-6 py-4">
                                            {{ mb_strimwidth($plant->plant_info, 0, 40, "..."); }}
                                        </td>
                                       
                                        <td class="px-6 py-4">
                                            <a href="{{ route('plant.updating',['id' => $plant->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                            <b>/</b>
                                            <a href="{{ route('plant.delete',['id' => $plant->id]) }}"
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
    @endif

    @if (Route::currentRouteName() == 'parking.updating')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <form action="{{ route('parking.update')}}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="parking_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" id="parking_title" name="parking_title" value="{{ $parking->title }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Titre de l'information" >
                            </div>

                            <div class="mb-6">
                                <label for="info_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <input type="text" id="parking_info" placeholder="Description de l'info" name="parking_info" value="{{ $parking->parking_info }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    >
                            </div>

                           
                            <input type="hidden" value="{{ $parking->id }}" name="parking_id">
                            <button type="submit"
                                class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mettre à jour</button>
                            
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
                                    @foreach ($parkings as $parking)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $parking->title }}
                                        </th> 
                                        <td class="px-6 py-4">
                                            {{ mb_strimwidth($parking->parking_info, 0, 40, "..."); }}
                                        </td>
                                       
                                        <td class="px-6 py-4">
                                            <a href="{{ route('parking.updating',['id' => $parking->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                            <b>/</b>
                                            <a href="{{ route('parking.delete',['id' => $parking->id]) }}"
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
    @endif

    @if (Route::currentRouteName() == 'animal.updating')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <form action="{{ route('animal.update')}}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="plant_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" id="animal_title" name="animal_title" value="{{ $animal->title }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Titre de l'information" >
                            </div>

                            <div class="mb-6">
                                <label for="info_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <input type="text" id="animal_info" placeholder="Description de l'info" name="animal_info" value="{{ $animal->animal_info }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    >
                            </div>

                           
                            <input type="hidden" value="{{ $animal->id }}" name="animal_id">
                            <button type="submit"
                                class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mettre à jour</button>
                            
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
                                    @foreach ($animals as $animal)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $animal->title }}
                                        </th> 
                                        <td class="px-6 py-4">
                                            {{ mb_strimwidth($animal->animal_info, 0, 40, "..."); }}
                                        </td>
                                       
                                        <td class="px-6 py-4">
                                            <a href="{{ route('animal.updating',['id' => $animal->id]) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                            <b>/</b>
                                            <a href="{{ route('animal.delete',['id' => $animal->id]) }}"
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
    @endif


    @if (Route::currentRouteName() == 'infos.update')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <form action="{{ route('infos.updates')}}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="info_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" id="info_name" name="info_name" value="{{ $oneinfos->title }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Titre de l'information" >
                            </div>

                            <div class="mb-6">
                                <label for="info_description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <input type="text" id="info_description" placeholder="Description de l'info" name="info_description" value="{{ $oneinfos->description }}"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    >
                            </div>

                           
                            <input type="hidden" value="{{ $oneinfos->id }}" name="infos_id">
                            <button type="submit"
                                class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mettre à jour
                                l'Info</button>
                            
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
    @endif
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</x-app-layout>

<div class="">
    @include('layout.dashboard_footer')
</div>
