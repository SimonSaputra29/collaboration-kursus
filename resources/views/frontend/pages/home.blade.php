@extends('frontend.layout.index')

@section('content')
    <style>
        .module-title { overflow: hidden; }
        .carousel-item { height: 400px; }
        .carousel-item img { object-fit: cover; height: 100%; width: 100%; }
        .gradient-overlay { position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.7)); }
        .underline-animation { content: ""; display: block; width: 100%; height: 4px; background: linear-gradient(90deg, #e3e7e5, #000000); position: absolute; bottom: 0; left: 0; transition: transform 0.3s ease-in-out; transform: scaleX(0); }
        h2:hover .underline-animation { transform: scaleX(1); }
        .btn-hover-effect { position: relative; overflow: hidden; transition: all 0.3s ease; }
        .btn-hover-effect::before { content: ""; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.3), transparent); transition: all 0.5s; }
        .btn-hover-effect:hover::before { left: 100%; }
        .btn-hover-effect:hover { transform: translateY(-3px); box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); }
        .module-content { transition: opacity 0.5s ease, transform 0.5s ease; }
        .module-content.d-none { opacity: 0; transform: translateY(10px); }
        .testimonial-item { background: #f8f9fa; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: transform 0.3s ease-in-out; }
        .testimonial-item:hover { transform: scale(1.05); }
        @media (max-width: 768px) {
            #heroImage { max-width: 100%; margin-top: 30px; }
            .d-flex { flex-direction: column; align-items: center; }
            .carousel-inner { max-height: 400px; }
            .carousel-item { height: 300px; }
            .carousel-item img { height: 250px; object-fit: cover; }
        }
    </style>

    <div class="d-flex align-items-center justify-content-center ms-5 pt-5 position-relative" style="min-height: 80vh;">
        <div class="me-4 text-start animate__animated animate__fadeInLeft" data-aos="fade-up">
            <h2 class="fw-bold display-4 text-dark">{{ $hero->title ?? '' }}</h2>
            <p class="text-muted fs-5">{{ $hero->description ?? '' }}</p>
            <a href="{{ route('learning-path') }}" class="btn btn-dark px-5 py-3 rounded-pill shadow-lg">Belajar Sekarang</a>
        </div>
        @if (!empty($hero->image))
            <img id="heroImage" src="{{ asset($hero->image) }}" alt="Belajar Coding" class="img-fluid animate__animated animate__fadeInRight" style="max-width: 40%; height: auto; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);" data-aos="fade-up">
        @endif
    </div>

    <div class="container py-5" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <div id="carouselKeunggulan" class="carousel slide shadow-lg rounded" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($superiorityImage as $index => $img)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ asset($img->image) }}" class="d-block w-100 rounded" alt="Keunggulan {{ $index + 1 }}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselKeunggulan" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselKeunggulan" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold text-muted position-relative d-inline-block pb-2" style="font-size: 2.2rem; letter-spacing: 1px; transition: color 0.3s ease;">
                    {{ $superiority->title ?? '' }}
                    <span class="underline-animation"></span>
                </h2>
                <p class="text-muted" style="font-size: 1.1rem; line-height: 1.6;">{{ $superiority->description ?? '' }}</p>
                <a href="#" class="btn btn-dark mt-3 px-4 py-2 fw-bold shadow-lg btn-hover-effect" data-aos="fade-right">🚀 Mulai Belajar Sekarang</a>
            </div>
        </div>
    </div>

    <div class="whyus text-center py-5" data-aos="fade-right">
        <h2 class="fw-bold text-dark">{{ $why->title ?? 'Kosong' }}</h2>
        <div id="whyUsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <p class="fw-medium text-center">{{ $why->description ?? 'Kosong' }}</p>
            </div>
        </div>
        <div class="row align-items-center">
            <div id="dicoding-features" class="dicoding-feature__header"></div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row text-center">
            @foreach ($whyUs as $item)
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="p-4 border rounded shadow-lg">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" class="mb-3" width="60">
                        <h4 class="fw-bold">{{ $item->title }}</h4>
                        <p class="text-muted">{{ $item->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @php
        $modules = [
            ['id' => 1, 'title' => 'Pemrograman Dasar', 'description' => 'Pelajari konsep dasar pemrograman dan logika komputasi.', 'image' => 'https://source.unsplash.com/random/800x600?coding'],
            ['id' => 2, 'title' => 'Pengembangan Web', 'description' => 'Kuasai HTML, CSS, dan JavaScript untuk membangun aplikasi web modern.', 'image' => 'https://source.unsplash.com/random/800x600?webdevelopment'],
            ['id' => 3, 'title' => 'Data Science', 'description' => 'Pelajari analisis data dan machine learning untuk memecahkan masalah kompleks.', 'image' => 'https://source.unsplash.com/random/800x600?datascience'],
        ];
    @endphp

    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div id="modulCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner rounded-lg shadow-lg">
                        @foreach ($modules as $index => $module)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ $module['image'] }}" class="d-block w-100" alt="{{ $module['title'] }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="fw-bold">{{ $module['title'] }}</h3>
                                </div>
                                <div class="gradient-overlay"></div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#modulCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#modulCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold text-primary position-relative d-inline-block pb-2 mb-4 module-title" style="font-size: 2.5rem; letter-spacing: 1px;">
                    Modul Pembelajaran
                    <span class="underline-animation"></span>
                </h2>
                <div id="moduleDescription" class="mb-4">
                    @foreach ($modules as $index => $module)
                        <div class="module-content {{ $index === 0 ? '' : 'd-none' }}" data-module-id="{{ $module['id'] }}">
                            <h3 class="h4 fw-bold mb-3">{{ $module['title'] }}</h3>
                            <p class="text-muted">{{ $module['description'] }}</p>
                        </div>
                    @endforeach
                </div>
                <a href="#" class="btn btn-primary btn-lg px-4 py-2 fw-bold shadow-lg btn-hover-effect">📚 Lihat Semua Modul</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let carousel = document.querySelector("#modulCarousel");
            let descriptions = document.querySelectorAll(".module-content");

            carousel.addEventListener("slid.bs.carousel", function(event) {
                let activeIndex = event.to;
                descriptions.forEach((desc, index) => {
                    desc.classList.toggle("active", index === activeIndex);
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('modulCarousel');
            const moduleDescription = document.getElementById('moduleDescription');

            carousel.addEventListener('slid.bs.carousel', function(event) {
                const activeIndex = event.to;
                const moduleContents = moduleDescription.querySelectorAll('.module-content');

                moduleContents.forEach((content, index) => {
                    if (index === activeIndex) {
                        content.classList.remove('d-none');
                        setTimeout(() => {
                            content.style.opacity = 1;
                            content.style.transform = 'translateY(0)';
                        }, 50);
                    } else {
                        content.classList.add('d-none');
                        content.style.opacity = 0;
                        content.style.transform = 'translateY(10px)';
                    }
                });
            });
        });
    </script>

    <div class="text-center py-5 bg-dark text-white" data-aos="fade-up">
        <h2 class="fw-bold">Siap untuk Belajar?</h2>
        <p class="lead">Gabung sekarang dan raih masa depan yang lebih cerah!</p>
        <a href="/registerUser" class="btn btn-light fw-bold px-4 py-2 mt-3">Daftar Sekarang</a>
    </div>

    <div class="testimonials text-center py-5" data-aos="fade-up">
        <h2 class="fw-bold text-muted mb-4">Testimoni <span class="text-dark">Pelanggan</span></h2>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial-item mx-auto" style="max-width: 600px;">
                        <p class="fst-italic text-muted">"Kursus ini sangat membantu saya dalam memahami dasar-dasar pemrograman. Mentornya sangat berpengalaman dan kurikulumnya sangat relevan dengan industri saat ini."</p>
                        <h5 class="fw-bold text-dark">- Saii</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-item mx-auto" style="max-width: 600px;">
                        <p class="fst-italic text-muted">"Saya berhasil mendapatkan pekerjaan impian saya sebagai developer berkat kursus ini. Materinya sangat lengkap dan mudah dipahami."</p>
                        <h5 class="fw-bold text-dark">- Amay</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const moduleCarousel = document.getElementById('modulCarousel');
            const moduleDescriptions = document.querySelectorAll('.module-description');
            moduleCarousel.addEventListener('slide.bs.carousel', function(event) {
                moduleDescriptions.forEach((desc, index) => {
                    if (index === event.to) {
                        desc.classList.remove('d-none');
                    } else {
                        desc.classList.add('d-none');
                    }
                });
            });
        });
    </script>
@endsection