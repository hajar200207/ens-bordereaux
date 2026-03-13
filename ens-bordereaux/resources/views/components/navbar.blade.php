<nav class="bg-white border-b border-slate-200 px-4 md:px-6 py-4">
    <div class="flex items-center justify-between gap-4">
        <div>
            <h1 class="text-lg md:text-xl font-bold text-ens-blue">ENS Rabat</h1>
            <p class="text-xs md:text-sm text-ens-muted">Système de gestion des bordereaux et correspondances</p>
        </div>

        <div class="hidden md:flex items-center gap-3 w-full max-w-xl">
            <input
                type="text"
                placeholder="Rechercher un document, une référence, un service..."
                class="ens-input"
            >
        </div>

        <div class="flex items-center gap-3">
            <button class="relative w-11 h-11 rounded-xl bg-slate-100 hover:bg-slate-200 transition">
                🔔
                <span class="absolute -top-1 -right-1 w-5 h-5 rounded-full bg-ens-red text-white text-[10px] flex items-center justify-center">3</span>
            </button>

            <div class="flex items-center gap-3 bg-slate-100 rounded-2xl px-3 py-2">
                <div class="w-10 h-10 rounded-full bg-ens-orange text-white flex items-center justify-center font-bold">
                    H
                </div>
                <div class="hidden md:block">
                    <div class="text-sm font-semibold">Hajar</div>
                    <div class="text-xs text-ens-muted">Administrateur</div>
                </div>
            </div>
        </div>
    </div>
</nav>
