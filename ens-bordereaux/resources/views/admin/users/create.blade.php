@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="ens-section-title">Créer un utilisateur</h1>
            <p class="ens-subtitle">Ajouter un compte avec service et rôle.</p>
        </div>
        <a href="{{ route('admin.users.index') }}" class="ens-btn-secondary">Retour</a>
    </div>

    <div class="ens-card p-6">
        <form method="POST" action="{{ route('admin.users.store') }}" class="grid grid-cols-1 md:grid-cols-2 gap-5">
            @csrf

            <div>
                <label class="ens-label">Prénom</label>
                <input type="text" name="first_name" value="{{ old('first_name') }}" class="ens-input" required>
                @error('first_name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="ens-label">Nom</label>
                <input type="text" name="last_name" value="{{ old('last_name') }}" class="ens-input" required>
                @error('last_name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="ens-label">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="ens-input" required>
                @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="ens-label">Nom d'utilisateur</label>
                <input type="text" name="username" value="{{ old('username') }}" class="ens-input">
                @error('username') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="ens-label">Service</label>
                <select name="service_id" class="ens-input">
                    <option value="">-- Sélectionner --</option>
                    @foreach($services as $service)
                        <option value="{{ $service->id }}" @selected(old('service_id') == $service->id)>
                            {{ $service->name }}
                        </option>
                    @endforeach
                </select>
                @error('service_id') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="ens-label">Rôle</label>
                <select name="role" class="ens-input" required>
                    <option value="">-- Sélectionner --</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->name }}" @selected(old('role') == $role->name)>
                            {{ $role->name }}
                        </option>
                    @endforeach
                </select>
                @error('role') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="ens-label">Mot de passe</label>
                <input type="password" name="password" class="ens-input" required>
                @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="ens-label">Confirmation mot de passe</label>
                <input type="password" name="password_confirmation" class="ens-input" required>
            </div>

            <div class="md:col-span-2 flex items-center gap-3">
                <input type="checkbox" name="is_active" value="1" checked>
                <label>Compte actif</label>
            </div>

            <div class="md:col-span-2 flex justify-end gap-3">
                <a href="{{ route('admin.users.index') }}" class="ens-btn-secondary">Annuler</a>
                <button type="submit" class="ens-btn-primary">Créer le compte</button>
            </div>
        </form>
    </div>
</div>
@endsection
