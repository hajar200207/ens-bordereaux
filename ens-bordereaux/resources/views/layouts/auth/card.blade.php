@props([
    'title' => '',
    'value' => '',
    'color' => '#1F4E79',
    'subtitle' => null,
])

<div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-5">
    <div class="flex items-start justify-between gap-4">
        <div>
            <p class="text-sm text-slate-500">{{ $title }}</p>
            <h3 class="text-3xl font-bold mt-2" style="color: {{ $color }}">
                {{ $value }}
            </h3>

            @if($subtitle)
                <p class="text-xs text-slate-400 mt-2">{{ $subtitle }}</p>
            @endif
        </div>

        <div class="w-12 h-12 rounded-2xl flex items-center justify-center text-white font-bold" style="background-color: {{ $color }}">
            ●
        </div>
    </div>
</div>
