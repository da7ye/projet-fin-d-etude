<x-app-layout>
    

    <div class="container px-[200px] py-2">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Ajouter un nouveau Reclamation</div>
                <div class="">
                    <a href=" {{route('reclamations.index')}} " class="bg-orange-500 text-white hover:bg-orange-600 btn">Annuler</a>
                </div>
            </div>

        <form action="{{ route('reclamations.update',$reclamation->id) }}" method="post" enctype="multipart/form-data" class="px-64"> 
            @csrf
            @method('put')
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="contact" class="block text-gray-700 text-center font-semibold mb-2">num contact</label>
                        <input type="number" name="contact" id="contact" placeholder="Donnez le num contact" class="w-full px-4 py-2  text-center rounded-lg border-gray-300 @error('contact') is-invalid @enderror" value="{{old('contact',$reclamation->contact)}}">
                        @error('contact')
                            <p class="invalid-feedback">{{ "Le num contact est obligatoire" }}</p>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="canal" class="block text-gray-700 text-center font-semibold mb-2">Canal</label>
                        <select class="w-full px-4 py-2  text-center rounded-lg border-gray-300 " id="canal" name="canal" required>
                            <option value="Appelle" {{ $reclamation->canal == 'Appelle' ? 'selected' : '' }}>Appelle</option>
                            <option value="Verbale" {{ $reclamation->canal == 'Verbale' ? 'selected' : '' }}>Verbale</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="typereclamation" class="block text-gray-700 text-center font-semibold mb-2">type reclamation</label>
                        <select class="w-full px-4 py-2  text-center rounded-lg border-gray-300 " id="typereclamation" name="typereclamation" required>
                            <option value="SAV" {{ $reclamation->typereclamation == 'SAV' ? 'selected' : '' }}>SAV</option>
                            <option value="RENSEIGNEMENT" {{ $reclamation->typereclamation == 'RENSEIGNEMENT' ? 'selected' : '' }}>RENSEIGNEMENT</option>
                        </select>
                    </div>

                    <div id="wilaya" style="display:none;"  >
                        <label for="wilaya" class="block text-gray-700 text-center font-semibold mb-2">Select Wilaya :</label>
                        <select class="w-full px-4 py-2  text-center rounded-lg border-gray-300" id="wilaya" name="wilaya">
                          <option value="nktt"  {{ $reclamation->wilaya == 'nktt' ? 'selected' : '' }}>NKTT</option>
                          <option value="ndb"  {{ $reclamation->wilaya == 'ndb' ? 'selected' : '' }}>NDB</option>
                          <option value="aioun"  {{ $reclamation->wilaya == 'aipun' ? 'selected' : '' }}>AIOUN</option>
                        </select>
                      </div>
                      
                      <script>
                        var typereclamation = document.getElementById("typereclamation");
                        var wilaya = document.getElementById("wilaya");
                      
                        typereclamation.addEventListener("change", function() {
                          if (typereclamation.value == "SAV") {
                            wilaya.style.display = "block";
                          } else {
                            wilaya.style.display = "none";
                          }
                        });
                      </script>

                    <div class="mb-3">
                        <label for="delai_traitement" class="block text-gray-700 text-center font-semibold mb-2">delai_traitement</label>
                        <input type="number" name="delai_traitement" id="delai_traitement" placeholder="Donnez l'delai_traitement de l'offre" class="w-full px-4 py-2  text-center rounded-lg border-gray-300  @error('delai_traitement') is-invalid @enderror" value="{{old('delai_traitement',$reclamation->delai_traitement)}}">
                        @error('delai_traitement')
                            <p class="invalid-feedback">{{ "le delai_traitement est obligatoire" }}</p>
                        @enderror
                    </div>
                        
            
                    <div class="form-group">
                        <label for="entite_traitement" class="block text-gray-700 text-center font-semibold mb-2">entite de traitement</label>
                        <select class="w-full px-4 py-2  text-center rounded-lg border-gray-300" id="entite_traitement" name="entite_traitement" required>
                            <option value="Centre IN" {{ $reclamation->entite_traitement == 'Centre IN' ? 'selected' : '' }}>Centre IN</option>
                            <option value="Agence TVZ" {{ $reclamation->entite_traitement == 'Agence TVZ' ? 'selected' : '' }}>Agence TVZ</option>
                            <option value="Centre SMSC" {{ $reclamation->entite_traitement == 'Centre SMSC' ? 'selected' : '' }}>Centre SMSC</option>
                            <option value="Agence SKK" {{ $reclamation->entite_traitement == 'Agence SKK' ? 'selected' : '' }}>Agence SKK</option>
                            <option value="Agence ARAFAT" {{ $reclamation->entite_traitement == 'Agence ARAFAT' ? 'selected' : '' }}>Agence ARAFAT</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="etat" class="block text-gray-700 text-center font-semibold mb-2">Etat</label>
                        <select class="w-full px-4 py-2  text-center rounded-lg border-gray-300" id="etat" name="etat" required>
                            <option value="En cours" {{ $reclamation->etat == 'En cours' ? 'selected' : '' }}>En cours</option>
                            <option value="traite" {{ $reclamation->etat == 'traite' ? 'selected' : '' }}>traite</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="text-gray-700 ml-[255px] text-center font-semibold mb-2">description</label>
                        <textarea name="description" id="description" cols="30" rows="4" placeholder="Donnez la description de l'offre" class="w-full px-4 py-2  text-center rounded-lg border-gray-300 @error('description') is-invalid @enderror">{{ $reclamation->description }}</textarea>
                        @error('description')
                            <p class="invalid-feedback">{{ "La description est obligatoire" }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <button class="btn  mt-3 text-white hover:bg-orange-600 bg-orange-500">Enregistrer</button>
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