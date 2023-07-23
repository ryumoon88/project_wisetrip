@extends('layout.main')
@section('content')
<<<<<<< Updated upstream
    <div class="hero-wrap js-fullheight" style="background-image: url('images/taluak.jpg');">
=======
    <div class="hero-wrap js-fullheight" style="background-image: url({{asset('images/taluak.jpg')}});">
>>>>>>> Stashed changes
        <div class="custom-custom-overlay"></div>
        <div class="custom-container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="/">Home |</a></span> <span>Sign In/Up</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Login</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="forms-section">
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    Login
                    <span class="underline"></span>
                </button>
<<<<<<< Updated upstream
                <form class="form form-login">
                    <fieldset>
                        <legend>Please, enter your email and password for login.</legend>

                        <div class="input-block">
                            <label for="login-email">E-mail</label>
                            <input id="login-email" type="email" required>
                        </div>
                        <div class="input-block">
                            <label for="login-password">Password</label>
                            <input id="login-password" type="password" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-login">Login</button>
=======
                <form class="form form-login" method="POST" role="form" action="{{url('/login')}}" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <legend>Silahkan masukkan email dan password anda untuk masuk.</legend>

                        <div class="input-block">
                            <label for="login_email">E-mail</label>
                            <input name="login_email" id="login_email" type="email" class="@error('login_email')is-invalid
                            @enderror" required>
                            @error('login_email')
                                {{$message}}
                            @enderror
                        </div>
                        <div class="input-block">
                            <label for="login_password">Password</label>
                            <input name="login_password" id="login_password" class="@error('login_password')is-invalid
                            @enderror" type="password" required>
                            @error('login_password')
                                {{$message}}
                            @enderror
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-login">Masuk</button>
>>>>>>> Stashed changes
                </form>
            </div>
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    Sign Up
                    <span class="underline"></span>
                </button>
<<<<<<< Updated upstream
                <form class="form form-signup">
                    <fieldset>
                        <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                        <div class="input-block">
                            <label for="name">Name</label>
                            <input id="name" type="text" required>
                        </div>
                        <div class="input-block">
                            <label for="username">Username</label>
                            <input id="username" type="text" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-email">E-mail</label>
                            <input id="signup-email" type="email" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password">Password</label>
                            <input id="signup-password" type="password" required>
                        </div>

                    </fieldset>
                    <button type="submit" class="btn-signup">Continue</button>
=======
                <form class="form form-signup" method="POST" role="form" action="{{url('/register')}}" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <legend>Silahkan masukkan nama, email, username dan password untuk daftar akun.</legend>
                        <div class="input-block">
                            <label for="name">Nama</label>
                            <input name="name" id="name" type="text" required>
                        </div>
                        <div class="input-block">
                            <label for="username">Username</label>
                            <input name="username" id="username" type="text" required>
                        </div>
                        <div class="input-block">
                            <label for="register_email">E-mail</label>
                            <input name="register_email" id="register_email" lass="@error('register_email')is-invalid
                            @enderror" type="email" required>
                            @error('register_email')
                                {{$message}}
                            @enderror
                        </div>
                        <div class="input-block">
                            <label for="register_password">Password</label>
                            <input name="register_password" id="register_password" lass="@error('register_password')is-invalid
                            @enderror" type="password" required>
                            @error('register_password')
                                {{$message}}
                            @enderror
                        </div>

                    </fieldset>
                    <button type="submit" class="btn-signup">Daftar</button>
>>>>>>> Stashed changes
                </form>
            </div>
        </div>
    </section>
@endsection
