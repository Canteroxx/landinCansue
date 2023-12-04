@extends('header')

@section('header')
<div class="bg-fixed bg-cover bg-center h-[91vh] w-screen flex items-center justify-center" style="background-image: url('../img//fondo.jpg');">
    <div class="bg-slate-900 bg-opacity-60 backdrop-blur-md rounded-lg p-8 w-96">
        <form action="/contact" method="POST" id="msg-form" class="flex flex-col text-white">
            @csrf
            Nombre
            @auth
            <input name="username" id="msg-name" type="name" class="bg-gray-900 p-1 mb-2" value="{{auth()->user()->username}}">
			Correo
            <input name="email" id="msg-email" type="email" class="bg-gray-900 p-1 mb-2" value="{{auth()->user()->email}}">
			@else
			<input name="username" id="msg-name" type="name" class="bg-gray-900 p-1 mb-2" placeholder="Nombre" required>
			Correo
            <input name="email" id="msg-email" type="email" class="bg-gray-900 p-1 mb-2" placeholder="Correo" required>
			@endauth
            Deja tu Mensaje:
            <textarea id="msg-msg" name="comment" rows="6" class="bg-gray-900 p-1 mb-2" placeholder="" required></textarea>
            <input type="submit" value="Enviar" class="p-1 bg-blue-900 hover:cursor-pointer">
        </form>
    </div>
</div>
<script src="{{asset('js/contact.js')}}"></script>
@endsection
