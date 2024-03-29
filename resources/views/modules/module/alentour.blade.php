<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Les Alentours') }}  :  <a style="color:red;" href="{{ route('category.index') }}">Créer une categorie</a> | <a style="color:green;" href="{{ route('interest.index') }}">Créer un point d'interet</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <form action="{{ route('alentours.create')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-6">
                                <label for="alentour_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                                <input type="text" id="alentour_name" name="alentour_name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="Palais des congres VI">
                            </div>

                            <div class="mb-6">
                                <label for="alentour_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Point D'interet</label>
                                

                                <label for="interest" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selectionnr une option</label>
                                <select id="interest" name="interest" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Choisir</option>
                                    @foreach ($interests as $interest)
                                         <option value="{{ $interest->id }}">{{ $interest->title }}</option>
                                    @endforeach
                                 </select>

                            </div> 

                            <div class="mb-6">
                                <label for="category"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categories</label>
                                

                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selectionnr une category</label>
                                <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Choisir</option>
                                    @foreach ($categories as $category)
                                         <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                 </select>

                            </div> 

                            <div class="mb-6">
                                <label for="address"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse</label>
                                <input type="text" id="address" placeholder="l'adresse..." name="address"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    >
                            </div>

                            <div class="mb-6">
                                <label for="distance"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Distance</label>
                                <input type="text" id="distance" placeholder="Distance par rapport à vous" name="distance"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    >
                            </div>

                            <div class="mb-6">
                                <label for="distance"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lien</label>
                                <input type="text" id="distance" placeholder="Lien sur internet" name="link"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    >
                            </div>

                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer L'alentour</button>
                        </form>

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Nom du site
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Distance
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Lien 
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Pt D'interet
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Options
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alentours as $alentour)
                                    <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $alentour->site_name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $alentour->distance }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $alentour->link }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {!! !$alentour->interest ? "<b style='color:red;'>Pas de Pt d'interet</b>" : $alentour->interest->title !!}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('alentours.update',['id' => $alentour->id]) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                        <b>/</b>
                                        <a href="{{ route('alentours.delete',['id' => $alentour->id]) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="m-3">
                                {!! $alentours->withQueryString()->links() !!}   
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
