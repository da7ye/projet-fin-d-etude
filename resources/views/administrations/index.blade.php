<x-app-layout>
    <div class="container">
        <div class="row my-32 justify-center">
            <div class="col-md-11">
                <div class="d-flex justify-content-between py-3">
                    <div class="card-header">Liste des utilisateurs</div>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="w-64 btn btn-primary">Ajoutez nouveau utilisateur</a>
                    @endif
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">nom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">entite</th>
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
                                    <th>
                                        @foreach ($entities as $entity)
                                            @if ($entity->id == $user->entity_id)
                                                {{ $entity->name }}
                                            @endif
                                        @endforeach
                                    </th>                        
                                   <td>{{ implode(',',$user->roles()->get()->pluck('name')->toArray()) }}</td>
                                    
                                    <th>
                                        @can('edit-users')
                                        <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                        @endcan
                                        @can('delete-users')
                                        <form action="{{route('admin.users.destroy', $user->id)}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
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
