@extends('header')

@section('header')
<main 
    class="snap-y snap-mandatory relative w-full h-screen overflow-y-auto overflow-x-hidden scroll-smooth text-slate-300 ">
      <section class="snap-center h-screen">
        <div class="h-screen p-10 flex my-10 flex-col items-center gap-2">
          <h1 class="text-5xl">Haikyuuu</h1>
          <video src="{{asset('img/hk/intro.mp4')}}" loop autoplay muted class="object-cover object-center w-[90%] h-[80%]"></video>
          <div class="absolute inset-0 flex items-center justify-center flex-col gap-4">
          </div>
          <a href="#" class="text-xl underline hover:cursor-pointer">Descarga Aqui</a>
        </div>
      </section>
      <section class="snap-center h-screen">
        <div class="h-screen pl-40 pt-20 pb-40 pr-40 flex flex-row gap-6" >
          <img src="{{asset('img/hk/vertical.png')}}" alt="img" class="object-cover">
          <div class="info flex flex-col gap-2">
            <h1 class="text-5xl">Haikyuuu</h1>
            <p class="text-2xl text-justify" >
            La historia sigue la carrera de Shoyo Hinata, que decide dedicarse al voleibol tras ver a los Pequeños Gigantes cuando todavía va a primaria. Pero en el último torneo en secundaria, su equipo recibe una auténtica paliza del equipo de Tobio Kageyama. Sin embargo, Hinata también se une al equipo de voleibol al entrar al instituto para así vengarse de Kageyama pero, para su sorpresa, Kageyama también está en el equipo. Así, dos antiguos rivales forman un equipo imbatible con el que buscan conseguir el campeonato nacional.  
          </p>
        </div>
        </div>
      </section>      
      <section class="snap-center h-screen">
        <div class="h-screen p-40 flex flex-row">
          <div class="container mx-auto md:px-6">
            <section class="">
              <h1 class="text-3xl text-white my-6">Mas juegos del género:</h1>
              <div class="grid gap-6 lg:grid-cols-3 h-[200px]">
                <div
                  id="bl-card"
                  class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg hover:cursor-pointer"
                  data-te-ripple-init
                  data-te-ripple-color="dark"
                >
                  <img
                    src="{{asset('img/bl/horizontal.png')}}"
                    class="w-full align-middle transition duration-300 ease-linear"
                  />
                    <div
                      class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed bg-[hsla(0,0%,0%,0.3)]"
                    >
                      <div class="flex h-full items-end justify-start">
                        <h5 class="m-6 text-lg font-bold text-white">Blue Lock</h5>
                      </div>
                    </div>
                    <div>
                      <div
                        class="mask absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,99.2%,0.15)]"
                      ></div>
                    </div>
                </div>
                <div
                  id="hk-card"
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
                  id="knb-card"
                  class="zoom relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg hover:cursor-pointer"
                  data-te-ripple-init
                  data-te-ripple-color="dark"
                >
                  <img
                    src="{{asset('img/knb/horizontal.png')}}"
                    class="w-full align-middle transition duration-300 ease-linear"
                  />
                    <div
                      class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed bg-[hsla(0,0%,0%,0.3)]"
                    >
                      <div class="flex h-full items-end justify-start">
                        <h5 class="m-6 text-lg font-bold text-white">Kuroko No Basquet</h5>
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
                    <a href="" id="modalLink" class="block mt-4 text-blue-500 hover:underline">Ver más</a>
                    <button id="closeModal" class="mt-4 px-4 py-2 bg-slate-800 text-white rounded hover:bg-slate-950">Cerrar</button>
                </div>
            </div>
            </section>
          </div>
        </div>
      </section>      
      <section class="snap-center h-screen w-screen flex">
        <div class="h-screen pl-40 flex flex-row pr-20">
            <div class="flex flex-col ml-10 gap-10">
              <h1 class="text-3xl pt-20">Agregar Comentario</h1>
              <form action="/games/Haikyuuu" method="POST" class="flex flex-col text-white pb-2">
                  @csrf
                  @auth
                  Nombre:
                  <input type="name" name="username" value="{{auth()->user()->username}}" class="text-black p-2 mb-2" required> 
                  Comentario:
                  <textarea name="comment" id="" cols="50" rows="2" class="text-black p-2 mb-2" required></textarea>
                  @else
                  Nombre:
                  <input type="name" name="username" class="text-black p-2 mb-2" required>
                  Comentario:
                  <textarea name="comment" id="" cols="50" rows="5" class="text-black p-2 mb-2"required required oninput="limitWords(this, 10 0)"></textarea>
                  @endauth
                  <input type="hidden" name="game" value="Haikyuuu">
                  <input type="submit" value="Enviar" class="p-1 bg-blue-900 hover:cursor-pointer">
                  <div>
                  </div>
              </form>
          </div>
          <div class="flex flex-col">
            <h1 class="text-3xl pt-20 pl-20">Comentarios</h1>
              @foreach($comentarios as $item)
                <div class="flexbox flex flex-col gap-4">              
                  <div class="card grow shrink-0 flex flex-row items-center text-black p-5 bg-white rounded-lg mb-5">
                      <img id="ImagenUsuario" src="https://cdn-icons-png.flaticon.com/128/149/149071.png" alt="Imagen del usuario" class="h-14 w-14 mr-4"> 
                      <div class="flex flex-col">
                          <p>{{$item->username}}</p>
                          <p>{{$item->comment}}</p>
                      </div>
                      <i class="fa-sharp fa-solid fa-x" style="color: #ff0000;"></i>
                  </div>
                </div>
              @endforeach
          </div>
          <div>
          </div>
        </div>
      </section>
      <section class="snap-center h-screen w-screen flex">
      </section>  
    </main>
  <link rel="stylesheet" href="{{asset('css/comentarios.css')}}">
@endsection('header')
