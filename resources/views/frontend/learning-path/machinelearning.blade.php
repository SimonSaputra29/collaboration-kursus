@extends('frontend.layout.index')

@section('content')
    <div class="container mt-5">
        <h1 class="fw-bold text-center text-dark animate__animated animate__fadeInDown">Machine Learning</h1>
        <p class="text-center text-secondary animate__animated animate__fadeInUp">Pelajari dasar-dasar Machine Learning dan tingkatkan keterampilan Anda dengan kursus komprehensif kami.</p>

        <!-- Course Overview Section -->
        <div class="section mt-5" id="overview-section">
            <div class="row">
                <div class="col-md-6 animate__animated animate__fadeInLeft">
                    <h2 class="fw-bold text-dark">Deskripsi Kursus</h2>
                    <p>Kursus ini mencakup segala sesuatu dari dasar-dasar Machine Learning hingga teknik dan alat canggih. Baik Anda seorang pemula atau praktisi berpengalaman, kursus ini akan membantu Anda meningkatkan keterampilan dan menciptakan model Machine Learning yang handal.</p>
                    <ul class="list-group">
                        <li class="list-group-item">Pengenalan Machine Learning</li>
                        <li class="list-group-item">Algoritma Dasar Machine Learning</li>
                        <li class="list-group-item">Pra-pemrosesan Data</li>
                        <li class="list-group-item">Evaluasi Model</li>
                        <li class="list-group-item">Alat dan Perangkat Lunak</li>
                        <li class="list-group-item">Studi Kasus dan Proyek</li>
                    </ul>
                </div>
                <div class="col-md-6 animate__animated animate__fadeInRight">
                    <div class="video-container mt-4 bg-dark rounded">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/kn3z9a5lJDs?si=BBwY9zoPF4Hmu5FT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Modules Section -->
        <div class="section mt-5" id="modules-section">
            <div class="row">
                <div class="col-md-12 animate__animated animate__fadeInUp">
                    <h2 class="fw-bold text-dark text-center">Modul Kursus</h2>
                    <div class="accordion mt-4" id="courseModules">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="moduleOneHeading">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#moduleOne" aria-expanded="true" aria-controls="moduleOne">
                                    Modul 1: Pengenalan Machine Learning
                                </button>
                            </h2>
                            <div id="moduleOne" class="accordion-collapse collapse show" aria-labelledby="moduleOneHeading" data-bs-parent="#courseModules">
                                <div class="accordion-body">
                                    <p>Dalam modul ini, Anda akan belajar tentang dasar-dasar Machine Learning, jenis-jenis Machine Learning, dan pentingnya Machine Learning dalam berbagai industri.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="moduleTwoHeading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#moduleTwo" aria-expanded="false" aria-controls="moduleTwo">
                                    Modul 2: Algoritma Dasar Machine Learning
                                </button>
                            </h2>
                            <div id="moduleTwo" class="accordion-collapse collapse" aria-labelledby="moduleTwoHeading" data-bs-parent="#courseModules">
                                <div class="accordion-body">
                                    <p>Modul ini mencakup algoritma dasar Machine Learning seperti regresi linear, regresi logistik, pohon keputusan, dan K-Nearest Neighbors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="moduleThreeHeading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#moduleThree" aria-expanded="false" aria-controls="moduleThree">
                                    Modul 3: Pra-pemrosesan Data
                                </button>
                            </h2>
                            <div id="moduleThree" class="accordion-collapse collapse" aria-labelledby="moduleThreeHeading" data-bs-parent="#courseModules">
                                <div class="accordion-body">
                                    <p>Pelajari cara membersihkan dan mempersiapkan data sebelum digunakan dalam model Machine Learning. Modul ini mencakup teknik-teknik seperti normalisasi, standarisasi, dan menangani data yang hilang.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="moduleFourHeading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#moduleFour" aria-expanded="false" aria-controls="moduleFour">
                                    Modul 4: Evaluasi Model
                                </button>
                            </h2>
                            <div id="moduleFour" class="accordion-collapse collapse" aria-labelledby="moduleFourHeading" data-bs-parent="#courseModules">
                                <div class="accordion-body">
                                    <p>Modul ini berfokus pada metode evaluasi model Machine Learning. Anda akan belajar tentang metrik evaluasi seperti akurasi, presisi, recall, dan F1 Score.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="moduleFiveHeading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#moduleFive" aria-expanded="false" aria-controls="moduleFive">
                                    Modul 5: Alat dan Perangkat Lunak
                                </button>
                            </h2>
                            <div id="moduleFive" class="accordion-collapse collapse" aria-labelledby="moduleFiveHeading" data-bs-parent="#courseModules">
                                <div class="accordion-body">
                                    <p>Dapatkan pengalaman langsung dengan alat dan perangkat lunak Machine Learning populer, termasuk Python, TensorFlow, Scikit-Learn, dan banyak lagi. Anda akan belajar cara menggunakan alat-alat ini untuk membuat dan menguji model Machine Learning.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="moduleSixHeading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#moduleSix" aria-expanded="false" aria-controls="moduleSix">
                                    Modul 6: Studi Kasus dan Proyek
                                </button>
                            </h2>
                            <div id="moduleSix" class="accordion-collapse collapse" aria-labelledby="moduleSixHeading" data-bs-parent="#courseModules">
                                <div class="accordion-body">
                                    <p>Terapkan apa yang telah Anda pelajari dalam proyek dan studi kasus dunia nyata. Modul ini mencakup tugas dan proyek langsung untuk membantu Anda membangun portofolio dan menunjukkan keterampilan Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Playlist Section -->
        <div class="section mt-5" id="video-section">
            <div class="row">
                <div class="col-md-12 animate__animated animate__fadeInUp">
                    <h2 class="fw-bold text-dark text-center">Playlist Video</h2>
                    <div class="text-center mb-4">
                        <button class="btn btn-dark btn-glow" id="togglePlaylistButton" data-bs-toggle="collapse" href="#videoPlaylist" role="button" aria-expanded="false" aria-controls="videoPlaylist">Lihat Playlist Video</button>
                    </div>
                    <div class="collapse" id="videoPlaylist">
                        <div class="video-playlist mt-4">
                            <div class="video-item mb-3">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/kn3z9a5lJDs?si=QOzWhGE1VP9SBxaz" frameborder="0" allowfullscreen></iframe>
                                <h5 class="mt-2 text-dark">Video 1: Pengenalan Machine Learning</h5>
                            </div>
                            <div class="video-item mb-3">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/video2" frameborder="0" allowfullscreen></iframe>
                                <h5 class="mt-2 text-dark">Video 2: Algoritma Dasar</h5>
                            </div>
                            <div class="video-item mb-3">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/video3" frameborder="0" allowfullscreen></iframe>
                                <h5 class="mt-2 text-dark">Video 3: Pra-pemrosesan Data</h5>
                            </div>
                            <div class="video-item mb-3">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/video4" frameborder="0" allowfullscreen></iframe>
                                <h5 class="mt-2 text-dark">Video 4: Evaluasi Model</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enrollment Section -->
        <div class="section mt-5" id="enrollment-section">
            <div class="row">
                <div class="col-md-12 animate__animated animate__fadeInUp">
                    <div class="card shadow-lg border-0 bg-dark text-white">
                        <div class="card-header bg-gradient text-center py-4 position-relative z-1">
                            <h4 class="card-title mb-0 text-uppercase fw-bold">Daftar Sekarang</h4>
                        </div>
                        <div class="card-body p-5 position-relative z-1">
                            <p>Siap memulai perjalanan Anda dalam Machine Learning? Daftar sekarang dan dapatkan akses ke semua materi kursus, kuliah video, tugas, dan proyek. Bergabunglah dengan komunitas praktisi kami dan mulailah menciptakan model Machine Learning yang handal hari ini!</p>
                            <div class="d-grid">
                                <button class="btn btn-gradient btn-lg">Daftar Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
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

            const togglePlaylistButton = document.getElementById('togglePlaylistButton');
            const videoPlaylist = document.getElementById('videoPlaylist');

            togglePlaylistButton.addEventListener('click', function() {
                if (videoPlaylist.classList.contains('show')) {
                    togglePlaylistButton.textContent = 'Lihat Playlist Video';
                } else {
                    togglePlaylistButton.textContent = 'Tutup Playlist Video';
                }
            });

            videoPlaylist.addEventListener('shown.bs.collapse', function () {
                togglePlaylistButton.textContent = 'Tutup Playlist Video';
            });

            videoPlaylist.addEventListener('hidden.bs.collapse', function () {
                togglePlaylistButton.textContent = 'Lihat Playlist Video';
            });
        });
    </script>
@endsection