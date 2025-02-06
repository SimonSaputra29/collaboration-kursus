<footer class="bg-dark text-light pt-5 pb-4" style="background: linear-gradient(45deg, #1c1c1c, #333);">
    <div class="container">
        <div class="row">
            <!-- Logo & Deskripsi -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h4 class="fw-bold text-uppercase mb-3 text-">Kurmin Academy</h4>
                <p class="text-light">
                    Belajar pemrograman dan bangun karir developer Anda bersama mentor berpengalaman. Kami siap membantu
                    Anda meraih impian di dunia teknologi.
                </p>
                <div>
                    <p class="text-light">
                        <i class="fas fa-map-marker-alt me-2"></i> {{ $configuration->address ?? '' }}
                    </p>
                    <p class="text-light">
                        <i class="fas fa-envelope me-2"></i>{{ $configuration->email_address ?? '' }}
                    </p>
                    <p class="text-light">
                        <i class="fas fa-phone me-2"></i>{{ $configuration->phone_number ?? '' }}
                    </p>
                </div>
            </div>

            <!-- Navigasi -->
            <div class="col-lg-2 col-md-3 mb-4">
                <h5 class="fw-bold text-uppercase mb-3 text-light">Navigasi</h5>
                <ul class="list-unstyled">
                    <li><a href="/" class="text-light text-decoration-none footer-link">Home</a></li>
                    <li><a href="/learning-path" class="text-light text-decoration-none footer-link">Learning Path</a>
                    </li>
                    <li><a href="/langganan" class="text-light text-decoration-none footer-link">Langganan</a></li>
                    <li><a href="/program" class="text-light text-decoration-none footer-link">Program</a></li>
                </ul>
            </div>

            <!-- Sosial Media -->
            <div class="col-lg-3 col-md-3 mb-4">
                <h5 class="fw-bold text-uppercase mb-3 text-light">Ikuti Kami</h5>
                <div class="d-flex">
                    @if($configuration->youtube)
                    <a href="{{ $configuration->youtube }}" class="text-light me-3 social-icon">
                        <i class="fab fa-youtube fa-2x"></i>
                    </a>
                @endif

                @if($configuration->phone_number)
                    <a href="https://wa.me/{{ $configuration->phone_number }}" class="text-light me-3 social-icon">
                        <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
                @endif

                @if($configuration->instagram)
                    <a href="{{ $configuration->instagram }}" class="text-light me-3 social-icon">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                @endif
                </div>
            </div>
        </div>

        <hr class="border-secondary">

        <div class="text-center">
            <p class="mb-0 text-light">{{ $configuration->title ?? '' }}</p>
        </div>
    </div>
</footer>
