<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        {{-- @if (session('success'))
            <h2>{{ session('success') }}</h2>
        @endif --}}
        <div class="row justify-content-center">
            <div class="col-md-6">
                <p>Kembali ke <a href="/">Halaman Utama</a></p>
                <form class="card p-5" method="POST" action="/login">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <p>Belum punya akun? <a href="/register">Register</a></p>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>