<nav>
    <div class="navbar">
        <div class="logo">
            <img src="{{asset('img/logo.png')}}" alt="">
        </div>
        <div class="onglets">
            <a href="{{ route('home') }}"><i class="fa-solid fa-house"></i>Accueil</a>
            <a href="{{ route('product.show') }}"><i class="fa-solid fa-cart-shopping"></i>Produits</a>
            <a href="#"><i class="fa-solid fa-truck-fast"></i>Destockage</a>
            <a href="#"><i class="fa-solid fa-envelope"></i>Contact</a>
            <a href="#"><i class="fa-solid fa-plus"></i>Nouvauté</a>
            <!-- Si il est connecter afficher mon compte sinon se connecter login-->
        </div>

        <div class="registration">
            @if(Auth::check())
                <div class="account">
                    <h1>   {{Auth()->user()->name }}</h1>
                    <a href="">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </div>
            @else
                <div class="auth-links">
                    <a href="{{ route('register') }}">S'inscrire</a>
                    <a href="{{ route('login') }}">Se connecter</a>
                </div>
            @endif
        </div>
    </div>
</nav>
