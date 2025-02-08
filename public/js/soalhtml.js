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