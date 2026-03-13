<?php $__env->startSection('content'); ?>
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-slate-800">Commentaires</h1>
        <p class="text-slate-500 mt-1">Historique des remarques, validations et retours de correction.</p>
    </div>

    <div class="space-y-5">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3">
                <div>
                    <p class="text-sm text-slate-500">Document</p>
                    <h2 class="font-semibold text-lg">BRD-2026-001 — Rapport conférence scientifique</h2>
                </div>
                <span class="text-sm text-slate-400">09/03/2026 - 10:15</span>
            </div>

            <div class="mt-4 border-l-4 border-[#dc2626] pl-4">
                <p class="font-semibold text-red-700">Directeur</p>
                <p class="text-slate-700 mt-2">
                    Le poster n’est pas encore conforme à la charte visuelle de l’établissement.
                    Merci de revoir le logo, les marges et le titre principal.
                </p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3">
                <div>
                    <p class="text-sm text-slate-500">Document</p>
                    <h2 class="font-semibold text-lg">BRD-2026-001 — Rapport conférence scientifique</h2>
                </div>
                <span class="text-sm text-slate-400">09/03/2026 - 12:30</span>
            </div>

            <div class="mt-4 border-l-4 border-[#1F4E79] pl-4">
                <p class="font-semibold text-blue-700">Service Communication</p>
                <p class="text-slate-700 mt-2">
                    Une nouvelle version du poster a été soumise après correction.
                </p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3">
                <div>
                    <p class="text-sm text-slate-500">Document</p>
                    <h2 class="font-semibold text-lg">BRD-2026-003 — Note administrative</h2>
                </div>
                <span class="text-sm text-slate-400">07/03/2026 - 09:10</span>
            </div>

            <div class="mt-4 border-l-4 border-[#16a34a] pl-4">
                <p class="font-semibold text-green-700">Directeur</p>
                <p class="text-slate-700 mt-2">
                    Document validé. Peut être diffusé aux services concernés.
                </p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Lenovo\Desktop\ens-bordereaux\ens-bordereaux\resources\views/comments/index.blade.php ENDPATH**/ ?>