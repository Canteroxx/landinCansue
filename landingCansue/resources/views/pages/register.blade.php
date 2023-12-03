<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../login.css">
	<title>Registro</title>
	<link
	rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com/3.3.0"></script>
  <script>
	tailwind.config = {
	theme: {
		fontFamily: {
	  inter: ["Inter", "sans-serif"],
	},
  },
	corePlugins: {
	  preflight: false,
	},
	};
  </script>
  </head>
  <body class="font-inter bg-gray-900">
	<form action="/register" method="POST">
		@csrf	
	<section>
		<div class="form-box">
			<div class="form-value">
					<h2>Register</h2>
					<div class="inputbox">
						<ion-icon name="mail-outline"></ion-icon>
						<input type="text" name="username" required>
						<label id="Nombre">Usuario</label>
					</div>
                    <div class="inputbox">
						<ion-icon name="mail-outline"></ion-icon>
						<input type="email" name="email" required>
						<label id="Correo">Correo</label>
					</div>
					<div class="inputbox">
						<ion-icon name="lock-closed-outline"></ion-icon>
						<input type="password" name="password" required>
						<label id="Contraseña">Contraseña</label>
					</div>
					<div class="inputbox">
						<ion-icon name="lock-closed-outline"></ion-icon>
						<input type="password" name="password_confirmation" required>
						<label id="Contraseña">Confirmar Contraseña</label>
					</div>
					<a href="/">
						<input class="button" type="submit" value="Registrarse">
					  </a>
					<div class="register">
						<p>Ya tengo una cuenta <a href="login">Iniciar Sesion</a></p> 
					</div>
			</div>
		</div>
	</section>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	<link rel="stylesheet" href="{{asset('css/login.css')}}">
	</form>
</body>
</html>
