@extends('base')
@section('title')
	Inscription
@endsection
@section('link')
    	<link rel="stylesheet" href="css/inscription.css">
@endsection
@section('contenupage')
	<div>
        <section class="signup">
            <div class="container1">
                <div class="signup-content1">
                    <form action = "" method ="get" >
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Votre nom et prenom"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Votre e-mail"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Votre mot de passe"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password1" id="password" placeholder="Confirmer mot de passe"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="S'inscrire"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Avez vous un compte ? <a href="/login" class="loginhere-link">Se connecter</a>
                    </p>
                </div>
            </div>
        </section>
	</div>
    <!-- JS -->
    <script src="js/inscription.js"></script>
@endsection
