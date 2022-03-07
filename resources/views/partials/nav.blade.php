<nav id="menu" class="menu-main-menu-container">
    <ul id="menu-main-menu" class="menu">
        <li class="{{ (request()->is('/')) ? 'current_page_item' : '' }}">
            <a href="/"><span>Accueil</span></a>
        </li>
        <li class="{{ Route::currentRouteNamed('offers') ? 'current_page_item' : '' }}">
            <a href="{{ route('offers') }}"><span>Nos offres et services</span></a>
        </li>
        <li class="{{ Route::currentRouteNamed('contact') ? 'current_page_item' : '' }}">
            <a href="{{ route('contact') }}"><span>A propos</span></a>
        </li>
        <li class="{{ Route::currentRouteNamed('realisation') ? 'current_page_item' : '' }}">
            <a href="{{ route('realisation') }}"><span>Realisations</span></a>
        </li>
        @if (Route::has('login'))
        @auth
        <li>
            <a href="{{ url('/dashboard') }}"><span>Tableau de bord</span></a>
        </li>
        @else
        <li>
            <a href="{{ route('login') }}"><span>Connexion</span></a>
        </li>
        @if (Route::has('register'))
        <li>
            <a href="{{ route('register') }}"><span>S'inscrire</span></a>
        </li>
        @endif
        @endauth
        @endif
    </ul>
</nav>