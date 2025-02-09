@extends('frontend.layout.index')

@section('content')
    <div class="container mt-5 mb-4">
        <h1 class="fw-bold text-center text-dark animate__animated animate__fadeInDown">Kontak Kami</h1>
        <p class="text-center text-muted fade-in">Hubungi kami untuk pertanyaan lebih lanjut atau informasi lainnya.</p>

        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="contact-form shadow-lg p-4 rounded">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-gradient w-100">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background: linear-gradient(135deg, #c7c7c7, #bdbdbd);
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .text-gradient {
            background: linear-gradient(45deg, #4a4a4a, #bdbdbd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #4a4a4a, #bdbdbd);
            border: none;
            color: #fff;
            font-size: 1.1rem;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
            padding: 10px;
            border-radius: 8px;
        }

        .btn-gradient:hover {
            background: linear-gradient(135deg, #ffffff, #747474);
            transform: scale(1.05);
            box-shadow: 0px 5px 15px rgba(129, 125, 124, 0.5);
        }

        .contact-form {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .contact-form:hover {
            transform: translateY(-5px);
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-text {
            animation: pulseText 2s infinite alternate;
        }

        @keyframes pulseText {
            from {
                transform: scale(1);
            }

            to {
                transform: scale(1.05);
            }
        }
    </style>

    <script src="{{ asset('js/contact.js') }}"></script>
@endsection
