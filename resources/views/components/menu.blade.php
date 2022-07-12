<nav>
    <a href="/">
        <img class="logotipo" src="{{ asset('images/logotipo.svg') }}" alt="Logotipo Artisan">
    </a>
    <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    <ul class="nav-list">
        <li><a class="nav-link" href="/novels">Projetos</a></li>
        <li><a class="nav-link" href="/contato">Contato</a></li>
        @auth
        <li><a class="default-button" href="/home">Dashboard</a></li>
        @else
        <li><a class="default-button" href="/login">Entrar</a></li>
        @endauth
    </ul>
</nav>