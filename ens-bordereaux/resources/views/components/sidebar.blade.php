<aside class="w-72 bg-ens-blue text-white h-screen hidden lg:flex lg:flex-col shrink-0 shadow-2xl">
    <div class="px-6 py-6 border-b border-white/10">
        <div class="flex items-center gap-3">
            <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center font-bold text-lg shadow-inner">
                ENS
            </div>
            <div>
                <h2 class="font-bold text-lg leading-tight">ENS Rabat</h2>
                <p class="text-xs text-white/70">Workflow documentaire</p>
            </div>
        </div>
    </div>

    <nav class="p-4 space-y-2 flex-1 overflow-y-auto">
        <a href="{{ route('dashboard') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl transition {{ request()->routeIs('dashboard') ? 'bg-white/15 text-white shadow-sm' : 'text-white/90 hover:bg-white/10' }}">
            <span>📊</span>
            <span class="font-medium">Dashboard</span>
        </a>

        <a href="{{ route('documents.index') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl transition {{ request()->routeIs('documents.*') ? 'bg-white/15 text-white shadow-sm' : 'text-white/90 hover:bg-white/10' }}">
            <span>📁</span>
            <span class="font-medium">Documents</span>
        </a>

        @hasanyrole('admin|directeur|service_communication|service_informatique|service_scolarite|service_financier')
            <a href="{{ route('assignments.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl transition {{ request()->routeIs('assignments.*') ? 'bg-white/15 text-white shadow-sm' : 'text-white/90 hover:bg-white/10' }}">
                <span>📌</span>
                <span class="font-medium">Affectations</span>
            </a>

            <a href="{{ route('comments.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl transition {{ request()->routeIs('comments.*') ? 'bg-white/15 text-white shadow-sm' : 'text-white/90 hover:bg-white/10' }}">
                <span>💬</span>
                <span class="font-medium">Commentaires</span>
            </a>
        @endhasanyrole

        @hasanyrole('admin|directeur')
            <a href="{{ route('histories.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl transition {{ request()->routeIs('histories.*') ? 'bg-white/15 text-white shadow-sm' : 'text-white/90 hover:bg-white/10' }}">
                <span>🕒</span>
                <span class="font-medium">Historique</span>
            </a>
        @endhasanyrole

        <a href="{{ route('profile.edit') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl transition {{ request()->routeIs('profile.*') ? 'bg-white/15 text-white shadow-sm' : 'text-white/90 hover:bg-white/10' }}">
            <span>👤</span>
            <span class="font-medium">Mon profil</span>
        </a>

        @role('admin')
            <div class="pt-4 pb-2 px-4 text-xs uppercase tracking-wider text-white/50">
                Administration
            </div>

            <a href="{{ route('admin.users.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl transition {{ request()->routeIs('admin.users.*') ? 'bg-white/15 text-white shadow-sm' : 'text-white/90 hover:bg-white/10' }}">
                <span>👥</span>
                <span class="font-medium">Utilisateurs</span>
            </a>

            <a href="{{ route('admin.roles.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl transition {{ request()->routeIs('admin.roles.*') ? 'bg-white/15 text-white shadow-sm' : 'text-white/90 hover:bg-white/10' }}">
                <span>🛡️</span>
                <span class="font-medium">Rôles</span>
            </a>

            <a href="{{ route('admin.services.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl transition {{ request()->routeIs('admin.services.*') ? 'bg-white/15 text-white shadow-sm' : 'text-white/90 hover:bg-white/10' }}">
                <span>🏢</span>
                <span class="font-medium">Services</span>
            </a>
        @endrole
    </nav>

    @auth
        <div class="p-4 border-t border-white/10 space-y-3">
            <div class="rounded-2xl bg-white/10 p-4">
                <p class="text-sm font-semibold text-white">
                    {{ auth()->user()->full_name ?: auth()->user()->name }}
                </p>
                <p class="text-xs text-white/70 mt-1">
                    {{ auth()->user()->email }}
                </p>
                @if(auth()->user()->service)
                    <p class="text-xs text-white/60 mt-1">
                        Service : {{ auth()->user()->service->name }}
                    </p>
                @endif
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="w-full flex items-center justify-center gap-3 px-4 py-3 rounded-xl bg-white text-ens-blue font-semibold hover:bg-slate-100 transition shadow-sm">
                    <span>🚪</span>
                    <span>Déconnexion</span>
                </button>
            </form>
        </div>
    @endauth
</aside>
