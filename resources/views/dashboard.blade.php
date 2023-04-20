<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 text-5xl">
                    {{ __("Welcome to MOOV MAURITEL Administration pannel") }}
                </div>
            </div>
        </div>
        <div class="mx-[500px] my-[130px]   ">
            <img src="{{asset('/logo/Mauritel.jpg')}}" class="sm:rounded-xl ">
        </div>
    </div>
</x-app-layout>
