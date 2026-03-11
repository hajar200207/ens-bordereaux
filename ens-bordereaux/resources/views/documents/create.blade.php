@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto">
        <div class="mb-8">
            <a href="/documents" class="text-[#1F4E79] hover:underline text-sm">← Retour aux documents</a>
            <h1 class="text-3xl font-bold text-slate-800 mt-3">Créer un document</h1>
            <p class="text-slate-500 mt-1">Ajouter un nouveau bordereau ou document administratif.</p>
        </div>

        <form class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 md:p-8 space-y-6" method="POST" action="#" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-slate-700 mb-2">Titre du document</label>
                    <input type="text" class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F4E79]" placeholder="Ex : Rapport conférence scientifique">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Type de document</label>
                    <select class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F4E79]">
                        <option>Rapport</option>
                        <option>Note</option>
                        <option>Bordereau</option>
                        <option>Courrier</option>
                        <option>Poster</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Priorité</label>
                    <select class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F4E79]">
                        <option>Normale</option>
                        <option>Haute</option>
                        <option>Urgente</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Service émetteur</label>
                    <select class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F4E79]">
                        <option>Secrétariat général</option>
                        <option>Secrétariat directeur</option>
                        <option>Direction</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Date</label>
                    <input type="date" class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F4E79]">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-slate-700 mb-2">Description</label>
                    <textarea rows="5" class="w-full rounded-xl border border-slate-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F4E79]" placeholder="Décrivez le contexte du document..."></textarea>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-slate-700 mb-2">Fichier principal</label>
                    <div class="border-2 border-dashed border-slate-300 rounded-2xl p-8 text-center bg-slate-50">
                        <p class="font-medium text-slate-700">Glisser-déposer le fichier ici</p>
                        <p class="text-sm text-slate-500 mt-2">ou cliquez pour sélectionner un document</p>
                        <input type="file" class="mt-4 block mx-auto text-sm">
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-3 pt-2">
                <button type="submit" class="px-6 py-3 rounded-xl bg-[#ef8748] text-white font-semibold hover:bg-[#df7b40] transition">
                    Enregistrer
                </button>

                <a href="/documents" class="px-6 py-3 rounded-xl bg-slate-100 text-slate-700 font-semibold hover:bg-slate-200 transition">
                    Annuler
                </a>
            </div>
        </form>
    </div>
@endsection
