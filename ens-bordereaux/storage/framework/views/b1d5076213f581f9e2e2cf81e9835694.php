<?php $__env->startSection('content'); ?>
    <div class="max-w-6xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-slate-800">Mon profil</h1>
            <p class="text-slate-500 mt-2">Consultez vos informations personnelles et mettez à jour votre mot de passe.</p>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
            <div class="xl:col-span-1">
                <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-16 h-16 rounded-2xl bg-[#1F4E79] text-white flex items-center justify-center text-xl font-bold shadow-md">
                            <?php echo e(strtoupper(substr(auth()->user()->first_name ?? auth()->user()->name, 0, 1))); ?>

                        </div>

                        <div>
                            <h2 class="text-lg font-bold text-slate-800">
                                <?php echo e(auth()->user()->full_name ?: auth()->user()->name); ?>

                            </h2>
                            <p class="text-sm text-slate-500"><?php echo e(auth()->user()->email); ?></p>
                        </div>
                    </div>

                    <div class="space-y-4 text-sm">
                        <div>
                            <p class="text-slate-400">Nom d'utilisateur</p>
                            <p class="font-semibold text-slate-700"><?php echo e(auth()->user()->username ?? '-'); ?></p>
                        </div>

                        <div>
                            <p class="text-slate-400">Service</p>
                            <p class="font-semibold text-slate-700"><?php echo e(auth()->user()->service->name ?? '-'); ?></p>
                        </div>

                        <div>
                            <p class="text-slate-400">Statut</p>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->user()->is_active): ?>
                                <span class="inline-flex px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Actif</span>
                            <?php else: ?>
                                <span class="inline-flex px-3 py-1 rounded-full bg-red-100 text-red-700 text-xs font-semibold">Inactif</span>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        <div>
                            <p class="text-slate-400">Rôle(s)</p>
                            <p class="font-semibold text-slate-700"><?php echo e(auth()->user()->getRoleNames()->join(', ') ?: '-'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-2 space-y-6">
                <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6">
                    <div class="mb-5">
                        <h2 class="text-xl font-bold text-slate-800">Informations du profil</h2>
                        <p class="text-sm text-slate-500 mt-1">Mettez à jour vos informations personnelles.</p>
                    </div>

                    <?php echo $__env->make('profile.partials.update-profile-information-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>

                <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6">
                    <div class="mb-5">
                        <h2 class="text-xl font-bold text-slate-800">Changer le mot de passe</h2>
                        <p class="text-sm text-slate-500 mt-1">Utilisez un mot de passe fort et sécurisé.</p>
                    </div>

                    <?php echo $__env->make('profile.partials.update-password-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>

                <div class="bg-white rounded-3xl border border-red-100 shadow-sm p-6">
                    <div class="mb-5">
                        <h2 class="text-xl font-bold text-red-600">Zone sensible</h2>
                        <p class="text-sm text-slate-500 mt-1">Cette action est irréversible.</p>
                    </div>

                    <?php echo $__env->make('profile.partials.delete-user-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Lenovo\Desktop\ens-bordereaux\ens-bordereaux\resources\views/profile/edit.blade.php ENDPATH**/ ?>