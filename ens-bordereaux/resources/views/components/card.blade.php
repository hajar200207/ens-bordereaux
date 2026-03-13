@props([
    'title' => '',
    'value' => '',
    'subtitle' => '',
    'color' => 'blue',
    'icon' => '●'
])

@php
    $colorMap = [
        'blue' => 'bg-ens-blue',
        'orange' => 'bg-ens-orange',
        'green' => 'bg-ens-green',
        'red' => 'bg-ens-red',
        'yellow' => 'bg-ens-yellow',
    ];

    $badgeColor = $colorMap[$color] ?? 'bg-ens-blue';
@endphp

<div class="ens-card p-5">
    <div class="flex items-start justify-between gap-4">
        <div>
            <p class="text-sm text-ens-muted">{{ $title }}</p>
            <h3 class="text-3xl font-bold mt-2">{{ $value }}</h3>
            @if($subtitle)
                <p class="text-xs text-ens-muted mt-2">{{ $subtitle }}</p>
            @endif
        </div>

        <div class="w-12 h-12 rounded-2xl {{ $badgeColor }} text-white flex items-center justify-center font-bold">
            {{ $icon }}
        </div>
    </div>
</div>
