

                    {{-- DIR HOUN 'Navigation Links': Offre, Catalogue, reclamation.... --}}



                <div class="navContainer">
                    <a href="{{ route('dashboard') }}" class="nav"><i id="iTag" class="fa-solid fa-house"></i>&nbsp;Dashboard</a>
                    <a href="{{ route('offres') }}" class="nav"><i id="iTag" class="fa-sharp fa-solid fa-pen-to-square"></i>&nbsp offres</a>
                    <a href="{{ route('catalogue') }}" class="nav"><i id="iTag" class="fa-solid fa-book"></i></i>&nbsp Catalogues</a>
                    <a href="{{ route('reclamations.index') }}" class="nav"><i id="iTag" class="fa-solid fa-circle-stop"></i>&nbspReclamations</a>
                    <a href="{{ route('statistique') }}" class="nav"><i id="iTag" class="fa-solid fa-water"></i>&nbsp Statistiques</a>
                    <a href="{{ route('historiques.appel') }}" class="nav"><i id="iTag" class="fa-solid fa-phone-volume"></i> &nbsp Historiques</a>
                    <a href="#" class="nav"><i id="iTag" class="fa-solid fa-user"></i> &nbsp Adminstration</a>




                    {{-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class=" text-xl p-2 text-white	" > <!--  THE SIDEBAR ELMENTS CSS -->
                        {{ __('Dashboard') }}
                    </x-nav-link> --}}
                </div>


    {{--CSS: resources/css/app.css --}}
