@extends('frontend.layout.index')

@section('content')
    <div class="container mt-5 mb-5 content d-flex align-items-start">
        <div class="w-50 me-4">
            <div class="accordion h-100" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne" onclick="changeImage('faq1.jpg')">
                            Apa itu Kursus Yasmin?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Kursus Yasmin adalah platform belajar yang menyediakan berbagai kelas berkualitas untuk
                            meningkatkan
                            keterampilan Anda di berbagai bidang.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                            onclick="changeImage('faq2.jpg')">
                            Bagaimana cara mendaftar kursus?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Anda dapat mendaftar dengan membuat akun di website kami, lalu memilih kursus yang Anda inginkan
                            dan
                            melakukan pembayaran jika diperlukan.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                            onclick="changeImage('faq3.jpg')">
                            Apakah ada sertifikat setelah menyelesaikan kursus?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ya, setiap peserta yang berhasil menyelesaikan kursus akan mendapatkan sertifikat resmi dari
                            Kursus
                            Yasmin.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-50 text-center">
            <img id="faqImage" src="faq1.jpg" alt="FAQ Image" class="img-fluid rounded shadow"
                style="max-width: 100%; height: auto;">
        </div>
    </div>

    <script>
        function changeImage(imageSrc) {
            document.getElementById('faqImage').src = imageSrc;
        }
    </script>
@endsection
