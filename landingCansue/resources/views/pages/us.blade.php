@extends('header')

@section('header')
<main 
		  class="snap-y snap-mandatory relative w-full h-full overflow-y-auto overflow-x-hidden scroll-smooth text-slate-300">
			<section class="snap-center h-screen">
			  <div class="h-screen px-20 flex flex-row items-center justify-center">
				<!-- Tarjetas -->
				<section class="mx-20 my-8 align">
					<h2 class="mb-12 text-3xl font-bold text-gray-300 text-center">
						Conoce al <u class="text-slate-100">equipo</u>
					  </h2>
					  <div class="grid gap-x-6 lg:gap-x-12 m-20">
						<!-- Tarjeta Joaco -->
						<div class="mb-6 lg:mb-0">
						  <div
							class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]">
							<div class="relative overflow-hidden bg-cover bg-no-repeat ">
								<img src="{{asset('img/team/pasterox.jpeg')}}" class="w-full rounded-t-lg" />
							  <svg class="absolute text-white left-0 bottom-0" xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 1440 320">
								<path fill="currentColor"
								  d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
								</path>
							  </svg>
							</div>
							<div class="p-6">
							  <h5 class="mb-4 text-lg font-bold text-slate-900">Joaquin Cantero</h5>
							  <p class="mb-4 text-neutral-800">Fundador</p>
							  <ul class="mx-auto flex list-inside justify-center">
								<a href="https://github.com/Canteroxx" class="px-2" target="_blank">
								  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
									class="h-6 w-6 text-slate-800">
									<path fill="currentColor"
									  d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
								  </svg>
								</a>
								<a href="https://www.instagram.com/canteroxx/" class="px-2" target="_blank">
								  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
								  class="h-6 w-6 text-slate-800">
								  <path fill="currentColor"
									d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
								</svg>
								</a>
							  </ul>
							</div>
						  </div>
						</div>
					  </div>
				  </section>
			  </div>
			</section>
			<!-- Info -->
			<section class="nosotros snap-center h-screen">
			<div class="h-screen p-20 pl-20 pr-20 pb-40 flex flex-row">
					<article class="flex flex-col ml-10 gap-10">
						<hr><h1 class="text-3xl">¿Quienes Somos?</h1> <hr>
						<p class="Nostros2">Cansue se fundo en 2025 con la intencion de desarrolla, publicar y apoyar el mundo
					de los videojuegos. En el año 2029 Lanzamos oficialmente nuestro primer video juego reconocido como, 
					<b>BlueLock</b> el cual se va conviertiendo poco a poco
					en uno de los videojuegos más exitosos en la gistoria del Gaming. <br><br>
					Con el poco tiempo desde que lanzamos <b>BLK</b>, intentamos cada dia hacer evolucionar el juego, al mismo
					tiempo que ofrecemos nuevas experiencias a los jugadores, y no solo con <b>BLK</b> tambien trabajamos en	
					otros videojuegos como <b>Ao Ashi</b>,  <b>One Piece</b>,  <b>Solo Leveling</b>, entre otros. <br><br>

					La empresa <a class="Los" href="">Cansue</a> fue fundada por el estudiante de Ingenieria civil en informatica de la Universidad Catolica de Temuco
					<i><b>Joaquin Cantero Olivera</b></i>  quien decidio aventurarse estudiando e investigando sobre el desarrollo de los videojuegos.
					La empresa Cansue tiene más de 3000 empleados y más de 15 oficinas por todo el mundo, pero su oficina principal se ubica en Temuco, Provincia de Cautin.
					Tras 5 años de su creacion estuvo incluida en numerosas listas como "100 mejores empresas para las que trabajar", "25 empresas para las que trabajar en el
					sector tecnologico", "100 mejores lugares de trabajo para millenials" entre otras. 
				</p>
					</article>
				</div>
			</section>
			<section class="nosotros snap-center h-screen">
				<div class="h-screen p-20 pl-20 pr-20 pb-40 flex flex-row">
					<article class="flex flex-col ml-10 gap-10">
						<hr> <h1 class="text-3xl">Buscamos Alegrar vidas</h1> <hr>
						<p class="Nostros2">Desde la creación del primer videojuego en 1952, la industria ha experimentado una evolución extraordinaria. Lo que comenzó como una forma de entretenimiento ha evolucionado hasta convertirse en una plataforma multifacética que va más allá de simplemente jugar.</p>
						<p class="Nostros2">Los primeros videojuegos eran simples y directos, destinados principalmente a proporcionar entretenimiento y distracción. Se centraban en la competencia y la habilidad, ofreciendo una experiencia novedosa para los jugadores de la época. Pero 
						con el tiempo, los desarrolladores comenzaron a explorar géneros que no solo desafiaban las habilidades del jugador, sino que también ofrecían experiencias relajantes. Juegos con entornos inmersivos, música tranquila y mecánicas relajantes se convirtieron en una opción para aquellos que buscaban escapar del estrés diario.
						</p>
						<p class="Nostros2">La narrativa en los videojuegos se volvió más compleja, permitiendo a los jugadores sumergirse en historias ricas en emociones. Algunos juegos se convirtieron en medios poderosos para que las personas expresaran y exploraran sus propias emociones. Desde la euforia de una victoria hasta la tristeza de una derrota, los videojuegos proporcionaron un espacio seguro para experimentar y procesar emociones.</p>
					</article>
				</div>
			</section>
			<section class="nosotros snap-center h-screen">
			<div class="h-screen p-20 pl-40 pr-20 pb-40	items-center justify-center">
			<h4><strong>Cantidad de registros de usuarios desde la publicacion del juego</strong></h4>
			<p class="Nostros3">(Las X significan que en ese año el juego aún no salian)</p>
			<table class="table">
				<tr>
					<th class="pl-10 pr-10">Juegos</th>
					<th class="pl-2 pr-2">2029</th>
					<th class="pl-2 pr-2">2030</th>
					<th class="pl-2 pr-2">2031</th>
					<th class="pl-2 pr-2">2032</th>
					<th class="pl-2 pr-2">2033</th>
					<th class="pl-2 pr-2">2034</th>
					<th class="pl-2 pr-2">2035</th>
					<th class="pl-2 pr-2">2036</th>
					<th class="pl-2 pr-2">2037</th>
					<th class="pl-2 pr-2">2038</th>
					<th class="pl-2 pr-2">2039</th>
					<th class="pl-2 pr-2">2040</th>
				</tr>
				<tr>
					<td>Blue Lock</td>
					<td>10M</td>
					<td>15M</td>
					<td>20M</td>
					<td>25M</td>
					<td>30M</td>
					<td>40M</td>
					<td>50M</td>
					<td>60M</td>
					<td>30M</td>
					<td>80M</td>
					<td>90M</td>
					<td>100M</td>
				</tr>
				<tr>
					<td>Solo Leveling</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>5M</td>
					<td>10M</td>
					<td>20M</td>
					<td>50M</td>
					<td>10M</td>
					<td>80M</td>
					<td>100M</td>
					<td>120M</td>
				</tr>
				<tr>
					<td>One Piece</td>
					<td>X</td>
					<td>X</td>
					<td>15M</td>
					<td>10M</td>
					<td>20M</td>
					<td>50M</td>
					<td>30M</td>
					<td>40M</td>
					<td>70M</td>
					<td>90M</td>
					<td>100M</td>
					<td>80M</td>
				</tr>
				<tr>
					<td>Haikyuuu</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>30M</td>
					<td>50M</td>
					<td>80M</td>
					<td>100M</td>
					<td>120M</td>
					<td>150M</td>
				</tr>
				<tr>
					<td>Food Wars</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>10M</td>
					<td>60M</td>
					<td>80M</td>
					<td>50M</td>
					<td>100M</td>
					<td>90M</td>
					<td>120M</td>
					<td>155M</td>
				</tr>
				<tr>
					<td>Ao Ashi</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>30M</td>
					<td>50M</td>
					<td>70M</td>
					<td>60M</td>
					<td>50M</td>
					<td>80M</td>
					<td>100M</td>
					<td>250M</td>
					<td>200M</td>
				</tr>
				<tr>
					<td>Haikyuuu</td>
					<td>X</td>
					<td>30M</td>
					<td>40M</td>
					<td>10M</td>
					<td>15M</td>
					<td>100M</td>
					<td>70M</td>
					<td>50M</td>
					<td>80M</td>
					<td>100M</td>
					<td>190M</td>
					<td>120M</td>
				</tr>
				<tr>
					<td>Jujutsu Kaisen</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>X</td>
					<td>50M</td>
					<td>100M</td>
				</tr>
			</table> <br>
			<p class="Nostros2"> Como ven se puede observar un gran aumento en el registro de nuevos usuarios de algunos de nuestros juegos con el paso de los años y estas estadisticas
				son las que nos motivan cada dia para seguir trayendo juegos para seguir animando y divirtiendo a las personas.
			</p> <br> <hr>
			</div><br>
			</section>
		  </main>
		  <hr class="my-6">
		  <footer
  class="text-center lg:text-left py-4">
  <div class="text-center text-neutral-700 dark:text-neutral-200">
    <p>Copyright © 2023 | Todos los derechos reservados</p>
  </div>
</footer>
<link rel="stylesheet" href="{{asset('css/us.css')}}">
@endsection