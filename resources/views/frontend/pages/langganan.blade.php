@extends('frontend.layout.index')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4 text-dark fade-in">Langganan Kursus Developer Pemula</h1>
        <p class="text-center text-secondary fade-in">Pelajari dasar-dasar pengembangan web dan aplikasi dengan kurikulum yang mudah dipahami.</p>

        <div class="row mt-5">
            <!-- Kursus Laravel Dasar -->
            <div class="col-md-4">
                <div class="card custom-card fade-in">
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title">Kursus Laravel Dasar</h5>
                            <p class="card-text">Belajar Laravel dari nol, mulai dari instalasi hingga membuat aplikasi sederhana.</p>
                        </div>
                        <a href="#" class="btn btn-glow mt-3">Daftar Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Kursus Frontend Developer -->
            <div class="col-md-4">
                <div class="card custom-card fade-in">
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title">Kursus Frontend Developer</h5>
                            <p class="card-text">Pelajari HTML, CSS, dan JavaScript untuk membangun tampilan website yang menarik.</p>
                        </div>
                        <a href="#" class="btn btn-glow mt-3">Daftar Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Kursus Fullstack Developer -->
            <div class="col-md-4">
                <div class="card custom-card fade-in">
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title">Kursus Fullstack Developer</h5>
                            <p class="card-text">Gabungkan frontend dan backend untuk menjadi fullstack developer yang handal.</p>
                        </div>
                        <a href="#" class="btn btn-glow mt-3">Daftar Sekarang</a>
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
            background-color: #f7f7f7;
            color: #333;
            font-family: 'Poppins', sans-serif;
        }

        .custom-card {
            background: linear-gradient(135deg, #ffffff, #f1f1f1);
            backdrop-filter: blur(5px);
            border-radius: 15px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            padding: 30px;
            transition: all 0.3s ease-in-out;
            height: 100%; /* Ensure cards take full height */
        }

        .custom-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .card-text {
            color: #666;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .btn-glow {
            background: linear-gradient(135deg, #4d4d4d, #999999);
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
            box-shadow: 0 0 15px rgba(77, 77, 77, 0.8);
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