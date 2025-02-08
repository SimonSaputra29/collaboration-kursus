<footer class="bg-dark text-light pt-5 pb-4" style="background: linear-gradient(45deg, #1c1c1c, #333);">
    <div class="container">
        <div class="row">
            <!-- Logo & Deskripsi -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h4 class="fw-bold text-uppercase mb-3">Kurmin Academy</h4>
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

            <!-- Sosial Media & Maps -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="fw-bold text-uppercase mb-3 text-light">Ikuti Kami</h5>
                        <div class="d-flex">
                            @if (!is_null($configuration) && $configuration->youtube)
                                <a href="{{ $configuration->youtube }}" class="text-light me-3 social-icon">
                                    <i class="fab fa-youtube fa-2x"></i>
                                </a>
                            @endif

                            @if (!is_null($configuration) && $configuration->phone_number)
                                <a href="https://wa.me/{{ $configuration->phone_number }}"
                                    class="text-light me-3 social-icon">
                                    <i class="fab fa-whatsapp fa-2x"></i>
                                </a>
                            @endif

                            @if (!is_null($configuration) && $configuration->instagram)
                                <a href="{{ $configuration->instagram }}" class="text-light me-3 social-icon">
                                    <i class="fab fa-instagram fa-2x"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="fw-bold text-uppercase mb-3 text-light">Lokasi Kami</h5>
                        <div class="map-container">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.920785413097!2d-122.0842496846929!3d37.42206597982448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb24e5edb1d85%3A0x4e5d5c9e2d6d2b8!2sGoogleplex!5e0!3m2!1sen!2sus!4v1610663648332!5m2!1sen!2sus"
                                width="100%" height="200" style="border:0;" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="border-secondary">

        <div class="text-center">
            <p class="mb-0 text-light">{{ $configuration->title ?? '' }}</p>
        </div>
    </div>
</footer>