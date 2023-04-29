<x-app-layout>
    
    
    
    <div class="container py-8 ">
        <div class="d-flex justify-content-between py-8">
            <div class="h4"></div>
            <div class="w-full md:w-1/2 mx-auto ">
                <form action="{{ route('offres') }}" method="GET"  class="flex items-center bg-white border rounded-lg shadow-lg overflow-hidden">
                  <input type="text" name="search" class="bg-gray-100 appearance-none border-none w-full text-gray-800  py-2 px-4 leading-tight focus:outline-none" name="search" placeholder="Rechercher une Offre...">
                  <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">
                    <i class="ti-search mr-2"></i> Search
                  </button>
                </form>
              </div>
            <div class="">
                @can('edit-users')
                <a href="{{ route('offres.create') }}" class="bg-orange-500 btn hover:bg-orange-600">Ajouter une offre</a>
                @endcan
            </div>
        </div>

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="card border-0 shadow-lg ">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Nom d'offre</th>
                        <th>date debut</th>
                        <th>date fin</th>
                        <th>Etat</th>
                        <th>description</th>
                        <th>Action</th>
                    </tr>

                    @if($offres->isNotEmpty())
                    @foreach ($offres as $offre)
                        
                    <tr>
                        <td>{{ $offre->id }}</td>
                        <td>{{ $offre->nomoffre }}</td>
                        <td>{{ $offre->dtdebut }}</td>
                        <td>{{ $offre->dtfin }}</td>
                        <td>{{ $offre->etat }}</td>
                        <td>{{ $offre->description }}</td>
                        <td>
                            <a href="{{ route('offres.edit', $offre->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" onclick="deleteOffer({{ $offre->id }})" class="btn btn-danger btn-sm">Delete</a>

                            <form id="offre-edit-action-{{ $offre->id }}" action="{{ route('offres.destroy' ,$offre->id) }}" method="POST">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                        <tr>
                            <td colspan="6">Record not found!!</td>
                        </tr>
                    @endif

                </table>
            </div>
        </div>
        <div class="mt-3">
            {{ $offres->links() }}
        </div>
    </div>

</x-app-layout>
<script>
    function deleteOffer(id){
        if (confirm("Are you sure you want to delete?")){
            document.getElementById('offre-edit-action-'+id).submit();
        }
    }
</script>