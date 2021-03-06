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
	<div class="form-container sign-up-container">
		<!-- Form Register -->
    <form action="{{ route('register') }}" method="POST">
      @csrf
			<h1>Crea tu Perfil</h1>
      
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span> -->
			<!-- <input type="text" placeholder="Name" /> -->
      <input type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" id="name" name="name" />
      @error('name')
        <div><label style="color:#DC3545">{{ $message }}</label></div>
      @enderror

      <!-- <input type="text" placeholder="Edad" /> -->
      <input type="text" class="form-control" placeholder="Edad" value="{{ old('age') }}" id="age" name="age" />
      @error('age')
        <div><label style="color:#DC3545">{{ $message }}</label></div>
      @enderror

			<!-- <input type="email" placeholder="Email" /> -->
      <input type="email" class="form-control" placeholder="{{ __('Email') }}" value="{{ old('email') }}" id="email" name="email"/>
      @error('email')
        <div><label style="color:#DC3545">{{ $message }}</label></div>
      @enderror

			<!-- <input type="password" placeholder="Password" /> -->
      <input type="password" class="form-control" placeholder="{{ __('Password') }}" value="{{ old('password') }}" id="password" name="password" />
      @error('password')
        <div><label style="color:#DC3545">{{ $message }}</label></div>
      @enderror

			<!-- <input type="password" placeholder="Confirmar Password" /> -->
      <input type="password" class="form-control"  placeholder="{{ __('Confirm Password') }}" value="" id="password_confirmation" name="password_confirmation" />
      @error('password_confirmation')
        <div><label style="color:#DC3545">{{ $message }}</label></div>
      @enderror

      <input type="hidden" class="form-control" value="0" id="score" name="score" />


      <br>
			<button id="btn-primary" type="submit">Registrarse</button>
      <!-- <input type="submit" id="btn-primary"  value="Registrarse"/> -->
		</form>
	</div>

	<div class="form-container sign-in-container">
    <!-- Form LogIn -->
		<form action="{{ route('login') }}" method="POST">
      @csrf
			<h1>Ingresar</h1>
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

			<!-- <input type="password" placeholder="Password" /> -->
      <input type="password" class="form-control" placeholder="{{ __('Password') }}" value="{{ old('password') }}" id="password" name="password" />
      @error('password')
        <div><label style="color:#DC3545">{{ $message }}</label></div>
      @enderror

      @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">
          ??Olvidaste tu contrase??a?
        </a>
      @endif
			<!-- <a href="#">??Olvidaste tu contrase??a?</a> -->
      
			<button id="btn-primary" type="submit">Iniciar sesi??n</button>

		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>??Bienvenido de nuevo!</h1>
        <br>
        <img src="{{ asset('img/iPM/img/logo_white_large.png') }}" style="height: 70px;" alt="" title="iPlayMath">
				
				<p>Para seguir practicando, inicia sesi??n con tu informaci??n personal</p>
				<button class="ghost" id="signIn">Iniciar Sesi??n</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>??Hola!</h1>
        <br>
        <img src="{{ asset('img/iPM/img/logo_white_large.png') }}" style="height: 70px;" alt="" title="iPlayMath">
				<p>Ingresa tus datos y comienza a practicar matem??ticas</p>
				<button class="ghost" id="signUp">Registrarse</button>
			</div>
		</div>
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
<script src="{{ asset('js/iPM/js/main2.js') }}"></script>

</body>
</html>