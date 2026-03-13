@extends('layouts.app')

@section('content')

<div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-4 mb-8">
    <div>
        <a href="/documents" class="text-sm text-ens-blue font-medium hover:underline">
            ← Retour aux documents
        </a>
        <h1 class="ens-section-title mt-3">Détail du document</h1>
        <p class="ens-subtitle">
            Référence : BRD-2026-001 — Rapport conférence scientifique
        </p>
    </div>

    <div class="flex flex-wrap gap-3">
        <button class="ens-btn-secondary">Affecter</button>
        <button class="px-5 py-3 rounded-xl bg-ens-green text-white font-semibold hover:brightness-95 transition">
            Valider
        </button>
        <button class="px-5 py-3 rounded-xl bg-ens-red text-white font-semibold hover:brightness-95 transition">
            Refuser
        </button>
    </div>
</div>

<div class="grid grid-cols-1 xl:grid-cols-12 gap-6 mb-6">
    <div class="xl:col-span-4 ens-card p-6">
        <div class="flex items-center justify-between mb-5">
            <h2 class="text-lg font-semibold">Informations générales</h2>
            <x-badge-status status="returned_for_revision" />
        </div>

        <div class="space-y-4 text-sm">
            <div>
                <p class="text-ens-muted">Titre</p>
                <p class="font-semibold text-slate-800 mt-1">Rapport conférence scientifique</p>
            </div>

            <div>
                <p class="text-ens-muted">Créé par</p>
                <p class="font-semibold text-slate-800 mt-1">Secrétariat général</p>
            </div>

            <div>
                <p class="text-ens-muted">Service actuel</p>
                <p class="font-semibold text-slate-800 mt-1">Communication</p>
            </div>

            <div>
                <p class="text-ens-muted">Priorité</p>
                <span class="inline-flex mt-1 px-3 py-1 rounded-full bg-red-100 text-red-700 text-xs font-semibold">
                    Urgente
                </span>
            </div>

            <div>
                <p class="text-ens-muted">Description</p>
                <p class="text-slate-700 mt-1 leading-6">
                    Document relatif à la préparation d’un support visuel pour une conférence,
                    avec validation finale par la direction avant diffusion institutionnelle.
                </p>
            </div>
        </div>
    </div>

    <div class="xl:col-span-4 ens-card p-6">
        <div class="flex items-center justify-between mb-5">
            <h2 class="text-lg font-semibold">Fichiers</h2>
            <button class="ens-btn-primary !px-4 !py-2 text-sm">
                + Ajouter
            </button>
        </div>

        <div class="space-y-4">
            <div class="rounded-2xl border border-slate-200 p-4 bg-slate-50">
                <div class="flex items-start justify-between gap-3">
                    <div>
                        <p class="font-semibold text-slate-800">rapport_conference_v1.pdf</p>
                        <p class="text-xs text-ens-muted mt-1">PDF • 2.4 MB • Version 1</p>
                    </div>
                    <span class="text-xs px-2 py-1 rounded-full bg-blue-100 text-blue-700 font-semibold">
                        Initial
                    </span>
                </div>
            </div>

            <div class="rounded-2xl border border-slate-200 p-4 bg-slate-50">
                <div class="flex items-start justify-between gap-3">
                    <div>
                        <p class="font-semibold text-slate-800">poster_corrige_v2.png</p>
                        <p class="text-xs text-ens-muted mt-1">PNG • 1.1 MB • Version 2</p>
                    </div>
                    <span class="text-xs px-2 py-1 rounded-full bg-yellow-100 text-yellow-700 font-semibold">
                        Révision
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="xl:col-span-4 ens-card p-6">
        <h2 class="text-lg font-semibold mb-5">Commentaires récents</h2>

        <div class="space-y-4">
            <div class="rounded-2xl p-4 bg-red-50 border border-red-200">
                <div class="flex items-center justify-between gap-3">
                    <p class="font-semibold text-red-700">Directeur</p>
                    <span class="text-xs text-red-500">09/03/2026</span>
                </div>
                <p class="text-sm text-red-700 mt-2">
                    Le poster doit être ajusté : logo, marges et hiérarchie visuelle.
                </p>
            </div>

            <div class="rounded-2xl p-4 bg-blue-50 border border-blue-200">
                <div class="flex items-center justify-between gap-3">
                    <p class="font-semibold text-blue-700">Communication</p>
                    <span class="text-xs text-blue-500">09/03/2026</span>
                </div>
                <p class="text-sm text-blue-700 mt-2">
                    Une nouvelle version a été soumise après correction.
                </p>
            </div>
        </div>
    </div>
</div>

@php
    $workflowSteps = [
        [
            'title' => 'Document créé',
            'description' => 'Le document a été déposé par le secrétariat général et enregistré dans le système.',
            'date' => '09/03/2026 - 08:30',
            'status' => 'done',
            'actor' => 'Secrétariat général',
        ],
        [
            'title' => 'Consultation par le directeur',
            'description' => 'Le directeur a consulté le document et décidé de l’orienter vers le service Communication.',
            'date' => '09/03/2026 - 08:50',
            'status' => 'done',
            'actor' => 'Directeur',
        ],
        [
            'title' => 'Affectation au service Communication',
            'description' => 'Le document a été affecté pour création du poster institutionnel.',
            'date' => '09/03/2026 - 09:00',
            'status' => 'done',
            'actor' => 'Directeur',
        ],
        [
            'title' => 'Retour pour correction',
            'description' => 'Le directeur a demandé une mise à jour du poster avant validation finale.',
            'date' => '09/03/2026 - 10:15',
            'status' => 'warning',
            'actor' => 'Directeur',
        ],
        [
            'title' => 'Nouvelle version envoyée',
            'description' => 'Le service Communication a soumis une version corrigée, actuellement en cours d’examen.',
            'date' => '09/03/2026 - 12:30',
            'status' => 'current',
            'actor' => 'Communication',
        ],
        [
            'title' => 'Validation finale puis transfert',
            'description' => 'Après validation, le document sera transféré au service Informatique pour diffusion.',
            'date' => 'En attente',
            'status' => 'pending',
            'actor' => 'Direction / Informatique',
        ],
    ];
@endphp

<x-workflow-timeline :steps="$workflowSteps" />

@endsection
