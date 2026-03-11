<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - ENS Rabat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-100 flex items-center justify-center p-4">
    <div class="w-full max-w-5xl grid lg:grid-cols-2 bg-white rounded-3xl overflow-hidden shadow-2xl border border-slate-200">
        <div class="hidden lg:flex flex-col justify-center bg-gradient-to-br from-[#1F4E79] to-[#163a5c] text-white p-10">
            <div class="w-16 h-16 rounded-2xl bg-white/15 flex items-center justify-center text-2xl font-bold mb-6">
                ENS
            </div>
            <h1 class="text-3xl font-bold leading-tight mb-4">
                Gestion des bordereaux
            </h1>
            <p class="text-white/80 leading-7">
                Plateforme de suivi des documents, affectations, commentaires, validations
                et historique de traitement pour les services de l’ENS Rabat.
            </p>

            <div class="mt-8 space-y-3 text-sm text-white/85">
                <div>• Workflow administratif clair</div>
                <div>• Validation par le directeur</div>
                <div>• Suivi des commentaires et versions</div>
                <div>• Tableau de bord par rôle</div>
            </div>
        </div>

        <div class="p-8 md:p-10">
            <div class="mb-8">
                <div class="w-14 h-14 rounded-2xl bg-[#ef8748] text-white flex items-center justify-center text-xl font-bold mb-4 lg:hidden">
                    ENS
                </div>
                <h2 class="text-2xl font-bold text-slate-800">Connexion</h2>
                <p class="text-slate-500 mt-2">Accédez à votre espace de gestion documentaire.</p>
            </div>

            <form class="space-y-5" method="POST" action="#">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                    <input
                        type="email"
                        name="email"
                        placeholder="exemple@ensrabat.ma"
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F4E79] focus:border-[#1F4E79]"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Mot de passe</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F4E79] focus:border-[#1F4E79]"
                    >
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="inline-flex items-center gap-2 text-slate-600">
                        <input type="checkbox" class="rounded border-slate-300">
                        <span>Se souvenir de moi</span>
                    </label>

                    <a href="#" class="text-[#1F4E79] font-medium hover:underline">
                        Mot de passe oublié ?
                    </a>
                </div>

                <button
                    type="submit"
                    class="w-full bg-[#ef8748] hover:bg-[#df7b40] text-white font-semibold py-3.5 rounded-xl transition"
                >
                    Se connecter
                </button>
            </form>
        </div>
    </div>
</body>
</html>
