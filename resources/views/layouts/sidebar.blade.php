

                    {{-- DIR HOUN 'Navigation Links': Offre, Catalogue, reclamation.... --}}



                <div class="navContainer">
                    <a href="{{ route('dashboard') }}" class="nav"><div class=""><i id="iTag" class="fa-solid fa-house"></i>Dashboard</div></a>
                    <a href="{{ route('offres') }}" class="nav"><div class=""><i id="iTag" class="fa-sharp fa-solid fa-pen-to-square"></i>Offres</div></a>
                    <a href="{{ route('catalogue') }}" class="nav"><div class=""><i id="iTag" class="fa-solid fa-book"></i>Catalogues</div></a>
                    <a href="{{ route('reclamations.index') }}" class="nav"><div class=""><i id="iTag" class="fa-solid fa-circle-stop"></i>Reclamations</div></a>
                    <a href="{{ route('statistique') }}" class="nav"><div class=""><i id="iTag" class="fa-solid fa-water"></i>Statistiques</div></a>
                    <a href="{{ route('historiques.appel') }}" class="nav"><div class=""><i id="iTag" class="fa-solid fa-phone-volume"></i> Historiques</div></a>
                    <a href="{{ route('admin.users.index') }}" class="nav"><div class=""><i id="iTag" class="fa-solid fa-user"></i> Adminstration</div></a>




                    <script>
                        const activePage = window.location.pathname;
                        const navLinks = document.querySelectorAll('.nav').forEach(link => {
                            if(link.href.includes(`${activePage}`)){
                                link.classList.add('active');
                            }
                        });
                    </script>
                </div>


    {{--CSS: resources/css/app.css --}}
