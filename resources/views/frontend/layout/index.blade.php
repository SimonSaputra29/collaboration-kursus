<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta keywords="{{ $configuration->meta_keywords ?? '' }}">
    <meta description="{{ $configuration->meta_descriptions ?? '' }}">
    <link rel="icon" href="{{ asset($configuration->title_logo ?? '') }}" type="image/png">

    <title>{{ $configuration->title ?? '' }}</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <!-- Bootstrap CSS (Use the latest version) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- AOS (Animate on Scroll) CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


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

    <!-- WhatsApp Logo -->
    @if(!is_null($configuration) && $configuration->phone_number)
    <a href="https://wa.me/{{ $configuration->phone_number }}" target="_blank" class="whatsapp-icon">
        <img src="data:image/jpeg;base64,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"
            alt="WhatsApp" />
    </a>
    @endif

    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap JS (including Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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
