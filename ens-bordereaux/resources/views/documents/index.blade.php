@extends('layouts.app')

@section('content')
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-800">Liste des documents</h1>
            <p class="text-slate-500 mt-1">Consultez, filtrez et suivez les documents.</p>
        </div>

        <a href="/documents/create" class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-[#ef8748] text-white font-semibold hover:bg-[#df7b40] transition">
            + Ajouter un document
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-5 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5 gap-4">
            <input type="text" placeholder="Recherche par titre ou référence..."
                class="xl:col-span-2 rounded-xl border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F4E79]">

            <select class="rounded-xl border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F4E79]">
                <option>Tous les statuts</option>
                <option>Soumis</option>
                <option>En cours</option>
                <option>Validé</option>
                <option>Refusé</option>
            </select>

            <select class="rounded-xl border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F4E79]">
                <option>Tous les services</option>
                <option>Communication</option>
                <option>Informatique</option>
                <option>Scolarité</option>
            </select>

            <button class="rounded-xl bg-[#1F4E79] hover:bg-[#173a5e] text-white font-semibold px-4 py-3 transition">
                Filtrer
            </button>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-x-auto">
        <table class="w-full min-w-[950px]">
            <thead class="bg-slate-50 text-slate-500 text-sm">
                <tr class="text-left">
                    <th class="px-5 py-4">Référence</th>
                    <th class="px-5 py-4">Titre</th>
                    <th class="px-5 py-4">Créé par</th>
                    <th class="px-5 py-4">Service actuel</th>
                    <th class="px-5 py-4">Priorité</th>
                    <th class="px-5 py-4">Statut</th>
                    <th class="px-5 py-4">Date</th>
                    <th class="px-5 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-slate-100 hover:bg-slate-50">
                    <td class="px-5 py-4 font-medium">BRD-2026-001</td>
                    <td class="px-5 py-4">Rapport conférence scientifique</td>
                    <td class="px-5 py-4">Secrétariat général</td>
                    <td class="px-5 py-4">Communication</td>
                    <td class="px-5 py-4">
                        <span class="px-3 py-1 rounded-full bg-red-100 text-red-700 text-xs font-semibold">Urgente</span>
                    </td>
                    <td class="px-5 py-4"><x-badge-status status="returned_for_revision" /></td>
                    <td class="px-5 py-4 text-slate-500">09/03/2026</td>
                    <td class="px-5 py-4">
                        <div class="flex items-center justify-end gap-2">
                            <a href="/documents/1" class="px-3 py-2 rounded-lg bg-[#1F4E79] text-white text-sm font-medium hover:bg-[#173a5e]">Voir</a>
                            <a href="#" class="px-3 py-2 rounded-lg bg-slate-100 text-slate-700 text-sm font-medium hover:bg-slate-200">Modifier</a>
                        </div>
                    </td>
                </tr>

                <tr class="border-t border-slate-100 hover:bg-slate-50">
                    <td class="px-5 py-4 font-medium">BRD-2026-002</td>
                    <td class="px-5 py-4">Publication site web ENS</td>
                    <td class="px-5 py-4">Directeur</td>
                    <td class="px-5 py-4">Informatique</td>
                    <td class="px-5 py-4">
                        <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-semibold">Haute</span>
                    </td>
                    <td class="px-5 py-4"><x-badge-status status="in_progress" /></td>
                    <td class="px-5 py-4 text-slate-500">08/03/2026</td>
                    <td class="px-5 py-4">
                        <div class="flex items-center justify-end gap-2">
                            <a href="/documents/2" class="px-3 py-2 rounded-lg bg-[#1F4E79] text-white text-sm font-medium hover:bg-[#173a5e]">Voir</a>
                            <a href="#" class="px-3 py-2 rounded-lg bg-slate-100 text-slate-700 text-sm font-medium hover:bg-slate-200">Modifier</a>
                        </div>
                    </td>
                </tr>

                <tr class="border-t border-slate-100 hover:bg-slate-50">
                    <td class="px-5 py-4 font-medium">BRD-2026-003</td>
                    <td class="px-5 py-4">Note administrative interne</td>
                    <td class="px-5 py-4">Secrétariat directeur</td>
                    <td class="px-5 py-4">Direction</td>
                    <td class="px-5 py-4">
                        <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-xs font-semibold">Normale</span>
                    </td>
                    <td class="px-5 py-4"><x-badge-status status="validated" /></td>
                    <td class="px-5 py-4 text-slate-500">07/03/2026</td>
                    <td class="px-5 py-4">
                        <div class="flex items-center justify-end gap-2">
                            <a href="/documents/3" class="px-3 py-2 rounded-lg bg-[#1F4E79] text-white text-sm font-medium hover:bg-[#173a5e]">Voir</a>
                            <a href="#" class="px-3 py-2 rounded-lg bg-slate-100 text-slate-700 text-sm font-medium hover:bg-slate-200">Modifier</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
