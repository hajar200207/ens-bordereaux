<?php $__env->startSection('content'); ?>
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-800">Gestion des utilisateurs</h1>
            <p class="text-slate-500 mt-1">Création, modification et suivi des comptes utilisateurs.</p>
        </div>

        <button class="px-5 py-3 rounded-xl bg-[#ef8748] text-white font-semibold hover:bg-[#df7b40] transition">
            + Nouvel utilisateur
        </button>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-x-auto">
        <table class="w-full min-w-[900px]">
            <thead class="bg-slate-50 text-slate-500 text-sm">
                <tr class="text-left">
                    <th class="px-5 py-4">Nom</th>
                    <th class="px-5 py-4">Email</th>
                    <th class="px-5 py-4">Rôle</th>
                    <th class="px-5 py-4">Service</th>
                    <th class="px-5 py-4">Statut</th>
                    <th class="px-5 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t border-slate-100">
                    <td class="px-5 py-4 font-medium">Admin ENS</td>
                    <td class="px-5 py-4">admin@ensrabat.ma</td>
                    <td class="px-5 py-4">Admin</td>
                    <td class="px-5 py-4">Direction</td>
                    <td class="px-5 py-4">
                        <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Actif</span>
                    </td>
                    <td class="px-5 py-4 text-right">
                        <div class="flex justify-end gap-2">
                            <button class="px-3 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-sm">Modifier</button>
                            <button class="px-3 py-2 rounded-lg bg-red-100 hover:bg-red-200 text-red-700 text-sm">Désactiver</button>
                        </div>
                    </td>
                </tr>

                <tr class="border-t border-slate-100">
                    <td class="px-5 py-4 font-medium">Service Communication</td>
                    <td class="px-5 py-4">communication@ensrabat.ma</td>
                    <td class="px-5 py-4">Agent service</td>
                    <td class="px-5 py-4">Communication</td>
                    <td class="px-5 py-4">
                        <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Actif</span>
                    </td>
                    <td class="px-5 py-4 text-right">
                        <div class="flex justify-end gap-2">
                            <button class="px-3 py-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-sm">Modifier</button>
                            <button class="px-3 py-2 rounded-lg bg-red-100 hover:bg-red-200 text-red-700 text-sm">Désactiver</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Lenovo\Desktop\ens-bordereaux\ens-bordereaux\resources\views/admin/users.blade.php ENDPATH**/ ?>