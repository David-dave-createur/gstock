@extends('layouts.auth')

@section('form')

<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Bienvenue sur G-stock</h3>
                        <p>Connectez-vous pour accéder à votre compte.</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <input id="email" placeholder="Adresse e-mail" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror


                            <input placeholder="Mot de passe" id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <input type="checkbox" id="chk1"><label for="chk1">Se souvenir de moi</label>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Connexion</button> <small
                                    style="color: #fff">J'ai pas compte ! <a href="{{ route('register') }}">S'inscrire</a></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection


