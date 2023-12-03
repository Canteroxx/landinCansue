@extends('header')

@section('header')
<main 
    class="snap-y snap-mandatory relative w-full h-screen overflow-y-auto overflow-x-hidden scroll-smooth text-slate-300 ">
      <section class="snap-center h-screen">
        <div class="h-screen p-10 flex my-10 flex-col items-center gap-2">
          <h1 class="text-5xl">Solo Leveling</h1>
          <video src="{{asset('img/sl/intro.mp4')}}" loop autoplay muted class="object-cover object-center w-[90%] h-[80%]"></video>
          <div class="absolute inset-0 flex items-center justify-center flex-col gap-4">
          </div>
          <a href="#" class="text-xl underline hover:cursor-pointer">Descarga Aqui</a>
        </div>
      </section>
      <section class="snap-center h-screen">
        <div class="h-screen pl-40 pt-20 pb-40 pr-40 flex flex-row gap-6" >
          <img src="{{asset('img/sl/vertical.jpeg')}}" alt="img" class="object-cover">
          <div class="info flex flex-col gap-2">
            <h1 class="text-5xl">Solo Leveling</h1>
            <p class="text-2xl text-justify" >
			En un mundo donde empezaron a aparecer puertas dimensionales, al azar, que conectan al mundo real con el mundo de los monstruos, Sung Jin-Woo, nuestro protagonista, es uno de los miles de cazadores al rededor del mundo que reciben el poder de atravesar dichas puertas y entrar a las Mazmorras para luchar por la salvación de la humanidad. Lamentablemente, Sung Jin-Woo es un cazador de rango E (El más bajo de todos) y al no tener ni el dinero ni la habilidad para entrar en Mazmorras de más alto nivel, es ridiculizado como ”El Cazador Más Débil de Todos”.

Un día, él y su equipo quedaron atrapados en una mazmorra de gran dificultad. Esta mazmorra estaba oculta dentro de una de rango bajo. Cuando ya había aceptado su muerte, recibió un extraño poder y un registro de misiones diarias que sólo él puede ver. Completar cada misión en el registro le permite hacer algo que ningún otro cazador puede hacer, subir de nivel. Es así como poco a poco logra escapar de la desdicha de ser el cazador más débil de todos y empieza a descubrir que ser fuerte no es lo único que necesitará para sobrevivir en este mundo.
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
