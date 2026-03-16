@extends('layouts.app')

@section('content')
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-800">Gestion des utilisateurs</h1>
            <p class="text-slate-500 mt-1">Création, modification et suivi des comptes utilisateurs.</p>
        </div>

        <a href="{{ route('admin.users.create') }}"
           class="px-5 py-3 rounded-xl bg-[#ef8748] text-white font-semibold hover:bg-[#df7b40] transition">
            + Nouvel utilisateur
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

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-x-auto">
        <table class="w-full min-w-[900px]">
            <thead class="bg-slate-50 text-slate-500 text-sm">
                <tr class="text-left">
                    <th class="px-5 py-4">Nom</th>
                    <th class="px-5 py-4">Email</th>
                    <th class="px-5 py-4">Rôle</th>
                    <th class="px-5 py-4">Service</th>
                    <th class="px-5 py-4">Statut</th>
                    <th class="px-5 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr class="border-t border-slate-100">
                        <td class="px-5 py-4 font-medium">{{ $user->full_name ?: $user->name }}</td>
                        <td class="px-5 py-4">{{ $user->email }}</td>
                        <td class="px-5 py-4">{{ $user->roles->pluck('name')->join(', ') ?: '-' }}</td>
                        <td class="px-5 py-4">{{ $user->service?->name ?? '-' }}</td>
                        <td class="px-5 py-4">
                            @if($user->is_active)
                                <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Actif</span>
                            @else
                                <span class="px-3 py-1 rounded-full bg-red-100 text-red-700 text-xs font-semibold">Inactif</span>
                            @endif
                        </td>
                        <td class="px-5 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('admin.users.edit', $user) }}"
                                   class="px-3 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-sm">
                                    Modifier
                                </a>

                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" onsubmit="return confirm('Supprimer cet utilisateur ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="px-3 py-2 rounded-lg bg-red-100 hover:bg-red-200 text-red-700 text-sm">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-5 py-6 text-center text-slate-500">
                            Aucun utilisateur trouvé.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $users->links() }}
    </div>
@endsection
