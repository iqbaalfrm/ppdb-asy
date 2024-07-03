<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
        
    @include('include.style')

    <style>
        #auth-left {
            max-width: 400px; /* Make the form smaller */
            margin: auto; /* Center the form */
            margin-top: 50px; /* Add top margin */
        }
        .form-group {
            margin-bottom: 15px; /* Reduce the margin-bottom of form groups */
        }
        .btn-block {
            margin-top: 20px; /* Reduce the top margin of the login button */
        }
    </style>
</head>

<body>
    <div id="auth">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12"> <!-- Removed col-lg-5 for better centering -->
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="./assets/compiled/svg/logo.svg" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Silahkan Login Dahulu.</p>

                    <form method="post" action="{{route('login.store')}}">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror form-control-xl" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg">Masuk</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Belum Punya Akun? <a href={{route('register')}} class="font-bold">Daftar Disini</a>.</p>
                        <p><a class="font-bold" href="auth-forgot-password.html">Lupa Password?</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
