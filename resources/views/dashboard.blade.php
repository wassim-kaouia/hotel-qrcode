<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="grid md:grid-cols-4 gap-4 ">
                <div class="lg:col-span-1 md:col-span-2 bg-white overflow-hidden shadow-lg sm:rounded-lg ">
                    <div class="grid lg:grid-cols-2 sm:grid-cols-1 md-cols-2 lg:gab-4 p-8 sm:px-6">
                        <div class="text-5xl">
                            <i class="fa fa-money text-red-600" aria-hidden="true"></i>
                        </div>
                        <div class="text-3xl">
                            2k.23 €<span class="text-sm"> Aujourd'hui</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1 md:col-span-2 bg-white overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="grid lg:grid-cols-2 sm:grid-cols-1 md-cols-2 lg:gab-4 p-8">
                        <div class="text-5xl">
                            <i class="fa fa-user text-green-600" aria-hidden="true"></i>
                        </div>
                        <div class="text-5xl">
                            453 </br> <span class="text-sm">Utilisateurs</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1 md:col-span-2 bg-white overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="grid lg:grid-cols-2 sm:grid-cols-1 md-cols-2 lg:gab-4 p-8">
                        <div class="text-5xl">
                            <i class="fa fa-picture-o text-yellow-400" aria-hidden="true"></i>
                        </div>
                        <div class="text-5xl">
                            43</br><span class="text-sm">Flyer Vendu</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1 md:col-span-2 bg-white overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="grid lg:grid-cols-2 sm:grid-cols-1 md-cols-2 lg:gab-4 p-8">
                        <div class="text-5xl">
                            <i class="fa fa-shopping-cart text-blue-600" aria-hidden="true"></i>
                        </div>
                        <div class="text-5xl">
                            26 </br><span class="text-sm">Commandes</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="pt-3 pb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
@include('layout.dashboard_footer')

<script>
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre',
                'octobre', 'novembre', 'décembre'
            ],
            datasets: [{
                label: "# Chiffre d'affaires",
                data: [12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
