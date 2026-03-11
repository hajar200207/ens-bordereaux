<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Connexion - ENS Bordereaux</title>
<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
</head>

<body class="bg-ens-bg min-h-screen flex items-center justify-center">

<div class="w-full max-w-md ens-card p-8">

<div class="text-center mb-6">
<h1 class="text-2xl font-bold text-ens-blue">ENS Rabat</h1>
<p class="text-sm text-ens-muted">
Système de gestion des correspondances
</p>
</div>

<form class="space-y-4">

<div>
<label class="text-sm font-medium">Email</label>
<input type="email" class="ens-input" placeholder="email@ens.ma">
</div>

<div>
<label class="text-sm font-medium">Mot de passe</label>
<input type="password" class="ens-input">
</div>

<button class="ens-btn-primary w-full">
Se connecter
</button>

</form>

</div>

</body>
</html>
<?php /**PATH C:\Users\Lenovo\Desktop\ens-bordereaux\ens-bordereaux\resources\views/auth/login.blade.php ENDPATH**/ ?>