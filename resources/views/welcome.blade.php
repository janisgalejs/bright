<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Chart.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>
    <body>
        <div class="container">
            @if (Route::has('login'))
                <div class="row px-6 py-4">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="row">
                @include('components.home.users-away-today')
                @include('components.home.twitter')
            </div>

            <div class="row mt-5">
                @include('components.home.activities', ['activities' => $activities])
                @include('components.home.statistics')
            </div>

            <footer class="my-3">
                <hr>
                <p class="float-start text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <p class="float-end text-end">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </footer>

        </div>

        <script src="{{ asset('js/Chart.min.js') }}"></script>
        <script>
            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        'Finanšu prakses grupa 1',
                        'Finanšu prakses grupa 2',
                        'Finanšu prakses grupa 3',
                        'Finanšu prakses grupa 4',
                        'Finanšu prakses grupa 5',
                        'Finanšu prakses grupa 6',
                        'Finanšu prakses grupa 7',
                        'Finanšu prakses grupa 8',
                        'Kopā'],
                    datasets: [{
                        label: 'Apgrozījums',
                        data: [2, 3, 10, 7, 10, 6, 4, 7, 5],
                        backgroundColor: [
                            '#2196f3',
                            '#2196f3',
                            '#2196f3',
                            '#2196f3',
                            '#2196f3',
                            '#2196f3',
                            '#2196f3',
                            '#2196f3',
                            '#2196f3',
                        ]
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>

    </body>
</html>
