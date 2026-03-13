<?php $__env->startSection('content'); ?>
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-800">Gestion des rôles</h1>
            <p class="text-slate-500 mt-1">Configuration des profils et permissions fonctionnelles.</p>
        </div>

        <button class="px-5 py-3 rounded-xl bg-[#ef8748] text-white font-semibold hover:bg-[#df7b40] transition">
            + Nouveau rôle
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-semibold text-[#1F4E79]">Admin</h2>
            <p class="text-slate-500 text-sm mt-2">Accès complet à l’application, gestion des utilisateurs, rôles et services.</p>
            <div class="mt-5 flex gap-2 flex-wrap">
                <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-xs">CRUD Users</span>
                <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-xs">CRUD Roles</span>
                <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-xs">Voir tout</span>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-semibold text-[#1F4E79]">Directeur</h2>
            <p class="text-slate-500 text-sm mt-2">Validation, refus, commentaires et affectation des documents aux services.</p>
            <div class="mt-5 flex gap-2 flex-wrap">
                <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-xs">Valider</span>
                <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-xs">Refuser</span>
                <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-xs">Assigner</span>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-lg font-semibold text-[#1F4E79]">Agent service</h2>
            <p class="text-slate-500 text-sm mt-2">Consultation des documents assignés, ajout de commentaires et upload de livrables.</p>
            <div class="mt-5 flex gap-2 flex-wrap">
                <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-xs">Voir assignés</span>
                <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-xs">Commenter</span>
                <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-700 text-xs">Uploader</span>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Lenovo\Desktop\ens-bordereaux\ens-bordereaux\resources\views/admin/roles.blade.php ENDPATH**/ ?>