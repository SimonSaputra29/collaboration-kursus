@extends('frontend.layout.index')

@section('content')
    <style>
        /* GLOBAL STYLE */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            width: 50px;
            height: 4px;
            background: #3498db;
            display: block;
            margin: 10px auto;
        }

        .content {
            padding: 50px 0;
        }

        .parallax {
            background-image: url('{{ asset('images/about-bg.jpg') }}');
            height: 400px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .parallax::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .parallax h2 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 3rem;
            z-index: 1;
        }

        .team-section {
            padding: 50px 0;
        }

        .team-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 30px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            text-align: center;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .team-card img {
            width: 100%;
            height: auto;
        }

        .team-card-body {
            padding: 20px;
        }

        .team-card-body h5 {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .team-card-body p {
            color: #777;
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 0;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: #3498db;
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            background: inherit;
            width: 50%;
        }

        .timeline-item::after {
            content: ' ';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -17px;
            background-color: white;
            border: 4px solid #3498db;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        .timeline-item.left {
            left: 0;
        }

        .timeline-item.right {
            left: 50%;
        }

        .timeline-item.right::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 30px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
        }

        .timeline-item.left::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: 30px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }

        .timeline-content {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 6px;
        }

        @media screen and (max-width: 600px) {

            .timeline-item.left,
            .timeline-item.right {
                left: 0;
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item.right::before {
                left: 60px;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
            }

            .timeline-item.left::before {
                left: 60px;
            }

            .timeline::after {
                left: 31px;
            }
        }

        /* Animasi fade-in */
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

    <div class="parallax">
        <h2>Tentang Kami</h2>
    </div>

    <div class="container content">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title fade-in">Siapa Kami</h2>
                <p class="fade-in">Kami adalah tim yang berdedikasi untuk menyediakan solusi terbaik bagi kebutuhan teknologi
                    Anda. Dengan pengalaman bertahun-tahun di industri, kami siap membantu Anda mencapai tujuan Anda.</p>
            </div>
        </div>
    </div>

    <div class="container team-section">
        <div class="row justify-content-center">
            @foreach ($teams as $team)
                <div class="col-md-4 fade-in">
                    <div class="team-card">
                        <img src="{{ asset($team->image) }}" alt="{{ $team->name }}"
                            style="max-width: 300px; max-height:300px; width:300px ; height:300px ;">
                        <div class="team-card-body">
                            <h5>{{ $team->name }}</h5>
                            <p>{{ $team->role }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container timeline">
        <div class="timeline-item left fade-in">
            <div class="timeline-content">
                <h3>2015</h3>
                <p>Perusahaan ini didirikan dengan tujuan untuk menyediakan solusi teknologi yang inovatif.</p>
            </div>
        </div>
        <div class="timeline-item right fade-in">
            <div class="timeline-content">
                <h3>2017</h3>
                <p>Kami meluncurkan produk pertama kami dan mendapatkan tanggapan positif dari pasar.</p>
            </div>
        </div>
        <div class="timeline-item left fade-in">
            <div class="timeline-content">
                <h3>2019</h3>
                <p>Perusahaan kami berkembang pesat dan membuka kantor cabang di beberapa kota besar.</p>
            </div>
        </div>
        <div class="timeline-item right fade-in">
            <div class="timeline-content">
                <h3>2021</h3>
                <p>Kami terus berinovasi dan memperluas jangkauan produk dan layanan kami.</p>
            </div>
        </div>
    </div>

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
