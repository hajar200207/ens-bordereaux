@extends('layouts.app')

@section('content')
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-800">Gestion des rôles</h1>
            <p class="text-slate-500 mt-1">Configuration des profils et permissions fonctionnelles.</p>
        </div>

        <a href="{{ route('admin.roles.create') }}"
           class="px-5 py-3 rounded-xl bg-[#ef8748] text-white font-semibold hover:bg-[#df7b40] transition">
            + Nouveau rôle
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 rounded-2xl bg-green-50 border border-green-200 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="mb-4 rounded-2xl bg-red-50 border border-red-200 px-4 py-3 text-red-700">
            {{ session('error') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
        @forelse($roles as $role)
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
                <h2 class="text-lg font-semibold text-[#1F4E79]">{{ ucfirst(str_replace('_', ' ', $role->name)) }}</h2>
                <p class="text-slate-500 text-sm mt-2">Rôle système configuré dans l’application.</p>

                <div class="mt-5 flex gap-2 flex-wrap">
                    <a href="{{ route('admin.roles.edit', $role) }}"
                       class="px-3 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-sm">
                        Modifier
                    </a>

                    <form action="{{ route('admin.roles.destroy', $role) }}" method="POST" onsubmit="return confirm('Supprimer ce rôle ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-3 py-2 rounded-lg bg-red-100 hover:bg-red-200 text-red-700 text-sm">
                            Supprimer
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-full bg-white rounded-2xl shadow-sm border border-slate-200 p-6 text-center text-slate-500">
                Aucun rôle trouvé.
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $roles->links() }}
    </div>
@endsection
