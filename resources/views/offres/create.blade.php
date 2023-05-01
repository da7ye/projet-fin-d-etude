<x-app-layout>

    <div class="container py-2 px-[450px]">
        <div class="flex justify-between py-3">
            <h2 class="text-lg font-bold">Ajouter une nouvelle offre</h2>
            <div class="">
                <a href="{{ route('offres') }}" class="bg-orange-500 hover:bg-orange-600 text-white rounded-lg px-4 py-2">Annuler</a>
            </div>
        </div>

        <form action="{{ route('offres.store') }}" method="post" enctype="multipart/form-data" class="px-8">
            @csrf
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-4">
                    <div class="mb-4">
                        <label for="nomoffre" class="block  text-gray-700 text-center font-semibold mb-2">Nom de l'offre</label>
                        <input type="text" name="nomoffre" id="nomoffre" placeholder="Donnez le nom de l'offre" class="w-full px-4 py-2  text-center rounded-lg border-gray-300 @error('nomoffre') border-red-500 @enderror" value="{{ old('nomoffre') }}" required>
                        @error('nomoffre')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="dtdebut" class="block text-gray-700 text-center font-semibold mb-2">Date début</label>
                        <input type="date" name="dtdebut" id="dtdebut" placeholder="Donnez le date début de l'offre" class="w-full  text-center px-4 py-2 rounded-lg border-gray-300 @error('dtdebut') border-red-500 @enderror" value="{{ old('dtdebut') }}" required>
                        @error('dtdebut')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="dtfin" class="block text-gray-700  text-center font-semibold mb-2">Date fin</label>
                        <input type="date" name="dtfin" id="dtfin" placeholder="Donnez le date fin de l'offre" class="w-full  text-center px-4 py-2 rounded-lg border-gray-300 @error('dtfin') border-red-500 @enderror" value="{{ old('dtfin') }}" required>
                        @error('dtfin')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="etat" class="block text-gray-700  text-center font-semibold mb-2">Etat</label>
                        <select class="w-full px-4 py-2  text-center rounded-lg border-gray-300 @error('etat') border-red-500 @enderror" id="etat" name="etat" required>
                            <option value="active" {{ old('etat') == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('etat') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>

                            @error('etat')
                                <p class="invalid-feedback">{{ "L'etat est obligatoire" }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class=" text-gray-700 ml-[220px] text-center font-semibold mb-2">description</label>
                            <textarea name="description" id="description" cols="30" rows="4" placeholder="Donnez la description de l'offre" class="w-full px-4 py-2  text-center rounded-lg border-gray-300 @error('description') is-invalid @enderror" value="{{old('description')}}"></textarea>
                            @error('description')
                                <p class="invalid-feedback">{{ "La description est obligatoire" }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <button class="btn  mt-3 text-white hover:bg-orange-600 bg-orange-500">Enregistrer</button>
            </form>
        </div>
    </x-app-layout>