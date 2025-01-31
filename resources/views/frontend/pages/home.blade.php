<style>
    /* Menjaga responsivitas gambar */
    #heroImage {
        max-width: 100%;
        height: auto;
    }

    /* Transisi halus pada tombol */
    #learnButton {
        transition: transform 0.3s ease-in-out;
    }

    #learnButton:hover {
        transform: scale(1.05);
    }
</style>

@extends('frontend.layout.index')

@section('content')
    <div class="d-flex align-items-center justify-content-center ms-5 pt-5 position-relative" style="min-height: 80vh;">
        <div class="me-4 text-start animate__animated animate__fadeInLeft">
            <h2 class="fw-bold display-4 text-dark">Bangun Karirmu Sebagai <br> Developer Profesional</h2>
            <p class="text-muted fs-5">Belajar dari nol hingga menjadi developer profesional dengan kurikulum terkini dan
                mentor berpengalaman.</p>
            <button id="learnButton" class="btn btn-dark px-5 py-3 rounded-pill shadow-lg">Belajar Sekarang</button>
        </div>
        <img id="heroImage" src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-hero.png"
            alt="Belajar Coding" class="img-fluid animate__animated animate__fadeInRight"
            style="max-width: 40%; height: auto; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
    </div>

    <div class="text-center py-5"
        style="background-color: #f8f9fa; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
        <h2 class="" style="font-size: 2rem; letter-spacing: 1px; transition: color 0.3s ease;">
            Beberapa Keunggulan Kursus Yasmin
        </h2>
        <p>Saatnya bijak memilih sumber belajar. Tak hanya materi yang terjamin,
            Dicoding Academy juga memiliki reviewer profesional yang akan mengulas kode Anda.
        </p>
    </div>

    <script>
        const learnButton = document.getElementById('learnButton');
        learnButton.addEventListener('mouseover', function() {
            this.classList.add('animate__pulse');
        });
        learnButton.addEventListener('mouseout', function() {
            this.classList.remove('animate__pulse');
        });

        const heroImage = document.getElementById('heroImage');
        heroImage.addEventListener('click', function() {
            this.classList.add('animate__shakeX');
            setTimeout(() => this.classList.remove('animate__shakeX'), 1000);
        });
    </script>
@endsection
