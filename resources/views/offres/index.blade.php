<x-app-layout>
    <div class="bg-orange-500 my-3 py-3">
        <div class="container">
            <div class="h3 text-center text-blue">Gestion des Offres</div>
        </div>
    </div>

    <div class="container py-2">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Offres</div>
            <div class="">
                <a href="{{ route('offres.create') }}" class="btn btn-primary">Ajouter un offre</a>
            </div>
        </div>

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="card border-0 shadow-lg">
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