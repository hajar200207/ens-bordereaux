@extends('layouts.app')

@section('content')
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-800">Gestion des services</h1>
            <p class="text-slate-500 mt-1">Organisation des entités administratives de l’établissement.</p>
        </div>

        <a href="{{ route('admin.services.create') }}"
           class="px-5 py-3 rounded-xl bg-[#ef8748] text-white font-semibold hover:bg-[#df7b40] transition">
            + Nouveau service
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
        <table class="w-full min-w-[850px]">
            <thead class="bg-slate-50 text-slate-500 text-sm">
                <tr class="text-left">
                    <th class="px-5 py-4">Code</th>
                    <th class="px-5 py-4">Nom du service</th>
                    <th class="px-5 py-4">Description</th>
                    <th class="px-5 py-4">Statut</th>
                    <th class="px-5 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $service)
                    <tr class="border-t border-slate-100">
                        <td class="px-5 py-4 font-medium">{{ $service->code }}</td>
                        <td class="px-5 py-4">{{ $service->name }}</td>
                        <td class="px-5 py-4 text-slate-600">{{ $service->description ?? '-' }}</td>
                        <td class="px-5 py-4">
                            @if($service->is_active)
                                <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Actif</span>
                            @else
                                <span class="px-3 py-1 rounded-full bg-red-100 text-red-700 text-xs font-semibold">Inactif</span>
                            @endif
                        </td>
                        <td class="px-5 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('admin.services.edit', $service) }}"
                                   class="px-3 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-sm">
                                    Modifier
                                </a>

                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" onsubmit="return confirm('Supprimer ce service ?')">
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
                        <td colspan="5" class="px-5 py-6 text-center text-slate-500">
                            Aucun service trouvé.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $services->links() }}
    </div>
@endsection
