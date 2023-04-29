<x-app-layout>
    {{-- <div class="bg-[#285584] py-3">
        <div class="container">
            <div class="h3 text-center text-gray-100  mb-0">Gestion des Réclamations</div>
        </div>
    </div> --}}

    <div class="container py-4">
        <div class="flex justify-between items-center mb-3">
            <div class="h4 mb-0">Réclamations</div>
            <div class="w-full md:w-1/2 mx-auto p-4">
                <form action="{{ route('reclamations.index') }}" method="GET"  class="flex items-center bg-white border rounded-lg shadow-lg overflow-hidden">
                  <input type="text" name="search" class="bg-gray-100 appearance-none border-none w-full text-gray-800  py-2 px-4 leading-tight focus:outline-none" name="search" placeholder="Rechercher par numero Telephone...">
                  <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">
                    <i class="ti-search mr-2"></i> Search
                  </button>
                </form>
              </div>
            <div class="">
                <a href="{{ route('reclamations.create') }}" class="bg-orange-500    btn btn-primary">Ajouter une Réclamation</a>
            </div>
        </div>

        @if(Session::has('success'))
            <div class="bg-green-100 text-green-800 border border-green-300 rounded-lg p-4 mb-4">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="card border-0 shadow-lg ">
            <div class="card-body">
                <table class="table table-striped">
                        <tr class="">
                            <th class="">Contact</th>
                            <th class="">Canal</th>
                            <th class="">Type de Réclamation</th>
                            <th class="">Date de Saisie</th>
                            <th class="">Délai de Traitement</th>
                            <th class="">Entité de Saisie</th>
                            <th class="">Entité de Traitement</th>
                            <th class="">Saisie Par</th>
                            <th class="">État</th>
                            <th class="">Description</th>
                            <th class="">Action</th>
                        </tr>
                        @if($reclamations->isNotEmpty())
                        @foreach ($reclamations as $reclamation)
                        <tr class="bg-white">
                            <td class="py-4">{{ $reclamation->contact }}</td>
                            <td class="py-4">{{ $reclamation->canal }}</td>
                            <td class="py-4">{{ $reclamation->typereclamation }}</td>
                            <td class="py-4">{{ $reclamation->created_at }}</td>
                            <td class="py-4">{{ $reclamation->delai_traitement }} jours</td>
                            <td class="py-4">Centre Principale</td>
                            <td class="py-4">{{ $reclamation->entite_traitement }}</td>
                            <td class="py-4">{{  $reclamation->user ? $reclamation->user->name : '' }}</td>
                            <td class="py-4">{{ $reclamation->etat }}</td>
                            <td class="py-4">{{ $reclamation->description }}</td>
                            <td class="py-4">
                                <div class="flex justify-center items-center gap-2">
                                    {{-- <a href="{{ route('reclamations.edit',$reclamation->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">mod</a>
                                    <a href="#" onclick="deleteReclamation({{ $reclamation->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mr-2">sup</a> --}}
                                <a href="{{ route('reclamations.edit',$reclamation->id) }}" class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" onclick="deleteReclamation({{ $reclamation->id }})" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
                                
                                <form id="reclamation-edit-action-{{ $reclamation->id }}" action="{{ route('reclamations.destroy' ,$reclamation->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                </form>

                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6">Aucun enregistrement trouvé</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-3">
            {{ $reclamations->links()}}
        </div>
    </div>
</x-app-layout>
<script>
    function deleteReclamation(id){
        if (confirm("Are you sure you want to delete?")){
            document.getElementById('reclamation-edit-action-'+id).submit();
        }
    }
</script>