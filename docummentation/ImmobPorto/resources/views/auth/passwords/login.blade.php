@extends('base')
@section('title')
	Connexion
@endsection
@section('link')
    	<link rel="stylesheet" href="css/main.css">
@endsection
@section('contenupage')
	<div class="limiter">
		<div class="container-login100" method="POST" action="{{ route('login') }}">
			@csrf
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Connexion à votre compte
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Votre e-mai">
						@error('email')
				                    <span class="invalid-feedback" role="alert">
				                        <strong>{{ $message }}</strong>
				                    </span>
				                @enderror
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

				                @error('password')
				                    <span class="invalid-feedback" role="alert">
				                        <strong>{{ $message }}</strong>
				                    </span>
				                @enderror
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							{{ __('Se connecter') }}
						</button>
					</div>

					<div class="text-center">
						<span class="txt1">
							Vous n'avez pas de compte?
						</span>

						<a href="/inscription" class="txt2 hov1">
							S'inscrire
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
