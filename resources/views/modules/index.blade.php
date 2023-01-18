<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Modules') }}
        </h2>
    </x-slot>
    <style>
        .iphone_bg {
            width: 450px;
            height: 810px;
            margin: auto;
            background: url({{ asset('assets/images/iphone.png') }}) no-repeat center;
        }

        .mobile_wrap {
            width: 350px;
            height: 580px;
            padding: 100px 0 0 63px;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-4">
                <div class="col-span-2 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid grid-cols-4 gab-4 p-8">
                        <div class="bg-gray-100 shadow-md rounded-md w-32 h-32">
                            <div cl>
                                <i class="fa fa-wifi text-3xl flex justify-center" aria-hidden="true"></i>
                                <h2 class="flex justify-center">Wifi</h2>
                                <div class="flex justify-center">
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div
                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iphone_bg">
                    <div class="mobile_wrap">
                        <iframe id="frame" frameborder="no" border="0" scrolling="no" width="325px"
                            height="580px" src="{{ route('home.index') }}">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        console.log('ok');
    </script>
</x-app-layout>
