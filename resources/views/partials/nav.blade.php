<nav id="menu" class="menu-main-menu-container">
    <ul id="menu-main-menu" class="menu">
        <li class="{{ (request()->is('/')) ? 'current_page_item' : '' }}">
            <a href="/"><span>Accueil</span></a>
        </li>
        <li class="{{ Route::currentRouteNamed('offers') ? 'current_page_item' : '' }}">
            <!-- <a href="{{ route('offers') }}"><span>Nos offres et services</span></a> -->
            <a href="#"><span>Nos offres et services</span></a>
        </li>
        <li class="{{ Route::currentRouteNamed('who_we_are') ? 'current_page_item' : '' }}">
            <a href="#"><span>A propos</span></a>
        </li>
        <li class="{{ Route::currentRouteNamed('realisation') ? 'current_page_item' : '' }}">
            <a href="{{ route('realisation') }}"><span>Realisations</span></a>
        </li>
        <li class="{{ Route::currentRouteNamed('contact') ? 'current_page_item' : '' }}">
            <a href="{{ route('login') }}"><span>Se connecter</span></a>
        </li>
    </ul>
</nav>