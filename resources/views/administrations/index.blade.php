<x-app-layout>
    <div class="container">
        <div class="row my-32 justify-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">Liste des utilisateurs</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">nom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <th>{{ $user->name }}</th>
                                    <th>{{ $user->email }}</th>
                                    <td>{{ implode(',',$user->roles()->get()->pluck('name')->toArray()) }}</td>
                                    
                                    <th>
                                        @can('edit-users')
                                        <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        @endcan
                                        @can('delete-users')
                                        <form action="{{route('admin.users.destroy', $user->id)}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                        </form>
                                        @endcan                            
                                    </th>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
