@extends('frontend.layout.index')

@section('content')
    <section class="learning-path py-5 text-white" style="background: linear-gradient(135deg, #333, #222);">
        <div class="container text-center">
            <h1 class="fw-bold animate__animated animate__fadeInDown" data-aos="fade-up">Jelajahi Learning Path</h1>
            <p class="mt-3 animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="200">
                Pilih jalur belajar yang sesuai dengan minatmu dan tingkatkan keterampilanmu dengan materi yang terstruktur!
            </p>
        </div>
    </section>

    <div class="container mt-5 mb-4">
        <div class="row justify-content-center">
            @foreach ($categoryService as $item)
            <div class="col-md-4 mb-4">
                <a href="{{ route('learning-path', $item->id) }}" class="text-decoration-none">
                    <div class="card custom-card fade-in">
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <div>
                                <i class="bi bi-code-slash display-4 text-light"></i>
                                <h4 class="mt-3">{{ $item->title }}</h4>
                                <p class="text-light">{{ $item->overview }}</p>
                            </div>
                            <a href="{{ route('learning-path', $item->id) }}" class="btn btn-glow mt-3">Mulai Belajar</a>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        </div>
    </div>

    <style>
        body {
            background-color: #f7f7f7;
            color: #333;
            font-family: 'Poppins', sans-serif;
        }

        .custom-card {
            background: linear-gradient(135deg, #444, #333);
            backdrop-filter: blur(5px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 30px;
            transition: all 0.3s ease-in-out;
            height: 100%; /* Ensure cards take full height */
        }

        .custom-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
        }

        .card-text {
            color: #ddd;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .btn-glow {
            background: linear-gradient(135deg, #888, #555);
            color: white;
            font-weight: bold;
            border-radius: 25px;
            padding: 10px 20px;
            border: none;
            transition: all 0.3s ease-in-out;
            text-transform: uppercase;
        }

        .btn-glow:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(136, 136, 136, 0.8);
            color: white;
        }

        .testimonial-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .testimonial-text {
            font-style: italic;
            color: #666;
        }

        .testimonial-name {
            font-weight: bold;
            color: #333;
            margin-top: 10px;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .fade-in.appear {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const fadeElements = document.querySelectorAll(".fade-in");
            fadeElements.forEach((el, index) => {
                setTimeout(() => {
                    el.classList.add('appear');
                }, index * 200);
            });
        });
    </script>
@endsection
