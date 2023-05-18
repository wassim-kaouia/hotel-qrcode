<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des Icons') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <form action="{{ route('icons.updating') }}" method="POST" enctype="multipart/form-data" id="modules-form">
            @csrf
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-1 gap-4">
                    <div class="lg:col-span-2 md:col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="grid lg:grid-cols-1 p-4">
                            <div class="px-4 mb-2">
                                <label for="default-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du Module Wifi</label>
                                <input type="text" id="title_input" name="title_wifi"
                                    value="{{ $setting->wifi_text }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        
                            <div class="px-4 mb-2">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Icon Wifi</label>
                                <input name="icon_wifi"
                                    class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                    PNG,
                                    JPG
                                    (MAX. 145x145px)</p>
                                <div> 
                                    <img src="{{ url('imagesApp/images/icons/'.$setting->wifi_path) }}" alt="wifi icon">
                                </div>    
                            </div>

                            <div class="px-4 mb-2">
                                <label for="default-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du Module Digicode</label>
                                <input type="text" id="title_input" name="title_digicode"
                                    value="{{ $setting->digicode_text }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        
                            <div class="px-4 mb-2">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Icon Digicode</label>
                                <input name="icon_digicode"
                                    class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                    PNG,
                                    JPG
                                    (MAX. 145x145px).</p>
                                <div>
                                    <img src="{{ url('imagesApp/images/icons/'.$setting->digicode_path) }}" alt="digicode">
                                </div>    
                            </div>



                            <div class="px-4 mb-2">
                                <label for="default-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du Module Livre D'Or</label>
                                <input type="text" id="title_input" name="title_livre"
                                    value="{{ $setting->livre_text }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        
                            <div class="px-4 mb-2">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Icon Livre D'Or</label>
                                <input name="icon_livre"
                                    class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                    PNG,
                                    JPG
                                    (MAX. 145x145px).</p>
                                <div>
                                    <img src="{{ url('imagesApp/images/icons/'.$setting->livre_path) }}" alt="livre d'or">
                                </div>    
                            </div>

                            <div class="px-4 mb-2">
                                <label for="default-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du Module Infos</label>
                                <input type="text" id="title_input" name="title_info"
                                    value="{{ $setting->info_text }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        
                            <div class="px-4 mb-2">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Icon Info</label>
                                <input name="icon_info"
                                    class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                    PNG,
                                    JPG
                                    (MAX. 145x145px).</p>
                                <div>
                                    <img src="{{ url('imagesApp/images/icons/'.$setting->info_path) }}" alt="infos pratiques">
                                </div>    
                            </div>

                            <div class="px-4 mb-2">
                                <label for="default-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du Module Alenours</label>
                                <input type="text" id="title_input" name="title_arround"
                                    value="{{ $setting->arround_text }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        
                            <div class="px-4 mb-2">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Icon Alentours</label>
                                <input name="icon_arround"
                                    class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                    PNG,
                                    JPG
                                    (MAX. 145x145px).</p>
                                <div>
                                    <img src="{{ url('imagesApp/images/icons/'.$setting->arround_path) }}" alt="alentours">
                                </div>    
                            </div>

                            <div class="px-4 mb-2">
                                <label for="default-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du Module Numero utiles</label>
                                <input type="text" id="title_input" name="title_numero"
                                    value="{{ $setting->numero_text }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        
                            <div class="px-4 mb-2">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Icon Numero utiles</label>
                                <input name="icon_numero"
                                    class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                    PNG,
                                    JPG
                                    (MAX. 145x145px).</p>
                                <div>
                                    <img src="{{ url('imagesApp/images/icons/'.$setting->numero_path) }}" alt="Numero utiles">
                                </div>    
                            </div>


    
                            <div class="px-4 mb-2">
                                <div class="flex items-start mb-6">
                                    <div class="flex items-center h-5">
                                    </div>
                                </div>
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modifier</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    

</x-app-layout>

<div class="">
    @include('layout.dashboard_footer')
</div>
