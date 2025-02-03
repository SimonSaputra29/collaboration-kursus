<nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top p-3" style="background-color: #fdfbfb;">
    <div class="container-fluid d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="/" style="font-size: 1.8rem; font-weight: bold; letter-spacing: 1px;">
                <img src="{{ asset('images/logoyasmin.jpg') }}" alt="Kursus Yasmin" class="logo-img"
                    style="height: 3rem;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-4 mb-2 mb-lg-0 d-flex flex-column flex-lg-row">
                    <li class="nav-item p-1">
                        <a class="nav-link {{ Request::path() == 'learning-path' ? 'active' : '' }}"
                            href="/learning-path" style="transition: all 0.3s ease;">Learning Path</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link {{ Request::path() == 'langganan' ? 'active' : '' }}" href="/langganan"
                            style="transition: all 0.3s ease;">Langganan</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link {{ Request::path() == 'program' ? 'active' : '' }}" href="/program"
                            style="transition: all 0.3s ease;">Program</a>
                    </li>
                    <!-- Dropdown "Lainnya" -->
                    <li class="nav-item dropdown p-1">
                        <a class="nav-link dropdown-toggle" href="#" id="lainnyaDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="transition: all 0.3s ease;">
                            Lainnya
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="lainnyaDropdown">
                            <li><a class="dropdown-item" href="/tentang">Tentang Kami</a></li>
                            <li><a class="dropdown-item" href="/faq">FAQ</a></li>
                            <li><a class="dropdown-item" href="/kontak">Kontak</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="d-flex align-items-center">
            @auth
                <div class="dropdown" style="position: relative;">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="background-color: transparent; border: none; color: black; font-weight: bold;">
                        <img src="{{ asset('storage/user/' . Auth::user()->foto) }}" class="rounded-circle"
                            style="width: 40px; height: 40px; border: 2px solid #000;">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                        style="background-color: #343a40; border-radius: 8px;">
                        <li><a class="dropdown-item text-white" href="profile" style="font-weight: bold;">Profile</a></li>
                        <li><a class="dropdown-item text-white" href="logout_pelanggan"
                                style="font-weight: bold;">Keluar</a></li>
                    </ul>
                </div>
            @else
                <li class="nav-item d-flex gap-3">
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        style="font-weight: bold; transition: all 0.3s ease; padding: 10px 20px; font-size: 1rem; border-radius: 5px;">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                        style="font-weight: bold; transition: all 0.3s ease; padding: 10px 20px; font-size: 1rem; border-radius: 5px;">
                        Register
                    </button>
                </li>
            @endauth
        </div>
    </div>
</nav>

<!-- Scroll Detection Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var navbar = document.getElementById("navbar");
        var lastScrollTop = 0;

        window.addEventListener("scroll", function() {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop) {
                // Downscroll
                navbar.style.top = "-80px"; // Adjust based on navbar height
            } else {
                // Upscroll
                navbar.style.top = "0";
            }
            lastScrollTop = scrollTop;
        });
    });
</script>
