@extends('frontend.layout.index')

@section('content')
    <div class="container py-5">
        <h2 class="section-title text-center fade-in">Program Kami</h2>
        <p class="text-secondary text-center fade-in">Jelajahi berbagai program belajar yang kami sediakan untuk meningkatkan
            keterampilan Anda.</p>

        <!-- ROW 1: Kartu Program -->
        <div class="row mt-5">
            @foreach ($ourPrograms as $item)
            <div class="col-md-4 fade-in">
                <div class="program-card">
                    <img src="{{ asset($item->image) }}" alt="Belajar Coding">
                    <h4>{{ $item->title }}</h4>
                    <p>{{ $item->overview }}
                    </p>
                    <a href="{{ $item->link }}" class="btn btn-glow">Mulai Belajar</a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- ROW 2: Testimoni -->
        <h3 class="text-center mt-5 fade-in">Apa Kata Mereka?</h3>
        <div class="row mt-4">
            <div class="col-md-4 fade-in">
                <div class="testimonial-card">
                    <p class="testimonial-text">"Program ini sangat membantu saya memahami coding dari nol. Sekarang saya
                        sudah bisa membuat website sendiri!"</p>
                    <div class="testimonial-name">- Rizky, Junior Developer</div>
                </div>
            </div>
            <div class="col-md-4 fade-in">
                <div class="testimonial-card">
                    <p class="testimonial-text">"Materinya lengkap dan mudah dipahami. Saya sangat puas dengan kursus ini!"
                    </p>
                    <div class="testimonial-name">- Nisa, UI/UX Designer</div>
                </div>
            </div>
            <div class="col-md-4 fade-in">
                <div class="testimonial-card">
                    <p class="testimonial-text">"Setelah mengikuti program ini, saya langsung diterima kerja sebagai
                        frontend developer!"</p>
                    <div class="testimonial-name">- Budi, Frontend Engineer</div>
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

        .program-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        /* BUTTON */
        .btn-glow {
            background: linear-gradient(135deg, #5c5e66, #373748);
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
            box-shadow: 0 0 15px rgba(81, 83, 92, 0.8);
        }

        /* CTA SECTION */
        .cta-section {
            background: #41414a;
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

        .testimonial-text {
            font-style: italic;
            color: #666;
        }

        .testimonial-name {
            font-weight: bold;
            color: #333;
            margin-top: 10px;
            text-align: center;
        }

        /* ANIMASI FADE-IN */
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
