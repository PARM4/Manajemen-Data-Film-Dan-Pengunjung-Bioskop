<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Fonts and Styles -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
    
            <div class="col-xl-6 col-lg-6 col-md-9">
                <div class="card o-hidden border-0 shadow-lg mt-5">
                    <div class="card-body p-4">
    
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                        </div>
    
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-user"
                                    placeholder="Nama Lengkap" required value="{{ old('name') }}">
                            </div>
    
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user"
                                    placeholder="Email" required value="{{ old('email') }}">
                            </div>
    
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user"
                                    placeholder="Kata Sandi" required>
                            </div>
    
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control form-control-user"
                                    placeholder="Konfirmasi Kata Sandi" required>
                            </div>
                            <div>
                                <input type="hidden" name="role" value="pengunjung">
                            </div>
    
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar
                            </button>
                        </form>
                        {{-- Untuk pesan error dari session seperti "Email sudah digunakan" --}}
                        @if (session('error'))
                            <div class="alert alert-danger mt-3">
                                {{ session('error') }}
                            </div>
                        @endif

                        {{-- Untuk pesan sukses dari session --}}
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Sudah punya akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>


