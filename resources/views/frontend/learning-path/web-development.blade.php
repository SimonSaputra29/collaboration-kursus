@extends('frontend.layout.index')

@section('content')
    <div class="container mt-5">
        <h1 class="fw-bold text-center text-dark animate__animated animate__fadeInDown">Web Development</h1>
        <p class="text-center text-secondary animate__animated animate__fadeInUp">Belajar membuat website dengan HTML dan CSS
            dari dasar hingga mahir.</p>

        <!-- HTML Section -->
        <div class="section mt-5" id="html-section">
            <div class="row">
                <div class="col-md-6 animate__animated animate__fadeInLeft">
                    <h2 class="fw-bold text-dark">HTML</h2>
                    <p>HTML (HyperText Markup Language) adalah bahasa markah standar untuk membuat halaman web. Dengan HTML,
                        kita dapat membuat dan mengatur konten untuk ditampilkan di web browser.</p>
                    <h3 class="mt-4 text-dark">Materi:</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Pengenalan HTML
                            <ul>
                                <li>Sejarah HTML</li>
                                <li>Perbedaan HTML vs XHTML</li>
                                <li>Peran HTML dalam Web Development</li>
                            </ul>
                        </li>
                        <li class="list-group-item">Struktur Dasar HTML
                            <ul>
                                <li>Tag HTML</li>
                                <li>Elemen dan Atribut</li>
                                <li>Struktur Dokumen HTML5</li>
                            </ul>
                        </li>
                        <li class="list-group-item">Tag dan Elemen HTML
                            <ul>
                                <li>Tag Heading</li>
                                <li>Tag Paragraf</li>
                                <li>Tag List (Ordered dan Unordered)</li>
                                <li>Tag Link</li>
                                <li>Tag Image</li>
                                <li>Tag Multimedia (Audio dan Video)</li>
                            </ul>
                        </li>
                        <li class="list-group-item">Atribut HTML
                            <ul>
                                <li>Atribut Global</li>
                                <li>Atribut Khusus Elemen</li>
                            </ul>
                        </li>
                        <li class="list-group-item">Membuat Tabel dan Form
                            <ul>
                                <li>Tag Tabel (table, th, tr, td)</li>
                                <li>Atribut Tabel</li>
                                <li>Tag Form (form, input, label, textarea, button)</li>
                                <li>Atribut Form</li>
                            </ul>
                        </li>
                        <li class="list-group-item">Praktik Membuat Halaman Web Sederhana
                            <ul>
                                <li>Membuat Halaman Beranda</li>
                                <li>Membuat Halaman Kontak</li>
                                <li>Membuat Halaman Tentang Kami</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 animate__animated animate__fadeInRight">
                    <div class="video-container mt-4 bg-dark rounded">
                        <iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/71a2zeC71gk?si=QOzWhGE1VP9SBxaz" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="mt-4 text-center animate__animated animate__fadeInUp">
                <a href="{{ route('soalhtml') }}" class="btn btn-dark btn-glow">Kerjakan Soal HTML</a>
            </div>
        </div>

        <!-- CSS Section -->
        <div class="section mt-5" id="css-section">
            <div class="row">
                <div class="col-md-6 order-md-2 animate__animated animate__fadeInRight">
                    <h2 class="fw-bold text-dark">CSS</h2>
                    <p>CSS (Cascading Style Sheets) adalah bahasa yang digunakan untuk mendesain tampilan halaman web.
                        Dengan CSS, kita dapat mengatur tata letak, warna, font, dan elemen visual lainnya pada halaman web.
                    </p>
                    <h3 class="mt-4 text-dark">Materi:</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Pengenalan CSS
                            <ul>
                                <li>Sejarah CSS</li>
                                <li>Fungsi CSS dalam Web Development</li>
                                <li>Perbedaan Inline, Internal, dan External CSS</li>
                            </ul>
                        </li>
                        <li class="list-group-item">Selektor dan Properti CSS
                            <ul>
                                <li>Jenis-jenis Selektor</li>
                                <li>Properti Warna</li>
                                <li>Properti Teks</li>
                                <li>Properti Latar Belakang</li>
                                <li>Properti Perbatasan</li>
                            </ul>
                        </li>
                        <li class="list-group-item">Box Model
                            <ul>
                                <li>Penjelasan Box Model</li>
                                <li>Margin, Border, Padding, dan Content</li>
                                <li>Penggunaan Box Model dalam Desain</li>
                            </ul>
                        </li>
                        <li class="list-group-item">Layout dengan Flexbox dan Grid
                            <ul>
                                <li>Pengenalan Flexbox</li>
                                <li>Properti Flexbox</li>
                                <li>Pengenalan Grid</li>
                                <li>Properti Grid</li>
                            </ul>
                        </li>
                        <li class="list-group-item">Responsive Design
                            <ul>
                                <li>Media Queries</li>
                                <li>Desain Mobile-First</li>
                                <li>Framework CSS (Bootstrap, Tailwind)</li>
                            </ul>
                        </li>
                        <li class="list-group-item">Praktik Mendesain Halaman Web
                            <ul>
                                <li>Mendesain Halaman Beranda</li>
                                <li>Mendesain Halaman Kontak</li>
                                <li>Mendesain Halaman Tentang Kami</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 order-md-1 animate__animated animate__fadeInLeft">
                    <div class="video-container mt-4 bg-dark rounded">
                        <iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/DZiLBfRaPuo?si=dmUBrMBGQqN6EARJ" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="mt-4 text-center animate__animated animate__fadeInUp">
                <a href="{{ route('soalcss') }}" class="btn btn-dark btn-glow">Kerjakan Soal CSS</a>
            </div>
        </div>
    </div>

    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css');

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
            border-radius: 0.5rem;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .project-card {
            background: linear-gradient(135deg, #5c5e66, #373748);
            color: white;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            cursor: pointer;
            border: none;
            border-radius: 0.5rem;
        }

        .project-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .section {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .list-group-item {
            background: #f8f9fa;
            border: 1px solid #ddd;
        }

        .btn-dark {
            background: #333;
            color: white;
            font-weight: bold;
            border-radius: 25px;
            padding: 10px 20px;
            border: none;
            transition: all 0.3s ease-in-out;
            text-transform: uppercase;
        }

        .btn-glow {
            background: linear-gradient(135deg, #acacac, #909090);
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
            box-shadow: 0 0 15px rgba(174, 174, 174, 0.8);
            color: white;
        }

        .btn-dark:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.8);
            color: white;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init();

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
