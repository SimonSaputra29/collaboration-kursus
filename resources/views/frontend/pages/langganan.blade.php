@extends('frontend.layout.index')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4 text-dark fade-in">Langganan Kursus Developer Pemula</h1>
        <p class="text-center text-secondary fade-in">Pelajari dasar-dasar pengembangan web dan aplikasi dengan kurikulum yang mudah dipahami.</p>

        <div class="row mt-5">
            <!-- Kursus Laravel Dasar -->
            <div class="col-md-4">
                <div class="card custom-card fade-in">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kursus Laravel Dasar</h5>
                        <p class="card-text">Belajar Laravel dari nol, mulai dari instalasi hingga membuat aplikasi sederhana.</p>
                        <a href="#" class="btn btn-glow">Daftar Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Kursus Frontend Developer -->
            <div class="col-md-4">
                <div class="card custom-card fade-in">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kursus Frontend Developer</h5>
                        <p class="card-text">Pelajari HTML, CSS, dan JavaScript untuk membangun tampilan website yang menarik.</p>
                        <a href="#" class="btn btn-glow">Daftar Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Kursus Fullstack Developer -->
            <div class="col-md-4">
                <div class="card custom-card fade-in">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kursus Fullstack Developer</h5>
                        <p class="card-text">Gabungkan frontend dan backend untuk menjadi fullstack developer yang handal.</p>
                        <a href="#" class="btn btn-glow">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial Section -->
        <div class="mt-5 text-center">
            <h2 class="text-dark fade-in">Apa Kata Mereka?</h2>
            <p class="text-secondary fade-in">Simak testimoni dari peserta yang sudah berhasil menyelesaikan kursus kami.</p>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="testimonial-card fade-in">
                        <p class="testimonial-text">"Kursus Laravel Dasar sangat membantu saya memahami framework Laravel dengan cara yang mudah. Saya bisa langsung membuat aplikasi setelah mengikuti kursus ini!"</p>
                        <p class="testimonial-name">- Simon, Developer</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card fade-in">
                        <p class="testimonial-text">"Dengan belajar Frontend, saya sekarang bisa mendesain website yang responsif dan menarik. Terima kasih untuk kursus yang sangat bermanfaat!"</p>
                        <p class="testimonial-name">- Amay, Frontend Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #ffffff;
            color: #0d0d0d;
            font-family: 'Poppins', sans-serif;
        }

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
        }

        .card-text {
            color: #555;
            font-size: 0.95rem;
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

        .testimonial-card {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .testimonial-text {
            font-style: italic;
            color: #555;
        }

        .testimonial-name {
            font-weight: bold;
            color: #0d0d0d;
            margin-top: 10px;
        }

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