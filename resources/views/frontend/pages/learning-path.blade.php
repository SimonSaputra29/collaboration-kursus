@extends('frontend.layout.index')

@section('content')
    <section class="learning-path py-5" style="background-color: #121212; color: #fff;">
        <div class="container text-center">
            <h1 class="fw-bold animate__animated animate__fadeInDown" data-aos="fade-up">Jelajahi Learning Path</h1>
            <p class="mt-3 text-light animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="200">
                Pilih jalur belajar yang sesuai dengan minatmu dan tingkatkan keterampilanmu dengan materi yang terstruktur!
            </p>
            <a href="#paths" class="btn btn-outline-light mt-3 animate__animated animate__fadeInUp" data-aos="fade-up"
                data-aos-delay="400">
                Mulai Belajar
            </a>
        </div>
    </section>

    <div class="container mt-5 mb-4">
        <div class="row justify-content-center" id="paths">
            <!-- Web Development -->
            <div class="col-md-4 animate__animated animate__fadeInLeft" data-aos="fade-right">
                <div class="card shadow-sm p-4 bg-dark text-white border-0 custom-card">
                    <i class="bi bi-code-slash display-4 text-light"></i>
                    <h4 class="mt-3">Web Development</h4>
                    <p>Pelajari dasar hingga mahir dalam pengembangan website menggunakan teknologi modern.</p>
                </div>
            </div>

            <!-- UI/UX Design -->
            <div class="col-md-4 animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-sm p-4 bg-dark text-white border-0 custom-card">
                    <i class="bi bi-brush display-4 text-light"></i>
                    <h4 class="mt-3">UI/UX Design</h4>
                    <p>Pahami prinsip desain dan pengalaman pengguna untuk menciptakan tampilan yang menarik.</p>
                </div>
            </div>

            <!-- Machine Learning -->
            <div class="col-md-4 animate__animated animate__fadeInRight" data-aos="fade-left" data-aos-delay="400">
                <div class="card shadow-sm p-4 bg-dark text-white border-0 custom-card">
                    <i class="bi bi-robot display-4 text-light"></i>
                    <h4 class="mt-3">Machine Learning</h4>
                    <p>Jelajahi dunia kecerdasan buatan dan buat model prediksi yang cerdas.</p>
                </div>
            </div>

            <!-- Data Science -->
            <div class="col-md-4 mt-4 animate__animated animate__fadeInLeft" data-aos="fade-right" data-aos-delay="500">
                <div class="card shadow-sm p-4 bg-dark text-white border-0 custom-card">
                    <i class="bi bi-database display-4 text-light"></i>
                    <h4 class="mt-3">Data Science</h4>
                    <p>Kuasi analisis data dan eksplorasi wawasan bisnis dari data yang kompleks.</p>
                </div>
            </div>

            <!-- Cyber Security -->
            <div class="col-md-4 mt-4 animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="600">
                <div class="card shadow-sm p-4 bg-dark text-white border-0 custom-card">
                    <i class="bi bi-shield-lock display-4 text-light"></i>
                    <h4 class="mt-3">Cyber Security</h4>
                    <p>Pahami keamanan digital dan lindungi sistem dari ancaman siber.</p>
                </div>
            </div>

            <!-- DevOps -->
            <div class="col-md-4 mt-4 animate__animated animate__fadeInRight" data-aos="fade-left" data-aos-delay="700">
                <div class="card shadow-sm p-4 bg-dark text-white border-0 custom-card">
                    <i class="bi bi-gear display-4 text-light"></i>
                    <h4 class="mt-3">DevOps</h4>
                    <p>Optimalkan pengembangan dan operasional aplikasi dengan teknologi otomatisasi.</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .learning-path {
            background-color: #121212;
            /* Warna latar gelap */
        }

        .custom-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
            padding: 20px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .custom-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #ffffff;
        }

        .card-text {
            color: #b0b0b0;
            font-size: 0.95rem;
        }

        /* Button Glow Effect */
        .btn-outline-light {
            border: 2px solid #ffffff;
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
            padding: 10px 20px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background-color: #ffffff;
            color: #121212;
            transform: scale(1.05);
        }
    </style>
@endsection
