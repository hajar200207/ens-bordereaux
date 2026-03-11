<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['status' => 'submitted']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['status' => 'submitted']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $styles = [
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
?>

<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold <?php echo e($styles[$status] ?? 'bg-slate-100 text-slate-700'); ?>">
    <?php echo e($labels[$status] ?? $status); ?>

</span>
<?php /**PATH C:\Users\Lenovo\Desktop\ens-bordereaux\ens-bordereaux\resources\views/components/badge-status.blade.php ENDPATH**/ ?>