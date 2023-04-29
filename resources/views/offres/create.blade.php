    <x-app-layout>
        
    
        <div class="container py-2">
            <div class="d-flex justify-content-between py-3">
                <div class="h4">Ajouter un nouveau offre</div>
                <div class="">
                    <a href=" {{route('offres')}} " class="btn btn text-white bg-orange-500">Annuler</a>
                </div>
            </div>

            <form action="{{route('offres.store') }}" method="post" enctype="multipart/form-data" class="px-64"> 
                @csrf
                <div class="card border-0 shadow-lg">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nomoffre" class="form-label">Nom de l'offre</label>
                            <input type="text" name="nomoffre" id="nomoffre" placeholder="Donnez le nom de l'offre" class="form-control @error('nomoffre') is-invalid @enderror" value="{{old('nomoffre')}}">
                            @error('nomoffre')
                                <p class="invalid-feedback">{{ "Le nom de l'offre est obligatoire" }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="dtdebut" class="form-label">date debut</label>
                            <input type="date" name="dtdebut" id="dtdebut" placeholder="Donnez le dt debut de l'offre" class="form-control @error('dtdebut') is-invalid @enderror" value="{{old('dtdebut')}}">
                            @error('dtdebut')
                                <p class="invalid-feedback">{{ "La date est obligatoire" }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="dtfin" class="form-label">Date fin</label>
                            <input type="date" name="dtfin" id="dtfin" placeholder="Donnez le dt fin de l'offre" class="form-control @error('dtfin') is-invalid @enderror" value="{{old('dtfin')}}">
                            @error('dtfin')
                                <p class="invalid-feedback">{{ "La date est obligatoire" }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="etat" class="form-label">Etat</label>
                            <input type="text" name="etat" id="etat" placeholder="Donnez l'etat de l'offre" class="form-control @error('etat') is-invalid @enderror" value="{{old('etat')}}">
                            @error('etat')
                                <p class="invalid-feedback">{{ "L'etat est obligatoire" }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">description</label>
                            <textarea name="description" id="description" cols="30" rows="4" placeholder="Donnez la description de l'offre" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}"></textarea>
                            @error('description')
                                <p class="invalid-feedback">{{ "La description est obligatoire" }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <button class="btn btn mt-3 text-white bg-orange-500">Enregistrer</button>
            </form>
        </div>
    </x-app-layout>