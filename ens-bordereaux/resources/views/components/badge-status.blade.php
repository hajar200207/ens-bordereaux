@props(['status' => 'submitted'])

@php
    $map = [
        'submitted' => 'bg-blue-100 text-blue-700',
        'under_review' => 'bg-indigo-100 text-indigo-700',
        'assigned' => 'bg-cyan-100 text-cyan-700',
        'in_progress' => 'bg-amber-100 text-amber-700',
        'returned_for_revision' => 'bg-yellow-100 text-yellow-700',
        'resubmitted' => 'bg-orange-100 text-orange-700',
        'validated' => 'bg-green-100 text-green-700',
        'rejected' => 'bg-red-100 text-red-700',
        'completed' => 'bg-emerald-100 text-emerald-700',
        'archived' => 'bg-slate-200 text-slate-700',
    ];

    $labels = [
        'submitted' => 'Soumis',
        'under_review' => 'En révision',
        'assigned' => 'Assigné',
        'in_progress' => 'En cours',
        'returned_for_revision' => 'Retour correction',
        'resubmitted' => 'Renvoyé',
        'validated' => 'Validé',
        'rejected' => 'Refusé',
        'completed' => 'Terminé',
        'archived' => 'Archivé',
    ];

    $class = $map[$status] ?? 'bg-slate-100 text-slate-700';
    $label = $labels[$status] ?? ucfirst(str_replace('_', ' ', $status));
@endphp

<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold {{ $class }}">
    {{ $label }}
</span>
