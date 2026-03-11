@extends('layouts.app')

@section('content')
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-800">Dashboard</h1>
            <p class="text-slate-500 mt-1">Vue d’ensemble des documents et activités.</p>
        </div>

        <a href="/documents/create" class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-[#ef8748] text-white font-semibold hover:bg-[#df7b40] transition">
            + Nouveau document
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-8">
        <x-card title="Documents en attente" value="12" color="#f59e0b" subtitle="À traiter rapidement" />
        <x-card title="Documents validés" value="34" color="#16a34a" subtitle="Validation directeur" />
        <x-card title="Documents refusés" value="5" color="#dc2626" subtitle="À corriger ou clôturer" />
        <x-card title="En cours" value="18" color="#1F4E79" subtitle="Services en traitement" />
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
        <div class="xl:col-span-2 bg-white rounded-2xl shadow-sm border border-slate-200">
            <div class="p-5 border-b border-slate-100">
                <h2 class="text-lg font-semibold">Documents récents</h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full min-w-[760px]">
                    <thead class="bg-slate-50">
                        <tr class="text-left text-sm text-slate-500">
                            <th class="px-5 py-4">Référence</th>
                            <th class="px-5 py-4">Titre</th>
                            <th class="px-5 py-4">Service</th>
                            <th class="px-5 py-4">Statut</th>
                            <th class="px-5 py-4">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-slate-100">
                            <td class="px-5 py-4 font-medium">BRD-2026-001</td>
                            <td class="px-5 py-4">Rapport conférence scientifique</td>
                            <td class="px-5 py-4">Communication</td>
                            <td class="px-5 py-4"><x-badge-status status="returned_for_revision" /></td>
                            <td class="px-5 py-4 text-slate-500">09/03/2026</td>
                        </tr>
                        <tr class="border-t border-slate-100">
                            <td class="px-5 py-4 font-medium">BRD-2026-002</td>
                            <td class="px-5 py-4">Publication site web ENS</td>
                            <td class="px-5 py-4">Informatique</td>
                            <td class="px-5 py-4"><x-badge-status status="in_progress" /></td>
                            <td class="px-5 py-4 text-slate-500">08/03/2026</td>
                        </tr>
                        <tr class="border-t border-slate-100">
                            <td class="px-5 py-4 font-medium">BRD-2026-003</td>
                            <td class="px-5 py-4">Note de service interne</td>
                            <td class="px-5 py-4">Secrétariat général</td>
                            <td class="px-5 py-4"><x-badge-status status="validated" /></td>
                            <td class="px-5 py-4 text-slate-500">07/03/2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200">
            <div class="p-5 border-b border-slate-100">
                <h2 class="text-lg font-semibold">Activité récente</h2>
            </div>

            <div class="p-5 space-y-5">
                <div class="flex gap-3">
                    <div class="w-3 h-3 rounded-full bg-[#ef8748] mt-2"></div>
                    <div>
                        <p class="font-medium">Document assigné à Communication</p>
                        <p class="text-sm text-slate-500">BRD-2026-001 — il y a 20 min</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="w-3 h-3 rounded-full bg-[#16a34a] mt-2"></div>
                    <div>
                        <p class="font-medium">Validation par le directeur</p>
                        <p class="text-sm text-slate-500">BRD-2026-003 — il y a 1 h</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="w-3 h-3 rounded-full bg-[#dc2626] mt-2"></div>
                    <div>
                        <p class="font-medium">Retour pour correction</p>
                        <p class="text-sm text-slate-500">Poster conférence — il y a 2 h</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
