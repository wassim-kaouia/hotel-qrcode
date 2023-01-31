<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Factures') }}
        </h2>
    </x-slot>
    
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-1 gap-4">
                <div class="lg:col-span-1 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid lg:grid-cols-1 sm:grid-cols-1 md-cols-2 lg:gab-4 p-8">

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Nom du client
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Email
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Pays
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Type de bien
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
                                            Ranya
                                        </th>
                                        <td class="px-6 py-4">
                                            ranya@gmail.com
                                        </td>
                                        <td class="px-6 py-4">
                                            Tunisia
                                        </td>
                                        <td class="px-6 py-4">
                                            Villa de Luxe
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Voir
                                                la facture</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
