@extends('frontend.layout.index')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4 text-dark fade-in">Langganan Kursus Developer Pemula</h1>
        <p class="text-center text-secondary fade-in">Pelajari dasar-dasar pengembangan web dan aplikasi dengan kurikulum
            yang mudah dipahami.</p>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card custom-card fade-in">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kursus Laravel Dasar</h5>
                        <p class="card-text">Belajar Laravel dari nol, mulai dari instalasi hingga membuat aplikasi
                            sederhana.</p>
                        <a href="#" class="btn btn-glow">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card custom-card fade-in">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kursus Frontend Developer</h5>
                        <p class="card-text">Pelajari HTML, CSS, dan JavaScript untuk membangun tampilan website yang
                            menarik.</p>
                        <a href="#" class="btn btn-glow">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card custom-card fade-in">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kursus Fullstack Developer</h5>
                        <p class="card-text">Gabungkan frontend dan backend untuk menjadi fullstack developer yang handal.
                        </p>
                        <a href="#" class="btn btn-glow">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* GLOBAL STYLING */
        body {
            background-color: #ffffff;
            /* Background putih */
            color: #0d0d0d;
            /* Teks hitam */
            font-family: 'Poppins', sans-serif;
        }

        /* KARTU KURSUS */
        .custom-card {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.02));
            backdrop-filter: blur(5px);
            border-radius: 15px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            padding: 20px;
            transition: all 0.3s ease-in-out;
        }

        .custom-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(0, 0, 0, 0.4);
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #0d0d0d;
            /* Warna hitam */
        }

        .card-text {
            color: #555;
            /* Warna abu-abu gelap */
            font-size: 0.95rem;
        }

        /* BUTTON */
        .btn-glow {
            background: linear-gradient(135deg, #4169E1, #000080);
            /* Royal Blue & Navy Blue */
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
            box-shadow: 0 0 15px rgba(65, 105, 225, 0.8);
            /* Royal Blue for hover effect */
            color: white;
        }

        /* ANIMASI FADE-IN */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
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
