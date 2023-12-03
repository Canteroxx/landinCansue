@extends('header')

@section('header')
<main 
    class="snap-y snap-mandatory relative w-full h-screen overflow-y-auto overflow-x-hidden scroll-smooth text-slate-300 ">
      <section class="snap-center h-screen">
      <div class="h-screen p-10 flex my-10 flex-col items-center gap-2">
          <h1 class="text-5xl">Ao Ashi</h1>
          <video src="{{asset('img/ao/intro.mp4')}}" loop autoplay muted class="object-cover object-center w-[90%] h-[80%]"></video>
          <div class="absolute inset-0 flex items-center justify-center flex-col gap-4">
          </div>
          <a href="#" class="text-xl underline hover:cursor-pointer">Descarga Aqui</a>
        </div>
      </section>
      <section class="snap-center h-screen">
      <div class="h-screen pl-40 pt-20 pb-40 pr-40 flex flex-row gap-6" >
          <img src="{{asset('img/ao/vertical.jpg')}}" alt="img" class="object-cover">
          <div class="info flex flex-col gap-2">
            <h1 class="text-5xl">Ao Ashi</h1>
            <p class="text-2xl text-justify">
                Ashito Aoi es un estudiante de tercero de secundaria de la prefectura de Ehime. Este tiene un gran talento en el fútbol, pero trata de ocultarlo. Debido a su personalidad directa, se mete en problemas que cambian den una vuelta a su vida de 180 grados.  Tras eso, Tatsuya Fukuya – un veterano del fuerte equipo del J-Club Tokyo City Esperion y entrenador del equipo juvenil del club – aparece delante de Ashito. Tatsuya ve a Ashito y  su talento, y lo invita a probar para el equipo juvenil en Tokio.
            </p>
        </div>
        </div>
      </section>      
      <section class="snap-center h-screen">
      <div class="h-screen pl-20 flex flex-row">
            <article class="flex flex-col ml-10 gap-10">
            <h1 class="text-3xl pt-20">Comentarios</h1>
            @auth
            <h2 class="text-3xl">Hola {{auth()->user()->username}}</h2>
            @endauth
              <form action="">
                <section id="contact">
                  <div name>
                    <label for=""></label>
                    <input type="text">
                  </div>
                  <div>
                  </div>
                </section>
              </form>
            </article>
        </div>
      </section>      
      <section class="snap-center h-screen">
        <div class="h-screen pl-40 flex flex-row">
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
                    src="{{asset('img/soloL/horizontal.avif')}}"
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
