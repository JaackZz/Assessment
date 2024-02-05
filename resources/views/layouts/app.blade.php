<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100"
        style="background-image: url('/assets/sky3.jpg'); background-size: 100% 100%;">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Chart.js Initialization -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Bar Chart 1
            var ctxBar1 = document.getElementById('barChart1').getContext('2d');
            var barChart1 = new Chart(ctxBar1, {
                type: 'bar',
                data: {
                    labels: ['Stat 1', 'Stat 2', 'Stat 3'],
                    datasets: [{
                        label: 'Random Statistics 1',
                        data: [{{ rand(1500, 600) }}, {{ rand(50, 200) }}, {{ rand(1000, 5000) }}],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
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

            // Line Chart 1
            var ctxLine1 = document.getElementById('lineChart1').getContext('2d');
            var lineChart1 = new Chart(ctxLine1, {
                type: 'line',
                data: {
                    labels: ['Stat 1', 'Stat 2', 'Stat 3'],
                    datasets: [{
                        label: 'Random Statistics 2',
                        data: [{{ rand(1, 100) }}, {{ rand(550, 200) }}, {{ rand(1000, 5000) }}],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        fill: false
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

            // Line Chart 2
            var ctxPie1 = document.getElementById('pieChart1').getContext('2d');
            var pieChart1 = new Chart(ctxPie1, {
                type: 'line',
                data: {
                    labels: ['Stat 1', 'Stat 2', 'Stat 3'],
                    datasets: [{
                        label: 'Random Statistics 3',
                        data: [{{ rand(1000, 100) }}, {{ rand(1500, 1000) }},
                            {{ rand(1000, 1000) }}
                        ],
                        backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)'
                        ],
                        borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                }
            });

            // Bar Chart 2
            var ctxBar2 = document.getElementById('barChart2').getContext('2d');
            var barChart2 = new Chart(ctxBar2, {
                type: 'bar',
                data: {
                    labels: ['Stat 1', 'Stat 2', 'Stat 3'],
                    datasets: [{
                        label: 'Random Statistics 4',
                        data: [{{ rand(100, 100) }}, {{ rand(500, 200) }},
                            {{ rand(150, 5000) }}
                        ],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
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
        });
    </script>

</body>

</html>
