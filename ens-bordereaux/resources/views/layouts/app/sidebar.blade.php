<aside class="w-72 bg-white border-r border-slate-200 hidden lg:flex lg:flex-col min-h-screen">
    <div class="p-5 border-b border-slate-100">
        <div class="text-sm font-semibold text-slate-500 uppercase tracking-wide">Navigation</div>
    </div>

    <nav class="p-4 space-y-2 flex-1 overflow-y-auto">
        <a href="{{ route('dashboard') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-700 hover:bg-slate-100 hover:text-[#1F4E79] transition">
            <span>📊</span>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('documents.index') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-700 hover:bg-slate-100 hover:text-[#1F4E79] transition">
            <span>📁</span>
            <span>Documents</span>
        </a>

        @hasanyrole('admin|directeur|service_communication|service_informatique|service_scolarite|service_financier')
            <a href="{{ route('assignments.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-700 hover:bg-slate-100 hover:text-[#1F4E79] transition">
                <span>📌</span>
                <span>Affectations</span>
            </a>

            <a href="{{ route('comments.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-700 hover:bg-slate-100 hover:text-[#1F4E79] transition">
                <span>💬</span>
                <span>Commentaires</span>
            </a>
        @endhasanyrole

        @hasanyrole('admin|directeur')
            <a href="{{ route('histories.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-700 hover:bg-slate-100 hover:text-[#1F4E79] transition">
                <span>🕒</span>
                <span>Historique</span>
            </a>
        @endhasanyrole

        <a href="{{ route('profile.edit') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-700 hover:bg-slate-100 hover:text-[#1F4E79] transition">
            <span>👤</span>
            <span>Mon profil</span>
        </a>

        @role('admin')
            <div class="pt-3 pb-1 px-4 text-xs font-semibold uppercase tracking-wide text-slate-400">
                Administration
            </div>

            <a href="{{ route('admin.users.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-700 hover:bg-slate-100 hover:text-[#1F4E79] transition">
                <span>👥</span>
                <span>Utilisateurs</span>
            </a>

            <a href="{{ route('admin.roles.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-700 hover:bg-slate-100 hover:text-[#1F4E79] transition">
                <span>🛡️</span>
                <span>Rôles</span>
            </a>

            <a href="{{ route('admin.services.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-700 hover:bg-slate-100 hover:text-[#1F4E79] transition">
                <span>🏢</span>
                <span>Services</span>
            </a>
        @endrole
    </nav>

    @auth
        <div class="p-4 border-t border-slate-100 bg-white">
            <div class="mb-3 text-sm text-slate-500">
                Connecté :
                <span class="font-semibold text-slate-700">
                    {{ auth()->user()->full_name ?: auth()->user()->name }}
                </span>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="w-full flex items-center justify-center gap-3 px-4 py-3 rounded-xl bg-red-50 text-red-600 font-semibold hover:bg-red-100 transition">
                    <span>🚪</span>
                    <span>Déconnexion</span>
                </button>
            </form>
        </div>
    @endauth
</aside>
