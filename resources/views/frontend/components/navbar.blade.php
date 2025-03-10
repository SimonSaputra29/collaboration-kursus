<nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top p-3" style="background-color: #fdfbfb;">
    <div class="container-fluid d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <a class="navbar-brand me-3" href="/" style="font-size: 1.8rem; font-weight: bold; letter-spacing: 1px;">
                <img src="{{ asset($configuration->logo ?? '') }}" alt="Kursus Yasmin" class="logo-img"
                    style="height: 3rem;">
            </a>

            <!-- Search Form -->
            <form class="d-flex" action="/search" method="GET">
                <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search" name="q"
                    style="border-radius: 8px;">
                <button class="btn btn-dark" type="submit" style="border-radius: 8px; transition: all 0.3s ease;">
                    <i class="fas fa-search"></i>
                </button>
            </form>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-4 mb-2 mb-lg-0 d-flex flex-column flex-lg-row">
                    <li class="nav-item p-1">
                        <a class="nav-link {{ Request::path() == 'learning-path' ? 'active' : '' }}"
                            href="/learning-path" style="transition: all 0.3s ease;">Learning
                            Path</a>
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
                <div class="dropdown">
                    <button class="btn btn-dark px-4 py-2 fw-bold shadow-sm dropdown-toggle"
                        style="border-radius: 8px; transition: all 0.3s ease;" type="button" id="userDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <li>
                            <form action="{{ route('logoutUser') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">Keluar</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <div class="d-flex align-items-center">
                    <a href="/loginUser" class="btn btn-outline-dark me-2 px-4 py-2 fw-bold shadow-sm"
                        style="border-radius: 8px; transition: all 0.3s ease;">
                        Masuk
                    </a>
                    <a href="/registerUser" class="btn btn-dark px-4 py-2 fw-bold shadow-sm"
                        style="border-radius: 8px; transition: all 0.3s ease;">
                        Daftar
                    </a>
                </div>
            @endauth
        </div>

    </div>
</nav>

<!-- Tambahkan Font Awesome untuk ikon search -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


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

        document.addEventListener("scroll", function() {
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    });
</script>

<style>
    /* ===================== */
    /* NAVBAR STYLES */
    /* ===================== */
    .navbar-nav .nav-link {
        font-weight: bold;
        font-size: 1rem;
        transition: color 0.3s, transform 0.3s;
    }

    .navbar-nav .nav-link:hover {
        color: #000;
        transform: scale(1.1);
    }

    .navbar-nav .nav-link.active {
        color: #000 !important;
        border-bottom: 2px solid #5c5c5c;
    }

    /* Dropdown */
    .dropdown-menu {
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: black;
        color: white;
    }

    /* Navbar transition */
    #navbar {
        transition: top 0.5s ease;
    }

    /* ===================== */
    /* RESPONSIVE STYLES */
    /* ===================== */

    /* Responsif untuk Navbar */
    @media (max-width: 767px) {
        .navbar-nav .nav-link {
            font-size: 0.9rem;
        }

        .navbar-nav {
            margin-top: 10px;
        }

        .navbar-toggler {
            border: none;
        }

        .dropdown-menu {
            background-color: black;
        }
    }

    /* Logo Styles */
    .logo-img {
        height: 3rem;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .logo-img:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    /* Button Styles */
    .btn {
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-3px);
    }

    .btn-outline-dark:hover {
        background-color: #343a40;
        border-color: #343a40;
        color: #fff;
    }

    /* Dropdown Menu */
    .dropdown-menu {
        background-color: #ffffff;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #495057;
        color: #fff;
    }

    /* Smooth Scroll */
    html {
        scroll-behavior: smooth;
    }

    /* Navbar Shadow on Scroll */
    .navbar.scrolled {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
</style>
