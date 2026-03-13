@props(['steps' => []])

@php
    $styles = [
        'done' => 'bg-green-100 text-green-700 border-green-200',
        'current' => 'bg-blue-100 text-blue-700 border-blue-200',
        'pending' => 'bg-slate-100 text-slate-600 border-slate-200',
        'warning' => 'bg-yellow-100 text-yellow-700 border-yellow-200',
        'rejected' => 'bg-red-100 text-red-700 border-red-200',
    ];
@endphp

<div class="ens-card p-6">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-xl font-bold">Timeline premium</h2>
            <p class="text-sm text-ens-muted mt-1">Parcours détaillé du document</p>
        </div>

        <div class="px-3 py-1 rounded-full bg-ens-blue text-white text-xs font-semibold animate-pulse">
            Étape actuelle active
        </div>
    </div>

    <div class="relative">
        <div class="absolute left-6 top-0 bottom-0 w-[3px] bg-gradient-to-b from-[#1F4E79] via-[#ef8748] to-slate-200 rounded-full"></div>

        <div class="space-y-6">
            @foreach($steps as $step)
                <div class="relative pl-16">
                    <div class="absolute left-0 top-1 w-12 h-12 rounded-2xl border {{ $styles[$step['status']] ?? $styles['pending'] }} flex items-center justify-center text-lg shadow-sm">
                        {{ $step['icon'] }}
                    </div>

                    <div class="cursor-glow-card rounded-2xl border border-slate-200 bg-white p-5 shadow-sm hover:shadow-md transition">
                        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-2">
                                    <h3 class="text-lg font-semibold text-slate-800">{{ $step['title'] }}</h3>
                                    <span class="text-xs px-2 py-1 rounded-full {{ $styles[$step['status']] ?? $styles['pending'] }}">
                                        {{ ucfirst($step['status']) }}
                                    </span>
                                </div>

                                <p class="text-sm text-slate-600 leading-6">
                                    {{ $step['description'] }}
                                </p>

                                <div class="mt-4 grid sm:grid-cols-2 gap-3 text-xs">
                                    <div class="rounded-xl bg-slate-50 border border-slate-200 px-3 py-2 text-slate-600">
                                        👤 {{ $step['actor'] }}
                                    </div>
                                    <div class="rounded-xl bg-slate-50 border border-slate-200 px-3 py-2 text-slate-600">
                                        🕒 {{ $step['date'] }}
                                    </div>
                                </div>

                                <div class="mt-4 rounded-xl bg-slate-50 p-4 border border-slate-200">
                                    <p class="text-xs font-semibold text-slate-500 mb-1">Commentaire intégré</p>
                                    <p class="text-sm text-slate-700">{{ $step['comment'] }}</p>
                                </div>
                            </div>

                            @if($step['status'] === 'current')
                                <div class="shrink-0">
                                    <div class="px-4 py-2 rounded-xl bg-blue-600 text-white text-sm font-semibold shadow animate-pulse">
                                        Étape actuelle
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>