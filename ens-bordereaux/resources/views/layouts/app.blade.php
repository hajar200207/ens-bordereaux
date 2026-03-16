<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'ENS Rabat - Gestion des Bordereaux' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ens-bg">
    <div class="flex h-screen overflow-hidden">
        @include('components.sidebar')

        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
            @include('components.navbar')

            <main class="flex-1 overflow-y-auto p-4 md:p-6 lg:p-8">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
