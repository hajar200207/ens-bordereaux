@extends('layouts.app')

@section('content')
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-800">Affectations</h1>
            <p class="text-slate-500 mt-1">Suivi des documents assignés aux services et utilisateurs.</p>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-x-auto">
        <table class="w-full min-w-[900px]">
            <thead class="bg-slate-50 text-slate-500 text-sm">
                <tr class="text-left">
                    <th class="px-5 py-4">Document</th>
                    <th class="px-5 py-4">Assigné par</th>
                    <th class="px-5 py-4">Service cible</th>
                    <th class="px-5 py-4">Instruction</th>
                    <th class="px-5 py-4">Date</th>
                    <th class="px-5 py-4">Statut</th>
                    <th class="px-5 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-slate-100">
                    <td class="px-5 py-4 font-medium">BRD-2026-001</td>
                    <td class="px-5 py-4">Directeur</td>
                    <td class="px-5 py-4">Communication</td>
                    <td class="px-5 py-4 text-slate-600">Créer un poster institutionnel</td>
                    <td class="px-5 py-4 text-slate-500">09/03/2026</td>
                    <td class="px-5 py-4"><x-badge-status status="in_progress" /></td>
                    <td class="px-5 py-4 text-right">
                        <button class="px-3 py-2 rounded-lg bg-[#1F4E79] text-white text-sm hover:bg-[#173a5e]">
                            Voir
                        </button>
                    </td>
                </tr>

                <tr class="border-t border-slate-100">
                    <td class="px-5 py-4 font-medium">BRD-2026-002</td>
                    <td class="px-5 py-4">Directeur</td>
                    <td class="px-5 py-4">Informatique</td>
                    <td class="px-5 py-4 text-slate-600">Publier sur la plateforme web</td>
                    <td class="px-5 py-4 text-slate-500">08/03/2026</td>
                    <td class="px-5 py-4"><x-badge-status status="assigned" /></td>
                    <td class="px-5 py-4 text-right">
                        <button class="px-3 py-2 rounded-lg bg-[#1F4E79] text-white text-sm hover:bg-[#173a5e]">
                            Voir
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
