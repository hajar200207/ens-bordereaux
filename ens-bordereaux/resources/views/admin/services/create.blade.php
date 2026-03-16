@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-slate-800">Nouveau service</h1>
            <p class="text-slate-500 mt-1">Créer une nouvelle entité administrative.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <form method="POST" action="{{ route('admin.services.store') }}" class="space-y-5">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Code</label>
                        <input type="text" name="code" value="{{ old('code') }}"
                               class="w-full rounded-xl border-slate-300 focus:border-[#1F4E79] focus:ring-[#1F4E79]">
                        @error('code')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Nom du service</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                               class="w-full rounded-xl border-slate-300 focus:border-[#1F4E79] focus:ring-[#1F4E79]">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Description</label>
                    <textarea name="description" rows="4"
                              class="w-full rounded-xl border-slate-300 focus:border-[#1F4E79] focus:ring-[#1F4E79]">{{ old('description') }}</textarea>
                </div>

                <div class="flex items-center gap-3">
                    <input type="checkbox" name="is_active" value="1" checked>
                    <label class="text-sm text-slate-700">Service actif</label>
                </div>

                <div class="flex justify-end gap-3">
                    <a href="{{ route('admin.services.index') }}"
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
