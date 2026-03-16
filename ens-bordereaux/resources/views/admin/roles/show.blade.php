@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-bold text-slate-800">Détail du rôle</h1>
                <p class="text-slate-500 mt-1">Consultation des informations du rôle sélectionné.</p>
            </div>

            <div class="flex gap-3">
                <a href="{{ route('admin.roles.edit', $role) }}"
                   class="px-5 py-3 rounded-xl bg-[#ef8748] text-white font-semibold hover:bg-[#df7b40] transition">
                    Modifier
                </a>

                <a href="{{ route('admin.roles.index') }}"
                   class="px-5 py-3 rounded-xl bg-slate-100 text-slate-700 font-semibold hover:bg-slate-200 transition">
                    Retour
                </a>
            </div>
        </div>

        @if(session('error'))
            <div class="mb-4 rounded-2xl bg-red-50 border border-red-200 px-4 py-3 text-red-700">
                {{ session('error') }}
            </div>
        @endif

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
            <div class="xl:col-span-1">
                <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-16 h-16 rounded-2xl bg-[#1F4E79] text-white flex items-center justify-center text-xl font-bold shadow-md">
                            {{ strtoupper(substr($role->name, 0, 1)) }}
                        </div>

                        <div>
                            <h2 class="text-lg font-bold text-slate-800">
                                {{ ucfirst(str_replace('_', ' ', $role->name)) }}
                            </h2>
                            <p class="text-sm text-slate-500">Rôle système</p>
                        </div>
                    </div>

                    <div class="space-y-4 text-sm">
                        <div>
                            <p class="text-slate-400">Nom technique</p>
                            <p class="font-semibold text-slate-700">{{ $role->name }}</p>
                        </div>

                        <div>
                            <p class="text-slate-400">Guard</p>
                            <p class="font-semibold text-slate-700">{{ $role->guard_name }}</p>
                        </div>

                        <div>
                            <p class="text-slate-400">Nombre d'utilisateurs</p>
                            <p class="font-semibold text-slate-700">{{ $role->users()->count() }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-2">
                <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6">
                    <h2 class="text-xl font-bold text-slate-800 mb-5">Informations générales</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="rounded-2xl bg-slate-50 p-4">
                            <p class="text-sm text-slate-400">Nom d'affichage</p>
                            <p class="font-semibold text-slate-700 mt-1">
                                {{ ucfirst(str_replace('_', ' ', $role->name)) }}
                            </p>
                        </div>

                        <div class="rounded-2xl bg-slate-50 p-4">
                            <p class="text-sm text-slate-400">Nom base de données</p>
                            <p class="font-semibold text-slate-700 mt-1">{{ $role->name }}</p>
                        </div>

                        <div class="rounded-2xl bg-slate-50 p-4">
                            <p class="text-sm text-slate-400">Guard</p>
                            <p class="font-semibold text-slate-700 mt-1">{{ $role->guard_name }}</p>
                        </div>

                        <div class="rounded-2xl bg-slate-50 p-4">
                            <p class="text-sm text-slate-400">Utilisateurs liés</p>
                            <p class="font-semibold text-slate-700 mt-1">{{ $role->users()->count() }}</p>
                        </div>

                        <div class="rounded-2xl bg-slate-50 p-4">
                            <p class="text-sm text-slate-400">Date de création</p>
                            <p class="font-semibold text-slate-700 mt-1">
                                {{ $role->created_at?->format('d/m/Y H:i') ?? '-' }}
                            </p>
                        </div>

                        <div class="rounded-2xl bg-slate-50 p-4">
                            <p class="text-sm text-slate-400">Dernière mise à jour</p>
                            <p class="font-semibold text-slate-700 mt-1">
                                {{ $role->updated_at?->format('d/m/Y H:i') ?? '-' }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end gap-3">
                        @if($role->name !== 'admin')
                            <form action="{{ route('admin.roles.destroy', $role) }}" method="POST" onsubmit="return confirm('Supprimer ce rôle ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="px-5 py-3 rounded-xl bg-red-100 text-red-700 font-semibold hover:bg-red-200 transition">
                                    Supprimer
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
