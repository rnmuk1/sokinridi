<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container container-nav">
            <a class="navbar-brand" href="{{ route('home') }}"> <img src="{{ asset('images/logo-red.png') }}" alt=""></a>

            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Vente</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> Réparation</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> Services</a>
                    </li>


                </ul>



            </div>

            <div class="hamburger-menu">

                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>

            </div>


            <hr>

            <ul class="nav-list">
                <li class="nav-item-list">
                    <a href="{{ route('home') }}" class="nav-link2">Accueil</a>

                </li>

                <li class="nav-item-list">
                    <a href="#" class="nav-link2">A propos</a>

                </li>

                <li class="nav-item-list">
                    <a href="/contact" class="nav-link2">Arrivage</a>

                </li>

                <li class="nav-item-list">
                    <a href="/contact" class="nav-link2">Contactez-nous</a>

                </li>
            </ul>


        </div>
    </nav>
</header>
