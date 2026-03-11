<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'ENS Rabat - Gestion des Bordereaux' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-ens-bg">
    <div class="min-h-screen flex">
        @include('components.sidebar')

        <div class="flex-1 flex flex-col min-w-0">
            @include('components.navbar')

            <main class="p-4 md:p-6 lg:p-8">
                @yield('content')
            </main>
        </div>
    </div>
    <div id="cursor-dot" class="pointer-events-none fixed top-0 left-0 w-4 h-4 rounded-full bg-[#ef8748] opacity-70 blur-[1px] z-[9999] hidden md:block"></div>
</body>
</html>
