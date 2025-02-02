<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- AOS (Animate on Scroll) CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

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

        .footer {
            background-color: rgba(51, 51, 51, 0.8); /* Warna background dengan transparansi */
            color: white;
            text-align: center;
            padding: 20px 0;
            position: relative;
        }

        .footer .social-icons {
            margin: 10px 0;
        }

        .footer .social-icons a {
            margin: 0 10px;
            color: white;
            text-decoration: none;
            font-size: 24px;
        }

        .footer .social-icons a:hover {
            color: #f39c12;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer .wave {
            position: absolute;
            top: -20px;
            width: 100%;
            height: 20px;
            background: url('https://www.svgrepo.com/show/341678/wave.svg') repeat-x;
        }
    </style>
</head>

<body>
    <main class="w-full">
        <!-- Header Section -->
        <header class="w-full">
            @include('frontend.components.navbar')
        </header>

        <!-- Main Content Section -->
        <section class="container mt-4">
            @yield('content')
        </section>

        <!-- Footer Section -->
        <footer class="footer" data-aos="fade-up">
            <div class="wave"></div>
            <div class="social-icons">
                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p>&copy; 2025 Your Company. All Rights Reserved.</p>
        </footer>
    </main>

    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

    <!-- AOS (Animate on Scroll) JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Custom JS -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>