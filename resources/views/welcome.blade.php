<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="{{ asset('assets/img/Wan Logo.png') }}" type="image/x-icon">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            height: 100%;
        }

        .image-container {
            flex: 1;
            background-image: url('wan.jpg');
            background-size: cover;
            background-position: center;
        }

        .form-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #f0f0f0;
        }

        .login-form {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h4 {
            margin-top: 0;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #666;
            text-align: left;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        button {
            margin-left: 1% ;
            width: 100%;
            padding: 0.75rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-form img {
            width: 100px;
            display: block;
            margin: 0 auto 1rem;
        }

        button:hover {
            background-color: #0056b3;
        }

        .footer-text {
            margin-top: 3rem;
            color: #666;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="image-container"></div>
        <div class="form-container">
            <form class="login-form" action="{{ route('login') }}" method="POST">
                @csrf
                <img src="{{ asset('Wan Logo.png') }}" alt="" style="width: 20px">
                <h4>Masukan Email dan Password</h4>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Log In</button>
            </form>
            <p class="footer-text">© 2024 by Wanteknologi</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('loginError'))
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "{{ session('loginError') }}",
            });
        </script>
    @endif

</body>

</html>
