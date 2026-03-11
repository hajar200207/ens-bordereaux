@php
    $columns = [
        [
            'title' => 'À traiter',
            'color' => 'bg-slate-100 text-slate-700',
            'items' => [
                [
                    'ref' => 'BRD-2026-004',
                    'title' => 'Demande affiche conférence',
                    'service' => 'Secrétariat général',
                    'priority' => 'Urgente',
                    'comment' => 'À consulter par le directeur.',
                    'icon' => '📥',
                ],
                [
                    'ref' => 'BRD-2026-005',
                    'title' => 'Note interne scolarité',
                    'service' => 'Scolarité',
                    'priority' => 'Normale',
                    'comment' => 'Document reçu ce matin.',
                    'icon' => '📄',
                ],
            ]
        ],
        [
            'title' => 'En cours',
            'color' => 'bg-blue-100 text-blue-700',
            'items' => [
                [
                    'ref' => 'BRD-2026-001',
                    'title' => 'Rapport conférence scientifique',
                    'service' => 'Communication',
                    'priority' => 'Haute',
                    'comment' => 'Création du poster en cours.',
                    'icon' => '⚙️',
                ],
            ]
        ],
        [
            'title' => 'En validation',
            'color' => 'bg-yellow-100 text-yellow-700',
            'items' => [
                [
                    'ref' => 'BRD-2026-006',
                    'title' => 'Poster événement ENS',
                    'service' => 'Direction',
                    'priority' => 'Urgente',
                    'comment' => 'En attente de décision finale.',
                    'icon' => '🕒',
                ],
            ]
        ],
        [
            'title' => 'Validé',
            'color' => 'bg-green-100 text-green-700',
            'items' => [
                [
                    'ref' => 'BRD-2026-003',
                    'title' => 'Note administrative',
                    'service' => 'Direction',
                    'priority' => 'Normale',
                    'comment' => 'Validé pour diffusion.',
                    'icon' => '✅',
                ],
            ]
        ],
        [
            'title' => 'Refusé',
            'color' => 'bg-red-100 text-red-700',
            'items' => [
                [
                    'ref' => 'BRD-2026-007',
                    'title' => 'Visuel non conforme',
                    'service' => 'Communication',
                    'priority' => 'Haute',
                    'comment' => 'Correction demandée sur la charte graphique.',
                    'icon' => '❌',
                ],
            ]
        ],
    ];
@endphp

<div class="space-y-4">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Workflow Board</h2>
            <p class="text-sm text-ens-muted mt-1">Vue Kanban du circuit de traitement documentaire</p>
        </div>

        <button class="ens-btn-secondary">Filtrer</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5 gap-5">
        @foreach($columns as $column)
            <div class="ens-card p-4 min-h-[420px]">
                <div class="flex items-center justify-between mb-4">
                    <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $column['color'] }}">
                        {{ $column['title'] }}
                    </span>
                    <span class="text-xs text-slate-400">{{ count($column['items']) }}</span>
                </div>

                <div class="space-y-4">
                    @foreach($column['items'] as $item)
                        <div class="cursor-glow-card rounded-2xl border border-slate-200 bg-white p-4 shadow-sm hover:shadow-md transition">
                            <div class="flex items-start justify-between gap-3 mb-3">
                                <div class="text-xl">{{ $item['icon'] }}</div>
                                <span class="text-[11px] px-2 py-1 rounded-full bg-slate-100 text-slate-600 font-semibold">
                                    {{ $item['priority'] }}
                                </span>
                            </div>

                            <p class="text-xs text-slate-400 font-medium">{{ $item['ref'] }}</p>
                            <h3 class="font-semibold text-slate-800 mt-1 leading-5">
                                {{ $item['title'] }}
                            </h3>

                            <div class="mt-3 text-xs text-slate-500">
                                Service : <span class="font-medium text-slate-700">{{ $item['service'] }}</span>
                            </div>

                            <div class="mt-3 rounded-xl bg-slate-50 p-3 text-sm text-slate-600">
                                {{ $item['comment'] }}
                            </div>

                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs text-ens-blue font-medium">Voir détail</span>
                                <span class="w-8 h-8 rounded-xl bg-slate-100 flex items-center justify-center">→</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
