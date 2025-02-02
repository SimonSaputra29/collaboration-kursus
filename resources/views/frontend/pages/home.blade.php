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
                <img src="{{ asset('images/w') }}" alt="Image Description" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2 class="" style="font-size: 2rem; letter-spacing: 1px; transition: color 0.3s ease;">
                    Beberapa Keunggulan Kursus Yasmin
                </h2>
                <p>Saatnya bijak memilih sumber belajar. Tak hanya materi yang terjamin,
                    Dicoding Academy juga memiliki reviewer profesional yang akan mengulas kode Anda, memberikan
                    umpan balik yang berharga, dan membantu Anda mencapai kesempurnaan dalam setiap proyek.</p>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="testimonials text-center py-5" data-aos="fade-up">
        <h2>Testimoni Pelanggan</h2>
        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
            <p>"Kursus ini sangat membantu saya dalam memahami dasar-dasar pemrograman. Mentornya sangat berpengalaman dan
                kurikulumnya sangat relevan dengan industri saat ini."</p>
            <p>- Saii</p>
        </div>
        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
            <p>"Saya berhasil mendapatkan pekerjaan impian saya sebagai developer berkat kursus ini. Materinya sangat
                lengkap dan mudah dipahami."</p>
            <p>- Amay</p>
        </div>
    </div>

    <script>
        const learnButton = document.getElementById('learnButton');
        learnButton.addEventListener('mouseover', function() {
            this.classList.add('animate__pulse');
        });
        learnButton.addEventListener('mouseout', function() {
            this.classList.remove('animate__pulse');
        });

        const heroImage = document.getElementById('heroImage');
        heroImage.addEventListener('click', function() {
            this.classList.add('animate__shakeX');
            setTimeout(() => this.classList.remove('animate__shakeX'), 1000);
        });
    </script>
@endsection
