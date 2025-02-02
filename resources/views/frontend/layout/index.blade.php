<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta keywords="">
    <meta description="">
    <title>{{ $title }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Pastikan ini ada di <head> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS (Pastikan ada di bawah sebelum </body>) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- AOS (Animate on Scroll) CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="{{ asset('css/fe/style.css') }}">

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
        @include('frontend.components.footer')
    </main>

    <!-- WhatsApp Logo -->
    <a href="https://wa.me/+6281219133148" target="_blank" class="whatsapp-icon">
        <img src="data:image/jpeg;base64,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"
            alt="WhatsApp" />
    </a>

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

<style>
    /* ===================== */
    /* WhatsApp Icon Styles */
    /* ===================== */
    .whatsapp-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
    }

    .whatsapp-icon img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .whatsapp-icon:hover img {
        transform: scale(1.1);
    }
</style>
