<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>iPlayMath</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/iPM/img/logo_icon.png') }}" rel="icon">
  <link href="{{ asset('img/iPM/img/logo_icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/iPM/css/styles-copy.css') }}" rel="stylesheet">

</head>
<body>
<!-- <h2>Weekly Coding Challenge #1: Sign in/up Form</h2> -->
<div class="container" id="container">
	
	<div class="form-container sign-in-container">
    <!-- Form Password -->

		<form action="{{ route('password.email') }}" method = "POST">
            @csrf
			<h1>Recuperar</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span> -->
			<!-- <input type="email" placeholder="Email" /> -->
            <input type="email" class="form-control" placeholder="{{ __('Email') }}" value="{{ old('email') }}" id="email" name="email"/>
            @error('email')
                <div><label style="color:#DC3545">{{ $message }}</label></div>
            @enderror

            <br>
			<button id="btn-primary" type="submit">Recuperar Contraseña</button>

		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>¡No te preocupes si has llegado a esta página!</h1>
                <br>
                <img src="{{ asset('img/iPM/img/logo_white_large.png') }}" style="height: 70px;" alt="" title="iPlayMath">
                        
				<p>Para recuperar tu contraseña ingresa tu correo</p>
				<!-- <button class="ghost" id="signIn">Iniciar Sesión</button> -->
			</div>
			<!-- <div class="overlay-panel overlay-right">
				<h1>¡Hola!</h1>
        <br> -->
        <!-- <img src="{{ asset('img/iPM/img/logo_white_large.png') }}" style="height: 70px;" alt="" title="iPlayMath">
				<p>Ingresa tus datos y comienza a practicar matemáticas</p>
				<button class="ghost" id="signUp">Registrarse</button>
			</div>
		</div> -->
	</div>
</div>

<footer>
	<p>
    &copy; Copyright <strong>iPlayMath</strong>. All Rights Reserved
		<!-- Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	 -->
  </p>
</footer>

</body>
</html>
