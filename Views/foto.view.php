<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Galeria de Imagenes</title>
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link rel="stylesheet" href="CSS/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo"> Titulo de la Foto: <?php if (!empty($foto['titulo'])){
				echo $foto['titulo'];
				} else {
					echo $foto['imagen'];
					} ?></h1>
		</div>
	</header>

	<div class="contenedor">
		<div class="foto">
			<img src="Fotos/<?php echo $foto['ruta']; ?>" alt="">
			<p class="texto"> <?php echo $foto['texto']; ?> </p>
			<a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar </a>
		</div>
	</div>

	<footer>
		<p class="copyright"> Galeria Creada por Diana Bernal</p>
	</footer>

</body>
</html>