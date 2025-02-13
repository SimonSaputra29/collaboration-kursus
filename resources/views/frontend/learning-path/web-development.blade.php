@extends('frontend.layout.index')

@section('content')
    <div class="container mt-5">
        <h1 class="fw-bold text-center text-dark animate__animated animate__fadeInDown">{{ $category->title }}</h1>
        <p class="text-center text-secondary animate__animated animate__fadeInUp">{{ $category->overview }}</p>

        <!-- HTML Section -->
        @foreach ($category->services as $service)
        <div class="section mt-5" id="html-section">
            <div class="row">
                <div class="col-md-6 animate__animated animate__fadeInLeft">
                    <h2 class="fw-bold text-dark">{{ $service->title }}</h2>
                    <p>{{ $service->overview }}</p>
                    <h3 class="mt-4 text-dark">Materi:</h3>
                    {!! $service->description !!}
                </div>
                <div class="col-md-6 animate__animated animate__fadeInRight">
                    <div class="video-container mt-4 bg-dark rounded">
                        <iframe width="100%" height="315"
                            src="{{ $service->link }}" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="mt-4 text-center animate__animated animate__fadeInUp">
                <a href="{{ route('soalhtml') }}" class="btn btn-dark btn-glow">Kerjakan Soal HTML</a>
            </div>
        </div>
        @endforeach

    </div>

    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css');

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
            border-radius: 0.5rem;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .project-card {
            background: linear-gradient(135deg, #5c5e66, #373748);
            color: white;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            cursor: pointer;
            border: none;
            border-radius: 0.5rem;
        }

        .project-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .section {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .list-group-item {
            background: #f8f9fa;
            border: 1px solid #ddd;
        }

        .btn-dark {
            background: #333;
            color: white;
            font-weight: bold;
            border-radius: 25px;
            padding: 10px 20px;
            border: none;
            transition: all 0.3s ease-in-out;
            text-transform: uppercase;
        }

        .btn-glow {
            background: linear-gradient(135deg, #acacac, #909090);
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
            box-shadow: 0 0 15px rgba(174, 174, 174, 0.8);
            color: white;
        }

        .btn-dark:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.8);
            color: white;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init();

            const fadeElements = document.querySelectorAll(".fade-in");
            fadeElements.forEach((el, index) => {
                setTimeout(() => {
                    el.style.opacity = 1;
                    el.style.transform = "translateY(0)";
                }, index * 200);
            });
        });
    </script>
@endsection
