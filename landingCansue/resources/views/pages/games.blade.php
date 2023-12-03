@extends('header')
@section('header')
<h1 class="text-3xl text-white text-center m-8">Juegos</h1>
    <main class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-6 mx-4 place-items-center my-8">
      <article class="relative w-64 transition-all duration-300 transfor hover:-translate-y-2">
        <img src="{{asset('img/op/vertical.jpg')}}" alt="">
        <a href="games/OnePiece">
          <img src="{{asset('img/op/main.png')}}" alt="">
        </a>
      </article>
      <article class="relative w-64 transition-all duration-300 transfor hover:-translate-y-2">
        <img src="{{asset('img/ao/vertical.jpg')}}" alt="">
        <a href="games/AoAshi">
          <img src="{{asset('img/ao/main.jpg')}}" alt="">
        </a>
      </article>
      <article class="relative w-64 transition-all duration-300 transfor hover:-translate-y-2">
        <img src="{{asset('img/jk/vertical.png')}}" alt="">
        <a href="games/JujutsuKaisen">
          <img src="{{asset('img/jk/main.png')}}" alt="">
        </a>
      </article>
      <article class="relative w-64 transition-all duration-300 transfor hover:-translate-y-2">
        <img src="{{asset('img/sl/vertical.jpeg')}}" alt="">
        <a href="games/SoloLeveling">
          <img src="{{asset('img/sl/main.png')}}" alt="">
        </a>
      </article>
    </main>
    <link rel="stylesheet" href="{{asset('css/games.css')}}">
    <hr class="my-6">
		  <footer
  class="text-center lg:text-left py-4">
  <div class="text-center text-neutral-700 dark:text-neutral-200">
    <p>Copyright © 2023 | Todos los derechos reservados</p>
  </div>
</footer>
@endsection
