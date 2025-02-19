@extends('frontend.layout.index')

@section('content')
    <div class="container py-5 d-flex align-items-center justify-content-center min-vh-100 position-relative">
        <div class="background-animation position-absolute w-100 h-100"></div>
        <div class="row justify-content-center w-100">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 bg-dark text-white overflow-hidden position-relative hover-effect mb-5">
                    <div class="card-header bg-gradient text-center py-4 position-relative z-1">
                        <h4 class="card-title mb-0 text-uppercase fw-bold">Register</h4>
                    </div>
                    <div class="card-body p-5 position-relative z-1">
                        <form action="{{ route('registerUser') }}" method="POST" id="registerForm" autocomplete="off">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" name="name" id="name" class="form-control glow-input" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" id="email" class="form-control glow-input" autocomplete="new-email" required>
                            </div>
                            <div class="form-group mb-4 position-relative">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" name="password" id="password" class="form-control glow-input" autocomplete="new-password" required>
                                <span class="toggle-password" onclick="togglePassword('password')">👁️</span>
                            </div>
                            <div class="form-group mb-4 position-relative">
                                <label for="password_2" class="form-label">Confirm Password:</label>
                                <input type="password" name="password_2" id="password_2" class="form-control glow-input" required>
                                <span class="toggle-password" onclick="togglePassword('password_2')">👁️</span>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gradient btn-lg">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center position-relative z-1 mt-4">
                        <a href="{{ route('loginUser') }}" class="text-light text-decoration-none">Login?</a>
                    </div>
                    <div class="card-overlay position-absolute w-100 h-100 bg-gradient-opacity"></div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            animation: fadeIn 1s ease-in-out;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(255, 118, 136, 0.5);
        }

        .card-header {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            background: linear-gradient(135deg, #ff7eb3, #ff758c);
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #ff7eb3, #ff758c);
            border: none;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s;
            color: white;
            font-weight: bold;
        }

        .btn-gradient:hover {
            background: linear-gradient(135deg, #ff758c, #ff7eb3);
            box-shadow: 0 4px 20px rgba(255, 118, 136, 0.5);
            transform: scale(1.1);
        }

        .form-control {
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: none;
            transition: all 0.3s ease-in-out;
        }

        .glow-input:focus {
            box-shadow: 0 0 15px rgba(255, 118, 136, 0.8);
            background: rgba(255, 255, 255, 0.2);
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 1.2rem;
            color: #ff758c;
        }

        .background-animation {
            background: radial-gradient(circle, rgba(255, 118, 136, 0.3) 0%, rgba(0, 0, 0, 0.8) 70%);
            animation: backgroundMove 6s infinite alternate ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes backgroundMove {
            from {
                transform: scale(1.1);
            }

            to {
                transform: scale(1);
            }
        }
    </style>
 
@endsection