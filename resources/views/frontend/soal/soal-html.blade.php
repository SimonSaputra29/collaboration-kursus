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

    <script>
        const questions = [
            {
                question: "Tag HTML untuk membuat paragraf adalah:",
                answers: [
                    { text: "&lt;h1&gt;", correct: false },
                    { text: "&lt;p&gt;", correct: true },
                    { text: "&lt;div&gt;", correct: false },
                    { text: "&lt;span&gt;", correct: false }
                ]
            },
            {
                question: "Tag HTML untuk menyisipkan gambar adalah:",
                answers: [
                    { text: "&lt;pic&gt;", correct: false },
                    { text: "&lt;img&gt;", correct: true },
                    { text: "&lt;image&gt;", correct: false },
                    { text: "&lt;src&gt;", correct: false }
                ]
            },
            {
                question: "Tag HTML untuk membuat tautan adalah:",
                answers: [
                    { text: "&lt;link&gt;", correct: false },
                    { text: "&lt;a&gt;", correct: true },
                    { text: "&lt;href&gt;", correct: false },
                    { text: "&lt;url&gt;", correct: false }
                ]
            },
            {
                question: "Tag HTML untuk membuat daftar urut adalah:",
                answers: [
                    { text: "&lt;ul&gt;", correct: false },
                    { text: "&lt;ol&gt;", correct: true },
                    { text: "&lt;li&gt;", correct: false },
                    { text: "&lt;list&gt;", correct: false }
                ]
            },
            {
                question: "Tag HTML untuk membuat tabel adalah:",
                answers: [
                    { text: "&lt;table&gt;", correct: true },
                    { text: "&lt;tab&gt;", correct: false },
                    { text: "&lt;grid&gt;", correct: false },
                    { text: "&lt;t&gt;", correct: false }
                ]
            }
        ];

        let currentQuestionIndex = 0;
        let score = 0;
        const totalQuestions = questions.length;

        document.addEventListener('DOMContentLoaded', () => {
            showQuestion(questions[currentQuestionIndex]);
        });

        function showQuestion(question) {
            const questionContainer = document.getElementById('question-container');
            questionContainer.innerHTML = `
                <div class="mb-4 fade-in">
                    <label class="form-label">${question.question}</label>
                    ${shuffleArray(question.answers).map((answer, index) => `
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer" id="answer-${index}" value="${answer.correct}">
                            <label class="form-check-label" for="answer-${index}">${answer.text}</label>
                        </div>
                    `).join('')}
                </div>
            `;
        }

        function nextQuestion() {
            const selectedAnswer = document.querySelector('input[name="answer"]:checked');
            if (!selectedAnswer) {
                alert("Pilih jawaban terlebih dahulu!");
                return;
            }

            if (selectedAnswer.value === 'true') {
                score++;
            } else {
                const question = questions[currentQuestionIndex];
                const correctAnswer = question.answers.find(answer => answer.correct);
                document.getElementById('result').innerHTML += `
                    <p class="incorrect">Jawaban untuk "${question.question}" salah. Jawaban yang benar adalah ${correctAnswer.text}.</p>
                `;
            }

            currentQuestionIndex++;
            if (currentQuestionIndex < totalQuestions) {
                showQuestion(questions[currentQuestionIndex]);
            } else {
                showResult();
            }
            selectedAnswer.checked = false;
        }

        function showResult() {
            const resultContainer = document.getElementById('result');
            resultContainer.innerHTML += `<p>Nilai Anda adalah ${score}/${totalQuestions}.</p>`;

            const kkm = 3; // Kriteria Ketuntasan Minimal
            if (score >= kkm) {
                resultContainer.innerHTML += `
                    <p class="correct">Selamat! Anda lulus.</p>
                    <div class="d-flex justify-content-center">
                        <a href="/webdevelopment" class="btn btn-primary mt-2 btn-gradient me-2">Kembali ke Kursus Web Development</a>
                        <button class="btn btn-secondary mt-2" onclick="retryQuiz()">Coba Lagi</button>
                    </div>
                `;
            } else {
                resultContainer.innerHTML += `<p class="incorrect">Maaf, Anda belum lulus. Silakan coba lagi.</p>`;
                shuffleQuestions();
                currentQuestionIndex = 0;
                score = 0;
                showQuestion(questions[currentQuestionIndex]);
            }
        }

        function retryQuiz() {
            document.getElementById('result').innerHTML = '';
            shuffleQuestions();
            currentQuestionIndex = 0;
            score = 0;
            showQuestion(questions[currentQuestionIndex]);
        }

        function shuffleArray(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
            return array;
        }

        function shuffleQuestions() {
            shuffleArray(questions);
            questions.forEach(question => shuffleArray(question.answers));
        }
    </script>
@endsection