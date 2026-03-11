@extends('layouts.app')

@section('content')
    <div class="flex flex-col xl:flex-row xl:items-start xl:justify-between gap-5 mb-8">
        <div>
            <div class="flex items-center gap-3 mb-3">
                <a href="/documents" class="text-[#1F4E79] hover:underline text-sm">← Retour à la liste</a>
            </div>
            <h1 class="text-3xl font-bold text-slate-800">Détail du document</h1>
            <p class="text-slate-500 mt-1">Référence : BRD-2026-001</p>
        </div>

        <div class="flex flex-wrap gap-3">
            <button class="px-4 py-3 rounded-xl bg-[#1F4E79] text-white font-semibold hover:bg-[#173a5e] transition">
                Affecter
            </button>
            <button class="px-4 py-3 rounded-xl bg-[#16a34a] text-white font-semibold hover:bg-[#138545] transition">
                Valider
            </button>
            <button class="px-4 py-3 rounded-xl bg-[#dc2626] text-white font-semibold hover:bg-[#b91c1c] transition">
                Refuser
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-6">
        <div class="xl:col-span-5 bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-5">
                <h2 class="text-lg font-semibold">Informations générales</h2>
                <x-badge-status status="returned_for_revision" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <p class="text-sm text-slate-500">Titre</p>
                    <p class="font-semibold mt-1">Rapport conférence scientifique</p>
                </div>

                <div>
                    <p class="text-sm text-slate-500">Type</p>
                    <p class="font-semibold mt-1">Rapport</p>
                </div>

                <div>
                    <p class="text-sm text-slate-500">Créé par</p>
                    <p class="font-semibold mt-1">Secrétariat général</p>
                </div>

                <div>
                    <p class="text-sm text-slate-500">Priorité</p>
                    <p class="font-semibold mt-1 text-red-600">Urgente</p>
                </div>

                <div>
                    <p class="text-sm text-slate-500">Date de création</p>
                    <p class="font-semibold mt-1">09/03/2026</p>
                </div>

                <div>
                    <p class="text-sm text-slate-500">Service actuel</p>
                    <p class="font-semibold mt-1">Communication</p>
                </div>
            </div>

            <div class="mt-6">
                <p class="text-sm text-slate-500 mb-2">Description</p>
                <div class="rounded-xl bg-slate-50 border border-slate-200 p-4 text-sm leading-7 text-slate-600">
                    Rapport à traiter pour la communication institutionnelle, avec préparation
                    d’un poster et validation par la direction avant publication finale.
                </div>
            </div>
        </div>

        <div class="xl:col-span-7 bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <div class="flex items-center justify-between mb-5">
                <h2 class="text-lg font-semibold">Fichiers</h2>
                <button class="px-4 py-2 rounded-lg bg-[#ef8748] text-white text-sm font-semibold hover:bg-[#df7b40]">
                    + Ajouter un fichier
                </button>
            </div>

            <div class="space-y-4">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 border border-slate-200 rounded-xl p-4">
                    <div>
                        <p class="font-semibold">rapport_conference_v1.pdf</p>
                        <p class="text-sm text-slate-500">Version 1 • PDF • 2.4 MB</p>
                    </div>
                    <div class="flex gap-2">
                        <button class="px-3 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-sm">Télécharger</button>
                        <button class="px-3 py-2 rounded-lg bg-[#1F4E79] hover:bg-[#173a5e] text-white text-sm">Prévisualiser</button>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 border border-slate-200 rounded-xl p-4">
                    <div>
                        <p class="font-semibold">poster_conference_v2.png</p>
                        <p class="text-sm text-slate-500">Version 2 • Image • 1.1 MB</p>
                    </div>
                    <div class="flex gap-2">
                        <button class="px-3 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-sm">Télécharger</button>
                        <button class="px-3 py-2 rounded-lg bg-[#1F4E79] hover:bg-[#173a5e] text-white text-sm">Prévisualiser</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="xl:col-span-4 bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-semibold mb-5">Affectations</h2>

            <div class="space-y-4">
                <div class="border border-slate-200 rounded-xl p-4">
                    <p class="font-semibold">Service Communication</p>
                    <p class="text-sm text-slate-500 mt-1">Assigné par : Directeur</p>
                    <p class="text-sm text-slate-500">Date : 09/03/2026</p>
                    <div class="mt-3">
                        <x-badge-status status="in_progress" />
                    </div>
                </div>

                <div class="border border-slate-200 rounded-xl p-4">
                    <p class="font-semibold">Service Informatique</p>
                    <p class="text-sm text-slate-500 mt-1">En attente après validation</p>
                    <div class="mt-3">
                        <x-badge-status status="assigned" />
                    </div>
                </div>
            </div>
        </div>

        <div class="xl:col-span-4 bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-semibold mb-5">Commentaires</h2>

            <div class="space-y-4">
                <div class="border-l-4 border-[#dc2626] bg-red-50 rounded-xl p-4">
                    <div class="flex items-center justify-between gap-4">
                        <p class="font-semibold text-red-700">Directeur</p>
                        <span class="text-xs text-red-500">09/03/2026 - 10:15</span>
                    </div>
                    <p class="text-sm text-red-700 mt-2">
                        Le poster doit être révisé : améliorer la hiérarchie visuelle et corriger le logo.
                    </p>
                </div>

                <div class="border-l-4 border-[#1F4E79] bg-blue-50 rounded-xl p-4">
                    <div class="flex items-center justify-between gap-4">
                        <p class="font-semibold text-blue-700">Communication</p>
                        <span class="text-xs text-blue-500">09/03/2026 - 12:30</span>
                    </div>
                    <p class="text-sm text-blue-700 mt-2">
                        Une nouvelle version du poster a été ajoutée pour révision.
                    </p>
                </div>
            </div>
        </div>

        <div class="xl:col-span-4 bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-semibold mb-5">Historique / Timeline</h2>

            <div class="space-y-5">
                <div class="flex gap-3">
                    <div class="w-4 h-4 rounded-full bg-[#ef8748] mt-1"></div>
                    <div>
                        <p class="font-medium">Document créé</p>
                        <p class="text-sm text-slate-500">Secrétariat général — 09/03/2026 08:30</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="w-4 h-4 rounded-full bg-[#1F4E79] mt-1"></div>
                    <div>
                        <p class="font-medium">Affectation au service Communication</p>
                        <p class="text-sm text-slate-500">Directeur — 09/03/2026 09:00</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="w-4 h-4 rounded-full bg-[#dc2626] mt-1"></div>
                    <div>
                        <p class="font-medium">Retour pour correction</p>
                        <p class="text-sm text-slate-500">Directeur — 09/03/2026 10:15</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="w-4 h-4 rounded-full bg-[#16a34a] mt-1"></div>
                    <div>
                        <p class="font-medium">Nouvelle version ajoutée</p>
                        <p class="text-sm text-slate-500">Communication — 09/03/2026 12:30</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
