@extends('frontend.layout.index')

@section('content')
    <style>
        /* ===================== */
        /* HOME PAGE STYLES */
        /* ===================== */
        .underline-animation {
            content: "";
            display: block;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #e3e7e5, #000000);
            position: absolute;
            bottom: 0;
            left: 0;
            transition: transform 0.3s ease-in-out;
            transform: scaleX(0);
        }

        h2:hover .underline-animation {
            transform: scaleX(1);
        }

        /* Efek hover pada tombol */
        .btn-hover-effect {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .btn-hover-effect::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: rgba(255, 255, 255, 0.2);
            transition: all 0.4s ease;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
        }

        .btn-hover-effect:hover::before {
            transform: translate(-50%, -50%) scale(1);
        }

        .testimonial-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }

        .testimonial-item:hover {
            transform: scale(1.05);
        }

        /* Responsif untuk Hero Image */
        @media (max-width: 768px) {
            #heroImage {
                max-width: 100%;
                margin-top: 30px;
            }

            .d-flex {
                flex-direction: column;
                align-items: center;
            }
        }

        /* Carousel untuk ukuran kecil */
        @media (max-width: 768px) {
            .carousel-inner {
                max-height: 400px;
            }

            .carousel-item img {
                height: 250px;
                object-fit: cover;
            }
        }
    </style>

    <div class="d-flex align-items-center justify-content-center ms-5 pt-5 position-relative" style="min-height: 80vh;">
        <div class="me-4 text-start animate__animated animate__fadeInLeft" data-aos="fade-up">
            <h2 class="fw-bold display-4 text-dark">{{ $hero->title ?? '' }}</h2>
            <p class="text-muted fs-5">{{ $hero->description ?? '' }}</p>
            <button id="learnButton" class="btn btn-dark px-5 py-3 rounded-pill shadow-lg">Belajar Sekarang</button>
        </div>
        <img id="heroImage" src="{{ asset($hero->image ?? '') }}" alt="Belajar Coding"
            class="img-fluid animate__animated animate__fadeInRight"
            style="max-width: 40%; height: auto; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);"
            data-aos="fade-up">
    </div>

    <div class="container py-5" data-aos="fade-up">
        <div class="row align-items-center">
            <!-- Carousel Keunggulan -->
            <div class="col-md-6 text-center">
                <div id="carouselKeunggulan" class="carousel slide shadow-lg rounded" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($superiorityImage as $index => $img)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ asset($img->image) }}" class="d-block w-100 rounded"
                                    alt="Keunggulan {{ $index + 1 }}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselKeunggulan"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselKeunggulan"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>

            <!-- Deskripsi Keunggulan -->
            <div class="col-md-6">
                <h2 class="fw-bold text-muted position-relative d-inline-block pb-2"
                    style="font-size: 2.2rem; letter-spacing: 1px; transition: color 0.3s ease;">
                    Beberapa Keunggulan <span class="text-dark">Kami</span>
                    <span class="underline-animation"></span>
                </h2>
                <p class="text-muted" style="font-size: 1.1rem; line-height: 1.6;">
                    Saatnya bijak memilih sumber belajar! Dengan materi berkualitas tinggi dan
                    <strong class="text-dark">reviewer profesional</strong>, Kurmin Academy siap membantu Anda dengan
                    umpan balik yang membangun, memastikan setiap kode yang Anda tulis mencapai
                    <span class="text-dark fw-bold">kesempurnaan</span>.
                </p>
                <a href="#" class="btn btn-dark mt-3 px-4 py-2 fw-bold shadow-lg btn-hover-effect"
                    data-aos="fade-right">
                    🚀 Mulai Belajar Sekarang
                </a>
            </div>
        </div>
    </div>

    <div class="whyus text-center py-5" data-aos="fade-right">
        <h2 class="fw-bold text-dark">Mengapa Kurmin Academy?</h2>
        <div id="whyUsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <p class="fw-medium text-center">
                    Saatnya bijak memilih sumber belajar. Tak hanya materi yang terjamin, <br>
                    Kurmin Academy juga memiliki reviewer profesional yang akan mengulas kode Anda.
                </p>
            </div>
        </div>
        <div class="row align-items-center">
            <div id="dicoding-features" class="dicoding-feature__header"></div>
        </div>
    </div>

    <!-- Fitur Unggulan -->
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-md-4" data-aos="zoom-in">
                <div class="p-4 border rounded shadow-lg">
                    <img src="assets/icons/certificate.svg" class="mb-3" width="60">
                    <h4 class="fw-bold">Sertifikat Resmi</h4>
                    <p class="text-muted">Dapatkan sertifikat resmi yang diakui industri setelah menyelesaikan kursus.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="p-4 border rounded shadow-lg">
                    <img src="assets/icons/mentor.svg" class="mb-3" width="60">
                    <h4 class="fw-bold">Mentor Berpengalaman</h4>
                    <p class="text-muted">Belajar langsung dari para mentor yang telah sukses di industri teknologi.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="p-4 border rounded shadow-lg">
                    <img src="assets/icons/community.svg" class="mb-3" width="60">
                    <h4 class="fw-bold">Komunitas Aktif</h4>
                    <p class="text-muted">Terhubung dengan komunitas belajar yang mendukung perkembangan karier Anda.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call To Action -->
    <div class="text-center py-5 bg-dark text-white" data-aos="fade-up">
        <h2 class="fw-bold">Siap untuk Belajar?</h2>
        <p class="lead">Gabung sekarang dan raih masa depan yang lebih cerah!</p>
        <a href="daftar.html" class="btn btn-light fw-bold px-4 py-2 mt-3">Daftar Sekarang</a>
    </div>

    <div class="testimonials text-center py-5" data-aos="fade-up">
        <h2 class="fw-bold text-muted mb-4">Testimoni <span class="text-dark">Pelanggan</span></h2>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial-item mx-auto" style="max-width: 600px;">
                        <p class="fst-italic text-muted">
                            "Kursus ini sangat membantu saya dalam memahami dasar-dasar pemrograman. Mentornya sangat
                            berpengalaman dan kurikulumnya sangat relevan dengan industri saat ini."
                        </p>
                        <h5 class="fw-bold text-dark">- Saii</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-item mx-auto" style="max-width: 600px;">
                        <p class="fst-italic text-muted">
                            "Saya berhasil mendapatkan pekerjaan impian saya sebagai developer berkat kursus ini. Materinya
                            sangat lengkap dan mudah dipahami."
                        </p>
                        <h5 class="fw-bold text-dark">- Amay</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
