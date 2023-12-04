@extends('header')
@section('header')
<main class="main2 overflow-x-hidden snap-y snap-mandatory relative h-screen overflow-y-auto overflow-x-hidden scroll-smooth text-slate-300 ">
    <section class="snap-center h-screen">
    <div
          class="relative overflow-hidden bg-cover bg-no-repeat"
          style="
            background-position: 50%;
            background-image: url('{{asset('img/fondo2.png')}}');
            height: 800px;
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
                 Nuestros<br/><span>Juegos</span>
                </h1>
                <a
                  class="rounded border-2 border-neutral-50 px-[46px] pt-[14px] pb-[12px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out
                  hover:border-neutral-100 hover:bg-neutral-100 hover:text-slate-800"
                  data-te-ripple-init
                  data-te-ripple-color="light"
                  href="#carousel"
                >
                  Ver Juegos
                </a>
              </div>
            </div>
          </div>
        </div>
    </section>
        <section class="carousel snap-center h-screen pt-10" id="carousel">
            <div class="carrusel-list" id="carrusel-list">
                <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                        class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                        </path>
                    </svg>
                </button>
                <div class="carrusel-track" id="track">
                    <section class="carrusel">
                        <div>
                            <a href="games/OnePiece">
                                <article>
                                    <img src="{{asset('img/op/vertical.jpg')}}" alt="imagen">
                                    <img src="{{asset('img/op/main.png')}}" alt="">
                                </article>
                            </a>
                        </div>
                    </section>
                    <section class="carrusel">
                        <div>
                            <a href="games/AoAshi">
                                <article>
                                    <img src="{{asset('img/ao/vertical.jpg')}}" alt="imagen">
                                    <img src="{{asset('img/ao/main.jpg')}}" alt="">
                                </article>
                            </a>
                        </div>
                    </section>
                    <section class="carrusel">
                        <div>
                            <a href="games/JujutsuKaisen">
                                <article>
                                <img src="{{asset('img/jk/vertical.png')}}" alt="imagen">
                                <img src="{{asset('img/jk/main.png')}}" alt="">
                                </article>
                            </a>
                        </div>
                    </section>
                    <section class="carrusel">
                        <div>
                            <a href="games/Haikyuuu">
                                <article>
                                <img src="{{asset('img/hk/vertical.png')}}" alt="imagen">
                                <img src="{{asset('img/hk/main.png')}}" alt="">
                                </article>
                            </a>
                        </div>
                    </section>
                    <section class="carrusel">
                        <div>
                            <a href="games/SoloLeveling">
                                <article>
                                <img src="{{asset('img/sl/vertical.jpeg')}}" alt="imagen">
                                <img src="{{asset('img/sl/main.png')}}" alt="">
                                </article>
                            </a>
                        </div>
                    </section>
                    <section class="carrusel">
                        <div>
                            <a href="games/Slime">
                                <article>
                                <img src="{{asset('img/tssdk/vertical.jpg')}}" alt="imagen">
                                <img src="{{asset('img/tssdk/slime.png')}}" alt="">
                                </article>
                            </a>
                        </div>
                    </section>
                    <section class="carrusel">
                        <div>
                            <a href="games/FoodWars">
                                <article>
                                <img src="{{asset('img/fw/vertical.webp')}}" alt="imagen">
                                <img src="{{asset('img/fw/main.png')}}" alt="">
                                </article>
                            </a>
                        </div>
                    </section>
                    <section class="carrusel">
                        <div>
                            <a href="games/TateNoYuusha">
                                <article>
                                <img src="{{asset('img/tny/vertical.png')}}" alt="imagen">
                                <img src="{{asset('img/tny/main.png')}}" alt="">
                                </article>
                            </a>
                        </div>
                    </section>
                    <section class="carrusel">
                        <div>
                            <a href="games/BlueLock">
                                <article>
                                <img src="{{asset('img/bl/vertical.png')}}" alt="imagen">
                                <img src="{{asset('img/bl/main.png')}}" alt="">
                                </article>
                            </a>
                        </div>
                    </section>
                    <section class="carrusel">
                        <div>
                            <a href="games/Overlord">
                                <article>
                                <img src="{{asset('img/ol/vertical.png')}}" alt="imagen">
                                <img src="{{asset('img/ol/main.png')}}" alt="">
                                </article>
                            </a>
                        </div>
                    </section>
                    <section class="carrusel">
                        <div>
                            <a href="games/KurokoNoBasquet">
                                <article>
                                <img src="{{asset('img/knb/vertical.png')}}" alt="imagen">
                                <img src="{{asset('img/knb/main.png')}}" alt="">
                                </article>
                            </a>
                        </div>
                    </section>
                </div>
                <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button>
            </div>
        </section>
      </main>
    <link rel="stylesheet" href="{{asset('css/gamess.css')}}">
    <hr class="my-6">
		  <footer
  class="text-center lg:text-left py-4">
  <div class="text-center text-neutral-700 dark:text-neutral-200">
    <p>Copyright © 2023 | Todos los derechos reservados</p>
  </div>
</footer>
<script src="{{asset('js/script.js')}}"></script>
@endsection
