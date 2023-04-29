<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="p-12 pb-7 pt-7 bg-[#285584] rounded-[11px]">
            <div class="py-4 px-8">
                <a href="/">
                    <x-application-logo class="w-20 h-20 ml-1600 fill-current text-gray-500" />
                </a>
            </div>
        <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Entity Name -->
            <div class="mt-4">
                <label for="entity_id" class="block font-medium text-sm text-gray-700">
                    Entity Name
                </label>
                <select id="entity_id" name="entity_id" class="form-select mt-1 block w-full">
                    @foreach($entities as $entity)
                        <option value="{{ $entity->id }}" {{ old('entity_id') === $entity->id ? 'selected' : '' }}>
                            {{ $entity->name }}
                        </option>
                    @endforeach
                </select>
                @error('entity_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- <!-- Entity Name -->
            <div class="mt-4">
                <x-input-label for="entity_name" :value="__('Entity Name')" />
                <x-forms-select id="entity_name" class="block mt-1 w-full" name="entity_name" required>
                    @foreach($entities as $entity)
                        <option value="{{ $entity->name }}">{{ $entity->name }}</option>
                    @endforeach
                </x-forms-select>
                <x-input-error :messages="$errors->get('entity_name')" class="mt-2" />
            </div> --}}

            <div class="flex items-center  mt-4">
                

                <x-primary-button class="w-full mt-6 py-2 rounded bg-blue-500 text-gray-100 pl-[130px] focus:outline-none">
                    {{ __('Log in') }}
                </x-primary-button>     
            </div>

        </div>
    </form>
</x-guest-layout>
{{-- <a class="underline text-sm text-gray-100 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> --}}