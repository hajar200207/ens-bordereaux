@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-bold text-slate-800">Modifier l'utilisateur</h1>
                <p class="text-slate-500 mt-1">Mettre à jour les informations, le rôle et le service.</p>
            </div>

            <a href="{{ route('admin.users.index') }}"
               class="px-5 py-3 rounded-xl bg-slate-100 text-slate-700 font-semibold hover:bg-slate-200 transition">
                Retour
            </a>
        </div>

        @if ($errors->any())
            <div class="mb-6 rounded-2xl bg-red-50 border border-red-200 px-4 py-3 text-red-700">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white rounded-3xl shadow-sm border border-slate-200 p-6 md:p-8">
            <form method="POST" action="{{ route('admin.users.update', $user) }}" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Prénom</label>
                        <input type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}"
                               class="w-full rounded-xl border-slate-300 focus:border-[#1F4E79] focus:ring-[#1F4E79]">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Nom</label>
                        <input type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}"
                               class="w-full rounded-xl border-slate-300 focus:border-[#1F4E79] focus:ring-[#1F4E79]">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}"
                               class="w-full rounded-xl border-slate-300 focus:border-[#1F4E79] focus:ring-[#1F4E79]">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Nom d'utilisateur</label>
                        <input type="text" name="username" value="{{ old('username', $user->username) }}"
                               class="w-full rounded-xl border-slate-300 focus:border-[#1F4E79] focus:ring-[#1F4E79]">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Service</label>
                        <select name="service_id"
                                class="w-full rounded-xl border-slate-300 focus:border-[#1F4E79] focus:ring-[#1F4E79]">
                            <option value="">-- Sélectionner un service --</option>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}"
                                    {{ old('service_id', $user->service_id) == $service->id ? 'selected' : '' }}>
                                    {{ $service->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Rôle</label>
                        <select name="role"
                                class="w-full rounded-xl border-slate-300 focus:border-[#1F4E79] focus:ring-[#1F4E79]">
                            <option value="">-- Sélectionner un rôle --</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->name }}"
                                    {{ old('role', $selectedRole) == $role->name ? 'selected' : '' }}>
                                    {{ ucfirst(str_replace('_', ' ', $role->name)) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">
                            Nouveau mot de passe
                            <span class="text-slate-400">(laisser vide pour ne pas changer)</span>
                        </label>
                        <input type="password" name="password"
                               class="w-full rounded-xl border-slate-300 focus:border-[#1F4E79] focus:ring-[#1F4E79]">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Confirmation du mot de passe</label>
                        <input type="password" name="password_confirmation"
                               class="w-full rounded-xl border-slate-300 focus:border-[#1F4E79] focus:ring-[#1F4E79]">
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <input type="checkbox" name="is_active" value="1"
                           {{ old('is_active', $user->is_active) ? 'checked' : '' }}
                           class="rounded border-slate-300 text-[#1F4E79] focus:ring-[#1F4E79]">
                    <label class="text-sm text-slate-700">Compte actif</label>
                </div>

                <div class="flex justify-end gap-3 pt-2">
                    <a href="{{ route('admin.users.index') }}"
                       class="px-5 py-3 rounded-xl bg-slate-100 text-slate-700 font-semibold hover:bg-slate-200 transition">
                        Annuler
                    </a>

                    <button type="submit"
                            class="px-5 py-3 rounded-xl bg-[#ef8748] text-white font-semibold hover:bg-[#df7b40] transition">
                        Mettre à jour
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
