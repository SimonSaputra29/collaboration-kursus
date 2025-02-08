@extends('frontend.layout.index')

@section('content')
    <div class="container mt-5">
        <h1 class="fw-bold text-center text-gradient animate-text">Soal Kursus HTML</h1>
        <p class="text-center text-muted fade-in">Kerjakan soal berikut untuk menguji pemahaman Anda tentang HTML.</p>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="quiz-box shadow-lg p-4 rounded">
                    <form id="quiz-form">
                        <div id="question-container" class="fade-in"></div>
                        <button type="button" class="btn btn-gradient mt-3 w-100" id="next-button"
                            onclick="nextQuestion()">Next</button>
                    </form>
                    <div id="result" class="mt-4 text-center"></div>
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

        .quiz-box {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .quiz-box:hover {
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

    <script src="{{ asset('js/soalhtml.js') }}"></script>
@endsection