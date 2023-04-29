<x-app-layout>
    <div class="bg-orange-500 my-3 py-3">
        <div class="container">
            <div class="h3 text-center text-blue">Gestion des Reclamation</div>
        </div>
    </div>

    <div class="container py-2">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">modifiez Reclamation</div>
            <div class="">
                <a href=" {{route('reclamations.index')}} " class="btn btn-primary">Annuler</a>
            </div>
        </div>

        <form action="{{ route('reclamations.update',$reclamation->id) }}" method="post" enctype="multipart/form-data"> 
            @csrf
            @method('put')
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="contact" class="form-label">num contact</label>
                        <input type="number" name="contact" id="contact" placeholder="Donnez le num contact" class="form-control @error('contact') is-invalid @enderror" value="{{old('contact',$reclamation->contact)}}">
                        @error('contact')
                            <p class="invalid-feedback">{{ "Le num contact est obligatoire" }}</p>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="canal">Canal</label>
                        <select class="form-control mb-3" id="canal" name="canal" required>
                            <option value="Appelle" {{ $reclamation->canal == 'Appelle' ? 'selected' : '' }}>Appelle</option>
                            <option value="Verbale" {{ $reclamation->canal == 'Verbale' ? 'selected' : '' }}>Verbale</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="typereclamation">type reclamation</label>
                        <select class="form-control mb-3" id="typereclamation" name="typereclamation" required>
                            <option value="SAV" {{ $reclamation->typereclamation == 'SAV' ? 'selected' : '' }}>SAV</option>
                            <option value="RENSEIGNEMENT" {{ $reclamation->typereclamation == 'RENSEIGNEMENT' ? 'selected' : '' }}>RENSEIGNEMENT</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="delai_traitement" class="form-label">delai_traitement</label>
                        <input type="number" name="delai_traitement" id="delai_traitement" placeholder="Donnez l'delai_traitement de l'offre" class="form-control @error('delai_traitement') is-invalid @enderror" value="{{old('delai_traitement',$reclamation->delai_traitement)}}">
                        @error('delai_traitement')
                            <p class="invalid-feedback">{{ "le delai_traitement est obligatoire" }}</p>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="entite_saisie">entite saisie</label>
                        <select class="form-control mb-3" id="entite_saisie" name="entite_saisie" required>
                            <option value="Centre IN" {{ $reclamation->entite_saisie == 'Centre IN' ? 'selected' : '' }}>Centre IN</option>
                            <option value="Agence TVZ" {{ $reclamation->entite_saisie == 'Agence TVZ' ? 'selected' : '' }}>Agence TVZ</option>
                            <option value="Centre SMSC" {{ $reclamation->entite_saisie == 'Centre SMSC' ? 'selected' : '' }}>Centre SMSC</option>
                            <option value="Agence SKK" {{ $reclamation->entite_saisie == 'Agence SKK' ? 'selected' : '' }}>Agence SKK</option>
                            <option value="Agence ARAFAT" {{ $reclamation->entite_saisie == 'Agence ARAFAT' ? 'selected' : '' }}>Agence ARAFAT</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="entite_traitement">entite de traitement</label>
                        <select class="form-control mb-3" id="entite_traitement" name="entite_traitement" required>
                            <option value="Centre IN" {{ $reclamation->entite_traitement == 'Centre IN' ? 'selected' : '' }}>Centre IN</option>
                            <option value="Agence TVZ" {{ $reclamation->entite_traitement == 'Agence TVZ' ? 'selected' : '' }}>Agence TVZ</option>
                            <option value="Centre SMSC" {{ $reclamation->entite_traitement == 'Centre SMSC' ? 'selected' : '' }}>Centre SMSC</option>
                            <option value="Agence SKK" {{ $reclamation->entite_traitement == 'Agence SKK' ? 'selected' : '' }}>Agence SKK</option>
                            <option value="Agence ARAFAT" {{ $reclamation->entite_traitement == 'Agence ARAFAT' ? 'selected' : '' }}>Agence ARAFAT</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="saisie_par" class="form-label">saisie par</label>
                        <input type="text" name="saisie_par" id="saisie_par" placeholder="saisie par" class="form-control @error('saisie_par') is-invalid @enderror" value="{{old('saisie_par',$reclamation->saisie_par)}}">
                        @error('saisie_par')
                            <p class="invalid-feedback">{{ "Le nom de saisie est obligatoire" }}</p>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="etat">Etat</label>
                        <select class="form-control mb-3" id="etat" name="etat" required>
                            <option value="En cours" {{ $reclamation->etat == 'En cours' ? 'selected' : '' }}>En cours</option>
                            <option value="traite" {{ $reclamation->etat == 'traite' ? 'selected' : '' }}>traite</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <textarea name="description" id="description" cols="30" rows="4" placeholder="Donnez la description de l'offre" class="form-control @error('description') is-invalid @enderror">{{ $reclamation->description }}</textarea>
                        @error('description')
                            <p class="invalid-feedback">{{ "La description est obligatoire" }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mt-3">Enregistrer</button>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>

</x-app-layout>