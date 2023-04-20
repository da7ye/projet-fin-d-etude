<x-app-layout>
    <nav class="bg-gray-800 px-4 py-3">
        <div class="flex justify-between items-center">
            <div class="flex gap-16">
                <a href="{{route('historiques.appel')}}" class="bg-gray-900 text-white px-24 py-3 rounded-md">
                    appel 
                </a>
                <a href="{{route('historiques.sms')}}" class="text-white px-24 py-3 rounded-md hover:bg-white/5">
                    sms 
                </a>
                <a href="{{route('historiques.internet')}}" class="text-white px-24 py-3 rounded-md hover:bg-white/5">
                    internet 
                </a>
                <a href="{{route('historiques.recharge')}}" class="text-white px-24 py-3 rounded-md hover:bg-white/5">
                    recharge
                </a>
                <a href="{{route('historiques.service')}}" class="text-white px-24 py-3 rounded-md hover:bg-white/5">
                    service
                </a>
            </div>
        </div>
    </nav>

    @yield('appel-content')
    
</x-app-layout>