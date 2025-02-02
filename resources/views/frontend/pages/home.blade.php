@extends('frontend.layout.index')

@section('content')
    <div class="d-flex align-items-center justify-content-center ms-5 pt-5 position-relative" style="min-height: 80vh;">
        <div class="me-4 text-start animate__animated animate__fadeInLeft" data-aos="fade-up">
            <h2 class="fw-bold display-4 text-dark">Bangun Karirmu Sebagai <br> Developer Profesional</h2>
            <p class="text-muted fs-5">Belajar dari nol hingga menjadi developer profesional dengan kurikulum terkini dan
                mentor berpengalaman. Tingkatkan keterampilan Anda, raih impian karir, dan menjadi bagian dari komunitas
                teknologi yang berkembang pesat.</p>
            <button id="learnButton" class="btn btn-dark px-5 py-3 rounded-pill shadow-lg">Belajar Sekarang</button>
        </div>
        <img id="heroImage" src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-hero.png"
            alt="Belajar Coding" class="img-fluid animate__animated animate__fadeInRight"
            style="max-width: 40%; height: auto; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);"
            data-aos="fade-up">
    </div>

    <div class="container py-5" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <div id="carouselKeunggulan" class="carousel slide shadow-lg rounded" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/logoyasmin.jpg') }}" class="d-block w-100 rounded"
                                alt="Keunggulan 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/logoyasmin.jpg') }}" class="d-block w-100 rounded"
                                alt="Keunggulan 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/logoyasmin-removebg-preview.png') }}" class="d-block w-100 rounded"
                                alt="Keunggulan 3">
                        </div>
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

    <div class="testimonials text-center py-5" data-aos="fade-up">
        <h2 class="fw-bold text-primary mb-4">Testimoni <span class="text-success">Pelanggan</span></h2>
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
                        <h5 class="fw-bold text-dark">- Amir</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
