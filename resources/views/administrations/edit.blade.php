<x-app-layout>
    <div class="container">
        <div class="row my-32 justify-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">Modifiez <strong> {{ $user->name }} </strong></div>

                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <form action="{{ route('admin.users.update', $user) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-bold mb-2">Nom</label>
                                <input id="name" type="text" name="name" value="{{ old('name') ?? $user->name }}" required autofocus autocomplete="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                    
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                                <input id="email" type="email" name="email" value="{{ old('email') ?? $user->email }}" required autofocus autocomplete="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                    
                            <div class="mb-4 flex flex-wrap">
                                <label class="block text-gray-700 font-bold mb-2 w-full">Roles</label>
                                @foreach ($roles as $role)
                                  <div class="flex items-center ml-64 mb-2">
                                    <input type="radio" name="roles[]" class="h-4 w-4 text-blue-600 border-gray-300 rounded-md focus:ring-blue-400" value="{{ $role->id }}" id="{{ $role->id }}" @if ($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                    <label for="{{ $role->id }}" class="ml-2 block text-gray-700">{{ $role->name }}</label>
                                  </div>
                                @endforeach
                              </div>
                                
                            <div class="mb-4">
                    
                            <div class="flex items-center justify-between">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 w-[100%] rounded focus:outline-none focus:shadow-outline">
                                    Modifies
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
