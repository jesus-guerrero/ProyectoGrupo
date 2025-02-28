<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/barrab.css">
		<link rel="stylesheet" href="menu2/estilos.css">
		<link rel="stylesheet" href="css/logo.css">




		<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
		integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer"
		/>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
		
		

		<title>Menu de Navegacion </title>
	</head>
	<body>

		<nav class="menu" id="menu">
			
				<div class="contenedor contenedor-botones-menu">
					<button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
					<button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
				</div>

				<div class="contenedor contenedor-enlaces-nav">
					<div class="btn-departamentos" id="btn-departamentos" style="font-size: 1.2em">
						<p>Todos los <span>Productos</span></p>
						<i class="fas fa-caret-down"></i>
				</div>

				
				
				<div class="cont-busqueda">
						<input class="imp" type="text" placeholder="Buscar">
						<!-- <div class="btn-b">
							<i class="fa fa-search"></i>
						</div> -->
						<button class="btn-b"><i class="fa fa-search"></i></button>
				</div>

				<div class="logo">
					<img width="80" src="img\transparente.png" style="border-radius: 25px;" alt="">		
					<img width="165" height="90" src="img\kuf.png" style="border-radius: 25px;" alt="">		
				</div>

				<div class="enlaces" >
					<a href="inicioSesion.php" style="font-size: 1.0em"><i class="fa-solid fa-door-open"></i> Iniciar Sesión</a>	
					<a href="home.php" style="font-size: 1.0em"><i class="fa-solid fa-house"></i> Home</a>
					<a href="compras.php" style="font-size: 1.0em"><i class="fa-solid fa-basket-shopping"></i> Compras</a>
					<a href="cerrar.php" style="font-size: 1.0em"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión</a>

				
				</div>
			</div>

			
			
			<div class="contenedor contenedor-grid">
				<div class="grid" id="grid">
					<div class="categorias">
						<button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
						<h3 class="subtitulo">Categorias</h3>

						<a href="#" data-categoria="tecnologia-y-computadoras">Resistencias <i class="fas fa-angle-right"></i></a>
						<a href="#" data-categoria="libros">Condensadores <i class="fas fa-angle-right"></i></a>
						<a href="#" data-categoria="ropa-y-accesorios">Leds <i class="fas fa-angle-right"></i></a>
						<a href="#" data-categoria="hogar-y-cocina">Kits de electrónica <i class="fas fa-angle-right"></i></a>

					</div>

					<div class="contenedor-subcategorias">
						<div class="subcategoria " data-categoria="tecnologia-y-computadoras">
							<div class="enlaces-subcategoria">
								<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
								<h3 class="subtitulo">Resistencias</h3>
								<a href="#">Es un componente eléctrico que se usa</a>
								<a href="#">para introducir una resistencia</a>
								<a href="#">electrica a un circuito que usualmente</a>
								<a href="#">convierte energia en calor.</a>
							</div>

							<div class="banner-subcategoria">
								<a href="#">
									<img src="menu2/imgmenu/resistencias.webp" alt="">
								</a>
							</div>

							<div class="galeria-subcategoria">
								<a href="#">
									<img src="menu2/imgmenu/resistencia-47-ohm-.webp" alt="">
								</a>
								<a href="#">
									<img src="menu2/imgmenu/resistencia-100h-1-2w-5.jpg" alt="">
								</a>
								<a href="#">
									<img src="menu2/imgmenu/resistencias-f.jpg" alt="">
								</a>
								<a href="#">
									<img src="menu2/imgmenu/resistencias-normalizadas.jpg" alt="">
								</a>
							</div>
						</div>

						<div class="subcategoria" data-categoria="libros">
							<div class="enlaces-subcategoria">
								<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
								<h3 class="subtitulo">Condensadores</h3>
								<a href="#">Es un dispositivo pasivo</a>
								<a href="#">capaz de almacenar energía</a>
								<a href="#">sustentando un campo</a>
								<a href="#">eléctrico.</a>
							</div>

							<div class="banner-subcategoria">
								<a href="#">
									<img src="menu2/imgmenu/cond1.jpg" alt="">
								</a>
							</div>

							<div class="galeria-subcategoria">
								<a href="#">
									<img src="menu2/imgmenu/cond2.jpg" alt="">
								</a>
								<a href="#">
									<img src="menu2/imgmenu/cond3.jpg" alt="">
								</a>
								<a href="#">
									<img src="menu2/imgmenu/cond4.webp" alt="">
								</a>
								<a href="#">
									<img src="menu2/imgmenu/cond5.webp" alt="">
								</a>
							</div>
						</div>

						<div class="subcategoria" data-categoria="ropa-y-accesorios">
							<div class="enlaces-subcategoria">
								<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
								<h3 class="subtitulo">Leds</h3>
								<a href="#">fuente de luz constituida por un​</a>
								<a href="#">material semiconductor dotado de</a>
								<a href="#">dos terminales. Se trata de un</a>
								<a href="#">diodo, que produce luz cuando</a>
								<a href="#">está activado.</a>
							</div>

							<div class="banner-subcategoria">
								<a href="#">
									<img src="menu2/imgmenu/leds4.webp" alt="">
								</a>
							</div>

							<div class="galeria-subcategoria">
								<a href="#">
									<img src="menu2/imgmenu/leds1.jpg" alt="">
								</a>
								<a href="#">
									<img src="menu2/imgmenu/leds2.jpg" alt="">
								</a>
								<a href="#">
									<img src="menu2/imgmenu/leds3.webp" alt="">
								</a>
								<a href="#">
									<img src="menu2/imgmenu/diodoled.jpg" alt="">
								</a>
							</div>
						</div>

						<div class="subcategoria" data-categoria="hogar-y-cocina">
							<div class="enlaces-subcategoria">
								<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
								<h3 class="subtitulo">Kits de electrónica</h3>
								<a href="#">es una mezcla de todo un poco</a>
								<a href="#">	-Protoboard</a>
								<a href="#">	-Resistencias</a>
								<a href="#">	-Condensadores</a>
								<a href="#">	-Leds</a>
							</div>

							<div class="banner-subcategoria">
								<a href="#">
									<img src="img/kit2.webp" alt="">
								</a>
							</div>

							<div class="galeria-subcategoria">
								<a href="#">
									<img src="img/kit1.webp" alt="">
								</a>
								<a href="#">
									<img src="img/kit3.webp" alt="">
								</a>
								<!-- <a href="#">
									<img src="" alt="">
								</a>
								<a href="#">
									<img src="" alt="">
								</a> -->
							</div>
						</div>

						<!-- <div class="subcategoria" data-categoria="juegos-y-juguetes">
							<div class="enlaces-subcategoria">
								<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
								<h3 class="subtitulo">Juegos y Juguetes</h3>
								<a href="#">Juguetes</a>
								<a href="#">Juegos de Mesa</a>
								<a href="#">Aire Libre</a>
								<a href="#">Muñecas</a>
							</div>

							<div class="banner-subcategoria">
								<a href="#">
									<img src="./img/juegos-banner-1.png" alt="">
								</a>
							</div>

							<div class="galeria-subcategoria">
								<a href="#">
									<img src="./img/juegos-galeria-1.png" alt="">
								</a>
								<a href="#">
									<img src="./img/juegos-galeria-2.png" alt="">
								</a>
								<a href="#">
									<img src="./img/juegos-galeria-3.png" alt="">
								</a>
								<a href="#">
									<img src="./img/juegos-galeria-4.png" alt="">
								</a>
							</div>
						</div>

						<div class="subcategoria" data-categoria="salud-y-belleza">
							<div class="enlaces-subcategoria">
								<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
								<h3 class="subtitulo">Salud y Belleza</h3>
								<a href="#">Cuidado de la Piel</a>
								<a href="#">Maquillaje</a>
								<a href="#">Lociones</a>
								<a href="#">Shampoo</a>
							</div>

							<div class="banner-subcategoria">
								<a href="#">
									<img src="./img/belleza-banner-1.png" alt="">
								</a>
							</div>

							<div class="galeria-subcategoria">
								<a href="#">
									<img src="./img/belleza-galeria-1.png" alt="">
								</a>
								<a href="#">
									<img src="./img/belleza-galeria-2.png" alt="">
								</a>
								<a href="#">
									<img src="./img/belleza-galeria-3.png" alt="">
								</a>
								<a href="#">
									<img src="./img/belleza-galeria-4.png" alt="">
								</a>
							</div>
						</div>

						<div class="subcategoria" data-categoria="alimentos-y-bebidas">
							<div class="enlaces-subcategoria">
								<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
								<h3 class="subtitulo">Alimentos y Bebidas</h3>
								<a href="#">Alimentos</a>
								<a href="#">Bebidas</a>
							</div>

							<div class="banner-subcategoria">
								<a href="#">
									<img src="./img/comida-banner-1.png" alt="">
								</a>
							</div>

							<div class="galeria-subcategoria">
								<a href="#">
									<img src="./img/comida-galeria-1.png" alt="">
								</a>
								<a href="#">
									<img src="./img/comida-galeria-2.png" alt="">
								</a>
								<a href="#">
									<img src="./img/comida-galeria-3.png" alt="">
								</a>
								<a href="#">
									<img src="./img/comida-galeria-4.png" alt="">
								</a>
							</div>
						</div> -->
					</div>
				</div>
			</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
		<script src="menu2/main.js"></script>
		</nav>


		<main class="contenedor">
			<article>
	