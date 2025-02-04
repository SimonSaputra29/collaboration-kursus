@extends('frontend.layout.index')

@section('content')
    <div class="container py-5">
        <h2 class="section-title text-center fade-in">Program Kami</h2>
        <p class="text-secondary text-center fade-in">Jelajahi berbagai program belajar yang kami sediakan untuk meningkatkan
            keterampilan Anda.</p>

        <!-- ROW 1: Kartu Program -->
        <div class="row mt-5">
            <div class="col-md-4 fade-in">
                <div class="program-card">
                    <i class="fas fa-code icon animate__animated animate__fadeInUp"></i>
                    <h4>Belajar Coding</h4>
                    <p>Pelajari dasar-dasar coding dengan berbagai bahasa pemrograman seperti Python, JavaScript, dan PHP.
                    </p>
                    <a href="#" class="btn btn-glow">Mulai Belajar</a>
                </div>
            </div>
            <div class="col-md-4 fade-in">
                <div class="program-card">
                    <i class="fas fa-laptop-code icon animate__animated animate__fadeInUp"></i>
                    <h4>Web Development</h4>
                    <p>Kuasai teknologi frontend dan backend untuk membangun website yang profesional.</p>
                    <a href="#" class="btn btn-glow">Mulai Belajar</a>
                </div>
            </div>
            <div class="col-md-4 fade-in">
                <div class="program-card">
                    <i class="fas fa-mobile-alt icon animate__animated animate__fadeInUp"></i>
                    <h4>Mobile Development</h4>
                    <p>Pelajari cara membuat aplikasi Android dan iOS dengan Flutter dan React Native.</p>
                    <a href="#" class="btn btn-glow">Mulai Belajar</a>
                </div>
            </div>
        </div>

        <!-- ROW 2: Testimoni -->
        <h3 class="text-center mt-5 fade-in">Apa Kata Mereka?</h3>
        <div class="row mt-4">
            <div class="col-md-4 fade-in">
                <div class="testimonial-card flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <p>"Program ini sangat membantu saya memahami coding dari nol. Sekarang saya sudah bisa membuat
                                website sendiri!"</p>
                        </div>
                        <div class="flip-card-back">
                            <strong>- Rizky, Junior Developer</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 fade-in">
                <div class="testimonial-card flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <p>"Materinya lengkap dan mudah dipahami. Saya sangat puas dengan kursus ini!"</p>
                        </div>
                        <div class="flip-card-back">
                            <strong>- Nisa, UI/UX Designer</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 fade-in">
                <div class="testimonial-card flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <p>"Setelah mengikuti program ini, saya langsung diterima kerja sebagai frontend developer!"</p>
                        </div>
                        <div class="flip-card-back">
                            <strong>- Budi, Frontend Engineer</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ROW 3: Call to Action -->
        <div class="cta-section text-center fade-in">
            <h3>Siap Meningkatkan Keterampilan Anda?</h3>
            <p>Bergabunglah dengan ribuan siswa lainnya dan mulailah perjalanan belajar Anda sekarang!</p>
            <a href="#" class="btn btn-glow">Gabung Sekarang</a>
        </div>
    </div>

    <style>
        /* GLOBAL */
        body {
            background-color: #ffffff;
            color: #0d0d0d;
            font-family: 'Poppins', sans-serif;
        }

        /* JUDUL */
        .section-title {
            font-size: 2rem;
            font-weight: bold;
            color: #0d0d0d;
        }

        /* KARTU PROGRAM */
        .program-card {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.02));
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            position: relative;
        }

        .program-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .program-card .icon {
            font-size: 3rem;
            color: #ff6600;
            margin-bottom: 10px;
        }

        /* BUTTON */
        .btn-glow {
            background: linear-gradient(135deg, #4169E1, #000080);
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
        }

        /* ICONS */
        .program-card .icon {
            font-size: 3rem;
            color: #4169E1;
            margin-bottom: 10px;
        }

        /* CTA SECTION */
        .cta-section {
            background: #000080;
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-top: 40px;
        }

        /* TESTIMONIAL */
        .testimonial-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.6s;
        }

        .testimonial-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: relative;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background: #f8f9fa;
        }

        .flip-card-back {
            background: #fff;
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: rotateY(180deg);
        }

        /* ANIMASI FADE-IN */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        /* ANIMASI SCROLL */
        .animate__fadeInUp {
            opacity: 0;
            animation: fadeInUp 1s forwards;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
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
