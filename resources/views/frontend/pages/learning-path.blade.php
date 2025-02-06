@extends('frontend.layout.index')

@section('content')
    <section class="learning-path py-5" style="background: linear-gradient(135deg, #5c5e66, #373748); color: #fff;">
        <div class="container text-center">
            <h1 class="fw-bold animate__animated animate__fadeInDown" data-aos="fade-up">Jelajahi Learning Path</h1>
            <p class="mt-3 text-light animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="200">
                Pilih jalur belajar yang sesuai dengan minatmu dan tingkatkan keterampilanmu dengan materi yang terstruktur!
            </p>
        </div>
    </section>

    <div class="container mt-5 mb-4">
        <div class="row justify-content-center" id="paths">
            <div class="col-md-4" onclick="showVideo('web-development')">
                <div class="card shadow-sm p-4 bg-dark text-white border-0 custom-card" style="background: linear-gradient(135deg, #5c5e66, #373748)">
                    <i class="bi bi-code-slash display-4 text-light"></i>
                    <h4 class="mt-3">Web Development</h4>
                    <p class="text-light">Belajar membuat website dengan HTML, CSS, dan JavaScript</p>
                </div>
            </div>
            <div class="col-md-4" onclick="showVideo('ui-ux')">
                <div class="card shadow-sm p-4 bg-dark text-white border-0 custom-card">
                    <i class="bi bi-brush display-4 text-light"></i>
                    <h4 class="mt-3">UI/UX Design</h4>
                    <p class="text-light">Pelajari dasar-dasar desain UI/UX untuk membangun tampilan website yang menarik.
                    </p>
                </div>
            </div>
            <div class="col-md-4" onclick="showVideo('machine-learning')">
                <div class="card shadow-sm p-4 bg-dark text-white border-0 custom-card">
                    <i class="bi bi-robot display-4 text-light"></i>
                    <h4 class="mt-3">Machine Learning</h4>
                    <p class="text-light">Pelajari algoritma machine learning untuk membuat aplikasi AI yang handal.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-white">Playlist Tutorial</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe id="videoFrame" width="100%" height="400" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showVideo(category) {
            let videoLinks = {
                'web-development': 'https://www.youtube.com/embed/71a2zeC71gk',
                'ui-ux': 'https://www.youtube.com/embed/playlist_id_2', // Ganti dengan playlist yang sesuai
                'machine-learning': 'https://www.youtube.com/embed/playlist_id_3' // Ganti dengan playlist yang sesuai
            };

            // Periksa apakah category ada dalam videoLinks
            if (videoLinks[category]) {
                document.getElementById('videoFrame').src = videoLinks[category];
                var modal = new bootstrap.Modal(document.getElementById('videoModal'));
                modal.show();
            } else {
                alert('Video untuk kategori ini belum tersedia.');
            }
        }
    </script>
@endsection
