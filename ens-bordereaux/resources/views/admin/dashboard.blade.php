@extends('layouts.app')

@section('content')
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
        <div>
            <h1 class="ens-section-title">Dashboard Admin</h1>
            <p class="ens-subtitle">Vue globale du circuit de gestion des bordereaux.</p>
        </div>

        <div class="flex flex-wrap gap-3">
            <a href="/documents/create" class="ens-btn-primary">+ Nouveau document</a>
            <button class="ens-btn-secondary">Exporter</button>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-8">
        <x-card title="Utilisateurs" :value="$totalUsers" subtitle="Comptes actifs" color="blue" icon="👤" />
        <x-card title="Documents" :value="$totalDocuments" subtitle="Total documents" color="yellow" icon="📁" />
        <x-card title="Services" :value="$totalServices" subtitle="Services configurés" color="green" icon="🏢" />
        <x-card title="Rôles" :value="$totalRoles" subtitle="Rôles système" color="red" icon="🛡️" />
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
        <div class="xl:col-span-2 ens-card overflow-hidden">
            <div class="p-5 border-b border-slate-200 flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold">Documents récents</h2>
                    <p class="text-sm text-ens-muted">Dernières activités documentaires</p>
                </div>
                <a href="/documents" class="text-sm font-semibold text-ens-blue hover:underline">Voir tout</a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full ens-table min-w-[850px]">
                    <thead>
                        <tr>
                            <th>Référence</th>
                            <th>Titre</th>
                            <th>Service</th>
                            <th>Statut</th>
                            <th>Date</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-semibold">BRD-2026-001</td>
                            <td>Rapport conférence scientifique</td>
                            <td>Communication</td>
                            <td><x-badge-status status="returned_for_revision" /></td>
                            <td>09/03/2026</td>
                            <td class="text-right">
                                <a href="/documents/1" class="text-ens-blue font-semibold hover:underline">Voir</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-semibold">BRD-2026-002</td>
                            <td>Publication site web ENS</td>
                            <td>Informatique</td>
                            <td><x-badge-status status="in_progress" /></td>
                            <td>08/03/2026</td>
                            <td class="text-right">
                                <a href="/documents/1" class="text-ens-blue font-semibold hover:underline">Voir</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-semibold">BRD-2026-003</td>
                            <td>Note administrative</td>
                            <td>Direction</td>
                            <td><x-badge-status status="validated" /></td>
                            <td>07/03/2026</td>
                            <td class="text-right">
                                <a href="/documents/1" class="text-ens-blue font-semibold hover:underline">Voir</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="ens-card p-5">
            <div class="mb-5">
                <h2 class="text-lg font-semibold">Activité récente</h2>
                <p class="text-sm text-ens-muted">Timeline des dernières actions</p>
            </div>

            <div class="space-y-5">
                <div class="flex gap-3">
                    <div class="w-3 h-3 rounded-full bg-ens-orange mt-2"></div>
                    <div>
                        <p class="font-medium">Document assigné à Communication</p>
                        <p class="text-sm text-ens-muted">BRD-2026-001 — il y a 20 min</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="w-3 h-3 rounded-full bg-ens-green mt-2"></div>
                    <div>
                        <p class="font-medium">Validation par le directeur</p>
                        <p class="text-sm text-ens-muted">BRD-2026-003 — il y a 1 h</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="w-3 h-3 rounded-full bg-ens-red mt-2"></div>
                    <div>
                        <p class="font-medium">Retour pour correction</p>
                        <p class="text-sm text-ens-muted">Poster conférence — il y a 2 h</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="w-3 h-3 rounded-full bg-ens-blue mt-2"></div>
                    <div>
                        <p class="font-medium">Transfert vers Informatique</p>
                        <p class="text-sm text-ens-muted">Après validation — il y a 3 h</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
