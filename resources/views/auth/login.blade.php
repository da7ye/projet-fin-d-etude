<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 " :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="px-12 pb-7 pt-7 bg-[#285584] rounded-[11px]">
            <div class="py-4 px-8">
                <a href="/">
                    <x-application-logo class="w-20 h-20 ml-1600 fill-current text-gray-500" />
                </a>
            </div>
            <div class="w-full mb-2">
               <div class=" justify-center">        
        <!-- Email Address -->
                    <x-input-label for="email" :value="__('Email')" class=""/>
                    <x-text-input id="email" class="px-4  w-[100%] border rounded py-2 text-gray-700 focus:outline-none items-center" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>

        <!-- Password -->
            <div class="w-full mb-2">
                <div class=" justify-center">     
                    <x-input-label for="password" :value="__('Password')"  class=""/>

                    <x-text-input id="password" class="px-4  w-[100%] border rounded py-2 text-gray-700 focus:outline-none items-center"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>

        
            <div class="flex items-center justify-end mt-4">
            
                <x-primary-button class="w-full mt-6 py-2 rounded bg-orange-600 text-gray-100 pl-[130px] focus:outline-none">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
            {{-- @if (Route::has('password.request'))
                <a class="text-sm text-opacity-100 float-right mt-6 mb-4 hover:text-blue-600 underline" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-100">{{ __('Remember me') }}</span>
                </label>
            </div>
        </div>
        
    </form>
</x-guest-layout>
