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
			<h1 class="titulo">Subir Foto</h1>
		</div>
	</header>
	
	<!--
		Atributo enctype sirve para que el formulario permita subir archivos, al no incluirlo no permitira archivos.
	!-->
	<div class="contenedor">
		<form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">

			<label for="foto"> Selecciona tu Foto </label>
			<input type="file" id="foto" name='foto'>

			<label for="titulo"> Titulo de la Foto </label>
			<input type="text" id="titulo" name='titulo'>

			<label for="texto"> Descripcion </label>
			<textarea name="texto" id="texto" placeholder="Descripcion de la Foto"></textarea>	

			<?php if(isset($error)): ?>
				<p class="error"> echo $error </p>
			<?php endif; ?>

			<input type="submit" class="submit" value="Subir Foto">		
		</form>
	</div>

	<footer>
		<p class="copyright"> Galeria Creada por Diana Bernal</p>
	</footer>

</body>
</html>