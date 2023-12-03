@extends('header')

@section('header')
<section class="flex justify-center items-center w-full h-[90vh]">
		<div class="bg-opacity-25 backdrop-blur-lg border border-white/50 rounded-lg p-8 flex justify-center items-center w-96 h-96">
			<form action="/login" method="POST" class="text-white text-center">
				@csrf
				<h2 class="text-2xl mb-8">Inicia Sesion</h2>
				<div class="relative mb-8 w-72">
					<ion-icon name="mail-outline" class="absolute text-white top-2/4 transform -translate-y-2/4 left-2 text-xl"></ion-icon>
					<input name="username" required placeholder="Correo o Usuario" class="bg-transparent border-b border-white w-full py-2 pl-8 pr-4 text-white outline-none">
				</div>
				<div class="relative mb-8 w-72">
					<ion-icon name="lock-closed-outline" class="absolute text-white top-2/4 transform -translate-y-2/4 left-2 text-xl"></ion-icon>
					<input name="password" type="password" required placeholder="Contraseña" class="bg-transparent border-b border-white w-full py-2 pl-8 pr-4 text-white outline-none">
				</div>
				<div class="flex justify-between items-center mb-8">
					<label class="flex items-center">
						<input type="checkbox" class="mr-2">
						<span>Recordarme</span>
					</label>
					<a href="{{url('/olvido')}}" class="hover:underline">Olvidé mi contraseña</a>
				</div>
					<input type="submit" value="Ingresar" class="w-full py-2 rounded-full bg-white text-black font-bold mb-8">
				<p>No tienes una cuenta?  <a href="register" class="hover:underline">Registrate</a></p>
			</form>
		</div>
	</section>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@endsection('header')