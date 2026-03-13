<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'ENS Rabat - Gestion des Bordereaux'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="min-h-screen bg-ens-bg">
    <div class="min-h-screen flex">
        <?php echo $__env->make('components.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="flex-1 flex flex-col min-w-0">
            <?php echo $__env->make('components.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <main class="p-4 md:p-6 lg:p-8">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>
    <div id="cursor-dot" class="pointer-events-none fixed top-0 left-0 w-4 h-4 rounded-full bg-[#ef8748] opacity-70 blur-[1px] z-[9999] hidden md:block"></div>
</body>
</html>
<?php /**PATH C:\Users\Lenovo\Desktop\ens-bordereaux\ens-bordereaux\resources\views/layouts/app.blade.php ENDPATH**/ ?>