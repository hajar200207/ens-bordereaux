<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => '',
    'value' => '',
    'subtitle' => '',
    'color' => 'blue',
    'icon' => '●'
]));

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

foreach (array_filter(([
    'title' => '',
    'value' => '',
    'subtitle' => '',
    'color' => 'blue',
    'icon' => '●'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $colorMap = [
        'blue' => 'bg-ens-blue',
        'orange' => 'bg-ens-orange',
        'green' => 'bg-ens-green',
        'red' => 'bg-ens-red',
        'yellow' => 'bg-ens-yellow',
    ];

    $badgeColor = $colorMap[$color] ?? 'bg-ens-blue';
?>

<div class="ens-card p-5">
    <div class="flex items-start justify-between gap-4">
        <div>
            <p class="text-sm text-ens-muted"><?php echo e($title); ?></p>
            <h3 class="text-3xl font-bold mt-2"><?php echo e($value); ?></h3>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($subtitle): ?>
                <p class="text-xs text-ens-muted mt-2"><?php echo e($subtitle); ?></p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <div class="w-12 h-12 rounded-2xl <?php echo e($badgeColor); ?> text-white flex items-center justify-center font-bold">
            <?php echo e($icon); ?>

        </div>
    </div>
</div>
<?php /**PATH C:\Users\Lenovo\Desktop\ens-bordereaux\ens-bordereaux\resources\views/components/card.blade.php ENDPATH**/ ?>