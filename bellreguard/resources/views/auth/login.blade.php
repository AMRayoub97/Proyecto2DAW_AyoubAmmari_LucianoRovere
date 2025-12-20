    @extends('plantilla')

    @section('titulo', 'Log-In')

    @section('contenido')

        @vite(['resources/sass/auth/login.scss'])

        <div class="login-wrapper">
            <div class="login-left">
                <div class="form-container">
                    <div class="logo-box">
                        <img src="{{ asset('images/logo_sin_bg.png') }}" alt="Logo" class="img-logo">
                    </div>

                    <h2 class="login-title">ACCEDE A TU CUENTA</h2>

                    <form action="#" method="POST">
                        @csrf
                        <label for="email">correo</label>
                        <input type="email" name="correo" placeholder="CORREO" class="custom-input" required>
                        <label for="password">password</label>
                        <input type="password" name="password" placeholder="CONTRASEÑA" class="custom-input" required>

                        <div class="check-box-area">
                            <input type="checkbox" name="recordar" id="remember"><label for="recordar">Recuerda me</label>
                        </div>

                        <button type="submit" class="btn-submit-red"></button>
                    </form>
                </div>
            </div>

            <div class="login-right">
                <div class="register-overlay">
                    <h1 class="register-title">Únete a la comunidad</h1>
                    <a href="#" class="btn-pill-black">REGÍSTRATE</a>
                </div>
            </div>
        </div>
    @endsection
