<x-app-layout>
    <nav class="bg-[#285584] px-4 py-3">
        <div class="flex justify-between items-center">
            <div class="flex gap-16 ">
                <a href="{{route('historiques.appel')}}"  class="ahis">
                    appel 
                </a>
                <a href="{{route('historiques.sms')}}" class="ahis">
                    sms 
                </a>
                <a href="{{route('historiques.internet')}}" class="ahis">
                    internet 
                </a>
                <a href="{{route('historiques.recharge')}}" class="ahis">
                    recharge
                </a>
                <a href="{{route('historiques.service')}}" class="ahis">
                    service
                </a>
            </div>
        </div>
    </nav>

    @yield('appel-content')
    
    <script>
        const activePage = window.location.pathname;
        const navLinks = document.querySelectorAll('.ahis').forEach(link => {
            if(link.href.includes(`${activePage}`)){
                link.classList.add('active');
            }
        });
    </script>
</x-app-layout>