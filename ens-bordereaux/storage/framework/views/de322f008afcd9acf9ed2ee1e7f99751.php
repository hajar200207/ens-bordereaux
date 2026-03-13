<?php $__env->startSection('content'); ?>
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-800">Gestion des services</h1>
            <p class="text-slate-500 mt-1">Organisation des entités administratives de l’établissement.</p>
        </div>

        <button class="px-5 py-3 rounded-xl bg-[#ef8748] text-white font-semibold hover:bg-[#df7b40] transition">
            + Nouveau service
        </button>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-x-auto">
        <table class="w-full min-w-[850px]">
            <thead class="bg-slate-50 text-slate-500 text-sm">
                <tr class="text-left">
                    <th class="px-5 py-4">Code</th>
                    <th class="px-5 py-4">Nom du service</th>
                    <th class="px-5 py-4">Responsable</th>
                    <th class="px-5 py-4">Description</th>
                    <th class="px-5 py-4">Statut</th>
                    <th class="px-5 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-slate-100">
                    <td class="px-5 py-4 font-medium">DIR</td>
                    <td class="px-5 py-4">Direction</td>
                    <td class="px-5 py-4">Directeur</td>
                    <td class="px-5 py-4 text-slate-600">Validation et supervision générale</td>
                    <td class="px-5 py-4">
                        <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Actif</span>
                    </td>
                    <td class="px-5 py-4 text-right">
                        <button class="px-3 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-sm">Modifier</button>
                    </td>
                </tr>

                <tr class="border-t border-slate-100">
                    <td class="px-5 py-4 font-medium">COM</td>
                    <td class="px-5 py-4">Communication</td>
                    <td class="px-5 py-4">Chef de service</td>
                    <td class="px-5 py-4 text-slate-600">Création des supports et communication visuelle</td>
                    <td class="px-5 py-4">
                        <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Actif</span>
                    </td>
                    <td class="px-5 py-4 text-right">
                        <button class="px-3 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-sm">Modifier</button>
                    </td>
                </tr>

                <tr class="border-t border-slate-100">
                    <td class="px-5 py-4 font-medium">INF</td>
                    <td class="px-5 py-4">Informatique</td>
                    <td class="px-5 py-4">Chef de service</td>
                    <td class="px-5 py-4 text-slate-600">Publication, site web et support technique</td>
                    <td class="px-5 py-4">
                        <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Actif</span>
                    </td>
                    <td class="px-5 py-4 text-right">
                        <button class="px-3 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-sm">Modifier</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Lenovo\Desktop\ens-bordereaux\ens-bordereaux\resources\views/admin/services.blade.php ENDPATH**/ ?>