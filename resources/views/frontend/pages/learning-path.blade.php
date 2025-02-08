@extends('frontend.layout.index')

@section('content')
    <section class="learning-path py-5 text-white" style="background: linear-gradient(135deg, #5c5e66, #373748);">
        <div class="container text-center">
            <h1 class="fw-bold animate__animated animate__fadeInDown" data-aos="fade-up">Jelajahi Learning Path</h1>
            <p class="mt-3 animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="200">
                Pilih jalur belajar yang sesuai dengan minatmu dan tingkatkan keterampilanmu dengan materi yang terstruktur!
            </p>
        </div>
    </section>

    <div class="container mt-5 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="{{ route('webdevelopment') }}" class="text-decoration-none">
                    <div class="card shadow-sm p-4 text-white border-0 custom-card learning-card">
                        <i class="bi bi-code-slash display-4 text-light"></i>
                        <h4 class="mt-3">Web Development</h4>
                        <p class="text-light">Belajar membuat website dengan HTML, CSS, dan JavaScript.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('webdevelopment') }}" class="text-decoration-none">
                    <div class="card shadow-sm p-4 text-white border-0 custom-card learning-card">
                        <i class="bi bi-brush display-4 text-light"></i>
                        <h4 class="mt-3">UI/UX Design</h4>
                        <p class="text-light">Pelajari dasar-dasar desain UI/UX untuk membangun tampilan website yang menarik.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('webdevelopment') }}" class="text-decoration-none">
                    <div class="card shadow-sm p-4 text-white border-0 custom-card learning-card">
                        <i class="bi bi-robot display-4 text-light"></i>
                        <h4 class="mt-3">Machine Learning</h4>
                        <p class="text-light">Pelajari algoritma machine learning untuk membuat aplikasi AI yang handal.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="{{ route('webdevelopment') }}" class="text-decoration-none">
                    <div class="card shadow-sm p-4 text-white border-0 custom-card learning-card">
                        <i class="bi bi-bar-chart display-4 text-light"></i>
                        <h4 class="mt-3">Data Science</h4>
                        <p class="text-light">Pelajari cara menganalisis data dan membuat prediksi dengan Python dan R.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('webdevelopment') }}" class="text-decoration-none">
                    <div class="card shadow-sm p-4 text-white border-0 custom-card learning-card">
                        <i class="bi bi-shield-lock display-4 text-light"></i>
                        <h4 class="mt-3">Cyber Security</h4>
                        <p class="text-light">Pelajari teknik untuk melindungi sistem dan jaringan dari serangan cyber.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('webdevelopment') }}" class="text-decoration-none">
                    <div class="card shadow-sm p-4 text-white border-0 custom-card learning-card">
                        <i class="bi bi-phone display-4 text-light"></i>
                        <h4 class="mt-3">Mobile Development</h4>
                        <p class="text-light">Pelajari cara membuat aplikasi mobile untuk Android dan iOS.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <style>
        .learning-card {
            background: linear-gradient(135deg, #5c5e66, #373748);
            cursor: pointer;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .learning-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
    </style>
@endsection