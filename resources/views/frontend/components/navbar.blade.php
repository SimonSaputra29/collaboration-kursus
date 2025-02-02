<nav class="navbar navbar-expand-lg navbar-dark fixed-top p-3" style="background-color: #212529;">
    <div class="container me-6 ms-6 d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="/"
                style="font-size: 1.8rem; font-weight: bold; letter-spacing: 1px;">Kursus Yasmin</a>
            <ul class="navbar-nav ms-4 mb-2 mb-lg-0 d-flex flex-row">
                <li class="nav-item p-1">
                    <a class="nav-link {{ Request::path() == 'learning-path' ? 'active' : '' }}" href="/learning-path"
                        style="transition: all 0.3s ease;">Learning Path</a>
                </li>
                <li class="nav-item p-1">
                    <a class="nav-link {{ Request::path() == 'langganan' ? 'active' : '' }}" href="/langganan"
                        style="transition: all 0.3s ease;">Langganan</a>
                </li>
                <li class="nav-item p-1">
                    <a class="nav-link {{ Request::path() == 'program' ? 'active' : '' }}" href="/program"
                        style="transition: all 0.3s ease;">Program</a>
                </li>
                <li class="nav-item p-1">
                    <a class="nav-link {{ Request::path() == 'lainnya' ? 'active' : '' }}" href="/lainnya"
                        style="transition: all 0.3s ease;">Lainnya</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">

            @auth
                <div class="dropdown" style="position: relative;">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="background-color: transparent; border: none; color: white; font-weight: bold;">
                        <img src="{{ asset('storage/user/' . Auth::user()->foto) }}" class="rounded-circle"
                            style="width: 40px; height: 40px; border: 2px solid #fff;">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                        style="background-color: #343a40; border-radius: 8px;">
                        <li>
                            <a class="dropdown-item text-white" href="profile" style="font-weight: bold;">Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-white" href="logout_pelanggan"
                                style="font-weight: bold;">Keluar</a>
                        </li>
                    </ul>
                </div>
            @else
                <li class="nav-item d-flex gap-3">
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        style="font-weight: bold; transition: all 0.3s ease; padding: 10px 20px; font-size: 1rem; border-radius: 5px;">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                        style="font-weight: bold; transition: all 0.3s ease; padding: 10px 20px; font-size: 1rem; border-radius: 5px;">
                        Register
                    </button>
                </li>
            @endauth
        </div>
    </div>
</nav>

<style>
    .navbar-nav .nav-link {
        font-weight: bold;
        font-size: 1rem;
        transition: color 0.3s, transform 0.3s;
    }

    .navbar-nav .nav-link:hover {
        color: #fff;
        transform: scale(1.1);
    }

    .navbar-nav .nav-link.active {
        color: #fff !important;
        border-bottom: 2px solid #5c5c5c;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #f39c12;
        color: white;
    }

    .dropdown-menu {
        border-radius: 8px;
    }

    .btn {
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-3px);
    }

    .btn-outline-light:hover {
        background-color: #5c5c5c;
        border-color: white;
        color: white;
    }

    body {
        padding-top: 100px;
    }
</style>
