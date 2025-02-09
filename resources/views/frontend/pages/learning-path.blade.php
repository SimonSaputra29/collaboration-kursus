@extends('frontend.layout.index')

@section('content')
    <section class="learning-path py-5 text-white" style="background: linear-gradient(135deg, #2E3A47, #1F2833);">
        <div class="container text-center">
            <h1 class="fw-bold animate__animated animate__fadeInDown" data-aos="fade-up">Jelajahi Learning Path</h1>
            <p class="mt-3 animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="200">
                Pilih jalur belajar yang sesuai dengan minatmu dan tingkatkan keterampilanmu dengan materi yang terstruktur!
            </p>
        </div>
    </section>

    <div class="container mt-5 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <a href="{{ route('webdevelopment') }}" class="text-decoration-none">
                    <div class="card shadow-lg p-4 text-white border-0 custom-card learning-card">
                        <div class="card-body text-center">
                            <i class="bi bi-code-slash display-4 text-light"></i>
                            <h4 class="mt-3">Web Development</h4>
                            <p class="text-light">Belajar membuat website dengan HTML, CSS, dan JavaScript.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="{{ route('uiux') }}" class="text-decoration-none">
                    <div class="card shadow-lg p-4 text-white border-0 custom-card learning-card">
                        <div class="card-body text-center">
                            <i class="bi bi-brush display-4 text-light"></i>
                            <h4 class="mt-3">UI/UX Design</h4>
                            <p class="text-light">Pelajari dasar-dasar desain UI/UX untuk membangun tampilan website yang menarik.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="{{route('machinelearning')}}" class="text-decoration-none">
                    <div class="card shadow-lg p-4 text-white border-0 custom-card learning-card">
                        <div class="card-body text-center">
                            <i class="bi bi-robot display-4 text-light"></i>
                            <h4 class="mt-3">Machine Learning</h4>
                            <p class="text-light">Pelajari algoritma machine learning untuk membuat aplikasi AI yang handal.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <a href="{{route('datascience')}}" class="text-decoration-none">
                    <div class="card shadow-lg p-4 text-white border-0 custom-card learning-card">
                        <div class="card-body text-center">
                            <i class="bi bi-bar-chart display-4 text-light"></i>
                            <h4 class="mt-3">Data Science</h4>
                            <p class="text-light">Pelajari cara menganalisis data dan membuat prediksi dengan Python dan R.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href=" " class="text-decoration-none">
                    <div class="card shadow-lg p-4 text-white border-0 custom-card learning-card">
                        <div class="card-body text-center">
                            <i class="bi bi-shield-lock display-4 text-light"></i>
                            <h4 class="mt-3">Cyber Security</h4>
                            <p class="text-light">Pelajari teknik untuk melindungi sistem dan jaringan dari serangan cyber.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="   " class="text-decoration-none">
                    <div class="card shadow-lg p-4 text-white border-0 custom-card learning-card">
                        <div class="card-body text-center">
                            <i class="bi bi-phone display-4 text-light"></i>
                            <h4 class="mt-3">Mobile Development</h4>
                            <p class="text-light">Pelajari cara membuat aplikasi mobile untuk Android dan iOS.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <style>
        .learning-card {
            background: linear-gradient(135deg, #2E3A47, #1F2833);
            cursor: pointer;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .learning-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .learning-card .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 250px;
        }

        .learning-card .card-body i {
            font-size: 3rem;
        }

        .learning-card .card-body h4 {
            margin-top: 20px;
            font-size: 1.5rem;
        }

        .learning-card .card-body p {
            font-size: 1rem;
        }
    </style>
@endsection