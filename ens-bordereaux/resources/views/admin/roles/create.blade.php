@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-slate-800">Nouveau rôle</h1>
            <p class="text-slate-500 mt-1">Créer un nouveau rôle système.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <form method="POST" action="{{ route('admin.roles.store') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Nom du rôle</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                           class="w-full rounded-xl border-slate-300 focus:border-[#1F4E79] focus:ring-[#1F4E79]">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end gap-3">
                    <a href="{{ route('admin.roles.index') }}"
                       class="px-5 py-3 rounded-xl bg-slate-100 text-slate-700 font-semibold hover:bg-slate-200 transition">
                        Annuler
                    </a>
                    <button type="submit"
                            class="px-5 py-3 rounded-xl bg-[#ef8748] text-white font-semibold hover:bg-[#df7b40] transition">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
