@extends('frontend.layout.index')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-[500px] flex items-center justify-center text-white"
        style="background-image: url('{{ asset('images/hero-bg.jpg') }}');">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold drop-shadow-lg">Selamat Datang di Kursus Yasmin</h1>
            <p class="text-lg md:text-2xl mt-4 drop-shadow-lg">Belajar dari yang terbaik, untuk masa depan yang lebih cerah
            </p>
            <a href="{{ route('langganan') }}"
                class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300">
                Mulai Belajar
            </a>
        </div>
    </section>

    <!-- Fitur Utama -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold">Kenapa Memilih Kami?</h2>
            <p class="text-gray-600 mt-2">Kami menyediakan program terbaik untuk membantu Anda berkembang</p>

            <div class="grid md:grid-cols-3 gap-8 mt-8">
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <img src="{{ asset('icons/certificate.svg') }}" class="w-16 mx-auto">
                    <h3 class="text-xl font-semibold mt-4">Sertifikasi Resmi</h3>
                    <p class="text-gray-600 mt-2">Dapatkan sertifikat resmi setelah menyelesaikan kursus.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <img src="{{ asset('icons/expert.svg') }}" class="w-16 mx-auto">
                    <h3 class="text-xl font-semibold mt-4">Instruktur Berpengalaman</h3>
                    <p class="text-gray-600 mt-2">Belajar langsung dari para ahli yang telah berpengalaman di industri.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <img src="{{ asset('icons/community.svg') }}" class="w-16 mx-auto">
                    <h3 class="text-xl font-semibold mt-4">Komunitas Belajar</h3>
                    <p class="text-gray-600 mt-2">Bergabung dengan komunitas aktif untuk berdiskusi dan bertukar ilmu.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold">Apa Kata Mereka?</h2>
            <p class="text-gray-600 mt-2">Testimoni dari mereka yang telah sukses bersama kami</p>

            <div class="mt-8 flex flex-wrap justify-center gap-6">
                <div class="w-full md:w-1/3 bg-white p-6 rounded-lg shadow-lg">
                    <p class="text-gray-700 italic">"Belajar di Kursus Yasmin sangat menyenangkan! Materinya mudah
                        dipahami."</p>
                    <h4 class="font-semibold mt-4">- Rina, Mahasiswa</h4>
                </div>
                <div class="w-full md:w-1/3 bg-white p-6 rounded-lg shadow-lg">
                    <p class="text-gray-700 italic">"Saya berhasil mendapatkan pekerjaan impian berkat kursus ini!"</p>
                    <h4 class="font-semibold mt-4">- Budi, Software Engineer</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-blue-600 text-white text-center">
        <h2 class="text-3xl font-bold">Siap untuk Belajar?</h2>
        <p class="mt-2 text-lg">Gabung sekarang dan raih masa depan yang lebih baik</p>
        <a href="{{ route('langganan') }}"
            class="mt-6 inline-block bg-white text-blue-600 font-bold py-3 px-6 rounded-lg shadow-lg hover:bg-gray-200 transition duration-300">
            Daftar Sekarang
        </a>
    </section>
@endsection
