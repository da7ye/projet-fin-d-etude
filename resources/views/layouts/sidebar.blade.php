

                    {{-- DIR HOUN 'Navigation Links': Offre, Catalogue, reclamation.... --}}



                <div class="navContainer">
                    <a href="{{ route('dashboard') }}" class="nav"><i id="iTag" class="fa-solid fa-house"></i>Dashboard</a>
                    <a href="{{ route('offres') }}" class="nav"><i id="iTag" class="fa-sharp fa-solid fa-pen-to-square"></i>offres</a>
                    <a href="{{ route('catalogue') }}" class="nav"><i id="iTag" class="fa-solid fa-book"></i></i> Catalogues</a>
                    <a href="{{ route('reclamations.index') }}" class="nav"><i id="iTag" class="fa-solid fa-circle-stop"></i>Reclamations</a>
                    <a href="{{ route('statistique') }}" class="nav"><i id="iTag" class="fa-solid fa-water"></i>Statistiques</a>
                    <a href="{{ route('historiques.appel') }}" class="nav"><i id="iTag" class="fa-solid fa-phone-volume"></i> Historiques</a>
                    <a href="{{ route('admin.users.index') }}" class="nav"><i id="iTag" class="fa-solid fa-user"></i> Adminstration</a>




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
