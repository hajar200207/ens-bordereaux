<?php $__env->startSection('content'); ?>
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-800">Affectations</h1>
            <p class="text-slate-500 mt-1">Suivi des documents assignés aux services et utilisateurs.</p>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-x-auto">
        <table class="w-full min-w-[900px]">
            <thead class="bg-slate-50 text-slate-500 text-sm">
                <tr class="text-left">
                    <th class="px-5 py-4">Document</th>
                    <th class="px-5 py-4">Assigné par</th>
                    <th class="px-5 py-4">Service cible</th>
                    <th class="px-5 py-4">Instruction</th>
                    <th class="px-5 py-4">Date</th>
                    <th class="px-5 py-4">Statut</th>
                    <th class="px-5 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-slate-100">
                    <td class="px-5 py-4 font-medium">BRD-2026-001</td>
                    <td class="px-5 py-4">Directeur</td>
                    <td class="px-5 py-4">Communication</td>
                    <td class="px-5 py-4 text-slate-600">Créer un poster institutionnel</td>
                    <td class="px-5 py-4 text-slate-500">09/03/2026</td>
                    <td class="px-5 py-4"><?php if (isset($component)) { $__componentOriginal435aefee4aa6dd7f20df034696ae03b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal435aefee4aa6dd7f20df034696ae03b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.badge-status','data' => ['status' => 'in_progress']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => 'in_progress']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal435aefee4aa6dd7f20df034696ae03b9)): ?>
<?php $attributes = $__attributesOriginal435aefee4aa6dd7f20df034696ae03b9; ?>
<?php unset($__attributesOriginal435aefee4aa6dd7f20df034696ae03b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal435aefee4aa6dd7f20df034696ae03b9)): ?>
<?php $component = $__componentOriginal435aefee4aa6dd7f20df034696ae03b9; ?>
<?php unset($__componentOriginal435aefee4aa6dd7f20df034696ae03b9); ?>
<?php endif; ?></td>
                    <td class="px-5 py-4 text-right">
                        <button class="px-3 py-2 rounded-lg bg-[#1F4E79] text-white text-sm hover:bg-[#173a5e]">
                            Voir
                        </button>
                    </td>
                </tr>

                <tr class="border-t border-slate-100">
                    <td class="px-5 py-4 font-medium">BRD-2026-002</td>
                    <td class="px-5 py-4">Directeur</td>
                    <td class="px-5 py-4">Informatique</td>
                    <td class="px-5 py-4 text-slate-600">Publier sur la plateforme web</td>
                    <td class="px-5 py-4 text-slate-500">08/03/2026</td>
                    <td class="px-5 py-4"><?php if (isset($component)) { $__componentOriginal435aefee4aa6dd7f20df034696ae03b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal435aefee4aa6dd7f20df034696ae03b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.badge-status','data' => ['status' => 'assigned']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => 'assigned']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal435aefee4aa6dd7f20df034696ae03b9)): ?>
<?php $attributes = $__attributesOriginal435aefee4aa6dd7f20df034696ae03b9; ?>
<?php unset($__attributesOriginal435aefee4aa6dd7f20df034696ae03b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal435aefee4aa6dd7f20df034696ae03b9)): ?>
<?php $component = $__componentOriginal435aefee4aa6dd7f20df034696ae03b9; ?>
<?php unset($__componentOriginal435aefee4aa6dd7f20df034696ae03b9); ?>
<?php endif; ?></td>
                    <td class="px-5 py-4 text-right">
                        <button class="px-3 py-2 rounded-lg bg-[#1F4E79] text-white text-sm hover:bg-[#173a5e]">
                            Voir
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Lenovo\Desktop\ens-bordereaux\ens-bordereaux\resources\views/assignments/index.blade.php ENDPATH**/ ?>