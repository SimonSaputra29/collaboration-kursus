@extends('frontend.layout.index')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4 text-dark">Soal Kursus CSS</h1>
        <p class="text-center text-secondary">Kerjakan soal berikut untuk menguji pemahaman Anda tentang CSS.</p>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form id="quiz-form">
                    <div class="mb-4">
                        <label class="form-label">1. Properti CSS untuk mengubah warna teks adalah:</label>
                        <div>
                            <input type="radio" id="q1-a" name="q1" value="a">
                            <label for="q1-a">text-color</label><br>
                            <input type="radio" id="q1-b" name="q1" value="b">
                            <label for="q1-b">font-color</label><br>
                            <input type="radio" id="q1-c" name="q1" value="c">
                            <label for="q1-c">color</label><br>
                            <input type="radio" id="q1-d" name="q1" value="d">
                            <label for="q1-d">text-style</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">2. Properti CSS untuk mengatur ukuran font adalah:</label>
                        <div>
                            <input type="radio" id="q2-a" name="q2" value="a">
                            <label for="q2-a">font-size</label><br>
                            <input type="radio" id="q2-b" name="q2" value="b">
                            <label for="q2-b">text-size</label><br>
                            <input type="radio" id="q2-c" name="q2" value="c">
                            <label for="q2-c">size</label><br>
                            <input type="radio" id="q2-d" name="q2" value="d">
                            <label for="q2-d">font-style</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">3. Properti CSS untuk mengatur margin adalah:</label>
                        <div>
                            <input type="radio" id="q3-a" name="q3" value="a">
                            <label for="q3-a">padding</label><br>
                            <input type="radio" id="q3-b" name="q3" value="b">
                            <label for="q3-b">border</label><br>
                            <input type="radio" id="q3-c" name="q3" value="c">
                            <label for="q3-c">margin</label><br>
                            <input type="radio" id="q3-d" name="q3" value="d">
                            <label for="q3-d">spacing</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <