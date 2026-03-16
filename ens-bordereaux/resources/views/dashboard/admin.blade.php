@extends('layouts.app')

@section('content')
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
        <div>
            <h1 class="ens-section-title">Dashboard Admin</h1>
            <p class="ens-subtitle">Vue globale du circuit de gestion des bordereaux.</p>
        </div>

        <div class="flex flex-wrap gap-3">
            <a href="{{ route('documents.index') }}" class="ens-btn-primary">📁 Voir les documents</a>
            <a href="{{ route('admin.users.index') }}" class="ens-btn-secondary">👥 Gérer les utilisateurs</a>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-8">
        <x-card title="Utilisateurs" :value="$totalUsers" subtitle="Comptes créés" color="blue" icon="👤" />
        <x-card title="Documents" :value="$totalDocuments" subtitle="Total documents" color="yellow" icon="📁" />
        <x-card title="Services" :value="$totalServices" subtitle="Services configurés" color="green" icon="🏢" />
        <x-card title="Rôles" :value="$totalRoles" subtitle="Rôles système" color="red" icon="🛡️" />
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
        <div class="xl:col-span-2 ens-card overflow-hidden">
            <div class="p-5 border-b border-slate-200 flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold">Utilisateurs actuellement en ligne</h2>
                    <p class="text-sm text-ens-muted">
                        Activité détectée sur les 10 dernières minutes
                    </p>
                </div>
                <span class="inline-flex items-center px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                    {{ $onlineUsersCount }} en ligne
                </span>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full ens-table min-w-[900px]">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Service</th>
                            <th>Dernière activité</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($onlineUsers as $onlineUser)
                            <tr>
                                <td class="font-semibold">{{ $onlineUser->full_name ?: $onlineUser->name }}</td>
                                <td>{{ $onlineUser->email }}</td>
                                <td>{{ $onlineUser->roles->pluck('name')->join(', ') ?: '-' }}</td>
                                <td>{{ $onlineUser->service?->name ?? '-' }}</td>
                                <td>
                                    {{ $onlineUser->online_last_activity?->format('d/m/Y H:i:s') ?? '-' }}
                                </td>
                                <td class="text-right">
                                    <a href="{{ route('admin.users.show', $onlineUser) }}"
                                       class="text-ens-blue font-semibold hover:underline">
                                        Voir
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-6 text-slate-500">
                                    Aucun utilisateur en ligne actuellement.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="ens-card p-5">
            <div class="mb-5">
                <h2 class="text-lg font-semibold">Résumé système</h2>
                <p class="text-sm text-ens-muted">Indicateurs rapides</p>
            </div>

            <div class="space-y-4">
                <div class="rounded-2xl bg-slate-50 p-4 border border-slate-200">
                    <p class="text-sm text-slate-500">Total utilisateurs</p>
                    <p class="text-2xl font-bold text-slate-800 mt-1">{{ $totalUsers }}</p>
                </div>

                <div class="rounded-2xl bg-slate-50 p-4 border border-slate-200">
                    <p class="text-sm text-slate-500">Total services</p>
                    <p class="text-2xl font-bold text-slate-800 mt-1">{{ $totalServices }}</p>
                </div>

                <div class="rounded-2xl bg-slate-50 p-4 border border-slate-200">
                    <p class="text-sm text-slate-500">Total rôles</p>
                    <p class="text-2xl font-bold text-slate-800 mt-1">{{ $totalRoles }}</p>
                </div>

                <div class="rounded-2xl bg-green-50 p-4 border border-green-200">
                    <p class="text-sm text-green-700">Utilisateurs en ligne</p>
                    <p class="text-2xl font-bold text-green-800 mt-1">{{ $onlineUsersCount }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
