<!DOCTYPE html>
<html lang="es">
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cansue</title>
    <link rel="shortcut icon" href="{{asset('img/logo-white.svg')}}" type="image/x-icon" />
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
    <style>
      section .zoom:hover img {
        transform: scale(1.1);
      }
    </style>
    </head>
<body class="font-inter bg-gray-900 h-screen">
    <header>
      <nav
        class="relative flex w-full flex-wrap items-center justify-between py-2 text-neutral-500 shadow-lg hover:text-neutral-700 lg:py-4"
        data-te-navbar-ref
      >
        <div class="flex w-full flex-wrap items-center justify-between px-3">
          <div>
            <a
              class="mx-2 my-1 flex items-center text-neutral-900 hover:text-neutral-900 lg:mb-0 lg:mt-0"
              href="#"
            >
              <img
                class="mr-2"
                src="{{asset('img/logo-white.svg')}}"
                alt="logo"
                loading="lazy"
              />
            </a>
          </div>
          <div
            class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
            id="navbarSupportedContent4"
            data-te-collapse-item
          >
            <ul
              class="list-style-none mr-auto flex flex-col pl-0 lg:mt-1 lg:flex-row"
              data-te-navbar-nav-ref
            >
              <li
                class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1"
                data-te-nav-item-ref
              >
                <a
                  class="text-neutral-200 hover:border-b-2 p-2 text-xl"
                  aria-current="page"
                  href="{{ url('/home') }}"
                  data-te-nav-link-ref
                  >Cansue</a
                >
              </li>
            </ul>
            <div class="flex items-center">
              <a
                href="{{ url('/games') }}"
                class="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-slate-300 transition duration-150 ease-in-out   hover:text-slate-800 hover:bg-slate-50  motion-reduce:transition-none"
              >
                Juegos
              </a>
              <a
              href="{{ url('/contact') }}"
              class="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-slate-300 transition duration-150 ease-in-out   hover:text-slate-800 hover:bg-slate-50  motion-reduce:transition-none"
            >
              Contacto
            </a>
            <a
            href="{{ url('/us') }}"
            class="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-slate-300 transition duration-150 ease-in-out   hover:text-slate-800 hover:bg-slate-50  motion-reduce:transition-none"
          >
            Quienes Somos
          </a>
          @auth
          <a
          href="{{ url('/logout') }}"
          class="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-slate-700 transition duration-150 ease-in-out  motion-reduce:transition-none bg-slate-50 hover:bg-dark hover:text-white hover:border"
        >
          Cerrar Sesion
        </a>
        @endauth
          @guest
          <a
          href="{{ url('/login') }}"
          class="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-slate-700 transition duration-150 ease-in-out  motion-reduce:transition-none bg-slate-50 hover:bg-dark hover:text-white hover:border"
        >
          Inicia Sesion
        </a>
        @endguest
              <a
                href="https://github.com/Canteroxx/landinCansue"
                target="_blank"
                data-te-ripple-init
                data-te-ripple-color="light"
                class="mr-3 inline-block rounded px-3 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg motion-reduce:transition-none"
              >
                <!-- GitHub -->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-4"
                  fill="white"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </nav>
    </header>
	@yield('header')
</body>