<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modules') }}
        </h2>
    </x-slot>
    <style>
        /*
 CSS for the main interaction
*/
        .tabset>input[type="radio"] {
            position: absolute;
            left: -200vw;
        }

        .tabset .tab-panel {
            display: none;
        }

        .tabset>input:first-child:checked~.tab-panels>.tab-panel:first-child,
        .tabset>input:nth-child(3):checked~.tab-panels>.tab-panel:nth-child(2),
        .tabset>input:nth-child(5):checked~.tab-panels>.tab-panel:nth-child(3),
        .tabset>input:nth-child(7):checked~.tab-panels>.tab-panel:nth-child(4),
        .tabset>input:nth-child(9):checked~.tab-panels>.tab-panel:nth-child(5),
        .tabset>input:nth-child(11):checked~.tab-panels>.tab-panel:nth-child(6) {
            display: block;
        }
        /*
 Styling
*/
        .tabset>label {
            position: relative;
            display: inline-block;
            padding: 15px 15px 25px;
            border: 1px solid transparent;
            border-bottom: 0;
            cursor: pointer;
            font-weight: 600;
        }

        .tabset>label::after {
            content: "";
            position: absolute;
            left: 15px;
            bottom: 10px;
            width: 22px;
            height: 4px;
            background: #8d8d8d;
        }

        .tabset>label:hover,
        .tabset>input:focus+label {
            color: #06c;
        }

        .tabset>label:hover::after,
        .tabset>input:focus+label::after,
        .tabset>input:checked+label::after {
            background: #06c;
        }

        .tabset>input:checked+label {
            border-color: #ccc;
            border-bottom: 1px solid #fff;
            margin-bottom: -1px;
        }

        .tab-panel {
            padding: 30px 0;
            border-top: 1px solid #ccc;
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        .tabset {
            max-width: 100%;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-1 lg:gab-4 p-8">
                        <div class="">
                            <div class="tabset">
                                <!-- Tab 1 -->
                                <input type="radio" name="tabset" id="tab1" aria-controls="wifi" checked>
                                <label for="tab1">wifi</label>
                                <!-- Tab 2 -->
                                <input type="radio" name="tabset" id="tab2" aria-controls="digicode">
                                <label for="tab2">Digicode</label>
                                <!-- Tab 3 -->
                                <input type="radio" name="tabset" id="tab3" aria-controls="livre">
                                <label for="tab3">Livre d'Or</label>
                                <!-- Tab 4 -->
                                <input type="radio" name="tabset" id="tab4" aria-controls="nums">
                                <label for="tab4">Numéros</label>
                                <!-- Tab 5 -->
                                <input type="radio" name="tabset" id="tab5" aria-controls="infos">
                                <label for="tab5">Infos</label>
                                <!-- Tab 6 -->
                                <input type="radio" name="tabset" id="tab6" aria-controls="alentour">
                                <label for="tab6">Alentours</label>

                                <div class="tab-panels">
                                    <section id="wifi" class="tab-panel">

                                        <form>
                                            <div class="mb-6">
                                                <label for="wifi_name"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom
                                                    de Wifi</label>
                                                <input type="text" id="wifi_name"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                                    placeholder="NOS-7652 Ex" required>
                                            </div>

                                            <div class="mb-6">
                                                <label for="countries"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type
                                                    de cryptage Wifi</label>
                                                <select id="type_cryptage_wifi"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option>WEP</option>
                                                    <option>WPA</option>
                                                    <option>WPA 2</option>
                                                </select>
                                            </div>

                                            <div class="mb-6">
                                                <label for="password_wifi"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot
                                                    de passe</label>
                                                <input type="text" id="password_wifi" placeholder="Wer342jO9 Ex"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                                    required>
                                            </div>

                                            <button type=""
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer
                                                le WIFI</button>
                                        </form>

                                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                                <thead
                                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                    <tr>
                                                        <th scope="col" class="px-6 py-3">
                                                            Nom de Wifi
                                                        </th>
                                                        <th scope="col" class="px-6 py-3">
                                                            Mot de Passe
                                                        </th>
                                                        <th scope="col" class="px-6 py-3">
                                                            Type de Cryptage
                                                        </th>
                                                        <th scope="col" class="px-6 py-3">
                                                            Options
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Apple MacBook Pro 17"
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            Sliver
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            Laptop
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <a href="#"
                                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                                            <b>/</b>
                                                            <a href="#"
                                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </section>
                                    <section id="digicode" class="tab-panel">
                                        <form>
                                            <div class="mb-6">
                                                <label for="digicode_titre"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                                <input type="text" id="digicode_titre"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                                    placeholder="Porte principale Ex" required>
                                            </div>

                                            <div class="mb-6">
                                                <label for="digicode_key"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code
                                                    d'accès</label>
                                                <input type="text" id="digicode_key" placeholder="1449 Ex"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                                    required>
                                            </div>

                                            <button type=""
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer
                                                le Digicode</button>
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
                                                    <tr
                                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Porte Principale
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            1449
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <a href="#"
                                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                                            <b>/</b>
                                                            <a href="#"
                                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </section>
                                    <section id="livre" class="tab-panel">
                                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                                <thead
                                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                    <tr>
                                                        <th scope="col" class="px-6 py-3">
                                                            Nom de visiteur
                                                        </th>
                                                        <th scope="col" class="px-6 py-3">
                                                            Pays
                                                        </th>
                                                        <th scope="col" class="px-6 py-3">
                                                            Date de visite
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
                                                    <tr
                                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Ranya
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            Tunisia
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            2021-08-08
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <p>Message de visiteur ...Message de visiteur ...Message de
                                                                visiteur ...Message de visiteur ...</p>
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <a href="#"
                                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mx-auto mt-10">
                                            <nav aria-label="Page navigation example">
                                                <ul class="inline-flex -space-x-px">
                                                    <li>
                                                        <a href="#"
                                                            class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Précédent</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Suivant</a>
                                                    </li>
                                                </ul>
                                            </nav>

                                        </div>
                                    </section>
                                    <section id="nums" class="tab-panel">
                                        <form>
                                            <div class="mb-6">
                                                <label for="numero_title"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                                <input type="text" id="numero_title"
                                                    placeholder="Numero d'urgence Ex."
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                                     required>
                                            </div>

                                            <div class="mb-6">
                                                <label for="numero"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero</label>
                                                <input type="text" id="numero" placeholder="+351933454121 Ex."
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                                    required>
                                            </div>

                                            <button type=""
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer
                                                le Numero</button>
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
                                                            Numero
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
                                                    <tr
                                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Numero de service 24h/24h
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            <b>+351933876121</b>
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <p>Pour parleravec le service clientel qui reste a votre
                                                                disposition 24h/24h</p>
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <a href="#"
                                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                                            <b>/</b>
                                                            <a href="#"
                                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <section id="infos" class="tab-panel">
                                        <form>
                                            <div class="mb-6">
                                                <label for="info_name"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                                <input type="text" id="info_name"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                                    placeholder="Titre de l'information" required>
                                            </div>

                                            <div class="mb-6">
                                                <label for="info_description"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                                <input type="text" id="info_description" placeholder="Description de l'info"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                                    required>
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
                                                    <tr
                                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Apple MacBook Pro 17"
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            Sliver
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <a href="#"
                                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                                            <b>/</b>
                                                            <a href="#"
                                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <section id="alentour" class="tab-panel">
                                        <form>
                                            <div class="mb-6">
                                                <label for="alentour_name"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                                                <input type="text" id="alentour_name"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                                    placeholder="Palais des congres VI" required>
                                            </div>

                                            <div class="mb-6">
                                                <label
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                    for="multiple_files">Uploader jusqu'a 4 Photos (1200px x
                                                    800px)</label>
                                                <input
                                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                    id="multiple_files" type="file" multiple>

                                                <div class="my-6 flex">
                                                    <div class="bg-gray-100 p-6 mx-4 relative rounded-lg">
                                                        <a class="absolute top-3 right-3 text-2xl text-red-500" href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        <img class="mx-2 h-auto w-32 rounded-lg"
                                                            src="https://customercare.igloosoftware.com/.api2/api/v1/communities/10068556/previews/thumbnails/4fc20722-5368-e911-80d5-b82a72db46f2?width=680&height=680&crop=False"
                                                            alt="image description">
                                                    </div>
                                                    <div class="bg-gray-100 p-6 mx-4 relative rounded-lg">
                                                        <a class="absolute top-3 right-3 text-2xl text-red-500" href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        <img class="mx-2 h-auto w-32 rounded-lg"
                                                            src="https://customercare.igloosoftware.com/.api2/api/v1/communities/10068556/previews/thumbnails/4fc20722-5368-e911-80d5-b82a72db46f2?width=680&height=680&crop=False"
                                                            alt="image description">
                                                    </div>
                                                    <div class="bg-gray-100 p-6 mx-4 relative rounded-lg">
                                                        <a class="absolute top-3 right-3 text-2xl text-red-500" href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        <img class="mx-2 h-auto w-32 rounded-lg"
                                                            src="https://customercare.igloosoftware.com/.api2/api/v1/communities/10068556/previews/thumbnails/4fc20722-5368-e911-80d5-b82a72db46f2?width=680&height=680&crop=False"
                                                            alt="image description">
                                                    </div>
                                                    <div class="bg-gray-100 p-6 mx-4 relative rounded-lg">
                                                        <a class="absolute top-3 right-3 text-2xl text-red-500" href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        <img class="mx-2 h-auto w-32 rounded-lg"
                                                            src="https://customercare.igloosoftware.com/.api2/api/v1/communities/10068556/previews/thumbnails/4fc20722-5368-e911-80d5-b82a72db46f2?width=680&height=680&crop=False"
                                                            alt="image description">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="mb-6">
                                                <label for="distance"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Distance</label>
                                                <input type="text" id="distance" placeholder="Distance par rapport à vous"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                                    required>
                                            </div>

                                            <div class="mb-6">
                                                <label for="distance"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lien</label>
                                                <input type="text" id="distance" placeholder="Lien sur internet"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                                    required>
                                            </div>

                                            <button type=""
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
                                                            Options
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr
                                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Apple MacBook Pro 17"
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            Sliver
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            Laptop
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <a href="#"
                                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                                            <b>/</b>
                                                            <a href="#"
                                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Supprimer</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                </div>

                            </div>



                        </div>


                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    
        <script defer>
            // document.addEventListener("DOMContentLoaded", () => {

            //     console.log("DOM Content Loaded !");

            //     window.onload = function() {
            //         let myframe = document.getElementById('frame');
            //         let doc = myframe.contentDocument;

            //     }
            // });
        </script>


</x-app-layout>

<div class="">
    @include('layout.dashboard_footer')
</div>
