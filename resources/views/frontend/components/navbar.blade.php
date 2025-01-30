<nav class="navbar navbar-dark navbar-expand-lg p-3" style="background-color:black">
    <div class="container">
        <a class="navbar-brand" href="/">Kursus Online</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item p-1">
                    <a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}" aria-current="page"
                        href="/">Learning Path</a>
                </li>
                <li class="nav-item p-1">
                    <a class="nav-link {{ Request::path() == 'langganan' ? 'active' : '' }}" aria-current="page"
                        href="/langganan">Langganan</a>
                </li>
                <li class="nav-item p-1">
                    <a class="nav-link {{ Request::path() == 'program' ? 'active' : '' }}" href="/program">Program</a>
                </li>
                <li class="nav-item p-1">
                    <a class="nav-link {{ Request::path() == 'lainnya' ? 'active' : '' }}" href="/lainnya">Lainnya</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
