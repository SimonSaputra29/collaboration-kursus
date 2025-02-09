<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="{{ $configuration->meta_keywords ?? '' }}">
    <meta name="description" content="{{ $configuration->meta_descriptions ?? '' }}">
    <link rel="icon" href="{{ asset($configuration->title_logo ?? '') }}" type="image/png">

    <title>{{ $configuration->title ?? '' }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- AOS (Animate on Scroll) CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

    <!-- Custom CSS -->
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

    <!-- WhatsApp Icon -->
    @if (!is_null($configuration) && $configuration->phone_number)
        <a href="https://wa.me/{{ $configuration->phone_number }}" target="_blank" class="whatsapp-icon">
            <img src="{{ asset('images/whatsapp_icon.png') }}" alt="WhatsApp" />
        </a>
    @endif

    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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
