<x-app-layout>
    <div class="bg-green-200 my-3 py-3">
        <div class="container">
            <div class="h3 text-center text-blue">Gestion des Offres</div>
        </div>
    </div>

    <div class="container py-2">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Modifier Offre</div>
            <div class="">
                <a href=" {{route('offres')}} " class="btn btn-primary">Annuler</a>
            </div>
        </div>

        <form action="{{route('offres.update',$offre->id) }}" method="post" enctype="multipart/form-data"> 
            @csrf
            @method('put')
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nomoffre" class="form-label">Nom de l'offre</label>
                        <input type="text" name="nomoffre" id="nomoffre" placeholder="Donnez le nom de l'offre" class="form-control @error('nomoffre') is-invalid @enderror" value="{{old('nomoffre',$offre->nomoffre)}}">
                        @error('nomoffre')
                            <p class="invalid-feedback">{{ "Le nom de l'offre est obligatoire" }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="dtdebut" class="form-label">date debut</label>
                        <input type="date" name="dtdebut" id="dtdebut" placeholder="Donnez le dt debut de l'offre" class="form-control @error('dtdebut') is-invalid @enderror" value="{{old('dtdebut',$offre->dtdebut)}}">
                        @error('dtdebut')
                            <p class="invalid-feedback">{{ "La date est obligatoire" }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="dtfin" class="form-label">Date fin</label>
                        <input type="date" name="dtfin" id="dtfin" placeholder="Donnez le dt fin de l'offre" class="form-control @error('dtfin') is-invalid @enderror" value="{{old('dtfin',$offre->dtfin)}}">
                        @error('dtfin')
                            <p class="invalid-feedback">{{ "La date est obligatoire" }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="etat" class="form-label">Etat</label>
                        <input type="text" name="etat" id="etat" placeholder="Donnez l'etat de l'offre" class="form-control @error('etat') is-invalid @enderror" value="{{old('etat',$offre->etat)}}">
                        @error('etat')
                            <p class="invalid-feedback">{{ "L'etat est obligatoire" }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <textarea name="description" id="description" cols="30" rows="4" placeholder="Donnez la description de l'offre" class="form-control @error('description') is-invalid @enderror" >{{ old('description',$offre->description) }}</textarea>
                        @error('description')
                            <p class="invalid-feedback">{{ "La description est obligatoire" }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <button class="btn btn-primary my-3">Update offre</button>
        </form>
    </div>
</x-app-layout>