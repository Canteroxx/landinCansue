@extends('header')

@section('header')
<main 
    class="snap-y snap-mandatory relative w-full h-screen overflow-y-auto overflow-x-hidden scroll-smooth text-slate-300 ">
      <section class="snap-center h-screen">
        <div class="h-screen p-10 flex my-10 flex-col items-center gap-2">
          <h1 class="text-5xl">One Piece</h1>
          <video src="{{asset('img/op/intro.mp4')}}" loop autoplay muted class="object-cover object-center w-[90%] h-[80%]"></video>
          <div class="absolute inset-0 flex items-center justify-center flex-col gap-4">
          </div>
          <a href="#" class="text-xl underline hover:cursor-pointer">Descarga Aqui</a>
        </div>
      </section>
      <section class="snap-center h-screen">
        <div class="h-screen pl-40 pt-20 pb-40 pr-40 flex flex-row gap-6" >
          <img src="{{asset('img/op/vertical.jpg')}}" alt="img" class="object-cover">
          <div class="info flex flex-col gap-2">
            <h1 class="text-5xl">One Piece</h1>
            <p class="text-2xl text-justify" >
			One Piece es la historia de un chico llamado Monkey D. Luffy, quién se inspiró en Shanks, un pirata que le salvó la vida, para convertirse en el Rey de los Piratas. Al comienzo de la serie, veinticuatro años antes de la historia actual, un pirata llamado Gol D. Roger, conocido como el Rey de los Piratas, fue ejecutado, pero antes de su muerte, le dijo a la multitud de su tesoro, el One Piece. Sus palabras desataron lo que sería conocida como «la Gran Era de la Piratería», innumerables piratas se dispusieron a buscar el tesoro causando grandes problemas al Gobierno Mundial. Monkey D. Luffy se convierte en uno de ellos, deseando ser el próximo Rey de los Piratas y se dispone a reunir compañeros de tripulación y comenzar sus aventuras.
            </p>
        </div>
        </div>
      </section>      
      <section class="snap-center h-screen">
        <div class="h-screen pl-20 flex flex-row">
            <article class="flex flex-col ml-10 gap-10">
              <h1 class="text-3xl pt-20">Comentarios</h1>
              <form action="">
                <section id="contact">
                  @auth
                  <div name>
                    <label for=""></label>
                    <input type="text">
                  </div>
                  @endauth
                  <div>

                  </div>
                </section>
              </form>
            </article>
        </div>
      </section>      
      <section class="snap-center h-[80vh]">
        <div class="h-screen p-40 flex flex-row">
          <div class="container mx-auto md:px-6">
            <section class="">
              <h1 class="text-3xl text-white my-6">Mas juegos del género:</h1>
              <div class="grid gap-6 lg:grid-cols-3 h-[200px]">
                <div
                  id="op-card"
                  class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg hover:cursor-pointer"
                  data-te-ripple-init
                  data-te-ripple-color="dark"
                >
                  <img
                    src="{{asset('img/op/horizontal.jpeg')}}"
                    class="w-full align-middle transition duration-300 ease-linear"
                  />
                    <div
                      class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed bg-[hsla(0,0%,0%,0.3)]"
                    >
                      <div class="flex h-full items-end justify-start">
                        <h5 class="m-6 text-lg font-bold text-white">One Piece</h5>
                      </div>
                    </div>
                    <div>
                      <div
                        class="mask absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,99.2%,0.15)]"
                      ></div>
                    </div>
                </div>
                <div
                  id="ao-card"
                  class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg hover:cursor-pointer"
                  data-te-ripple-init
                  data-te-ripple-color="dark"
                >
                  <img
                    src="{{asset('img/ao/horizontal.webp')}}"
                    class="w-full align-middle transition duration-300 ease-linear"
                  />
                    <div
                      class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed bg-[hsla(0,0%,0%,0.3)]"
                    >
                      <div class="flex h-full items-end justify-start">
                        <h5 class="m-6 text-lg font-bold text-white">Ao Ashi</h5>
                      </div>
                    </div>
                    <div>
                      <div
                        class="mask absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,99.2%,0.15)]"
                      ></div>
                    </div>
                </div>
      
                <div
                  id="sl-card"
                  class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg hover:cursor-pointer"
                  data-te-ripple-init
                  data-te-ripple-color="dark"
                >
                  <img
                    src="{{asset('img/sl/horizontal.avif')}}"
                    class="w-full align-middle transition duration-300 ease-linear"
                  />
                    <div
                      class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed bg-[hsla(0,0%,0%,0.3)]"
                    >
                      <div class="flex h-full items-end justify-start">
                        <h5 class="m-6 text-lg font-bold text-white">Solo Leveling</h5>
                      </div>
                    </div>
                    <div>
                      <div
                        class="mask absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,99.2%,0.15)]"
                      ></div>
                    </div>
                </div>
              </div>
              <div id="infoModal" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 hidden items-center justify-center">
                <div class="bg-white rounded-lg p-8 max-w-md w-full">
                    <h2 id="modalTitle" class="text-xl font-bold mb-4"></h2>
                    <p id="modalDescription"></p>
                    <a href="#" id="modalLink" class="block mt-4 text-blue-500 hover:underline">Ver más</a>
                    <button id="closeModal" class="mt-4 px-4 py-2 bg-slate-800 text-white rounded hover:bg-slate-950">Cerrar</button>
                </div>
            </div>
            </section>
          </div>
        </div>
      </section>
    </main>
@endsection('header')
