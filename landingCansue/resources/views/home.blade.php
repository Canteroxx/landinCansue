@extends('header')

@section('header')
<main>
    <section class="mb-10">
        <div
          class="relative overflow-hidden bg-cover bg-no-repeat"
          style="
            background-position: 50%;
            background-image: url('{{asset('img/fondo.jpg')}}');
            height: 500px;
          "
        >
          <div
            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed"
          >
            <div class="flex h-full items-center justify-center">
              <div class="px-6 text-center text-white md:px-12">
                <h1
                  class="mt-2 mb-16 text-5xl font-extralight tracking-wide md:text-6xl xl:text-7xl"
                >
                  Somos el futuro <br /><span>de la entretención</span>
                </h1>
                <a
                  class="rounded border-2 border-neutral-50 px-[46px] pt-[14px] pb-[12px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out
                  hover:border-neutral-100 hover:bg-neutral-100 hover:text-slate-800"
                  data-te-ripple-init
                  data-te-ripple-color="light"
                  href="games"
                >
                  Ver Juegos
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="container mx-auto md:px-6">
        <section class="">
          <h1 class="text-3xl text-white my-2">Nuestros productos mas vendidos:</h1>
          <div class="grid gap-6 lg:grid-cols-3 h-[200px]">
            <div
              id="mop-card"
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
              id="mao-card"
              class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg hover:cursor-pointer"
              data-te-ripple-init
              data-te-ripple-color="dark"
            >
              <img
                src="{{asset('img/ao/horizontal.png')}}"
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
              id="msl-card"
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
    </main>
    <hr class="my-6">
    <footer
  class="text-center lg:text-left py-4">
  <div class="text-center text-neutral-700 dark:text-neutral-200">
    <p>Copyright © 2023 | Todos los derechos reservados</p>
  </div>
</footer>
    <script src="{{ asset('js/index.js')}}"></script>
  </body>
@endsection
