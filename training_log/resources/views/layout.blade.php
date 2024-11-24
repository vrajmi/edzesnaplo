<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edzésnapló</title>

    @vite('resources/css/app.css')
</head>

<body>
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <a href="{{route('welcome')}}"
                                class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Kezdőlap</a>
                            <a href="{{route('workout.index')}}"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Edzések
                                listája</a>
                            <a href="{{route('workout.create')}}"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Új
                                edzés rögzítése</a>
                            <a target="_blank" href="https://newbalance.hu/miert_fontos_a_sport_eletkortol_fuggetlenul"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Edzés
                                fontosságáról</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <a href="{{route('welcome')}}"
                    class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Kezdőlap</a>
                <a href="{{route('workout.index')}}"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Edzések
                    listája</a>
                <a href="{{route('workout.create')}}"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Új
                    edzés rögzítése</a>
                <a target="_blank" href="https://newbalance.hu/miert_fontos_a_sport_eletkortol_fuggetlenul"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Edzés
                    fontosságáról</a>
            </div>
        </div>
    </nav>
    <hr>
    <header class="bg-gray-800 text-white py-4">
        <div class="container text-center mx-auto px-4">
            <h1 class="text-3xl font-bold">Edzésnapló</h1>
        </div>
    </header>

    <main class="container text-center mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="fixed bottom-0 left-0 w-full bg-gray-800 text-white text-center py-4">
        <div class="container text-center mx-auto px-4">
            <p>2024 © Vodenicsár Rajmund</p>
        </div>
    </footer>

</body>

</html>