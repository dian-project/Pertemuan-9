
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin | Dian Project</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <style>
        body {
    background-image: url('/images/background.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;

    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: Arial, sans-serif;
    }

        .login-card {
            width: 100%;
            max-width: 420px;
            background: #ececf3;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        }

        .login-logo {
            width: 65px;
            height: 65px;
            object-fit: contain;
        }

        .btn-login {
            background: #287db8;
            color: white;
            padding: 11px;
            font-weight: bold;
        }

        .btn-login:hover {
            background: #1c6194;
            color: white;
        }
    </style>
</head>

<body>

<div class="login-card">

    <div class="text-center mb-4">

        <img
            src="{{ asset('images/logo_dian-project.png') }}"
            alt="Logo Dian Project"
            class="login-logo mb-3"
        >

        <h3 class="fw-bold">Admin Login</h3>

        <p class="text-muted">
            Dian Project Management System
        </p>

    </div>

    <form action="{{ route('admin.login.process') }}" method="POST">

@csrf

        <div class="mb-3">
            @if (session('error'))
            <div class="alert alert-danger">
            {{ session('error') }}
        </div>
@endif

            @if ($errors->any())
        <div class="alert alert-danger">
            email atau password wajib diisi dengan benar!
        </div>
@endif

            <label class="form-label fw-semibold">
                Email Address
            </label>

            <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Masukkan email"
                autocomplete="off"
                required>

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label fw-semibold">
                Password
            </label>

            <input type="password"
            name="password"
            id="password"
            class="form-control"
            placeholder="Masukkan password"
            autocomplete="new-password"
            required>

            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <button type="submit" class="btn btn-login w-100">
            Login
        </button>

    </form>

    <div class="text-center mt-4">

        <a href="{{ route('home') }}"
        class="text-decoration-none text-primary">
        Kembali ke Website
        </a>

        <p class="text-muted small mt-3 mb-0">
            DemoLogin:admin@dianproject.com/DianAdmin123!
        </p>

    </div>

</div>

<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
