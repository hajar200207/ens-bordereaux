@props([
    'steps' => [
        [
            'title' => 'Document créé',
            'description' => 'Le document a été déposé par le secrétariat général.',
            'date' => '09/03/2026 - 08:30',
            'status' => 'done',
            'actor' => 'Secrétariat général',
        ],
        [
            'title' => 'Affectation au service Communication',
            'description' => 'Le directeur a affecté le document au service Communication pour traitement.',
            'date' => '09/03/2026 - 09:00',
            'status' => 'done',
            'actor' => 'Directeur',
        ],
        [
            'title' => 'Retour pour correction',
            'description' => 'Le directeur a demandé une correction du poster et une mise à jour du contenu.',
            'date' => '09/03/2026 - 10:15',
            'status' => 'warning',
            'actor' => 'Directeur',
        ],
        [
            'title' => 'Nouvelle version envoyée',
            'description' => 'Le service Communication a soumis une nouvelle version pour validation.',
            'date' => '09/03/2026 - 12:30',
            'status' => 'current',
            'actor' => 'Communication',
        ],
        [
            'title' => 'Validation finale',
            'description' => 'En attente de décision finale du directeur.',
            'date' => 'En attente',
            'status' => 'pending',
            'actor' => 'Direction',
        ],
    ]
])

@php
    $styles = [
        'done' => [
            'dot' => 'bg-ens-green',
            'ring' => 'ring-green-100',
            'card' => 'border-green-200 bg-green-50/40',
            'text' => 'text-green-700',
            'label' => 'Terminé',
            'labelClass' => 'bg-green-100 text-green-700',
        ],
        'current' => [
            'dot' => 'bg-ens-blue',
            'ring' => 'ring-blue-100',
            'card' => 'border-blue-200 bg-blue-50/40',
            'text' => 'text-blue-700',
            'label' => 'En cours',
            'labelClass' => 'bg-blue-100 text-blue-700',
        ],
        'warning' => [
            'dot' => 'bg-ens-yellow',
            'ring' => 'ring-yellow-100',
            'card' => 'border-yellow-200 bg-yellow-50/50',
            'text' => 'text-yellow-700',
            'label' => 'Révision',
            'labelClass' => 'bg-yellow-100 text-yellow-700',
        ],
        'rejected' => [
            'dot' => 'bg-ens-red',
            'ring' => 'ring-red-100',
            'card' => 'border-red-200 bg-red-50/40',
            'text' => 'text-red-700',
            'label' => 'Refusé',
            'labelClass' => 'bg-red-100 text-red-700',
        ],
        'pending' => [
            'dot' => 'bg-slate-300',
            'ring' => 'ring-slate-100',
            'card' => 'border-slate-200 bg-slate-50',
            'text' => 'text-slate-600',
            'label' => 'En attente',
            'labelClass' => 'bg-slate-100 text-slate-600',
        ],
    ];
@endphp

<div class="ens-card p-6">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Workflow / Timeline</h2>
            <p class="text-sm text-ens-muted mt-1">
                Suivi chronologique du traitement du document
            </p>
        </div>

        <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-600 text-xs font-semibold">
            {{ count($steps) }} étapes
        </span>
    </div>

    <div class="relative">
        <div class="absolute left-[18px] top-0 bottom-0 w-[2px] bg-slate-200"></div>

        <div class="space-y-6">
            @foreach ($steps as $step)
                @php
                    $style = $styles[$step['status']] ?? $styles['pending'];
                @endphp

                <div class="relative pl-12">
                    <div class="absolute left-0 top-2 w-9 h-9 rounded-full {{ $style['dot'] }} ring-4 {{ $style['ring'] }} flex items-center justify-center text-white text-xs font-bold shadow-sm">
                        {{ $loop->iteration }}
                    </div>

                    <div class="rounded-2xl border p-5 shadow-sm {{ $style['card'] }}">
                        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
                            <div class="min-w-0">
                                <div class="flex flex-wrap items-center gap-2 mb-2">
                                    <h3 class="font-semibold text-slate-800 text-lg">
                                        {{ $step['title'] }}
                                    </h3>

                                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold {{ $style['labelClass'] }}">
                                        {{ $style['label'] }}
                                    </span>
                                </div>

                                <p class="text-sm text-slate-600 leading-6">
                                    {{ $step['description'] }}
                                </p>

                                <div class="mt-4 flex flex-wrap items-center gap-3 text-xs">
                                    <span class="px-3 py-1 rounded-full bg-white border border-slate-200 text-slate-600">
                                        👤 {{ $step['actor'] }}
                                    </span>

                                    <span class="px-3 py-1 rounded-full bg-white border border-slate-200 text-slate-600">
                                        🕒 {{ $step['date'] }}
                                    </span>
                                </div>
                            </div>

                            <div class="shrink-0">
                                <button class="px-4 py-2 rounded-xl bg-white border border-slate-200 text-sm font-medium text-slate-700 hover:bg-slate-50 transition">
                                    Voir détail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
