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
                        <h3>Rejoignez G-stock dès maintenant</h3>
                        <p>Créez un compte pour gérer votre stock plus efficacement</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input id="name" type="text" placeholder="Nom & prenom"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>


                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

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


                            <input id="password-confirm" type="password" class="form-control"
                                placeholder="Confirmation du mot passe" name="password_confirmation" required
                                autocomplete="new-password">
                                
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Inscription</button> <small
                                    style="color: #fff">J'ai un compte ! <a href="{{route('login') }}">Se connecter</a></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection


