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
    <hr class="my-6">
    <footer
  class="text-center lg:text-left ">
  <div class="text-center text-neutral-700 dark:text-neutral-200">
    <p>Copyright © 2023 | Todos los derechos reservados</p>
  </div>
</footer>
  </body>
@yield('footer')